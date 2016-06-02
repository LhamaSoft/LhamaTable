package lhamatable.controller;

import java.sql.Date;

import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.ViewScoped;
import javax.faces.context.FacesContext;

import lhamatable.controller.Mesa;
import lhamatable.controller.dao.MesaDAO;
 
@ManagedBean(name = "MesaMB")
@ViewScoped
public class MesaManagedBean {
 
      private MesaDAO mesaDAO = new MesaDAO();
      private Mesa mesa = new Mesa();
      
      
      public String envia() {
            
            mesa = mesaDAO.getMesa(mesa.getId());
            if (mesa == null) {
                  mesa = new Mesa();
                  FacesContext.getCurrentInstance().addMessage(
                             null,
                             new FacesMessage(FacesMessage.SEVERITY_ERROR, "Mesa não encontrada!", ""));
                  return null;
            } else {
                  return "/main";
            }
            
            
      }
 
      public Mesa getMesa() {
            return mesa;
      }
 
      public void setMesa(Mesa mesa) {
            this.mesa = mesa;
      }
}
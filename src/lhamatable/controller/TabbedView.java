package lhamatable.controller;

import java.sql.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.*;
import javax.annotation.PostConstruct;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.context.FacesContext;
 
import org.primefaces.event.TabChangeEvent;
import org.primefaces.event.TabCloseEvent;
import lhamatable.controller.Mesa;
 
@ManagedBean
public class TabbedView {
     
    private List<Mesa> mesas;
    private byte image[];
 
    @PostConstruct
    public void init() {
        mesas = new ArrayList<Mesa>();
        mesas.add(new Mesa(01,"LhamaAdventure","123", "Aventuras de uma lhama"));
    }
     
    public List<Mesa> getMesas() {
        return mesas;
    }
     
    public void onTabChange(TabChangeEvent event) {
        FacesMessage msg = new FacesMessage("Tab Changed", "Active Tab: " + event.getTab().getTitle());
        FacesContext.getCurrentInstance().addMessage(null, msg);
    }
         
    public void onTabClose(TabCloseEvent event) {
        FacesMessage msg = new FacesMessage("Tab Closed", "Closed tab: " + event.getTab().getTitle());
        FacesContext.getCurrentInstance().addMessage(null, msg);
    }
}
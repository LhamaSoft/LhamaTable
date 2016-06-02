package lhamatable.controller.dao;

import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.NoResultException;
import javax.persistence.Persistence;
   
  import lhamatable.controller.Mesa;
   
  public class MesaDAO {
   
        private EntityManagerFactory factory = Persistence
                    .createEntityManagerFactory("mesas");
        private EntityManager em = factory.createEntityManager();
   
       
        public Mesa getMesa(int id) {
   
              try {
                    Mesa mesa = (Mesa) em
                               .createQuery(
                                           "SELECT u from Mesa u where u.id = :id")
                               .setParameter("id", id).getSingleResult();
   
                    return mesa;
              } catch (NoResultException e) {
                    return null;
              }
        }
   
      public boolean inserirMesa(Mesa mesa) {
              try {
                    em.persist(mesa);
                    return true;
              } catch (Exception e) {
                    e.printStackTrace();
                    return false;
              }
        }
        
        public boolean deletarMesa(Mesa mesa) {
              try {
                    em.remove(mesa);
                    return true;
              } catch (Exception e) {
                    e.printStackTrace();
                    return false;
              }
        }
   
  }
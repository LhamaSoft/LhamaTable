package lhamatable.controller;


import java.util.Date;
   
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
	   
@Entity
public class Mesa {
	        
	        @Id
	        @Column(name="id", nullable=false, unique=true)
	        private int id;
	        
	        @Column(name="tableName", nullable=false, unique=true)
	        private String nomeMesa;
	        
	        @Column(name="password", nullable=true, unique=false)
	        private String senha;
	   
	        @Column(name="lastAccess", unique=false)
	        @Temporal(TemporalType.DATE)
	        private Date ultimoAcesso;
	        
	        @Column(name="description", nullable=true, unique=false)
	        private String descricao;
	        
	        //provisório
	        @Column(name="image", nullable = false, unique=false)
	        private byte image[];
	        
	        public Mesa(int i, String string, String string2, String string3) {
				setId(id);
				setNomeMesa(string);
				setSenha(string2);
				setDescricao(string3);
			}

			public int getId(){
	        	return id;
	        }
	        
	        public void setId(int id){
	        	this.id = id;
	        }
	        
	        public String getNomeMesa() {
	              return nomeMesa;
	        }
	        
	        public void setNomeMesa(String nomeMesa) {
	              this.nomeMesa = nomeMesa;
	        }
	        
	        public String getSenha() {
	              return senha;
	        }
	        
	        public void setSenha(String senha) {
	              this.senha = senha;
	        }
	        
	        public Date getUltimoAcesso() {
	              return ultimoAcesso;
	        }
	        
	        public void setUltimoAcesso(Date ultimoAcesso) {
	              this.ultimoAcesso = ultimoAcesso;
	        }
	        
	        public String getDescricao(){
	        		return descricao;
	        }
	        
	        public void setDescricao(String descricao){
	        	this.descricao = descricao;
	        }
	        
	        public byte[] getImage(){
	        	return image;
	        }
	        
	        public void setImage(byte[] image){
	        	this.image = image;
	        }
}

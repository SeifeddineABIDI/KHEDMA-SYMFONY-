/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycomany.entities;

/**
 *
 * @author DELL
 */
public class Annonce {
    
     private int id,id_c,id_client;
    private String titre,nom_client;
    

    

    public Annonce() {
    }
public Annonce(int id,String titre, String nom_client,int id_c){
        this.id = id;
        this.titre = titre;
        this.nom_client = nom_client;
       
        this.id_c = id_c;
}
    public Annonce(String titre, String nom_client,int id_c) {
        this.titre = titre;
        this.nom_client = nom_client;
        
        this.id_c = id_c;
        
    }

    public Annonce(int id_c, int id_client, String titre, String nom_client) {
        this.id_c = id_c;
        this.id_client = id_client;
        this.titre = titre;
        this.nom_client = nom_client;
        
     
    }
    
    

    public int getId_client() {
        return id_client;
    }

    public void setId_client(int id_client) {
        this.id_client = id_client;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getNom_client() {
        return nom_client;
    }

    public void setNom_client(String nom_client) {
        this.nom_client = nom_client;
    }

   

    public int getId_c() {
        return id_c;
    }

    public void setId_c(int id_c) {
        this.id_c = id_c;
    }



    @Override
    public String toString() {
        return "Annonce{" + "id=" + id + ", id_c=" + id_c + ", id_client=" + id_client + ", titre=" + titre + ", nom_client=" + nom_client + '}';
    }

    
    
    
    
    
    
    
    
    
    
}
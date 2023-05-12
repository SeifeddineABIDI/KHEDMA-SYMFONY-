/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycomany.entities;



/**
 *
 * @author Safe
 */
public class Metier {
    private String nom,type,description,image;
    private int id;
    
    public Metier(){};
    public Metier(int id){
    this.id = id;
    }

    public Metier(String nom, String type, String description, String image, int id) {
        this.nom = nom;
        this.type = type;
        this.description = description;
        this.image = image;
        this.id = id;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }
    
    public Metier(String nom, String type, String description) {
        this.nom = nom;
        this.type = type;
        this.description = description;
    }
     public Metier(String nom) {
        this.nom = nom;
       
    }
     public Metier(int id,String nom, String type, String description) {
        this.id = id ;
        this.nom = nom;
        this.type = type;
        this.description = description;
    }
    public void setId(int id) {
        this.id = id;
    }

    public int getId() {
        return id;
    }
   

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setType(String type) {
        this.type = type;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getNom() {
        return nom;
    }

    public String getType() {
        return type;
    }

    public String getDescription() {
        return description;
    }


    
    @Override
    public String toString() {
        return "Metier{"+"id=" + id  + ", nom=" + nom + ", type=" + type + ", description=" + description + '}';
    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;
import java.util.Date;

/**
 *
 * @author msi
 */
public class Evenement {
    
    private int id;
    private String titreEve;
    private String descEve;
    private float prix;
    private String image;
    private Date date_debut;
    private String datee;
    private Date date_fin;
    private String datee_fin;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitreEve() {
        return titreEve;
    }

    public void setTitreEve(String titreEve) {
        this.titreEve = titreEve;
    }

    public String getDescEve() {
        return descEve;
    }

    public void setDescEve(String descEve) {
        this.descEve = descEve;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public Date getDate_debut() {
        return date_debut;
    }

    public void setDate_debut(Date date_debut) {
        this.date_debut = date_debut;
    }

    public String getDatee() {
        return datee;
    }

    public void setDatee(String datee) {
        this.datee = datee;
    }

    public Date getDate_fin() {
        return date_fin;
    }

    public void setDate_fin(Date date_fin) {
        this.date_fin = date_fin;
    }

    public String getDatee_fin() {
        return datee_fin;
    }

    public void setDatee_fin(String datee_fin) {
        this.datee_fin = datee_fin;
    }

  

}

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
public class Classification {
      private int id;
    private String nom,domaine;

    public Classification() {
    }

    public Classification(String nom, String domaine) {
        this.nom = nom;
        this.domaine = domaine;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getDomaine() {
        return domaine;
    }

    public void setDomaine(String domaine) {
        this.domaine = domaine;
    }

    @Override
    public String toString() {
        return "Classification{" +" nom=" + nom + ", domaine=" + domaine + '}';
    }
    
    
    
    
    
    
    
    
    
    
    
    
}


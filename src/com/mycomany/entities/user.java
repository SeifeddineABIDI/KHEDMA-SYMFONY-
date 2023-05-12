/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycomany.entities;

/**
 *
 * @author sarra
 */
public class user {
    
      private int id;
    private String nom;
    private String prenom;
    private String cin;
    private String email;
    private String tel;
    private String password;
    private int archive;
    public String adresse;
    public String image;
    public String github_username;
    public String role;
    public String github_token;
    public int is_verified;

    public user() {
    }

    public user(String nom, String prenom, String cin, String email, String tel, String password, int archive, String adresse, String image, String github_username, String role) {
        this.nom = nom;
        this.prenom = prenom;
        this.cin = cin;
        this.email = email;
        this.tel = tel;
        this.password = password;
        this.archive = archive;
        this.adresse = adresse;
        this.image = image;
        this.github_username = github_username;
        this.role = role;
    }

    public String getCin() {
        return cin;
    }

    public void setCin(String cin) {
        this.cin = cin;
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

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }


    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getTel() {
        return tel;
    }

    public void setTel(String tel) {
        this.tel = tel;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public int getArchive() {
        return archive;
    }

    public void setArchive(int archive) {
        this.archive = archive;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getGithub_username() {
        return github_username;
    }

    public void setGithub_username(String github_username) {
        this.github_username = github_username;
    }

    public String getRole() {
        return role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public String getGithub_token() {
        return github_token;
    }

    public void setGithub_token(String github_token) {
        this.github_token = github_token;
    }

    public int getIs_verified() {
        return is_verified;
    }

    public void setIs_verified(int is_verified) {
        this.is_verified = is_verified;
    }

    @Override
    public String toString() {
        return "user{" + "id=" + id + ", nom=" + nom + ", prenom=" + prenom + ", cin=" + cin + ", email=" + email + ", tel=" + tel + ", password=" + password + ", archive=" + archive + ", adresse=" + adresse + ", image=" + image + ", github_username=" + github_username + ", role=" + role + ", github_token=" + github_token + ", is_verified=" + is_verified + '}';
    }

  
    

   
    
    
}

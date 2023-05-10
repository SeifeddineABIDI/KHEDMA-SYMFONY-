/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkManager;
import com.codename1.io.Storage;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.List;
import com.codename1.ui.TextField;
import com.codename1.ui.util.Resources;
import com.mycomany.entities.Projet;
import com.mycomany.entities.user;
import com.mycomany.utils.Statics;
import com.mycompany.gui.ProfileForm;
import com.mycompany.gui.SessionManager;
import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.Map;
import java.util.Vector;

/**
 *
 * @author sarra
 */
public class ServiceUser {
    //singleton 

    public static ServiceUser instance = null;

    public static boolean resultOk = true;
    String json;

    //initilisation connection request 
    private ConnectionRequest req;

    public static ServiceUser getInstance() {
        if (instance == null) {
            instance = new ServiceUser();
        }
        return instance;
    }

    public ServiceUser() {
        req = new ConnectionRequest();

    }
    //Signup

    public void signup(TextField nom, TextField prenom, TextField num_tel, TextField adresse, TextField email, TextField password, TextField cin, ComboBox<String> role, TextField github_username, Resources res) {

        String url = Statics.BASE_URL + "/addoneone?email=" + email.getText().toString() + "&password=" + password.getText().toString() + "&nom=" + nom.getText().toString() + "&prenom=" + prenom.getText().toString() + "&role=" + role.getSelectedItem().toString() + "&cin=" + cin.getText().toString() + "&adresse=" + adresse.getText().toString() + "&telephone=" + num_tel.getText().toString() + "&github_username=" + github_username.getText().toString();
        req = new ConnectionRequest(url, false); //false ya3ni url mazlt matba3thtich lel server    
        req.setUrl(url);
        System.out.println(url);
        if (nom.getText().equals("") || password.getText().equals("") && email.getText().equals("")) {
            Dialog.show("Erreur", "Veuillez remplir les champs", "OK", null);
        }
         req.addResponseListener((e) -> {
            JSONParser j = new JSONParser();
            String json = new String(req.getResponseData()) + "";
            try {
                System.out.println("data ==" + json);
                

                   
                    /*   user myObject = (user) Storage.getInstance().readObject("myObjectKey");
                        System.out.println("test"+myObject);*/
                
            } catch (Exception ex) {
                ex.printStackTrace();
            }

        });

        //ba3d execution ta3 requete ely heya url nestanaw response ta3 server.
        NetworkManager.getInstance().addToQueueAndWait(req);
    }
    public void signin(TextField email, TextField password, Resources rs) {
        String url = Statics.BASE_URL + "/loginM?email=" + email.getText().toString() + "&password=" + password.getText().toString();
        req = new ConnectionRequest(url, false); //false ya3ni url mazlt matba3thtich lel server
        req.setUrl(url);
        req.addResponseListener((e) -> {
            JSONParser j = new JSONParser();
            String json = new String(req.getResponseData()) + "";
            try {
                System.out.println("data ==" + json);
                Map<String, Object> user = (Map<String, Object>) j.parseJSON(new CharArrayReader(json.toCharArray()));
                if (user.size() == 1) {
                    Dialog.show("Echec d'authentification", "Username ou mot de passe éronné", "OK", null);
                } else {

                    user user1 = new user();
                    user1.setNom(user.get("nom").toString());
                    user1.setPrenom((String) user.get("prenom"));
                    user1.setCin((String) user.get("cin"));
                    user1.setAdresse((String) user.get("adresse"));
                    user1.setTel(Integer.toString(Double.valueOf((double) user.get("telephone")).intValue()));
                    user1.setImage((String) user.get("image"));
                    user1.setGithub_username((String) user.get("githubUsername"));
                    user1.setGithub_token((String) user.get("githubToken"));
                    user1.setEmail((String) user.get("email"));
                    user1.setId(Double.valueOf((double) user.get("id")).intValue());
                    user1.setRole((String) user.get("role"));
                    Storage.getInstance().writeObject("myObjectKey", user1);
                    System.out.println("user1" + user1);
                    /*   user myObject = (user) Storage.getInstance().readObject("myObjectKey");
                        System.out.println("test"+myObject);*/
                    new ProfileForm(rs).show();
                }
            } catch (Exception ex) {
                ex.printStackTrace();
            }

        });

        //ba3d execution ta3 requete ely heya url nestanaw response ta3 server.
        NetworkManager.getInstance().addToQueueAndWait(req);
    }

    public void edit(int id,TextField nom, TextField prenom, TextField num_tel, TextField adresse, TextField cin, TextField github_username, Resources res) {
        String url = Statics.BASE_URL + "/users/"+id+"/editJson?&nom=" + nom.getText().toString() + "&prenom=" + prenom.getText().toString() +"&cin=" + cin.getText().toString() + "&adresse=" + adresse.getText().toString() + "&telephone=" + num_tel.getText().toString() + "&github_username=" + github_username.getText().toString();
        req = new ConnectionRequest(url, false); //false ya3ni url mazlt matba3thtich lel server    
        req.setUrl(url);
        System.out.println(url);
        if (nom.getText().equals("") || prenom.getText().equals("") && num_tel.getText().equals("")) {
            Dialog.show("Erreur", "Veuillez remplir les champs", "OK", null);
        }
         req.addResponseListener((e) -> {
            JSONParser j = new JSONParser();
            String json = new String(req.getResponseData()) + "";
            try {
                System.out.println("data ==" + json);
                

                   
                    /*   user myObject = (user) Storage.getInstance().readObject("myObjectKey");
                        System.out.println("test"+myObject);*/
                
            } catch (Exception ex) {
                ex.printStackTrace();
            }

        });

        //ba3d execution ta3 requete ely heya url nestanaw response ta3 server.
        NetworkManager.getInstance().addToQueueAndWait(req);
    }
    
    

public ArrayList<Projet> affiche(Resources rs) {
    String url = Statics.BASE_URL + "/projetmobile";
    req = new ConnectionRequest(url, false);
    req.setUrl(url);
    
    ArrayList<Projet> projectList = new ArrayList<>(); // Create a list to store the projects
    
    req.addResponseListener((e) -> {
        JSONParser parser = new JSONParser();
        try {
            String json = new String(req.getResponseData(), "UTF-8");
            System.out.println("data ==" + json);

            Map<String, Object> response = parser.parseJSON(new CharArrayReader(json.toCharArray()));

            // Assuming the JSON data contains an array of projects
            List<Map<String, Object>> projectsData = (List<Map<String, Object>>) response.get("projects");
            
            // Iterate over the projects and create Project objects
            for (Map<String, Object> projectData : projectsData) {
                Project project = new Project();
                project.setName((String) projectData.get("nom"));
                project.setDomaine((String) projectData.get("domaine"));
                project.setFreelancer((String) projectData.get("freelancer"));
                // Set other project properties
                
                projectList.add(project); // Add the project to the list
            }
        } catch (IOException ex) {
            ex.printStackTrace();
        }
    });
    
    // Send the network request
    NetworkManager.getInstance().addToQueueAndWait(req);
    
    return projectList; // Return the list of projects
}


    
    
    
    
    

}

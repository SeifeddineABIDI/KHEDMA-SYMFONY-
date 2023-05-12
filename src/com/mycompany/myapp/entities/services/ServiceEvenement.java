/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.FileSystemStorage;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.messaging.Message;
import com.codename1.ui.Display;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Evenement;

import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.io.OutputStream;
import java.util.Date;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author msi
 */
public class ServiceEvenement {

    public ArrayList<Evenement> evenement;
    //singleton
    public static ServiceEvenement instance=null;
    public boolean resultOK;
    //initialistion req conx 
    private ConnectionRequest req;
    public ServiceEvenement() {
         req = new ConnectionRequest();
    }

    public static ServiceEvenement getInstance() {
        if (instance == null) {
            instance = new ServiceEvenement();
        }
        return instance;
    }
    


    public ArrayList<Evenement> parseEvenements(String jsonText){
                try {

                    System.out.println(jsonText);
            evenement=new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String,Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            List<Map<String,Object>> list = (List<Map<String,Object>>)tasksListJson.get("root");
            for(Map<String,Object> obj : list){
                Evenement a = new Evenement();
                                
                                

                a.setId((int) Float.parseFloat(obj.get("idEve").toString()));                
                a.setTitreEve(obj.get("titreEve").toString());     
                try {  
                   Date date1=new SimpleDateFormat("yyyy-MM-dd").parse(obj.get("dateDebEve").toString());
                    a.setDate_debut(date1);
                        } catch (ParseException ex) {
                           System.out.println(ex);
                        }
                                try {  
                   Date datem=new SimpleDateFormat("yyyy-MM-dd").parse(obj.get("dateFinEve").toString());
                    a.setDate_fin(datem);
                        } catch (ParseException ex) {
                           System.out.println(ex);
                        }
                a.setDescEve(obj.get("descEve").toString());
                a.setImage(obj.get("image").toString());
                a.setPrix((float) Float.parseFloat(obj.get("prix").toString()));


                evenement.add(a);
            }
        } catch (IOException ex) {
            
        }
        return evenement;
    }
    public ArrayList<Evenement> getAllEvenements(){
        String url = Statics.BASE_URL+"evenement/mobile/all";
       System.out.print(url);
        req.setUrl(url);
        req.addResponseListener(new com.codename1.ui.events.ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                evenement = parseEvenements(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        com.codename1.io.NetworkManager.getInstance().addToQueueAndWait(req);
        return evenement;
    }


public boolean addEvenement(Evenement u) {
    String url = Statics.BASE_URL + "evenement/mobile/add?titreEve=" 
            + u.getTitreEve()
            + "&dateDebEve=" + new SimpleDateFormat("yyyy-MM-dd").format(u.getDatee())
            + "&descEve=" + u.getDescEve()
            + "&image=" + u.getImage()
            + "&dateFinEve=" + new SimpleDateFormat("yyyy-MM-dd").format(u.getDatee_fin())
            + "&prix=" + u.getPrix(); // création de l'URL
    ConnectionRequest req = new ConnectionRequest();
    req.setUrl(url);
    System.out.println(url);
    //reponse mtaa json eli kif testit fi navigateur
    req.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
            resultOK = req.getResponseCode() == 200; // Code HTTP 200 OK
            req.removeResponseListener(this);
        }
    });
    NetworkManager.getInstance().addToQueueAndWait(req); //execution mtaa request sinn yetaada chaay dima nalkawha
    return resultOK;
}


        public boolean editEvenement(Evenement u) {
    String url = Statics.BASE_URL + "evenement/mobile/edit/" + u.getId() + "?titreEve="  + u.getTitreEve()
            + "&dateDebEve=" + new SimpleDateFormat("yyyy-MM-dd").format(u.getDatee())
            + "&descEve=" + u.getDescEve()
            + "&image=" + u.getImage()
            + "&dateFinEve=" + new SimpleDateFormat("yyyy-MM-dd").format(u.getDatee_fin())
            + "&prix=" + u.getPrix(); // création de l'URL

    req.setUrl(url);
    req.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
            resultOK = req.getResponseCode() == 200; // HTTP OK status
            req.removeResponseListener(this);
        }
    });
    NetworkManager.getInstance().addToQueueAndWait(req);
    return resultOK;
    }

    public boolean deleteEvenement(int id) {
    String url = Statics.BASE_URL + "evenement/mobile/delete/" + id;
    req.setUrl(url);
    req.setHttpMethod("DELETE");
    req.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
            resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
            req.removeResponseListener(this);
        }
    });
    NetworkManager.getInstance().addToQueueAndWait(req);
    return resultOK;
    }
    
    public boolean pdf() {
    String url = Statics.BASE_URL + "evenement/pdf";
    ConnectionRequest req = new ConnectionRequest();
    req.setUrl(url);
    req.setHttpMethod("GET");
    System.out.println(url);
    req.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
            byte[] data = (byte[]) req.getResponseData();
            try {
                String filePath = FileSystemStorage.getInstance().getAppHomePath() + "evenement.pdf";
OutputStream os = FileSystemStorage.getInstance().openOutputStream(filePath);

                os.write(data);
                os.close();
                // Display the PDF file using the default PDF viewer
                Display.getInstance().execute(filePath);
            } catch (IOException e) {
                e.printStackTrace();
            }
            resultOK = req.getResponseCode() == 200; 
            req.removeResponseListener(this);
        }
    });
    NetworkManager.getInstance().addToQueueAndWait(req);
    return resultOK;
}
    

}

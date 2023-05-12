/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.services;

import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Classification;
import com.mycompany.myapp.gui.HomeForm;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.Date;



/**
 *
 * @author mfmma
 */
public class ServiceClassification {
    
    private ConnectionRequest serv;
    public ArrayList<Classification> service;

    public static ServiceClassification instance = null;
    public boolean resultOK;

    public ServiceClassification() {
        serv = new ConnectionRequest();
    }

        public static ServiceClassification getInstance() {
        if (instance == null) {
            instance = new ServiceClassification();
        }
        return instance;
    }
    
    
    
    public boolean ajoutService(Classification service){
        
        String nom=service.getNom();
        String domaine=service.getDomaine();
       // String titreS=service.getTitreS();
       // String dateS = service.getDateS();
        
        String url = Statics.BASE_URL+"/classification/addclassificationJSON/new/?nom="+service.getNom()+"&domaine="+service.getDomaine();
//String url="classification/addclassificationJSON/new?nom=peinture&domaine=art";
        serv.setUrl(url);
        serv.setPost(false);
        
       serv.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = serv.getResponseCode() == 200; //Code HTTP 200 OK
                serv.removeResponseListener(this);
            }
        });
        
 
        
        //Execution de la request
        NetworkManager.getInstance().addToQueueAndWait(serv);
        return resultOK;

}
     
    
    public Map<String, Object> getAllServices() {
        
    serv = new ConnectionRequest();
    String url = Statics.BASE_URL+"/classification/all/Allclassifications";
    serv.setUrl(url);
    serv.setPost(false);
    final Map<String, Object>[] response = new Map[]{null};
    serv.addResponseListener(new ActionListener<NetworkEvent>() {
        @Override
        public void actionPerformed(NetworkEvent evt) {
            JSONParser j = new JSONParser();
            serv.removeResponseListener(this);
            String json = new String(serv.getResponseData()) + "";
            try {
                response[0] = j.parseJSON(new CharArrayReader(json.toCharArray()));
            } catch(Exception ex) {
                ex.printStackTrace();
            }
        }
    });
    NetworkManager.getInstance().addToQueueAndWait(serv);
    return response[0];
}
    
    public boolean deleteService(int id) {
       System.out.println(id);
        String url = Statics.BASE_URL + "/classification/deleteclassificationJSON/"+id;

        serv.setUrl(url);
        serv.setPost(false);
        
        serv.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = serv.getResponseCode() == 200; //Code HTTP 200 OK
                serv.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(serv);
        return resultOK;
    }
    /*
    public boolean deleteService(int id) {
    String url = Statics.BASE_URL + "api/deleteService/" + id;

    ConnectionRequest request = new ConnectionRequest();
    request.setUrl(url);
    request.setHttpMethod("DELETE");

    NetworkManager.getInstance().addToQueueAndWait(request);

    int responseCode = request.getResponseCode();
    return responseCode == 204;
}*/

//    
//    public boolean modifierService(Service t) {
//        String titreS = t.getTitreS();
//        
//        String url= "http://127.0.0.1:8000/"+"api/updateService?titreS="+t.getTitreS()+"&descriptionS="+t.getDescriptionS()+ "&typeS="+t.getTypeS()+"&dateS="+t.getDateS();
//        serv.setUrl(url);
//        
//        serv.addResponseListener(new ActionListener<NetworkEvent>() {
//            @Override
//            public void actionPerformed(NetworkEvent evt) {
//                resultOK = serv.getResponseCode() == 200 ;  
//                serv.removeResponseListener(this);
//            }
//        });
//        
//    NetworkManager.getInstance().addToQueueAndWait(serv);
//    return resultOK;
//        
//    }
    
     //Modif service
  /*  public void modifierService(Classification service) {
        
              String url= "http://127.0.0.1:8000/"+"updateclassificationJSON?nom="+service.getNom()+"&domaine="+service.getDomaine();

        
        if(service.getNom().isEmpty() || service.getDomaine().isEmpty()) {
            
            Dialog.show("Erreur","Veuillez remplir tous les champs","OK",null);
            
        }else{
        serv.setUrl(url);
        serv.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
            String str = new String(serv.getResponseData());//Respnse json
            System.out.println("data == "+str);
            

                Dialog.show("Success","Client modifier avec succes!","OK",null);
                new HomeForm().show();
                serv.removeResponseListener(this);
            }
        });
        }
        
        NetworkManager.getInstance().addToQueueAndWait(serv);//execution de req
        
    } */
    //Update 
    public boolean modifierProduit(Classification p) {
        String url = Statics.BASE_URL +"/classification/updateclassificationJSON/"+p.getId()+"?nom="+p.getNom()+"&domaine="+p.getDomaine(); 
        serv.setUrl(url);

        serv.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = serv.getResponseCode() == 200;  // Code response Http 200 ok
                serv.removeResponseListener(this);
            }
        });

        NetworkManager.getInstance().addToQueueAndWait(serv);//execution ta3 request sinon yet3ada chy dima nal9awha
        return resultOK;

    }
    
  
}

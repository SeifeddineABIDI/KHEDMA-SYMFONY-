/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.mycomany.entities.SousMetier;
import com.mycomany.utils.Statics;


import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Nasr
 */
public class ServiceSousMetier {

    //singleton 
    public static ServiceSousMetier instance = null;

    public static boolean resultOk = true;

    //initilisation connection request 
    private ConnectionRequest req;

    public static ServiceSousMetier getInstance() {
        if (instance == null) {
            instance = new ServiceSousMetier();
        }
        return instance;
    }

    public ServiceSousMetier() {
        req = new ConnectionRequest();

    }

    
    public void ajoutSousMetier(SousMetier Place) {

        String url = Statics.BASE_URL + "/sousmetier/ajout/mobile?libelle=" + Place.getLibelle()+ "&domaine=" + Place.getDomaine()+ "&MetierId=" + Place.getIdm(); // aa sorry n3adi getId lyheya mech ta3 user ta3 Place

        req.setUrl(url);
                req.setHttpMethod("POST");

        req.addResponseListener((e) -> {

            String str = new String(req.getResponseData());//Reponse json hethi lyrinaha fi navigateur 9bila
            System.out.println("data == " + str);
        });

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

    }
    //affichage
    public ArrayList<SousMetier> affichageSousMetiers() {
        ArrayList<SousMetier> result = new ArrayList<>();

        String url = Statics.BASE_URL + "/sousmetier/affichage/mobile";
        req.setUrl(url);
        req.setHttpMethod("GET");

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;
                jsonp = new JSONParser();

                try {
                    Map<String, Object> mapPlaces = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));

                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapPlaces.get("root");

                    for (Map<String, Object> obj : listOfMaps) {
                        SousMetier re = new SousMetier();

                        //dima id fi codename one float 5outhouha
                        int id = (int)Float.parseFloat(obj.get("id").toString());
                        System.out.println(id);
                        String pname = obj.get("libelle").toString();
                        System.out.println( " place name is" + pname);
                        String cname = obj.get("domaine").toString();


                        re.setId( id);
                        re.setLibelle(pname);
                        re.setDomaine(cname);
            

                        //insert data into ArrayList result
                        result.add(re);

                    }

                } catch (Exception ex) {

                    ex.printStackTrace();
                }

            }
        });

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

        return result;

    }

    /*    public PlaceToVisit DetailRecalamation(int id, PlaceToVisit Place) {

        String url = Statics.BASE_URL1 + "/detailPlace?" + id;
        req.setUrl(url);

        String str = new String(req.getResponseData());
        req.addResponseListener(((evt) -> {

            JSONParser jsonp = new JSONParser();
            try {

                Map<String, Object> obj = jsonp.parseJSON(new CharArrayReader(new String(str).toCharArray()));

                Place.setObjet(obj.get("obj").toString());
                Place.setDescription(obj.get("description").toString());
                Place.setEtat(Integer.parseInt(obj.get("etat").toString()));

            } catch (IOException ex) {
                System.out.println("error related to sql :( " + ex.getMessage());
            }

            System.out.println("data === " + str);

        }));

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

        return Place;

    }
*/
    //Delete 
    public boolean deleteSousMetier(int id) {
        String url = Statics.BASE_URL + "/sousmetier/delete/mobile/" + id;

        req.setUrl(url);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                req.removeResponseCodeListener(this);
            }
        });

        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOk;
    }

        
    public boolean modifierSousMetier(SousMetier Place) {
        String url = Statics.BASE_URL + "/sousmetier/Update/mobile/"+Place.getId()+"?libelle=" + Place.getLibelle()+ "&domaine=" + Place.getDomaine(); // aa sorry n3adi getId lyheya mech ta3 user ta3 Place
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200 ;  // Code response Http 200 ok
                req.removeResponseListener(this);
            }
        });
        
    NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
    return resultOk;
        
    }
    

     
}

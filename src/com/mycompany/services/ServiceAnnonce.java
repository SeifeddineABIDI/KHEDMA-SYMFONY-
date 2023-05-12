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
import com.mycomany.entities.Annonce;
import com.mycomany.entities.SousMetier;
import com.mycomany.utils.Statics;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author DELL
 */
public class ServiceAnnonce {
    //singleton 
    public static ServiceAnnonce instance = null;

    public static boolean resultOk = true;

    //initilisation connection request 
    private ConnectionRequest req;

    public static ServiceAnnonce getInstance() {
        if (instance == null) {
            instance = new ServiceAnnonce();
        }
        return instance;
    }

    public ServiceAnnonce() {
        req = new ConnectionRequest();

    }

    
    public void ajoutPlace(Annonce Place) {

        String url = Statics.BASE_URL + "annonce/addannonceJSON/new?titre=" + Place.getTitre()+ "&Classification_id=" + Place.getId_c(); // aa sorry n3adi getId lyheya mech ta3 user ta3 Place

        req.setUrl(url);
                req.setHttpMethod("POST");

        req.addResponseListener((e) -> {

            String str = new String(req.getResponseData());//Reponse json hethi lyrinaha fi navigateur 9bila
            System.out.println("data == " + str);
        });

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

    }
    //affichage
    public ArrayList<Annonce> affichagePlaces() {
        ArrayList<Annonce> result = new ArrayList<>();

        String url = Statics.BASE_URL + "/annonce/all/Allannonces";
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
                        Annonce re = new Annonce();

                        //dima id fi codename one float 5outhouha
                        int id = (int)Float.parseFloat(obj.get("id").toString());
                        System.out.println(id);
                        String pname = obj.get("titre").toString();
                                            //    String classification = obj.get("classification").toString();

                        System.out.println( "classification" + pname);
                       // String cname = obj.get("domaine").toString();


                        re.setId( id);
                        re.setTitre(pname);
                       // re.setClassification
                        //re.setDomaine(cname);
            

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
                System.out.println("error related to sql 🙁 " + ex.getMessage());
            }

            System.out.println("data === " + str);

        }));

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

        return Place;

    }
*/
    //Delete 
    public boolean deletePlace(int id) {
        String url = Statics.BASE_URL + "annonce/deleteannonceJSON/" + id;

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

        
    public boolean modifierPlace(Annonce Place) {
        String url = Statics.BASE_URL + "annonce/updateannonceJSON/"+Place.getId()+"?titre=" + Place.getTitre(); // aa sorry n3adi getId lyheya mech ta3 user ta3 Place
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
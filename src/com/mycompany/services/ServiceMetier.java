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
import com.codename1.io.rest.Rest;
import com.codename1.ui.events.ActionListener;
import com.mycomany.entities.Metier;
import com.mycomany.utils.Statics;

import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Fatma
 */
public class ServiceMetier {

    public static ServiceMetier instance = null;

    public static boolean resultOk = true;

    private ConnectionRequest req;

    public static ServiceMetier getInstance() {
        if (instance == null) {
            instance = new ServiceMetier();
        }
        return instance;
    }

    public ServiceMetier() {
        req = new ConnectionRequest();
    }

    public void ajoutMetier(Metier p) {

        String url = Statics.BASE_URL + "/metier/ajout/mobile?nom=" + p.getNom() + "&type=" + p.getType()
                + "&description=" + p.getDescription() + "&image=" + p.getImage() ;
        req.setUrl(url);
        req.addResponseListener((e) -> {
            String str = new String(req.getResponseData());
        });

        NetworkManager.getInstance().addToQueueAndWait(req);
    }

    public ArrayList<Metier> affichageMetiers() {
        ArrayList<Metier> result = new ArrayList<>();

        String url = Statics.BASE_URL + "/metier/affichage/mobile";
        req.setUrl(url);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;
                jsonp = new JSONParser();

                try {
                    Map<String, Object> mapCourss = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));

                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapCourss.get("root");

                    for (Map<String, Object> obj : listOfMaps) {
                        
                        float id = Float.parseFloat(obj.get("id").toString());
                        String type = obj.get("type").toString();
                        String desc = obj.get("description").toString();
                        String img = obj.get("image").toString();
                                                String nom = obj.get("nom").toString();



                        Metier p = new Metier();
                        p.setId((int) id);
                        p.setNom(nom);
                        p.setDescription(desc);
                        p.setType(type);
                        p.setImage(img);
             

                        result.add(p);
                    }
                } catch (Exception ex) {
                    ex.printStackTrace();
                }
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return result;

    }
/*
    public Metier DetailProduit(int id, Metier p) {

        String url = Statics.BASE_URL + "/produit/get/" + id;
        req.setUrl(url);
        
        req.addResponseListener(((evt) -> {

            JSONParser jsonp = new JSONParser();
            try {

                Map<String, Object> obj = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                        String nom = obj.get("nameProd").toString();
                        String desc = obj.get("prodDescription").toString();
                        String type = obj.get("typeProd").toString();
                        float prix = Float.parseFloat(obj.get("priceProd").toString());
                        float qte = Float.parseFloat(obj.get("quantite").toString());
                        String img = obj.get("imageProd").toString();
                        String status = obj.get("status").toString();
                        
                        p.setIdProduit(id);
                        p.setNameProd(nom);
                        p.setProdDescription(desc);
                        p.setTypeProd(type);
                        p.setPriceProd(prix);
                        p.setQuantite((int)qte);
                        p.setImageProd(img);
                        p.setStatus(status);

            } catch (IOException ex) {
                System.out.println("error related to sql :( " + ex.getMessage());
            }
        }));

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

        return p;

    }*/

    //Delete 
    public static boolean deleteMetier(int id) {
        Rest.delete(Statics.BASE_URL + "/metier/delete/mobile/" + id).jsonContent().acceptJson().getAsJsonMap().getResponseData();
        return true;
    }

    //Update 
    public boolean modifierMetier(Metier p) {
        String url = Statics.BASE_URL + "/metier/Update/mobile/"+p.getId()+"?nom=" + p.getNom() + "&type=" + p.getType()
                + "&description=" + p.getDescription() + "&image=" + p.getImage() ;;
        req.setUrl(url);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200;  // Code response Http 200 ok
                req.removeResponseListener(this);
            }
        });

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
        return resultOk;

    }
}

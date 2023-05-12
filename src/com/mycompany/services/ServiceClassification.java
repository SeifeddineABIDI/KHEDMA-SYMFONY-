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
import com.mycomany.entities.Classification;
import com.mycomany.entities.Metier;
import com.mycomany.utils.Statics;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author DELL
 */
public class ServiceClassification {
      public static ServiceClassification instance = null;

    public static boolean resultOk = true;

    private ConnectionRequest req;

    public static ServiceClassification getInstance() {
        if (instance == null) {
            instance = new ServiceClassification();
        }
        return instance;
    }

    public ServiceClassification() {
        req = new ConnectionRequest();
    }

    public void ajoutProduit(Classification p) {

        String url = Statics.BASE_URL + "classification/addclassificationJSON/new?nom=" + p.getNom() + "&domaine=" + p.getDomaine();
        req.setUrl(url);
        req.addResponseListener((e) -> {
            String str = new String(req.getResponseData());
        });

        NetworkManager.getInstance().addToQueueAndWait(req);
    }

    public ArrayList<Classification> affichageProduits() {
        ArrayList<Classification> result = new ArrayList<>();

        String url = Statics.BASE_URL + "classification/Allclassifications";
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
                       // String type = obj.get("type").toString();
                        String domaine = obj.get("domaine").toString();
                       // String img = obj.get("image").toString();
                                                String nom = obj.get("nom").toString();



                        Classification p = new Classification();
                        p.setId((int) id);
                        p.setNom(nom);
                        p.setDomaine(domaine);
                      

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
                System.out.println("error related to sql 🙁 " + ex.getMessage());
            }
        }));

        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

        return p;

    }*/

    //Delete 
    public static boolean deleteProduit(int id) {
        Rest.delete(Statics.BASE_URL + "classification/deleteclassificationJSON/" + id).jsonContent().acceptJson().getAsJsonMap().getResponseData();
        return true;
    }

    //Update 
    public boolean modifierProduit(Classification p) {
        String url = Statics.BASE_URL + "classification/updateclassificationJSON/"+p.getId()+"?nom=" + p.getNom() + "&domaine=" + p.getDomaine()
                 ;;
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
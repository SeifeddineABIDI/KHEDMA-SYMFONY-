/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Classification;
import com.mycompany.myapp.services.ServiceClassification;
import java.util.Map;
import java.util.List;


/**
 *
 * @author mfmma
 */
public class ListClassificationForm extends Form {
    
     public ListClassificationForm(Form previous) {
             Classification c =new Classification();
        Map<String, Object> parsedData = ServiceClassification.getInstance().getAllServices();
        List<Map<String, Object>> dataList = (List<Map<String, Object>>) parsedData.get("root");
        
        int len = dataList.size();
         Container container = new Container(new BoxLayout(BoxLayout.Y_AXIS));
             for (int i = 0; i < len; i++) {
            Map<String, Object> dataItem = dataList.get(i);
            int id=(int)Float.parseFloat(dataItem.get("id").toString());
            String nom=dataItem.get("Nom").toString();
            String domaine=dataItem.get("domaine").toString();
            c.setId(id);
            c.setNom(nom);
            c.setDomaine(domaine);
            Label nomLabel = new Label("Nom: " + dataItem.get("Nom"));
            Label domaineLabel = new Label("Domaine: " + dataItem.get("domaine"));
           // Label descriptionLabel = new Label("Description: " + dataItem.get("descriptionS"));
            
            Button delete = new Button("supprimer classification");
                        Button update = new Button("éditer classification");

            
        delete.addActionListener(new ActionListener() {
    @Override
    public void actionPerformed(ActionEvent evt) {
        
        System.out.println(dataItem.get("id").getClass().getName());
        System.out.println("---------------------------------------------------------");
            double id = (double) dataItem.get("id");
        boolean result = ServiceClassification.getInstance().deleteService((int) id);
            
            

            if (result) {
                Dialog.show("Success", "Claim deleted successfully", new Command("OK"));
                // Navigate back to the previous form
                previous.showBack();
            } else {
                Dialog.show("Error", "Error occurred while deleting claim", new Command("OK"));
            }
        
    }
            });
        
    update.addActionListener(new ActionListener() {
    @Override
    public void actionPerformed(ActionEvent evt) {
        // create a new instance of the Service entity
       

        
            AddClassificationForm apf = new AddClassificationForm(previous);
           apf.infalteUI(c);
           apf.show();
        
    }
            }); 

            Label x = new Label("*************");
      
            container.addAll(nomLabel, domaineLabel,delete,update,x);
    }
    add(container);
       
    
    }
     
     

   
}

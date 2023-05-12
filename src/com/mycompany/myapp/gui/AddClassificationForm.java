/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.gui;

/**
 *
 * @author mfmma
 */

import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.Form;
import com.codename1.ui.util.Resources;
import java.util.Date;

import com.mycompany.myapp.entities.Classification;
import com.mycompany.myapp.services.ServiceClassification;


public class AddClassificationForm extends Form {
    
     private Boolean isInEditMode = Boolean.FALSE;
        TextField tfNom = new TextField("","Nom");
        TextField tfDomaine = new TextField("","Domaine");
    private int tfid;

    public AddClassificationForm(Form previous){
     setTitle("Add a new Classification");
        setLayout(BoxLayout.y());
        
       

        
      /*  ComboBox<String> combobox=new ComboBox<>("","Médecine douce","Coaching","Consultation");
        combobox.addActionListener(evt->{
        String selectedoption=(String)combobox.getSelectedItem();
        switch(selectedoption){
             case "":
            // User selected Option 1
            break;
        case "Option 2":
            // User selected Option 2
            break;
        case "Option 3":
            // User selected Option 3
            break;
        default:
            break;
        }
        
        }); */
        
        
        //Date currentDate=new Date();
        //SimpleDateFormat dateformat=new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
        //String date_service= dateformat.format(currentDate);
        

        Button btnValider = new Button("Add Classification");
        
        
        btnValider.addActionListener(new ActionListener() {
    @Override
    public void actionPerformed(ActionEvent evt) {
        if ((tfNom.getText().length()==0)||(tfDomaine.getText().length()==0))
            Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
        else
        {  if (isInEditMode) {
            handleEditOperation();
            return;
        } 
           Classification s = new Classification( tfNom.getText().toString(),tfDomaine.getText().toString());
            boolean result = ServiceClassification.getInstance().ajoutService(s);
            if (result) {
                Dialog.show("Success", "Classification added successfully", new Command("OK"));
                // Navigate back to the previous form
                previous.showBack();
            } else {
                Dialog.show("Error", "Error occurred while adding task", new Command("OK"));
            }
        }
    }
        });
        
        addAll(tfNom,tfDomaine,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
        show();
                
                
    }
    
    
     public void infalteUI(Classification place) {
        tfNom.setText(place.getNom());
        tfDomaine.setText(place.getDomaine());
        tfid=place.getId();
     

       isInEditMode = Boolean.TRUE;
    }
        private void handleEditOperation() {
                        Classification p = new Classification();
            p.setNom(tfNom.getText());
            p.setDomaine(tfDomaine.getText());
           p.setId(tfid);

            System.err.println(p);
            ServiceClassification.getInstance().modifierProduit(p);
             new ListClassificationForm(this).show()   ;    

    }
    
    }




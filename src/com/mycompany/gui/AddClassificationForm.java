
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;
import com.codename1.ui.validation.GroupConstraint;
import com.codename1.ui.validation.LengthConstraint;
import com.codename1.ui.validation.RegexConstraint;
import com.codename1.ui.validation.Validator;
import com.mycomany.entities.Classification;
import com.mycomany.entities.Metier;
import com.mycompany.services.ServiceClassification;
import com.mycompany.services.ServiceMetier;

/**
 *
 * @author DELL
 */
public class AddClassificationForm extends BaseForm {
     private Boolean isInEditMode = Boolean.FALSE;
        TextField nameField = new TextField("", " Name", 20, TextField.ANY);
        TextField domainefield = new TextField("", "Domaine", 20, TextField.ANY);
       // TextField descfield = new TextField("", " Description", 20, TextField.ANY);
      //  TextField Imagefield = new TextField("", "Image ", 20, TextField.ANY);
       
    public AddClassificationForm(Resources res) {
        super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
        Container welcome = FlowLayout.encloseCenter(
                new Label("Ajout Place", "Welcome")
        );
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        Command backCommand = new Command("Back") {
            public void actionPerformed(ActionEvent evt) {
                new ClassificationListForm(res).show();
            }
        };
        tb.setBackCommand(backCommand);
        getTitleArea().setUIID("Container");
        Container Title = BoxLayout.encloseY(welcome);

        add(BorderLayout.NORTH, Title);

 nameField.getAllStyles().setFgColor(0xFF0000);
       // typefield.getAllStyles().setFgColor(0xFF0000);
       // Imagefield.getAllStyles().setFgColor(0xFF0000);
        domainefield.getAllStyles().setFgColor(0xFF0000);
 nameField.getAllStyles().setMargin(LEFT, 0);
        domainefield.getAllStyles().setMargin(LEFT, 0);
       // Imagefield.getAllStyles().setMargin(LEFT, 0);
       // descfield.getAllStyles().setMargin(LEFT, 0);

        Button addButton = new Button("Ajouter");
        addButton.setUIID("LoginButton");
    
        Validator val = new Validator();
        val.setShowErrorMessageForFocusedComponent(true);
        val.addConstraint(nameField,
                new GroupConstraint(
                        new LengthConstraint(4),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton);
        val.setShowErrorMessageForFocusedComponent(true);
        val.addConstraint(domainefield,
                new GroupConstraint(
                        new LengthConstraint(5),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton);

       /* val.addConstraint(namefield,
                new GroupConstraint(
                        new LengthConstraint(15),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton);
                val.addConstraint(Imagefield,
                new GroupConstraint(
                        new LengthConstraint(15),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton); */
  
                                       if (isInEditMode) {
            handleEditOperation(res);
            return;
        } 
        addButton.addActionListener((e) -> {
            Classification p = new Classification();
            p.setNom(nameField.getText());
            p.setDomaine(domainefield.getText());
           // p.setDescription(descfield.getText());
           // p.setImage(Imagefield.getText());

            System.err.println(p);
            ServiceClassification.getInstance().ajoutProduit(p);
             new ClassificationListForm(res).show()   ;           

        });
        Container formul = BoxLayout.encloseY(
                BorderLayout.center(nameField),
                BorderLayout.center(domainefield),
              //  BorderLayout.center(descfield),
               // BorderLayout.center(Imagefield),
                addButton
        );
        formul.setScrollableY(true);
        formul.setScrollVisible(false);
        add(BorderLayout.CENTER, formul);
        addSideMenu(res);


    }


    public void infalteUI(Classification place) {
        nameField.setText(place.getNom());
        domainefield.setText(place.getDomaine());
      //  descfield.setText(place.getDescription());
       // Imagefield.setText(place.getImage());
     

       isInEditMode = Boolean.TRUE;
    }
        private void handleEditOperation(Resources res) {
                        Classification p = new Classification();
            p.setNom(nameField.getText());
            p.setDomaine(domainefield.getText());
          //  p.setDescription(descfield.getText());
           // p.setImage(Imagefield.getText());

            System.err.println(p);
            ServiceClassification.getInstance().modifierProduit(p);
             new ClassificationListForm(res).show()   ;    

    }
    
    
    
}
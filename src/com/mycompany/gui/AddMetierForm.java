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
import com.mycomany.entities.Metier;
import com.mycompany.services.ServiceMetier;

/**
 *
 * @author donia
 */
public class AddMetierForm extends BaseForm {
  
    private Boolean isInEditMode = Boolean.FALSE;
        TextField nameField = new TextField("", " Name", 20, TextField.ANY);
        TextField typefield = new TextField("", "Type", 20, TextField.ANY);
        TextField descfield = new TextField("", " Description", 20, TextField.ANY);
        TextField Imagefield = new TextField("", "Image ", 20, TextField.ANY);
       
    public AddMetierForm(Resources res) {
        super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
        Container welcome = FlowLayout.encloseCenter(
                new Label("Ajout Metier", "Welcome")
        );
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        Command backCommand = new Command("Back") {
            public void actionPerformed(ActionEvent evt) {
                new MetierListForm(res).show();
            }
        };
        tb.setBackCommand(backCommand);
        getTitleArea().setUIID("Container");
        Container Title = BoxLayout.encloseY(welcome);

        add(BorderLayout.NORTH, Title);

 nameField.getAllStyles().setFgColor(0xFF0000);
        typefield.getAllStyles().setFgColor(0xFF0000);
        Imagefield.getAllStyles().setFgColor(0xFF0000);
        descfield.getAllStyles().setFgColor(0xFF0000);
 nameField.getAllStyles().setMargin(LEFT, 0);
        typefield.getAllStyles().setMargin(LEFT, 0);
        Imagefield.getAllStyles().setMargin(LEFT, 0);
        descfield.getAllStyles().setMargin(LEFT, 0);

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
        val.addConstraint(typefield,
                new GroupConstraint(
                        new LengthConstraint(5),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton);

        val.addConstraint(descfield,
                new GroupConstraint(
                        new LengthConstraint(15),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton);
                val.addConstraint(Imagefield,
                new GroupConstraint(
                        new LengthConstraint(15),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton);
  
                                       if (isInEditMode) {
            handleEditOperation(res);
            return;
        } 
        addButton.addActionListener((e) -> {
            Metier p = new Metier();
            p.setNom(nameField.getText());
            p.setType(typefield.getText());
            p.setDescription(descfield.getText());
            p.setImage(Imagefield.getText());

            System.err.println(p);
            ServiceMetier.getInstance().ajoutMetier(p);
             new MetierListForm(res).show()   ;           

        });
        Container formul = BoxLayout.encloseY(
                BorderLayout.center(nameField),
                BorderLayout.center(typefield),
                BorderLayout.center(descfield),
                BorderLayout.center(Imagefield),
                addButton
        );
        formul.setScrollableY(true);
        formul.setScrollVisible(false);
        add(BorderLayout.CENTER, formul);
        addSideMenu(res);


    }


    public void infalteUI(Metier place) {
        nameField.setText(place.getNom());
        typefield.setText(place.getType());
        descfield.setText(place.getDescription());
        Imagefield.setText(place.getImage());
     

       isInEditMode = Boolean.TRUE;
    }
        private void handleEditOperation(Resources res) {
                        Metier p = new Metier();
            p.setNom(nameField.getText());
            p.setType(typefield.getText());
            p.setDescription(descfield.getText());
            p.setImage(Imagefield.getText());

            System.err.println(p);
            ServiceMetier.getInstance().modifierMetier(p);
             new MetierListForm(res).show()   ;    

    }
}
  


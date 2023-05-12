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
import com.mycomany.entities.Annonce;
import com.mycomany.entities.SousMetier;
import com.mycompany.services.ServiceAnnonce;
import com.mycompany.services.ServiceSousMetier;

/**
 *
 * @author DELL
 */
public class AddAnnonceForm extends BaseForm{
      private Boolean isInEditMode = Boolean.FALSE;
     //   TextField idField = new TextField("", " id", 20, TextField.NUMERIC);
     TextField idClassification = new TextField("", "Classification Id", 20, TextField.NUMERIC);
        TextField Titrefield = new TextField("", " Titre", 20, TextField.ANY);
      //  TextField Libellefield = new TextField("", "Libelle ", 20, TextField.ANY);
       
    public AddAnnonceForm(Resources res) {
        super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
        Container welcome = FlowLayout.encloseCenter(
                new Label("Ajout Place", "Welcome")
        );
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        Command backCommand = new Command("Back") {
            public void actionPerformed(ActionEvent evt) {
                new SousMetierListForm(res).show();
            }
        };
        tb.setBackCommand(backCommand);
        getTitleArea().setUIID("Container");
        Container Title = BoxLayout.encloseY(welcome);

        add(BorderLayout.NORTH, Title);

      idClassification.getAllStyles().setFgColor(0xFF0000);
        Titrefield.getAllStyles().setFgColor(0xFF0000);
       // Libellefield.getAllStyles().setFgColor(0xFF0000);
     idClassification.getAllStyles().setMargin(LEFT, 0);
       Titrefield.getAllStyles().setMargin(LEFT, 0);
       // Libellefield.getAllStyles().setMargin(LEFT, 0);

        Button addButton = new Button("Ajouter");
        addButton.setUIID("LoginButton");
    
        Validator val = new Validator();
        val.setShowErrorMessageForFocusedComponent(true);

        val.setShowErrorMessageForFocusedComponent(true);


        val.addConstraint(Titrefield,
                new GroupConstraint(
                        new LengthConstraint(5),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton);
               /* val.addConstraint(Libellefield,
                new GroupConstraint(
                        new LengthConstraint(5),
                        new RegexConstraint("^([a-zA-Z ]*)$", "Please only use latin characters for name"))).
                addSubmitButtons(addButton); */
  
                                       if (isInEditMode) {
            handleEditOperation(res);
            return;
        } 
        addButton.addActionListener((e) -> {
            Annonce p = new Annonce();
        //    p.setId(Integer.parseInt(idField.getText()));
          p.setId_c(Integer.parseInt(idClassification.getText()));
            p.setTitre(Titrefield.getText());
           // p.setLibelle(Libellefield.getText());

            System.err.println(p);
            ServiceAnnonce.getInstance().ajoutPlace(p);
             new AnnonceListForm(res).show()   ;           

        });
        Container formul = BoxLayout.encloseY(
        //        BorderLayout.center(idField),
            BorderLayout.center(idClassification),
                BorderLayout.center(Titrefield),
               // BorderLayout.center(Libellefield),
                addButton
        );
        formul.setScrollableY(true);
        formul.setScrollVisible(false);
        add(BorderLayout.CENTER, formul);
        addSideMenu(res);


    }


    public void infalteUI(Annonce place) {
      //  idField.setText(String.valueOf(place.getId()));
       idClassification.setText(String.valueOf(place.getId_c()));
        Titrefield.setText(place.getTitre());
       // Libellefield.setText(place.getLibelle());
     

       isInEditMode = Boolean.TRUE;
    }
        private void handleEditOperation(Resources res) {
                        Annonce p = new Annonce();
       //     p.setId(Integer.parseInt(idField.getText()));
         p.setId_c(Integer.parseInt(idClassification.getText()));
            p.setTitre(Titrefield.getText());
            //p.setLibelle(Libellefield.getText());

            System.err.println(p);
            ServiceAnnonce.getInstance().modifierPlace(p);
             new MetierListForm(res).show()   ;    

    }
}
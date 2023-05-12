/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Classification;
import com.mycompany.myapp.services.ServiceClassification;


/**
 *
 * @author mfmma
 */
//public class UpdateService extends Form{
// 
//    public UpdateService(Form previous) {
//        setTitle("Modifier Service");
//        setLayout(BoxLayout.y());
//    
//        TextField ttitre = new TextField("","titreS");
//        TextField tdescription = new TextField("","descriptionS");
//        TextField ttype = new TextField("","typeS");
//      
//        
//        Button btnValider = new Button("Edit ");
//          
//         
//        btnValider.addActionListener(new ActionListener() {
//            @Override
//            public void actionPerformed(ActionEvent evt) {
//                if ((ttitre.getText().length()==0))
//                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
//                else
//                {
//                   try {
//                        Service t;
//                        t = new Service(ttitre.getText().toString(),tdescription.getText().toString(),ttype.getText().toString());
//                        if( ServiceService.getInstance().modifierService(t))
//                        {
//                           Dialog.show("Success","Congrats!!",new Command("OK"));
//                        }else
//                            Dialog.show("ERROR", "Server error", new Command("OK"));
//                    } catch (NumberFormatException e) {
//                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
//                    }
//                    
//                }
//                
//                
//           }
//        });
//        
//        addAll(ttitre,tdescription,ttype,btnValider);
//        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
//             
//    }
//    
//}
//    




public class UpdateClassification extends Form{
    
    private Form current;
   // private Resource theme;
    
    private Container cnt1;
    private TextField tfNom,tfDomaine;
    
   
    public UpdateClassification(Form previous,Classification service) {
    getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e->previous.showBack());
        
        current=this;
        setTitle("Modifier classification");
        setLayout(BoxLayout.yCenter());
        
         tfNom = new TextField(service.getNom(), "");
         tfDomaine = new TextField(service.getDomaine(), "");
        // tfType = new TextField(service.getTypeS(), "");
        
        Button btnValider = new Button("Enregistrer");
        
        
        
        
        add(tfNom);
        add(tfDomaine);
       // add(tfType);
        setScrollable(true);
        add(btnValider);
        show();
        
        
        
        btnValider.requestFocus();
        btnValider.addActionListener(new ActionListener() {
        @Override
        public void actionPerformed(ActionEvent e) {
            service.setId(service.getId());
            service.setNom(service.getNom());
            service.setDomaine(service.getDomaine());
           // service.setTypSe(service.getTypeS());
  
          //  ServiceClassification.getInstance().modifierService(service);
        }
    });
    }
    
}


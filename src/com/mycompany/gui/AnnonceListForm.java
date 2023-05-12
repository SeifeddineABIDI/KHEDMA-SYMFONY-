/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycomany.entities.Annonce;
import com.mycomany.entities.SousMetier;
import com.mycompany.services.ServiceAnnonce;
import com.mycompany.services.ServiceSousMetier;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author DELL
 */
public class AnnonceListForm extends BaseForm{
     List<Annonce> prods = ServiceAnnonce.getInstance().affichagePlaces();
    int sum = 0;

    Container all = new Container(new BoxLayout(BoxLayout.Y_AXIS));
    public AnnonceListForm(Resources res) {
        super(BoxLayout.y());
     
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        Image profilePic = res.getImage("user-picture.jpg");
        Image mask = res.getImage("round-mask.png");
//        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
//        profilePicLabel.setMask(mask.createMask());

        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());

        Container remainingTasks = BoxLayout.encloseY(
                new Label(String.valueOf(prods.size()), "CenterTitle"),
                new Label("Classification", "CenterSubTitle")
        );
        remainingTasks.setUIID("RemainingTasks");
        Container completedTasks = BoxLayout.encloseY(
                new Label(String.valueOf(sum), "CenterTitle"),
                new Label("available items", "CenterSubTitle")
        );
        completedTasks.setUIID("CompletedTasks");

        Container titleCmp = BoxLayout.encloseY(
                FlowLayout.encloseIn(menuButton),
                GridLayout.encloseIn(2, remainingTasks, completedTasks)
        );

        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        fab.addActionListener((e) -> new AddAnnonceForm(res).show());
        fab.getAllStyles().setMarginUnit(Style.UNIT_TYPE_PIXELS);
        fab.getAllStyles().setMargin(BOTTOM, completedTasks.getPreferredH() - fab.getPreferredH() / 2);
        tb.setTitleComponent(fab.bindFabToContainer(titleCmp, CENTER, BOTTOM));
        add(new Label("List of annonces", "TodayTitle"));
        TextField searchField = new TextField("", "entrer Titre!!");
        searchField.setUIID("TextFieldBlack");
        add(BorderLayout.west(new Label("Recherche", "PaddedLabel"))
                .add(BorderLayout.CENTER, searchField));
        searchField.addActionListener(e -> {
            String searchQuery = searchField.getText();
            List<Annonce> filteredData = new ArrayList<Annonce>();
            for (Annonce p : prods) {
                if (p.getTitre().contains(searchQuery.toLowerCase())) {
                    filteredData.add(p);
                }
            }
            all.removeAll();
            for (Annonce rec : filteredData) {
                addButtonBottom(res,rec, CENTER, focusScrolling);
            }
        });
        for (Annonce p : prods) {
            addButtonBottom(res,p, CENTER, focusScrolling);
        }
        add(all);
        addSideMenu(res);
    }

    private void addButtonBottom(Resources res,Annonce p, int color, boolean first) {
                AddAnnonceForm apf = new AddAnnonceForm(res);

        MultiButton finishLandingPage = new MultiButton(p.getTitre());
        finishLandingPage.setTextLine2(p.getTitre());
        finishLandingPage.setUIID("Container");
        finishLandingPage.setUIIDLine1("TodayEntry");
        finishLandingPage.addActionListener((e) -> Dialog.show(null, p.getTitre(), "OK", null));
        
        ButtonGroup barGroup = new ButtonGroup();
        RadioButton modbtn = RadioButton.createToggle("Modifier", barGroup);
        RadioButton suppbtn = RadioButton.createToggle("Supprimer", barGroup);
        suppbtn.addActionListener((e)->{
            ServiceAnnonce.getInstance().deletePlace(p.getId());
            new AnnonceListForm(res).show();
        });
        modbtn.addActionListener((e)->
                {
           apf.infalteUI(p);
           apf.show();}
        );
        all.add(FlowLayout.encloseIn(finishLandingPage));
        all.add(GridLayout.encloseIn(2, modbtn, suppbtn));
    }
}
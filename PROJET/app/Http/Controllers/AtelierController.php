<?php

namespace App\Http\Controllers;

use App\Models\atelier;
use Illuminate\Http\Request;

class AtelierController extends Controller
{
    //

    public function accueil(){
        return view("accueil");
    }
    public function enregistrer(Request $request)
    {
        $immatriculation = $request->immatriculation;
        $marque = $request->marque;
        $modele = $request->modele;
        $couleur = $request->couleur;
        $annee = $request->annee;
        $kilometrage = $request->kilometrage;
        $carrosserie = $request->carrosserie;
        $energie = $request->energie;
        $boite = $request->boite;

        Atelier::create([
            "immatriculation" => $immatriculation,
            "marque" => $marque,
            "modele" => $modele,
            "couleur" => $couleur,
            "annee" => $annee,
            "kilometrage" => $kilometrage,
            "carrosserie" => $carrosserie,
            "energie" => $energie,
            "boite" => $boite,
        ]);
        return redirect()->route("liste_voiture");
    }
    public function liste_voiture()
    {
        $ateliers = Atelier::all();
       return view("liste_voiture", compact("ateliers"));
    }

    public function supprimer_voiture($id)
    {
        $atelier = Atelier::find($id);
        $atelier->delete();
        return redirect()->route("liste_voiture");
    }

    public function modifier_voiture($id)
    {
        $atelier = Atelier::find($id);
        return view("modifier_voiture", compact("atelier"));
    }

    public function save_voiture(Request $request, $id)
    {
        $atelier = Atelier::find($id);
        //$eglise->nom = $request->nom;
        $atelier->immatriculation = $request->immatriculation;

        $atelier->marque = $request->marque;

        $atelier->modele = $request->modele;

        $atelier->couleur = $request->couleur;

        $atelier->annee = $request->annee;

        $atelier->kilometrage = $request->kilometrage;

        $atelier->carrosserie = $request->carrosserie;

        $atelier->energie = $request->energie;
        $atelier->boite = $request->boite;
        

        $atelier->save();

        return redirect()->route("liste_voiture");


    }

   

}
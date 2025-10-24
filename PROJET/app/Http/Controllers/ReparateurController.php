<?php

namespace App\Http\Controllers;

use App\Models\Reparateur;
use Illuminate\Http\Request;

class ReparateurController extends Controller
{
    //
    public function Reparateur() {
        return view("Reparateur");
    }
    public function liste_reparateur(){
        $Reparateurs = Reparateur::all();
        return view("liste_reparateur", compact("Reparateurs"));
    }

    public function soumettre(Request $request) {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $specialite = $request->specialite;

        Reparateur::create([
            "nom"=> $nom,
            "prenom"=> $prenom,
            "specialite"=> $specialite,
        ]);
        return redirect()->route("liste_reparateur");
    }

     public function supprimer_reparateur($id){
        $Reparateur=Reparateur::find($id);
        $Reparateur->delete();
        return redirect()->route("liste_reparateur");
    }

    public function modifier_reparateur($id){
        $reparateur=Reparateur::find($id);
        return view("modifier_reparateur", compact("reparateur"));
    }

    public function save_reparateur(Request $request,$id){
        $reparateur=Reparateur::find($id);

         //$eglise->nom = $request->nom;
         $reparateur->nom = $request->nom;
         $reparateur->prenom = $request->prenom;
         $reparateur->specialite = $request->specialite;
         
         $reparateur->save();

         return redirect()->route("liste_reparateur");

    }

}
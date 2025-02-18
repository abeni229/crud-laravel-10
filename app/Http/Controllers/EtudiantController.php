<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants=Etudiant::paginate(4);
        return view('etudiant.liste',compact('etudiants'));
    }
    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }
    public function ajouter_etudiant_traitement(Request $request)
    {
      $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'filiere'=>'required',
        'tel'=>'required',
        'niveau'=>'required',

      ]);

      $etudiant= new Etudiant();
      $etudiant->nom=$request->nom;
      $etudiant->prenom=$request->prenom;
      $etudiant->filiere=$request->filiere;
      $etudiant->tel=$request->tel;
      $etudiant->niveau=$request->niveau;
      $etudiant->save();

      return redirect('/ajouter')->with('status', 'L\'Etudiant a bien été ajouter avec succès.');
    }
    
    public function update_etudiant($id){
        $etudiants=Etudiant::find($id);

      return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'filiere'=>'required',
            'tel'=>'required',
            'niveau'=>'required',
    
          ]);
          $etudiant= Etudiant::find($request->id);
      $etudiant->nom=$request->nom;
      $etudiant->prenom=$request->prenom;
      $etudiant->filiere=$request->filiere;
      $etudiant->tel=$request->tel;
      $etudiant->niveau=$request->niveau;
      $etudiant->update();  

      return redirect('/etudiant')->with('status', 'L\'Etudiant a bien été modifier avec succès.');
    }
    public function delete_etudiant($id){
        $etudiant=Etudiant::find($id);
        $etudiant->delete();

        return redirect('/etudiant')->with('status', 'L\'Etudiant a bien été supprimer avec succès.');
    }
}

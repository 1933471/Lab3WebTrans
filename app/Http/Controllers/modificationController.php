<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;


class modificationController extends Controller
{
    function AfficherPageModification(Request $request,$id){
        $produit = Produit::find($id);
        return view("modification",['produit'=> $produit]);
        }
        function modifier(Request $request, $id){

            $produit = Produit::find($id);

            $produit->nom = $request->input('nom');

            $produit->prix = $request->input('prix');

            $produit->quantite = $request->input('quantite');

            $produit->fourniseur = $request->input('fourniseur');

            $produit->save();

            return redirect("/");
        }
}

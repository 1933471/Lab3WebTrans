<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class listeController extends Controller
{
    function AfficherPageListe(){
        return view("liste",);
    }
    function TabDonnees(){
        $produit = Produit::all();
        return view("liste",['produits'=> $produit]);
    }
}

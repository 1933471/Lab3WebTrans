<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class produitController extends Controller
{
    function AfficherPageProduit($id){
        $produit = Produit::find($id);
        return view("produit",['produit'=> $produit]);
    }
}

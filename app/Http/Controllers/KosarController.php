<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\keszitmodel;
use App\Models\Rendelesek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KosarController extends Controller
{
public function show()
{
    $listingIds = session('kosar', []);
    
    // Initialize arrays to store the values for the whereIn clauses
    $kosarIDs = [];
    $quantities = [];
    
    // Extract the kosarID and quantity values from each item in the session
    foreach ($listingIds as $item) {
        $kosarIDs[] = $item['kosarID'];
        $quantities[] = $item['quantity'];
    }
    
    // Retrieve listings based on the extracted kosarIDs and quantities
    $listings = keszitmodel::whereIn('id', $kosarIDs)
        ->whereIn('darabszam', $quantities)
        ->get();
    return view('kosar', ['listings' => $listings]);
}

public function store(Request $request)
{
    $listingId = decrypt($request->input('kosarID'));
    $darabszam = decrypt($request->input('quantity'));
    $cim = decrypt($request->input('cim'));
    $ar = decrypt($request->input('ar'));
    $logo = $request->input('logo');

    $cartItems = session('kosar', []);
    $itemFound = false;
    foreach ($cartItems as &$item) {
        if ($item['kosarID'] == $listingId) {
            $item['quantity'] += $darabszam;
            $itemFound = true;
            break;
        }
    }

    if (!$itemFound) {
        $cartItems[] = [
            'kosarID' => $listingId,
            'quantity' => $darabszam,
            'ar' => $ar,
            'logo' => $logo,
            'cim' => $cim,
        ];
    }
    
    session(['kosar' => $cartItems]);

    $listingCount = 0;
    foreach ($cartItems as &$item) {
        $listingCount += $item['quantity'];
    }

    return response()->json(['listingCount' => $listingCount]);
}

public function delete(Request $request, keszitmodel $listing)
{   
    $listingId = $request->input('clear');
    $cart = session()->get('kosar', []);
    $index = array_search($listingId, array_column($cart, 'kosarID'));

    if ($index !== false) 
    {
        if ($cart[$index]['quantity'] > 0) {
        $cart[$index]['quantity'] -= 1;
        }   
        $ar = $cart[$index]['ar'];
    $listingCount = 0;
    $Totalprice = 0;
    foreach ($cart as $item) 
    {
    $listingCount += $item['quantity'];
     $Totalprice +=$item['ar'] * $item['quantity'];
    }
        $darab = $cart[$index]['quantity'];
     if($darab == 0)
        {
            array_splice($cart, $index, 1);
        }
    session(['kosar' => $cart]);
        return response()->json(['darab' => $darab, 'listingCount' => $listingCount, 'Totalprice' => $Totalprice, 'ar' => $ar]);
    } else {
        return back()->with('error', 'Item not found in cart!');
    }
}

public function add(Request $request)
{   
    $listingId = $request->input('add');
    $cart = session()->get('kosar', []);
    $index = array_search($listingId, array_column($cart, 'kosarID'));
    if ($index !== false) {
        
        if ($cart[$index]['quantity'] >= 0) {
            $cart[$index]['quantity'] += 1;
        } 
        session(['kosar' => $cart]);
        $darab = $cart[$index]['quantity'];
        $ar = $cart[$index]['ar'];
        $listingCount = 0;
        $Totalprice = 0;
        foreach ($cart as $item) {
            $listingCount += $item['quantity'];
            $Totalprice +=$item['ar'] * $item['quantity'];
        }
        
        return response()->json(['darab' => $darab, 'listingCount' => $listingCount, 'Totalprice' => $Totalprice, 'ar' => $ar]);
    } else {
        return back()->with('error', 'Item not found in cart!');
    }
}
        public function vege(Request $request)
        {   
          $pizza_darab_nev = implode(', ', $request->Pizza_darab_nev);
    
            Rendelesek::create([
                'Ossz_darab' => $request->Ossz_darab,
                'Pizza_darab_nev' => $pizza_darab_nev,
                'Teljes_osszeg' => $request->Teljes_osszeg,
            ]);

    return redirect('/');
        }
}
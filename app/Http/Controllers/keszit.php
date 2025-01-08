<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keszitmodel;
use Gloudemans\Shoppingcart\Facades\Cart;

class keszit extends Controller
{
    public function keszit()
    {
        return view('keszit');
    }
    public function store(Request $request)
    {
        
        $formFields = $request->validate([
         'cim' => 'required',
         'logo'=>'required',
         'osszetevok'=>'required',
         'ar'=>'required',
         'darabszam'=>'required',
        ]);

        if($request->hasFile('logo'))
        {
         $formFields['logo'] = $request->file('logo')->store('logo', 'public_uploads');
        }
     
        keszitmodel::create($formFields);
           return redirect('/etlap');
    }

    public function update(Request $request, keszitmodel $listing){
        $formFields = [];
   if ($request->filled('cim')) {
        // If provided, include it in the form fields
        $formFields['cim'] = $request->input('cim');
    }

    // Check if the "ar" field is provided in the request
    if ($request->filled('ar')) {
        // If provided, include it in the form fields
        $formFields['ar'] = $request->input('ar');
    }

    // Check if the "osszetevok" field is provided in the request
    if ($request->filled('osszetevok')) {
        // If provided, include it in the form fields
        $formFields['osszetevok'] = $request->input('osszetevok');
    }

    // Check if a file is uploaded
    if ($request->hasFile('logo')) {
        // If uploaded, include the "logo" file in the form fields
        $formFields['logo'] = $request->file('logo')->store('logo', 'public_uploads');
    }

    if($request->hasFile('logo'))
    {
        $formFields['logo'] = $request->file('logo')->store('logo', 'public_uploads');
    }

    $listing->update($formFields);
            
    return redirect('/etlap');
    }

    public function edit(keszitmodel $listing)
    {
        return view('edit', ['listing'=>$listing]);
    }


    
}
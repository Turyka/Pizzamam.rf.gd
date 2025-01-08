<?php

namespace App\Http\Controllers;

use App\Models\keszitmodel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class main extends Controller
{
    public function index()
    {
            return view('index');
    }
 
    public function etlap()
    {
            return view('/etlap',[
                'listings' => keszitmodel::latest()->filter(request(['search']))->paginate(4)
        ]);
    }
    public function destroy(keszitmodel $listing){
        try {
            
            $listing->delete();
            Storage::delete('storage/logo/' . $listing->logo);
            \Log::info('Listing ' . $listing->id . ' deleted successfully');
        } catch (\Exception $e) {
            \Log::error('Error deleting listing ' . $listing->id . ': ' . $e->getMessage());
        }
        return redirect('/etlap')->with('message','Sikeres törlés');
        return redirect('/etlap')->with('message','Sikeres törlés');

    }
}

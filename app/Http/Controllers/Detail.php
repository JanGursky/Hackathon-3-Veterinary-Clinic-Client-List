<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function animalDetail()
    {
      $animal_id = $_GET['id'] ?? null;

      $animal= Animal::find($animal_id);

      return view('details.details', compact('animal'));

    
    }
}

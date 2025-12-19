<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('pages.animal-details', compact('animal'));
    }

    public function create()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Poulet',
            'age' => 1,
            'description' => 'Une poule très sociable',
            'photo' => 'coquillette.png'
        ]);
        return redirect()->route('home');
    }

    public function update($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update([
            'name' => $animal->name . ' modifié'
        ]);
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('home');
    }
}
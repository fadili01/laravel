<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    private $planets = [
        ['name' => 'Mercury', 'description' => 'Description of Mercury'],
        ['name' => 'Venus', 'description' => 'Description of Venus'],
        ['name' => 'Earth', 'description' => 'Description of Earth'],
        // ... voeg de beschrijvingen voor de andere planeten toe
    ];

    public function index()
    {
        return view('planets.index', ['planets' => $this->planets]);
    }

    public function show($planet)
    {
        // Controleer of de opgegeven planeet bestaat in de array
        $foundPlanet = collect($this->planets)->firstWhere('name', $planet);
    
        if ($foundPlanet) {
            return view('planets.show', ['planet' => $foundPlanet]);
        } else {
            abort(404); // Toon een 404-fout als de planeet niet gevonden wordt
        }
    }
    

}

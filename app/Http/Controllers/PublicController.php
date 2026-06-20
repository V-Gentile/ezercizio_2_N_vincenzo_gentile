<?php

namespace App\Http\Controllers;

// Request not needed in this controller

class PublicController extends Controller
{
    public function home() {
    $digimon = [
        (object) ['name' => 'Agumon', 'type' => 'Reptile', 'level' => 'Rookie', 'img' => 'agumon.png'],
        (object) ['name' => 'Veemon', 'type' => 'Dragon', 'level' => 'Rookie', 'img' => 'veemon.png'],
        (object) ['name' => 'Guilmon', 'type' => 'Dragon', 'level' => 'Rookie', 'img' => 'guilmon.png'],
        (object) ['name' => 'Shoutmon', 'type' => 'Dragon', 'level' => 'Rookie', 'img' => 'shoutmon.png'],
    ];

    return view('home', ['home_digimon' => $digimon]);
    }

    public function chisiamo() {
    $users = [
        ['name' => 'Tai', 'surname' => 'Kamiya', 'digimon' => 'Agumon'],
        ['name' => 'Davis', 'surname' => 'Motomiya', 'digimon' => 'Veemon'],
        ['name' => 'Takato', 'surname' => 'Matsuki', 'digimon' => 'Guilmon'],
        ['name' => 'Taiki', 'surname' => 'Kudou', 'digimon' => 'Shoutmon'],
    ];
    return view('chi-siamo', ['users'=>$users]);

    } 

    public  function chisiamodettagli($name) {
    $users = [
        'Tai' => ['name' => 'Tai', 'surname' => 'Kamiya', 'digimon' => 'Agumon'],
        'Davis' => ['name' => 'Davis', 'surname' => 'Motomiya', 'digimon' => 'Veemon'],
        'Takato' => ['name' => 'Takato', 'surname' => 'Matsuki', 'digimon' => 'Guilmon'],
        'Taiki' => ['name' => 'Taiki', 'surname' => 'Kudou', 'digimon' => 'Shoutmon'],
    ];
    foreach ($users as $user) {
        if ($name === $user['name']) {
            return view('chi-siamo-dettagli', ['user' => $user]);
        }
    }
    }

    public function servizi() {

        return view('servizi');
    
    }

    public function profile()
    {
        return view('profile');
    }

}

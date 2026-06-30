<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Digimon;
use App\Http\Requests\DigimonRequest;
use App\Http\Requests\DigimonEditRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class DigimonController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', except: ['digidex']),
        ];
    }

    public function digidex()
    {
        $digidex = Digimon::all();
        return view('digimon.digidex', compact('digidex'));
    }

    public function create() 
    {
        $categories = Category::all();
        return view('digimon.digimon-crea', compact('categories'));
    }

    public function store(DigimonRequest $request)
    {
        $digimon = Digimon::create([
            'name' => $request->name,
            'level' => $request->level,
            'type' => $request->type,
            'img' => $request->file('img')->store('images', 'public'),
            'user_id'=>Auth::user()->id
        ]);
        $digimon->categories()->attach($request->categories);
        return redirect()->route('home')->with('successMessage', 'Digimon inserito con successo!');
    }

    public function show(Digimon $digimon)
    {
        return view('digimon.digidettagli', compact('digimon'));
    }

    public function edit(Digimon $digimon)
    {
        if ($digimon->user_id == Auth::user()->id) {
            return view('digimon.edit', compact('digimon'));
        }else{
            return redirect()->route('home')->with('errorMessage', 'Non puoi modificare questo digimon, non sei il suo Domatore');
        }
    }

    public function update(DigimonEditRequest $request, Digimon $digimon)
    {
    
        if ($digimon->user_id === auth()->id()) {
            $digimon->name = $request->name;
            $digimon->level = $request->level;
            $digimon->type = $request->type;

            if ($request->hasFile('img')) {
                $request->validate(['img' => 'image']);
                $digimon->img = $request->file('img')->store('images', 'public');
            }

            $digimon->save();

            return redirect()->route('digimon.list')->with('success', 'Digimon modificato con successo!');
        } else {
            return redirect()->route('digimon.list')->with('error', 'Non sei autorizzato a modificare questo Digimon!');
        }
    }

    public function delete(Digimon $digimon)
    {
    
        if ($digimon->user_id == Auth()->id()) {
            $digimon->delete();
            return redirect()->route('digimon.list')->with('success', 'Digimon eliminato dal DigiDex!');
        } else {
            return redirect()->route('digimon.list')->with('error', 'Non sei autorizzato a eliminare questo Digimon!');
        }
    }
}

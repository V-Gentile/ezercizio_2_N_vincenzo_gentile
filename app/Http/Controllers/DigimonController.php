<?php

namespace App\Http\Controllers;

use App\Models\Digimon;
use App\Models\Attribute;
use App\Http\Requests\DigimonRequest;
use App\Http\Requests\DigimonEditRequest;
use Illuminate\Support\Facades\Storage;
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

    public function digidex() {
        $digidex = Digimon::all();
        return view('digimon.digidex', ['digidex' => $digidex]);
    }

    public function crea() {
        $attributes = Attribute::all();
        return view('digimon.digimon-crea', compact('attributes'));
    }

    public function store(DigimonRequest $request) {
    
        $imagePath = null;

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('images', 'public');
        }

        $digimon = Digimon::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'level' => $request->level,
            'type' => $request->type,
            'img' => $imagePath,
        ]);

        if ($request->has('attribute_ids')) {
            $digimon->attributes()->attach($request->input('attribute_ids'));
        }

        return redirect()->route('home')->with('success', 'Digimon inserito con successo!');
    }

    public function mondettagli(Digimon $mon) {
        return view('digimon.digimon-dettagli', compact('mon'));
    }

    public function edit(Digimon $mon) {
        $attributes = Attribute::all();
        
        return view('digimon.edit', compact('mon', 'attributes'));
    }

    public function update(DigimonEditRequest $request, Digimon $mon) {
        
        if ($mon->user_id === auth()->id()) {
            $mon->name = $request->name;
            $mon->level = $request->level;
            $mon->type = $request->type;

            if ($request->hasFile('img')) {
                $request->validate(['img' => 'image']);
                $mon->img = $request->file('img')->store('images', 'public');
            }

            $mon->save();

            $mon->attributes()->sync($request->input('attribute_ids', []));

            return redirect()->route('digimon.list')->with('success', 'Digimon modificato con successo!');
        } else {
            return redirect()->route('digimon.list')->with('error', 'Non sei autorizzato a modificare questo Digimon!');
        }
    }

    public function destroy(Digimon $mon) {
    
        if ($mon->user_id === auth()->id()) {
            
            if ($mon->img) {
                Storage::disk('public')->delete($mon->img);
            }

            $mon->attributes()->detach();

            $mon->delete();

            return redirect()->route('digimon.list')->with('success', 'Digimon eliminato dal DigiDex!');
        }

        return redirect()->route('digimon.list')->with('error', 'Non sei autorizzato a eliminare questo Digimon!');
    }
}

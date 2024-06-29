<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return Inertia::render('Pizza/All', ['pizzas' => $pizzas]);
    }

    public function edit(Pizza $pizza): \Inertia\Response
    {
        return Inertia::render('Pizza/Edit', ['pizza' => $pizza]);
    }

    public function update(Request $request, Pizza $pizza)
    {
        $pizza->update([
           'status' => $request->status
        ]);
    }

}

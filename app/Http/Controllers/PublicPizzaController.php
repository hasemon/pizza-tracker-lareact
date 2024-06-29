<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Inertia\Inertia;

class PublicPizzaController extends Controller
{

    public function show(Pizza $pizza): \Inertia\Response
    {
        return Inertia::render('Pizza/Show', ['pizza' => $pizza]);
    }

}

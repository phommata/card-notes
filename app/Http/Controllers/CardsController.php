<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Card;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
//        return $card->notes[0]->user; // Eager load: performs another database query each time, n + 1 problem

//        $card = Card::with('notes')->get();
//        $card = Card::with('notes')->find(1);
//        $card = Card::with('notes.user')->find(1); // redundant to call the Card class, already have the Card object
        $card->load('notes.user'); // Eager load

//        return $card;

        return view('cards.show', compact('card'));
    }
}

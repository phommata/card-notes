<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
//use App\Http\Controllers\Controller;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $card->addNote(
            new Note($request->all())
        );

//        return \Redirect::to('/some/new/uri');
//        return redirect()->to('/some/new/uri');
//        return redirect('/some/new/uri');
        return back();
    }
}

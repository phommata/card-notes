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
        $this->validate($request, [
            'body' => 'required|min:10',
//            'email' => 'email|required|unique:users,email',
        ]);

        $note = new Note($request->all());
//        $note->user_id = 1;
//        $note->by(Auth::user());

//        $card->addNote($note, 1);
        $card->addNote($note, 1);

//        return \Redirect::to('/some/new/uri');
//        return redirect()->to('/some/new/uri');
//        return redirect('/some/new/uri');
        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return back();
    }
}

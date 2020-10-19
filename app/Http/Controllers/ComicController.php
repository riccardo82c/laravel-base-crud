<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $data = Comic::all();

        return view('comic', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store() {

        /* senza questa istruzione i campi che possono essere nulli nn vengono presi */
        $data = request()->all();

        /* se ho tutti i campi non nullable posso togliere l'istruzione sopra e metto $data= alla seguente */

        $this->validateData();

        $comic = Comic::create($data);

        return redirect()->route('comic.show', compact('comic'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /* ********************************************* */
    /* METODO PRECEDENTE */
    /* ********************************************* */
    /* public function show($id) {
    $comic = Comic::findOrFail($id);
    return view('show', compact('comic'));
    } */

    public function show(Comic $comic) {

        /* Creo errors in view ci metto il layout che voglio e verro riportato a quella pagina in automatico dalla seguente istruzione invece che andare alla 404 di default */
        if (empty($comic)) {
            abort(404);
        }
        /*  */

        return view('show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic) {
        return view('insert', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Comic $comic) {

        $data = request()->all();

        $this->validateData();

        $comic->update($data);
        return view('show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic) {
        $comic->delete();
        return redirect()->route('comic.index');

    }

    /* validation */

    private function validateData() {
        request()->validate([
            'titolo' => 'required|max:255|min:2',
            'autore' => 'required|max:255|min:2',
            'quantita' => 'required|numeric|min:0',
        ],
            [
                'titolo.required' => 'Titolo non può essere vuoto',
                'titolo.max' => 'Titolo non può essere più lungo di :max caratteri',
                'titolo.min' => 'Titolo non può essere più corto di :min caratteri',
                'autore.required' => 'Autore non può essere vuoto',
                'autore.max' => 'Autore non può essere più lungo di :max caratteri',
                'autore.min' => 'Autore non può essere più corto di :min caratteri',
                'quantita.required' => 'Quantità non può essere vuoto',
                'quantita.min' => 'Quantità non può essere più corto di :min caratteri',
            ]);
    }
}

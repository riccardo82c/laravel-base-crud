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
    public function store(Request $request, Comic $comicNew) {

        $data = $request->all();

        $request->validate([
            'titolo' => 'required|max:255|min:2',
            'autore' => 'required|max:255|min:2',
            'quantita' => 'required|numeric|min:0',
        ]);

        $comicNew->fill($data);

        Comic::create($data);
        /* equivalente di: */
        /* $result = $comicNew->save(); */

        return redirect()->route('comic.index');
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
    $comic = Comic::find($id);
    return view('show', compact('comic'));
    } */

    public function show(Comic $comic) {

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
    public function update(Request $request, Comic $comic) {

        $data = $request->all();

        $request->validate([
            'titolo' => 'required|max:255|min:2',
            'autore' => 'required|max:255|min:2',
            'quantita' => 'required|numeric|min:0',
        ]);

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
}

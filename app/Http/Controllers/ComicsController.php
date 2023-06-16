<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comics::All();

        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|max:50|unique:comics',
                'description' => 'required',
                'thumb' => 'nullable|url',
                'price' => 'required|numeric',
                'series' => 'required',
                'sale_date' => 'required|date',
                'type' => 'required',
                'artists' => 'required',
                'writers' => 'required',
            ],
            [
                'title.required' => 'Il campo Titolo è obbligatorio.',
                'title.max' => 'Il campo Titolo non deve superare i 50 caratteri.',
                'title.unique' => 'Il Titolo è già stato preso.',
                'description.required' => 'Il campo Descrizione è obbligatorio.',
                'thumb.url' => 'Il campo Thumb deve essere un URL valido.',
                'price.required' => 'Il campo Prezzo è obbligatorio.',
                'price.numeric' => 'Il campo Prezzo deve essere un numero.',
                'series.required' => 'Il campo Serie è obbligatorio.',
                'sale_date.required' => 'Il campo Data di Vendita è obbligatorio.',
                'sale_date.date' => 'Il campo Data di Vendita deve essere una data valida.',
                'type.required' => 'Il campo Tipo è obbligatorio.',
                'artists.required' => 'Il campo Artisti è obbligatorio.',
                'writers.required' => 'Il campo Scrittori è obbligatorio.',
            ]
        );

        $form_data = $request->all();

        $newComics = new Comics();
        $newComics->fill($form_data);
        $newComics->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singoloComic = Comics::findOrFail($id);

        return view('pages.comics.show', compact('singoloComic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comic)
    {
        return view('pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
    {

        $request->validate(
            [
                'title' => 'required|max:50|unique:comics',
                'description' => 'required',
                'thumb' => 'nullable|url',
                'price' => 'required|numeric',
                'series' => 'required',
                'sale_date' => 'required|date',
                'type' => 'required',
                'artists' => 'required',
                'writers' => 'required',
            ],
            [
                'title.required' => 'Il campo Titolo è obbligatorio.',
                'title.max' => 'Il campo Titolo non deve superare i 50 caratteri.',
                'title.unique' => 'Il Titolo è già stato preso.',
                'description.required' => 'Il campo Descrizione è obbligatorio.',
                'thumb.url' => 'Il campo Thumb deve essere un URL valido.',
                'price.required' => 'Il campo Prezzo è obbligatorio.',
                'price.numeric' => 'Il campo Prezzo deve essere un numero.',
                'series.required' => 'Il campo Serie è obbligatorio.',
                'sale_date.required' => 'Il campo Data di Vendita è obbligatorio.',
                'sale_date.date' => 'Il campo Data di Vendita deve essere una data valida.',
                'type.required' => 'Il campo Tipo è obbligatorio.',
                'artists.required' => 'Il campo Artisti è obbligatorio.',
                'writers.required' => 'Il campo Scrittori è obbligatorio.',
            ]
        );

        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //validation
        $request->validate([
            'title' => 'required|max:100',
            'thumb' => 'max:255',
            'price' => 'decimal:2',
            'series' => 'required|max:255',
            'sale_date' => 'date',
            'artists' => 'required',
            'writers' => 'required'
        ],
        [
            'title.required' => 'Questo campo è obbligatorio',
            'title.max' => 'Il numero massimo di caratteri è 100',
            'thumb.max' => 'Il numero massimo di caratteri è 255',
            'price.decimal' => 'Puoi inserire massimo due numeri dopo la virgola',
            'series.required' => 'Questo campo è obbligatorio',
            'series.max' => 'Il numero massimo di caratteri è 255',
            'sale_date.date' => 'Deve essere una data in formato gg/mm/aaaa',
            'artists.required' => 'Questo campo è obbligatorio',
            'writers.required' => 'Questo campo è obbligatorio',
        ]);

        $form_data = $request->all();
        $comic = new Comic();

        // $comic->title = $form_data['title'];
        // $comic->description = $form_data['description'];
        // $comic->thumb = $form_data['thumb'];
        // $comic->price = $form_data['price'];
        // $comic->series = $form_data['series'];
        // $comic->sale_date = $form_data['sale_date'];
        // $comic->type = $form_data['type'];
        // $comic->artists = $form_data['artists'];
        // $comic->writers = $form_data['writers'];
        $comic->fill($form_data);
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {   
        //validation
        $request->validate([
            'title' => 'required|max:100',
            'thumb' => 'max:255',
            'price' => 'decimal:2',
            'series' => 'required|max:255',
            'sale_date' => 'date',
            'type' => 'required|max:50',
            'artists' => 'required',
            'title' => 'required'
        ],
        [
            'title.required' => 'Questo campo è obbligatorio',
            'title.max' => 'Il numero massimo di caratteri è 100',
            'thumb.max' => 'Il numero massimo di caratteri è 255',
            'price.decimal' => 'Puoi inserire massimo due numeri dopo la virgola',
            'series.required' => 'Questo campo è obbligatorio',
            'series.max' => 'Il numero massimo di caratteri è 255',
            'sale_date.date' => 'Deve essere una data in formato gg/mm/aaaa',
            'type.required' => 'Questo campo è obbligatorio',
            'type.max' => 'Il numero massimo di caratteri è 50',
            'artists.required' => 'Questo campo è obbligatorio',
            'writers.required' => 'Questo campo è obbligatorio',
        ]);

        $form_data = $request->all();
        $comic->fill($form_data);
        $comic->update();
        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}

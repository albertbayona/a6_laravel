<?php

namespace App\Http\Controllers;

use App\Property;
use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications= Publication::all();
        return view('publications.index',compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $properties = Property::where("user_id",auth::user()->id)->get();
        return view("publications.create",compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->propietat_id!=="---"){
            Publication::create(['titol'=>$request->titol,
                'disponibilitat'=>$request->disponibilitat,
                'propietat_id'=>$request->propietat_id,
            ]);

            return redirect()->route('publications.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::find($id);
        return view('publications.show',compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication=Publication::find($id);
        //No me guta la idea de que puedan cambiar el piso de la publicacion lo demas OK

        return view('publications.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publication=Publication::find($id);
        $publication->update(['titol'=>$request->titol,
            'disponibilitat'=>$request->disponibilitat,
        ]);

        return redirect()->route('publications.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        publication::destroy($id);
        return redirect()->route('publications.index');
    }
}

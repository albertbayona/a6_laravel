<?php

namespace App\Http\Controllers;

use App\Property;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    function __construct()
    {
//        $this->middleware(['auth','role:admin']);
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->hasAnyRole("admin")){
            $properties= Property::all();
        }else{
            $properties = Property::where("user_id",auth::user()->id)->get();
        }

        return view('properties.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path="";
        if($request->file('photo')){
            $path=$request->file('photo')->store('photos','public');
        }
        Property::create(['title'=>$request->title,
            'lloc'=>$request->lloc,
            'metres2'=>$request->metres2,
            'user_id'=>auth::user()->id,
            'image_route'=>$path
        ]);

        return redirect()->route('properties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property=Property::find($id);
        $users=User::where("rol_id",Role::where("Rol","user")->first()->id)->get();

        return view('properties.edit',compact('property','users'));
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
//        dd($request);
        if($request->file('photo')){
            $path=$request->file('photo')->store('photos','public');
        }

        $user_id = auth::user()->id;
        if(auth::user()->hasAnyRole("admin")){
            $user_id = $request->user_id;
        }
        $property=Property::find($id);
        if(isset($path)){
            $property->update(['title'=>$request->title,
                'lloc'=>$request->lloc,
                'user_id'=>$user_id,
                'image_route'=>$path
            ]);
        }else{
            $property->update(['title'=>$request->title,
                'lloc'=>$request->lloc,
                'user_id'=>$user_id
            ]);
        }

        return redirect()->route('properties.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return redirect()->route('properties.index');
    }
}

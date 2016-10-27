<?php

namespace App\Http\Controllers\Jumpstart;

use Illuminate\Http\Request;
use App\Http\Requests\Rol\RolCreateRequest;
use App\Http\Requests\Rol\RolUpdateRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Jumpstart\M_rol;
use Session;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    
    public function __construct()
    {
        $this->middleware('admin', ['only' => [
            'update','edit','destroy','show'
        ]]);
    }

    public function index()
    {
        //
        $roles = M_rol::select('id_rol', 'etiqueta')->paginate(5);
        return view('roles.index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("roles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolCreateRequest $request)
    {
        //
        M_rol::create(['etiqueta' => $request['etiqueta']]);
        Session::flash('save', 'Operación Exitosa!');
        return redirect()->route('roles.index');
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
        $rol = M_rol::select('id_rol', 'etiqueta')->where('id_rol','=',$id)->first();
        return view('roles.show')->with('roles', $rol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $roles = M_rol::FindOrFail($id);
        return view('roles.edit', array('roles' => $roles));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolUpdateRequest $request, $id)
    {
        //
        $roles = M_rol::FindOrFail($id);
        $roles->fill($request->all())->save();
        Session::flash('update', 'Operación Exitosa!');
        return redirect()->route('roles.index');
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
        M_rol::FindOrFail($id)->delete();
        Session::flash('delete', 'Operación Exitosa!');
        return redirect()->route('roles.index');
    }
}

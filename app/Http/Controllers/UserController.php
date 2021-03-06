<?php

namespace App\Http\Controllers;

use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        dd("asdffdsdfaaa");
        if ($user->isAdmin()) {
            return view('pages.admin.home');
        }

        $asignados = \App\Asignacion::all()->where('id_referente', $user->id);

        $patrocinador_id = \App\Driver::where('user_id', $user->id)->get()->first()->patrocinador_id;

        $patrocinador = \App\Models\User::find($patrocinador_id);

        return view('pages.driver.home', compact('asignados', 'patrocinador'));
    }
}

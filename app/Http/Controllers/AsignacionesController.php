<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\User;
use App\Driver;
use App\Asignacion;

use Validator;

class AsignacionesController extends Controller
{
    public function index()
    {
        //$projects = auth()->user()->projects;

        return view('driver.index', compact('projects'));
    }

    public function show(Project $project)
    {
        if (auth()->user()->isNot($project->owner))
        {
            abort(403);
        }

        return view('projects.show', compact('project'));
    }

    public function store(Request $request)
    {
        $asignacion = Asignacion::create([
            'id_referente'       => auth()->user()->id,
            'correo_referido' => $request->input('correo_referido'),
            'pendiente'       => 1,
        ]);

        $asignacion->save();

        return redirect('/home');
    }

    public function create()
    {
        return view('asignaciones.create');
    }
}

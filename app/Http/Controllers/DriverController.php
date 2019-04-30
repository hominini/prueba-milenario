<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\User;
use App\Driver;
use Illuminate\Support\Facades\DB;

use Validator;

class DriverController extends Controller
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

        $validator = Validator::make($request->all(),
            [
                'name'                  => 'required|max:255|unique:users',
                'first_name'            => '',
                'last_name'             => '',
                'email'                 => 'required|email|max:255|unique:users',
                'password'              => 'required|min:6|max:20|confirmed',
                'password_confirmation' => 'required|same:password',
                'telefono'              => 'required|max:9',
                'celular'               => 'required|max:10',
            ],
        );

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::transaction(function () use ($request) {

            //$ipAddress = new CaptureIpTrait();
            $profile = new Profile();

            try {
                $user = User::create([
                    'name'             => $request->input('name'),
                    'first_name'       => $request->input('first_name'),
                    'last_name'        => $request->input('last_name'),
                    'email'            => $request->input('email'),
                    'password'         => bcrypt($request->input('password')),
                    'token'            => str_random(64),
                    //'admin_ip_address' => $ipAddress->getClientIp(),
                    'activated'        => 1,
                ]);

                $user->profile()->save($profile);
                $user->attachRole(4);

                $user->save();

                $driver = Driver::create([
                    'user_id'             => $user->id,
                    'patrocinador_id'     => $request->input('patrocinador_id'),
                    'cedula'              => $request->input('cedula'),
                    'pasaporte'           => $request->input('pasaporte'),
                    'genero'              => $request->input('genero'),
                    'estado'              => $request->input('estado'),
                    //'google_location'     => $request->input('google_location'),
                    'google_location'     => 'dummy location',
                    'direccion1'          => $request->input('direccion1'),
                    //'direccion2'          => $request->input('direccion2'),
                    'direccion2'          => 'lorem ipsum',
                    'nacimiento'          => $request->input('nacimiento'),
                    'telefono'            => $request->input('telefono'),
                    'celular'             => $request->input('celular'),
                    'num_deposito'        => $request->input('num_deposito'),
                    'p_privacidad'        => ($request->input('p_privacidad') == 'checked' ? 1 : 0),
                    'a_confidencialidad'  => ($request->input('a_confidencialidad') == 'checked' ? 1 : 0),
                ]);
                $driver->save();
            } catch (\Exception $e) {
                DB::rollback();
                return abort("503");
            }
        });

        return redirect('/home')->with('success', trans('usersmanagement.createSuccess'));
    }

    public function create()
    {
        $patrocinadores = DB::select(
        DB::raw(
            'select *
            from users join role_user
            where users.id = role_user.user_id and
            role_id=4'
          ));


        return view('drivers.create', compact('patrocinadores'));
    }
}

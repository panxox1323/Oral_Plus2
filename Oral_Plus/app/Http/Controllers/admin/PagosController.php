<?php

namespace Oral_Plus\Http\Controllers\admin;

use DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Oral_Plus\Consulta;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;
use Oral_Plus\Pagos;
use Oral_Plus\User;

class PagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pagar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago = Pagos::create($request->all());

        $message = 'Pago efectuado de: '. $pago->monto . ' al usuario: '. $pago->user->first_name. ' '. $pago->user->last_name;
        Session::flash('message', $message);
        return Redirect::route('admin.users.index');
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
        //
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
    }

    public function pagos($id)
    {
        $consultas = Consulta::where('id_usuario', $id)->get();
        $pagos     = Pagos::where('user_id', $id)->orderBy('fecha', 'desc')->get();
        $usuario =   User::findOrFail($id);

        return view('admin.pagar.index', compact('usuario', 'consultas', 'pagos'));
    }


    public function pagando($id)
    {
        $usuario = User::findOrFail($id);
        return view('admin.pagar.create', compact('usuario'));
    }



    public function pagado(Requests\CreatePagoRequest $request,$id)
    {
        $pago = new Pagos($request->all());
        $usuario = User::findOrFail($id);

        if($usuario->saldo >0 && $pago->monto<=$usuario->saldo)
        {

            $saldo = $usuario->saldo;
            $saldo2 =$usuario->saldo = $saldo - $pago->monto;
            DB::table('users')
                ->where('id', $usuario->id)
                ->update(['saldo' => $saldo2]);
            $pago = Pagos::create($request->all());

            $message = 'El Paciente '. $usuario->first_name .' '. $usuario->last_name . ' pago un total de: '.'$'. number_format($pago->monto);
            Session::flash('message', $message);
            return Redirect::route('admin.users.index');
        }
        else
        {
            $message =  $usuario->first_name . ' '. $usuario->last_name . ' no registra deuda en el sistema o el monto de ' . '$'. number_format($pago->monto) .' que se quiere pagar es superior al saldo: '.'$'. number_format($usuario->saldo);
            Session::flash('message', $message);

            return Redirect::route('admin.users.index');


        }
    }
}

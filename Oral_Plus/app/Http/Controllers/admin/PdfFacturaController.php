<?php

namespace Oral_Plus\Http\Controllers\admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Oral_Plus\Factura;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;

class PdfFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



    }


    public function getData($id)
    {

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = $this->edit($id);
        $view =  View::make('pdf.facturas.index', compact('invoice'))->with('factura', $factura)->render();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        //return $pdf->download('usuarios.pdf');
        return $pdf->stream('invoice');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = Factura::where('id_factura', $id)->first();

        //$facturas = DB::table('factura')->where('id_factura', $id)->first();


        return $factura;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
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
}

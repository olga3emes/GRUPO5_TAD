<?php

namespace App\Http\Controllers;



use App\Mail\DatosCompra;
use App\Models\Carrito_compra;
use App\Models\Linea_carrito;
use App\Models\Compra;
use App\Models\Linea_compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class Carrito_comprasController extends Controller
{

    public function mostrarCarrito()
    {
        $id = Auth::user()->id;
        $mi_carrito = Carrito_compra::findOrFail($id);
        return view('carrito', @compact('mi_carrito'));
    }


    public function eliminarLineaCarrito(Request $request)
    {
        $linea_carrito = Linea_carrito::findOrFail($request->id);
        $linea_carrito->delete();
        return app()->make(Carrito_comprasController::class)->callAction('mostrarCarrito', []);
    }

    public function comprarCarrito()
    {

        $id = Auth::user()->id;
        $mi_carrito = Carrito_compra::findOrFail($id);
        $compra = new Compra();
        $compra->fk_user = $mi_carrito->fk_user;
        $compra->estado = "Pendiente";
        $compra->precio_total = $mi_carrito->precio_total;
        $compra->fecha = date("Y-m-d");
        $compra->save();
        foreach ($mi_carrito->lineas_de_carrito as $linea_carrito) {
            $linea_compra = new Linea_compra();
            $linea_compra->fk_producto_id = $linea_carrito->fk_producto_id;
            $linea_compra->fk_compra_id =  $compra->id;
            $linea_compra->cantidad = $linea_carrito->cantidad;
            $linea_compra->precio_parcial = $linea_carrito->precio_parcial;
            $linea_compra->created_at = $linea_carrito->created_at;
            $linea_compra->updated_at = $linea_carrito->updated_at;
            $linea_compra->save();
        }

        $mail = new DatosCompra($compra);
        Mail::to($id = Auth::user()->email)->send($mail);

        foreach ($mi_carrito->lineas_de_carrito as $linea) {
            $linea->delete();
        }




        return app()->make(Carrito_comprasController::class)->callAction('mostrarCarrito', []);
    }
}

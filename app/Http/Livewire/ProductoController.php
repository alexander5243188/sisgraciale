<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Alert;
use App\Models\SaleDetail;
use App\Models\User;
use App\Models\Status;
use App\Models\Sale;
use App\Models\Almacen;
use Illuminate\Http\Request;
use PDF;
use DB;
use Luecano\NumeroALetras\NumeroALetras;

class ProductoController extends Component
{
    
    //muestra los valores dentro de la tabla
    public function index(){
        //$productos = SaleDetail::all();
        $productos = Alert::where("id","=",1)->get();    
        return view('index')->with('productos', $productos);
    }
    public function datosCliente(){
        $idUltimaVenta = Sale::latest()->first();                    
        view()->share('idUltimaVenta', $idUltimaVenta);
    }
    public function datosQr(){
        $idUltimaVenta = Sale::latest()->first(); 
        $resultado = $idUltimaVenta->nombrecliente.$idUltimaVenta->cedulacliente.$idUltimaVenta->total;         
        view()->share('resultado', $resultado);
    }

    //Metodo para generar PDF
    public function claseCrearAlejandraPDF(){
        //Recuperar todos los productos de la db
        //$productos = Alert::all();
        $productos =[];
        //$productos = SaleDetail::all();

        //RECUPERAMOS EL ID DE LA ULTIMA VENTA QUE SE REGISTRA EN SALE
        $idUltimaVenta = Sale::latest()->first();
        //dd($idUltimaVenta->id);	
        $idNirvana = $idUltimaVenta->id;
       
		//dd($idUltimaVenta->id);	

        //BUSCAMOS DENTRO DE SALE_DETAILS TODOS LOS SALE_ID IDENTICOS
        $productos = SaleDetail::join('sales as s','s.id','sale_details.sale_id')            
        ->select(
            'sale_details.*', 
            's.total as total',
            's.items as item',
            's.nombrecliente as nombre',
            's.cedulacliente as cedula',
            'sale_details.quantity as cantidad'
            )
        ->where('sale_details.sale_id','=',$idNirvana)        
        //->orderBy('id','asc')      
        ->get();

       


             



        //dd($productos);
        //REALIZAR LA SUMA DE VENTAS
        //$suma = DB::table('sales')->where('id', $idNirvana)->value('total');	
        //dd($suma);


/*
        $listaProducto = DB::table('almacens')
		->selectRaw('almacens.name, count(almacens.name), sum(almacens.stock)')			
		->where('almacens.name', '=', $variable)	
		->groupBy('almacens.name')
		->get(); 
*/		
        
        $this->datosCliente();
        $this->datosQr();

        view()->share('productos', $productos);

        //$pdf = PDF::loadView('pdfa.reporte', compact('data','reportType','product','dateFrom','dateTo'));
        $pdf = PDF::loadView('recibo', compact($productos));

        return $pdf->download('archivo-pdf.pdf');
    }

    public function precioLetras(){       
        $mensaje=[];
        //$mensaje = Alert::where("id","=",1)->get(); 
        $idUltimaVenta = Sale::latest()->first();        
        $idNirvana = $idUltimaVenta->id; 
        $precioFinal = DB::table('sales')
            ->select('sales.total')
            ->where('sales.id','=',$idNirvana)
            ->get();
        //dd($precioFinal);
        $precio = DB::table('sales')->where('id', $idNirvana)->value('total');	
        
        $formatter = new NumeroALetras();
        echo $formatter->toMoney($precio, 2, 'BOLIVIANOS', 'CENTAVOS');

        $mensaje = $formatter; 
       
           
        view()->share('mensaje', $mensaje);        
    }
    
}


<?php

use App\Http\Controllers\ExportController;
use App\Http\Livewire\AsignarController;
use App\Http\Livewire\CashoutController;
use App\Http\Livewire\CategoriesController;
use App\Http\Livewire\CoinsController;
use App\Http\Livewire\Component1;
use App\Http\Livewire\DashController;
use App\Http\Livewire\ImportController;
use App\Http\Livewire\PermisosController;
use App\Http\Livewire\PosController;
use App\Http\Livewire\ProductsController;


use App\Http\Livewire\ReportsController;
use App\Http\Livewire\RolesController;
use App\Http\Livewire\Select2;
use App\Http\Livewire\UsersController;
use App\Http\Livewire\InventoryController;
use App\Http\Livewire\BrandController;
use App\Http\Livewire\WholesalerController;
use App\Http\Livewire\CountryController;
use App\Http\Livewire\DepartmentController;
use App\Http\Livewire\IvaController;
use App\Http\Livewire\AlertController;
use App\Http\Livewire\TypeController;
use App\Http\Livewire\StatusController;
//use App\Http\Livewire\ClientController;
use App\Http\Livewire\BarCodeController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\ProveedorController;
use App\Http\Livewire\IngresosController;
use App\Http\Livewire\AlmacenController;

Route::get('/', function () {
    return view('auth.login');
});

//Auth::routes();

Auth::routes(['register' => false]); // deshabilitamos el registro de nuevos users

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('roles', RolesController::class);
    Route::get('permisos', PermisosController::class);
    Route::get('asignar', AsignarController::class);
    Route::get('coins', CoinsController::class);
    Route::get('users', UsersController::class);
    Route::get('inventory', InventoryController::class);
    Route::get('brands', BrandController::class);
    Route::get('wholesalers', WholesalerController::class);
    Route::get('country', CountryController::class);
    Route::get('department',DepartmentController::class);  
    Route::get('iva',IvaController::class);  
    Route::get('alert',AlertController::class);
    Route::get('type',TypeController::class);
    Route::get('status',StatusController::class);
    //Route::get('client',ClientController::class);    
    Route::get('categories', CategoriesController::class)->middleware('role:Admin');
    Route::get('products', ProductsController::class);    
 
    Route::get('pos', PosController::class);
    Route::get('dash', DashController::class);

    Route::get('barcode', BarcodeController::class);
    Route::get('proveedor', ProveedorController::class);
    Route::get('ingreso', IngresosController::class);
    Route::get('almacen', AlmacenController::class);

    Route::group(['middleware' => ['role:Admin']], function () {
          
    });
    
    Route::get('cashout', CashoutController::class);
    Route::get('reports', ReportsController::class);    
    Route::get('import', ImportController::class);

    //reportes PDF
    Route::get('report/pdf/{user}/{type}/{f1}/{f2}', [ExportController::class, 'reportPDF']);
    Route::get('report/pdf/{user}/{type}', [ExportController::class, 'reportPDF']);

   
   
});























Route::get('conte', Component1::class);
Route::get('conte2', function(){
    return view('contenedor');
});



//rutas utils
Route::get('select2', Select2::class);
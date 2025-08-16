<?php

use App\Http\Controllers\BoliviaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ColombiaController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EcuadorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\LocalSaleController;
use App\Http\Controllers\MexicoController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PeruController;
use App\Http\Controllers\UbigeoController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Sales\Http\Controllers\ProductController;

Route::get('cookies_policy', function () {
    return view('cookies_policy');
})->name('cookies_policy');


Route::get('/', function () {
    $ip = $_SERVER['REMOTE_ADDR']; // Esto contendrá la ip de la solicitud.

    $dataArray = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    switch ($dataArray->geoplugin_countryCode) {
        case 'PE':
            return to_route('web_peru_inicio');
        case 'EC':
            return to_route('web_ecuador_inicio');
        case 'BO':
            return to_route('web_bolivia_inicio');
        case 'CO':
            return to_route('web_colombia_inicio');
        case 'MX':
            return to_route('web_mexico_inicio');
        default:
            // Agrega aquí lo que quieres hacer en caso de otros países.
            return to_route('cms_principal');
    }
});


Route::get('/', [WebController::class, 'index'])->name('cms_principal');

Route::get('/home', [WebController::class, 'index'])->name('cms_principal');


Route::get('/peru', [PeruController::class, 'inicio'])->name('web_peru_inicio');
Route::get('/peru.nosotros', [PeruController::class, 'nosotros'])->name('web_peru_nosotros');
Route::get('/peru.productos/{id?}', [PeruController::class, 'productos'])->name('web_peru_productos');
Route::get('/peru.producto-descripcion/{id}', [PeruController::class, 'productodescripcion'])->name('web_peru_producto_descripcion');
Route::get('/peru.testimonios', [PeruController::class, 'testimonios'])->name('web_peru_testimonios');
Route::get('/peru.centros-de-distribucion', [PeruController::class, 'centros'])->name('web_peru_centros');
Route::get('/peru.eventos', [PeruController::class, 'eventos'])->name('web_peru_eventos');
Route::get('/peru.alcanzando-las-estrellas', [PeruController::class, 'estrellas'])->name('web_peru_alcanzando_las_estrellas');
Route::get('/peru.merchandasing', [PeruController::class, 'merchandasing'])->name('web_peru_merchandasing');
Route::get('/peru.zoe-university', [PeruController::class, 'university'])->name('web_peru_university');
Route::get('/peru.contacto', [PeruController::class, 'contacto'])->name('web_peru_contacto');
Route::get('/peru.politicas-de-privacidad', [PeruController::class, 'privacidad'])->name('web_peru_privacidad');
Route::get('/peru.libro-de-reclamaciones', [PeruController::class, 'reclamaciones'])->name('web_peru_reclamaciones');


Route::get('/bolivia', [BoliviaController::class, 'inicio'])->name('web_bolivia_inicio');
Route::get('/bolivia.nosotros', [BoliviaController::class, 'nosotros'])->name('web_bolivia_nosotros');
Route::get('/bolivia.productos/{id?}', [BoliviaController::class, 'productos'])->name('web_bolivia_productos');
Route::get('/bolivia.producto-descripcion/{id}', [BoliviaController::class, 'productodescripcion'])->name('web_bolivia_producto_descripcion');
Route::get('/bolivia.testimonios', [BoliviaController::class, 'testimonios'])->name('web_bolivia_testimonios');
Route::get('/bolivia.centros-de-distribucion', [BoliviaController::class, 'centros'])->name('web_bolivia_centros');
Route::get('/bolivia.eventos', [BoliviaController::class, 'eventos'])->name('web_bolivia_eventos');
Route::get('/bolivia.alcanzando-las-estrellas', [BoliviaController::class, 'estrellas'])->name('web_bolivia_alcanzando_las_estrellas');
Route::get('/bolivia.zoe-university', [BoliviaController::class, 'university'])->name('web_bolivia_university');
Route::get('/bolivia.contacto', [BoliviaController::class, 'contacto'])->name('web_bolivia_contacto');



Route::get('/ecuador', [EcuadorController::class, 'inicio'])->name('web_ecuador_inicio');
Route::get('/ecuador.nosotros', [EcuadorController::class, 'nosotros'])->name('web_ecuador_nosotros');
Route::get('/ecuador.productos/{id?}', [EcuadorController::class, 'productos'])->name('web_ecuador_productos');
Route::get('/ecuador.producto-descripcion/{id}', [EcuadorController::class, 'productodescripcion'])->name('web_ecuador_producto_descripcion');
Route::get('/ecuador.testimonios', [EcuadorController::class, 'testimonios'])->name('web_ecuador_testimonios');
Route::get('/ecuador.centros-de-distribucion', [EcuadorController::class, 'centros'])->name('web_ecuador_centros');
Route::get('/ecuador.eventos', [EcuadorController::class, 'eventos'])->name('web_ecuador_eventos');
Route::get('/ecuador.alcanzando-las-estrellas', [EcuadorController::class, 'estrellas'])->name('web_ecuador_alcanzando_las_estrellas');
Route::get('/ecuador.zoe-university', [EcuadorController::class, 'university'])->name('web_ecuador_university');
Route::get('/ecuador.contacto', [EcuadorController::class, 'contacto'])->name('web_ecuador_contacto');


Route::get('/colombia', [ColombiaController::class, 'inicio'])->name('web_colombia_inicio');
Route::get('/colombia.nosotros', [ColombiaController::class, 'nosotros'])->name('web_colombia_nosotros');
Route::get('/colombia.productos/{id?}', [ColombiaController::class, 'productos'])->name('web_colombia_productos');
Route::get('/colombia.producto-descripcion/{id}', [ColombiaController::class, 'productodescripcion'])->name('web_colombia_producto_descripcion');
Route::get('/colombia.testimonios', [ColombiaController::class, 'testimonios'])->name('web_colombia_testimonios');
Route::get('/colombia.centros-de-distribucion', [ColombiaController::class, 'centros'])->name('web_colombia_centros');
Route::get('/colombia.eventos', [ColombiaController::class, 'eventos'])->name('web_colombia_eventos');
Route::get('/colombia.alcanzando-las-estrellas', [ColombiaController::class, 'estrellas'])->name('web_colombia_alcanzando_las_estrellas');
Route::get('/colombia.zoe-university', [ColombiaController::class, 'university'])->name('web_colombia_university');
Route::get('/colombia.contacto', [ColombiaController::class, 'contacto'])->name('web_colombia_contacto');


Route::get('/mexico', [MexicoController::class, 'inicio'])->name('web_mexico_inicio');
Route::get('/mexico.nosotros', [MexicoController::class, 'nosotros'])->name('web_mexico_nosotros');
Route::get('/mexico.productos/{id?}', [MexicoController::class, 'productos'])->name('web_mexico_productos');
Route::get('/mexico.producto-descripcion/{id}', [MexicoController::class, 'productodescripcion'])->name('web_mexico_producto_descripcion');
Route::get('/mexico.testimonios', [MexicoController::class, 'testimonios'])->name('web_mexico_testimonios');
Route::get('/mexico.centros-de-distribucion', [MexicoController::class, 'centros'])->name('web_mexico_centros');
Route::get('/mexico.eventos', [MexicoController::class, 'eventos'])->name('web_mexico_eventos');
Route::get('/mexico.alcanzando-las-estrellas', [MexicoController::class, 'estrellas'])->name('web_mexico_alcanzando_las_estrellas');
Route::get('/mexico.zoe-university', [MexicoController::class, 'university'])->name('web_mexico_university');
Route::get('/mexico.contacto', [MexicoController::class, 'contacto'])->name('web_mexico_contacto');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('clients', ClientController::class);
    Route::resource('users', UserController::class);
    Route::resource('establishments', LocalSaleController::class);

    Route::delete('establishments/destroies/{id}', [LocalSaleController::class, 'destroy'])->name('establishment_destroies');
    Route::post('establishments/updated', [LocalSaleController::class, 'update'])->name('establishment_updated');

    Route::get(
        'inventory/product/establishment',
        [KardexController::class, 'index']
    )->name('kardex_index');

    Route::post(
        'inventory/product/sizes',
        [KardexController::class, 'kardexDeailsSises']
    )->name('kardex_sizes');

    Route::post(
        'search/person/number',
        [PersonController::class, 'searchByNumberType']
    )->name('search_person_number');

    Route::post(
        'save/person/update/create',
        [PersonController::class, 'saveUpdateOrCreate']
    )->name('save_person_update_create');
    Route::post(
        'search/person/full_name/number',
        [PersonController::class, 'searchByNameOrNumber']
    )->name('search_person_fullname_number');

    Route::get(
        'general/stock',
        [KardexController::class, 'generalStock']
    )->name('generalstock');



    Route::get(
        'company/show',
        [CompanyController::class, 'show']
    )->name('company_show');

    Route::post(
        'company/update_create',
        [CompanyController::class, 'updateCreate']
    )->name('company_update_create');

    Route::get(
        'company/getdata',
        [CompanyController::class, 'getdata']
    )->middleware(['auth', 'verified'])->name('datosempresa');

    Route::resource('products', ProductController::class);
    Route::get('international/cities', [UbigeoController::class, 'index'])->name('ubigeo_list');
    Route::get('international/cities/create/{country_id?}/{department_id?}', [UbigeoController::class, 'create'])->name('ubigeo_create');
    Route::post('international/province/store', [UbigeoController::class, 'store'])->name('ubigeo__state_province_store');
    Route::post('international/cities/store', [UbigeoController::class, 'storeCity'])->name('ubigeo_store');
    Route::delete('international/cities/destroy/{id}', [UbigeoController::class, 'destroy'])->name('ubigeo_destroy');
});

require __DIR__ . '/auth.php';

<?php


use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\LocalSaleController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Modules\Blog\Http\Controllers\BlogController;


Route::get('/', [WebController::class, 'index'])->name('cms_principal');


Route::get('/peru', [WebController::class, 'peruinicio'])->name('web_peru_inicio');
Route::get('/peru.nosotros', [WebController::class, 'perunosotros'])->name('web_peru_nosotros');
Route::get('/peru.productos', [WebController::class, 'peruproductos'])->name('web_peru_productos');
Route::get('/peru.producto-descripcion/{id}', [WebController::class, 'peruproductodescripcion'])->name('web_peru_producto_descripcion');
Route::get('/peru.testimonios', [WebController::class, 'perutestimonios'])->name('web_peru_testimonios');
Route::get('/peru.centros-de-distribucion', [WebController::class, 'perucentros'])->name('web_peru_centros');
Route::get('/peru.centros-de-distribucion-lima', [WebController::class, 'perucentroslima'])->name('web_peru_centros_lima');
Route::get('/peru.eventos', [WebController::class, 'perueventos'])->name('web_peru_eventos');
Route::get('/peru.alcanzando-las-estrellas', [WebController::class, 'peruestrellas'])->name('web_peru_alcanzando_las_estrellas');
Route::get('/peru.contacto', [WebController::class, 'perucontacto'])->name('web_peru_contacto');



Route::get('/bolivia', [WebController::class, 'boliviainicio'])->name('web_bolivia_inicio');
Route::get('/bolivia.nosotros', [WebController::class, 'bolivianosotros'])->name('web_bolivia_nosotros');
Route::get('/bolivia.productos', [WebController::class, 'boliviaproductos'])->name('web_bolivia_productos');
Route::get('/bolivia.testimonios', [WebController::class, 'boliviatestimonios'])->name('web_bolivia_testimonios');
Route::get('/bolivia.centros-de-distribucion', [WebController::class, 'boliviacentros'])->name('web_bolivia_centros');
Route::get('/bolivia.eventos', [WebController::class, 'boliviaeventos'])->name('web_bolivia_eventos');
Route::get('/bolivia.alcanzando-las-estrellas', [WebController::class, 'boliviaestrellas'])->name('web_bolivia_alcanzando_las_estrellas');
Route::get('/bolivia.contacto', [WebController::class, 'boliviacontacto'])->name('web_bolivia_contacto');



Route::get('/ecuador', [WebController::class, 'ecuadorinicio'])->name('web_ecuador_inicio');
Route::get('/ecuador.nosotros', [WebController::class, 'ecuadornosotros'])->name('web_ecuador_nosotros');
Route::get('/ecuador.productos', [WebController::class, 'ecuadorproductos'])->name('web_ecuador_productos');
Route::get('/ecuador.testimonios', [WebController::class, 'ecuadortestimonios'])->name('web_ecuador_testimonios');
Route::get('/ecuador.centros-de-distribucion', [WebController::class, 'ecuadorcentros'])->name('web_ecuador_centros');
Route::get('/ecuador.eventos', [WebController::class, 'ecuadoreventos'])->name('web_ecuador_eventos');
Route::get('/ecuador.alcanzando-las-estrellas', [WebController::class, 'ecuadorestrellas'])->name('web_ecuador_alcanzando_las_estrellas');
Route::get('/ecuador.contacto', [WebController::class, 'ecuadorcontacto'])->name('web_ecuador_contacto');



Route::get('/colombia', [WebController::class, 'colombiainicio'])->name('web_colombia_inicio');
Route::get('/colombia.nosotros', [WebController::class, 'colombianosotros'])->name('web_colombia_nosotros');
Route::get('/colombia.productos', [WebController::class, 'colombiaproductos'])->name('web_colombia_productos');
Route::get('/colombia.testimonios', [WebController::class, 'colombiatestimonios'])->name('web_colombia_testimonios');
Route::get('/colombia.centros-de-distribucion', [WebController::class, 'colombiacentros'])->name('web_colombia_centros');
Route::get('/colombia.eventos', [WebController::class, 'colombiaeventos'])->name('web_colombia_eventos');
Route::get('/colombia.alcanzando-las-estrellas', [WebController::class, 'colombiaestrellas'])->name('web_colombia_alcanzando_las_estrellas');
Route::get('/colombia.contacto', [WebController::class, 'colombiacontacto'])->name('web_colombia_contacto');




Route::get('/mexico', [WebController::class, 'mexicoinicio'])->name('web_mexico_inicio');
Route::get('/mexico.nosotros', [WebController::class, 'mexiconosotros'])->name('web_mexico_nosotros');
Route::get('/peru.productos', [WebController::class, 'peruproductos'])->name('web_peru_productos');
Route::get('/mexico.productos', [WebController::class, 'mexicoproductos'])->name('web_mexico_productos');
Route::get('/mexico.testimonios', [WebController::class, 'mexicotestimonios'])->name('web_mexico_testimonios');
Route::get('/mexico.centros-de-distribucion', [WebController::class, 'mexicocentros'])->name('web_mexico_centros');
Route::get('/mexico.eventos', [WebController::class, 'mexicoeventos'])->name('web_mexico_eventos');
Route::get('/mexico.alcanzando-las-estrellas', [WebController::class, 'mexicoestrellas'])->name('web_mexico_alcanzando_las_estrellas');
Route::get('/mexico.contacto', [WebController::class, 'mexicocontacto'])->name('web_mexico_contacto');

/*
Route::get('/blog/home', [BlogController::class, 'index'])->name('blog_principal');
Route::get('/article/{url}', [BlogController::class, 'article'])->name('blog_article_by_url');
Route::get('/category/{id}', [BlogController::class, 'category'])->name('blog_category');
Route::get('/policies', [BlogController::class, 'policies'])->name('blog_policies');
Route::get('/contact-us', [BlogController::class, 'contactUs'])->name('blog_contact_us');

Route::get('/stories/article/{url}', [BlogController::class, 'storiesArticle'])->name('blog_stories_article_by_url');
Route::get('/stories/policies', [BlogController::class, 'storiesPolicies'])->name('blog_stories_policies');
Route::get('/stories/contact-us', [BlogController::class, 'storiesContactUs'])->name('blog_stories_contact_us');
*/

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

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
});

require __DIR__ . '/auth.php';

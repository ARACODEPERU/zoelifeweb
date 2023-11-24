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
Route::get('/peru.coffee-3-en-1', [WebController::class, 'perucoffee3en1'])->name('web_peru_coffee_3_en_1');
Route::get('/peru.harina-de-moringa', [WebController::class, 'peruharinademoringa'])->name('web_peru_harina_de_moringa');
Route::get('/peru.power', [WebController::class, 'perupower'])->name('web_peru_power');
Route::get('/peru.alkalino', [WebController::class, 'perualkalino'])->name('web_peru_alkalino');
Route::get('/peru.aceite-de-moringa', [WebController::class, 'peruaceitemoringa'])->name('web_peru_aceite_de_moringa');
Route::get('/peru.testimonios', [WebController::class, 'perutestimonios'])->name('web_peru_testimonios');
Route::get('/peru.centros-de-distribucion', [WebController::class, 'perucentros'])->name('web_peru_centros');
Route::get('/peru.eventos', [WebController::class, 'perueventos'])->name('web_peru_eventos');
Route::get('/peru.centros-de-distribucion-lima', [WebController::class, 'perucentroslima'])->name('web_peru_centros_lima');
Route::get('/peru.alcanzando-las-estrellas', [WebController::class, 'peruestrellas'])->name('web_peru_alcanzando_las_estrellas');
Route::get('/peru.contacto', [WebController::class, 'perucontacto'])->name('web_peru_contacto');


Route::get('/bolivia', [WebController::class, 'boliviainicio'])->name('web_bolivia_inicio');


Route::get('/ecuador', [WebController::class, 'ecuadorinicio'])->name('web_ecuador_inicio');


Route::get('/colombia', [WebController::class, 'colombiainicio'])->name('web_colombia_inicio');


Route::get('/mexico', [WebController::class, 'mexicoinicio'])->name('web_mexico_inicio');

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

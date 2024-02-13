<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\OptionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/',function (){
    return view('HouseHome');
});
Route::get('/login',[AuthController::class,'login'])
    ->middleware('guest')
    ->name('login');
Route::get('/login', 'AuthController@login')->name('login');

Route::post('/login',[AuthController::class,'doLogin']);
Route::delete('/logout',[AuthController::class,'logout'])
    ->middleware('auth')
    ->name('logout');*/
/*Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
$idRegex='[0-9]+';
$slugRegex='[0-9a-z\-]+';
Route::get('/', function () {
    return view('/HouseHome');
});
//Route::get('/',[HomeController::class,'base']);
Route::get('/biens',[PropertyController::class,'index'])->name('property.index');
Route::get('/biens/{slug}-{property}',[PropertyController::class,'index'])->name('property.show')->where([
    'property'=> $idRegex,
    'slug'=>$slugRegex
]);
Route::post('/biens/{property}/contact',[PropertyController::class,'contact'])->name('property.contact')->where([
    'property'=>$idRegex,
    //'slug'=>$slugRegex
]);
/*Route::get('/login',[AuthController::class,'login'])
    ->middleware('guest')
    ->name('login');*/
//Route::get('/login', 'AuthController@login')->name('login');
/*Route::get('/admin/login',function (){
    return view('/admin/login');
});*/
Route::get('/admin/login',function (){
    return view('/admin/login');
});
Route::get('/login',[AuthController::class,'login']);
Route::get('/login',[AuthController::class,'login'])->middleware('guest')->name('login');
/*Route::post('/admin/login',[AuthController::class,'doLogin']);
Route::delete('/logout',[AuthController::class,'logout'])
    ->middleware('auth')
    ->name('logout');*/
/*Route::prefix('admin')->name('admin.')->middleware('auth')->group(function (){
    Route::resource('property',PropertyController::class)->except(['show']);
    Route::resource('option',OptionController::class)->except(['show']);
});*/
//Route::get('/admin/admin', 'AuthController')->name('admin.admin');
Route::get('/admin/admin',function (){
    return view('/admin/admin');
});
Route::get('admin.property',[PropertyController::class,'index']);
Route::post('admin.property',[PropertyController::class,'index']);

Route::get('admin/option',[OptionController::class,'index']);
Route::post('admin/option',[OptionController::class,'index']);
/*Route::get('option/index',function (){
    return view('option/index');
});*/
/*Route::get('admin/option',[OptionController::class,'create']);
Route::post('admin/option',[OptionController::class,'create']);*/
Route::get('admin/option',[OptionController::class,'create']);
Route::post('admin/option',[OptionController::class,'create']);

Route::get('admin/option',[OptionController::class,'edit']);
Route::post("admin/option",[OptionController::class,'edit']);

Route::get('admin/option',[OptionController::class,'destroy']);
Route::post('admin/option',[OptionController::class,'destroy']);

Route::get('admin/option', function () {
    // Route action here (e.g., display options overview)
    return view('admin.option');
})->name('admin.option');

/*Route::prefix('admin')->group(function () {
    Route::get('options', function () {
        $options = \App\Models\Option::all(); // Replace with your logic
        return view('admin.options', compact('options'));
    })->name('admin.options.list');

    Route::post('options/{option}', function (\App\Models\Option $option) {
        $option->delete();
        return redirect()->route('admin.options.list')->with('success', 'L option a bien été supprimé');
    })->name('admin.options.destroy');
});*/
Route::get('admin/option/index', [OptionController::class,'index']);
Route::get('admin/option/create',[OptionController::class,'create']);
Route::post('admin/option/create',[OptionController::class,'create']);

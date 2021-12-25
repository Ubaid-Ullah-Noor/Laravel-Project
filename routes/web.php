
<?php
use App\Http\Controllers\reigistration;
use App\Http\Controllers\reigstrationcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('donate-form',[reigistration:: class,'donate'])->name('donate-form');

Route::get('/', function () {
    return view('blood-theme.index');
});
Route::view('add','registration');
Route::post('add',[reigstrationcontroller::class,'addData']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

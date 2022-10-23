
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;

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

// redirect route because we dont have home page 
Route::get('/', function () {
    return redirect('/employees');
});
// this route to call all employees
Route::get('/employees', [EmployeesController::class , 'getEmployees']);

// this route to call a specific employee by his ID
Route::get('/employees/{id}', [EmployeesController::class , 'getEmployeeById']);

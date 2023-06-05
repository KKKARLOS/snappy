<?php

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

Route::get('/', function () {
    //Uso básico
    // $html = '<h1>Hello Pdf</h1>';
    // $pdf = PDF::loadHtml($html);
    // //return $pdf->stream(); 
    // return $pdf->download('hello.pdf');

    //Usando Vistas
    $data = [
        [
            'id' => '1.....-',
            'name' => 'Tesla',
            'logo' => 'data:image/png;base64,'.base64_encode(file_get_contents(public_path('tesla-logo.png'))),
            //'logo' => public_path('tesla-logo.png')    
        ],
        [
            'id' => '2.-',
            'name' => 'BMW',
            'logo' => 'data:image/png;base64,'.base64_encode(file_get_contents(public_path('bmw-logo.png'))),    
        ],
        [
            'id' => '3.-',
            'name' => 'Audi',
            'logo' => 'data:image/png;base64,'.base64_encode(file_get_contents(public_path('audi-logo.png'))),      
        ],
        [
            'id' => '4.-',
            'name' => 'Ferrari',
            'logo' => 'data:image/png;base64,'.base64_encode(file_get_contents(public_path('ferrari-logo.png'))),      
        ], 
        [
            'id' => '5.-',
            'name' => 'Honda',
            'logo' => 'data:image/png;base64,'.base64_encode(file_get_contents(public_path('honda-logo.png'))),       
        ],        
        [
            'id' => '6.-',
            'name' => 'Gatito jpg',
            'logo' => public_path('Cat03.jpg'),    
        ],         
        
    ];
    $pdf = PDF::loadView('pdf.tutorial',['cars' => $data ]);
    return $pdf->stream(); 


//    return view('welcome');
});

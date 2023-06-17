<?php

use App\Models\books;
// use App\Http\Controllers\bookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', function () {
        // $data= books::get();
        // dd($data);
    return view('home');
});


Route::get('/profile', function () {
    return view('profile');
});
Route::post('/profile', function (Request $request) {
        $image= $request-> file("img");
        $client_id = env('IMGUR_CLIENT_ID');
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'https://api.imgur.com/3/image', [
            'headers' => [
                'authorization' => 'Client-ID ' . $client_id,
                // if we want to store the image to our account
                // 'authorization' => 'Bearer '. env('IMGUR_ACCESS_TOKEN'),
                'content-type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'image' => base64_encode(file_get_contents($image)),
            ],
        ]);

        // get link
        $link = json_decode($response->getBody()->getContents())->data->link;
    
    books::create([
    'img' => $link,
    'name' => request('name'),
    'author_name' => request('author_name'),
    'book_types' => request('book_types'),
    'email' => request('email'),
    'mailing_address' =>  request('mailing_address'),
    'city' => request('city'),
    'state_or_province' => request('state_or_province'),
    'postalcode'=> request('postalcode'),
    'product_description' => request('product_description')
    ]);

    return redirect('/profile');
});


    Route::get('/book_detail', function (Request $request) {
        // $id= $request->query("id");
        // $data= books::where("id", $id)->get();
        // dd($data);
        return view('book_detail');
    });



    Route::get('/about_us', function () {
        return view('about_us');
    });
//register
    // Route::get('/register', function () {
    //     return view('register');
    // });
    Route::get('register', [RegisterController::class,'index'])->name('register');
    Route::post('/register',[RegisterController::class,'store']);

    // Route::get('/login', function () {
    //     return view('login');
    // });
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login',[LoginController::class,'store']);

    Route::get('/post', function () {
        return view('post');
    });
    Route::get('/homepage2', function () {
        return view('homepage2');
    });
    Route::get('/privacy', function () {
        return view('privacy');
    });
    Route::get('/termcondition', function () {
        return view('termcondition');
    });
    Route::get('/contactus', function () {
        return view('contactus');
    });

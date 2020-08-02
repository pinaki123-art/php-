Route::get('/', function() {
    return view('welcome');

});

Route::get('/about', function() {
    return view('about');

});

// for show data of table
Route::get('/about', function() {
    
    return view('about', [
        'artefact' => App\Artefact::take(3)->latest()->get()
    ]);

});
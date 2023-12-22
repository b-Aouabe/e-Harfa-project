<?php

use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Course;

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
    return view('welcome', [
        'courses' => Course::latest()->get()
    ]);
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/dashboard', function () {

    // Define the 'page' object
    class Page
    {
        public $language;
        private $url;
        public $title;
        public $description ;

        public function __construct($language, $url, $title, $description)
        {
            $this->language = $language;
            $this->url = $url;
            $this->title = $title;
            $this->description = $description;
        }

        public function getUrl()
        {
            return url($this->url);
        }
    }

    return view('dashboard.index', [
        'page' => new Page('en', '/dashboard', 'Dashboard', 'This is the dashboard page.')
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChampadeviInfoController;
use App\Http\Controllers\MajorAttractionController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;

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

Route::get('/balkumari-hall', [MeetingController::class, 'balkumari'])->name('balkumari.show');
Route::get('/about-us', [AboutUsController::class, 'show'])->name('about-us.show');
Route::get('/restaurant/{slug}', [RestaurantController::class, 'show'])->name('restaurant.detail');
Route::get('/room/{id}', [RoomController::class, 'show'])->name('room.detail');
Route::get('/review', [ReviewController::class, 'review'])->name('review.show');
Route::get('/major-attractions', [MajorAttractionController::class, 'index'])->name('major.show');
Route::get('/services', [ServiceController::class, 'index'])->name('service.show');

Route::get('/champadevi-info', [ChampadeviInfoController::class, 'index'])->name('champadevi.show');
use App\Http\Controllers\Controller;
use App\Http\Controllers\VideoController;

Route::get('/gallery', [Controller::class, 'gallery'])->name('gallery');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/videogallery', [VideoController::class, 'showVideoGallery'])->name('videogallery');
Route::get('/Bishnudevi&BirkheshworHall', [Controller::class, 'bishnudevi'])->name('bishnudevi');
Route::get('/Bagh Bhairab-Hall', [Controller::class, 'bagh'])->name('bagh');
Route::get('/local-attraction', [MajorAttractionController::class, 'local'])->name('local');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');

use App\Http\Controllers\Auth\LoginController;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// Filament dashboard route (protected by auth)
Route::middleware('auth')->get('/dashboard', function () {
    return view('filament::pages.CustomDashboard');
});


use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\File;

Route::get('/storage-link', function () {
    $publicStoragePath = public_path('storage');

    // Remove the old storage link if it exists
    if (File::exists($publicStoragePath)) {
        File::delete($publicStoragePath);
    }

    // Create a new storage link
    Artisan::call('storage:link');

    return 'Old storage link removed and new storage link created successfully!';
});


use App\Http\Controllers\GalleryController;

Route::get('/api/gallery/images', [GalleryController::class, 'getImages']);

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.detail');
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'slider'])->name('slider.show');



Route::get('/run-migration', function () {
    Artisan::call('migrate --path=database/migrations/2025_02_01_180830_create_halls_table.php');
    
    return 'Migration executed successfully!';
});

Route::get('/home', function () {
    return view('frontend.index');
});

Route::get('/', function () {
    return view('frontend.index');
});



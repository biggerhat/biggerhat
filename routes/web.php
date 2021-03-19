<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CharacterPage;
use App\Http\Livewire\FactionPage;
use App\Http\Livewire\MasterPage;
use App\Http\Livewire\ResourcePage;
use App\Http\Livewire\KeywordPage;
use App\Http\Livewire\ResourceTypePage;
use App\Http\Livewire\InstructionPage;
use App\Http\Livewire\BoxPage;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\AdvancedPage;
use App\Http\Livewire\QuestionPage;

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

Route::get('/', [PagesController::class, 'getHome'])->name('home');


Route::get('/resources', [PagesController::class, 'getResources'])->name('resources');
Route::get('/about', [PagesController::class, 'getAbout'])->name('about');
Route::get('/faqs', QuestionPage::class)->name('faqs');
Route::get('/upgrades', [PagesController::class, 'getUpgrades'])->name('upgrades');
Route::get('/characters', [PagesController::class, 'getCharacters'])->name('characters');
Route::get('/keywords', [PagesController::class, 'getKeywords'])->name('keywords');
Route::get('/masters', [PagesController::class, 'getMasters'])->name('masters');
Route::get('/promos', [PagesController::class, 'getPromos'])->name('promos');
Route::get('/blueprints/{instruction:id}/{mini:slug}', InstructionPage::class)->name('instruction.view');
Route::get('/boxes/{box:slug}', BoxPage::class)->name("box.view");
Route::get('/advanced', AdvancedPage::class)->name('advanced');
Route::get('/keywords/{keyword:slug}', KeywordPage::class)->name("keyword.view");
Route::get('/characters/{mini:slug}', CharacterPage::class)->name("character.view");
Route::get('/factions/{faction:slug}', FactionPage::class)->name("faction.view");
Route::get('/masters/{mini:slug}', MasterPage::class)->name("master.view");
Route::get('/resources/types/{resourcetype:slug}', ResourceTypePage::class)->name("resourcetype.view");
Route::get('/resources/{resource:slug}', ResourcePage::class)->name("resource.view");

Route::get('/random', function () {
    $minis = App\Models\Mini::all();
    $mini = $minis->random();
    return redirect()->route('character.view', $mini->slug);
});

Route::get('/user/logout', 'Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//Voyager Routes for Admin Panel
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

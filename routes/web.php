<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('landing');
});

Route::group(['prefix' => 'email'], function(){
    Route::get('inbox', function () { return view('pages.email.inbox'); });
    Route::get('read', function () { return view('pages.email.read'); });
    Route::get('compose', function () { return view('pages.email.compose'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('pages.apps.chat'); });
    Route::get('calendar', function () { return view('pages.apps.calendar'); });
});

Route::group(['prefix' => 'ui-components'], function(){
    Route::get('alerts', function () { return view('pages.ui-components.alerts'); });
    Route::get('badges', function () { return view('pages.ui-components.badges'); });
    Route::get('breadcrumbs', function () { return view('pages.ui-components.breadcrumbs'); });
    Route::get('buttons', function () { return view('pages.ui-components.buttons'); });
    Route::get('button-group', function () { return view('pages.ui-components.button-group'); });
    Route::get('cards', function () { return view('pages.ui-components.cards'); });
    Route::get('carousel', function () { return view('pages.ui-components.carousel'); });
    Route::get('collapse', function () { return view('pages.ui-components.collapse'); });
    Route::get('dropdowns', function () { return view('pages.ui-components.dropdowns'); });
    Route::get('list-group', function () { return view('pages.ui-components.list-group'); });
    Route::get('media-object', function () { return view('pages.ui-components.media-object'); });
    Route::get('modal', function () { return view('pages.ui-components.modal'); });
    Route::get('navs', function () { return view('pages.ui-components.navs'); });
    Route::get('navbar', function () { return view('pages.ui-components.navbar'); });
    Route::get('pagination', function () { return view('pages.ui-components.pagination'); });
    Route::get('popovers', function () { return view('pages.ui-components.popovers'); });
    Route::get('progress', function () { return view('pages.ui-components.progress'); });
    Route::get('scrollbar', function () { return view('pages.ui-components.scrollbar'); });
    Route::get('scrollspy', function () { return view('pages.ui-components.scrollspy'); });
    Route::get('spinners', function () { return view('pages.ui-components.spinners'); });
    Route::get('tabs', function () { return view('pages.ui-components.tabs'); });
    Route::get('tooltips', function () { return view('pages.ui-components.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('cropper', function () { return view('pages.advanced-ui.cropper'); });
    Route::get('owl-carousel', function () { return view('pages.advanced-ui.owl-carousel'); });
    Route::get('sweet-alert', function () { return view('pages.advanced-ui.sweet-alert'); });
});

Route::group(['prefix' => 'menbres'], function(){
    Route::get('ajout-menbres', function () { return view('pages.menbres.ajout-menbres'); });
    Route::get('listes', function () { return view('pages.menbres.listes'); });
    Route::get('edit', function () { return view('pages.menbres.edit'); });
});
// Route::prefix('projects/{project}')->group(function () {
    Route::get('/menbres/listes', [MemberController::class, 'index'])->name('members.index');
    Route::get('/menbres/ajout-menbres', [MemberController::class, 'create'])->name('members.create');
    Route::post('menbres', [MemberController::class, 'store'])->name('members.store');
    Route::get('members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
    Route::put('members/{member}', [MemberController::class, 'update'])->name('members.update');
    Route::delete('members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');
// });
Route::group(['prefix' => 'nouveau-p'], function(){
    Route::get('new-projet', function () { return view('pages.nouveau-p.new-projet'); });
    Route::get('index', function () { return view('pages.nouveau-p.index'); });
});

Route::group(['prefix' => 'tâche'], function(){
    Route::get('apex', function () { return view('pages.tâche.apex'); });
    Route::get('liste-taches', function () { return view('pages.tâche.liste-taches'); });
    Route::get('edit-tache', function () { return view('pages.tâche.edit-tache'); });
    Route::get('morrisjs', function () { return view('pages.tâche.morrisjs'); });
    Route::get('details-tache', function () { return view('pages.tâche.details-tache'); });
    Route::get('Ajout-de-tache', function () { return view('pages.tâche.Ajout-de-tache'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('activité', function () { return view('pages.tables.activité'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
});

Route::group(['prefix' => 'parametre'], function(){
    Route::get('feather-parametre', function () { return view('pages.parametre.feather-icons'); });
    Route::get('flag-parametre', function () { return view('pages.parametre.flag-icons'); });
    Route::get('mdi-parametre', function () { return view('pages.parametre.mdi-icons'); });
});

Route::group(['prefix' => 'general'], function(){
    Route::get('blank-page', function () { return view('pages.general.blank-page'); });
    Route::get('faq', function () { return view('pages.general.faq'); });
    Route::get('invoice', function () { return view('pages.general.invoice'); });
    Route::get('profile', function () { return view('pages.general.profile'); });
    Route::get('pricing', function () { return view('pages.general.pricing'); });
    Route::get('timeline', function () { return view('pages.general.timeline'); });
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', function () { return view('pages.auth.login'); });
    Route::get('register', function () { return view('pages.auth.register'); });
});

Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

// Route::get('/clear-cache', function() {
//     Artisan::call('cache:clear');
//     return "Cache is cleared";
// });

// // 404 for undefined routes
// Route::any('/{page?}',function(){
//     return View::make('pages.error.404');
// })->where('page','.*');

Route::get('/projects/index', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');


// Route::post('/taches/store', 'TacheController@store')->name('taches.store');
// Route pour afficher le formulaire d'ajout d'une tâche
Route::get('/tâche/liste-taches', [TacheController::class, 'index'])->name('taches.index');
Route::get('/tâche/ajout-de-tache', [TacheController::class, 'create'])->name('taches.create');
Route::post('/tâche', [TacheController::class, 'store'])->name('taches.store');
Route::get('/tâche/{id}', [TacheController::class, 'show'])->name('taches.show');
Route::get('/tâche/{id}/edit', [TacheController::class, 'edit'])->name('taches.edit');
Route::put('/tâche/{id}', [TacheController::class, 'update'])->name('taches.update');
Route::delete('/tâche/{id}', [TacheController::class, 'destroy'])->name('taches.destroy');


use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Routes d'authentification
Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout.post');

// Routes nécessitant l'authentification
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

use App\Http\Controllers\EventController;

Route::get('/events', [EventController::class, 'index']);
Route::post('/events', [EventController::class, 'store']);
Route::put('/events/{id}', [EventController::class, 'update']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);






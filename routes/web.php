<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\P1Controller;
use App\Http\Controllers\P2Controller;
use App\Http\Controllers\P3Controller;
use App\Http\Controllers\P4Controller;
use App\Http\Controllers\P5Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

/*
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/basic-table', function () {
    return view('basic-table');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('/compose', function () {
    return view('compose');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/ui', function () {
    return view('ui');
});

Route::get('/datatable', function () {
    return view('datatable');
});

Route::get('/google-maps', function () {
    return view('google-maps');
});

Route::get('/vector-maps', function () {
    return view('vector-maps');
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/500', function () {
    return view('500');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/p1', function () {
    return view('p1');
});
Route::get('/p2-1', function () {
    return view('p2-1');
});
Route::get('/p2-2', function () {
    return view('p2-2');
});
Route::get('/p2-3', function () {
    return view('p2-3');
});
Route::get('/p3-1', function () {
    return view('p3-1');
});
Route::get('/p3-2', function () {
    return view('p3-2');
});


Route::get('p1', [P1Controller::class, 'index'])->name('p1');
Route::post('post-p1', [P1Controller::class, 'postP1'])->name('p1.post');

*/











// Homepage Route
Route::group(['middleware' => ['web', 'checkblocked']], function () {
    Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');
    Route::get('/terms', 'App\Http\Controllers\TermsController@terms')->name('terms');
});

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'App\Http\Controllers\Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'App\Http\Controllers\Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'App\Http\Controllers\Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'App\Http\Controllers\Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'App\Http\Controllers\RestoreUserController@userReActivate']);
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'checkblocked']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'App\Http\Controllers\Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'App\Http\Controllers\Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep', 'checkblocked']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'App\Http\Controllers\UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@show',
    ]);
});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep', 'checkblocked']], function () {
    /*Route::get('/p1', function () {
        return view('p1');
    });*/
    Route::get('/p2-1', function () {
        return view('p2-1');
    });
    Route::get('/p2-2', function () {
        return view('p2-2');
    });



    Route::get('/p2-3', function () {
        return view('p2-3');
    });
    Route::get('/p3-1', function () {
        return view('p3-1');
    });
    Route::get('/p3-2', function () {
        return view('p3-2');
    });


     /*upload test file*/
     Route::get('p2-create', [P2Controller::class,'index'])->name('upload.file');
     Route::post('p2-poste', [P2Controller::class,'postP2'])->name('file.upload.post');


    Route::get('p2-1/view', [P2Controller::class,'p2_1_view'])->name('p2-1.view');
    Route::get('comment', [P2Controller::class,'p2_1_comment'])->name('p2-1.comment');

    Route::get('startup', [StartupController::class, 'index'])->name('startup');
    Route::post('post-startup', [StartupController::class, 'postStartup'])->name('startup.post');
    Route::get('projet', [ProjectController::class, 'index'])->name('projet');
    Route::post('post-projet', [ProjectController::class, 'postProjet'])->name('projet.post');
    Route::get('p1', [P1Controller::class, 'index'])->name('p1');
    Route::post('post-p1', [P1Controller::class, 'postP1'])->name('p1.post');
    // User Profile and Account Routes





    Route::resource(
        'profile',
        \App\Http\Controllers\ProfilesController::class,
        [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'App\Http\Controllers\ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'App\Http\Controllers\ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'App\Http\Controllers\ProfilesController@upload']);
});



// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep', 'checkblocked']], function () {
    Route::resource('/users/deleted', \App\Http\Controllers\SoftDeletesController::class, [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', \App\Http\Controllers\UsersManagementController::class, [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'App\Http\Controllers\UsersManagementController@search')->name('search-users');

    Route::resource('themes', \App\Http\Controllers\ThemesManagementController::class, [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'App\Http\Controllers\AdminDetailsController@listRoutes');
    Route::get('active-users', 'App\Http\Controllers\AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);

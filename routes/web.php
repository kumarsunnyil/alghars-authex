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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    //Route::get('/clear', [ClearCacheController::class, 'index']);
    Route::get('/clear', 'ClearCacheController@index')->name('home.index');
    Route::get('/clear-all-cache', function () {
        // Artisan::call('cache:clear');
        // Artisan::call('route:cache');
        // Artisan::call('view:clear');
        // Artisan::call('config:cache');
        // return '<h3>All Cache has been cleared: - Cache, Route, View, Config</h3>';
    });

    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/about', 'StaticController@index')->name('about.index');

    Route::group(['middleware' => ['guest']], function () {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('/registered   ', 'RegisterController@registered')->name('register.show');
        Route::get('/account/verify/{token}', 'RegisterController@verifyStudentAccount')->name('register.verify');

        /**
         * Register a  student
         */
        //Route::get('/sregister', 'StudentRegisterController@show')->name('register.show');
        //Route::post('/sregister', 'StudentRegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
    });

    Route::group(['middleware' => ['auth', 'permission']], function () {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['prefix' => '/admin'], function () {
            Route::get('/student', 'UsersController@index')->name('users.index');
            Route::get('/users', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');

            Route::get('/{user}/screen/report/{student}', 'AdminController@screenReport')->name('users.screenreport');


/**
 * Profile image code below.
 * https://www.itsolutionstuff.com/post/laravel-profile-image-upload-tutorial-with-exampleexample.html
 */
//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('user.profile');
// Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'store'])->name('user.profile.store');

/** Profile image Code Above */


            Route::get('/send-mail', 'AlgharsMailController@create')->name('mail.create');
            Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify');

            // display all students
            Route::get('/{user}/all/students', 'StudentController@fetchAllStudents')->name('users.students');

            //Screenusers
            Route::get('/assign/screenuser/students', 'ScreenuserController@fetchScreenusers')->name('users.screenuser');
            Route::get('/assign/evaluator', 'ScreenuserController@assignEvaluator')->name('users.evaluator');
            Route::post('/assign/to/evaluator', 'ScreenuserController@assignEvaluatorStore')->name('users.evaluator');
            Route::get('/view/evaluated', 'ScreenuserController@viewEvaluator')->name('users.evaluated');
            Route::get('/student/evaluate/list', 'ScreenuserController@fetchStudentInEvaluation')->name('users.evaluatestudent');
            Route::get('/evaluating/students', 'ScreenuserController@fetchStudentDetail')->name('users.evaluatestudent');

           Route::get('/{user}/studentdetails/{student}', 'ScreenuserController@fetchStudentInfo')->name('users.studentinfo');
           Route::get('/{user}/student/evaluate/{student}', 'ScreenuserController@evaluationSubmission')->name('users.studentinfo');
           Route::post('/{user}/evaluation/submit/{student}', 'ScreenuserController@submitEvaluation')->name('users.studentinfo');

           //Admin Manage Classes.
           Route::get('/users/manage-classes', 'AdminController@index')->name('users.classes');
           Route::post('/users/manage-classes', 'AdminController@manageStore')->name('users.classes');
            //Admin Create Course
           Route::get('/users/create-course', 'AdminController@createCourse')->name('users.createcourse');
           Route::post('/users/create-course', 'AdminController@createStore')->name('users.createcourse');
           //    Route::get('/users', 'UsersController@index')->name('users.index');

            //Teacher
            Route::post('/create/report', 'TeacherController@create')->name('teacher.index');
            Route::get('/fetch/classes', 'TeacherController@fetchAllClasses')->name('teacher.classes');
            Route::get('/{user}//feedback', 'TeacherController@AllStudentFeedback')->name('teacher.feedback');

            // //Calendar Routes
            Route::get('/fullcalendar/ckeditor', 'FullCalenderDemoController@index')->name('teacher.newclasses');
            Route::post('/fullcalendar/create', 'FullCalenderDemoController@create')->name('teacher.newclasses');
            Route::post('/fullcalendar/update', 'FullCalenderDemoController@update')->name('teacher.newclasses');
            Route::post('/fullcalendar/delete', 'FullCalenderDemoController@delete')->name('teacher.newclasses');




        });

        //Student Routes to be moved here later
        /**
         * User Routes
         */

        Route::group(['prefix' => 'student'], function () {
           Route::get('/', 'UsersController@index')->name('users.index');
           Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::get('/{user}/calendar', 'CalendarController@create')->name('calendar.create');
            Route::post('/{user}/date-confirm', 'CalendarController@confirmEvaluatorStore')->name('calendar.confirm');
            // Route::get('/{user}/evaluationInfo', 'CalendarController@getEvalInfo')->name('calendar.create');
        });
        Route::group(['prefix' => 'posts'], function () {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        Route::resource('/admin/roles', RolesController::class);
        Route::resource('/admin/permissions', PermissionsController::class);
    });
});

<?php

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

use App\Models\Carousel as Carousel;


Route::get('/index', function () {
    $aboutus = \App\aboutus::get();
    $documents = \App\documents::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime = Carbon\Carbon::now();

    $mytime->addHours(5);
    $mytime->addMinute(45);

    return view('index', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);



  /*  if (Agent::isMobile()) {
        return view('indexmobile', ['aboutus' => $aboutus, 'notices' => $notices, 'staffs' => $staffs, 'mytime' => $mytime]);
    } else {
        return view('index
        ', ['aboutus' => $aboutus, 'notices' => $notices, 'staffs' => $staffs, 'mytime' => $mytime, 'mytime' => $mytime]);
    }*/


});

Route::get('/', function () {
    $aboutus = \App\aboutus::get();
    $documents = \App\documents::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    if (Agent::isMobile()) {
        return view('indexmobile', ['aboutus' => $aboutus, 'notices' => $notices, 'staffs' => $staffs, 'mytime' => $mytime]);
    } else {
        return view('index
        ', ['aboutus' => $aboutus, 'notices' => $notices, 'staffs' => $staffs, 'mytime' => $mytime, 'mytime' => $mytime]);
    }


});

Route::get('/about', function () {
    $aboutus = \App\aboutus::get();
    $staffs = \App\staffs::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('about', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);


});


Route::get('/contact', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('contact', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});


Route::get('/services', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('services', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});

Route::get('/surveyDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('surveyDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/researchDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    $staffs = \App\staffs::get();

    return view('researchDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/investigationDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);

    $mytime = Carbon\Carbon::now();


    return view('investigationDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/projectDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('projectDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/precontractDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('precontractDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/implementDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('implementDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/operationDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('operationDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/trainingDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('trainingDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/partnershipDetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();

    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('partnershipDetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/architecture', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('architecture', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});


Route::get('/projects   ', function () {
    $aboutus = \App\aboutus::get();
    $documents = \App\documents::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('projects', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});


Route::get('/projectcompleted', function () {
    $aboutus = \App\aboutus::get();
    $documents = \App\documents::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('projectcompleted', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});


Route::get('/projectongoing', function () {
    $aboutus = \App\aboutus::get();
    $documents = \App\documents::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('projectongoing', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});


Route::post(/**
 * @param \Illuminate\Http\Request $request
 * @return $this
 */
    '/sendform', function (\Illuminate\Http\Request $request) {

    $validator = Validator::make($request->all(), [


    ]);

    if ($validator->fails()) {
        return redirect('/contact')
            ->withInput()
            ->withErrors($validator);
    }

    $name = $request->name;
    $surname = $request->surname;
    $phone = $request->phone;
    $messages = $request->message;
    $email = $request->email;


    $data = array('name' => "$name", 'surname' => "$surname", 'phone' => "$phone", 'messages' => "$messages", 'email' => "$email");

    Mail::send(['text' => 'mail'], $data, function ($message) use ($email) {
        $message->to('jrconsultant.jrc@gmail.com')->subject
        ('Message from jrcwebemail');
        $message->from($email);

    });


    echo "Email Sent.Thank you for contacting JR Construction. We shall get back to you at the earliest";

    header("refresh:3; url=contact");

});






/*Route::post('sendbasicemail', 'MailController@basic_email', function (Request $request) {


}


);
Route::get('sendhtmlemail', 'MailController@html_email');
Route::get('sendattachmentemail', 'MailController@attachment_email');


/*Route::get('user/{name}', function ($name) {
    //
})
    ->where('name', '(foo|bar|baz)');
*/


/*Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/carousel', 'HomeController@carouselAdmin')->name('carouselAdmin');
Route::get('/carousel/{section}', 'CarouselController@index')->name('carousel');
Route::post('/intro/carousel', 'CarouselController@saveCarousel')->name('createCarousel');

Route::get('/about/block', 'BlockController@about')->name('about');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hero', 'HomeController@hero')->name('hero');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/

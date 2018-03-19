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



Route::get('/ourteam', function () {
    $aboutus = \App\aboutus::get();
    $staffs = \App\staffs::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('ourteam', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);


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

Route::get('/surveydetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('surveydetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/researchdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    $staffs = \App\staffs::get();

    return view('researchdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/investigationdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime = Carbon\Carbon::now();

    $mytime->addHours(5);
    $mytime->addMinute(45);



    return view('investigationdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/projectdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();

    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('projectdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/precontractdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('precontractdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/implementdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('implementdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/operationdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('operationdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/trainingdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();
    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('trainingdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

});
Route::get('/partnershipdetails', function () {
    $aboutus = \App\aboutus::get();
    $notices = \App\notices::get();
    $mytime = Carbon\Carbon::now();

    $staffs = \App\staffs::get();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('partnershipdetails', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime]);

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
    $projectcompleted = \App\projectcompleted::get();

    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('projectcompleted', ['aboutus' => $aboutus, 'staffs' => $staffs, 'mytime' => $mytime,'projectcompleted' => $projectcompleted, 'notices'=> $notices]);

});


Route::get('/projectongoing', function () {
    $aboutus = \App\aboutus::get();
    $documents = \App\documents::get();
    $notices = \App\notices::get();
    $staffs = \App\staffs::get();
    $projectongoing = \App\projectongoing::get();
    $projectcompleted = \App\projectcompleted::get();


    $mytime = Carbon\Carbon::now();
    $mytime->addHours(5);
    $mytime->addMinute(45);


    return view('projectongoing', ['aboutus' => $aboutus,'projectongoing' => $projectongoing,'projectcompleted' => $projectcompleted, 'staffs' => $staffs, 'mytime' => $mytime, 'notices'=> $notices]);

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

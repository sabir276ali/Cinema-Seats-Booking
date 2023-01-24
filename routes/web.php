<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Movie;
use App\Models\Rating;
use App\Models\Cinema;
use App\Models\Profile;
use App\Models\Booking;
 
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

Route::resource('/users',UserController::class);
 
Route::get('cinema',function(){
$cinema = Cinema::latest()->paginate(5);
return view('cinema',compact('cinema'))->with('i', (request()->input('page', 1) - 1) * 5);
});

Route::get('select/cinema/{id}',[CinemaController::class,'cinema_detail'])->name("select_cinema");

Route::get('/', function () {
   
    $featured=Rating::select('m_id',DB::raw('avg(star_rating) as avg'))->groupBy('m_id')->orderBy('avg','desc')->limit(6)->get();
 
    $length=count($featured);
    $movie_id=array();
    for($i=0;$i<$length;$i++){ 
    array_push($movie_id,$featured[$i]->m_id);
    }
   
    $featured=Movie::find($movie_id);
   
    $now  = Carbon::now()->format('Y-m-d');
    $now_playing=DB::table('cinema_movie')->where('date',$now)->pluck('movie_id');
    $now_playing=Movie::find($now_playing);
     
    $This_week=DB::table('cinema_movie')->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->pluck('movie_id');
    $This_week=Movie::find($This_week);
    
    $comming_soon=DB::table('cinema_movie')->where('date','>',Carbon::now()->endOfWeek())->pluck('movie_id');
    $comming_soon=Movie::find($comming_soon);
    // dd($comming_soon);
    
    //  dd($This_week);
     
    //  $items = Item::select("*")
    //  ->whereBetween('created_at', 
    //          [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
    //      )
    //  ->get();

    //  dd($items);
    //  dd($now_playing);
    //  dd($now_playing);
    // $cinema = Cinema::with(['movies'])->find($cinema);
    // $movie=Movie::select('movies.*')->join('cinema_movie', 'cinema_movie.movie_id', '=', 'movies.id');
    // $now_playing=DB::table('cinema_movie')->join('movies','cinema_movie.movie_id','movies.id')->get();
    // $now_playing=DB::table('movies')->join('cinema_movie','movies.id','cinema_movie.movie_id')->get();
    // $now_playing=DB::table('movies')->join('cinema_movie','movies.id','cinema_movie.movie_id')->get();
    // dd($movie);
    $movie=Movie::latest()->paginate(6);
    return view('welcome',compact('movie','featured','now_playing','This_week','comming_soon'));
});


Route::get('/search',function(Request $request){

     $movie = Movie::Where('title','like',"%{$request->text}%")->paginate(5);
    //  dd( $result );
     return view('catalog1',compact('movie'));

})->name('search');

route::get('/ticket',function(){
    $details="sabir";
    \Mail::to('test@gmail.com')->send(new \App\Mail\TicketMail($details)); 	
});

Route::get('/filter',function(Request $request){
    $start_year= $request->start_year;
    $end_year= $request->end_year;
    $start_rating=$request->start_rating;
    $end_rating=$request->end_rating;
    $genre=$request->genre;

    $movie = Movie::Where('genre',$genre)->whereBetween('rating', [$start_rating,$end_rating])->whereBetween('releasing_year', [$start_year, $end_year])->paginate(10);
    // dd($movie);
    // Where('genre',$genre)
    // ->whereBetween('rating', [$start_rating,$end_rating])
    // ->whereBetween('releasing_year', [$start_year, $end_year])
     return view('catalog1',compact('movie'));

})->name('filter');


Route::get('/movie/{movie}',[MovieController::class,'detail'])->name('detail.show');    


Route::post('/rate/store',function(Request $request){
    $review = new Rating();
    $review->m_id = $request->m_id;
    $review->comments= $request->comment;
    $review->star_rating = $request->rating;
    // $review->user_id = Auth::user()->id;
    // $review->service_id = $request->service_id;
    $review->save();
    return redirect()->back()->with('success','Your review has been submitted Successfully,');
})->name('rate.store');

Route::get('seating/{movie}',function(Movie $movie){
    // $movie=Movie::find($movie->id);
    // dd($movie); 
    $now  = Carbon::now()->format('Y-m-d');
    $date=DB::table('cinema_movie')->where('movie_id',$movie->id)->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
   
    // dd($cinema_movie);

    // $cinema = cinema::with(['cinema'])->find($movie->id)->distinct('id');
    //    dd($cinema);
    return view('seating',compact('movie','date'));
});    

Route::get('payement',function(){
    return view('payement');
});


Route::get('catalog-grid',function(){
    $movie=Movie::latest()->paginate(20);
    return view('catalog1',compact('movie'));
});

Route::get('catalog-list',function(){
    $movie=Movie::latest()->paginate(20);
    return view('catalog2',compact('movie'));
});

Route::get('help',function(){
    return view('faq');
});

Route::get('about',function(){
    return view('about');
});
    
Route::get('error',function(){
    return view('404');
});

Route::prefix('service-provider')->middleware(['auth','isService'])->group(function(){

    //service provider main page 
Route::get('/',function(){
    $movies=Movie::latest()->paginate(5);
        return view('ServiceProvider.index',compact('movies')); 
});

/*
   Movies Routes Starting
*/
// create
Route::get('/movies/create',function(){
        return view('ServiceProvider/Movies/movies_create');
})->name('movie.create');
// edit
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movie.edit');
// index 
Route::get('/movies/home', [MovieController::class,'index'])->name('movie.home');
// store
Route::post('/movies', [MovieController::class,'store'])->name('movie.store');
// update
Route::put('movies/{movie}', [MovieController::class, 'update'])->name('movie.update');
// delete
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movie.destroy');
// show
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movie.show');


/*
   Cinemas Routes Starting
*/

Route::get('/cinemas/create',function(){
        return view('ServiceProvider/Cinemas/cinema_create');
})->name('cinemas.create');

Route::put('cinemas/{cinema}', [CinemaController::class, 'update'])->name('cinema.update');

Route::get('/cinemas', [CinemaController::class,'index'])->name('cinema.home');

Route::post('/cinemas', [CinemaController::class,'store'])->name('cinema.store');

Route::get('/cinemas/{cinema}', [CinemaController::class, 'show'])->name('cinema.show');

Route::delete('/cinemas/{cinema}', [CinemaController::class, 'destroy'])->name('cinema.destroy');

Route::get('/cinemas/{cinema}/edit', [CinemaController::class, 'edit'])->name('cinema.edit');

Route::get('/cinema_movie', function(){

$cinema_movie=DB::table('cinema_movie')->get();

return view('ServiceProvider.cinema_movies',compact('cinema_movie'));

})->name('cinema_movie');

Route::get('/cinema_movie/create', function(){

$cinema=DB::table('cinemas')->get();
$movie=DB::table('movies')->get();
return view('ServiceProvider.playing.create',compact('cinema','movie'));
    
})->name('cinema_movie.create');



Route::post('/cinema_movie', function(Request $request){
// dd($request);
$request->validate([
    'cinema_id' => 'required',
    'movie_id' => 'required',
    'date' => 'required',
    'time' => 'required',
]);
// $input = $request->all();
DB::insert('insert into cinema_movie (cinema_id,movie_id,date,time,created_at,updated_at) values (?,?,?,?,?,?)', [$request->cinema_id, $request->movie_id,$request->date,$request->time,Carbon::now(),Carbon::now()]);

return redirect()->route('cinema_movie')
->with('success','Cinema is created successfully.');

})->name('cinema_movie.store');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

// in working

Route::get('seating/get_date/{date}',function($date){
// dd($date);
$data=DB::table('cinema_movie')->where('date',$date)->get();

$cinema=Cinema::find($data[0]->cinema_id)->get();
// dd($cinema);
// $movie=DB::table('movies')->where('id',$date)->get();
// dd($data);
// return $data;
return response()->json(array('data'=> $data,'cinema'=>$cinema), 200);
})->name('check_date');


Route::get('seating/get_cinema/{date}/{time}/{m_id}',function($date,$time,$m_id){
 
    $cinema_id=DB::table('cinema_movie')->where('movie_id',$m_id)->where('date',$date)->where('time',$time)->pluck('cinema_id');
   
    $cinema=Cinema::find($cinema_id);
    // dd($cinema);
    return response()->json(array('cinema'=>$cinema), 200);

})->name('check_cinema');


Route::get('seating/get_seat/{date}/{time}/{m_id}/{cinema}',function($date,$time,$m_id,$cinema){
 
    $seat=DB::table('bookings')->where('m_id',$m_id)->where('date',$date)->where('time',$time)->where('cinema',$cinema)->pluck('seat_no');
   
    // $cinema=Cinema::find($cinema_id);
    // dd($cinema);
    return response()->json(array('seat'=>$seat), 200);

})->name('check_seat');
    


// forget and verify
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::prefix('/')->middleware(['auth','isAdmin'])->group(function(){

route::get('admin',function(){
        $booking=Booking::whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        return view('Admin.index',compact('booking'));
});

});



Route::post('seating/book/store',function(Request $request){
    // dd($request);
    $seats=$request->seat;
    $cinema=$request->cinema;
    $date=$request->date;
    $time=$request->time;
    $m_id=$request->m_id;
    
    $seat_numbering=0;
    foreach ($seats as $seats) {
         DB::insert('insert into bookings (date, time, cinema,m_id,seat_no,created_at,updated_at,u_id) values (?,?,?,?,?,?,?,?)', [$date, $time, $cinema,$m_id,$seats,Carbon::now(),Carbon::now(),Auth::user()->id]);
        ++$seat_numbering;
    }
    $ticket_no = Booking::count();
    $ticket_no=$ticket_no+1;
    $date=date_create($date);
    $day=date_format($date,"D");
    $date_num=date_format($date,"d");
    $day_suff=date_format($date,"S");
    $month=date_format($date,"M");
    $year=date_format($date,"y");
    // dd($day_suff);

$details = [
    'title' => 'Mail from BookYourShows',
    'day' =>$day,
    'date' =>$date_num,
    'month' =>$month,
    'year' => $year,
    'time' =>  $time,
    'day_suff' =>  $day_suff,
    'seats' => $seats,
    'no_of_seats' => $seat_numbering,
    'ticket_no' => $ticket_no,
    'body' => 'Thank for Booking Ticket',
];  
$email=Auth::user()->email;
\Mail::to($email)->send(new \App\Mail\TicketMail($details)); 

return json_encode(array(
    "statusCode"=>200
));

})->name('booking.store');

Route::get('/test-details',function(){
    $date=Booking::limit(1)->pluck('date');
    $date=date_create($date[0]);
    // $date=date_create($date);
    $day=date_format($date,"D");
    $day_suff=date_format($date,"S");
    $month=date_format($date,"M");
    $year=date_format($date,"y");
    // dd($day_suff);

$details = [
    'title' => 'Mail from BookYourShows',
    'day' =>$day,
    'date' =>$date,
    'month' =>$month,
    'year' => $year,
];  
$email=Auth::user()->email;
\Mail::to($email)->send(new \App\Mail\TicketMail($details)); 
});

Route::get('/profile',function(){
$email = Auth::user()->email;
$profile=Profile::where('u_id',Auth::user()->id)->get();
$booking=Booking::where('u_id',Auth::user()->id)->get();
return view('profile',compact('booking','profile'));
})->name('profile');

Route::post('/profile',function(Request $request){
    $request->validate([
        'u_id' => 'required',
        'phone' => 'required',
        'address' => 'required',  
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'user/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }
    
    Profile::create($input);
 
    return redirect()->route('profile')
                    ->with('success','Information Saved Successfully.');
})->name('profile.store');

// Route::get('blogs', '[BlogController::class, 'index']');

// Route::get('blogs/create', '[BlogController::class, 'create']');

// Route::post('blogs', '[BlogController::class, 'store']');

// Route::put('blogs/{blog}', '[BlogController::class, 'update']');

// Route::get('blogs/{blog}', '[BlogController::class, 'show']');

// Route::delete('blogs/{blog}', '[BlogController::class, 'destroy']');

// Route::get('blogs/{blog}/edit', '[BlogController::class, 'edit']');

// Admin Bookings
Route::get('Admin/booking',function(){
$dt = Carbon::now()->subMinutes(30);
$time = Carbon::now()->format('h:i:s');
$dt=$dt->format('h:i:s');

$now  = Carbon::now()->format('Y-m-d');

$booking=Booking::where('confirm',false)->where('date',$now)->where('time','>=',$time)->get();
return view('Admin.Booking.index',compact('booking'));
})->name('admin.booking.index');


Route::post('Admin/ticket/{ticket}',function($id){

Booking::where('id', $id)->update(['confirm' => true]);

return redirect()->route('admin.booking.index')
->with('success','Ticket Confrimed');

})->name('ticket_confirmation');

Route::get('Admin/movies/',function(){

    $movies=Movie::all();
    
    return view('Admin.Movies.Index',compact('movies'));
    
    })->name('Admin.movies.index');

    
Route::get('Admin/cinemas/',function(){

    $cinema=Cinema::all();
    
    return view('Admin.Cinema.Index',compact('cinema'));
    
    })->name('Admin.cinemas.index');
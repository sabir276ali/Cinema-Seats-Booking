<?php
namespace App\Http\Controllers\Api;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Movie;

class TestController extends Controller
{
    public function test(Request $request){

        $array = Movie::select('id','title','rating','created_at','updated_at')->limit(15)->get();
        dd($array);
        $total=count($array);
        $per_page = 5;
        $current_page = $request->input("page") ?? 1;

        $starting_point = ($current_page * $per_page) - $per_page;

        $array = array_slice($array, $starting_point, $per_page, true);
        
        $array = $array->toArray();
        $array = array_slice($array, $starting_point, $per_page, true);

        $array = new Paginator($array, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);

        dd($array);
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Cinema;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinema = Cinema::latest()->paginate(2);
        return view('ServiceProvider/Cinemas/cinema_list',compact('cinema'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ServiceProvider/Cinemas/cinema_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'rating' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        
        Cinema::create($input);
     
        return redirect()->route('cinema.home')
                        ->with('success','Cinema is created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cinema $cinema)
    {
        return view('ServiceProvider/Cinemas/cinema_show',compact('cinema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinema $cinema)
    {
     return view('ServiceProvider/Cinemas/cinema_edit',compact('cinema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinema $cinema)
    {
        $request->validate([
            'name' => 'required',
            'rating' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        else{
            unset($input['image']);
        }

        $cinema->update($input);
     
        return redirect()->route('cinema.home')
                        ->with('success','Cinema is created successfully.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinema $cinema)
    {
        $cinema->delete();
     
        return redirect()->route('cinema.home')
                        ->with('success','Cinema deleted successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function  cinema_detail($cinema){

        // $cinema = Cinema::with(['movies'])->find($cinema);
        $cinema=Cinema::find($cinema)->movies;
        $cinema=$cinema->unique('title');
        // $cinema = $results->get(); 
        // dd($cinema);
        return view('cinema_movie',compact('cinema'));
        // $cinema = Cinema::with('movies')->get();
        // dd($cinema);

        // $cinema = Cinema::where('id',$id)->get();	
    
        }

}

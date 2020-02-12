<?php

namespace App\Http\Controllers;

use App\Listing;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display users list 10 at a time
        $listings = Listing::orderBy('id','desc')->paginate(10);
        return view('listing.index')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //validate the form data
    $validator =  Validator::make($request->all(), [
        'name' => 'required| string |max:255',
        'gender' => 'required',
        'phone' => 'required|string|max:15|unique:users',
        'address' => 'required|string',
        'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
        'nationality' =>'required|string',
        'dob' => 'required',
        'education_background' => 'string',
        'preferred_mode' => 'required',
    ]);
    //process the data and submit it
        $listing = new Listing();
    //gets all the colums from database using table name as parameter
        $columns = get_column_list('listings');
    //skipping id,timestamps columns
        unset($columns[0],$columns[11],$columns[12]); 
     
        foreach($columns as $key => $col_name){
                settype($col_name,'string');
                $listing->$col_name = $request->$col_name;

        }
    
    //if successful redirect
       if($listing->save()){
        $request-> session()->flash('status', 'Task was successful!');
        return redirect() -> route('listing.index');
    }else{
        $request-> session()->flash('error', 'Something went wrong');
        return redirect() -> route('listing.create'); 
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   
}

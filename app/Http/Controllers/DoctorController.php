<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View::share('profile', Profile::orderBy('id','desc')->get());
  
        return view('user/complete-profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        if($request->hasFile('cover_image')){
            //get file name with extensions
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //GET THE EXTENSION
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename .'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
      

             $profile = new Profile;
             $profile->cover_image = $fileNameToStore;
             $profile->years_exp = $request->input('years_exp');
             $profile->qualification = $request->input('qualification');
             $profile->license = $request->input('license');
             $profile->hospital = $request->input('hospital');
             $profile->city = $request->input('city');
             $profile->country = $request->input('country');
             $profile->name = $request->input('name');
             $profile->email = $request->input('email');
             $profile->phone = $request->input('phone');
             $profile->specialization = $request->input('specialization');
             $profile->fee = $request->input('fee');
             $profile->about = $request->input('about');
             $profile->status = $request->input('status');           
             $profile->save();
      
            // return redirect('user/payment')->with('success', 'Post submitted');
             return redirect()->route('payment')->with('success', 'Payment successful');
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

    public function payment()
    {  

    $profile = Profile::orderBy('id','asc')->get();    
    return view('user/payment');
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

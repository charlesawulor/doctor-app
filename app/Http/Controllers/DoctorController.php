<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Profile;
use App\Charge;
use App\User;

//use Stripe\Stripe;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        return view('user/complete-profile');

      
    }


    public function charge()
    {
        $charge = Charge::orderBy('id','asc')->get();    
        return view('user/payment');
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
        $charges = Charge::find($id);
       return view('user/singlepage')->with('charges',$charges);
       // return view('user/singlepage',compact ('charges'));
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
      

          //   $profile = new Profile;
             $user = Auth::user($id);
             $user->cover_image = $fileNameToStore;
             $user->years_exp = $request->input('years_exp');
             $user->qualification = $request->input('qualification');
             $user->license = $request->input('license');
             $user->hospital = $request->input('hospital');
             $user->city = $request->input('city');
             $user->country = $request->input('country');
             $user->name = $request->input('name');
             $user->email = $request->input('email');
             $user->phone = $request->input('phone');
             $user->specialization = $request->input('specialization');
             $user->fee = $request->input('fee');
             $user->about = $request->input('about');
             $user->status = $request->input('status');           
             $user->save();
      
            // return redirect('user/payment')->with('success', 'Post submitted');
             return redirect()->route('payment')->with('success', 'Payment successful');
      
    }





    public function getAddToCart(Request $request, $id) {
        $charge = Charge::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($charge, $charge->id);   
        $request->session()->put('cart',$cart);
       // return back(); 
       return redirect()->route('booking-cart');        
    }

    public function singlepage()
    {
    
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

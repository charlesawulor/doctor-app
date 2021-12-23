@extends('layouts.app')

@section('content')



@if(Session::has('cart'))
<div class="container" style="margin-top:15%;margin-bottom:15%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Proceed to checkout to complete your registration') }}</div>

               
                
              

                <div class="card-body">
            
                @foreach($charges as $charge)
                     <p>   Proceed to checkout and make payment :  
                         <span class="font-size-13">${{$charge['price']}}</span>  
                        </p>            
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                       <a href=""> 
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Proceed to checkout') }}
                                </button>
                         </a>

                            </div>
                        </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endif




@endsection
@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:15%;margin-bottom:15%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pay registration fee to complete registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                       

                    @if(count($charge) > 0)
                                @foreach($charge as $charge)
                     <p>   Registration fee :  
                         <span class="font-size-13">${{$charge->registration_fee}}</span>  
                        </p>

                        @endforeach
                    @endif


                        <br>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Proceed') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
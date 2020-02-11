@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Add New Listing </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('listing.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @include('layouts.error',array('data'=>'name'))
                                </div>
                            </div>

                                  
                            <div class="form-group row">
                              
                                <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                <div class="col-md-6">
                                    <?php 
                                $genders = ['Male','Female','Others'];
                                array_unshift($genders, 1);  
                                unset($genders[0]);  
                                ?>
                                @foreach($genders as $key => $gender)
                                <input type="radio"  name="gender" id="gender_id" value="{{ $key }}" {{old('gender_id')==$key?'checked':''}} >                               
                                 {{ $gender }}
                                @endforeach
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Phone</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('name') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                    @include('layouts.error',array('data'=>'phone'))
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control @error('name') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                    @include('layouts.error',array('data'=>'address'))
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @include('layouts.error',array('data'=>'email'))
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="nationality" class="col-md-4 col-form-label text-md-right">Nationality</label>
                               <div class="col-md-6">
                                    <select name="nationality" id="val-nationality" class="select2 form-control " style="width: 100%;" data-placeholder="Choose one..">
                                    {{ get_country_list(old('country')) }}                                                                          
                                    </select>
                                    @include('layouts.error',array('data'=>'nationality'))
                                </div> 
                               
                            </div>

                            <div class="form-group row">
                                <label for="dob" class="col-md-4 col-form-label text-md-right">Date Of Birth</label>
                                <div class="col-md-6">
                                    <input type="text" id="datepicker2"  class="form-control datepicker " name="dob" value="{{ old('dob') }}" required autocomplete="dob" autofocus>
                                   @include('layouts.error',array('data'=>'dob'))
                                </div>
                            </div> 
                           

                            <div class="form-group row">
                                <label for="education" class="col-md-4 col-form-label text-md-right">Education Background</label>
                                <div class="col-md-6">
                                    <input id="education" type="text" class="form-control @error('name') is-invalid @enderror" name="education" value="{{ old('education') }}" required autocomplete="education" autofocus>
                                    @include('layouts.error',array('data'=>'education'))
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mode" class="col-md-4 col-form-label text-md-right">Preferred mode of contact</label>
                                <div class="col-md-6">
                                    <?php
                                    $modes = ['phone','email','none'];
                                    array_unshift($modes,1);
                                    unset($modes[0]);
                                    ?>
                                    @foreach($modes as $key=>$mode)
                                    <input type="radio" name="mode" id="mode" value="{{$key}}" {{old('mode')==$key?'checked':''}}>
                                    {{$mode}}
                                    @endforeach
                                     @include('layouts.error',array('data'=>'mode'))
                                </div>
                            </div>
                          
                          
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                       Add
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

@section('js_after')

<script>
    $( function() {
      $( "#datepicker2" ).datepicker();
    } );
</script>

@endsection

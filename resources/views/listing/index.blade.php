@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listings</h1>
        <div class="row justify-content">
            <div class="col-md-12">
               
                <div class="panel">
                    <a class="btn btn-sm btn-primary  btn-lg" href="{{route('listing.create')}}">
                         Add more listing 
                    </a>
                    <a class="btn btn-sm btn-primary  btn-lg float-right" href="{{route('listing.search')}}">
                         Search for a listing 
                    </a>   
                </div>
          
               <hr/>
                    <table class="table table-striped table-inverse table-responsive" width="100%">
                        <thead class="thead-inverse">
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Nationality</th>
                            <th>Date of Birth</th>
                            <th>Education background</th>
                            <th>Preferred mode of contact</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{ucfirst($listing->name)}}</td>
                                <td>
                                    @if ($listing->gender==='1')
                                    {{"Male"}}  
                                    @elseif ($listing->gender==='2')
                                    {{"Female"}}
                                    @else 
                                    {{"Others"}}
                                    @endif
                                </td>
                                <td>{{$listing->phone}}</td>
                                <td>{{ucfirst($listing->address)}}</td>
                                <td>{{$listing->email}}</td>
                                <td>{{ucfirst($listing->nationality)}}</td>
                                <td>{{ date('d M, Y', strtotime($listing->dob)) }}</td>
                                <td>{{ucfirst($listing->education_background)}}</td>
                                <td>
                                    @if ($listing->preferred_mode==='1')
                                    {{"Phone"}}  
                                    @elseif ($listing->preferred_mode==='2')
                                    {{"Email"}}
                                    @else 
                                    {{"None"}}
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">{{$listings->links()}}</div>
                
            </div>
        </div>
    </div>

@endsection

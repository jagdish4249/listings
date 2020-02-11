@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-12">
                <div class="card-header">
                    Listings
                </div>
                <div class="card-body">
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
                                <td>{{ucfirst($listing->gender)}}</td>
                                <td>{{$listing->phone}}</td>
                                <td>{{ucfirst($listing->address)}}</td>
                                <td>{{$listing->email}}</td>
                                <td>{{ucfirst($listing->nationality)}}</td>
                                <td>{{ date('d M, Y', strtotime($listing->dob)) }}</td>
                                <td>{{ucfirst($listing->education_background)}}</td>
                                <td>{{ucfirst($listing->preferred_mode)}}</td>

                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                    <span style="align: center">{{$listings->links()}}</span>

                </div>
            </div>
        </div>
    </div>

@endsection

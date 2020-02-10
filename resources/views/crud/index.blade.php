@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content">
        <div class="col-md-12">
            <div class="card-header">
              User List
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
                           @foreach($users as $user)
                            <tr>
                                <td>{{ucfirst($user->name)}}</td>
                                <td>{{ucfirst($user->gender)}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{ucfirst($user->address)}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{ucfirst($user->nationality)}}</td>
                                <td>{{ date('d M, Y', strtotime($user->dob)) }}</td>
                                <td>{{ucfirst($user->education_background)}}</td>
                                <td>{{ucfirst($user->preferred_mode)}}</td>

                            </tr>
                            @endforeach
                            
                        </tbody>   
                        
                </table>
                <span style="align: center">{{$users->links()}}</span>
                
            </div>
        </div>
    </div>
</div>

@endsection
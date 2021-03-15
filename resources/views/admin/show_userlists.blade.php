@extends('admin/layout')
@section('page_title','Show Userlists')
@section('userlists_select','active')
@section('container')
     
    <h1>Show  User</h1>            
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Value</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <td>Name</td>
                            <td>{{$userlists->name}}</td>
                        </tr>
                           
                        <tr>
                            <td>Mobile</td>
                            <td>{{$userlists->mobile}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$userlists->email}}</td>
                        </tr>
                        
                        <tr>
                            <td>Password</td>
                            <td>{{$userlists->password}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{$userlists->address}}</td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td>{{$userlists->state}}</td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>{{$userlists->city}}</td>
                        </tr>
                        <tr>
                            <td>Zip</td>
                            <td>{{$userlists->zip}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{$userlists->status}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection
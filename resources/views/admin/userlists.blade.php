@extends('admin/layout')
@section('page_title','userlists')
@section('userlists_select','active')
@section('container')
    @if(session()->has('message'))
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        {{session('message')}}  
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> 
    @endif         
    <h1>Users</h1>            
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->email}}</td>
                            <td>{{$list->mobile}}</td>
                            <td>{{$list->created_at}}</td>
                            <td>
                                <a href="{{url('admin/userlists/show_userlists/')}}/{{$list->id}}"><button type="button" class="btn btn-success">View</button></a>

                                @if($list->status==1)
                                    <a href="{{url('admin/userlists/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary">Active</button></a>
                                 @elseif($list->status==0)
                                    <a href="{{url('admin/userlists/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning">Deactive</button></a>
                                @endif
                                
                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
                        
@endsection
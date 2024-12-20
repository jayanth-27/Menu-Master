@extends('layouts.admindashboard')

@section('content')
<main id="main" class="main">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <div class="pagetitle">
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./home">Home</a></li>
          <li class="breadcrumb-item active">Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
  
             
              <!-- Recent Sales -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Recent Users <span>| Today</span></h5>
                    
                    @if (count($users)>=1)
                    <table  class="table table-hover">
                       {{--  <h6 class="text-danger"><i><b>You can only perform Actions on post you have created</b></i></h6> --}}
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Joining Date</th>
                            <th scope="col">Access</th>
                            <th scope="col" colspan="1" align="center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td><a href="#" class="text-primary fw-bold">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->access}}</td>
                                <td>{{$user->created_at}}</td>
                                 
                                    @if(Auth::user()->email=='admin@admin.com')
                                    <td><a href="#" class="btn btn-success">Active</a></td>
                                    
                                    <td>{!!Form::open(['action'=> ['App\Http\Controllers\AdminController@destroyuser', $user->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td> 
                                    @endif
                                
                                {{-- <td><button class="btn btn-success">Edit</button></td>
                                <td><button class="btn btn-danger">Delete</button></td> --}}
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                   
  
                  </div>
  
                </div>
              </div><!-- End Recent Sales -->
  
              
            </div>
          </div><!-- End Left side columns -->
  
          
  
        </div>
      </section>

  </main><!-- End #main -->

@endsection

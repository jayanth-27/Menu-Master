@extends('layouts.dashboard')

@section('content')
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./home">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="cart d-block" align="center">
          
          <a href="./products"  style="display:block;"><i class="bi bi-cart4" style="font-size:250%"></i><span>My Products</span></a>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
             <div class="row">
                @foreach ($products as $product)
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                      {!! Form::open(['action' => 'App\Http\Controllers\CartController@store', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="">Description</i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                <h6>Description</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">{{Form::text('description', $product->description, ['class'=> 'card-title border-0', 'style'=>'color:navyblue'])}} </a></li>
                            </ul>
                          </div>
                          
                          <div class="card-body">
                            <h5>{{Form::text('name', $product->name, ['class'=> 'card-title border-0', 'style'=>'color:navyblue'])}}</h5>
                           {{--  <h5 class="card-title">{{$product->name}}</span></h5> --}}
          
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                 

                                  <img src="./storage/product_images/{{$product->product_image}}" alt="" height="100" width="100" style="margin:2%; margin-left:50%" align="center">
                                 
                              </div>
                              <div class="ps-4" align="right">
                                <h6></h6>
                                <h6><span>$</span> <span>{{Form::text('price', $product->price, ['class'=> 'border-0 w-50', 'style'=>'color:darkblue'])}}</span></h6><br>
                                {{-- {{Form::submit('Add To Cart', ['class'=>'btn btn-warning mt-2'])}} --}}
                                {{-- <button class="btn btn-warning">Add to Cart</button> --}}
                              </div>
                            </div>
                          </div>
                          {!! Form::close() !!}
                    </div>
                </div>
                @endforeach
            </div>         
        </div><!-- End Right side columns -->
      </div>
    </section>

    {{-- <div class="pagetitle">
      <nav>
        <div class="cart d-block" align="center">
          <a href="manageclubs1.html"  style="display:block;"><i class="bi bi-stars" style="font-size:250%"></i><span>Clubs</span></a>
        </div>
      </nav>
    </div> --}}<!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row"  >
 
           {{--  <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Club Name</th>
                  <th scope="col">Club About</th>
                  <th scope="col" colspan="2" align="center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>CU</td>
                  <td>Christian Union</td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>SDA</td>
                  <td>Seventh Day Adventist</td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
              </tbody>
            </table> --}}
              </div><!-- End Right side columns -->
      </div>
    </section>
    <section>
      <div class="card-body">
                      <h5 class="card-title mt-3" align="center"><i class="bi bi-stars" style="font-size:250%"></i>Recent Messages<span>| Today</span></h5>
                      <table  class="table table-hover">
                        {{-- <h6 class="text-danger"><i><b>You can only perform Actions on posts you have created</b></i></h6> --}}
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Received At</th>
                           {{--  <th scope="col" colspan="2" align="center">Actions</th> --}}
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($message as $mes)
                          <tr>
                            <td><a href="#" class="text-primary fw-bold">{{$mes->name}}</a></td>
                            <td>{{$mes->email}}</td>
                            <td>{{$mes->subject}}</td>
                            <td>{{$mes->message}}</td>
                            <td>{{$mes->created_at}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
      </section>
  </main><!-- End #main -->
@endsection

@extends('layouts.admindashboard')

@section('content')
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Admin Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./admin">Home</a></li>
          <li class="breadcrumb-item active">Admin Dashboard</li>
        </ol>
        <div class="cart d-block" align="center">
          
          <a href=""  style="display:block;"><i class="bi bi-cart4" style="font-size:250%"></i><span>Products</span></a>
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
                              <div class="ps-4">
                                <h6></h6>
                                <h6><span>Ksh. </span> <span>{{Form::text('price', $product->price, ['class'=> 'border-0 w-50', 'style'=>'color:darkblue'])}}</span></h6><br>
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

   
    <section class="section dashboard">
      <div class="row">

    </section>

    {{-- messages section --}}
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
                            <th scope="col">Recipient</th>
                            <th scope="col">Actions</th>
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
                            <td>{{$mes->recipient}}</td>
                            <td>{!!Form::open(['action'=> ['App\Http\Controllers\AdminController@destroymessage', $mes->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                              {{Form::hidden('_method', 'DELETE')}}
                              {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                              {!!Form::close()!!}
                          </td> 
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
      </section>

      {{-- feedback section --}}
      <section>
        <div class="card-body">
                        <h5 class="card-title mt-3" align="center"><i class="bi bi-chat" style="font-size:150%; margin-right:2%;"></i>Recent FeedBacks<span>| Today</span></h5>
                        <table  class="table table-hover">
                          {{-- <h6 class="text-danger"><i><b>You can only perform Actions on posts you have created</b></i></h6> --}}
                          <thead>
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Message</th>
                              <th scope="col">Received At</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($feed as $fd)
                            <tr>
                              <td><a href="#" class="text-primary fw-bold">{{$fd->name}}</a></td>
                              <td>{{$fd->message}}</td>
                              <td>{{$fd->created_at}}</td>
                              <td>{!!Form::open(['action'=> ['App\Http\Controllers\AdminController@destroyfeedback', $fd->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td> 
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
        </section>
  
  </main><!-- End #main -->
@endsection

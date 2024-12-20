@extends('layouts.admindashboard')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./admin">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Advertisement -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                  <h5 class="card-title">Top Advertisements<span>| Today</span></h5>
                  <div>
                    <button type="button" class="btn btn-primary mb-3"><a href="./products/create" style="text-decoration:none; color:white; margin-bottom:2%">ADD NEW PRODUCT</a></button>
                </div>
                @if (count($products)>=1)
                <table class="table table-hover">
                  <h6 class="text-danger"><i><b>You can only perform Actions on products you have created</b></i></h6>
                  <thead>
                    <tr>
                      <th scope="col">Preview</th>
                      <th scope="col">Product</th>
                      <th scope="col">Price</th>
                      <th scope="col">Descriptions</th>
                      <th scope="col">Created At</th>
                      <th scope="col" colspan="2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <th scope="row"><a href="#"><img src="./storage/product_images/{{$product->product_image}}" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">{{$product->name}}</a></td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->created_at}}</td>
                      {{-- @if (!Auth::guest()) 
                      @if(Auth::user()->id==$product->user_id) --}}
                     {{--  <td><a href="./products/{{$product->id}}/edit" class="btn btn-success">Edit</a></td> --}}
                      {{-- <td><a href="#" class="btn btn-success">Edit</a></td>
                      <td><a href="#" class="btn btn-danger">Delete</a></td> --}}
                      <td>{!!Form::open(['action'=> ['App\Http\Controllers\AdminController@destroyproduct', $product->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                          {{Form::hidden('_method', 'DELETE')}}
                          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                          {!!Form::close()!!}
                      </td> 
                      {{-- @endif
                  @endif --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @endif
                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        

      </div>
    </section>

  </main><!-- End #main -->
@endsection
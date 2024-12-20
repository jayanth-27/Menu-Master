@extends('layouts.admindashboard')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage FeedBacks</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./admin">Home</a></li>
          <li class="breadcrumb-item active">FeedBacks</li>
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
                  <h5 class="card-title">Top Messages<span>| Today</span></h5>
                  
                @if (count($message)>=1)
                <table class="table table-hover">
                 
                  <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">Received At</th>
                        <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($message as $mes)
                    <tr>
                      <th scope="row"><a href="#" class="text-primary fw-bold">{{$mes->name}}</a></th>
                      <td>{{$mes->message}}</td>
                      <td>{{$mes->created_at}}</td>
                      @if (!Auth::guest()) 
                      {{-- @if(Auth::user()->id==$mes->user_id) --}}
                      {{-- <td><a href="#" class="btn btn-success">Edit</a></td>
                      <td><a href="#" class="btn btn-danger">Delete</a></td> --}}
                      <td>{!!Form::open(['action'=> ['App\Http\Controllers\AdminController@destroyfeedback', $mes->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                          {{Form::hidden('_method', 'DELETE')}}
                          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                          {!!Form::close()!!}
                      </td> 
                     {{--  @endif --}}
                  @endif
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
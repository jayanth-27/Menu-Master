@extends('layouts.dashboard')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./home">Home</a></li>
          <li class="breadcrumb-item active">Messages</li>
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
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Received At</th>
                        <th scope="col">Recepient</th>
                        <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($message as $mes)
                    <tr>
                      <th scope="row"><a href="#" class="text-primary fw-bold">{{$mes->name}}</a></th>
                      <td>{{$mes->email}}</td>
                      <td>{{$mes->subject}}</td>
                      <td>{{$mes->message}}</td>
                      <td>{{$mes->created_at}}</td>
                      <td>{{$mes->recipient}}</td>
                      @if (!Auth::guest()) 
                      @if(Auth::user()->access==$mes->recipient)
                      <td>{!!Form::open(['action'=> ['App\Http\Controllers\MessageController@destroy', $mes->id], 'method' =>'POST', 'class' =>'pull-right'])!!}
                          {{Form::hidden('_method', 'DELETE')}}
                          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                          {!!Form::close()!!}
                      </td> 
                      @endif
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
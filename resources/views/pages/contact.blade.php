@extends('layouts.dashboard')

@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Contact Our Help Team</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./home">Home</a></li>
          <li class="breadcrumb-item active">Contact Page</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-center">

          <div class="col-sm-4" data-aos="fade-up" data-aos-delay="250">

            <form  method="post" role="form" class="php-email-form btn-light" >
              <div class="text-align-center" align="center">
                <div class="alert alert-light">
                  <div class="icon mb-3">
                    <i class="bi bi-whatsapp mr-3"></i>
                    <span class="label " style="margin: 2%; font-weight:bolder;">+25748662021</span><br>
                    <button class="btn btn-primary m-4"><a href="https://api.whatsapp.com/send?phone=+254748662021&text=+Hey+Admin+I+need+help+in+.+.+." style="text-decoration: none; color:white;">Chat  Admin</a></button>
                  </div>
                  <div class="icon mb-3">
                    <i class="bi bi-telephone-plus-fill mr-3"></i>
                    <span class="label " style="margin: 2%; font-weight:bolder;">+25748662021</span><br>
                    <button class="btn btn-primary m-4" ><a href="tel:+254748662021" style="text-decoration: none; color:white;">Make a Call</a> </button>
                  </div>
                  <div class="icon  mb-3">
                    <i class="bi bi-envelope-fill mr-3"></i>
                    <span class="label " style="margin: 2%;"><a href="mailto:demaxedvanjo@gmailcom" style="text-decoration: none;">{{ config('app.name', 'Max Tech Agencies') }}@gmail.com</a></span>
                  </div>
                </div>
              </div>
            </form>
            
          </div><!-- End registration Form -->
          {{-- <div class="col-sm-4" data-aos="fade-up" data-aos-delay="250">
            <div class="form" >
              <form action=""  method=""  onsubmit="return(validate());" style="display: block;">  --}}
                <!-- This div below displays when there is error in the form submitted. When all the details are valid success message is displayed to the user -->
                {{-- <div id="errorText" align="center"></div>
                <table class="regg">
                  <tr class="item">
                   <td>First Name</td>
                   <td><input type="text" name="fname" id="fname" placeholder="First name" ></td>
                  </tr>
                  <tr  class="item"> 
                   <td>Last Name</td>
                   <td><input type="text" name="lname" id="lname" placeholder="Last Name"></td>
                  </tr>
                  <tr  class="item">
                   <td>Email</td>
                   <td><input type="email" name="email" id="email" placeholder="example@example.com"></td>
                  </tr>
                  <tr  class="item">
                   <td>Message</td>
                   <td><textarea  name="comment" id="coment" placeholder="your message/comment here" cols="5"></textarea></td>
                  </tr>
                  <tr  class="item" align="center">
                    <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="SUBMIT" class="btn btn-primary w-100" style="background-color: blue; width:50%; color: white; font-weight: bolder;"></td>
                   </tr>
                </table> --}}
                 
                <!-- upon cliccking submit, the form is validated through the validate(); function -->
                 
              {{-- </form> --}}
              <!-- End of Form -->
         {{--  </div>
  
          </div> --}}
        </div>

      </div>
    </section>

  </main><!-- End #main -->

@endsection

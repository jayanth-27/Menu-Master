@extends('layouts.app')

@section('content')

<main id="main " style="margin-top: 5%">

    <!-- ======= Menu Section ======= -->
   <section id="menu" class="menu">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Our Menu</h2>
         <p>Check Our <span>Yummy Menu</span></p>
       </div>

       <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

         <li class="nav-item">
           <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
             <h4>Starters</h4>
           </a>
         </li><!-- End tab nav item -->

         <li class="nav-item">
           <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
             <h4>Salads</h4>
           </a><!-- End tab nav item -->

         <li class="nav-item">
           <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
             <h4>Speciality</h4>
           </a>
         </li><!-- End tab nav item -->

         <li class="nav-item">
           <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
             <h4>Bevarages</h4>
           </a>
         </li><!-- End tab nav item -->

       </ul>

       <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

         <div class="tab-pane fade active show" id="menu-starters">

           <div class="tab-header text-center">
             <p>Menu</p>
             <h3>Starters</h3>
           </div>

           <div class="row gy-5">

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/chilli.jpg" class="glightbox"><img src="assets/img/menu/chilli.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Chilli paneer</h4>
               <p class="ingredients">
               
                  <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Indo-chinese appetizer made by tossing fried paneer in chilli sauce. This can be eaten with hakka noodles or fried rice</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/aloo.jpeg" class="glightbox"><img src="assets/img/menu/aloo.jpeg" class="menu-img img-fluid" alt=""></a>
               <h4>Aloo gobi</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>made with potatoes, cauliflower, and spices.</p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/chaat.jpeg" class="glightbox"><img src="assets/img/menu/chaat.jpeg" class="menu-img img-fluid" alt=""></a>
               <h4>Mozzarella Stick</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Aloo Chaat</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>gives you a tangy, sweet, chatpata chaat. It can be served as an evening snack or as a starter snack.</p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $8.95
               </p>
             </div><!-- Menu Item -->

             @if (count($products)>=1)
             <div class="row">
             @foreach ($products as $product)
             <div class="col-lg-4 menu-item">
              <a href="./storage/product_images/{{$product->product_image}}" class="glightbox"><img src="./storage/product_images/{{$product->product_image}}" class="menu-img img-fluid" alt=""></a>
              <h4>{{ $product->name}}</h4>
              <p class="ingredients">
                <!-- description-->
                <div class="filter">
                  <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Description</h6>
                    </li>
                    {{-- <p class="dropdown-item">Ingridients</p> --}}
                   <p>{{$product->description}}</p>
                    
                  </ul>
                </div>
              <!-- description -->
              </p>
              <p class="price">
               {{ $product->price}}
              </p>
            </div><!-- Menu Item -->
             @endforeach
            </div>
            
            @endif
            

           </div>
         </div><!-- End Starter Menu Content -->

         <div class="tab-pane fade" id="menu-breakfast">

           <div class="tab-header text-center">
             <p>Menu</p>
             <h3>Salads</h3>
           </div>

           <div class="row gy-5">

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/onion_salad.webp" class="glightbox"><img src="assets/img/menu/onion_salad.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Laccha pyaaz</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Laccha pyaaz is a classic Indian onion salad recipe made with sliced onion rings, lemon juice, fresh herbs, and Indian spices. </p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/corn.jpg" class="glightbox"><img src="assets/img/menu/corn.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Corn Kosambari</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Sweet Corn Kosambari is a south Indian style salad made with corn, pomegranate, and coconut and tempered with a few spices. This can be served as a side dish with meals or can be eaten as a snack..</p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/sprouted.jpg" class="glightbox"><img src="assets/img/menu/sprouted.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Sprouted Moong Salad Recipe</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p> Easy, wholesome, and fresh, sprouted moong (mung) salad made from sprouts, fresh vegetables, herbs and, seasonings. Vegan, gluten-free, and oil-free.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $8.95
               </p>
             </div><!-- Menu Item -->

             @if (count($products)>=1)
             <div class="row">
             @foreach ($products as $product)
             <div class="col-lg-4 menu-item">
              <a href="./storage/product_images/{{$product->product_image}}" class="glightbox"><img src="./storage/product_images/{{$product->product_image}}" class="menu-img img-fluid" alt=""></a>
              <h4>{{ $product->name}}</h4>
              <p class="ingredients">
                <!-- description-->
                <div class="filter">
                  <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Description</h6>
                    </li>
                    {{-- <p class="dropdown-item">Ingridients</p> --}}
                   <p>{{$product->description}}</p>
                    
                  </ul>
                </div>
              <!-- description -->
              </p>
              <p class="price">
               {{ $product->price}}
              </p>
            </div><!-- Menu Item -->
             @endforeach
            </div>
            
            @endif
           </div>
         </div><!-- End Breakfast Menu Content -->

         <div class="tab-pane fade" id="menu-lunch">

           <div class="tab-header text-center">
             <p>Menu</p>
             <h3>Speciality</h3>
           </div>

           <div class="row gy-5">

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/biryani.webp" class="glightbox"><img src="assets/img/menu/biryani.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Biryani</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Rice and meat or vegetables are prepared separately, then combined and slow-cooked in the oven to create this aromatic “dry dish” (there’s no creamy gravy-like sauce).</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/chiken.webp" class="glightbox"><img src="assets/img/menu/chiken.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Butter Chicken</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Typically a mild curry, it combines onions, butter and cream in a velvety smooth tomato sauce with chicken chunks.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/lobster-roll.jpg" class="glightbox"><img src="assets/img/menu/lobster-roll.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Lobster Roll</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Lobster meat, mayonnaise, butter, lemon juice, salt, black pepper, hot dog buns.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $8.95
               </p>
             </div><!-- Menu Item -->
           </div>
         </div><!-- End Lunch Menu Content -->

         <div class="tab-pane fade" id="menu-dinner">

           <div class="tab-header text-center">
             <p>Menu</p>
             <h3>Bevarages</h3>
           </div>

           <div class="row gy-5">

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/chai_masala.jpg" class="glightbox"><img src="assets/img/menu/chai_masala.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Chai Masala</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Hot Chai masala with little sugar.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/whiskey2.jpeg" class="glightbox"><img src="assets/img/menu/whiskey2.jpeg" class="menu-img img-fluid" alt=""></a>
               <h4>Whiskey</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Cold Whiskey.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/orange2.jpeg" class="glightbox"><img src="assets/img/menu/orange2.jpeg" class="menu-img img-fluid" alt=""></a>
               <h4>Orange juice</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Very natural blended.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $8.95
               </p>
             </div><!-- Menu Item -->

             

           </div>
         </div><!-- End Dinner Menu Content -->

       </div>

     </div>
   </section><!-- End Menu Section -->

    <!-- ======= Feedback Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
  
        <div class="section-title">
          <h2>Rating</h2>
          <p>BeachSide Rating</p>
        </div>
      </div>
  
      <div class="container" data-aos="fade-up">
  
        <div class="row mt-5">
  
          <div class="col-lg-4 mt-5 mt-lg-0" style="box-shadow: 2px 2px 4px white; padding:2%">
             
            <!-- item-detail.blade.php -->
              <h2 style="color:  #cda45e">Beachside </h2>
              <p style="color: white">Average Rating</p>
  
              <div class="star-rating">
                @for ($i = 1; $i <= 5; $i++)
                  @if ($i <= 4)
                      <i class="bi bi-star-fill text-warning"></i>
                  
                  @endif
              @endfor
              </div>
          </div>
  
          <div class="col-lg-8 mt-5 mt-lg-0" style="box-shadow: 2px 2px 4px white; padding:2%">
  
           {!! Form::open(['action' => 'App\Http\Controllers\MessageController@store', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
           {{-- creating form elements --}}
           {{Form::text('name', '', ['class'=> 'form-control, font-bold, my-2 w-100 rounded', 'placeholder'=>'Name'])}}
           {{Form::text('message',  '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Feedback'])}}
           {{Form::submit('Send Feedback', ['class'=>'btn btn-warning my-2, w-50'])}}
           {!! Form::close() !!}
          </div>
  
        </div>
  
      </div>
    </section><!-- End Feedback Section -->

     <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
     <div class="container" data-aos="fade-up">

       <div class="section-title">
         <h2>Contact</h2>
         <p>Contact BeachSide</p>
       </div>
     </div>

     <div class="container" data-aos="fade-up">

       <div class="row mt-5">

        

         <div class="col-lg-12 mt-5 mt-lg-0">

          {!! Form::open(['action' => 'App\Http\Controllers\MessageController@storebeachside', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
          {{-- creating form elements --}}
          {{Form::text('name', '', ['class'=> 'form-control, font-bold, my-2 w-100 rounded', 'placeholder'=>'Name'])}}
          {{Form::text('email', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Email'])}}
          {{Form::text('subject', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Subject'])}}
          {{Form::text('message',  '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Message'])}}
          {{-- {{Form::text('access', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'value'=>'courtside'])}} --}}
          {{Form::submit('Send BeachSide Message', ['class'=>'btn btn-primary my-2, w-50'])}}
          {!! Form::close() !!}
         </div>

       </div>

     </div>
   </section><!-- End Contact Section -->
 </main><!-- End #main -->

 

@endsection
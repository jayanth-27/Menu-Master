@extends('layouts.app')

@section('content')

<main id="main" style="margin-top: 5%">

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
               <a href="assets/img/menu/goat.jpg" class="glightbox"><img src="assets/img/menu/goat.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Baked Goat Cheese Dip</h4>
               <p class="ingredients">
               
                  <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>here’s something about the sweet, garlicky fire roasted tomato sauce and the creamy, 
                        tangy chevre that makes you park yourself right in front of the dish. Scoop it up with crusty bread slices and 
                        it tastes like a pie from your favorite pizzeria…only better. Every time we serve this, it gets rave reviews.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/platter.webp" class="glightbox"><img src="assets/img/menu/platter.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Ultimate Antipasto Platter</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>This board of Italian appetizers is an explosion of colors and flavors, and it’s almost guaranteed to be the centerpiece of any party. 
                      Add traditional antipasti like cheese, meats, marinated vegetables, 
                      olives, crackers, breads, and more to a platter and serve with small plates to let your guests get to snacking. </p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/pizza.webp" class="glightbox"><img src="assets/img/menu/pizza.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Flatbread Mini Pizzas</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Meet the flatbread pizza, an elegant Italian appetizer. Here the crust is thin and crispy, and it’s topped with mozzarella,
                       tomatoes, arugula and Parmesan cheese shavings,
                       with balsamic reduction drizzle and toasted pine nuts to finish it off.</p>
                     
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
               <a href="assets/img/menu/capres.jpg" class="glightbox"><img src="assets/img/menu/capres.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Caprese Salad</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Caprese salad in Italian is insalata caprese, which means “the salad from Capri.” It’s a simple salad of fresh tomatoes, 
                      fresh mozzarella and basil leaves, seasoned with salt and pepper.
                      
                      Like pizza margherita, each of the ingredients corresponds to the colors of the Italian flag: red, white and green..</p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/salad1.jpeg" class="glightbox"><img src="assets/img/menu/salad1.jpeg" class="menu-img img-fluid" alt=""></a>
               <h4>Egg Salad</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Veges mixed with eggs.</p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/spinach-salad.jpg" class="glightbox"><img src="assets/img/menu/spinach-salad.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Spinach Salad</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p> Fresh baby spinach, bacon bits, hard-boiled eggs, red onion, mushrooms, crumbled feta cheese, balsamic vinaigrette dressing.</p>
                       
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
               <a href="assets/img/menu/balls.webp" class="glightbox"><img src="assets/img/menu/balls.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Marinated Mozzarella Balls</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Here’s a fun and easy Italian appetizer recipe that takes just minutes of hands on time: Marinated Mozzarella Balls! 
                        You’ll be surprised by how quickly this comes together and how satisfying the flavors are for such little effort. Marinade fresh mozzarella balls in a mix of olive oil,
                         chopped herbs and red pepper flakes, and the flavor is a burst of bold and herbaceous. </p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/mushroom.webp" class="glightbox"><img src="assets/img/menu/mushroom.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Marinated Mushrooms</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Here’s an easy Italian appetizer that will wow everyone with minimal effort: Marinated Mushrooms! 
                        You know those seasoned mushrooms you find at an Italian deli counter or antipasti bar at the grocery? They’re easy to make at home and full of bold, 
                        zesty flavor. Add them to a cheese board or antipasti platter, and everyone will be singing their praises..</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/bacon.webp" class="glightbox"><img src="assets/img/menu/bacon.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Bacon</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Fried bacon.</p>
                       
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
               <a href="assets/img/menu/champane.webp" class="glightbox"><img src="assets/img/menu/champane.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Champane</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Enjoy sweet champane in all varying temperatues.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/orange.webp" class="glightbox"><img src="assets/img/menu/orange.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Orange Juice</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Enjoy Cold Orange juice .</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/strong_tea.webp" class="glightbox"><img src="assets/img/menu/strong_tea.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Black Coffee</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Enjoy Black Hot Coffee .</p>
                       
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
          <p>RiverSide Rating</p>
        </div>
      </div>
  
      <div class="container" data-aos="fade-up">
  
        <div class="row mt-5">
  
          <div class="col-lg-4 mt-5 mt-lg-0" style="box-shadow: 2px 2px 4px white; padding:2%">
             
            <!-- item-detail.blade.php -->
              <h2 style="color:  #cda45e">Riverside </h2>
              <p style="color: white">Average Rating</p>
  
              <div class="star-rating">
                @for ($i = 1; $i <= 5; $i++)
                  @if ($i <= 5)
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
         <p>Contact RiverSide</p>
       </div>
     </div>

     <div class="container" data-aos="fade-up">

       <div class="row mt-5">

         <div class="col-lg-12 mt-5 mt-lg-0">

          {!! Form::open(['action' => 'App\Http\Controllers\MessageController@storeriverside', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
          {{-- creating form elements --}}
          {{Form::text('name', '', ['class'=> 'form-control, font-bold, my-2 w-100 rounded', 'placeholder'=>'Name'])}}
          {{Form::text('email', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Email'])}}
          {{Form::text('subject', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Subject'])}}
          {{Form::text('message',  '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Message'])}}
          {{-- {{Form::text('access', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'value'=>'courtside'])}} --}}
          {{Form::submit('Send RiverSide Message', ['class'=>'btn btn-primary my-2, w-50'])}}
          {!! Form::close() !!}

         </div>

       </div>

     </div>
   </section><!-- End Contact Section -->

 </main><!-- End #main -->
@endsection
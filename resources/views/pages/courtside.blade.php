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
               <a href="assets/img/menu/lobster-bisque.jpg" class="glightbox"><img src="assets/img/menu/lobster-bisque.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Lobster Bisque</h4>
               <p class="ingredients">
               
                  <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Lobster meat,
                       Lobster shells,
                       Butter,
                       Onion,
                       Carrot</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/bread-barrel.jpg" class="glightbox"><img src="assets/img/menu/bread-barrel.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Bread Barrel</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Flour,
                     Water,
                     Yeast,
                     Salt,
                     Sugar</p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/mozzarella.jpg" class="glightbox"><img src="assets/img/menu/mozzarella.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Mozzarella Stick</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Mozzarella cheese sticks, breadcrumbs, flour, eggs, seasonings, cooking oil.</p>
                     
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
               <a href="assets/img/menu/caesar.jpg" class="glightbox"><img src="assets/img/menu/caesar.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Caesar Selections</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p> Romaine lettuce, croutons, Caesar dressing (made with ingredients like olive oil, egg, Parmesan cheese, garlic, anchovies, lemon juice, and Dijon mustard), grated Parmesan cheese.</p>
                     
                   </ul>
                 </div>
               <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/greek-salad.jpg" class="glightbox"><img src="assets/img/menu/greek-salad.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Greek Salad</h4>
               <p class="ingredients">
                 <!-- description-->
                 <div class="filter">
                   <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                   <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                     <li class="dropdown-header text-start">
                       <h6>Description</h6>
                     </li>
                     <p class="dropdown-item">Ingridients</p>
                    <p>Cucumbers, tomatoes, red onion, Kalamata olives, feta cheese, extra-virgin olive oil, red wine vinegar, oregano, salt, and black pepper.</p>
                     
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
               <a href="assets/img/menu/bread-barrel.jpg" class="glightbox"><img src="assets/img/menu/bread-barrel.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Bread Barrel</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Flour,
                       Water,
                       Yeast,
                       Salt,
                       Sugar</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/tuscan-grilled.jpg" class="glightbox"><img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img img-fluid" alt=""></a>
               <h4>Tuscan Grilled</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Chicken breast, olive oil, garlic, rosemary, thyme, lemon juice, salt, and black pepper.</p>
                       
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
               <a href="assets/img/menu/watermelon.webp" class="glightbox"><img src="assets/img/menu/watermelon.webp" class="menu-img img-fluid" alt=""></a>
               <h4>Watermelon Juice</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Watermelon juice is a refreshing, naturally sweet beverage made by juicing ripe watermelon,
                        perfect for staying hydrated on hot days. It's a simple and delightful way to enjoy the fresh taste of watermelon.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $5.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/whiskey.webp" class="glightbox"><img src="assets/img/menu/whiskey.webp" class="menu-img img-fluid" alt=""></a>
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
                      <p>Whiskey is a distilled alcoholic beverage made from fermented grain mash, 
                       typically including barley, corn, rye, and wheat.
                        It's known for its diverse flavor profiles, which can range from smoky and robust to smooth and mellow,
                        making it a popular choice among spirit enthusiasts.</p>
                       
                     </ul>
                   </div>
                 <!-- description -->
               </p>
               <p class="price">
                 $14.95
               </p>
             </div><!-- Menu Item -->

             <div class="col-lg-4 menu-item">
               <a href="assets/img/menu/jacobcreek.png" class="glightbox"><img src="assets/img/menu/jacobcreek.png" class="menu-img img-fluid" alt=""></a>
               <h4>Jacobs Creek</h4>
               <p class="ingredients">
                <!-- description-->
                   <div class="filter">
                     <a class="icon bg-light" href="#" data-bs-toggle="dropdown">Description</i></a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                       <li class="dropdown-header text-start">
                         <h6>Description</h6>
                       </li>
                       <p class="dropdown-item">Ingridients</p>
                      <p>Jacob's Creek is a well-known winery,
                        and it produces a variety of wines. 
                        It doesn't have a specific ingredient list like a recipe, 
                        as it offers a range of wines made from different grape varieties and blends, 
                       each with its own unique ingredients.</p>
                       
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
        <p>CourtSide Rating</p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4 mt-5 mt-lg-0" style="box-shadow: 2px 2px 4px white; padding:2%">
           
          <!-- item-detail.blade.php -->
            <h2 style="color:  #cda45e">Courtside </h2>
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
         <p>Contact CourtSide</p>
       </div>
     </div>

     <div class="container" data-aos="fade-up">

       <div class="row mt-5">

         <div class="col-lg-8 mt-5 mt-lg-0" style="box-shadow: 2px 2px 4px white; padding:2%">

          {!! Form::open(['action' => 'App\Http\Controllers\MessageController@storecourtside', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
          {{-- creating form elements --}}
          {{Form::text('name', '', ['class'=> 'form-control, font-bold, my-2 w-100 rounded', 'placeholder'=>'Name'])}}
          {{Form::text('email', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Email'])}}
          {{Form::text('subject', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Subject'])}}
          {{Form::text('message',  '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'placeholder'=>'Message'])}}
          {{-- {{Form::text('access', '', ['class'=> 'form-control,  font-bold my-2 w-100 rounded', 'value'=>'courtside'])}} --}}
          {{Form::submit('Send CourtSide Message', ['class'=>'btn btn-primary my-2, w-50'])}}
          {!! Form::close() !!}
         </div>

       </div>

     </div>
   </section><!-- End Contact Section -->


 </main><!-- End #main -->

 <style >
  .star-rating {
  font-size: 24px;
}

.star-rating input[type="radio"] {
  display: none;
}

.star-rating label {
  color: #ddd;
  font-size: 20px;
  padding: 0 2px;
  cursor: pointer;
}

.star-rating input[type="radio"]:checked ~ label {
  color: #ffcc00;
}


.bi-star{
  color: #ffcc00
}
 </style>



@endsection
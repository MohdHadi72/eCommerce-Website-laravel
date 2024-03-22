<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->

       <base href="/product">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Ecommerce Website</title>

      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
   
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
  
      <link href="home/css/style.css" rel="stylesheet" />
 
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <style>
      .card{
         background: rgb(231, 231, 231);
         border-radius: 2%;
      }
   </style>
   <body>
      <div class="hero_area">
 
        @include('Home.header')
         
        <div class="container" >
         <div class="row mt-5">
            <div class="col-sm-12">
               <div class="card mb-3 p-2" style="margin: 0px 20%;">
                <img src="/productimage/{{$product->image}}" class="card-img-top" alt="..." >
                <div class="card-body">
                   <h5 class="card-title">Product Title : {{$product->title}}</h5>
                   <h3 class="card-text mt-2" >Product Price: <span style="color: rgb(0, 0, 0)">${{$product->price}}</span> </h3>
                   <h3 class="card-text mt-2" >Product Discpunt: <span style="color: rgb(255, 6, 6)">${{$product->discount}}%</span> </h3>
                  <h3 class="card-text mt-2">Product Quantity: <span style="color: rgb(6, 64, 255)"> {{$product->quantity}}</h3>
                     <h3 class="card-text mt-2">Product Description: <span style="color: rgb(0, 0, 0)"> {{$product->description}}</h3>
                </div>
              </div>
            </div>
         </div>
      </div>
      </div>

        @include('Home.footer')
    
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         </p>
      </div>

      <script src="home/js/jquery-3.4.1.min.js"></script>

      <script src="home/js/popper.min.js"></script>

      <script src="home/js/bootstrap.js"></script>

      <script src="home/js/custom.js"></script>
   </body>
</html>
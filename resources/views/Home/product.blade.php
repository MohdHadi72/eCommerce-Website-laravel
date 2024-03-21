      <section class="product_section layout_padding" id="product">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">

               @foreach ($product as $product)
               
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="" class="option1">
                           Men's Shirt
                           </a>
                           <a href="" class="option2">
                           Buy Now
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="productimage/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          {{$product->title}}
                        </h5>
                        <h6>
                           ${{$product->price}}
                        </h6>
                     </div>
                     <p style="margin-top: 2%; color:rgb(255, 0, 0); font-weight:700"> ${{$product->discount}}% OFF</p>
                     <span class="fa fa-star checked" style="color: rgb(255, 0, 0)"></span>
                     <span class="fa fa-star checked" style="color: rgb(255, 0, 0)"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
               </div>
               @endforeach
             
         </div>
      </section>
      
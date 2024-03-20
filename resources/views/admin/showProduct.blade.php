<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>

  <style>
    table {
            width: 90%;
            margin: 10px auto;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .text{
         text-align: center;
         font-size: 2rem;
       padding-top: 2%;
       padding-bottom: 2%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: black
        }
        td img{
         margin: 1px auto
        }
        
  </style>
  <body>
    
    <div class="container-scroller">

       @include('admin.sidebar')

       @include('admin.navbar')
       
           <div class="main-panel">
        <div class="content-wrapper ">

     @if (session()->has('messageDeleteProduct'))
     <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">X</button>
             {{session()->get('messageDeleteProduct')}}
     </div>
 @endif

           <div class="text">Show Product</div>
           
           <table >
            <tr>
               <th>Product Title</th>
               <th>Description</th>
               <th>Product Price</th>
               <th>Quantity</th>
               <th>Discount</th>
               <th>Catagory</th>
               <th>Image</th>
               <th>Delete</th>
               <th>Edit</th>
            </tr>


            @foreach ($product as $product)
            
            <tr>
               <td>{{$product->title}}</td>
               <td>{{$product->description}}</td>
               <td>{{$product->price}}</td>
               <td>{{$product->quantity}}</td>
               <td>{{$product->discount}}</td>
               <td>{{$product->catagory}}</td>
               <td>
                  <img src="./productimage/{{$product->image}}" alt="" width="150px" >
                </td>
               <td>
                  <a href="{{url('delete-product',$product->id)}}" class="btn btn-danger m-2" onclick="return confirm('Are You Sure To Delete This Product')">Delete</a>
                </td>
                <td>
                  <a href="{{url('Edit-product', $product->id)}}" class="btn btn-success m-2">Edit</a>
                </td>
            </tr>
            @endforeach
         </table>
        </div>
           </div>
    
        @include('admin.js')
  </body>
</html>
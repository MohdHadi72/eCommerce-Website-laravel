<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>

    <style type="text/css">
     .div_center{
      text-align: center;
      padding-top: 20px
     }

     .div_center h1{
      font-size: 2.40rem;
      padding-bottom: 40px;
      font-family:'Times New Roman', Times, serif ;
     }

     .div_center input{
      color: black;
      font-weight: 600;
     }

     .div_center button{
      padding: 14px;
      width: 15%;
      font-weight: 600;
      font-size: 18px
     }

     .center{
      margin: auto;
      width: 47%;
      text-align: center;
      margin-top: 7vh;
      border: 3px solid rgb(237, 244, 237);
     }
    
    
    
    </style>
    
    <div class="container-scroller">

       @include('admin.sidebar')

       @include('admin.navbar')
       
       <div class="main-panel">
        <div class="content-wrapper">
     
           @if (session()->has('message'))
               <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">X</button>
                       {{session()->get('message')}}
               </div>
           @endif
           @if (session()->has('messageDelete'))
           <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">X</button>
                   {{session()->get('messageDelete')}}
           </div>
       @endif

          <div class="div_center">
              <h1>Add Catagory</h1>
             <form action="{{url('addCatagory')}}" method="POST">
                @csrf
              <input type="text" name="catagoryname" placeholder="Write Catagory Name" style="width: 30%" required style="border-radius: 7px"><br>
              <button  type="submit" class="btn btn-success mt-4" >Add Catagory</button>
             </form>
          </div>
                 
           <table class="center">
            <tr  >
              <td style="border: 1px solid white;" class="p-2">Catagory Name</td>
              <td>Action</td>
            </tr>


             @foreach ($data as $data )
             <tr style="border: 1px solid white;" class="p-2">
               <td style="border: 1px solid rgb(213, 213, 213)">{{$data->catagory_name}}</td>
               <td>
                <a href="{{url('delete' ,$data->id)}}" class="btn btn-danger m-2" onclick="return confirm('Are You Sure To Delete This Catagory')">Delete</a>
              </td>
             </tr>
               
             @endforeach
           </table>

        </div>
       </div>
    </div>
    
        @include('admin.js')
  </body>
</html>
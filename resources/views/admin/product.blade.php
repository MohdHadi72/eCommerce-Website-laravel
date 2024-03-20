<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    
  <style type="text/css">

.center-dev {
  border: 1px solid #4caf50;
    padding: 25px;
    width: 60%;
    margin: 50px auto;
    border-radius: 5px;
    color: black;
  }
  .center-dev h1 {
    text-align: center;
    font-size: 2rem;
    color: #fbfafa;
    margin-bottom: 3%;
    font-weight: 500;
    font-family: 'Times New Roman', Times, serif;
  }
  label {
    margin-bottom: -1%;
    font-weight: bold;
     padding: 4px;
    color: #ffffff;
  }

  input[type="text"],
  input[type="number"],
  select {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #cccccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: vertical;
    margin-bottom: 2%;
  }
  input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    background-color: #f8f8f8;
    margin-bottom: 2%;
  }
  .btnt {
    width: 50%;
    padding: 10px;
    margin: 10px 26%;
    border: none;
    background-color: #41ac46;
    color: white;
    border-radius: 4px;
    cursor: pointer;
  }
  .btnt:hover {
    background: none;
    border: 1px solid #4df76c;
  }
  </style>

    <div class="container-scroller">

       @include('admin.sidebar')

       @include('admin.navbar')
       
       <div class="main-panel">
        <div class="content-wrapper hello">
          @if (session()->has('productAdd'))
          <div class="alert alert-success">
           <button type="button" class="close" data-dismiss="alert"  aria-hidden="true">X</button>
                  {{session()->get('productAdd')}}
          </div>
      @endif
        
            <div div class="center-dev mt-3">
                <h1>Add Product</h1>

                <form action="{{url('addProduct')}}" method="POST" enctype="multipart/form-data">
                   @csrf
                <div >
                  <label>Product Title :</label>
                  <input  type="text" name="title" placeholder=" Entet Product Title" required>
                </div>
                <div>
                  <label>Description :</label>
                  <input  type="text" name="description" placeholder=" Entet Description" required>
                </div>
                <div>
                  <label>Quantity :</label>
                  <input  type="number" name="quantity"   placeholder=" Entet Quantity" required>
                </div>
                <div>
                  <label>Price :</label>
                  <input  type="number" name="price" placeholder="Entet Price"required>
                </div>
                <div>
                  <label>Discount :</label>
                  <input  type="number" name="discount"  placeholder="Entet Discount" required>
                </div>
                <div class="mt-2">
                  <label>Product Catagory :</label>
                  <Select name="catagory">
                    <option value="1"  selected>Add A Catagory Here</option>
                    @foreach ($catagory as $catagory)
                    <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                    @endforeach
                  </Select>
                </div>
                <div>
                  <label>Product Image :</label>
                  <input  type="file" name="image" placeholder=" Entet image name" required>
                </div>

                <button class="btnt btn-succes mt-3">Add Product</button>
              </div>

            </form>
            </div>
       </div>
    </div>
       
    
        @include('admin.js')
  </body>
</html>
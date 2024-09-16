<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <style type="text/css">
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
        margin: 10px;
    }
    h1
    {
        color: white;
    }
    label
    {
        display: inline-block;
        width: 250px;
        font-size: 18px!important;
        color: white!important;
    }

    input[type="text"]
    {
        width: 200px;
        height: 30px
    }
    textarea
    {
     width: 300px;
     height: 50px;
    }
    .input_deg
    {
        padding: 10px;
    }
  </style>
  <body>

   <!-- start Header-->
   @include('admin.header')
   <!-- end Header-->
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
                <h3 style="color: white">Add Product</h3>
           <div class="div_deg">
            <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                @csrf 

                <div class="input_deg">
                    <label for="">Product Title</label>
                    <input type="text" name="title" required>
                </div>
                <div class="input_deg">
                    <label for="">Description</label>
                    <textarea id="description" name="description" required></textarea>
                    {{-- <textarea name="description" required></textarea> --}}
                </div>
                <div class="input_deg">
                    <label for="">Price</label>
                    <input type="text" name="price" required>
                </div>
                <div class="input_deg">
                    <label for="">Quentity</label>
                    <input type="number" name="qty" required>
                </div>
                <div class="input_deg">
                    <label for="">Product Category</label>
                   <select name="category" required>

                    <option>Select a Option</option>

                    @foreach($category as $category)

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                    @endforeach
                  
                   </select>
                </div>
                <div class="input_deg">
                    <label for="">Product Image</label>
                    <input type="file" name="image">
                </div>
                <div class="input_deg">      
                    <input class="btn btn-success" type="Submit" value="Add Product">
                </div>
            </form>
           </div>
            </div>
          </div>
        </section>
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
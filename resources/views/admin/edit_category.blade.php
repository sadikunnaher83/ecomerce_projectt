
<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <style>
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10px;
    }
    input[type="text"]
    {
      width: 300px;
      height:30px; 
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

            <h3 style="color: white">Update Category</h3>
            <div class="div_deg">
            <form action="{{url('update_category',$data->id)}}" method="post">
                @csrf
                <input type="text" name="category" value="{{$data->category_name}}">
                <input class="btn btn-success" type="submit" value="Update Category">
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

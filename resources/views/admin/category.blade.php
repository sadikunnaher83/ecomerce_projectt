
<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  <style type="text/css">
   
   input[type="text"]
   {
    width: 300px;
    height: 50px;
    border: 1px solid black;
    border-radius: 5px;
    padding: 5px;
   }

   .div_deg
   {
    text-align: center;
    display: flex;
    align-items: center;
    margin: 30px;

   }

  </style>
  </head>
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

            <h1 style="color: white;">Add Category</h1>
            
           <div class="div_deg">
            <form action="{{url('add_category')}}" method="post">
                @csrf

                <div>
                    <input type="text" name="category">
                    <input class="btn btn-success" type="submit" value="Add Category">
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
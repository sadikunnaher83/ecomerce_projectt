
<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')
</head>
<style type="text/css">
.div_deg {
    display: flex;
    justify-content: center;
    align-items: center;
   margin-top: 10px;
}

.table_deg {
    border: 2px solid yellowgreen;
    width: 80%;
}

th {
    background-color: green;
    font-size: 10px;
    font-weight: bold;
    color: white;
    padding: 10px;
}

td {
    border: 1px solid yellowgreen;
    text-align: center;
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
            <h3 style="color: white">View Product</h3>

            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Quantity</th>
                    </tr>
                    @foreach($product as $products)
                    <tr>
                        <td>{{ $products->title }}</td>
                        <td>{{ $products->description }}</td>
                        <td><img height="100" width="100" src="products/{{ $products->image }}"></td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->category }}</td>
                        <td>{{ $products->quantity }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
          <div class="div_deg">
            {{-- {{$product->links(2)}}  --}}
            {{$product->onEachSide(1)->links()}} 
          </div>
         </div>
      </div>
   </div>

   <footer class="footer">
      <div class="footer__block block no-margin-bottom">
         <div class="container-fluid text-center">
            <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
         </div>
      </div>
   </footer>

   <!-- Bootstrap CSS CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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

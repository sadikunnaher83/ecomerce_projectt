
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
   .table_deg
   {
    text-align: center;
    margin: auto;
    border: 2px solid yellowgreen;
    margin-top: 50px;
    width: 600px;
   }
   th 
   {
    background-color: green;
    padding: 10px;
    font-size: 20px;
    font-weight: bold;
    color: white;
   }
   td 
   {
    color: white;
    padding: 10px;
    border: 1px solid rgb(18, 145, 165);
   }
  </style>
  </head>
  <body>

   @include('admin.header')
   @include('admin.sidebar')
    

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="color: white;">Add Category</h1>
            
           <div class="div_deg">
            <form action="{{ route('add_category') }}" method="POST">
              @csrf
              <input class="" type="text" name="category" placeholder="Enter category">
              <button class="btn btn-success" type="submit">Add Category</button>
           </form>      
           </div>

           <div>

            <table class="table_deg">
              <tr>
                <th>Category Name</th>
                <th>Edit</th>
                <th>Delete</th>

               
              </tr>

              @foreach($data as $data)

              <tr>
                <td>{{$data->category_name}}</td>

                <td>
                  <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                </td>
                <td>
                  <a class="btn btn-warning" onclick="confirmtion(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
                </td>  
               
              </tr>
                  
              @endforeach
              
            </table>
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
   <script text="text/javascript">

   function confirmation(ev)
   {
    ev.preventDefault();

    var urlToRedirect = ev.currentTarget.getAttribute('herf');
    console.log(urlToRedirect);

    swal({
      title:"Are you sure to delete?",
      text:"This delete will be permanent!",
      icon:"warning",
      buttons:true,
      dangerMode:true,
    })

    .then((willCancel)=>{

      if(willCancel)
    {
      window.location.herf=urlToRedirect;
    }
    })

   }

   </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('register') }}">Customer Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('list') }}">Customer List</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container mt-5">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
     @yield('contents')
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
  $("#searchForm").on("submit", function(e){
    e.preventDefault();
    var name = $("#name").val();
    var lastname = $("#lastname").val();
    var entry_date = $("#entry_date").val();
    var roomno = $("#roomno").val();

    $.ajax({
      type: "POST",
      url: "{{ route('customer_search') }}",
      data: {
        _token: "{{ csrf_token() }}",
        name: name,
        lastname: lastname,
        entry_date: entry_date,
        roomno: roomno
      },
      success: function(data){
        $("#customerTable").html(data);
      }
    });
  });
});
</script>
</body>
</html>
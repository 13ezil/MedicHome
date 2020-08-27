<nav class="navbar nav-pills navbar-expand-md navbar-light" 
style="background-color: #00a86b;">
  <a class="navbar-brand px-3" href="{{route('homepage')}}""><h2><b>MedicHome</b></h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{route('medicinedetail')}}"><big>Medicine Details</big></a>
      <a class="nav-item nav-link" href="{{route('order')}}"><big>Order</big></a>
      <a class="nav-item nav-link" href="{{route('history')}}"><big>History Details</big></a>
    </div>
  </div>

  <div>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <big> {{auth()->user()->name}}</big>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{route('logout')}}">Log out</a>
      </div>
      <a href="{{route('notification')}}"><button type="button" class="btn bg-transaparent btn-lg"><i class="fa fa-bell"></i></button></a>
  </div>
</nav>
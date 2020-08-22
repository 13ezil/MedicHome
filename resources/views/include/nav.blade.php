<nav class="navbar navbar-expand-lg navbar-light" style="background-color: 14D8C2;">
  <a class="navbar-brand" href="{{route('homepage')}}"><h3>MedicHome</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav nav-pills">
      <a class="nav-item nav-link border-info rounded" href="{{route('medicinedetail')}}"><big>Medicine Details</big></a>
      <a class="nav-item nav-link border-info rounded" href="{{route('order')}}"><big>Order</big></a>
      <a class="nav-item nav-link border-info rounded" href="{{route('history')}}"><big>History Details</big></a>
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
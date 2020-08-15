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
     <h3 class="float-left mt-1">Username</h3>
     <button type="button" class="btn bg-transaparent btn-lg"><i class="fa fa-bell"></i></button>
  </div>
</nav>
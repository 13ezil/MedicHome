<nav class="navbar nav-pills navbar-expand-lg navbar-light" 
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
  <h3 class="float-left mt-1">{{auth()->user()->name}}</h3>
     <button type="button" class="btn bg-transaparent btn-lg"><i class="fa fa-bell"></i></button>
  </div>
</nav>
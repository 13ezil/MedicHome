@extends('layout.app')
@section('content')
<style>
  .form{
      margin-top: 7%;
  }
</style>
@include('include.ordererror') 
@include('include.flashmsg')

<form  method="POST" action="{{route('placeorder')}}" enctype="multipart/form-data">
    @csrf
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-2"><label><big> Name of medicine</big></label></div>
        <div class="col"><input type="text" class="form-control form-control-lg" placeholder="Name of medicine" name="medicine" value={{$med}}></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">    
        <div class="col-2"><label> <big>Quantity </big> </label></div>
        <div class="col"><select class="form-control form-control-lg" id="exampleFormControlSelect1" name="quantity">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
          </select></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-2"><label><big> Doctor's prescription </big></label> </div>
        <div class="col"> <input type="file" name="doctorPrescription" class="form-control-file" ;></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-2"><label><big> Medicine's photo</big> </label></div>
        <div class="col"> <input type="file" name="medicinephoto" class="form-control-file"></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-2"><label><big> Location </big></label></div>
        <div class="col"><input type="text" class="form-control form-control-lg" name="location" placeholder="Location"></div>
    </div>
    <input type="hidden" name="latlong" id="latlong">
    <div class="row mt-4 mr-4 ml-4">
        <button type="submit" onclick="loading()" class="btn btn-primary btn-lg btn-block">Place Order</button>
    </div>
</form>


@endsection

@push('after-scripts')
    <script>
  function loading()
  {
    let timerInterval
    Swal.fire({
    title: 'Loading...',
    timer: 2000,
    timerProgressBar: true,
    onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
  }).then((result) => {})
  }

  var msgs = '{{Session::get('error')}}';
    var exists = '{{Session::has('error')}}';
    if(exists){
        Swal.fire({
                title: msgs,
                type: 'error',
                showCloseButton: true
            })
           }

  if (navigator.geolocation) 
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
   
   function showPosition(position) 
   {
    document.getElementById("latlong").value = position.coords.latitude + 
        ", " + position.coords.longitude;
   }
    </script>
@endpush

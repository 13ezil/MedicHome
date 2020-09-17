@extends('layout.app')
@section('content')
<style>
    .container{
       margin-top : 7%;
    }
</style>
<div class="container">
    
   @include('include.ordererror') 
   @include('include.flashmsg')

<form  method="POST" action="{{route('placeorder')}}" enctype="multipart/form-data">
    @csrf
    <div class="row mt-4">
        <div class="col-sm-2"><label for="colFormLabelLg"><big> Name of medicine</big></label></div>
        <div class="col"><input type="text" class="form-control form-control-lg w-75" placeholder="Name of medicine" name="medicine"></div>
    </div>
    <div class="row mt-4">    
        <div class="col-sm-2"><label> <big>Quantity </big> </label></div>
        <div class="col"><select class="form-control form-control-lg w-25" id="exampleFormControlSelect1" name="quantity">
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
    <div class="row mt-4">
        <div class="col-sm-2"><label><big> Doctor's prescription </big></label> </div>
        <div class="col"> <input type="file" name="doctorPrescription" class="form-control-file w-75" ;></div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-2"><label><big> Medicine's photo</big> </label></div>
        <div class="col"> <input type="file" name="medicinephoto" class="form-control-file w-75"></div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-2"><label><big> Location </big></label></div>
        <div class="col"><input type="text" class="form-control form-control-lg w-75" name="location" placeholder="Location"></div>
    </div>
    <input type="hidden" name="latlong" id="latlong">
    <div class="row mt-4">
        <button type="submit" onclick="loading()" class="btn btn-primary btn-lg btn-block w-50 px-auto">Place Order</button>
    </div>
</form>
</div>


@endsection



@push('after-scripts')
<script>
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist){
        Swal.fire({
                title: msg,
                type: 'success',
                showCloseButton: true
            })
           }

    function loading()
    {
        let timerInterval
        Swal.fire({
        title: 'Wait a second...',
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
   
   
    if (navigator.geolocation) 
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    } 
   
   function showPosition(position) 
   {
    document.getElementById("latlong").value = "Latitude: " + position.coords.latitude + 
        "  Longitude: " + position.coords.longitude;
   }
    
    </script>
@endpush
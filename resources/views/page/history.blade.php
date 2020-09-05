@extends('layout.app')
@section('content')
<div class="row d-flex justify-content-center mt-4">
    <div class="col-2"><big>Medicine' Name</big></div>
    <div class="col-2"><big>Quantity</big></div>
    <div class="col-2"><big>Price</big></div>
    <div class="col-2"><big> Prescription</big></div>
    <div class="col-2"><big>Medicine Photo</big></div>
</div>   
@foreach ($order as $orders)
<div class="row d-flex justify-content-center mt-4">
    <div class="col-2">{{$orders->name}}</div>
    <div class="col-2">{{$orders->quantity}}</div>
    @if ( $orders->price == null)
    <div class="col-2">Not fixed</div>        
    @else
    <div class="col-2">{{$orders->price}}</div>
    @endif    

    @if ( $orders->doctor_prescription == null)
    <div class="col-2">Not doctor prescription</div>        
    @else
    <div class="col-2">
        <img src="{{asset('storage/uploads/doctorprescription/'.$orders->doctor_prescription)}}" width="200px" height="150px" class="border border-dark">
    </div>
    @endif

    
    @if ( $orders->medicine_photo == null)
    <div class="col-2">Not medicine photo</div>        
    @else
    <div class="col-2">
        <img src="{{asset('storage/uploads/medicinephoto/'.$orders->medicine_photo)}}"  width="200px" height="150px" class="border border-dark" >
        </div>
    @endif
</div>
@endforeach
<div class="d-flex justify-content-center mt-4">
    {{ $order->links() }}
    </div>
@endsection

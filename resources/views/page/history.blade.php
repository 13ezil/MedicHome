<div class="container">
@extends('layout.app')
@section('content')
@foreach ($order as $orders)
    {{$orders->name}}
    {{$orders->quantity}}
    {{$orders->price}}
    {{$orders->phonenumber}}
    <img src="{{asset('uploads/doctorprescription/'.$orders->doctor_prescription)}}">
    <img src="{{asset('uploads/medicinephoto/'.$orders->medicine_photo)}}">
@endforeach
@endsection
</div>
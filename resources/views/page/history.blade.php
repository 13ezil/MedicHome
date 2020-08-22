@extends('layout.app')
@section('content')
@foreach ($order as $orders)
    {{$orders->name}}
    {{$orders->quantity}}
    {{$orders->price}}
    {{$orders->phonenumber}}
    <img src="{{asset('storage/uploads/doctorprescription/'.$orders->doctor_prescription)}}">
    <img src="{{asset('storage/uploads/medicinephoto/'.$orders->medicine_photo)}}">
@endforeach
@endsection
@extends('admin.layout.app')
@section('content')
<div class="container">
<form  method="POST" action="{{ route('admin.store') }}" class="pt-4 pb-4">
    @csrf
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-sm-2"><label><big> Name of medicine</big></label></div>
        <div class="col"><input type="text" class="form-control form-control-lg w-75" placeholder="Name of medicine" name="medicine"></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">    
        <div class="col-sm-2"><label> <big>Quantity </big> </label></div>
        <div class="col"><input type="text" class="form-control form-control-lg w-25" placeholder="Quantity" name="quantity"></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-sm-2"><label><big> Price </big></label> </div>
        <div class="col"> <input type="text" name="price" placeholder="Price" class="form-control form-control-lg w-25" name="price"></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-sm-2"><label><big> Review </big></label> </div>
        <div class="col"> <input type="text" name="review" placeholder="Review" class="form-control form-control-lg w-75" name="price"></div>
    </div>
    <div class="row mt-4 mr-4 ml-4 ml-4">
        <button type="submit" class="btn btn-primary btn-lg w-75 btn-block">Store Medicine</button>
    </div>
</form>
</div>
<div class="h-25">
</div>


@endsection
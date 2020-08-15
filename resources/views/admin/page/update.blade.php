@extends('admin.layout.app')
@section('content')

<form  method="POST" action="{{ route('admin.updatemedicine') }}" class="pt-4 pb-4">
    @csrf
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-2"><label><big> Name of medicine</big></label></div>
        <div class="col"><input type="text" class="form-control form-control-lg" placeholder="Name of medicine" name="medicine" value={{$med->name}}></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">    
        <div class="col-2"><label> <big>Quantity </big> </label></div>
        <div class="col"><input type="text" class="form-control form-control-lg" placeholder="Quantity" name="quantity" value={{$med->quantity}}></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-2"><label><big> Price </big></label> </div>
        <div class="col"> <input type="text" name="price" placeholder="Price" class="form-control form-control-lg" name="price" value={{$med->price}}></div>
    </div>
    <div class="row mt-4 mr-4 ml-4">
        <div class="col-2"><label><big> Review </big></label> </div>
        <div class="col"> <input type="text" name="review" placeholder="Review" class="form-control form-control-lg" name="price" value={{$med->review}}></div>
    </div>
    <input type="hidden" name="id" value={{$med->id}}>
    <div class="row mt-4 mr-4 ml-4 ml-4">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Update Medicine</button>
    </div>
</form>


@endsection
@extends('admin.layout.app')
@section('content')
<table style="width: 95%" class="table-striped ml-4 mr-4 h-100">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Review</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
<div class="container mb-4">
    @foreach ($med as $m)
    <tr>
        <td>{{$m->name}}</td>
        <td>{{$m->quantity}}</td>
        <td>{{$m->price}}</td>
        <td>{{$m->review}}</td>   
    <td ><a href="{{route('admin.update',$m->id)}}"> <button type="button" class="btn bg-transaparent btn-sm"><i class="fa fa-refresh"></i></button></a>
          <a href = "{{route('admin.delete',$m->id)}}">  <button type="button" class="btn bg-transaparent btn-sm"><i class="fa fa-trash"></i></button></td></a>
    </tr>
    @endforeach
</div>
    </tbody>
</table>
<div class="d-flex justify-content-center">
{{ $med->links() }}
</div>
@endsection
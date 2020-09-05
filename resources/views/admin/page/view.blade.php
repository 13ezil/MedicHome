@extends('admin.layout.app')
@section('content')
<div class="container">
<div class="table-responsive">
<table class="table h-75 w-100">
    <thead class="thead-light">
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
    <td ><a href="{{route('admin.update',$m->id)}}"> <button type="button" class="btn btn-info">update</button></a>
          <a href = "{{route('admin.delete',$m->id)}}">  <button type="button" onclick="loading()" class="btn btn-danger">delete</button></td></a>
    </tr>
    @endforeach
</div>
    </tbody>
</table>
</div>
</div>
<div class="d-flex justify-content-center">
{{ $med->links() }}
</div>
@endsection

@push('after-scripts')
    <script>
  function loading()
  {
    let timerInterval
    Swal.fire({
    title: 'Deletng...',
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
    </script>
@endpush
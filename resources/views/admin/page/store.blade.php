@extends('admin.layout.app')
@section('content')
<div class="container mt-4 h-75">

    @include('include.ordererror') 
    @include('include.flashmsg')

<form  method="POST" action="{{ route('admin.store') }}" class="pt-4 pb-4">
    @csrf
    <div class="row mt-4 mr-2 ml-2">
        <div class="col-sm-2"><label><big> Name of medicine</big></label></div>
        <div class="col"><input type="text" class="form-control form-control-lg" placeholder="Name of medicine" name="name"></div>
    </div>
    <div class="row mt-4 mr-2 ml-2">    
        <div class="col-sm-2"><label> <big>Quantity </big> </label></div>
        <div class="col"><input type="text" class="form-control form-control-lg" placeholder="Quantity" name="quantity"></div>
    </div>
    <div class="row mt-4 mr-2 ml-2">
        <div class="col-sm-2"><label><big> Price </big></label> </div>
        <div class="col"> <input type="text" name="price" placeholder="Price" class="form-control form-control-lg" name="price"></div>
    </div>
    <div class="row mt-4 mr-2 ml-2">
        <div class="col-sm-2"><label><big> Review </big></label> </div>
        <div class="col"> <input type="text" name="review" placeholder="Review" class="form-control form-control-lg" name="price"></div>
    </div>
    <div class="row mt-4 mr-2 ml-2">
        <button type="submit" onclick="loading()" class="btn btn-primary btn-lg btn-block">Store Medicine</button>
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
    title: 'Storig...',
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
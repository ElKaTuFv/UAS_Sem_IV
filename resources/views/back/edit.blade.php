@extends('back.layouts.template')

@section('content')
   
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
   @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About Me</h1>
      </div>
      <h2>Isi dari About</h2>
      <form action="/{{ $about->id }}" method="post">
        @method('PUT')
        @csrf
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="About Yourself" aria-label="Recipient's username" aria-describedby="basic-addon2" name="about" value="{{$about->about}}">
        <div class="input-group-append">
            <button class="btn btn-outline-success" type="submit">Update</button>
        </div>
        </div>
      </form>
    </main>
  </div>
</div>
</script>
@endsection
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
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ABOUT</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($abouts as $data)
            <tr>
              <td>{{ $data->about }}</td>
              <td>
                {{-- <a href="{{ url('/back/portofolio/delete/'.$data->id) }}" class="btn btn-danger">Delete</a> --}}
                <a href="{{ route('edit',['id'=>$data->id]) }}" class="btn btn-success" >Update</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script>
  function confirmDelete(url) {
    Swal.fire({
      title: "Are you sure?",
      text: "to delete this data",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect to the delete URL
        window.location.href = url;
      }
    });
  }
</script>
@endsection
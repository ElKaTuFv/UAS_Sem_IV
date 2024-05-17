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
@if($message = Session::get('admin'))
    <script>
        Swal.fire({
            title: "Berhasil Login",
            text: "{{ Session::get('admin') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <form action="/tamu/cari" method="GET">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" name="cari" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    
      <h2>Pesan Masuk</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA</th>
              <th scope="col">EMAIL</th>
              <th scope="col">MESSAGE</th>
              <th scope="col">ACTION</th>
            </tr>
          </thead>
          <tbody>
            @php
               $counter = 1; // inisialisasi counter
              @endphp
            @foreach ($tamus as $data)
            <tr>
              <td>{{ $counter++ }}</td>
              <td>{{ $data->nama }}</td>
              <td>{{ $data->email }}</td>
              <td>{{ $data->pesan }}</td>
              <td>
                {{-- <a href="{{ url('/back/portofolio/delete/'.$data->id) }}" class="btn btn-danger">Delete</a> --}}
                <a href="#" class="btn btn-danger" onclick="confirmDelete('{{ url('/dashboard/delete/'.$data->id) }}')">Delete</a>
                <a href="{{ url('/dashboard/update/'.$data->id) }}" class="btn btn-success" >Update</a>
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



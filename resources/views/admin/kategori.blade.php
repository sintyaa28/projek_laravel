@extends("layout.app")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <h2>Input Kategori </h2>
                <form method="post" action="{{route('admin.storekategori')}}"  enctype="multipart/form-data">
                  @csrf
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" >
                    </div>

                    <div class="mb-3">
                        <label for="nmpengarang" class="form-label">Deskripsi Kategori</label>
                        <input type="text" class="form-control" name="deskripsi" >
                    </div>
                    
                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>
                  </form>

                  @if (session('error'))
                       {{session('error')}}
                       @endif

                  @if(session('succes'))
                        {{session('succes')}}
                        @endif
                           
                        
                    <table class="table">
                      <tr>
                        <td>#<td>
                        <td>Nama<td>
                          <td>Deskripsi<td>
                        <td colspan=2>Menu</td>
                      </tr>
                    @forelse ( $kat as $k )  
                      <tr>
                      <td>{{ $k->id }}<td>
                      <td>{{ $k->nama }}<td>
                      <td>{{ $k->nama }}<td>
                      <td>Edit<td>
                      <td>Delete<td>
                   </tr>
                  @empty
                  
                  @endforelse

                  </table>
 @endsection

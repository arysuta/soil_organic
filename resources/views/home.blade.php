@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">

                    <thead>
                      <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Gambar</th>
                        <th width="150" colspan="1">Action</th>
                     </tr>
                     </thead>
                    <tbody>
                    @foreach($brg as $barang)
                        <tr>
                            <td>{{$barang->id}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->harga}}</td>
                            <td><a href="{{route('admps07-barang.index')}}/{{$barang->id}}">View</a></td>
                            <td>
                                <div class="row">
                                    <a class="btn btn-primary" href="{{route('admps07-barang.index')}}/{{$barang->id}}/edit">Edit</a>
                                    <button class="btn btn-danger" onclick="deletebarang({{$barang->id}})">Delete</button> 
                                </div>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{route('admps07-barang.create')}}">+ Tambah Barang</a>
                
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalhapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Apakah anda yakin ingin mengapus data ini?
        <form action="" method="POST" id="formdelete">
                {{csrf_field()}}
                {{method_field('DELETE') }}
          
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
          </div>
        </form>
    </div>
  </div>
</div>

<script type="text/javascript">
    function deletebarang(id){
        $('#formdelete').attr('action', '/admps07-barang/'+id);
        $('#modalhapus').modal('show');
    }
</script>

@endsection

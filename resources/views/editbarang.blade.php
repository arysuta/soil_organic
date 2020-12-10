@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Barang</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/admps07-barang/{{$barang->id}}" method="POST" class="" enctype="multipart/form-data">
                      {{csrf_field()}}
                      {{method_field('PUT')}}                  
 
                        
                        <div class="form-group">
                           <div class="col-sm-12">
                            <label for="barang">Nama Barang</label>
                                <input class="form-control" type="text" id="barang" name="barang" placeholder="masukkan nama barang.." value="{{$barang->nama_barang}}">
                            </div>
                        </div>


                        <div class="form-group">
                           <div class="col-sm-12">
                           <br>
                            <label for="kategori">Kategori</label>
                            <select class="form-control js-example-basic-multiple" name="kategori[]" multiple="multiple">
                              
                            @foreach ($detkategori as $i => $kat)
                                @php
                                  $selected = false;
                                  foreach ($barang->detkategori as $key => $value) {
                                    if($value->id == $kat->id){
                                      $selected = true;
                                      break;
                                    }
                                  }
                                @endphp
                                <option value="{{$kat->id}}" {{ ($selected) ? 'selected' : '' }}>{{$kat->kategori->kategori}}</option>
                                
                            @endforeach
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                           <div class="col-sm-12">
                                <br>
                                <label for="deskripsi">Deskripsi Barang</label>
                                <textarea rows="5" class="form-control" name="deskripsi" id="deskripsi" value="">{{$barang->deskripsi}}</textarea>
                            </div>
                        </div>

                      <div class="form-group">
                           <div class="col-sm-12">
                           <br>
                                <label for="harga">Harga Barang</label>
                                <input class="form-control" type="text" id="harga" name="harga" placeholder="masukkan harga barang.." value="{{$barang->harga}}">
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="col-sm-12">
                        <br>
                            <label>File</label>
                            <input type="file" id="file" name="file[]" multiple="">
                        </div>
                        </div>


                        <div class="form-group">
                               <div class="col-sm-12">
                               <br>
                            <input type="submit" name="" class="btn btn-success" value="Submit">
                        </div>
                        </div>

                    <div class="form-group">
                      <div class="col-sm-12">
                        @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                              <i>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                              </i>
                          </div>
                      @endif
                    </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

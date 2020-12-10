@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15">
            <div class="panel panel-default">
                <div class="panel-heading">Show Gambar</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <form action="/Detgambar/{{$barangs->id}}" method="POST">
                          {{csrf_field()}}
                          {{method_field('PUT')}}
                        <div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
                            <h2>Nama Item : {{  $barangs->nama_barang  }}</h2>
                            <br>
                            <br>
                             @foreach($images as $image)
                                <img src="{{asset('files/'.$image->nama_gambar)}}" width="305" height="175"/>        
                              @endforeach
                        </div>
                          
                         <div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
                          <br>
                          <br>
                                <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection

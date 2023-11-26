@extends('layouts.mainadv')

@section('title', 'SiMUDAH | Pengumuman')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <h1 class="ml-3">List UKM</h1>

        <div class="col-lg-4">
        <div class="list-group">
            @foreach ($pengumuman as $ukm)
                <a href="/pengumuman/showperukm/{{$ukm->id}}" class="list-group-item list-group-item-action">{{ $ukm->nama_ukm }}</a>
            @endforeach
          </div>
        </div>
    </div>
@endsection
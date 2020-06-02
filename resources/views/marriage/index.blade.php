@extends('layouts.main')
@section('title', 'Daftar Pernikahan - SIMKAH')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-6">
        <h1>Daftar Pernikahan</h1>
        <div class="list-group">
          @foreach ($couples as $couple)
            <a href="/pernikahan/1" class="list-group-item list-group-item-action list-group-item-dark">{{$couple['bridegroom'] . ' dan ' . $couple['bride']}}</a>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
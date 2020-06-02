@extends('layouts.main')
@section('title', 'Detail Pernikahan - SIMKAH')
@section('content')
  {{-- <div class="container">
    <div class="row wow fadeIn mt-6 mx-5 justify-content-center align-items-start">
      <div class="col mb-4">
        <div class="card">
          <h5 class="card-header unique-color-dark white-text text-center py-4">
            <strong>Detail Data Pasangan</strong>
          </h5>
          <div class="card-body px-lg-5 pt-0">
            <form style="color: #757575;">

              <!-- Material outline input -->
              <div class="md-form md-outline">
                <input type="text" id="form1" class="form-control">
                <label for="form1">Example label</label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="container">
    <div class="row">
      <div class="col-md-6 mt-6">
        <h1>Daftar Pernikahan</h1>
        <div class="list-group">
          {{-- @foreach ($couples as $couple)
            <a href="/pernikahan/1" class="list-group-item list-group-item-action list-group-item-dark">{{$couple['bridegroom'] . ' dan ' . $couple['bride']}}</a>
          @endforeach --}}
        </div>
      </div>
    </div>
  </div>
@endsection
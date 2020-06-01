@extends('layouts/main')
@section('title', 'Daftar Pernikahan - SIMKAH')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col mt-6">
        <h1>Daftar Pernikahan</h1>
        <table class="table table-hover">
          <thead class="black white-text">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Mempelai Pria</th>
              <th scope="col">Nama Mempelai Wanita</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Fajar Septian Nugraha</td>
              <td>Ms. X</td>
              <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
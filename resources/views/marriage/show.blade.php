@extends('layouts.main')
@section('title', 'Detail Pernikahan - SIMKAH')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-2 mt-6 wow fadeIn">
        <div class="nav flex-column nav-pills sidenav">
          <a class="nav-link" href="#informasi-pernikahan">Informasi Pernikahan</a>
          <a class="nav-link" href="#data-diri-mempelai-pria">Data Diri Mempelai Pria</a>
          <a class="nav-link" href="#data-diri-mempelai-wanita">Data Diri Mempelai Wanita</a>
          <a class="nav-link" href="#data-bapak-mempelai-pria">Data Bapak Mempelai Pria</a>
          <a class="nav-link" href="#data-bapak-mempelai-wanita">Data Bapak Mempelai Wanita</a>
          <a class="nav-link" href="#data-ibu-mempelai-pria">Data Ibu Mempelai Pria</a>
          <a class="nav-link" href="#data-ibu-mempelai-wanita">Data Ibu Mempelai Wanita</a>
          <a class="nav-link" href="#data-saksi-mempelai-pria">Data Saksi Mempelai Pria</a>
          <a class="nav-link" href="#data-saksi-mempelai-wanita">Data Saksi Mempelai Wanita</a>
        </div>
      </div>
      <div class="col-md-10">
        <div class="row wow fadeIn mt-6 mx-5 justify-content-center" id="informasi-pernikahan">
          <div class="col">
            <h1 class="mb-5">{{ $marriage['bridegroom'][0]['first_name'] . " " . $marriage['bridegroom'][0]['last_name'] . " dan " . $marriage['bride'][0]['first_name'] . " " . $marriage['bride'][0]['last_name']}}</h1>
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Informasi Pernikahan</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="nationality" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="nationality" readonly value="{{ $marriage['registrationInfo']['nationality'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="marriage_date" class="col-sm-4 col-form-label">Tanggal Pernikahan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="marriage_date" readonly value="{{ $marriage['registrationInfo']['marriage_date'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="marriage_time" class="col-sm-4 col-form-label">Waktu Pernikahan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="marriage_time" readonly value="{{ $marriage['registrationInfo']['marriage_time'] }} WIB">
                        <div id="data-diri-mempelai-pria"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                </form>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start">
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Diri Mempelai Pria</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="bridegroomName" readonly value="{{ $marriage['bridegroom'][0]['first_name'] . " " . $marriage['bridegroom'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="bridegroomBirth" readonly value="{{ $marriage['bridegroom'][0]['birthplace'] . ", " . $marriage['bridegroom'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomReligion" readonly value="{{ $marriage['bridegroom'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomOccupation" readonly value="{{ $marriage['bridegroom'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomCurrentAddress" class="col-sm-4 col-form-label">Alamat Sekarang</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomCurrentAddress" readonly value="{{ $marriage['bridegroom'][0]['current_address'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomFirstAddress" class="col-sm-4 col-form-label">Alamat Dahulu</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomFirstAddress" readonly value="{{ $marriage['bridegroom'][0]['first_address'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomEverMarried" class="col-sm-4 col-form-label">Sudah / Belum Pernah Kawin</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomEverMarried" readonly value="@if($marriage['bridegroom'][0]['ever_married'] === 1){{ 'Sudah' }}@else{{ 'Belum' }}@endif">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomExWife" class="col-sm-4 col-form-label">Nama Mantan Istri</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomExWife" readonly value="@if($marriage['bridegroom'][0]['ex-wife_name'] != null){{ $marriage['bridegroom'][0]['ex-wife_name'] }}@else{{ 'Tidak ada' }}@endif">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomChildToBeLegalized" class="col-sm-4 col-form-label">Anak-anak yang akan disahkan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomChildToBeLegalized" readonly value="@if($marriage['bridegroom'][0]['child_to_be_legalized'] != null){{ $marriage['bridegroom'][0]['child_to_be_legalized'] }}@else{{ 'Tidak ada' }}@endif">
                        <div id="data-diri-mempelai-wanita"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                </form>
              </div>
            </div>
          </div>
        </div>
    
        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start">
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Diri Mempelai Wanita</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="brideName" readonly value="{{ $marriage['bride'][0]['first_name'] . " " . $marriage['bride'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="brideBirth" readonly value="{{ $marriage['bride'][0]['birthplace'] . ", " . $marriage['bride'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideReligion" readonly value="{{ $marriage['bride'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideOccupation" readonly value="{{ $marriage['bride'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideCurrentAddress" class="col-sm-4 col-form-label">Alamat Sekarang</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideCurrentAddress" readonly value="{{ $marriage['bride'][0]['current_address'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideFirstAddress" class="col-sm-4 col-form-label">Alamat Dahulu</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideFirstAddress" readonly value="{{ $marriage['bride'][0]['first_address'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideEverMarried" class="col-sm-4 col-form-label">Sudah / Belum Pernah Kawin</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideEverMarried" readonly value="@if($marriage['bride'][0]['ever_married'] === 1){{ 'Sudah' }}@else{{ 'Belum' }}@endif">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideExWife" class="col-sm-4 col-form-label">Nama Mantan Suami</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideExWife" readonly value="@if($marriage['bride'][0]['ex-wife_name'] != null){{ $marriage['bride'][0]['ex-wife_name'] }}@else{{ 'Tidak ada' }}@endif">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideChildToBeLegalized" class="col-sm-4 col-form-label">Anak-anak yang akan disahkan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideChildToBeLegalized" readonly value="@if($marriage['bride'][0]['child_to_be_legalized'] != null){{ $marriage['bride'][0]['child_to_be_legalized'] }}@else{{ 'Tidak ada' }}@endif">
                        <div id="data-bapak-mempelai-pria"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start" >
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Bapak Mempelai Pria</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroom-father-name" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="bridegroom-father-name" readonly value="{{ $marriage['bridegroomFather'][0]['first_name'] . " " . $marriage['bridegroomFather'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomFatherBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="bridegroomFatherBirth" readonly value="{{ $marriage['bridegroomFather'][0]['birthplace'] . ", " . $marriage['bridegroomFather'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomFatherReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomFatherReligion" readonly value="{{ $marriage['bridegroomFather'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomFatherOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomFatherOccupation" readonly value="{{ $marriage['bridegroomFather'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomFatherCurrentAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomFatherCurrentAddress" readonly value="{{ $marriage['bridegroomFather'][0]['current_address'] }}">
                        <div id="data-bapak-mempelai-wanita"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start" >
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Bapak Mempelai Wanita</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bride-father-name" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="bride-father-name" readonly value="{{ $marriage['brideFather'][0]['first_name'] . " " . $marriage['brideFather'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideFatherBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="brideFatherBirth" readonly value="{{ $marriage['brideFather'][0]['birthplace'] . ", " . $marriage['brideFather'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideFatherReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideFatherReligion" readonly value="{{ $marriage['brideFather'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideFatherOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideFatherOccupation" readonly value="{{ $marriage['brideFather'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideFatherCurrentAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideFatherCurrentAddress" readonly value="{{ $marriage['brideFather'][0]['current_address'] }}">
                        <div id="data-ibu-mempelai-pria"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start" >
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Ibu Mempelai Pria</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomMotherName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="bridegroomMotherName" readonly value="{{ $marriage['bridegroomMother'][0]['first_name'] . " " . $marriage['bridegroomMother'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomMotherBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="bridegroomMotherBirth" readonly value="{{ $marriage['bridegroomMother'][0]['birthplace'] . ", " . $marriage['bridegroomMother'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomMotherReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomMotherReligion" readonly value="{{ $marriage['bridegroomMother'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomMotherOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomMotherOccupation" readonly value="{{ $marriage['bridegroomMother'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomMotherCurrentAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomMotherCurrentAddress" readonly value="{{ $marriage['bridegroomMother'][0]['current_address'] }}">
                        <div id="data-ibu-mempelai-wanita"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start" >
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Ibu Mempelai Wanita</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideMotherName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="brideMotherName" readonly value="{{ $marriage['brideMother'][0]['first_name'] . " " . $marriage['brideMother'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideMotherBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="brideMotherBirth" readonly value="{{ $marriage['brideMother'][0]['birthplace'] . ", " . $marriage['brideMother'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideMotherReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideMotherReligion" readonly value="{{ $marriage['brideMother'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideMotherOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideMotherOccupation" readonly value="{{ $marriage['brideMother'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideMotherCurrentAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideMotherCurrentAddress" readonly value="{{ $marriage['brideMother'][0]['current_address'] }}">
                        <div id="data-saksi-mempelai-pria"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start" >
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Saksi Mempelai Pria</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomWitnessName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="bridegroomWitnessName" readonly value="{{ $marriage['bridegroomWitness'][0]['first_name'] . " " . $marriage['bridegroomWitness'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomWitnessBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="bridegroomWitnessBirth" readonly value="{{ $marriage['bridegroomWitness'][0]['birthplace'] . ", " . $marriage['bridegroomWitness'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomWitnessReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomWitnessReligion" readonly value="{{ $marriage['bridegroomWitness'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomWitnessOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomWitnessOccupation" readonly value="{{ $marriage['bridegroomWitness'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="bridegroomWitnessCurrentAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="bridegroomWitnessCurrentAddress" readonly value="{{ $marriage['bridegroomWitness'][0]['current_address'] }}">
                        <div id="data-saksi-mempelai-wanita"></div>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row wow fadeIn mt-4 mx-5 justify-content-center align-items-start" >
          <div class="col">
            <div class="card">
              <h5 class="card-header unique-color-dark white-text text-center py-4">
                <strong>Data Saksi Mempelai Wanita</strong>
              </h5>
              <div class="card-body px-lg-5 pt-0">
                <form style="color: #757575;">
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideWitnessName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mb-0">
                        <input type="text" class="form-control" id="brideWitnessName" readonly value="{{ $marriage['brideWitness'][0]['first_name'] . " " . $marriage['brideWitness'][0]['last_name']}}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideWitnessBirth" class="col-sm-4 col-form-label">Tempat & Tanggal Lahir</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg my-0">
                        <input type="text" class="form-control" id="brideWitnessBirth" readonly value="{{ $marriage['brideWitness'][0]['birthplace'] . ", " . $marriage['brideWitness'][0]['birthdate'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideWitnessReligion" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideWitnessReligion" readonly value="{{ $marriage['brideWitness'][0]['religion'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideWitnessOccupation" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideWitnessOccupation" readonly value="{{ $marriage['brideWitness'][0]['occupation'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
    
                  <!-- Grid row -->
                  <div class="form-group row align-items-center">
    
                    <!-- Material input -->
                    <label for="brideWitnessCurrentAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <div class="md-form md-bg mt-0">
                        <input type="text" class="form-control" id="brideWitnessCurrentAddress" readonly value="{{ $marriage['brideWitness'][0]['current_address'] }}">
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
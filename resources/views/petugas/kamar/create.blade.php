@extends('layouts.dashboard_master')
@section('content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Tambah Kamar</h5>
      <a href="{{url()->previous()}}" class="btn btn-facebook">kembali</a>
      <!-- General Form Elements -->
      <form>
        <div class="row mb-3">
          <label for="inputText" class="col-sm-2 col-form-label">Nama Kamar</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">kelas</label>
                <div class="col-sm-10">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
        <div class="row mb-3">
          <label for="inputDate" class="col-sm-2 col-form-label">Harga</label>
          <div class="col-sm-10">
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="row mb-3">
          {{-- <label class="col-sm-10 col-form-label"></label> --}}
          <div class="col-sm-2 offset-2"><br>
            <button type="submit" class="btn btn-primary">Submit Form</button>
          </div>
        </div>

      </form><!-- End General Form Elements -->

    </div>
  </div>
  @endsection
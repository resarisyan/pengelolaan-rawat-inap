@extends('layouts.dashboard_master')
@section('title')
    Halaman Tambah Dokter
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Dokter</h5>
            <a href="{{ url()->previous() }}" class="btn btn-facebook">Kembali</a>
            <!-- General Form Elements -->
            <form action="{{ route('petugas.dokter.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama Dokter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_dokter">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">No Indentitas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="no_identitas">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="spesialis">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="jadwal_dokter">
                    </div>
                </div>
                {{-- <div class="row mb-3">
          <label for="inputTime" class="col-sm-2 col-form-label">Time</label>
          <div class="col-sm-10">
            <input type="time" class="form-control" name="jadwal_dokter">
          </div>
        </div> --}}

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

@extends('layout.app')
   @section('contents')
          <form action="{{ route('customerregister') }}" method="POST" enctype="multipart/form-data">
           @csrf
        	<h3>Customer Register</h3> <br>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Ad</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastname" class="form-label">Soyad</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
            </div>
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="entry_date" class="form-label">Giriş Tarihi</label>
                <input type="date" class="form-control" id="entry_date" name="entry_date" min="<?= date('Y-m-d'); ?>">
            </div>
            <div class="col-md-6 mb-3">
                <label for="room_no" class="form-label">Oda No</label>
                <input type="number" class="form-control" id="room_no" name="room_no">
            </div>
        </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="description" class="form-label">Ek Bilgiler</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

            </div>
            <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
        </form>
    @endsection
@extends('layout.app')
  @section('contents')
<br><br>
<div class="container">
<div class="col-12 col-sm-12 col-md-12">
<form id="searchForm">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="name" class="form-label">Ad</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="lastname" class="form-label">Soyad</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="entry_date" class="form-label">Giriş Tarihi</label>
                <input type="date" class="form-control" id="entry_date" name="entry_date">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="roomno" class="form-label">Oda No</label>
                <input type="number" class="form-control" id="roomno" name="roomno">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ara</button>
</form>

<table class="table" id="customerTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Oda No</th>
      <th scope="col">Ad</th>
      <th scope="col">Soyad</th>
      <th scope="col">Giriş Tarihi</th>
      <th scope="col">Ek Bilgiler</th>
    </tr>
  </thead>
  <tbody>
     @if($customer->count() > 0)
      @foreach($customer as $rs)
      <tr>
          <td>{{ $rs->id }}</td>
          <td>{{ $rs->room_no }}</td>
          <td>{{ $rs->name }}</td>
          <td>{{ $rs->lastname }}</td>
          <td>{{ $rs->entry_date }}</td>
          <td>{{ $rs->description }}</td>
      </tr>
      @endforeach
      @else
      <tr>
          <td class="text-center" colspan="6">Müşteri Yok</td>
      </tr>
      @endif
  </tbody>
</table>
</div>
</div>

@endsection
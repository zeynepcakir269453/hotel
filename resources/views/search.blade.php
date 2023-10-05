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
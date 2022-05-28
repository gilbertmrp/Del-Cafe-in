@extends('user.layouts.main')
@section('container')
<div style="margin-bottom: 2%">
    <h1> Del Cafe In</h1>
    <p>Del Cafe'in menyediakan menu makanan yang bergizi dan sehat untuk semua mahasiswa/i. Menu yang disediakan selalu memenuhi standard gizi, sehingga mahasiswa bisa melaksanakan aktifitas perkuliahan dengan sehat dan prima. Setiap mahasiswa diwajibkan untuk makan di kantin tiga kali setiap harinya.</p>
    <h1 class="h2">Waktu Sesi Makan</h1>
    <h4>Berikut merupakan jadwal sesi makan yang berada di Cafe Del'in</h4>
    <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Sesi Makan</th>
                <th scope="col">Waktu</th>
              </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($menuType as $item)
              <tr>
                <th scope="row">{{ $no++; }}</th>
                <td>{{ $item->type }}</td>
                <td>{{ $item->menu_time }}</td>
                @endforeach
              </tr>
            </tbody>
    </table>
    <p>Untuk Sabtu sore dan hari Minggu, layanan kantin untuk mahasiswa ditiadakan, dimana untuk waktu tersebut, mahasiswa diperbolehkan keluar kampus (termasuk ijin bermalam) untuk makan.</p> <br>
    <p>Dalam pelaksanaan makan, mahasiswa dilatih juga untuk memiliki manner. Etika makan yang berlaku adalah sebagai berikut:</p>
    <div class="container">
      <p>a. Mahasiswa berpakaian rapi dan bersih.</p>
      <p>b. Mengikuti tata cara makan yang baik (table manner):</p>
      <p>c. Menggunakan sendok dan garpu.</p>
      <p>d. Mulut tertutup rapat pada saat mengunyah makanan.</p>
      <p>e. Tidak menimbulkan bunyi dari peralatan makan.</p>
      <p>f. Berbicara sewajarnya ( tidak terlalu keras sehingga tidak mengganggu orang lain).</p>
      <p>g. Mengambil makanan secukupnya dan menghabiskannya tanpa sisa.</p>
    </div>
</div>
@endsection
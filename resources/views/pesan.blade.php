@extends('layout.pesan')


@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="/">Beranda</a></li>
      <li>Pesan Kamar</li>
    </ol>
    <h2>Pesan Kamar</h2>

  </div>
</section><!-- End Breadcrumbs -->

<section class="inner-page">
  <div class="container">
      <form action="forms/pesan.php" method="post" role="form" class="php-email-form">
        <div class="form-group col-md-4">
          <label for="nama_p">Nama</label>
          <input type="text" class="form-control" id="nama_p" placeholder="Tulis nama panjang anda">
        </div>
        <br>
        <div class="form-group col-md-4">
          <label for="notelp_p">No Telefon</label>
          <input type="text" class="form-control" id="notelp_p" placeholder="Tulis nomor telefon anda">
        </div>
        <br>
        <div class="form-group col-md-4">
          <label for="jeniskelamin_p">Jenis Kelamin</label>
          <select class="form-control md-3" id="jeniskelamin_p">
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
        <br>
        <div class="form-group col-md-6">
          <label for="request_p">Request</label>
          <textarea class="form-control" id="request_p" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
          <button type="button" class="btn btn-primary">Pesan</button>
        </div>
      </form>
    </div>
</section>

@endsection
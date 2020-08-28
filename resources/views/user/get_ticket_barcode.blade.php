@guest
<script>window.location='https://biggest.telesandifestival.com/';</script>
@endguest


@extends('layouts.fixed')

@section('title', 'Barcode Ticket')


@section('content')



<style>

.card_portofolio{

      height: 345px;

      background-color: white; 

      border-radius: 5px; 

      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);

      padding: 47px 0px 0px 0px;

      margin-bottom: 20px;

      transition: 1s;

      position: relative;

      overflow: hidden;

    }


.card_portofolio2{


      background-color: white; 

      border-radius: 5px; 

      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);



      transition: 1s;

      position: relative;

      overflow: hidden;

    }

</style>

<section id="peserta">

<br><br>

<div class="container">

  <div class="row justify-content-center">

    <div class="col-md-12">
    <div class="spacer"></div>
    </div>

  </div>

<div class="row">
    <div class="col-md-12">
        <div class="card_portofolio2 p-5">
        <h2 class="syncopate text-center text-danger">PERHATIAN</h2>
        <h4>Lembaran ini merupakan <b>E-Ticket</b>.</h4>
        <p>Simpan lembaran ini dan <b>wajib dibawa</b> pada hari penukaran tiket, pada tanggal <b>15 s.d. 19 Januari 2020</b> dan <b>wajib ditukarkan dengan tiket asli tanda masuk</b> untuk memasuki tempat acara <b>BIGGEST 3</b>.</p>
        Syarat dan ketentuan:
        <ol type="1">
            <li>Ticket ini hanya dapat 1 kali scan barcode</li>
            <li>Hanya berlaku untuk 1 kali penukaran</li>
            <li>Ticket yang sudah dibeli tidak dapat dikembalikan</li>
            <li>Ikuti tata tertib yang sudah di buat penyelenggara</li>
        </ol>
        </div>
    </div>
</div>
  <div class="row">
    <div class="col-lg-4 text-center">
        <div class="mb-4"></div>
        <div class="card_portofolio">
            @php $en1 = base64_encode($data->id_orderticket) @endphp
            @if($data->used_orderticket == 1)
          <img style="height: 300px; margin-top: -25px;" src="{{ asset('img/qrused.png') }}" alt="barcode" />
            
          <center>
                <p style="background-color: white; padding: 5px; margin-top: -58px; position: relative; width: 240px; font-weight: bold;">{{ date('d F Y H:i:s', strtotime($data2->updated_at)) }}</p>
            </center>
            @else
          <img style="height: 300px; margin-top: -25px;" src="data:image/png;base64,{{DNS2D::getBarcodePNG('https://biggest.telesandifestival.com/checker/'.base64_encode($en1), 'QRCODE')}}" alt="barcode" />
            @endif
          </div>
    </div>

    <div class="col-lg-8"><br>
      <div class="table-responsive">
        <table class="table bg-white">
          <tbody>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Jenis Tiket</th>
              <!--<button class="btn btn-lg btn-primary" type="button" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm">Go to Form now!</button>-->
              <td style="font-size: 1.33rem">{{ $data->jenis_ticket }}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Harga Tiket</th>
              <td style="font-size: 1.33rem;">Rp. {{number_format($data->harga_ticket)}}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Jumlah</th>
              <td style="font-size: 1.33rem;">{{$data->jumlah_orderticket}}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Subtotal</th>
              <td style="font-size: 1.33rem;">Rp. {{number_format($data->harga_ticket * $data->jumlah_orderticket)}}</td>
            </tr>
            <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Nama Pembeli</th>
              <td style="font-size: 1.33rem;">{{$data->nama_users}}</td>
            </tr>
            
             <tr>
              <th style="font-size: 1.23rem; width: 30%; " scope="col">Email</th>
              <td style="font-size: 1.33rem">{{ $data->email}}</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>

    

  </div>

    
</div>
{{-- <br>
<br> --}}



@endsection
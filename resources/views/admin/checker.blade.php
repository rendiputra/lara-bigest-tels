@guest
<script>window.location='https://biggest.telesandifestival.com/';</script>
@endguest



@extends('layouts.fixed')

@section('content')



<style>



.card_portofolio{

      height: 300px; 

      background-color: white; 

      border-radius: 5px; 

      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);

      padding: 47px 0px 0px 0px;

      margin-bottom: 20px;

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
    <div class="col-lg-4 text-center">
        <div class="mb-4"></div>
            @php $en1 = Crypt::encryptString($data->id_orderticket)@endphp
        <div class="card_portofolio" style="padding: 10px; background-image: url('data:image/png;base64,{{DNS2D::getBarcodePNG('https://biggest.telesandifestival.com/checker/'.Crypt::encryptString($en1), 'QRCODE')}}')">
            
            <h1>
            <i class="fas fa-check fa-6x" style="color: white;"></i>
            </h1>
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
              <td style="font-size: 1.33rem;">{{$data->email}}</td>
            </tr>
            
          </tbody>
        </table>
      </div>

    </div>

    

  </div>

    
</div>
<br>
<br>


@endsection
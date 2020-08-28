@extends('layouts.fixed')

@section('title','Ticket')

@section('css')
<style>

.bg-img{

    background-image: url('img/back.jpg');

    background-size: cover;

    width: 100%;

    height: 800px;


}
@media screen and (max-width: 768px) {
    .hm{
        width: 100%;
        padding-top: 250px;
    }
    .bg-img{

    background-image: url('img/back.jpg') no-repeat;
        background-size: contain;
        height: 100%;
        width: 100%;
    }
    .eh{
        padding-top:30px;
    }
    .ek{
        padding-top:-50px;
    }
}


@media screen and (max-width: 600px) {
    .hm{
        width: 100%;
        padding-top: 250px;
    }
    .bg-img{

    background-image: url('img/back.jpg') no-repeat;
        background-size: contain;
        height: 100%;
        width: 100%;
    }
    .eh{
        padding-top:50px;
    }
    .ek{
        padding-top:-50px;
    }
}


.anim{
    width: 100%;
    padding: 0;
    margin-top: -50px;
    max-height:100%; 
    opacity: 80%;
}

.dark{

    width: 100%;

    height: 100%;

    background-color: rgba(0,0,0,0.4);

    padding-bottom: 50px;

}

button:focus {outline:0;}


input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none;
}

</style>
@endsection

@section('content')


<section class="tickets mb-5" id="ticketsid">
    <div class="spacer"></div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-sm-12 col-xs-12 mt-5 text-center">
                <img src="{{ asset('img/TICKETS.png') }}" class="animated zoomIn img-fluid" height="80px">
            </div>
        </div>
    </div>
</section>

<section class="det-tickets" id="det-ticketsid">
    <div class="container">
        <div class="row">
            @foreach($data as $data)
            <div class="col col-12 col-lg-4 text-center">
                <button style="background: none; border: none; @if($data->status_ticket == 2 OR $data->stok < 1 OR date('Y-m-d') > $data->akhir_ticket) cursor: not-allowed; @endif" type="button" class="yha" data-toggle="modal" data-target="@if($data->status_ticket == 2) @elseif($data->id_ticket == $data->id_ticket && $data->status_ticket == 1 && $data->stok > 0 && date('Y-m-d') <= $data->akhir_ticket){{'#tiketmodal'.$data->id_ticket}}@endif">
                    
                  @if($data->status_ticket == 0 OR date('Y-m-d') > $data->akhir_ticket OR $data->stok < 1)
                    
                    <img class="img-fluid p-4 animated tada" src="{{ asset('img/S'.substr($data->img_ticket, 1, -1)) }}g">
                    @elseif($data->status_ticket == 2)
                    
                    <img class="img-fluid p-4 animated tada" src="{{ asset('img/C'.substr($data->img_ticket, 1, -1)) }}g">
                        @elseif($data->status_ticket == 1 OR date('Y-m-d') <= $data->akhir_ticket OR $data->stok > 0)
                    <img class="img-fluid p-4 animated tada" src="{{ asset('img/'.$data->img_ticket) }}">
                  @endif
                </button>

                {{-- <button type="button" style="border: none; background: none; outline: none; transition: none !important;" data-toggle="modal" data-target="exampleModalLabel">
                    <img src="{{ asset('img/'.$data->img_ticket) }}" class=" animated zoomInDown">
                </button> --}}
            </div>
            @endforeach
        </div>
    </div>
    <div class="spacer"></div>
</section>



{{-- <section id="ticket">
    <div class="float-none">
    	<div class="bg-img animated fadeIn">
            <div class="dark">
                <center>
                    <div class="hm">
                <!-- <div class=" card-header alert-success"> -->
                        <img class=" anim animated zoomInDown" src="{{'img/awan2.png'}}">
                        <img src="{{'img/TICKETS.png'}}" class="animated zoomIn" width="auto" height="250px"  style="animation-delay:.1s; margin-top: -360; position: relative;">
                            <h1 style="font-family: 'Syncopate', cursive; font-size: 5rem; font-weight: 700; margin-top: -120; text-shadow: 0 8px #ffde00;  position: relative;" class="text-white animated zoomInUp">ORDER</h1>
                    <div class="container ">
                        <div class="row ek">
                            @foreach($data as $data)
                            <div class="col-md-4 mt-2 eh">
                                <button type="button" style="border: none; background: none; outline: none; border: none;" class="ya" data-toggle="modal" data-target="@if($data->id_ticket == $data->id_ticket)presale_{{$data->id_ticket}}@endif">
                                    <img src="{{ asset('img/'.$data->img_ticket) }}" class=" animated zoomInDown">
                                </button>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    </div>
              </center>
            </div>
        </div>
    </div>
<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer"></div>

</section> --}}



@foreach($data2 as $data2)
<div class="modal fade" id="@if($data2->id_ticket == $data2->id_ticket && $data2->status_ticket == 1 && $data2->stok > 0){{'tiketmodal'.$data2->id_ticket}}@endif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span class="modal-title text-uppercase" style="font-size: 22px; font-weight: bold;" id="exampleModalLabel">{{ $data2->jenis_ticket }}</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-uppercase">
          <center>
          <table style="width: 100%;">
              <tr>
                  <td align="left">Ticket Price</td>
                  <td align="right">Rp. <span id="price">{{ substr($data2->harga_ticket, 0, -3).'.000' }}</span></td>
              </tr>
              <tr>
                  <td align="left">Quantity</td>
        @if($data2->status_ticket == 1 && $data2->stok > 0 && date('Y-m-d') <= $data2->akhir_ticket)
        <form action="{{ route('ordertik') }}" class="form-prevent" method="post">
            @csrf
            <input type="hidden" name="G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH" value="{{ $data2->id_ticket }}">
                <td align="right" col="3">
                    <button type="button" onclick="minus_number()" class="btn btn-danger btn-sm" id="min" disabled><i class="fas fa-minus"></i></button>
                    <input type="number" id="quantity" name="qty" style="border: none; width: 20px; text-align: center; padding: 0;" size="1" value="1" min="1" max="3" onkeyup="change()" onchange="change()" readonly>
                    <button type="button" onclick="add_number()" class="btn btn-success btn-sm" id="plus"><i class="fas fa-plus"></i></button></td>
                </td>
                  @else
                <td align="right" col="3">
                    <button type="button" class="btn btn-danger btn-sm" disabled>-</button>
                    <input type="number" name="qty" style="margin-left: 2px;border: none; width: 20px; text-align: center; padding: 0;" size="1" value="0" min="1" max="3" readonly>
                    <button type="button" class="btn btn-success btn-sm" disabled>+</button></td>
                </td>
        @endif
              </tr>
              <tr>
                  <td align="left">Harga</td>
        @if($data2->status_ticket == 1 && $data2->stok > 0 && date('Y-m-d') <= $data2->akhir_ticket)
                  <td align="right">Rp. <span id="total">{{ substr($data2->harga_ticket, 0, -3) }}</span><span id="zero">.000</span></td>
                  @else
                  <td align="right">Rp. <span>0</span></td>
        @endif
              </tr>
              <tr>
                  <td><div style="margin-bottom: 5px;"></div></td>
              </tr>
              <tr>
                  <td align="left">Status</td>
                  @if($data2->status_ticket == 0 OR date('Y-m-d') > $data2->akhir_ticket OR $data2->stok < 1)
                  <td align="right">Sold Out</td>
                    @else
                  <td align="right">Available</td>
                  @endif
              </tr>
          </table>
          </center>
      </div>
      <div class="modal-footer">
                  @if($data2->status_ticket == 0 OR date('Y-m-d') > $data2->akhir_ticket OR $data2->stok < 1)
        <button type="button" class="btn btn-secondary syncopate text-uppercase" data-dismiss="modal">Close</button>
                    @else
            <button type="submit" class="btn btn-primary syncopate text-uppercase button-prevent" id="submit" >Get</button>
                  @endif
                  
        @if($data2->status_ticket == 1 && $data2->stok > 0 && date('Y-m-d') <= $data2->akhir_ticket)
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection

@section('js')

<script>
    function change(){
        var harga = parseInt(document.getElementById("price").innerHTML);
        var jumlah = document.getElementById("quantity").value;
        var hasil = harga * jumlah;
        var zero = document.getElementById("zero");
            zero.style.display = "inline";
            document.getElementById("submit").disabled = false;
        document.getElementById("total").innerHTML = hasil;
        if(jumlah < 1){
            zero.style.display = "none";
            document.getElementById("total").innerHTML = '0';
            document.getElementById("submit").disabled = true;
        }
        if(jumlah > 3){
            document.getElementById("quantity").value = 1;
        }
    }
    function add_number(){
        
        document.getElementById("quantity").value ++;
        var harga = parseInt(document.getElementById("price").innerHTML);
        var jumlah = document.getElementById("quantity").value;
        if(jumlah > 2){
            document.getElementById("plus").disabled = true;
        }else{
            document.getElementById("plus").disabled = false;
        }
        if(jumlah < 1){
            document.getElementById("min").disabled = true;
        }else{
            document.getElementById("min").disabled = false;
        }
        var hasil = harga * jumlah;
        var zero = document.getElementById("zero");
            zero.style.display = "inline";
            document.getElementById("submit").disabled = false;
        document.getElementById("total").innerHTML = hasil;
        if(jumlah < 1){
            zero.style.display = "none";
            document.getElementById("total").innerHTML = '0';
            document.getElementById("submit").disabled = true;
        }
        
    }
    function minus_number(){
        
        document.getElementById("quantity").value --;
        var harga = parseInt(document.getElementById("price").innerHTML);
        var jumlah = document.getElementById("quantity").value;
        if(jumlah > 2){
            document.getElementById("plus").disabled = true;
        }else{
            document.getElementById("plus").disabled = false;
        }
        if(jumlah <= 1){
            document.getElementById("min").disabled = true;
        }else{
            document.getElementById("min").disabled = false;
        }
        var hasil = harga * jumlah;
        var zero = document.getElementById("zero");
            zero.style.display = "inline";
            document.getElementById("submit").disabled = false;
        document.getElementById("total").innerHTML = hasil;
        if(jumlah < 1){
            zero.style.display = "none";
            document.getElementById("total").innerHTML = '0';
            document.getElementById("submit").disabled = true;
        }
        
    }
    
    
</script>
@endsection
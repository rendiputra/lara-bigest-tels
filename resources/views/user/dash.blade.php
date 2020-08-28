@if(Auth::user()->isAdmin == TRUE)
<script>window.location='/admin/dash'</script>
@endif
@extends('layouts.fixed')
@section('title','Dashboard')
@section('css')
<style>
    paginate_button:hover{
        background-color: none;
    }
</style>
@endsection
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="list" class="col col-md-12 col-sm-12 col-12">
				@if(Session::get('eror'))
				<div class="alert alert-danger">
				{{ Session::get('eror')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				@endif
				<div class="card" style="padding: 20px">
					<h4>Pemesanan Ticket</h4>
					<!--<small>Bila kamu <b>telah melakukan pembayaran</b>, dan status tiket kamu yaitu <b>"Belum Dibayar"</b> atau <b>"Expired"</b> jangan khawatir, pembayaran kamu sedang di cek oleh admin 🥰</small><hr>-->

					<div class="container">
						<div class="table-responsive">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th class="align-middle">No</th>
										<th class="align-middle">Jenis Tiket</th>
										<th class="align-middle">Harga</th>
										<th class="align-middle">Jumlah</th>
										<th class="align-middle">Total</th>
										<th class="align-middle">Status</th>
									</tr>
								</thead>
								<tbody>
@php $no = 1; $ta = 1; @endphp
@foreach($data as $data)
									<tr>
										<td class="align-middle">{{$ta++}}</td>							
										<td>{{ $data->jenis_ticket }}</td>
										<td><span id="price{{$no}}" data-price="{{ $data->harga_ticket }}">{{ $data->harga_ticket }}</span></td>
										<td><span id="price{{$no}}" data-price="{{ $data->harga_ticket }}">{{ $data->jumlah_orderticket }}</span></td>
										@php $total = $data->harga_ticket * $data->jumlah_orderticket @endphp
										<td><span id="total{{$no++}}">Rp. {{ number_format($total + $data->kode_orderticket,2) }}</span></td>
										<td><span id="total{{$no++}}">

@php
$status = "";
foreach($data5 as $dataw){
    if($dataw->id_orderticket == $data->id_orderticket){
        $status = "nunggu";
    }
}
@endphp

										    @if($data->status_orderticket == 1)
										         <a href="../get_ticket/barcode/{{ base64_encode($data->id_orderticket) }}" class="btn btn-success"> Cetak QRCODE</a>
										          @elseif($data->status_orderticket == 2)
										          <a href="#" class="btn btn-danger"> Pembelian Ditolak</a>
										          @elseif($status == "nunggu")
										          <a href="#" class="btn btn-primary"> Menunggu Dikonfirmasi </a>
										          @elseif($data->status_orderticket == 0 AND $data->die_orderticket > date('Y-m-d H:i:s'))
										          <a href="../get_ticket/{{ $data->id_orderticket }}" class="btn btn-warning"> Belum Dibayar</a>
										          @elseif($data->status_orderticket == 0 AND $data->die_orderticket < date('Y-m-d H:i:s') OR $data->status_orderticket == 3)
										          <a href="#" class="btn btn-danger disabled"> Expired</a>
										          
										    @endif
										    
										    
										</span></td>
									</tr>
@endforeach
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>

		{{-- TAMBAH MERCH --}}


		</div>

		<div style="margin-bottom: 20px;"></div>
	</div>
	
	
	
	
	
	
	<div class="container">
		<div class="row justify-content-center">
			<div id="list" class="col col-md-12 col-sm-12 col-12">
				<div class="card" style="padding: 20px">
					<h4>Pemesanan Merchandise</h4><hr>

					<div class="container">
						<div class="table-responsive">
							<table id="table2" class="table table-bordered">
								<thead>
									<tr>
										<th class="align-middle">No</th>
										<th class="align-middle">Nama Produk</th>
										<th class="align-middle">Harga</th>
										<th class="align-middle">Jumlah</th>
										<th class="align-middle">Total</th>
										<th class="align-middle">Status</th>
									</tr>
								</thead>
								<tbody>
@php $no = 1; $ta = 1; @endphp
@foreach($data2 as $data2)
									<tr>
										<td class="align-middle">{{$ta++}}</td>							
										<td>{{ $data2->nama_merch }}@if($data2->kategori_merch == "BAJU") {{ ' - '.$data2->ukuran_ordermerch }} @endif</td>
										@php 
										$hiya = $data2->harga_merch;
        								if($data2->kategori_merch == "BAJU" && $data2->ukuran_ordermerch == 'S' OR 'M' OR 'L'){
        								$hiya = $data2->harga_merch;
        								}
        								if($data2->kategori_merch == "BAJU" && $data2->ukuran_ordermerch == 'XL'){
        								$hiya = $data2->harga_merch + 5000;
        								}
        								if($data2->kategori_merch == "BAJU" && $data2->ukuran_ordermerch == 'XXL'){
        								$hiya = $data2->harga_merch + 10000;
        								}
										$total = $hiya * $data2->jumlah_ordermerch;
										@endphp
										<td><span id="price{{$no}}" data-price="{{ $data2->harga_merch }}">Rp. {{ number_format($total,2) }}</span></td>
										<td><span id="price{{$no}}" data-price="{{ $data2->harga_merch }}">{{ $data2->jumlah_ordermerch }}</span></td>
										
										<td><span id="total{{$no++}}">Rp. {{ number_format($total + $data2->kode_ordermerch,2) }}</span></td>
										<td><span id="total{{$no++}}">
										    
										    @if($data2->status_ordermerch == 1)
										         <a href="../checkout/barcode/{{ base64_encode($data2->id_ordermerch) }}" class="btn btn-success">QRCODE</a>
										         {{-- <a href="{{ route('get_merch_pdf', base64_encode($data2->id_ordermerch)) }}" class="btn btn-primary">Cetak PDF</a> --}}
										          @elseif($data2->status_ordermerch == 2)
										          <a href="#" class="btn btn-danger"> Pembayaran Ditolak</a>
										          @elseif($data2->status_ordermerch == 0 AND $data2->die_ordermerch > date('Y-m-d H:i:s'))
										          <a href="../checkout/{{ $data2->id_ordermerch }}" class="btn btn-warning"> Belum Dibayar</a>
										          @elseif($data2->status_ordermerch == 0 AND $data2->die_ordermerch < date('Y-m-d H:i:s') OR $data2->status_ordermerch == 3)
										          <a href="#" class="btn btn-danger disabled"> Expired</a>
										    @endif
										    
										    
										</span></td>
									</tr>
@endforeach
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>

		{{-- TAMBAH MERCH --}}


		</div>

		<div class="spacer"></div>
	</div>
@endsection
@section('js')
<script>

		$(document).ready(function() {
			$('#table').DataTable();
		});
	
    function change(angka){
        var harga = parseInt(document.getElementById("price"+angka).innerHTML);
        var jumlah = document.getElementById("quantity"+angka).value;
        var hasil = harga * jumlah;
        
        document.getElementById("total"+angka).innerHTML = hasil;
    }
		$(document).ready(function() {
			$('#table2').DataTable();
		});
</script>
@endsection
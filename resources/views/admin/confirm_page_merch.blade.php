@extends('layouts.fixed')
@section('title', 'Konfirmasi Pembayaran Merchandise')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div class="col col-md-12 col-sm-12 col-12">
				@if(Session::get('sukses'))
				<div class="alert alert-success">
				{{ Session::get('sukses')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				@endif
				@if(Session::get('eror'))
				<div class="alert alert-danger">
				{{ Session::get('eror')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				@endif
				@if ($errors->any())
				<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
				</div>
				@endif	
				<div class="card" style="padding: 20px;">
					<h5>Konfirmasi Pembayaran Merchandise</h5><br>
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 mb-2">
								<a href="{{ route('belum_bayar2') }}" class="btn btn-danger" style="border-radius:5px;width: 100%" id="btn" disabled>List Belum Bayar</a>
							</div>
							<div class="col-md-2 mb-2">
								<a href="{{ route('expired2') }}" class="btn btn-secondary" style="border-radius:5px;width: 100%" id="btn" disabled>List Expired</a>
							</div>
							<div class="col-md-2 mb-2">
								<a href="{{ route('confirm_merch_list') }}" class="btn btn-success" style="border-radius:5px;width: 100%" id="btn" disabled>List Valid (Transfer)</a>
							</div>
							<div class="col-md-2 mb-2">
								<a href="{{ route('confirm_merch_list2') }}" class="btn btn-primary" style="border-radius:5px;width: 100%" id="btn" disabled>List Valid (COD)</a>
							</div>
							<div class="col-md-2 mb-2">
								<a href="{{ route('tdkvalid_merch_list') }}" class="btn btn-warning" style="border-radius:5px;width: 100%" id="btn" disabled>List Tidak Valid</a>
							</div>
						</div>
					</div>
					<div class="table-responsive">
    					<table id="table" class="table table-bordered">
    						<thead>
    							<tr>
    								<th>Nama Pembeli</th>
    								<th>Nama Pengirim</th>
    								<th>Nama Merchandise</th>					
    								<th>Tanggal Order</th>
    								<th>Jumlah Order</th>								
    								<th>Nominal</th>
    								<th>Bukti</th>
    								<th>Aksi</th>
    							</tr>
    						</thead>
    						<tbody>
    @foreach($prioritas as $p)
                    @if($p->bukti_confirm == 'COD')
                    <tr style="background-color: rgba(255, 0, 0, 0.2);">
                        @else
                        <tr>
                    @endif
    								<td>{{$p->nama_users}}<small class="text-danger"> ({{ $p->email }})</small></td>
    								<td>{{$p->pengirim_confirm}}</td>
    								<td>{{$p->nama_merch}}@if($p->kategori_merch == "BAJU") {{ ' - '.$p->ukuran_ordermerch }} @endif</td>
    								<td>{{ date('d F Y', strtotime($p->tgl_ordermerch)) }}</td>
    								<td>{{$p->jumlah_ordermerch}}</td>
    								@php 
    								$hiya = $p->harga_merch;
    								if($p->kategori_merch == "BAJU" && $p->ukuran_ordermerch == 'S' OR 'M' OR 'L'){
    								$hiya = $p->harga_merch;
    								}
    								if($p->kategori_merch == "BAJU" && $p->ukuran_ordermerch == 'XL'){
    								$hiya = $p->harga_merch + 5000;
    								}
    								if($p->kategori_merch == "BAJU" && $p->ukuran_ordermerch == 'XXL'){
    								$hiya = $p->harga_merch + 10000;
    								}
    								 @endphp
    								<td>Rp.{{ number_format($hiya * $p->jumlah_ordermerch + $p->kode_ordermerch,2)}}</td>
    								@if($p->bukti_confirm == 'COD')
    								    <td>COD</td>
    								    @else
    								    
    								<td><a href="{{ url('images/proof/'.$p->bukti_confirm)}}" target="_blank">Lihat</a></td>
    								@endif
    								<td>
    									<a href="/admin/confirm_merch/valid/{{$p->id_confirm_merch}}/{{$p->id_ordermerch}}" class="btn btn-primary">Valid</a>
    								
    									<a href="/admin/confirm_merch/tdkvalid/{{$p->id_confirm_merch}}/{{$p->id_ordermerch}}" class="btn btn-danger">Tidak Valid</a>
    								</td>
    							</tr>
    @endforeach
    						</tbody>
    					</table>
    				</div>
				</div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
@endsection
@section('js')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#table').DataTable();
		});
	</script>
@endsection
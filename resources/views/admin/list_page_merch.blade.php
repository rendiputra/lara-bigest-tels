@extends('layouts.fixed')
@section('title', 'List Pemesan Merch Yang Sudah Valid (Transfer)')
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
					<h5>List Pemesan Merch Yang Sudah Valid (Transfer)</h5><br>
					<div class="form-group">
						<div class="row">
							<div class="col col-md-3">
								<a href="{{ route('confirm_merch') }}" class="btn btn-primary" style="border-radius:5px;width: 100%" id="btn" disabled>Kembali</a>
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
    @php 
        $total_jumlah = [];
    @endphp
    @foreach($prioritas as $p)
    @php $cod = substr($p->pengirim_confirm, -3); @endphp
                    @if($cod != 'COD')
                                <tr>
    								<td>{{$p->nama_users}}<small class="text-danger"> ({{ $p->email }})</small></td>
    								<td>{{ $p->pengirim_confirm }}</td>
    								<td>{{$p->nama_merch}}@if($p->kategori_merch == "BAJU") {{ ' - '.$p->ukuran_ordermerch }} @endif</td>
    								<td>{{ date('d F Y', strtotime($p->tgl_ordermerch)) }}</td>
    								<td>{{$p->jumlah_ordermerch}}</td>
    								<td>Rp.{{ number_format($p->harga_merch * $p->jumlah_ordermerch + $p->kode_ordermerch,2)}}</td>
    								<td><a href="{{ url('images/proof/'.$p->bukti_confirm)}}" target="_BLANK">Lihat</a></td>
    								<td>
    									<a href="/admin/confirm_merch/list/{{$p->id_confirm_merch}}/{{$p->id_ordermerch}}/tdkvalid" class="btn btn-danger">Tidak Valid</a>
    								</td>
    							</tr>
                        @php
                            array_push($total_jumlah, $p->harga_merch * $p->jumlah_ordermerch);
                        @endphp
                    @endif
    @endforeach
    						</tbody>
    					</table>
    				</div>
        				<span>Total : <b>Rp.{{ number_format(array_sum($total_jumlah),2) }},-</b></span>
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
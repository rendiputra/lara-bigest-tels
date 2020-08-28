@extends('layouts.fixed')
@section('title', 'List Pemesan Ticket Yang Belum Bayar')
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
					<h5>List Pemesan Ticket Yang Belum Bayar</h5><br>
					<div class="form-group">
						<div class="row">
							<div class="col col-md-3">
								<a href="{{ route('confirm_ticket') }}" class="btn btn-primary" style="border-radius:5px;width: 100%" id="btn" disabled>Kembali</a>
							</div>
						</div>
					</div>
					<div class="table-responsive">
    					<table id="table" class="table table-bordered">
    						<thead>
    						    <tr>
    								<th>Nama Pembeli</th>
    								<th>Jenis Ticket</th>
    								<th>Tanggal Order</th>
    								<th>Jumlah Order</th>
    								<th>Nominal</th>
    								<th>Aksi</th>
    							</tr>
    						</thead>
    						<tbody>
    @foreach($prioritas as $p)
                                <tr>
    								<td>{{$p->nama_users}}<small class="text-danger"> ({{ $p->email }})</small></td>
    								<td>{{$p->jenis_ticket}}</td>
    								<td>{{ date('d F Y', strtotime($p->tgl_orderticket)) }}</td>
    								<td>{{$p->jumlah_orderticket}}</td>
    								<td>Rp.{{ number_format($p->harga_ticket * $p->jumlah_orderticket  + $p->kode_orderticket,2)}}</td>
    								<td>
    								    <a href="/admin/confirm_ticket/list/{{ $p->id_orderticket }}/tdkvalid" class="btn btn-danger">Tidak Valid</a>
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
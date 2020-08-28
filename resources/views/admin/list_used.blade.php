@extends('layouts.fixed')
@section('title', 'List Pemesan Ticket Yang Sudah di Barcode')
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
					<h5>List Pemesan Ticket Yang Sudah di Barcode</h5><br>
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
    						        <th>No</th>
    								<th>Tanggal Penukaran</th>
    								<th>Nama Pembeli</th>
    								<th>Jenis Ticket</th>
    								<th>Tanggal Order</th>
    								<th>Jumlah Order</th>
    								<th>Nominal</th>
    							</tr>
    						</thead>
    						<tbody>
    @php 
        $total_jumlah = [];
        $total_jumlah2 = [];
        $total_jumlah3 = [];
        $no = 1;
    @endphp
    @foreach($prioritas as $p)
                        <tr>
                            <td>{{ $no }}</td>
							<td>{{date('d F Y H:i:s', strtotime($p->updated_at))}}</td>
							<td>{{$p->nama_users}}<small class="text-danger"> ({{ $p->email }})</small></td>
							<td>{{$p->jenis_ticket}}</td>
    						<td>{{ date('d F Y', strtotime($p->tgl_orderticket)) }}</td>
							<td>{{$p->jumlah_orderticket}}</td>
							<td>Rp.{{ number_format($p->harga_ticket * $p->jumlah_orderticket  + $p->kode_orderticket,2)}}</td>
						</tr>
                        @php
                            $no++;
                            array_push($total_jumlah, $p->harga_ticket * $p->jumlah_orderticket);
                            array_push($total_jumlah2, $p->jumlah_orderticket);
                        @endphp
    @endforeach
    @foreach($orderticket as $orderticket)
    @php
    array_push($total_jumlah3, $orderticket->jumlah_orderticket);
    @endphp
    @endforeach
    						</tbody>
    					</table>
    				</div>
        				<span>Total : <b>Rp.{{ number_format(array_sum($total_jumlah),2) }},-</b></span>
        				<span>Total Tiket : <b>{{ array_sum($total_jumlah2)."/".array_sum($total_jumlah3) }}</b></span>
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
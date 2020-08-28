@extends('layouts.fixed')
@section('title', 'List Pemesan Ticket Yang Tidak Valid')
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
					<h5>List Pemesan Ticket Yang Tidak Valid</h5><br>
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
    								<th>Nama Pengirim</th>
    								<th>Jenis Ticket</th>
    								<th>Tanggal Order</th>
    								<th>Jumlah Order</th>
    								<th>Nominal</th>
    								<th>Bukti</th>
    								<th>Aksi</th>
    							</tr>
    						</thead>
    						<tbody>
    @foreach($prioritas as $p)
    @php $cod = substr($p->pengirim_confirm, -3); @endphp
                    @if($cod == 'COD')
                    <tr style="background-color: rgba(255, 0, 0, 0.2);">
                        @else
                        <tr>
                    @endif
    								<td>{{$p->nama_users}}<small class="text-danger"> ({{ $p->email }})</small></td>
    								<td>{{$p->pengirim_confirm}}</td>
    								<td>{{$p->jenis_ticket}}</td>
    								<td>{{ date('d F Y', strtotime($p->tgl_orderticket)) }}</td>
    								<td>{{$p->jumlah_orderticket}}</td>
    								<td>Rp.{{ number_format($p->harga_ticket * $p->jumlah_orderticket  + $p->kode_orderticket,2)}}</td>
    								<td>@if($p->bukti_confirm == 'COD')COD @else<a href="{{ url('images/proof/'.$p->bukti_confirm)}}" target="_blank">Lihat</a>@endif</td>
    								<td>
    								    <a href="/admin/confirm_ticket/list_tdkvalid/{{$p->id_confirm}}/{{$p->id_orderticket}}" class="btn btn-primary">Valid</a>
    								</td>
    							</tr>
    @endforeach
    						</tbody>
    					</table>
    				</div>
					<div class="spacer"></div>
					<div class="table-responsive">
    					<table id="table2" class="table table-bordered">
    						<thead>
    							<tr>
    								<th>Nama Pembeli</th>
    								<th>Jenis Ticket</th>
    								<th>Tanggal Order</th>
    								<th>Jumlah Order</th>
    								<th>Nominal</th>
    							</tr>
    						</thead>
    						<tbody>
    @foreach($data as $data)
                                <tr>
    								<td>{{$data->nama_users}}</td>
    								<td>{{$data->jenis_ticket}}</td>
    								<td>{{ date('d F Y', strtotime($data->tgl_orderticket)) }}</td>
    								<td>{{$data->jumlah_orderticket}}</td>
    								<td>Rp.{{ number_format($data->harga_ticket * $data->jumlah_orderticket  + $data->kode_orderticket,2)}}</td>
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
		$(document).ready(function() {
			$('#table2').DataTable();
		});
	</script>
@endsection
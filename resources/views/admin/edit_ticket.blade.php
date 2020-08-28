@extends('layouts.fixed')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="add_lomba" class="col col-md-8 col-sm-10 col-10">
				<div class="card" style="padding: 20px">
					<h4>Tambah Ticket</h4><hr>
					<div class="container">
						<form method="POST" action="/admin/ticket/edit/{{$ticket->id_ticket}}/action" enctype="multipart/form-data">
							<input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<label>Jenis Ticket</label>
								<input class="form-control" type="text" name="jenis_ticket" required="" value="{{$ticket->jenis_ticket}}">
							</div>
							
							<div class="form-group">
								<label>Harga</label>
								<input type="number" class="form-control" name="harga_ticket" id="harga_ticket" required="" value="{{$ticket->harga_ticket}}">
							</div>
							
							<div class="form-group">
								<label>Tanggal penjualan terakhir</label>
								<input class="form-control" type="date" name="akhir_ticket" required="" value="{{$ticket->akhir_ticket}}">
							</div>
							
							<button class="btn btn-primary">Tambah</button>
							<a href="{{url('admin/ticket')}}" class="btn btn-secondary">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="spacer"></div>
	</div>
@endsection

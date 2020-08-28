@extends('layouts.fixed')

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

					<h5>List Lineup Guestar</h5><br>

					<div class="form-group">

						<div class="row">

							<div class="col col-md-3">

								<a href="{{ route('lineup_tambah') }}" class="btn btn-primary" style="border-radius:5px;width: 100%" id="btn" disabled>Tambah GS</a>

							</div>

						</div>

					</div>

					<div class="table-responsive">

    					<table id="table" class="table table-bordered">

    						<thead>

    							<tr>

    								<th>Nama Guestar</th>

    								<th>Foto</th>	

    								<th>Opsi</th>

    							</tr>

    						</thead>

    						<tbody>

    @foreach($data as $p)

                        <tr>

    								<td>{{$p->nama}}</td>

    								<td><a href="{{ asset('images/gs/'.$p->foto)}}" target="blank">Lihat Disini</a></td>

    								<td>

    								    <a href="{{ route('lineup_edit', $p->id_line) }}" class="btn btn-primary">Edit</a> <a href="{{ route('lineup_hapus', $p->id_line) }}" class="btn btn-danger">hapus</a>

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
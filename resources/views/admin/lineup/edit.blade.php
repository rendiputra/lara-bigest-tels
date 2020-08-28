@extends('layouts.fixed')

@section('content')

	<div class="container">

		<div class="spacer"></div>

		<div class="row justify-content-center">



		{{-- TAMBAH GS --}}


			<div id="add_lomba" class="col col-md-8 col-sm-10 col-10">

				<div class="card" style="padding: 20px">
					@foreach($data as $p)

					<h4>Edit Guestar {{ $p->nama }}</h4><hr>

					<div class="container">

						<form method="POST" action="{{ route('lineup_edit_act') }}" enctype="multipart/form-data">

							<input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="id" value="{{ $p->id_line }}">

							<div class="form-group">

								<label>Nama Guestar</label>

								<input class="form-control" type="text" name="nama" required="" value="{{ $p->nama }}">

							</div>

							

							<div class="form-group">

								<label>Foto</label>

								<input type="file" class="form-control" name="foto" id="harga_merch">

							</div>
							<div class="form-group">
								<label for="desc">Description</label>
								<textarea name="desc" class="form-control" rows="6">{{ $p->deskripsi }}</textarea>
							</div>
							<button class="btn btn-primary">Edit</button>

							<a href="{{ route('lineup') }}" class="btn btn-secondary">Kembali</a>

						</form>

					</div>
					@endforeach

				</div>

			</div>

		</div>



		<div class="spacer"></div>

	</div>

@endsection
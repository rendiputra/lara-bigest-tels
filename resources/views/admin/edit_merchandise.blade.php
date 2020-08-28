<!--{//{dd($merch)}}-->
@extends('layouts.fixed')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">

		{{-- EDIT MERCH --}}


			<div id="add_lomba" class="col col-md-8 col-sm-10 col-10">
				<div class="card" style="padding: 20px">
					<h4>Edit Merch</h4><hr>
					<div class="container">
						<form method="POST" action="/admin/merchandise/edit/{{$merch->id_merch}}/action" enctype="multipart/form-data">
							<input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<label>Nama Merch</label>
								<input class="form-control" type="text" name="nama_merch" value="{{ $merch->nama_merch }}" required="">
							</div>
							
							<div class="form-group">
								<label>Harga</label>
								<input type="number" class="form-control" name="harga_merch" id="harga_merch" value="{{ $merch->harga_merch }}" required="">
							</div>
							
							<div class="form-group">
								<label>Kategori Merch</label>
								<input type="text" class="form-control" name="kategori_merch" value="{{ $merch->kategori_merch  }}" required="">
							</div>
							
							<div class="form-group">
								<label>Foto Merch</label>
								<input class="form-control" type="file" name="img" value="{{ $merch->foto_merch }}" >
							</div>
							
							<button class="btn btn-primary">Edit</button>
							<a href="{{url('admin/merchandise')}}" class="btn btn-secondary">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="spacer"></div>
	</div>
@endsection

@extends('layouts.fixed')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">

		{{-- TAMBAH MERCH --}}


			<div id="add_lomba" class="col col-md-8 col-sm-10 col-10">
				<div class="card" style="padding: 20px">
					<h4>Tambah Merch</h4><hr>
					<div class="container">
						<form method="POST" action="{{ route('tambah_merchandise_action') }}" enctype="multipart/form-data">
							<input class="form-control" type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<label>Nama Merch</label>
								<input class="form-control" type="text" name="nama_merch" required="">
							</div>
							
							<div class="form-group">
								<label>Harga</label>
								<input type="number" class="form-control" name="harga_merch" id="harga_merch" required="">
							</div>
							
							<div class="form-group">
								<label>Kategori Merch</label>
								<select name="kategori_merch" class="form-control">
									<option value="BAJU">BAJU</option>
									<option value="TOTEBAG">TOTEBAG</option>
									<option value="BUCKETHAT">BUCKETHAT</option>
									<option value="KIPAS">KIPAS</option>
									<option value="SEDOTAN">SEDOTAN</option>
								</select>
								{{-- <input type="text" class="form-control" name="kategori_merch" required=""> --}}
							</div>
							
							<div class="form-group">
								<label>Foto Merch</label>
								<input class="form-control" type="file" name="img" required="">
							</div>

							<div class="form-group">
								<label for="desc">Descripsi Merch</label>
								<textarea id="konten" class="form-control" name="desc" rows="10" cols="50"></textarea>
							</div>
							
							<button class="btn btn-primary">Tambah</button>
							<a href="{{url('admin/merchandise')}}" class="btn btn-secondary">Kembali</a>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="spacer"></div>
	</div>
@endsection

@section('js')
<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
  var konten = document.getElementById("konten");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection

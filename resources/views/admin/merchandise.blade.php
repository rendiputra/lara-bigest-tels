@extends('layouts.fixed')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="list" class="col col-md-12 col-sm-12 col-12">
				<div class="card" style="padding: 20px">
					<h4>Data Merchandise</h4><hr>

					<div class="form-group">
						<div class="row">
							<div class="col col-md-4">
								<a href="{{ route('tambah_merchandise') }}" class="btn btn-primary" style="border-radius:5px;width: 100%" id="btn" disabled>Tambah Merch</a>
							</div>
						</div>
					</div>
					<br>
					@if (session('sukses'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        	{{ session('sukses') }}
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        		<span aria-hidden="true">&times;</span>
                        	</button>
                        </div>
                    @endif
                    @if (session('eror'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        	{{ session('eror') }}
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        		<span aria-hidden="true">&times;</span>
                        	</button>
                        </div>
                    @endif
					<div class="container">
						<div class="table-responsive">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th class="align-middle">No</th>
										<th class="align-middle">Nama Merch</th>
										<th class="align-middle">Harga</th>
										<th class="align-middle">Kategori</th>
										<th class="align-middle">Foto</th>
										<th class="align-middle">Aksi</th>
									</tr>
								</thead>
								<tbody>
@php $no = 1 @endphp
@foreach($merchan as $m)
									<tr>
										<td class="align-middle">{{$no++}}</td>							
										<td>{{ $m->nama_merch }}</td>
										<td>{{ $m->harga_merch }}</td>
										<td>{{ $m->kategori_merch }}</td>
										<td><a href="https://biggest.telesandifestival.com/images/merch/{{$m->foto_merch}}" target="_BLANK">Lihat Disini</a></td>
										<td class="text-center">
											<a href="/admin/merchandise/edit/{{$m->id_merch}}" class="btn btn-primary">Edit</a>
											<a href="{{ route('hapus_merchandise', $m->id_merch) }}" class="btn btn-danger">Hapus</a>
										</td>
									</tr>
@endforeach
								</tbody>
							</table>
						</div>
					</div>
					
				</div>
			</div>

		{{-- TAMBAH MERCH --}}


		</div>

		<div class="spacer"></div>
	</div>
@endsection

@extends('layouts.fixed')
@section('content')
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center">
			<div id="list" class="col col-md-12 col-sm-12 col-12">
				<div class="card" style="padding: 20px">
					<h4>Data Ticket</h4><hr>

					<div class="form-group">
						<div class="row">
							<div class="col col-md-4">
								<a href="{{ route('tambah_ticket') }}" class="btn btn-primary" style="border-radius:5px;width: 100%" id="btn" disabled>Tambah Ticket</a>
							</div>
						</div>
					</div>
					@if (session('suksesAktf'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        	{{ session('suksesAktf') }}
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        		<span aria-hidden="true">&times;</span>
                        	</button>
                        </div>
                    @endif
					@if (session('suksesTdkAktf'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        	{{ session('suksesTdkAktf') }}
                        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        		<span aria-hidden="true">&times;</span>
                        	</button>
                        </div>
                    @endif
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
					<br>
					<div class="container">
						<div class="table-responsive">
							<table id="table" class="table table-bordered">
								<thead>
									<tr>
										<th class="align-middle">No</th>
										<th class="align-middle">Jenis Ticket</th>
										<th class="align-middle">Harga</th>
										<th class="align-middle">Status</th>
										<th class="align-middle">Penjualan Terakhir</th>
										<th class="align-middle">Aksi</th>
									</tr>
								</thead>
								<tbody>
@php $no = 1 @endphp
@foreach($ticket as $t)
									<tr>
										<td class="align-middle">{{$no++}}</td>							
										<td>{{ $t->jenis_ticket }}</td>
										<td>{{ $t->harga_ticket }}</td>
	@php
		$s = $t->status_ticket;
	@endphp
	@if($s==0)
										<td><a href="#" class="btn btn-danger">Tidak Aktif</a></td>
	@elseif($s==1)
										<td><a href="#" class="btn btn-primary">Aktif</a></td>
    @elseif($s==2)
										<td><a href="#" class="btn btn-warning">Coming Soon</a></td>
	@endif
										<td>{{ $t->akhir_ticket }}</td>
										<td class="text-center">
											<a href="/admin/ticket/edit/{{$t->id_ticket}}" class="btn btn-info">Edit</a>
	@if($s==0)
											<a href="/admin/ticket/aktifkan/{{$t->id_ticket}}" class="btn btn-primary">Aktifkan</a>
											<a href="/admin/ticket/comingsoon/{{$t->id_ticket}}" class="btn btn-warning">Coming Soonkan</a>
	@elseif($s==1)
											<a href="/admin/ticket/tdkaktifkan/{{$t->id_ticket}}" class="btn btn-danger">Tidak Aktifkan</a>
											<a href="/admin/ticket/comingsoon/{{$t->id_ticket}}" class="btn btn-warning">Coming Soonkan</a>
    @elseif($s==2)
									        <a href="/admin/ticket/aktifkan/{{$t->id_ticket}}" class="btn btn-primary">Aktifkan</a>
									        <a href="/admin/ticket/tdkaktifkan/{{$t->id_ticket}}" class="btn btn-danger">Tidak Aktifkan</a>
	@endif										
										</td>
									</tr>
@endforeach
								</tbody>
							</table>
						</div>
						<p>
						    <b> NB :<br>
						    Ticket Aktif = Avaible, <br>
						    Ticket Tidak Aktif = Sold Out, <br>
						    Coming Soon = Coming Soon.
						    </b>
						</p>
					</div>
					
				</div>
			</div>

		{{-- TAMBAH MERCH --}}

		</div>

		<div class="spacer"></div>
	</div>
@endsection

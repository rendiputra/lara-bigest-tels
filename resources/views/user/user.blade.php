@extends('layouts.fixeded')

@section('title','Dashbord')

@section('content')
<div class="container-fluid ">
<!-- Side navigation -->
		<div class="c-content-tab-3 c-opt-1" >
			<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">
                <li class="active">

    				<div class="sidenav bg-white ">
    				  <a href="/user/dash/user" class="c-font-16 c-font-uppercase mb-3 active" ><i class="far fa-user"></i> Profil</a>
    
    
    				  <a href="/user/dash/ordered"  class="c-font-16 c-font-uppercase mb-3 " ><i class="fa fa-shopping-cart"></i> Orders</a>
    				</div>
			    </li>

			</ul>
			<!-- Page content -->
				<div class="container " >

					<div class="card">
						<div class="card-header">
							<h3>Profil Anda</h3>
							<h5>Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan akun.</h5>
						</div>
						<div class="card-body">
								<form>
									<table class="table table-borderless table-responsive">
										<tbody>
											<tr>
												<td align="right">Nama</td>
												<td><input type="text" class="form-control" name="nama"></td>
											</tr>
											<tr>
												<td align="right">Email</td>
												<td><input type="text" class="form-control" name="email"></td>
											</tr>
											<tr>
												<td align="right">Nomor Telepon</td>
												<td><input type="number" class="form-control" name="telp"></td>
											</tr>
											<tr>
												<td align="right">Alamat</td>
												<td ><textarea name="alamat" class="form-control"></textarea></td>
											</tr>
											<tr>
												<td align="right">Jenis Kelamin</td>
												<td>
													<select class="form-control" name="jenkel">
														<option selected="selected" disabled="disabled">Jenis Kelamin</option>
														<option>Laki-Laki</option>
														<option>Perempuan</option>
													</select>
												</td>
											</tr>
											<tr>
												<td align="right">Tanggal Lahir</td>
												<td><input type="date" class="form-control" name="ttl"></td>
											</tr>
											<tr>
												<td colspan="2" class=" text-center"><input type="submit" name="submit" class="btn btn-primary btn-block" value="Simpan"></td>
											</tr>
										</tbody>
									</table>
								</form>
							</div>
					</div>

				</div>

			</div>
		</div>
		<div class="spacer"></div>

@endsection
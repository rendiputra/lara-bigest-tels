@extends('layouts.fixed')
@section('title', 'Payment Ticket')
@section('content')
<section class="pembayaran" id="pembayaran">
	<div class="spacer"></div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-md-6 col-sm-10 col-12" {{-- style="background-color: #fff;" --}}>
				<div class="card pay-card">
				  <div class="card-body text-center">
				    <h5>Keterangan Pembayaran</h5>
				    <br>
				     <center>
				    <table class="text-uppercase text-primary" style="width: 70%; font-weight:bold;">
				        <tr>
				            <td align="left">Jenis Tiket</td>
				            <td align="right">{{ $payment->jenis_ticket }}</td>
				        </tr>
				        <tr>
				            <td align="left">Harga Tiket</td>
				            <td align="right">Rp. {{ number_format($payment->harga_ticket, 2) }}</td>
				        </tr>
				        <tr>
				            <td align="left">Jumlah </td>
				            <td align="right"><span class="text-lowercase">x</span>{{ $payment->jumlah_orderticket }}</td>
				        </tr>
				        <tr>
				            <td align="left">Subtotal</td>
					@php $total = $payment->harga_ticket * $payment->jumlah_orderticket @endphp
				            <td align="right">Rp. {{ number_format($total, 2) }}</td>
				        </tr>
				    </table></center>
				    <br>
					<p>Mohon segera lakukan pembayaran sebelum:</p>
					<div class="waktu">
						<b>{{ date('d F Y H:i:s', strtotime($payment->die_orderticket)) }}</b><br>
					</div><br>
					<p>Nominal yang harus dibayarkan:</p>
					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
					    
					<h3 class="text-danger" style="text-decoration: line-through;">Rp. {{ number_format($total + $payment->kode_orderticket,2) }}</h3><br>
					    @else
					    
					<h3 class="text-danger">Rp. {{ number_format($total + $payment->kode_orderticket,2) }}</h3><br>
					    @endif
					<p class="alert alert-danger" style="color:red">
					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
					    EXPIRED
					        @else
					    Mohon transfer sesuai dengan angka diatas! 3 digit terakhir merupakan kode yang membantu pengkonfirmasian pembayaran!
					    
					<p>Pembayaran dapat dilakukan dengan transfer ke:</p>
					{{-- <h3 class="text-left">BCA</h3> --}}
					<h3 class="text-center"><img src="{{ asset('img/bri.png') }}" alt="" width="20%" max-width="100%" height="auto" class="img-fluid"></h3>

					<p style="padding:20px ;font-size: 1.6em; background-color: #f0f0f0"><b>7951-01-008254-53-6</b> a.n <b>Muhammad Hazby</b></p>
					    @endif
					    
					    </p>
				  </div>
				</div>
				<div class="spacer" style="height: 10px"></div>
			{{-- 	<div class="text-center">
					<h5>Keterangan Pembayaran</h5>
					<p>Mohon segera lakukan pembayaran sebelum:</p>
					<div class="waktu">
						<b>{{ date('d F Y H:i:s', strtotime($payment->die_orderticket)) }}</b><br>
					</div><br>
					<p>Nominal yang harus dibayarkan:</p>
					<h3>Rp. {{ number_format(($payment->harga_ticket * $payment->jumlah_orderticket) + $payment->kode_orderticket,2) }}</h3><br>
					<p class="alert alert-danger" style="color:red">
					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
					    EXPIRED
					        @else
					    Mohon transfer sesuai dengan angka diatas! 3 digit terakhir merupakan kode yang membantu pengkonfirmasian pembayaran!
					    @endif
					    
					    </p>
					<p>Pembayaran dapat dilakukan dengan transfer ke:</p>
					<h3 class="text-left">BCA</h3>
					<p style="padding:20px ;font-size: 1.6em; background-color: #f0f0f0"><b>8420834030</b> a.n <b>RIO MAHABELY B</b></p>
				</div> --}}
			</div>
			<div class="col-xl-6 col-md-6 col-sm-10 col-12">
				{{-- <div class="spacer"></div> --}}
				
				
				<div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Transfer Bank
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      
        				<div class="card pay-card">
        				  <div class="card-body text-center">
        				  	<h5>Konfirmasi Pembayaran</h5>
        					<p>Sudah Melakukan Pembayaran? Lengkapi form dibawah ini.</p>
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
        					
        					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
        					        @else
        					<form method="POST" action="{{ route('up_bukti')}}" class="form-prevent" enctype="multipart/form-data">
        						@csrf
        						<input type="hidden" name="G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH" value="{{ $payment->id_orderticket }}">
        						<input type="hidden" name="random" value="{{ $payment->kode_orderticket }}">
        						<input type="hidden" name="id_ticket" value="{{ $payment->id_ticket }}">
        						
        					    @endif
        						<div class="form-group">
        							<label>Nama Pengirim</label>
        							
        					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
        							<input type="text" name="pengirim" class="form-control" disabled>
        					    @else
        							<input type="text" name="pengirim" class="form-control">
        						@endif
        						</div>
        						<div class="form-group">
        							<label>Bukti Transfer</label>
        							
        					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
        							<input type="file" name="img" class="form-control-file" accept="image/*;capture=camera" disabled>
        					        @else
        							<input type="file" name="img" class="form-control-file" accept="image/*;capture=camera" required>
        					    @endif
        							{{-- <div class="input-group mb-3">
        							  <div class="input-group-prepend">
        							    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        							  </div>
        							  <div class="custom-file">
        							    <input type="file" class="custom-file-input" id="inputGroupFile01" name="img" aria-describedby="inputGroupFileAddon01">
        							    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        							  </div>
        							</div> --}}
        						</div>
        					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
        						<button class="btn btn-primary btn-curve disabled" style="cursor: default;" id="kirim_bukti1" onclick="disabled_bukti1()"><i class="fas fa-paper-plane"></i> Kirim Bukti</button>
        					        @else
        						<button class="btn btn-primary btn-curve button-prevent" id="kirim_bukti1" onclick="disabled_bukti1()"><i class="fas fa-paper-plane"></i> Kirim Bukti</button>
        					    @endif
        						<a href="{{ url('user/dash')}}" class="btn btn-secondary">Back</a>
        					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
        					        @else
        					</form>
        					@endif
        				  </div>
        				</div>
        				
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Cash On Delivery
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                          
					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
					    
					    @else
        					<form method="POST" action="{{ route('cod')}}" class="form-prevent" enctype="multipart/form-data">
        						@csrf
        						<input type="hidden" name="G4A17YQ167W3XFOA7VGB6XES4RXHXV9VVG67DECTHDAMH" value="{{ $payment->id_orderticket }}">
        						<input type="hidden" name="id_ticket" value="{{ $payment->id_ticket }}">
        				
        				@endif
					    @if(date('Y-m-d H:i:s') >= $payment->die_orderticket)
					            <button type="button" class="btn btn-primary disabled" id="kirim_bukti1" onclick="disabled_bukti1()">Bayar COD</button>
					    @else
        						<div class="form-group text-center">
                    				  	<h5>Konfirmasi Pembayaran</h5>
                    					<p>Sudah Melakukan Pembayaran? Lengkapi form dibawah ini.</p>
        							    <label>Bukti Kwitansi</label>
        							<input type="file" name="img" class="form-control-file" accept="image/*;capture=camera" required>
        							<br>
        						<button class="btn btn-primary btn-curve button-prevent"  id="kirim_bukti2" onclick="disabled_bukti2()"> Bayar COD</button>
        						<a href="{{ url('user/dash')}}" class="btn btn-secondary">Back</a>
        						</div>
        					</form>
        				@endif
                      </div>
                    </div>
                  </div>
                </div>
				
				
				
				

			</div>
		</div>
		<div class="spacer"></div>
	</div>
</section>

@endsection

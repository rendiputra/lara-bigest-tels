@extends('layouts.fixed')
@section('title', str_replace('_',' ',$title))
@section('css')
<style type="text/css" media="screen">
	.name_merch{
		font-family: 'Quicksand', sans-serif;
		font-weight: 700;
		font-size: 1.8rem;
        line-height: 1.6;
		max-height: 3rem;
		line-height: 1.5rem;
	}
	.hayu{
		background-color: #fff;
		border-radius: 5px;
	}
	.hayu img{
		width: 400px;
		max-width: 100%;
	}
	.harga{
		background-color: #F1F1F1;
	}

	.harga span{
		font-weight: 500;
		font-size: 1.8rem;

	}
	.desc-text{
		background-color: #EAEAEA;
		padding: 10px 10px;
	}
	.desc-text span{
		font-size: 1.5rem;
		font-weight: 500;
	}

	.desct-text{
		padding: 10px 10px;
	}
	button:focus {outline:0;}


input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none;
}
</style>
@endsection
@section('content')
@foreach($data as $a)
	<section class="product-detail" id="product-detailid">
		<div class="spacer"></div>
		<div class="container">
				<div class="row hayu shadow">
					<div class="col col-12 col-md-5 text-center pt-5 pl-4 pr-4">
						{{-- <img src="https://via.placeholder.com/700x800.png" alt="" class="img-fluid img-merch"> --}}
						<img src="{{ asset('images/merch/'.$a->foto_merch) }}" alt="" class="img-fluid img-merch">
					</div>
					<div class="col col-12 col-md-7 pl-4 pr-4 pr-md-5 pt-5 pb-5">
						<span class="name_merch">{{ $a->nama_merch }}</span>
						<div class="harga p-2 mt-3">
							<span id="harga">Rp {{ number_format($a->harga_merch,2) }}</span>
						</div>
						<div class="qtys mt-3">
							<form action="{{ route('ordermerch') }}" method="POST" accept-charset="utf-8">								
								@csrf
								<input type="hidden" name="e92363553640b53bb03c9514cb27edea" value="{{ $a->id_merch }}">
								<table style="margin-left: 9px;">
									@if($a->kategori_merch == "BAJU")
									<tr>
										<td height="50px"><span>Ukuran</span></td>
										<td><select id="ukuran" name="ukuran" onchange="func2()" class="form-control">
											<option value="S" id="S" selected>S</option>
											<option value="M" id="M">M</option>
											<option value="L" id="L">L</option>
											<option value="XL" id="XL">XL</option>
											<option value="XXL" id="XXL">XXL</option>
										</select></td>
									</tr>
									@endif
									<tr><td></td></tr>
									<tr><td></td></tr>
									<tr><td></td></tr>
									<tr><td></td></tr>
									<tr>
										<td width="100px"><span>Kuantitas</span></td>
										<td><button type="button" onclick="minus_number()" class="btn btn-danger btn-sm" id="min" disabled><i class="fas fa-minus"></i></button>
				                    <input type="number" id="quantity" name="qty" style="border: none; width: 20px; text-align: center; padding: 0;" min="1" size="1" value="1" readonly>
				                    <button type="button" onclick="add_number()" class="btn btn-success btn-sm" id="plus"><i class="fas fa-plus"></i></button></td>
									</tr>
								</table>
								@if($a->desc_merch == '<p>.</p>')
								@else
                    			<div class="row">
                    				<div class="col col-12 col-md-12 pt-4 pl-3 pr-3">
                    					<div class="desc-text">
                    						<span>Deskripsi Produk</span>
                    					</div>
                        				<div class="desct-text">
                        					<span>
                        						{!! $a->desc_merch !!}
                        					</span>
                        				</div>
                    				</div>
                    			</div>
                    			@endif
								<button type="submit" class="btn btn-primary btn-block mt-4">Pre Order</button>
							</form>

	                    </div>
					</div>
				</div>
		</div>
	</section>

{{--<section class="descripsi-prod" id="descripsi-prodid">
		<div class="container mt-4 hayu shadow">
			<div class="row">
				<div class="col col-12 col-md-12 pt-4">
					<div class="desc-text">
						<span>Deskripsi Produk</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="desct-text">
					<span>
						{!! $a->desc_merch !!}
					</span>
				</div>
			</div>
		</div>
	</section>--}}

@endforeach
<div class="spacer"></div>
@endsection

@section('js')
<script>
    function func2(){
        @foreach($data as $awas)
            var total = {{$awas->harga_merch}};
        @endforeach
        if(document.getElementById('ukuran').value === "S" || "M" || "L"){
            document.getElementById('harga').innerHTML = "Rp " + (total).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }
        if(document.getElementById('ukuran').value == "XL"){
            var totalawxl = total + 5000;
            document.getElementById('harga').innerHTML = "Rp " + (totalawxl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }
        if(document.getElementById('ukuran').value == "XXL"){
            var totalawxl = total + 10000;
            document.getElementById('harga').innerHTML = "Rp " + (totalawxl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }
    }
    function add_number(){
        
        document.getElementById("quantity").value ++;
        var jumlah = document.getElementById("quantity").value;

        if(jumlah <= 1){
            document.getElementById("min").disabled = true;
        }else{
            document.getElementById("min").disabled = false;
        }
    }
    function minus_number(){
        
        document.getElementById("quantity").value --;
            document.getElementById("min").disabled = false;
        var jumlah = document.getElementById("quantity").value;
        if(jumlah <= 1){
            document.getElementById("min").disabled = true;
        }else{
            document.getElementById("min").disabled = false;
        }

        
    }
</script>
@endsection
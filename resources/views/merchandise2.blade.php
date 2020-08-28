@extends('layouts.fixed')
@section('title', 'Merchandise')
@section('css')

<style type="text/css" media="screen">
.category{
	background-color: #fff;

}

.category h3{
	font-family: Poppins, sans-serif;
	font-weight: 400;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 20px;
}

.card_portofolio{
/*      height: 345px; */
      background-color: white; 
      border-radius: 20px; 
      /*box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);*/
      /*padding: 30px;*/
      margin-bottom: 20px;
      transition: 1s;
      position: relative;
      overflow: hidden;

}
.card_portofolio img{
}
.proddet{
	padding: .5rem;

}

.button-catt{
	background: #fff;
}

@media (min-width: 992px) { 

.sidebar-item {
	position: absolute;
	width: 100%;
	height: 100%;
	
	/* Position the items */
	// &:nth-child(2) { top: 25%; }
	// &:nth-child(3) { top: 50%; }
	// &:nth-child(4) { top: 75%; }
}
.make-me-sticky {
  position: -webkit-sticky;
	position: sticky;
	top: 95px;
    
  padding: 0 15px;
}
    
}

.sadd{
   color: green;
   text-shadow: 0px 5px #ffde00;
}
.sad{
   color: #ffde00;
   text-shadow: 0px 5px green;
}
</style>

@endsection
@section('content')
{{-- <style>
.card_portofolio{
      height: 3W45px; 
      background-color: white; 
      border-radius: 20px; 
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);
      padding: 30px;
      margin-bottom: 20px;
      transition: 1s;
      position: relative;
      overflow: hidden;
    }
.bg-dark{
  background-color: #1f2861 !important;
}

</style> --}}

<section class="merch-title mb-5" id="merch-titleid">
	<div class="container">
		<div class="spacer"></div>
		<div class="row justify-content-center ">
			<div  class="col-md-12 col-sm-12 col-12 mt-5">
				<center>
					<img src="{{ asset('img/merch.png') }}" alt="" class="img-fluid">
				</center>
			</div>
		</div>
	</div>
</section>

    <div class="container">
<div class="accordion" id="detailmerch">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <div class="sidebar-item">
                    <div class="make-me-sticky">
            			    <h2 class="syncopate text-uppercase text-center sad">Kategori</h2>
            			<div class="row text-center justify-content-center">
            				<div class="p-3">
            						<a data-toggle="collapse" style="cursor: pointer" data-default="1" data-target="#baju-detail" aria-expanded="true" aria-controls="baju-detail" class="button-catt">
            							<div class="category-item">
            							    <center>
            								<img src="{{ asset('img/cat-baju.png') }}" alt="" class="img-cat">
            								<p>BAJU</p>
            								</center>
            							</div>	
            						</a>
            
            				</div>
            				<div class="p-3">
            					<a data-toggle="collapse" style="cursor: pointer" data-target="#sedotan-detail" aria-expanded="true" aria-controls="sedotan-detail">
            						<div class="category-item">
            						    <center>
            							<img src="{{ asset('img/cat-sedotan.png') }}" alt="" class="img-cat">
            							<p>SEDOTAN</p>
            							</center>
            						</div>
            					</a>
            				</div>
            				<div class="p-3">
            					<a data-toggle="collapse" style="cursor: pointer" data-target="#totebag-detail" aria-expanded="true" aria-controls="totebag-detail">
            						<div class="category-item">
            						    <center>
            							<img src="{{ asset('img/cat-totebag.png') }}" alt="" class="img-cat">
            							<p>TOTEBAG</p>
            							</center>
            						</div>	
            					</a>
            				</div>
            				{{-- <div class="p-3">
            					<a data-toggle="collapse" style="cursor: pointer" data-target="#buckethat-detail" aria-expanded="true" aria-controls="buckethat-detail">
            						<div class="category-item">
            						    <center>
            							<img src="{{ asset('img/cat-buckethat.png') }}" alt="" class="img-cat">
            							<p>BUCKETHAT</p>
            							</center>
            						</div>
            					</a>
            				</div> --}}
            				<div class="p-3">
            					<a data-toggle="collapse" style="cursor: pointer" data-target="#kipas-detail" aria-expanded="true" aria-controls="kipas-detail">
            					<div class="category-item">
            					    <center>
            						<img src="{{ asset('img/cat-kipas.png') }}" alt="" class="img-cat">
            						<p>KIPAS</p>
            						</center>
            					</div>
            				</a>
            				</div>
            
            			</div>
        			</div>
    			</div>
            </div>
            
            <div class="col-lg-5">
            			    <h2 class="syncopate text-uppercase text-center sadd">Produk</h2>
                
    				{{-- BAJU --}}
    				<div class="baju-acc collapse show" id="baju-detail" aria-labelledby="baju-detail" data-parent="#detailmerch">
    					<div class="row">
    
    						@foreach($baju as $baju)
    						<div class="col-lg-6 offset-lg-3">
    							<div class="card_portofolio baju-det shadow mt-2">
    							    <a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="text-decoration-none">
    									<!--<img src"{{ asset($baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">-->
    									<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">
    									<br>
    									<div class="proddet">
    										<h6 style="color: #2b2be8;">{{ $baju->nama_merch }}</h6>
    										<p style="color: black;">Rp {{ number_format($baju->harga_merch,2) }}</p>
    									</div>
    									<a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="btn btn-primary btn-block rounded-0">Beli</a>
    								</a>
    							</div>
    						</div>
    						@endforeach
    						<!--<div class="col-lg-4">-->
    						<!--	<div class="card_portofolio baju-det shadow mt-2">-->
    						<!--	    <a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="text-decoration-none">-->
    						<!--			<img src="https://via.placeholder.com/700x800.png" alt="BAJU" max-width="100%" width="100%" class="img-fluid">-->
    						<!--			{{--<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">--}}-->
    						<!--			<br>-->
    						<!--			<div class="proddet">-->
    						<!--				<h6 style="color: #2b2be8;">{{ $baju->nama_merch }}</h6>-->
    						<!--				<p style="color: black;">Rp {{ number_format($baju->harga_merch,2) }}</p>-->
    						<!--			</div>-->
    						<!--			<a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="btn btn-primary btn-block rounded-0">Beli</a>-->
    						<!--		</a>-->
    						<!--	</div>-->
    						<!--</div>-->
    						<!--<div class="col-lg-4">-->
    						<!--	<div class="card_portofolio baju-det shadow mt-2">-->
    						<!--	    <a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="text-decoration-none">-->
    						<!--			<img src="https://via.placeholder.com/700x800.png" alt="BAJU" max-width="100%" width="100%" class="img-fluid">-->
    						<!--			{{--<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">--}}-->
    						<!--			<br>-->
    						<!--			<div class="proddet">-->
    						<!--				<h6 style="color: #2b2be8;">{{ $baju->nama_merch }}</h6>-->
    						<!--				<p style="color: black;">Rp {{ number_format($baju->harga_merch,2) }}</p>-->
    						<!--			</div>-->
    						<!--			<a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="btn btn-primary btn-block rounded-0">Beli</a>-->
    						<!--		</a>-->
    						<!--	</div>-->
    						<!--</div>-->
    					</div>
    				</div>
    				{{-- SEDOTAN --}}
    				<div class="sedotan-acc collapse" id="sedotan-detail" aria-labelledby="sedotan-detail" data-parent="#detailmerch">
    					<div class="row">
    						@foreach($sedotan as $baju)
    						<div class="col-lg-6 offset-lg-3">
    							<div class="card_portofolio baju-det shadow mt-2">
    							    <a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="text-decoration-none">
    									<!--<img src="https://via.placeholder.com/700x800.png" alt="BAJU" max-width="100%" width="100%" class="img-fluid">-->
    									<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">
    									<br>
    									<div class="proddet">
    										<h6 style="color: #2b2be8;">{{ $baju->nama_merch }}</h6>
    										<p style="color: black;">Rp {{ number_format($baju->harga_merch,2) }}</p>
    									</div>
    									<a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="btn btn-primary btn-block rounded-0">Beli</a>
    								</a>
    							</div>
    						</div>
    						@endforeach
    					</div>
    				</div>
    				{{-- TOTEBAG --}}
    				<div class="totebag-acc collapse" id="totebag-detail" aria-labelledby="totebag-detail" data-parent="#detailmerch">
    					<div class="row">
    						@foreach($tote as $baju)
    						<div class="col-lg-6 offset-lg-3">
    							<div class="card_portofolio baju-det shadow mt-2">
    							    <a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="text-decoration-none">
    									<!--<img src="https://via.placeholder.com/700x800.png" alt="BAJU" max-width="100%" width="100%" class="img-fluid">-->
    									<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">
    									<br>
    									<div class="proddet">
    										<h6 style="color: #2b2be8;">{{ $baju->nama_merch }}</h6>
    										<p style="color: black;">Rp {{ number_format($baju->harga_merch,2) }}</p>
    									</div>
    									<a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="btn btn-primary btn-block rounded-0">Beli</a>
    								</a>
    							</div>
    						</div>
    						@endforeach
    					</div>
    				</div>
    				{{-- BUCKETHAT 
    				<div class="buckethat-acc collapse" id="buckethat-detail" aria-labelledby="buckethat-detail" data-parent="#detailmerch">
    					<div class="row">
    						@foreach($bucket as $baju)
    						<div class="col-lg-6 offset-lg-3">
    							<div class="card_portofolio baju-det shadow mt-2">
    							    <a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="text-decoration-none">
    									<!--<img src="https://via.placeholder.com/700x800.png" alt="BAJU" max-width="100%" width="100%" class="img-fluid">-->
    									<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">
    									<br>
    									<div class="proddet">
    										<h6 style="color: #2b2be8;">{{ $baju->nama_merch }}</h6>
    										<p style="color: black;">Rp {{ number_format($baju->harga_merch,2) }}</p>
    									</div>
    									<a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="btn btn-primary btn-block rounded-0">Beli</a>
    								</a>
    							</div>
    						</div>
    						@endforeach
    					</div>
    				</div>--}}
    				{{-- KIPAS --}}
    				<div class="kipas-acc collapse" id="kipas-detail" aria-labelledby="kipas-detail" data-parent="#detailmerch">
    					<div class="row">
    						@foreach($kipas as $baju)
    						<div class="col-lg-6 offset-lg-3">
    							<div class="card_portofolio baju-det shadow mt-2">
    							    <a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="text-decoration-none">
    									<!--<img src="https://via.placeholder.com/700x800.png" alt="BAJU" max-width="100%" width="100%" class="img-fluid">-->
    									<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">
    									<br>
    									<div class="proddet">
    										<h6 style="color: #2b2be8;">{{ $baju->nama_merch }}</h6>
    										<p style="color: black;">Rp {{ number_format($baju->harga_merch,2) }}</p>
    									</div>
    									<a href="{{ route('merch_det', str_replace(' ','_',$baju->nama_merch)) }}" class="btn btn-primary btn-block rounded-0">Beli</a>
    								</a>
    							</div>
    						</div>
    						@endforeach
    					</div>
    				</div>
            </div>
        </div>
    </div>
</div>


	
@endsection

@section('js')
<script>

    $('.collapse').on('hidden.bs.collapse', function () {
        $('.collapse').eq(1).collapse('show');
    })
    
    $(function () {
        $('#baju-detail').on('shown.bs.collapse', function (e) {
                $('html,body').animate({
                    scrollTop: $('#baju-detail').offset().top -150
                }, 500); 
        }); 
        $('#sedotan-detail').on('shown.bs.collapse', function (e) {
                $('html,body').animate({
                    scrollTop: $('#sedotan-detail').offset().top -150
                }, 500); 
        }); 
        $('#totebag-detail').on('shown.bs.collapse', function (e) {
                $('html,body').animate({
                    scrollTop: $('#totebag-detail').offset().top -150
                }, 500); 
        }); 
        $('#buckethat-detail').on('shown.bs.collapse', function (e) {
                $('html,body').animate({
                    scrollTop: $('#buckethat-detail').offset().top -150
                }, 500); 
        }); 
        $('#kipas-detail').on('shown.bs.collapse', function (e) {
                $('html,body').animate({
                    scrollTop: $('#kipas-detail').offset().top -150
                }, 500); 
        }); 
    });
</script>
@endsection

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
<div class="accordion" id="detailmerch">
	<section class="merch-detail mt-3" id="merch-detailid">
		<div class="container">
			{{--<div class="row">
				<div class="col col-12 col-md-12">
					<div class="category shadow">
						<h3>CATEGORY</h3>
					</div>
				</div>
			</div>--}}
			<div class="row text-center justify-content-center">
				<div class="col-4 col-md-1 col-sm-1 col-xs-1">
						<a data-toggle="collapse" style="cursor: pointer" data-target="#baju-detail" aria-expanded="true" aria-controls="baju-detail" class="button-catt">
							<div class="category-item">
								<img src="{{ asset('img/cat-baju.png') }}" alt="" class="img-cat">
								<p>BAJU</p>
							</div>	
						</a>

				</div>
				<div class="col-4 col-md-1 col-sm-1">
					<a data-toggle="collapse" style="cursor: pointer" data-target="#sedotan-detail" aria-expanded="true" aria-controls="sedotan-detail">
						<div class="category-item">
							<img src="{{ asset('img/cat-sedotan.png') }}" alt="" class="img-fluid">
							<p>SEDOTAN</p>
						</div>
					</a>
				</div>
				<div class="col-4 col-md-1 col-sm-1 col-xs-1">
					<a data-toggle="collapse" style="cursor: pointer" data-target="#totebag-detail" aria-expanded="true" aria-controls="totebag-detail">
						<div class="category-item">
							<img src="{{ asset('img/cat-totebag.png') }}" alt="" class="img-cat">
							<p>TOTEBAG</p>
						</div>	
					</a>
				</div>
				<div class="col-4 col-md-1 col-sm-1 col-xs-1">
					<a data-toggle="collapse" style="cursor: pointer" data-target="#buckethat-detail" aria-expanded="true" aria-controls="buckethat-detail">
						<div class="category-item">
							<img src="{{ asset('img/cat-buckethat.png') }}" alt="" class="img-cat">
							<p>BUCKETHAT</p>
						</div>
					</a>
				</div>
				<div class="col-4 col-md-1 col-sm-1 col-xs-1">
					<a data-toggle="collapse" style="cursor: pointer" data-target="#kipas-detail" aria-expanded="true" aria-controls="kipas-detail">
					<div class="category-item">
						<img src="{{ asset('img/cat-kipas.png') }}" alt="" class="img-cat">
						<p>KIPAS</p>
					</div>
				</a>
				</div>

			</div>
		</div>
	</section>
	<section class="detail-cat" id="detail-catid">
		<div class="container">
				{{-- BAJU --}}
				<div class="baju-acc collapse show" id="baju-detail" aria-labelledby="baju-detail" data-parent="#detailmerch">
					<div class="row">

						@foreach($baju as $baju)
						<div class="col-md-3">
							<div class="card_portofolio baju-det shadow mt-2">
									<img src="https://via.placeholder.com/700x800.png" alt="BAJU" max-width="100%" width="100%" class="img-fluid">
									{{--<img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BAJU" max-width="100%" width="100%" class="img-fluid">--}}
									<br>
									<div class="proddet">
										<h5 style="color: #2b2be8;">{{ $baju->nama_merch }}</h5>
										<p>Rp {{ number_format($baju->harga_merch,2) }}</p>
									</div>
									<a href="{{ route('merch_det', str_replace(' ','-',$baju->nama_merch)) }}" class="btn btn-primary btn-block">Beli</a>
								</div>
						</div>
						@endforeach
					</div>
				</div>
				{{-- SEDOTAN --}}
				<div class="sedotan-acc collapse" id="sedotan-detail" aria-labelledby="sedotan-detail" data-parent="#detailmerch">
					<div class="row">
						@foreach($sedotan as $baju)
						<div class="col-md-3">
							<div class="card_portofolio sedotan-det shadow mt-2">
							    <center><img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="SEDOTAN" class="img-fluid"></center>
									<div class="proddet">
										<h5 style="color: #2b2be8;">{{ $baju->nama_merch }}</h5>
										<p>Rp {{ number_format($baju->harga_merch,2) }}</p>
									</div>
									<a href="{{ route('merch_det', str_replace(' ','-',$baju->nama_merch)) }}" class="btn btn-primary btn-block">Beli</a>
								</div>
						</div>
						@endforeach
					</div>
				</div>
				{{-- TOTEBAG --}}
				<div class="totebag-acc collapse" id="totebag-detail" aria-labelledby="totebag-detail" data-parent="#detailmerch">
					<div class="row">
						@foreach($tote as $baju)
						<div class="col-md-3">
							<div class="card_portofolio sedotan-det shadow mt-2">
							    <center><img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="TOTEBAG" class="img-fluid"></center>
									<div class="proddet">
										<h5 style="color: #2b2be8;">{{ $baju->nama_merch }}</h5>
										<p>Rp {{ number_format($baju->harga_merch,2) }}</p>
									</div>
									<a href="{{ route('merch_det', str_replace(' ','-',$baju->nama_merch)) }}" class="btn btn-primary btn-block">Beli</a>
								</div>
						</div>
						@endforeach
					</div>
				</div>
				{{-- BUCKETHAT --}}
				<div class="buckethat-acc collapse" id="buckethat-detail" aria-labelledby="buckethat-detail" data-parent="#detailmerch">
					<div class="row">
						@foreach($bucket as $baju)
						<div class="col-md-3">
							<div class="card_portofolio sedotan-det shadow mt-2">
							    <center><img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="BUCKETHAT" class="img-fluid"></center>
									<div class="proddet">
										<h5 style="color: #2b2be8;">{{ $baju->nama_merch }}</h5>
										<p>Rp {{ number_format($baju->harga_merch,2) }}</p>
									</div>
									<a href="{{ route('merch_det', str_replace(' ','-',$baju->nama_merch)) }}" class="btn btn-primary btn-block">Beli</a>
								</div>
						</div>
						@endforeach
					</div>
				</div>
				{{-- KIPAS --}}
				<div class="kipas-acc collapse" id="kipas-detail" aria-labelledby="kipas-detail" data-parent="#detailmerch">
					<div class="row">
						@foreach($kipas as $baju)
						<div class="col-md-3">
							<div class="card_portofolio sedotan-det shadow mt-2">
							    <center><img src="{{ asset('images/merch/'.$baju->foto_merch) }}" alt="KIPAS" class="img-fluid"></center>
									<div class="proddet">
										<h5 style="color: #2b2be8;">{{ $baju->nama_merch }}</h5>
										<p>Rp {{ number_format($baju->harga_merch,2) }}</p>
									</div>
									<a href="{{ route('merch_det', str_replace(' ','-',$baju->nama_merch)) }}" class="btn btn-primary btn-block">Beli</a>
								</div>
						</div>
						@endforeach
					</div>
				</div>

		</div>
		<div class="spacer"></div>
	</section>
</div>


	
@endsection

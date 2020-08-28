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
.sadd{
   color: green;
   text-shadow: 0px 5px #ffde00;
   font-size: 4rem;
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
					<div class="spacer"></div>
					<h1 class="syncopate sad">COMING <span class="sadd">SOON!</span></h1>
					<div class="spacer"></div>
					<div class="spacer"></div>
				</center>
			</div>
		</div>
	</div>
</section>
@endsection

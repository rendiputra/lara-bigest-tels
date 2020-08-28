@extends('layouts.auth')

@section('title', 'Verifikasi')

@section('css')

<style>

    body{
        background-image:url('{{ asset('img/back/authbg.png') }}');
        background-repeat:no-repeat;
        background-size:55%;
        
    }

    .text-login{
        font-family: Quicksand, sans-serif;
        font-size:24px;
    }
    .text-login span{
        color:#73d74a;
    }
    
    .make-acc p{
        line-height:0;
        font-size:15px;
    }
    
    .make-acc a{
        line-height:0;
        font-size:15px;
    }
    
    .btn{
        border-radius:50px;
    }

    .btn-auth{
	    color: #fff;
	    background-color: #73d74a;
	    border-color: #73d74a;
    }
    .btn-auth:hover {
	  color: #fff;
	  background-color: #5bc05c;
	  border-color: #5bc05c;
	}

	.btn-auth:focus, .btn-auth.focus {
	  box-shadow: 0 0 0 0.2rem rgba(99, 199, 87, 0.5);
	}
	.btn-auth:not(:disabled):not(.disabled):active {
	  color: #fff;
	  background-color: #228c3c;
	  border-color: #73d74a;
	}

    @media (min-width: 768px) {

	  .mt-md-8, .my-md-0 
	  	{
	   		margin-top: 8rem !important;
		}
  }
    
    
    /*.text-login span{*/
    /*    color:#0096db;*/
    /*    font-weight:bold;*/
    /*}*/
</style>

@endsection

@section('content')

<section class="login" id="loginid">

<div class="container">
    <div class="row justify-content-md-end">
        <div class="col col-12 col-md-7">
            <img class="mt-md-8" src="{{ asset('img/back/authbg2.png') }}" class="img-fluid shadow" max-width="100%" width="100%">
        </div>
        <div class="col col-12 col-md-5">
            <div class="spacer"></div>
            <p class="text-login"><span class="font-weight-bold">Aktifkan</span> Akun Kamu</p>
            <div class="card shadow border-0">
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email kamu.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, silakan periksa email kamu untuk tautan verifikasi.') }}
                    {{ __('Jika kamu tidak menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik di sini untuk mengirim ulang verifikasi') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="spacer"></div>
</section>


@endsection



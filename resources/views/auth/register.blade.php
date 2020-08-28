@extends('layouts.auth')
@section('title','Register')

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
    
    .text-login span{
        color:#73d74a;
    }

    @media (min-width: 768px) {

      .mt-md-8, .my-md-0 
        {
            margin-top: 8rem !important;
        }
    }

</style>
@endsection

@section('content')
<div class="container">
    <div class="spacer"></div>
    <div class="row justify-content-md-end">
        <div class="col col-12 col-md-7">
            <img class="mt-md-8" src="{{ asset('img/back/authbg2.png') }}" class="img-fluid shadow" max-width="100%" width="100%">
        </div>
        <div class="col col-12 col-md-5">
            <p class="text-login"><span class="font-weight-bold">Registerkan</span> Akun Kamu</p>
            <div class="card shadow border-0">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="form-prevent">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Name Lengkap') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="name">{{ __('Jenis Kelamin') }}</label>
                            <select id="jenkel" class="form-control @error('jenkel') is-invalid @enderror" name="jenkel" autocomplete="jenkel" autofocus>
                                <option>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki" @if(old('jenkel') == "Laki-Laki") {{ 'selected' }} @endif>Laki - Laki</option>
                                <option value="Perempuan" @if(old('jenkel') == "Perempuan") {{ 'selected' }} @endif>Perempuan</option>
                            </select>
                            @error('jenkel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('Tanggal Lahir') }}</label>
                            
                                <input id="tgllahir" type="date" class="form-control @error('tgllahir') is-invalid @enderror" name="tgllahir" value="{{ old('tgllahir') }}" required autocomplete="tgllahir" autofocus>

                                @error('tgllahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('Alamat') }}</label>
                            <textarea id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="alamat" autofocus>{{ old('alamat') }}</textarea>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('No Telp') }}</label>
                            <input id="notelp" type="number" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') }}" required autocomplete="notelp" autofocus>

                            @error('notelp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            {!! htmlFormSnippet() !!}
                        </div>


                        <div class="form-group mb-0">
                                <button type="submit" class="btn btn-auth btn-block button-prevent">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <center>
                        <div class="make-acc mt-5 mb-4">
                            <p>Sudah Punya Akun?</p>
                            <a href="{{ route('login') }}" class="btn-link">Login Disini!</a>
                        </div>
                        </center>          
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer"></div>
</div>
@endsection

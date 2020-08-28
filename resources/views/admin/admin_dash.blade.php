@extends('layouts.fixed')
@section('css')
    <style type="text/css">
        .item_user{
            width: 100%;
            height: auto;
            padding: 10px;
        }
        
      .dashboard-admin{
		width: 100%;
		height: auto;
	}
	.card{
		font-family: 'Poppins', sans-serif;
		-webkit-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		-moz-box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		box-shadow: 0px 2px 26px -10px rgba(0,0,0,1);
		margin-top: 50px;
	}
    </style>
@endsection
@section('content')
<section class="dashboard-admin" id="dashboard-admin" height="100%" style="background-color: #E7E7E7;">
    <div class="container">
        <div class="spacer" ></div>
        <div class="row justify-content-center">
            <div class="col col-md-10 col-sm-10 col-12">
                <div class="card" style="padding: 20px;">
                    <h4>Dashboard</h4>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>User</h5>
                                <hr>
                                <span style="font-size: 2em">{{ count($user) }}</span>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>Merchandise</h5>
                                <hr>
                                <span style="font-size: 2em">{{ count($merch) }}</span>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>Ticket Aktif</h5>
                                <hr>
                                <span style="font-size: 2em">{{ count($ticket) }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>Pemesan Ticket</h5>
                                <hr>
                                @php
                                $total_orderticket = [];
                                @endphp
                                @foreach($orderticket as $orderticket)
                                @php
                                array_push($total_orderticket, $orderticket->jumlah_orderticket);
                                @endphp
                                @endforeach
                                <span style="font-size: 2em">{{ array_sum($total_orderticket) }}</span>
                            </div>
                        </div>
                        <div class="col col-md-4">
                            <div class="card text-center" style="padding: 10px;">
                                <h5>Pemesan Merch</h5>
                                <hr>
                                <span style="font-size: 2em">{{ count($ordermerch) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="spacer" style="height: 150px;"></div>
    </div>
</section>
@endsection
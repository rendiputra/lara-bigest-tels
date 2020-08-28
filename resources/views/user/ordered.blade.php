@extends('layouts.main')

@section('title','Dashbord')
@section('css')

<style type="text/css">
/* The sidebar menu */
.sidenav {
	margin-top: 100px;
  height: 90%; /* Full-height: remove this if you want "auto" height */
  width: 300px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
  border-radius: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  display: block;
}

/* Style page content */
.main {
  margin-left: 300px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

@media screen and (max-width: 768px){
	.sidenav{
		display: none;
	}	
	.main{
		margin-left: auto;
	}
}

.openbtn{
	display: none;
}

@media screen and (max-width: 768px){
	.openbtn{
		display: block;
		height: 100%;
	}
	.main{
		margin-left: 50px;
	}
}
/* The sidebar menu */
.sidebar {
  height: 90%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  margin-top: 100px;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.tes{
	height: 100%;
	position: fixed;
	display: block;
	background-color: black;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  color: white;
  padding: 10px 15px;
  border: none;
  display: block;
}

.openbtn:hover {
  background-color: #444;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
.main {
  transition: margin-left .5s; /* If you want a transition effect */
  padding: 20px;
}
}
</style>

@endsection
@section('content')
<div class="spacer"></div>
<div class="container-fluid ">
<!-- Side navigation -->
		<div class="c-content-tab-3 c-opt-1" >
			<ul class="nav nav-tabs c-font-uppercase c-font-bold c-margin-b-10 justify-content-center" role="tablist" style="border: none;">
              <li class="active">

				<div class="sidenav bg-white">
				  <a href="/dash/user"  class="c-font-16 c-font-uppercase mb-3 active" ><i class="far fa-user"></i> Profil</a>


				  <a href="/dash/ordered"   class="c-font-16 c-font-uppercase mb-3 " ><i class="fa fa-shopping-cart"></i> Orders</a>
				</div>
			</li>

			</ul>
				<div id="mySidebar" class="sidebar">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <a href="#" class="active"><i class="fa fa-user"></i> Profil</a>
				  <a href="#"><i class="fas fa-shopping-cart"></i> Orders</a>
				</div>

				<div class="tes"  style="left: 0;">
				  	<button class="openbtn alert-primary" onclick="openNav()">&#9776;</button>
					<div class="tes ">
					</div>
				</div>


			<!-- Page content -->
			<section id="ordered">
				<div class="container main " >

					<div class="card">
						<div class="card-header">
							<nav class="navbar navbar-expand-lg navbar-light bg-light">
							  <div class=" text-center" id="navbarNav"  >
							    <ul class="navbar-nav">
							      <li class=" active">
							        <a class="nav-link" href="#">Semua <span class="sr-only">(current)</span></a>
							      </li>
							      <li class="">
							        <a class="nav-link" href="#">Belum Bayar</a>
							      </li>
							      <li class="">
							        <a class="nav-link" href="#">Tunggu Konfirmasi</a>
							      </li>
							      <li class="">
							        <a class="nav-link" href="#">Terkonfirmasi</a>
							      </li>
							      <li class="">
							        <a class="nav-link" href="#">Selesai</a>
							      </li>
							    </ul>
							  </div>
							</nav>
						</div>
						<!-- Semua -->
						<div class="card-body">
								<form>
									
								</form>
							</div>
					</div>

				</div>

			</section>



			</div>
		</div>



@section('js')


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementByClass("main").style.marginLeft= "50px";
}
</script>
   
@endsection
@endsection
@extends('layouts.master')
@section('content')
<section class="display-vidio" id="display-vidioid">
   <div class="dipslayvidio">
       <video autobuffer autoloop loop controls>
            <source src="/media/video.oga">
            <source src="/media/video.m4v">
            <object type="video/ogg" data="/media/video.oga" width="320" height="240">
            <param name="src" value="/media/video.oga">
            <param name="autoplay" value="false">
            <param name="autoStart" value="0">
            <p><a href="/media/video.oga">Download this video file.</a></p>
            </object>
        </video>
   </div>
</section>
@endsection
@extends('layouts.app')
@section('content')
        <!--Start breadcrumb area-->
        <section class="breadcrumb-area style2" style="background-image: url(storage/front/images/resources/breadcrumb-bg-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content-box clearfix">
                            <div class="title-s2 text-center">
                               
                                <h1>Career</h1>
                            </div>
                            <div class="breadcrumb-menu float-left">
                                <ul class="clearfix">
                                    <li><a href="index-2.html">Home</a></li>
                                    <li class="active">Career</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start career Area-->
       
       	<div style="position:relative;">
    		<div class="container" style="background:transparent;padding-top:20px;">	
    		    
    		</div>
		</div>
        <script>
                var iframe = document.getElementById("my-iframe");
                
                // Wait for the iframe content to load
                iframe.onload = function() {
                // Set the iframe height to match the content height
                iframe.style.height = iframe.contentWindow.document.body.scrollHeight + "px";
                };
        </script>
       
        <!--End career" Area-->
@endsection
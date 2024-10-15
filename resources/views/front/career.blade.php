@extends('layouts.app',['title'=>'Career'])
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
    		    <h2 class="m-3 text-center">Job Opportunities</h2>
                <hr>
                @foreach ($jobs as $job)
                <div class="card p-3 mb-2">
                    <div class="row">
                        <h6 class="col-md-3 mb-2">Position: <br><span class="text-uppercase">{{$job->role->title}}</span></h6>
                        <h6 class="col-md-3 mb-2">Positions available: <br>{{$job->openings}}</h6>
                        <h6 class="col-md-3 mb-2">Deadline: <br>{{date_format(date_create($job->deadline),'jS F, Y')}}</h6>
                        <h6 class="col-md-3 mb-2">Mode: <br>{{$job->app_mode}}</h6>
                    </div>
                    <hr>
                    <div>
                        <h6>Job Description</h6>
                        <div>{{$job->role->job_description}}</div>
                    </div>
                    <hr>
                    <div>
                        <h6>Job Requirements</h6>
                        <div>{{$job->role->job_requirements}}</div>
                    </div>
                    @if (($job->app_mode=="Online Form")||($job->app_mode=="Both Online and Physical"))
                    <div class="modal-footer">
                        <a href="/application/{{$job->id}}"><button class="btn btn-primary">Apply</button></a>
                    </div>
                    @endif
                </div>
                @endforeach
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
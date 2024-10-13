@extends('layouts.dashboard',['title'=>'Department Messages'])
@section('dashboard')
<div class="container">
    <div class="row d-flex justify-content-center">
        <!-- departments -->
        @if(Auth()->user()->role=='Admin')
        <div class="col-3 bg-light" id="">
            <div class="">
                <!-- Search -->
                <!-- <div class=" layer w-100">
                    <input type="text" placeholder="Search contacts..." name="chatSearch" class="form-control p-2">
                </div> -->
                <!-- List -->
                <div class="scrollable">
                    @foreach(App\Models\roles::select('title')->get() as $dep)
                    <a href="{{route('message.show',$dep->title)}}" style="text-decoration:none; color:black;">
                        <div class="row m-2 d-flex justify-content-between">
                            <div class="col-5 mt-3">
                                <h6 class="">{{$dep->title}}</h6>
                            </div>
                        </div>
                    </a>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        <!-- Chat Box -->
        <div class="col-md-9 card" id='chat-box'>
            <div class="h-100">
                <div class="w-100">
                    <!-- Header -->
                    <div class="row  py-2 px-3 bg-white d-flex justify-content-between">
                        <div class="col-2">
                            <a href="" title="" id='chat-sidebar-toggle' class="me-3">
                                <i class="bi bi-list"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <h6 class="lh-1 mB-0">{{$department}} Department Messages</h6>
                        </div>

                        <div class="col-3 row">
                            <a href="" class="col-4" title="">
                                <i class="bi bi-camera-video"></i>
                            </a>
                            <a href="" class="col-4 td-n c-grey-900 cH-blue-500 fsz-md mR-30" title="">
                                <i class="bi bi-headset"></i>
                            </a>
                            <a href="" class="col-4 td-n c-grey-900 cH-blue-500 fsz-md" title="">
                                <i class="bi bi-three-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div style="min-height: 50vh; width:100%;">
                    <!-- Chat Box -->
                    <div class="p-2">
                        <!-- Chat Conversation -->
                        @foreach($messages as $message)
                        <div class="row">
                            <div class="col-6">
                                @if($message->sender_id != Auth()->user()->id)
                                <div class="bg-light p-3">
                                    <div class="">{{$message->sender->fname}} {{$message->sender->sname}}:</div>
                                    <div>{{$message->message}}</div>
                                    <div class="text-end"> <i>{{$message->created_at->diffForHumans()}}</i></div>
                                </div>
                                @endif
                            </div>
                            <div class="col-6 text-end row">
                                @if($message->sender_id == Auth()->user()->id)
                                <div class="col-10 bg-light p-3">
                                    <div>{{$message->message}}</div>
                                    <div class="text-end">{{$message->created_at->diffForHumans()}}</div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex justify-content-end">
                                        <form action="{{route('message.destroy',$message->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="layer w-100">
                    <form action="{{route('message.store')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="message" class="form-control" placeholder="Say something ...">
                            <button class="input-group-text btn-info" type="submit"><i class="fa fa-paper-plane"></i></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
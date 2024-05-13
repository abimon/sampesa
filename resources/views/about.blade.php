@extends('layouts.app',['title'=>'About Us'])
@section('content')
<style>
    
</style>
<div class="banner-bottom">
    <section class="about-content">
        <div class="container">
            <!-- Intro Content -->
            <div class="row">
                <div class="col-md-6">
                    <h3>About Sampesa Group Limited</h3>
                    <p style="line-height: 2;">
                        Sampesa Agency Limited is a registered firm in Kenya that deals with Property Development and Real Estates investment/ Management. The company has the following Departments namely:-
                    </p>
                    <p style="padding-left: 50px;"><span class="fa fa-check"></span> Credit Services Department.</p>
                    <p style="padding-left: 50px;"><span class="fa fa-check"></span> Property Development Department.</p>
                    <p style="padding-left: 50px;"><span class="fa fa-check"></span> Asset Valuation Department.</p>
                    <p style="padding-left: 50px;"><span class="fa fa-check"></span> Asset/Property Management Department.</p>
                    <p style="padding-left: 50px;"><span class="fa fa-check"></span> Architectural Designs Department.</p>
                    <p style="padding-left: 50px;"><span class="fa fa-check"></span> Private Equity Department.</p>
                    <p style="padding-left: 50px;"><span class="fa fa-check"></span> Property Value Addition Department.</p>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <div class="hover01 column">
                            <div>
                                <figure><img class="img-responsive" src="{{asset('storage/images/samlogo.png')}}" alt="" style="height: 350px; width: 100%; object-fit: scale-down;"></figure>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <p style="line-height: 2;">
                Our Company started in year 2003 being incorporated in 2009 and in conjunction with contractors and investors, it has been able to provide opportunity to property and land owners with big dreams of owning rental houses to achieve them via this program. Our goal is to exceed the expectations of every client by offering outstanding customer service, increased flexibility, and greater value, thus optimizing system functionality and improving operation efficiency.
            </p>
        </div>
        <div class="container">
            <h3 style="padding-top: 1em;">Our Vision</h3>
            <p>To provide financial solutions of the highest quality and deliver value to our customers.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> To always strive to be creative and innovative in our service delivery.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> To adapt to the dynamic market requirements.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> Personalized touch services and nationwide coverage.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> To surpass our clients’ expectations through our commitment and an understanding of our clients’ needs.</p>
            <h3 style="padding-top: 1em;">Our Mission</h3>
            <p>To enlighten the clients’ interests on the benefits of investing in property establishment.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> To ensure clients get better access to financial support from the bank.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> To enlighten the clients’ interests on the benefits of investing in property establishments.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> Provide managerial strategies for their property.</p>
            <p style="padding-left: 20px;"><span class="fa fa-check"></span> To effectively use volunteers as a major factor in helping to learn.</p>
        </div>
    </section>
    <section class="testimonials" style="margin-bottom: 0px;">
        <h2 class="text-center">What Our Customers Say</h2>
        <?php $clients = [
            [
                'name' => 'Joseph Waweru - Happy Landlord',
                'statement' => "My interactions with them have been satisfying. I'm happy with how openly I can communicate with the property management personnel"
            ],
            [
                'name' => 'James Njuguna - Happy Landlord',
                'statement' => 'My life is made very simple by the team that maintains my property because they are helpful and professional as always.'
            ],
            [
                'name' => 'Brian Omondi',
                'statement' => 'I really appreciate your expertise and excellent client service.Your attention to detail and willingness to go above and above to fulfil my request impressed me.You can bet that I will recommend you to my family and friends.'
            ],
            [
                'name' => 'Kevin Maina',
                'statement' => 'They assisted me in my search for a home and even a place to work.Their services are good. I endorse using this business for your support or query.'
            ]
        ]; ?>
        <p class="text-center">Here's what some of our happy customers have to say about their experience with us:</p>
        <div class="container" style="padding-bottom: 0px;">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($clients as $c=>$client)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="{{$c==0?'active':''}}" aria-current="true" aria-label="Slide {{$c+1}}"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($clients as $k=>$client)
                    <div class="bg-dark text-light fw-bold text-center p-5 carousel-item {{$k==0?'active':''}}">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <div class="d-block p-5">
                            <p class="text-muted">{{$client['statement']}}</p>
                            <h5>~ {{$client['name']}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Our Customers -->
    <section class="customers" style="padding-top: 2em;margin-bottom:-100px!important;">
        <h3 class="text-center">Our Staff</h3>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="hover01 column">
                        <div>
                            <figure><img " src="{{asset('storage/images/user10.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="cust1"></h4>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="hover01 column">
                        <div>
                            <figure><img  src="{{asset('storage/images/user2.jpeg')}}" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="cust1"></h4>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="hover01 column">
                        <div>
                            <figure><img  src="{{asset('storage/images/user3.jpeg')}}" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="cust1"></h4>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="hover01 column">
                        <div>
                            <figure><img  src="{{asset('storage/images/user6.jpeg')}}" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="cust1"></h4>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="hover01 column">
                        <div>
                            <figure><img  src="{{asset('storage/images/user5.jpeg')}}" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="cust1"></h4>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="hover01 column">
                        <div>
                            <figure><img src="{{asset('storage/images/user9.jpeg')}}" alt=""></figure>
                        </div>
                    </div>
                    <h4 class="cust1"></h4>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>

@endsection
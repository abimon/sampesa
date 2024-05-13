<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/css/blink.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/css/team.css')}}" />
    <link rel="stylesheet" href="{{asset('storage/css/style2.css')}}" />
    <title>SAMPESA GROUP | {{$title}}</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-436446054"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MFMM41E546"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-436446054');

        gtag('event', 'conversion', {
            'send_to': 'AW-436446054/7pkACInN6ssYEObGjtAB'
        });

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MFMM41E546');
    </script>


</head>

<body>
    <!-- <div class="loader hide">
        <div class="ring">
            <h1 style="color:black;">Loading...</h1>
        </div>
    </div> -->
    <div class="nav_bar w-100">
        <nav>
            <a class="navbar-brand" href="/">
                <div class="logo">
                    <img src="{{asset('storage/images/samlg.png')}}" alt="Logo Image" style="height:80px; width:80px;">
                </div>
            </a>
            <ul class="nav-links">
                <li class="m_nav_item nav-collapse" id="moble_nav_item_1">
                    <a href="/services" class="link link--kumya {{request()->path()=='services'?'fw-bold':''}}">
                        <span data-letters="">Services</span>
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class='dropdown-item'>
                            <a href="/property_development" class="dlink w-100">Property Development</a>
                        </li>
                        <li class='dropdown-item'>
                            <a href="/borehole-drilling" class="dlink w-100">Borehole Drilling</a>
                        </li>
                        <li class='dropdown-item'>
                            <a href="" class="dlink w-100">Architectural Drawings</a>
                        </li>
                        <li class='dropdown-item'>
                            <a href="/bio-gas" class="dlink w-100">Biogas Installation</a>
                        </li>
                        <li class='dropdown-item'>
                            <a href="/credit_services" class="dlink w-100">Credit Services/Loans</a>
                        </li>
                        <li class='dropdown-item'>
                            <a href="/property-value-addition" class="dlink w-100">Property Value Addition</a>
                        </li>
                        <li class='dropdown-item'>
                            <a href="/asset_valuation" class="text-light dlink w-100">Asset Valuation</a>
                        </li>
                        <li class='dropdown-item'>
                            <a href="/loan-services" class="text-light dlink w-100">Loan Guarantor services</a>
                        </li>

                        <li class='dropdown-item'>
                            <a href="/property_management" class="text-light dlink w-100">Property Management</a>
                        </li>
                    </ul>
                </li>
                <li class="m_nav_item nav-collapse" id="moble_nav_item_3">
                    <a href="/about" class="link link--kumya {{request()->path()=='about'?'fw-bold':''}}">
                        <span data-letters="">About</span>
                    </a>
                </li>

                <li class="m_nav_item nav-collapse" id="moble_nav_item_4">
                    <a href="../store.php?token=store" class="link link--kumya {{request()->path()=='store'?'fw-bold':''}}">
                        <span data-letters="">Store</span>
                    </a>
                </li>
                <li class="m_nav_item nav-collapse" id="moble_nav_item_2">
                    <a href="/projects" class=" link link--kumya {{request()->path()=='projects'?'addrs':''}}">
                        <span data-letters="">Projects</span>
                    </a>
                </li>
                <li class="m_nav_item nav-collapse" id="moble_nav_item_6">
                    <a href="/tenders" class="link link--kumya {{request()->path()=='tenders'?'addrs':''}}">
                        <span data-letters="">Tenders</span>
                    </a>
                </li>
                <li class="m_nav_item nav-collapse" id="moble_nav_item_1">
                    <a href="/resources" class="link link--kumya {{request()->path()=='resources'?'addrs':''}}">
                        <span data-letters="">Resources</span>
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu bg-dark">
                        <li class="dropdown-item">
                            <a href="/blog" class="dlink text-light w-100">
                                Blog
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="/gallery" class="dlink text-light w-100">Gallery</a>
                        </li>
                    </ul>
                </li>

                <li class="m_nav_item nav-collapse" id="moble_nav_item_6">
                    <a href="../career.php?token=career" class="link link--kumya">
                        <span data-letters="">Career</span>
                    </a>
                </li>
                <li class="m_nav_item nav-collapse" id="moble_nav_item_2">
                    <a href="../contact.php?token=contact" class="link link--kumya">
                        <span data-letters="">Contact</span>
                    </a>
                </li>
                <li class="m_nav_item nav-collapse-left" id="moble_nav_item_6 ">
                    <a href="#" data-toggle="modal" data-target="#myModal2" class="link link--kumya">
                        <span data-letters="">customer</span>
                    </a>
                </li>
                <li class="m_nav_item nav-collapse-right" id="moble_nav_item_6">
                    <a href="projects/new-investor.php" class="link link--kumya">
                        <span data-letters="">Investor</span>
                    </a>
                </li>

                @guest
                <a href="{{route('login')}}" data-toggle="modal" data-target="#myModal2" id="login-btn">
                    <span data-letters="">
                        <button class="login-button">LOG IN</button>
                    </span>
                </a>
                @else
                <li class="m_nav_item nav-collapse-right" id="moble_nav_item_6">
                    <a href="/dashboard" class="link link--kumya">
                        <span data-letters="">Account</span>
                    </a>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
    <div class="mb-4">
        @yield('content')
    </div>
    <div class="">
        <div class="row p-5" style="background: #211A38; color:#FFFFFF;">
            <div class="col-md-4 w3agile_footer_grid">
                <h3 style="color: #FFFFFF">Contacts</h3>
                <p><a href="tel:+254726717120" class="text-decoration-none text-light"><span class="bi bi-telephone-fill" style="padding-right: 10px;"></span> (+254) 0726 717 120</a></p>
                <p><a href="tel:+254724062218" class="text-decoration-none text-light"><span class="bi bi-telephone-fill" style="padding-right: 10px;"></span> (+254) 0724 062 218</a></p>
                <!--<p>0724062218</p>-->
                <p><a href="mailto:info@sampesagroup.com" class="text-decoration-none text-light"><span class="bi bi-envelope-fill" style="padding-right: 10px;"></span> info@sampesagroup.com</a></p>
                <p class="text-light"><span class="bi bi-geo-alt-fill" style="padding-right: 10px;"></span>
                    Global Trade Center(GTC) 14<sup>th</sup> floor<br>
                    Intersection of Waiyaki Way and Chiromo Lane <br>
                    Nairobi, Kenya</p>
            </div>
            <div class="col-md-5 w3agile_footer_grid">
                <h3 style="color: #FFFFFF">Locate Us</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.30229418104116!2d36.80836374419173!3d-1.2709844117745908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f176ceaf30a91%3A0x6e99c375b66381be!2sGlobal%20Trade%20Center%20Office%20Tower!5e0!3m2!1sen!2snl!4v1706770477038!5m2!1sen!2snl" style="border:0; width:100%;height:80%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-3 w3agile_footer_grid">
                <h3 style="color: #FFFFFF">Links</h3>
                <ul style="list-style: none;">
                    <li class="mb-3"><a class="text-muted fw-bold text-decoration-none" href="../index.php">Home</a></li>
                    <li class="mb-3"><a class="text-muted fw-bold text-decoration-none" href="../about.php">About</a></li>
                    <li class="mb-3"><a class="text-muted fw-bold text-decoration-none" href="../services.php">Services</a></li>
                    <li class="mb-3"><a class="text-muted fw-bold text-decoration-none" href="../contact.php">Contact</a></li>
                </ul>
            </div>

        </div>
        <div class="row bg-dark pt-3">
            <div class="col-md-8">
                <p class="ps-5 text-light">&copy; {{date('Y')}} SAMPESA GROUP LTD. All rights reserved </p>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-end">
                    <div class="me-5">
                        <a class="social-linkedin text-light" href="#">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="me-5">
                        <a class="social-twitter text-light" href="#">
                            <i class="bi bi-twitter" aria-hidden="true"></i>
                            <div class="tooltip"><span>Twitter</span></div>
                        </a>
                    </div>
                    <div class="me-5">
                        <a class="social-google text-light" href="#">
                            <i class="bi bi-google" aria-hidden="true"></i>
                            <div class="tooltip"><span>Google+</span></div>
                        </a>
                    </div>
                    <div class="me-5">
                        <a class="social-facebook text-light" href="#">
                            <i class="bi bi-pinterest" aria-hidden="true"></i>
                            <div class="tooltip"><span>Pinterest</span></div>
                        </a>
                    </div>
                    <div>
                        <a class="social-instagram text-light" href="#">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                            <div class="tooltip"><span>Instagram</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script type="text/javascript" src="{{asset('storage/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <script src="{{asset('storage/js/jquery.vide.min.js')}}"></script>
    <script src="{{asset('storage/js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>

    <!-- Stats-Number-Scroller-Animation-JavaScript -->
    <script src="{{asset('storage/js/waypoints.min.js')}}"></script>
    <script src="{{asset('storage/js/counterup.min.js')}}"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000,
            });
        });
    </script>
    <!-- //Stats-Number-Scroller-Animation-JavaScript -->

    <!-- flexSlider -->
    <link rel="stylesheet" href="{{asset('storage/css/flexslider.css')}}" type="text/css" media="screen" property="" />
    <script defer src="{{asset('storage/js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
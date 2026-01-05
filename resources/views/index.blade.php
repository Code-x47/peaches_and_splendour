<!DOCTYPE HTML>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dimma Weds ChukwuEbuka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="og:description" content="Idimma & Chukwuebuka’s wedding website featuring ceremony details, live streaming links, love story, photos, and celebration moments.">


    <meta property="og:title" content="Idimma & Chukwuebuka">
    
    <meta property="og:image" content="https://dimma-ebuka-2026.vercel.app/images/img3.jpg">
    <meta property="og:url" content="https://dimma-ebuka-2026.vercel.app/">
    <meta property="og:type" content="website">



    <meta name="keywords" content="wedding template, wedding planner, wedding website, event organizer, wedding coordinator, wedding photographer, modern wedding template, bootstrap wedding theme, responsive wedding template, minimal wedding design">
    <meta name="author" content="John~Doxzy">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
        #countdown {
            background-size: cover;       
            background-position: center;  
            background-repeat: no-repeat; 
            height: 400px;                

        }

        #seeyou {
            background-size: cover;       
            background-position: center;  
            background-repeat: no-repeat; 
            height: 400px;

        }



        
       
        .live-button-container {
            position: relative;
            display: inline-block;
            text-align: center;
            margin-top: 30px;
            left: 30%;
        }

        .live-button {
            position: relative;
            padding: 14px 35px;
            font-size: 18px;
            font-weight: 700;
            color: #ffffff;
            background: linear-gradient(135deg, #ff0844 0%, #ff4b81 100%);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 10px 30px rgba(255, 8, 68, 0.4);
            overflow: hidden;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .live-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 8, 68, 0.6);
        }

        .live-button:active {
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(255, 8, 68, 0.5);
        }

        .live-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .live-button:hover::before {
            width: 300px;
            height: 300px;
        }

        .live-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            background: #ffffff;
            border-radius: 50%;
            margin-right: 10px;
            animation: pulse 1.5s ease-in-out infinite;
            box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
            }
            50% {
                box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
            }
        }

        .ripple {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 50px;
            pointer-events: none;
        }

        .ripple::before,
        .ripple::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            border: 3px solid rgba(255, 8, 68, 0.6);
            border-radius: 50px;
            transform: translate(-50%, -50%);
            animation: ripple-animation 2s ease-out infinite;
        }

        .ripple::after {
            animation-delay: 1s;
        }

        @keyframes ripple-animation {
            0% {
                width: 100%;
                height: 100%;
                opacity: 1;
            }
            100% {
                width: 140%;
                height: 180%;
                opacity: 0;
            }
        }

        .button-text {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .platform-icons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            justify-content: center;
        }

        .platform-icon {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .facebook-icon {
            background: #1877f2;
            color: white;
        }

        .youtube-icon {
            background: #ff0000;
            color: white;
        }

        .platform-icon:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .info-text {
            color: white;
            text-align: center;
            margin-top: 10px;
            font-size: 13px;
            opacity: 0.9;
            font-weight: 500;
        }
        @media (min-width: 800px) {
        .live-button-container {
            
            left: 35%;
        }

        }
        @media (max-width: 480px) {
            .live-button {
                padding: 12px 28px;
                font-size: 16px;
                letter-spacing: 1.5px;
            }

            .live-indicator {
                width: 9px;
                height: 9px;
                margin-right: 8px;
            }

            .platform-icon {
                width: 35px;
                height: 35px;
                font-size: 16px;
            }

            .info-text {
                font-size: 12px;
            }
        }

    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-heart">
            <div></div>
        </div>
    </div>

  

    <!-- Main -->
    <div id="oliven-page"> <a href="#" class="js-oliven-nav-toggle oliven-nav-toggle"><i></i></a>
        <!-- Sidebar Section -->
        <aside id="oliven-aside">
            <!-- Logo -->
            <div class="oliven-logo">
                <a href="index-2.html">
                    <img src="images/logo.png" alt="">
                    <span>Mma <small>Weds</small> ChukwuEbuka</span>
                    <h6>14.2.2026</h6>
                </a>
            </div>
            <!-- Menu -->
            <nav class="oliven-main-menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#couple">Couple</a></li>
                    <li><a href="#story">Our Story</a></li>
                    <li><a href="#friends">Friends</a></li>
                    <li><a href="#organization">Organization</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#whenwhere">When & Where</a></li>
                    <li><a href="#rsvp">R.S.V.P</a></li>
                    <li><a href="#gift">Gift Registry</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
            <!-- Sidebar Footer -->
            <div class="footer1"> <span class="separator"></span>
                <p>Mma weds Chukwuebuka<br />14 February 2026, Enugu State, Nigeria</p>
                <div class="oliven-logo">
                <a href="index-2.html">
                    <img src="images/logo.png" alt="">
                    <span>Designed & Developed <small>By</small> John~Doxzy</span>
                </a>

                
                  <p style="margin-top: 10px;">
                        <a href="mailto:johnchidozie320@gmail.com" style="color:#bd945a; text-decoration:none; margin-right:15px;">
                            <i class="fa fa-envelope" style="color:#bd945a; text-decoration:none;"></i> johnchidozie320@gmail.com
                        </a>

                        <a href="tel:+2349026380679" style="color:#bd945a; text-decoration:none;">
                            <i class="fa fa-phone" style="color:#bd945a; text-decoration:none;"></i> +234-902-638-0679
                        </a>
                  </p>

                    
               </div>


            </div>
        </aside>
        <!-- Content Section -->
        <div id="oliven-main">
            <!-- Header & Slider -->
            <header id="home" class="header valign bg-img parallaxie" data-background="images/story2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center caption">
                            <h1 class="animate-box" data-animate-effect="fadeInUp">Mma & Chukwuebuka</h1>
                            <h5 class="animate-box" data-animate-effect="fadeInUp">14 February, 2026 –Enugu State, Nigeria</h5> 
                        </div>
                    </div>

         <div class="live-button-container">
                            <div class="ripple"></div>
                            <button class="live-button" id="liveButton">
                                <span class="button-text">
                                    <span class="live-indicator"></span>
                                    Go LIVE
                                </span>
                            </button>
                            <div class="platform-icons">
                                <div class="platform-icon facebook-icon" id="facebookIcon" title="Go Live on Facebook">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </div>
                                <div class="platform-icon youtube-icon" id="youtubeIcon" title="Go Live on YouTube">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                    </svg>
                                </div>
                            </div>
                            <p class="info-text">Choose your platform</p>
                </div>
 

                    <div class="row">
                        <div class="col-md-12">
                            <div class="arrow bounce text-center">
                                <a href="index-2.html#couple"> <i class="ti-heart"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Couple -->
            <div id="couple" class="bridegroom clear section-padding bg-pink">
                <div class="container">
                    <div class="row mb-60">
                        <div class="col-md-6">
                            <div class="item toright mb-30 animate-box" data-animate-effect="fadeInLeft">
                                <div class="img"> <img src="images/Idimma1.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Mma Godsfavour <i class="ti-heart"></i></h6> <span>The Bride</span>
                                        <p>A woman of beauty, purpose, and compassion, she embodies love in its purest form and steps into forever with confidence and grace.</p>
                                        <div class="social">
                                            <div class="full-width">
                                                <a href="#0" class="icon"> <i class="ti-facebook"></i> </a>
                                                <a href="#0" class="icon"> <i class="ti-twitter"></i> </a>
                                                <a href="#0" class="icon"> <i class="ti-instagram"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="item mb-30 animate-box" data-animate-effect="fadeInRight">
                                <div class="img"> <img src="images/Buka-T.jpg" alt=""> </div>
                                <div class="info valign">
                                    <div class="full-width">
                                        <h6>Anthony Chukwuebuka <i class="ti-heart"></i></h6> <span>The Groom</span>
                                        <p> 
                                            A man of integrity, vision, and quiet strength, he brings balance, loyalty, and love into this union, embracing forever with confidence.
                                        </p>
                                        <div class="social">
                                            <div class="full-width">
                                                <a href="#0" class="icon"> <i class="ti-facebook"></i> </a>
                                                <a href="#0" class="icon"> <i class="ti-twitter"></i> </a>
                                                <a href="#0" class="icon"> <i class="ti-instagram"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                            <h3 class="oliven-couple-title">We Are getting married!</h3>
                            <h4 class="oliven-couple-subtitle" style="margin-top: 30px;">February 14, 2026 — Enugu State, Nigeria</h4> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Countdown -->
            <div id="countdown" class="section-padding bg-img bg-fixed" data-background="images/story4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="section-head col-md-12">
                            <h4>We will become a family in</h4> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><span id="days"></span>Days</li>
                                <li><span id="hours"></span>Hours</li>
                                <li><span id="minutes"></span>Minutes</li>
                                <li><span id="seconds"></span>Seconds</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Story -->
            <div id="story" class="story section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 mb-30">
                            <div class="story-img animate-box" data-animate-effect="fadeInLeft">
                                <div class="img"> <img src="images/story3.jpg" class="img-fluid" alt=""> </div>
                               <div class="story-img-2 story-wedding" style="background-image: url('images/newlogo.png');"></div>
                            </div>
                        </div>
                        <div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
                            <h4 class="oliven-story-subtitle">Our love.</h4>
                            <h3 class="oliven-story-title">Our Story</h3>
                            <p>
                                From the very first moment our paths crossed, something quietly shifted. What began as a simple conversation soon became a connection that felt familiar, comforting, and unexpectedly deep. In each other, we found laughter that came easily,
                                conversations that stretched long into the night, and a sense of peace that made the world feel a little softer. Without realizing it, friendship gently gave way to love.
                            </p>
                            <p>
                                As time passed, our journey was shaped by growth, patience, and shared dreams. Through life’s changing seasons, we celebrated the joys and supported each other through challenges, 
                                learning that love lives not only in grand moments but in the daily choice to show up, listen, and care.
                            </p>
                            <p>
                                Today, we stand hand in hand, grateful for the journey that brought us here and excited for the future ahead. Our story is still being written, but one thing is certain:
                                whatever comes next, we will face it together—with love as our foundation, and forever as our promise.
                            </p>
                            <h4>December 6th, 2025, We Said Yes!</h4>
                            <p>
                                On December 6th, 2025, a simple question turned into a lifetime promise. In that beautiful moment, surrounded by love and certainty, we chose each other and said yes to forever. It was the beginning of a new chapter—one filled with shared dreams, 
                                endless support, and a love we knew would only continue to grow.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Friends -->
            <div id="friends" class="friends section-padding bg-pink">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-30"> 
                            <span class="oliven-title-meta">Our best friends ever</span>
                            <h2 class="oliven-title mb-30">Thanks for being there</h2> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="img"> <img src="images/friends/daby.jpg" alt=""> </div>
                                    <div class="info valign">
                                        <div class="full-width">
                                            <h6>Dabby</h6><span>Bridesmaids</span>
                                            <p>Their friends have filled their journey with laughter, support, and unforgettable memories,
                                                 standing by their side through every step of love and life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img"> <img src="images/friends/nomso.jpg" alt=""> </div>
                                    <div class="info valign">
                                        <div class="full-width">
                                            <h6>Chukwunomso Ibeh</h6><span>Groomsmen</span>
                                            <p>
                                                 Their friends have filled their journey with laughter, support, and unforgettable memories,
                                                 standing by their side through every step of love and life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img"> <img src="images/friends/wfrnd2.jpeg" alt=""> </div>
                                    <div class="info valign">
                                        <div class="full-width">
                                            <h6>Vanessa Brown</h6><span>Bridesmaids</span>
                                            <p>
                                                 Their friends have filled their journey with laughter, support, and unforgettable memories,
                                                 standing by their side through every step of love and life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img"> <img src="images/friends/frnd1.jpeg" alt=""> </div>
                                    <div class="info valign">
                                        <div class="full-width">
                                            <h6>Matthew Brown</h6><span>Groomsmen</span>
                                              <p>
                                                 Their friends have filled their journey with laughter, support, and unforgettable memories,
                                                 standing by their side through every step of love and life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img"> <img src="images/friends/wfrnd1.jpeg" alt=""> </div>
                                    <div class="info valign">
                                        <div class="full-width">
                                            <h6>Fredia Halle</h6><span>Bridesmaids</span>
                                              <p>
                                                 Their friends have filled their journey with laughter, support, and unforgettable memories,
                                                 standing by their side through every step of love and life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="img"> <img src="images/friends/frnd3.webp" alt=""> </div>
                                    <div class="info valign">
                                        <div class="full-width">
                                            <h6>Pablo Dante</h6><span>Groomsmen</span>
                                              <p>
                                                 Their friends have filled their journey with laughter, support, and unforgettable memories,
                                                 standing by their side through every step of love and life.
                                             </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- See you -->
            <div id="seeyou" class="seeyou section-padding bg-img bg-fixed" data-background="images/story4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="section-head col-md-12 text-center"> 
                            <span><i class="ti-heart"></i></span>
                            <h4>Looking forward to see you!</h4>
                            <h3>14.2.2026</h3> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Organization -->
            <div id="organization" class="organization section-padding bg-pink">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-30"> 
                            <span class="oliven-title-meta">Wedding</span>
                            <h2 class="oliven-title">Organization</h2> 
                        </div>
                    </div>
                    <div class="row bord-box bg-img" data-background="images/img3.jpg">
                        <div class="col-md-3 item-box">
                            <h2 class="custom-font numb">01</h2>
                            <h6 class="title">Church Service</h6>
                            <p>
                                Our wedding begins with a sacred church service where we exchange vows before God, 
                                family, and friends, seeking His blessings as we begin our new life together.
                            </p>
                        </div>
                        <div class="col-md-3 item-box">
                            <h2 class="custom-font numb">02</h2>
                            <h6 class="title">Photo Session</h6>
                            <p>
                                Following the church service, we will enjoy a photo session with family and friends, 
                                capturing joyful moments that preserve the love and memories of our special day.
                            </p>
                        </div>
                        <div class="col-md-3 item-box">
                            <h2 class="custom-font numb">03</h2>
                            <h6 class="title">Reception</h6>
                            <p>
                                The celebration continues with a joyful wedding reception where family and friends gather
                                 to share laughter, music, and love as we celebrate our union together.
                            </p>
                        </div>
                        <div class="col-md-3 item-box">
                            <h2 class="custom-font numb">04</h2>
                            <h6 class="title">Departure</h6>
                            <p>
                                Our special day concludes with a heartfelt farewell, as we depart surrounded by love, blessings,
                                 and warm wishes from family and friends, cherishing the memories.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <div id="gallery" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-30"> 
                            <span class="oliven-title-meta">Gallery</span>
                            <h2 class="oliven-title">Our Memories</h2> 
                        </div>
                    </div>
                    <div class="row">
                        <ul class="col list-unstyled list-inline mb-0 gallery-menu" id="gallery-filter">
                            <li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".prewedding">Pre-Wedding</a></li>
                            <li class="list-inline-item"><a class="" data-filter=".party">Wedding Pictures</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="row gallery-filter mt-3">
                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/pre4.webp" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/pre4.webp" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> 
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-md-4 gallery-item party">
                            <a href="images/gallery/img9.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/img9.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Wedding Party</h4> </div>
                                </div>
                            </a>
                        </div> -->


<!-- 
                        <div class="col-md-4 gallery-item party coming-soon">
                            <div class="gallery-box placeholder-box">
                                <div class="gallery-img placeholder animate-placeholder">
                                    <div class="placeholder-message">
                                        <h4>Wedding Pictures</h4>
                                        <p>Will be uploaded after the wedding 💍</p>

                                        <div class="countdown" data-wedding-date="2026-02-14T00:00:00">
                                            <span><strong class="days">0</strong><small>Days</small></span>
                                            <span><strong class="hours">0</strong><small>Hours</small></span>
                                            <span><strong class="minutes">0</strong><small>Minutes</small></span>
                                            <span><strong class="seconds">0</strong><small>Seconds</small></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                        <div class="col-md-4 gallery-item party coming-soon">
                            <div class="gallery-box placeholder-box">
                                <div class="gallery-img placeholder animate-love">
                                    <div class="placeholder-message">
                                        <!-- <span class="love-icon">💍</span> -->
                                          <span class="love-icon"><img src="images/ring5.png" width ="150" height ="84"></span>
                                        
                                        <h4>Our Big Day Is Coming</h4>
                                        <p class="love-text">
                                            These precious wedding moments will be shared<br>
                                            right after we say <strong>“I do”</strong> 💕
                                        </p>

                                        <div class="countdown" data-wedding-date="2026-02-14T10:00:00">
                                            <span><strong class="days">0</strong><small>Days</small></span>
                                            <span><strong class="hours">0</strong><small>Hours</small></span>
                                            <span><strong class="minutes">0</strong><small>Minutes</small></span>
                                            <span><strong class="seconds">0</strong><small>Seconds</small></span>
                                        </div>

                                        <p class="love-note">Thank you for celebrating love with us 🤍</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/img3.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/img3.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-md-4 gallery-item party">
                            <a href="images/gallery/story1.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/story1.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Wedding Party</h4> </div>
                                </div>
                            </a>
                        </div> -->
                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/story2.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/story2.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> </div>
                                </div>
                            </a>
                        </div>
                        <!-- <div class="col-md-4 gallery-item party">
                            <a href="images/gallery/img4.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/img4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Wedding Party</h4> </div>
                                </div>
                            </a>
                        </div> -->

                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/pre9.webp" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/pre9.webp" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> 
                                    </div>
                                </div>
                            </a>
                        </div>
<!-- 
                           <div class="col-md-4 gallery-item party">
                            <a href="images/gallery/img4.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/img4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Wedding Party</h4> </div>
                                </div>
                            </a>
                        </div> -->


                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/pre11.webp" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/pre11.webp" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> 
                                    </div>
                                </div>
                            </a>
                        </div>


                            <!-- <div class="col-md-4 gallery-item party">
                            <a href="images/gallery/img4.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/img4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Wedding Party</h4> </div>
                                </div>
                            </a>
                        </div> -->

                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/pre10.webp" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/pre10.webp" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> 
                                    </div>
                                </div>
                            </a>
                        </div>


                           <!-- <div class="col-md-4 gallery-item party">
                            <a href="images/gallery/img4.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/img4.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Wedding Party</h4> </div>
                                </div>
                            </a>
                        </div> -->

                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/l1.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/l1.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> 
                                    </div>
                                </div>
                            </a>
                        </div>

                        
                        <div class="col-md-4 gallery-item prewedding">
                            <a href="images/gallery/story1.jpg" class="img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img src="images/story1.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                    <div class="gallery-detail">
                                        <h4 class="mb-0">Pre-Wedding</h4> 
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- When & Where -->
            <div id="whenwhere" class="whenwhere section-padding bg-pink">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-30"> <span class="oliven-title-meta">Questions</span>
                            <h2 class="oliven-title">When & Where</h2> </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="whenwhere-img"> <img src="images/whenwhere/trads.jpeg" alt=""></div>
                                    <div class="content">
                                        <h5>Traditional Wedding</h5>
                                        <p><i class="ti-location-pin"></i> SURV.Tony Aguguesi's compound, Aguguesi Family in Umuomeke Ubahaibi Ofeahia Autonomous Community, Ibiasoegbe, Oru West LGA, Imo State.</p>
                                        <p><i class="ti-time"></i> <span>10:00am prompt</span></p>

                                        <p><i class="ti-direction"></i> <a href="https://maps.app.goo.gl/LVko4WmsgV7gXY2u6">See Location</a></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="whenwhere-img"> <img src="images/whenwhere/3.jpg" alt=""></div>
                                    <div class="content">
                                        <h5>Church Wedding</h5>
                                        <p><i class="ti-location-pin"></i> ST. ANDREW ANGLICAN CHURCH Hillview Trans-Ekulu Enugu</p>
                                        <p><i class="ti-time"></i> <span>10:00am</span></p>

                                        <p><i class="ti-direction"></i> <a href="https://maps.app.goo.gl/pPGdApbKnfokTZwS7">See Location</a></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="whenwhere-img"> <img src="images/whenwhere/1.jpg" alt=""></div>
                                    <div class="content">
                                        <h5>Reception</h5>
                                        <p><i class="ti-direction-alt"></i>Filbon Hotel, Chime Avenue New Haven Enugu</p>

                                        <p><i class="ti-time"></i> <span>1:00pm</span></p>

                                        <p><i class="ti-direction"></i> <a href="https://maps.app.goo.gl/RhqQjoDN8itNhU3V9">See Location</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Confirmation -->
            <div id="rsvp" class="section-padding bg-img bg-fixed" data-background="images/banner-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-3 bg-white p-40"> <span class="oliven-title-meta text-center">Will you attend?</span>
                            <h2 class="oliven-title text-center">R.S.V.P</h2>

                           <div class="contact__msg alert" style="display:none;"></div>

                            <br>
                            <form class="contact__form" method="post" id="" action="{{route('save.email')}}">
                                @csrf
                            <!-- form message -->

                            <!-- form element -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Name" required> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Email" required> </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="phone" id="phone" type="text" class="form-control" placeholder="WhatsApp Number" required> </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input name="btn_submit" type="submit" class="btn buttono" value="SEND"> 
                                    </div>
                                </div> 
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
           
        
            <!-- Footer -->
            <div class="footer2">
                <div class="oliven-narrow-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>
                                <a href="index-2.html"><img src="images/logo.png" alt=""><span>Dimma <small>&</small> Chukwuebuka</span></a>
                            </h2>
                            <p class="copyright">February 14, 2026 – Enugu State, Nigeria</p>
                        </div>
                         <div class="col-md-12 text-center" style="margin-top: 60px;">
                            <p>© 2026 Dimma & ChukwuEbuka. All Rights Reserved.</p>
                            <h2>
                                <a href="#"><span style="color: #bd945a;">Designed <small>& Developed By</small> John~Doxzy</span></a>
                            </h2>


                  <p style="margin-top: 10px;">
                        <a href="mailto:johnchidozie320@gmail.com" style="color:#bd945a; text-decoration:none; margin-right:15px;">
                            <i class="fa fa-envelope"></i> johnchidozie320@gmail.com
                        </a>

                        <a href="tel:+2349026380679" style="color:#bd945a; text-decoration:none;">
                            <i class="fa fa-phone"></i> +234-902-638-0679
                        </a>
                  </p>

                        
                        </div>
                    
                    </div>
                </div>
            </div>
            
               
        </div>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/sticky-kit.min.js"></script>
        <script src="js/isotope.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>
    </div>


<script>
function startCountdown(el) {
  if (el.dataset.running) return;
  el.dataset.running = true;

  const targetDate = new Date(el.dataset.weddingDate).getTime();

  setInterval(() => {
    const now = Date.now();
    const diff = targetDate - now;
    if (diff <= 0) return;

    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
    const h = Math.floor((diff / (1000 * 60 * 60)) % 24);
    const m = Math.floor((diff / (1000 * 60)) % 60);
    const s = Math.floor((diff / 1000) % 60);

    el.querySelector(".days").textContent = d;
    el.querySelector(".hours").textContent = h;
    el.querySelector(".minutes").textContent = m;
    el.querySelector(".seconds").textContent = s;
  }, 1000);
}

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startCountdown(entry.target);
    }
  });
}, { threshold: 0.3 });

document.querySelectorAll(".countdown")
  .forEach(cd => observer.observe(cd));
</script>





<!-- <script>
document.querySelectorAll('.countdown').forEach(countdown => {
    const weddingDate = new Date(countdown.dataset.weddingDate).getTime();

    const updateCountdown = () => {
        const now = new Date().getTime();
        const distance = weddingDate - now;

        if (distance <= 0) {
            countdown.innerHTML = "<p>Today, we begin forever 💕</p>";
            return;
        }

        countdown.querySelector('.days').textContent =
            Math.floor(distance / (1000 * 60 * 60 * 24));
        countdown.querySelector('.hours').textContent =
            Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        countdown.querySelector('.minutes').textContent =
            Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        countdown.querySelector('.seconds').textContent =
            Math.floor((distance % (1000 * 60)) / 1000);
    };

    updateCountdown();
    setInterval(updateCountdown, 1000);
});



</script> -->



<!-- Your HTML ends here -->
</div> <!-- container -->
</div> <!-- rsvp section -->

<!-- JS for RSVP form -->
<script>
  const form = document.getElementById("rsvp_form");
  const message = document.getElementById("message");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const email = document.getElementById("email").value;
    const name = document.getElementById("name").value;
    const phone = document.getElementById("phone").value;

    try {
      const res = await fetch("http://127.0.0.1:8000/api/save_email", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ email, name, phone }),
      });

      const data = await res.json();

      if (!res.ok) {
        throw new Error(data.message || "Something went wrong");
      }

      // Show success message
      message.style.display = "block";
      message.textContent = "You're on the guest update list 💍";

      // Clear the form
      form.reset();

      // Hide the message after 3 seconds
      setTimeout(() => {
        message.style.display = "none";
      }, 3000);

    } catch (error) {
      message.style.display = "block";
      message.textContent = error.message;
      setTimeout(() => {
        message.style.display = "none";
      }, 3000);
    }
  });
</script>

    
</body>


</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fire Jobs</title>

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
</head>

<body>
    <div class="FireJob_Main">
        <div class="container">
            <header class="FireJob_home-header">
                <nav class="navbar navbar-expand-md">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.html"><img src="images/logo.png"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse  " id="collapsibleNavbar">
                            <ul class="navbar-nav  ml-auto   mt-lg-0 nav-rot">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#whoare">Who We Are</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#Numbers">By The Numbers</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#sPositions">Open Positions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Trailblazers">Trailblazers</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#Firejob_Perks">Perks</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#Firejob_Pillars">Pillars</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="FireJob_banner">
                <h1>Fire Jobs</h1>
                <div class="FireJob_banner_form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="FireJob_select">
                                <div class="dropdown">
                                    <span class="select-label">All Roles</span>
                                    <input type="hidden" name="cd-dropdown">
                                    <ul class="dropdown-list">
                                        <li>All Roles1</li>
                                        <li>All Roles2</li>
                                        <li>All Roles3</li>
                                        <li>All Roles4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="FireJob_select2">
                                <div class="dropdown2">
                                    <span class="select-label2">Type</span>
                                    <input type="hidden" name="cd-dropdown">
                                    <ul class="dropdown-list2">
                                        <li>Type1</li>
                                        <li>Type2</li>
                                        <li>Type3</li>
                                        <li>Type4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="FireJob_select3">
                                <div class="dropdown3">
                                    <span class="select-label3">Location</span>
                                    <input type="hidden" name="cd-dropdown">
                                    <ul class="dropdown-list3">
                                        <li>Location1</li>
                                        <li>Location2</li>
                                        <li>Location3</li>
                                        <li>Location4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="FireJob_search">
                                <button>SEARCH JOBS</button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="FireJob_best">
                                <h2>The Best Never Rest</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!---------- Header Close ----------->
    <div class="FireJob_body">
        <div class="FireJob_video" id="whoare">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="FireJob_video_box">
                            <video poster="images/video.png">
                                <source src=" #" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>Who we are</h2>
                        <p>TBNR is a top YouTube Production Company that manages the massive YouTube channels and
                            digital media brands of Preston and Brianna Arsement.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="FireJob_star" id="Numbers">
            <div class="container">
                <div class="FireJob_brand">
                    <h2>BRAND STATS</h2>
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="FireJob_Channels">
                                <h3>7</h3>
                                <span>YouTube Channels</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="FireJob_Channels">
                                <h3>70 million+</h3>
                                <span>Subscribers</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="FireJob_Channels">
                                <h3>18 billion+</h3>
                                <span>Lifetime Views</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="FireJob_Positions" id="sPositions">
            <div class="container">
                <div class="FireJob_Open">
                    <h2>Open Positions</h2>
                    <div class="FireJob_Positions_button" id="myBtnContainer">
                        <button class="btn Creative" onclick="filterSelection('Creative')"> Creative
                            <span>6</span></button>
                        <button class="btn Gaming" onclick="filterSelection('Gaming')"> Gaming <span>6</span></button>
                        <button class="btn Post" onclick="filterSelection('Post')"> Post-Production
                            <span>6</span></button>
                        <button class="btn Production" onclick="filterSelection('Production')"> Production
                            <span>6</span></button>
                        <button class="btn Department " onclick="filterSelection('Department')"> Art Department
                            <span>6</span></button>
                        <button class="btn Keeley" onclick="filterSelection('Keeley')"> Keeley Channel
                            <span>6</span></button>
                        <button class="btn Properties" onclick="filterSelection('Properties')"> Properties
                            <span>6</span></button>
                        <button class="btn Fire" onclick="filterSelection('Fire')"> Fire Games <span>6</span></button>
                        <button class="btn Resources" onclick="filterSelection('Resources')"> Human Resources
                            <span>6</span></button>
                        <button class="btn Information" onclick="filterSelection('Information')"> Information Technology
                            <span>6</span></button>
                        <button class="btn Operations" onclick="filterSelection('Operations')"> Operations
                            <span>6</span></button>
                        <button class="btn Sales" onclick="filterSelection('Sales')"> Sales/Marketing
                            <span>6</span></button>
                        <button class="btn active" onclick="filterSelection('all')"> Show all <span>6</span></button>
                    </div>
                    <!-- Portfolio Gallery Grid -->
                    <div class="FireJob_Portfolio">

                        <div class="row">
                            @if(isset($jobs) && count($jobs) > 0)
                            @foreach($jobs as $job)
                            <div class="col-lg-4  col-sm-6 col-xs-6 column Creative">
                                <div class="FireJob_glightbox">
                                    <div class="FireJob_glightbox_upere">
                                        <div class="FireJob_glightbox_img">
                                            <img src="images/Group.png">
                                        </div>
                                        <div class="FireJob_glightbox_dta">
                                            <h3>{{$job['name'] ?? '-'}}</h3>
                                            <ul>
                                                <li><img src="images/Ellips.png"> {{$job['custom_fields']['employment_type'] ?? '-'}}</li>
                                                <li><img src="images/Frame.png"> {{$job['offices'][0]['location']['name'] ?? '-'}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="FireJob_glightbox_low">
                                        <span>$150K+/yr</span>
                                        <a href="">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <!-- END GRID -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTFOLIO -->
        <div class="FireJob_Trailblazers" id="Trailblazers">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <h2>Trailblazers</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Nisl viverra viverra at in enim risus pharetra
                            praesent. Scelerisque facilisis aliquam amet eu sed. Non id sit turpis massa convallis odio.
                        </p>
                    </div>
                    <div class="col-lg-9">
                        <div class="owl-carousel">
                            <div class="item">
                                <div class="FireJob_item">
                                    <div class="FireJob_item_img"><img src="images/slider1.png"></div>
                                    <div class="FireJob_item_data">
                                        <h3>JON AYSON</h3>
                                        <h4><span>3</span> Year</h4>
                                        <ul>
                                            <li>Super power: <label>Controlling Elements</label></li>
                                            <li>Trophy: <label>Over Achiever</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="FireJob_item">
                                    <div class="FireJob_item_img"><img src="images/slider2.png"></div>
                                    <div class="FireJob_item_data">
                                        <h3>JON AYSON</h3>
                                        <h4><span>3</span> Year</h4>
                                        <ul>
                                            <li>Super power: <label>Controlling Elements</label></li>
                                            <li>Trophy: <label>Over Achiever</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="FireJob_item">
                                    <div class="FireJob_item_img"><img src="images/slider3.png"></div>
                                    <div class="FireJob_item_data">
                                        <h3>JON AYSON</h3>
                                        <h4><span>3</span> Year</h4>
                                        <ul>
                                            <li>Super power: <label>Controlling Elements</label></li>
                                            <li>Trophy: <label>Over Achiever</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="FireJob_item">
                                    <div class="FireJob_item_img"><img src="images/slider4.png"></div>
                                    <div class="FireJob_item_data">
                                        <h3>JON AYSON</h3>
                                        <h4><span>3</span> Year</h4>
                                        <ul>
                                            <li>Super power: <label>Controlling Elements</label></li>
                                            <li>Trophy: <label>Over Achiever</label></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="FireJob_Perks" id="FireJob_Perks">
            <div class="container">
                <div class="FireJob_Open">
                    <h2>Fire Perks</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Nisl viverra viverra at in enim risus pharetra praesent.
                    </p>
                    <div class="row ">
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks1.png">
                                </span>
                                <h4>100% Company paid Medical Insurance </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks2.png">
                                </span>
                                <h4>Company sponsored Dental and Vision Insurance</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks3.png">
                                </span>
                                <h4>401K with a 3% non-elective contribution</h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks4.png">
                                </span>
                                <h4>Flexible time off </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks5.png">
                                </span>
                                <h4>Company paid
                                    holidays </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks6.png">
                                </span>
                                <h4>Paid Parental
                                    Leave </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks7.png">
                                </span>
                                <h4>Short and Long Term Disability Insurance </h4>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3  d-flex align-items-stretch">
                            <div class="FireJob_col">
                                <span><img src="images/Perks8.png">
                                </span>
                                <h4>Quarterly Campfire Reviews </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="FireJob_Pillars_section" id="Firejob_Pillars">
            <div class="container">
                <h2>Fire Pillars are the foundation of everything created here - including careers.</h2>
                <h3>Fire Pillars</h3>
                <div class="FireJob_Pillars">
                    <div class="row ">
                        <div class="col-lg-4">
                            <div class="FireJob_Great">
                                <h4>Go Beyond Great</h4>
                                <ul>
                                    <li>Innovate & Replicate</li>
                                    <li>Challenge Your Best</li>
                                    <li>Quality Work > Time Soent</li>
                                    <li>Seek Criticism & Radical Candor</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="FireJob_Great">
                                <h4>Fuel Excitement</h4>
                                <ul>
                                    <li>Charitable initiatives</li>
                                    <li>Recognize Wins </li>
                                    <li>Have Fun, Be Weird</li>
                                    <li>Listen with empathy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="FireJob_Great">
                                <h4>Ignite Transformation</h4>
                                <ul>
                                    <li>Seek Discomfort</li>
                                    <li>Faith Over Fear</li>
                                    <li>Be Bold & Pursue Growth</li>
                                    <li>Spark Change Within Yourself &
                                        The Company</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------- Footer ----------->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="FireJob-Footer">
                        <div class="FireJob_footer-logo"><img src="images/logo.png"></div>
                        <div class="FireJob_footer-text">
                            <p>TBNR LLC is proud to be an Equal Opportunity Employer. We celebrate diversity and are
                                committed to an inclusive environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="FireJob_footer-nav">
                        <h3>QUICK LINKS</h3>
                        <ul>
                            <li><a href="">Who We Are</a></li>
                            <li><a href="">By The Numbers</a></li>
                            <li><a href="">Open Positions</a></li>
                            <li><a href="">Trailblazers</a></li>
                            <li><a href="">Perks</a></li>
                            <li><a href="">Pillars</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="FireJob_footer-nav">
                        <h3>LEGAL</h3>
                        <ul>
                            <li><a href="">TAB</a></li>
                            <li><a href="">TAB</a></li>
                            <li><a href="">TAB</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="FireJob_footer-social">
                        <h3>CONNECT</h3>
                        <ul>
                            <li><a href=""><img src="images/twt.png"></a></li>
                            <li><a href=""><img src="images/in.png"></a></li>
                            <li><a href=""><img src="images/yt.png"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                enter: true,
                autoplay: true,
                center: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,

                    },
                    768: {
                        items: 2,
                        nav: false,
                        center: false,
                    },
                    1000: {
                        items: 3,
                        margin: 10,
                        nav: false,
                    }
                }
            });
        })
    </script>

    <script>
        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('.FireJob_select').click(function() {
            $('.dropdown').toggleClass('active');
        });
        $('.dropdown-list li').click(function() {
            $('.select-label').text($(this).text());
        });
        $('.FireJob_select2').click(function() {
            $('.dropdown2').toggleClass('active');
        });
        $('.dropdown-list2 li').click(function() {
            $('.select-label2').text($(this).text());
        });
        $('.FireJob_select3').click(function() {
            $('.dropdown3').toggleClass('active');
        });
        $('.dropdown-list3 li').click(function() {
            $('.select-label3').text($(this).text());
        });
    });
</script>
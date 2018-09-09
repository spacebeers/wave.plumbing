<?php
    $content = new stdClass();
    $content->page_title = 'Wave Plumbing: Reliable, friendly Sussex based plumbers';
    $content->mobile = '07925 112306';
    $content->phone = '01903 204772';
    $content->email = 'chris@wave.plumbing';
    $content->checkatrade = 'https://www.checkatrade.com/ChrisPetersPlumbingBrighton/';
?>

<html>
    <head>
        <title><?=$content->page_title?></title>
        <meta name="description" content="Reliable, friendly Sussex based plumbers">
        <meta name="keywords" content="Reliable, friendly Sussex based plumbers">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body id="home">
        <header>
            <div class="container">
                <img src="assets/logo.1.png" alt="Wave plumbing logo image" />
                <nav>
                    <ul>
                        <li>
                            <a href="#home">Home</a>
                        </li>
                        <li>
                            <a href="#plumbing">Plumbing</a>
                        </li>
                        <li>
                            <a href="#bathrooms">Bathrooms</a>
                        </li>
                        <li>
                            <a href="#emergencies">Emergencies</a>
                        </li>
                        <li>
                            <a href="#recent-jobs">Recent jobs</a>
                        </li>
                        <li>
                            <a href="#contact-us">Contact us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section class="hero-banner">
            <div class="hero-contents">
                <h1>Welcome to Wave Plumbing</h1>
                <p>Reliable, friendly, Sussex based plumbers</p>
            </div>
        </section>

        <section class="strip" id="plumbing">
            <div class="container">
                <div class="constrainer">
                    <h2>Plumbing</h2>

                    <p>Wave offer a range of general plumbing, maintenance, repair and installation services</p>

                    <p>We have learned that no matter how small the job is it is important to get it right first time around. We are experienced
                    in all types of domestic and commercial plumbing and provide our clients with the service that our reputation is built on
                    and all work carries a 30 day labour guarantee.</p>

                    <ul>
                        <li>General plumbing</li>
                        <li>Leaks</li>
                        <li>Overflows</li>
                        <li>Burst pipes</li>
                        <li>Showers fitting</li>
                        <li>Pumps</li>
                        <li>Toilets</li>
                        <li>Taps</li>
                        <li>Washing machine and dishwasher installations</li>
                        <li>Replacement ball valves</li>
                        <li>Waste disposals units</li>
                        <li>Saniflo's</li>
                        <li>Tanks</li>
                        <li>Hot water problems</li>
                        <li>Immersion heaters</li>
                        <li> Cylinders</li>
                        <li>Bathroom refurbishment</li>
                        <li>Thermostatic radiator valves</li>
                        <li>Replacement radiators</li>
                        <li>Mega flows</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="strip" id="bathrooms">
            <div class="container">
                <div class="constrainer">
                    <h2>Bathrooms</h2>

                    <p>We offer bathroom installation, renovation, refurbishment, wet room and shower room installation, tiling, Plumbing and electrics</p>

                    <ul>
                        <li>professional and reliable service</li>
                        <li>quality workmanship as a standard</li>
                        <li>free estimates and quotes</li>
                        <li>realistic start dates</li>
                        <li> great attention to detail</li>
                        <li>All bathroom repair and installations</li>
                        <li>Affordable bathroom refurbishment</li>
                        <li>Showers and wet room installation</li>
                        <li>Bespoke bathroom installation service</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="strip" id="emergencies">
            <div class="container">
                <div class="constrainer">
                    <h2>Emergencies</h2>

                    <p>We respond to all plumbing emergencies as a priority as the longer they are left, the more damage can be done to your property</p>

                    <p>If you need an emergency plumber, please call 00000 000000.</p>

                    <p>We are available 365 days a year and aim for a 60 minute or less response time.</p>
                </div>
            </div>
        </section>

        <section class="strip" id="recent-jobs">
            <div class="container">
                <div class="constrainer">
                    <h2>Recent jobs</h2>

                    <p>Please enjoy a gallery of our recent work</p>

                    [ GALLERY ]
                </div>
            </div>
        </section>

        <section class="strip" id="contact-us">
            <div class="container">
                <div class="constrainer">
                    <h2>Contact us</h2>

                    <p>Some text about contacting us</p>

                    <div class="grid">
                        <div class="col">
                            <form action="">

                            </form>
                        </div>
                        <div class="col">
                            <ul>
                                <li class="phone">
                                    <a href="tel:<?=$content->phone?>"><?=$content->phone?></a>
                                </li>
                                <li class="mobile">
                                    <a href="tel:<?=$content->mobile?>"><?=$content->mobile?></a>
                                </li>
                                <li class="email">
                                    <a href="mailto:<?=$content->email?>"><?=$content->email?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="#top" class="top-link">Back to top</a>

        <footer>
            <p>&copy; 2018 Wave Plumbing</p>
            <p>Website by <a href="//www.atomichorse.agency" target="_blank">Atomic Horse</a></p>
        </footer>
    </body>
</html>
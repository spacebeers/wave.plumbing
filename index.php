<?php
    $content = new stdClass();
    $content->page_title = 'Wave Plumbing: Reliable, friendly Sussex based plumbers';
    $content->mobile = '07925 112306';
    $content->phone = '01903 204772';
    $content->email = 'chris@wave.plumbing';
    $content->facebook = 'https://www.facebook.com/chris.wave.plumbing/';
    $content->checkatrade = 'https://www.checkatrade.com/ChrisPetersPlumbingBrighton/';

    if (isset($_POST['email'])):
        $email_to = $content->email;
        $email_subject = "New website enquiry";

        $first_name = $_POST['name']; // required
        $email_from = $_POST['email']; // required
        $telephone = $_POST['telephone']; // not required
        $message = $_POST['message']; // required
        $email_message = "Form details below.\n\n";
        function clean_string($string) {
            $bad = array("content-type","bcc:","to:","cc:","href");
            $clean = mysql_real_escape_string($string);
            return str_replace($bad,"",$clean);
        }
        $email_message .= "Name: ".clean_string($name)."\n";
        $email_message .= "Email: ".clean_string($email_from)."\n";
        $email_message .= "Telephone: ".clean_string($telephone)."\n";
        $email_message .= "Message: ".clean_string($message)."\n";

        // create email headers
        $headers = 'From: '.$email_from."\r\n".
        'Reply-To: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        @mail($email_to, $email_subject, $email_message, $headers);
    endif;
?>

<html>
    <head>
        <title><?=$content->page_title?></title>
        <meta name="description" content="Reliable, friendly Sussex based plumbers">
        <meta name="keywords" content="Reliable, friendly Sussex based plumbers">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="stylesheet" href="css/tiny-slider.css" />
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#111111">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#111111">
    </head>
    <body>
        <header>
            <div class="container">
                <a href="tel:<?=$content->mobile?>" class="mobile-link">
                    <svg width="19px" height="28px" viewBox="0 0 23 32" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icon-Set" transform="translate(-520.000000, -463.000000)" fill="currentColor">
                                <path d="M531.5,492 C532.328,492 533,491.328 533,490.5 C533,489.672 532.328,489 531.5,489 C530.672,489 530,489.672 530,490.5 C530,491.328 530.672,492 531.5,492 L531.5,492 Z M541,468 L522,468 L522,467 C522,465.896 522.896,465 524,465 L539,465 C540.104,465 541,465.896 541,467 L541,468 L541,468 Z M522,470 L541,470 L541,486 L522,486 L522,470 Z M541,491 C541,492.104 540.104,493 539,493 L524,493 C522.896,493 522,492.104 522,491 L522,488 L541,488 L541,491 L541,491 Z M539,463 L524,463 C521.791,463 520,464.791 520,467 L520,491 C520,493.209 521.791,495 524,495 L539,495 C541.209,495 543,493.209 543,491 L543,467 C543,464.791 541.209,463 539,463 L539,463 Z" id="Fill-144"></path>
                            </g>
                        </g>
                    </svg>
                </a>

                <img src="assets/logo.1.png" class="logo" alt="Wave plumbing logo image" />

                <button aria-label="Click to open menu" id="nav">
                    <svg width="20px" height="18px" viewBox="0 0 20 18">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Icon-Set" transform="translate(-210.000000, -887.000000)" fill="currentColor">
                                <path d="M229,895 L211,895 C210.448,895 210,895.448 210,896 C210,896.553 210.448,897 211,897 L229,897 C229.552,897 230,896.553 230,896 C230,895.448 229.552,895 229,895 L229,895 Z M229,903 L211,903 C210.448,903 210,903.448 210,904 C210,904.553 210.448,905 211,905 L229,905 C229.552,905 230,904.553 230,904 C230,903.448 229.552,903 229,903 L229,903 Z M211,889 L229,889 C229.552,889 230,888.553 230,888 C230,887.448 229.552,887 229,887 L211,887 C210.448,887 210,887.448 210,888 C210,888.553 210.448,889 211,889 L211,889 Z" id="Fill-70"></path>
                            </g>
                        </g>
                    </svg>
                </button>
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

                    <button aria-label="Click to close menu" id="close">
                        <svg width="16px" height="16px" viewBox="0 0 16 16">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path d="M8,9.41421356 L2.34314575,15.0710678 C1.95282281,15.4613908 1.31996224,15.4620979 0.928932188,15.0710678 C0.538609245,14.6807449 0.538609245,14.0471772 0.928932188,13.6568542 L6.58578644,8 L0.928932188,2.34314575 C0.538609245,1.95282281 0.537902138,1.31996224 0.928932188,0.928932188 C1.31925513,0.538609245 1.95282281,0.538609245 2.34314575,0.928932188 L8,6.58578644 L13.6568542,0.928932188 C14.0471772,0.538609245 14.6807449,0.538609245 15.0710678,0.928932188 C15.4620979,1.31996224 15.4613908,1.95282281 15.0710678,2.34314575 L9.41421356,8 L15.0710678,13.6568542 C15.4613908,14.0471772 15.4613908,14.6807449 15.0710678,15.0710678 C14.6800378,15.4620979 14.0471772,15.4613908 13.6568542,15.0710678 L8,9.41421356 Z" id="Combined-Shape" fill="currentColor" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                    </button>
                </nav>
            </div>
        </header>

        <section class="spy hero-banner">
            <a class="anchor" id="home"></a>
            <div class="hero-contents">
                <h1>Welcome to Wave Plumbing</h1>
                <p>Reliable, friendly, Sussex based plumbers</p>
            </div>
        </section>

        <section class="spy strip">
            <a class="anchor" id="plumbing"></a>
            <div class="container">
                <div class="constrainer">
                    <h2>Plumbing</h2>

                    <p>Wave offer a range of general plumbing, maintenance, repair and installation services</p>

                    <p>We have learned that no matter how small the job is it is important to get it right first time around. We are experienced
                    in all types of domestic and commercial plumbing and provide our clients with the service that our reputation is built on
                    and all work carries a 30 day labour guarantee.</p>

                    <div class="grid-list">
                        <ul>
                            <li>General plumbing</li>
                            <li>Leaks</li>
                            <li>Overflows</li>
                            <li>Burst pipes</li>
                            <li>Showers fitting</li>
                            <li>Pumps</li>
                            <li>Toilets</li>
                            <li>Taps</li>
                            <li>Washing machine installations</li>
                            <li>Dish washer installations</li>
                            <li>Replacement ball valves</li>
                        </ul>
                        <ul>
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
            </div>
        </section>

        <section class="spy strip highlight">
            <a class="anchor" id="bathrooms"></a>
            <div class="container">
                <div class="constrainer">
                    <h2>Bathrooms</h2>

                    <p>We offer bathroom installation, renovation, refurbishment, wet room and shower room installation, tiling, Plumbing and electrics</p>

                    <div class="grid-list">
                        <ul>
                            <li>Professional and reliable service</li>
                            <li>Quality workmanship as a standard</li>
                            <li>Free estimates and quotes</li>
                            <li>Realistic start dates</li>
                            <li>Great attention to detail</li>
                        </ul>
                        <ul>
                            <li>All bathroom repair and installations</li>
                            <li>Affordable bathroom refurbishment</li>
                            <li>Showers and wet room installation</li>
                            <li>Bespoke bathroom installation service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="spy strip">
            <a class="anchor" id="emergencies"></a>
            <div class="container">
                <div class="constrainer">
                    <h2>Emergencies</h2>

                    <p>We respond to all plumbing emergencies as a priority as the longer they are left, the more damage can be done to your property</p>

                    <p>If you need an emergency plumber, <a href="tel:<?=$content->mobile?>">please call on <?=$content->mobile?></a>.</p>

                    <p>We are available 365 days a year and aim for a 60 minute or less response time.</p>
                </div>
            </div>
        </section>

        <section class="spy strip highlight">
            <a class="anchor" id="recent-jobs"></a>
            <div class="container">
                <div class="constrainer">
                    <h2>Recent jobs</h2>

                    <p>Please enjoy a gallery of our recent work</p>
                </div>

                <div class="gallery">
                    <?php
                        $files = glob('assets/gallery/*.{jpg,png,gif}', GLOB_BRACE);
                        foreach($files as $file): ?>
                            <div class="square">
                                <div class="content">
                                    <img src="<?=$file?>" alt="Gallery image" />
                                </div>
                            </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </section>

        <section class="spy strip">
            <a class="anchor" id="contact-us"></a>
            <div class="container">
                <div class="constrainer">
                    <h2>Contact us</h2>

                    <p>Some text about contacting us</p>

                    <?php if (isset($_POST['email'])): ?>
                        <div class="message">
                            Thank you for your enquiry. We will be in touch as soon as possible.
                        </div>
                    <?php endif; ?>

                    <div class="grid">
                        <div class="col">
                            <form action="index.php#contact-us" method="POST">
                                <div class="form-element">
                                    <label for="">Name</label>
                                    <input type="text" name="name" required />
                                </div>
                                <div class="form-element">
                                    <label for="">Telephone</label>
                                    <input type="number" name="telephone" required />
                                </div>
                                <div class="form-element">
                                    <label for="">Email</label>
                                    <input type="email" name="email" required />
                                </div>
                                <div class="form-element">
                                    <label for="">Message</label>
                                    <textarea name="message" required></textarea>
                                </div>
                                <input type="submit" value="Send" />
                            </form>
                        </div>
                        <div class="col">
                            <ul class="contact-list">
                                <li>
                                    <a href="tel:<?=$content->phone?>">
                                        <svg width="32px" height="32px" viewBox="0 0 32 32" version="1.1">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Icon-Set" transform="translate(-256.000000, -307.000000)" fill="currentColor">
                                                    <path d="M285.635,315.737 C283.935,318.967 280.16,323.939 277,327.218 C273.357,331.158 264.769,336.546 264.769,336.546 C264.106,336.894 262.266,336.92 261.76,336.415 L259.929,334.589 C259.551,333.957 259.381,333.225 259.929,332.763 L263.592,330.023 C264.212,329.604 264.917,329.519 265.423,330.023 L267.68,332.273 C268.211,331.9 276.689,326.344 281.405,318.695 L279.094,316.39 C278.588,315.886 278.674,315.182 279.094,314.563 L281.841,310.911 C282.347,310.236 283.167,310.406 283.672,310.911 L285.504,312.737 C286.222,313.411 286.014,314.982 285.635,315.737 L285.635,315.737 Z M287.073,311.433 L284.195,308.563 C283.401,307.77 282.112,307.77 281.317,308.563 L277,314.303 C276.341,315.274 276.206,316.38 277,317.173 L278.762,318.93 C277.456,320.68 275.888,322.588 274.123,324.348 C272.127,326.338 269.907,328.147 267.911,329.633 L266.208,327.936 C265.414,327.143 264.305,327.277 263.33,327.936 L257.574,332.241 C256.609,332.906 256.779,334.318 257.574,335.111 L260.452,337.98 C262.042,339.566 264.109,339.058 266.208,337.98 C266.208,337.98 272.561,334.424 278,329 C283.116,323.898 287.073,317.173 287.073,317.173 C287.898,314.91 288.663,313.018 287.073,311.433 L287.073,311.433 Z" id="Fill-179"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <?=$content->phone?>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:<?=$content->mobile?>">
                                        <svg width="23px" height="32px" viewBox="0 0 23 32" version="1.1">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Icon-Set" transform="translate(-520.000000, -463.000000)" fill="currentColor">
                                                    <path d="M531.5,492 C532.328,492 533,491.328 533,490.5 C533,489.672 532.328,489 531.5,489 C530.672,489 530,489.672 530,490.5 C530,491.328 530.672,492 531.5,492 L531.5,492 Z M541,468 L522,468 L522,467 C522,465.896 522.896,465 524,465 L539,465 C540.104,465 541,465.896 541,467 L541,468 L541,468 Z M522,470 L541,470 L541,486 L522,486 L522,470 Z M541,491 C541,492.104 540.104,493 539,493 L524,493 C522.896,493 522,492.104 522,491 L522,488 L541,488 L541,491 L541,491 Z M539,463 L524,463 C521.791,463 520,464.791 520,467 L520,491 C520,493.209 521.791,495 524,495 L539,495 C541.209,495 543,493.209 543,491 L543,467 C543,464.791 541.209,463 539,463 L539,463 Z" id="Fill-144"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <?=$content->mobile?>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?=$content->email?>">
                                        <svg width="32px" height="24px" viewBox="0 0 32 24" version="1.1">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Icon-Set" transform="translate(-412.000000, -259.000000)" fill="currentColor">
                                                    <path d="M442,279 C442,279.203 441.961,279.395 441.905,279.578 L433,270 L442,263 L442,279 L442,279 Z M415.556,280.946 L424.58,271.33 L428,273.915 L431.272,271.314 L440.444,280.946 C440.301,280.979 415.699,280.979 415.556,280.946 L415.556,280.946 Z M414,279 L414,263 L423,270 L414.095,279.578 C414.039,279.395 414,279.203 414,279 L414,279 Z M441,261 L428,271 L415,261 L441,261 L441,261 Z M440,259 L416,259 C413.791,259 412,260.791 412,263 L412,279 C412,281.209 413.791,283 416,283 L440,283 C442.209,283 444,281.209 444,279 L444,263 C444,260.791 442.209,259 440,259 L440,259 Z" id="Fill-186"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <?=$content->email?>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?=$content->facebook?>" target="_blank">
                                        <svg width="32px" height="32px" viewBox="0 0 32 32">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="Group" transform="translate(-1.000000, 0.000000)" fill="currentColor">
                                                    <path d="M31.6667,0 L2.3337,0 C1.5967,0 0.9997,0.597 0.9997,1.333 L0.9997,30.667 C0.9997,31.403 1.5967,32 2.3337,32 L17.9997,32 L17.9997,20 L13.9997,20 L13.9997,15 L17.9997,15 L17.9997,11 C17.9997,6.867 20.6167,4.833 24.3037,4.833 C26.0697,4.833 27.5877,4.965 28.0297,5.023 L28.0297,9.343 L25.4727,9.344 C23.4677,9.344 22.9997,10.297 22.9997,11.695 L22.9997,15 L27.9997,15 L26.9997,20 L22.9997,20 L23.0797,32 L31.6667,32 C32.4027,32 32.9997,31.403 32.9997,30.667 L32.9997,1.333 C32.9997,0.597 32.4027,0 31.6667,0" id="Fill-3"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        Find us on Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:<?=$content->checkatrade?>" class="checkatrade-link" target="_blank">
                                        <img src="assets/checkatrade.png" alt="Member of Checkatrade image" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <a href="#top" class="top-link">Back to top</a>

        <footer>
            <div class="container">
                <p>&copy; 2018 Wave Plumbing</p>
                <p>Website by <a href="//www.atomichorse.agency" target="_blank">Atomic Horse</a></p>
            </div>
        </footer>

        <script src="scripts/tiny-slider.min.js"></script>
        <script src="scripts/app.js"></script>
    </body>
</html>
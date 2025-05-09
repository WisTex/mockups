<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About - Stellar Geoconsult LLC</title>
        <link rel="stylesheet" href="./view/theme/neuhub-tab/css/codestitch.css">
        <link rel="stylesheet" href="./view/theme/neuhub-tab/css/codestitch-sections.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

        <!-- ============================================ -->
        <!--                 Navigation                   -->
        <!-- ============================================ -->

        <header id="cs-navigation">
            <div class="cs-top-bar">
                <div class="cs-top-container">
                    <!--Nav Logo-->
                    <a href="" class="cs-logo" aria-label="back to home">
                        <!-- <img src="./custom/image/stellarsolve-logo-60.png" alt="logo" width="197" height="43" aria-hidden="true" decoding="async"> -->
                        <img src="./custom/image/geoconsult-logo.jpg" alt="logo" style="max-height:43px;" !width="197" !height="43" aria-hidden="true" decoding="async"> 
                        <!-- <h3 class="text-black">Stellar&nbsp;Geoconsult</h3> -->
                    </a>
                    <div class="cs-contact-group">
                        <a class="cs-contact-link" href="mailto:info@stellargeoconsult.com">
                            <picture class="cs-wrapper">
                                <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/yellow-mail.svg" alt="icon" width="24" height="24">
                            </picture>
                            <div class="cs-info">
                                <span class="cs-header">Send A Message</span>
                                <span class="cs-link-content">info@stellargeoconsult.com</span>
                            </div>
                        </a>
                        <!--
                        <a class="cs-contact-link" href="mailto:Info@health&wellness.com">
                            <picture class="cs-wrapper">
                                <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/yellow-pin.svg" alt="icon" width="24" height="24">
                            </picture>
                            <div class="cs-info">
                                <span class="cs-header">Visit Us At</span>
                                <span class="cs-link-content">Oak Harbor, WA</span>
                            </div>
                        </a>
                        -->
                        
                        <!--
                        <a href="https://schedule.stellarsolveenergy.com" target="_blank" class="cs-button-solid">Schedule Appointment</a>
                        -->

                    </div>
                    <!--Dark Mode toggle, uncomment button code if you want to enable a dark mode toggle-->
                    <!-- <button id="dark-mode-toggle" aria-label="dark mode toggle">
                        <svg class="cs-moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480" xml:space="preserve"><path d="M459.782 347.328c-4.288-5.28-11.488-7.232-17.824-4.96-17.76 6.368-37.024 9.632-57.312 9.632-97.056 0-176-78.976-176-176 0-58.4 28.832-112.768 77.12-145.472 5.472-3.712 8.096-10.4 6.624-16.832S285.638 2.4 279.078 1.44C271.59.352 264.134 0 256.646 0c-132.352 0-240 107.648-240 240s107.648 240 240 240c84 0 160.416-42.688 204.352-114.176 3.552-5.792 3.04-13.184-1.216-18.496z"/></svg>
                        <img class="cs-sun" aria-hidden="true" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons%2Fsun.svg" decoding="async" alt="moon" width="15" height="15">
                    </button> -->
                </div>
            </div>
            <!--Wrapped the bottom container in a wrapper div so we can have a full width background color, and centered the container inside of it-->
            <div class="cs-bottom-bar">
                <div class="cs-container">
                    <!--Navigation List-->
                    <nav class="cs-nav" role="navigation">
                        <!--Mobile Nav Toggle-->
                        <button class="cs-toggle" aria-label="mobile menu toggle">
                            <div class="cs-box" aria-hidden="true">
                                <span class="cs-line cs-line1" aria-hidden="true"></span>
                                <span class="cs-line cs-line2" aria-hidden="true"></span>
                                <span class="cs-line cs-line3" aria-hidden="true"></span>
                            </div>
                        </button>
                        <!-- We need a wrapper div so we can set a fixed height on the cs-ul in case the nav list gets too long from too many dropdowns being opened and needs to have an overflow scroll. This wrapper acts as the background so it can go the full height of the screen and not cut off any overflowing nav items while the cs-ul stops short of the bottom of the screen, which keeps all nav items in view no matter how mnay there are-->
                        <div class="cs-ul-wrapper">
                            <ul id="cs-expanded" class="cs-ul" aria-expanded="false">
                                <li class="cs-li">
                                    <a href="./" class="cs-li-link cs-active">
                                        Home
                                    </a>
                                </li>
                                <li class="cs-li">
                                    <a href="./solutions.php" class="cs-li-link">
                                        Solutions
                                    </a>
                                </li>
                                <li class="cs-li">
                                    <a href="./industries.php" class="cs-li-link">
                                        Industries
                                    </a>
                                </li>
                                <li class="cs-li">
                                    <a href="./efficiency.php" class="cs-li-link">
                                        Efficiency &amp; Cost Savings
                                    </a>
                                </li>
                                <li class="cs-li">
                                    <a href="./renewable.php" class="cs-li-link">Renewable Energy</a>
                                </li>                                                 
                                <li class="cs-li">
                                    <a href="./team.php" class="cs-li-link">
                                        Our Team
                                    </a>
                                </li>
                                <li class="cs-li">
                                    <a href="./contact.php" class="cs-li-link">
                                        Contact Us
                                    </a>
                                </li>



                            </ul>
                        </div>
                    </nav>
                    <!--
                    <a class="cs-call" href="tel:555-555-0234">
                        <picture class="cs-wrapper">
                            <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/phone-1a.svg" alt="icon" width="24" height="24">
                        </picture>
                        <div class="cs-info">
                            <span class="cs-header">Call Us</span>
                            <span class="cs-link-content">(604) 555-0234</span>
                        </div>
                    </a>
                    -->
                </div>
            </div>
        </header>


<!-- ============================================ -->
<!--                 Content Page                 -->
<!-- ============================================ -->

<!-- ============================================ 
    This Stitch is used for content heavy interior pages
    that have no design or layout.  Often times these are 
    content silos where you talk extensively about a topic
    to educate your visitors and rank on Google for the 
    content.  These are great for pages that have a TON
    of content.  Design isn't important here, it's all 
    about making the content accessible and easy to read.
================================================= -->

<section id="content-page-852">
    <div class="cs-container">
        <div class="cs-content">
            <h1 class="cs-title"><span class="cs-color">Welcome to Stellar Geoconsult LLC</span></h1>

                <h3 class="text-black">Empowering Global Energy Transitions from Houston, Texas</h3>

<p>At <b>Stellar Geoconsult LLC</b>, we stand at the intersection of experience, innovation, and energy transformation. Headquartered in <b>Houston, Texas</b> — the global capital of energy—our firm is uniquely positioned to deliver tailored, world-class consulting and advisory services across the full spectrum of the energy industry.

<p>From <b>traditional hydrocarbons</b> to <b>renewable technologies</b>, from <b>subsurface geoscience</b> to <b>above-ground infrastructure optimization</b>, we equip our clients with deep technical insights, commercial intelligence, and forward-thinking strategies that accelerate performance and value generation. We are not just advisors—we are long-term partners in shaping the energy systems of tomorrow.

<h3>Who We Are</h3>

<p>Stellar Geoconsult LLC is a multidisciplinary team of experts composed of seasoned geoscientists, petroleum engineers, reservoir modelers, renewable energy strategists, 
    economists, and policy analysts. Our team’s collective experience spans continents, with a strong track record of success 
    in <b>Africa</b>, <b>North America</b>, the <b>Middle East</b>, and <b>Latin America</b>. 
    We pride ourselves on our ability to integrate regional knowledge with global best practices—ensuring our recommendations are both innovative and implementable.

<p>Whether advising governments on national energy strategies or helping private companies maximize returns on complex assets, 
    we provide <b>precision analysis, actionable roadmaps, and long-term value creation</b> at every step.

<h3>What We Do</h3>

<p>Our core services span:

<ul>
<li><b class="text-success">Energy Strategy Development</b>
<div class="mt-3">We design resilient and future-ready energy strategies, aligning national goals with investor expectations and evolving climate standards.</div>
<li><b class="text-success">Subsurface Intelligence & Asset Evaluation</b>
<div class="mt-3">With decades of hands-on field and basin experience, we provide clients with clear visibility into exploration and production assets—through data room assessments, volumetric estimations, and integrated geological modeling.</div>
<li><b class="text-success">Renewable Energy Project Advisory</b>
<div class="mt-3">From geothermal mapping to solar microgrid planning and hybrid system design, we de-risk and accelerate the adoption of clean energy in emerging markets.</div>
<li><b class="text-success">Operational Efficiency & Decarbonization</b>
<div class="mt-3">We help optimize performance while reducing emissions, improving cost structures, and enabling energy transition pathways across industries.</div>
<li><b class="text-success">Off-Grid & Rural Power Systems</b>
<div class="mt-3">We specialize in providing energy access and industrial power solutions to underserved markets, particularly in Sub-Saharan Africa, through custom off-grid systems designed for agriculture, manufacturing, and digital infrastructure.</div>
</ul>

<h3>Why Stellar Geoconsult LLC</h3>

<h4>Rooted in Houston. Focused on Global Impact.</h4>

<p>Houston is not just our headquarters—it is the foundation of our global outlook. As one of the world’s foremost energy hubs, it equips us with access to leading technologies, institutional partnerships, and a continuous flow of innovation. We leverage this unique ecosystem to develop high-impact solutions, especially for frontier and emerging markets.

<p>Our value lies in:

<ul>
<li><b>Unbiased, independent, and rigorous analysis</b>
<li><b>Cross-disciplinary teams with hands-on experience</b>
<li><b>Custom-built solutions for both legacy and future energy systems</b>
<li><b>A deep understanding of Sub-Saharan Africa’s energy landscape</b>
<li><b>Commitment to long-term sustainability, affordability, and reliability</b>
</ul>

<h3>Who We Serve</h3>

<p>We work with a diverse portfolio of clients including:

<ul>
<li><b>National Oil Companies (NOCs) and Ministries of Energy</b>
<li><b>Private-sector E&P companies</b>
<li><b>Renewable energy developers and investors</b>
<li><b>Agricultural and industrial enterprises</b>
<li><b>Multilateral institutions and donor-funded programs</b>
</ul>

<p>No matter the scale of the project—from village electrification to basin-wide petroleum systems — we approach every engagement with precision, partnership, and purpose.

<h3>Explore Our Expertise. Expand Your Potential. Energize Your Future.</h3>

<p>At Stellar Geoconsult LLC, our mission is not only to solve the energy challenges of today—but to shape the energy realities of tomorrow. Let us be your trusted advisor in navigating complexity, seizing opportunity, and driving transformational impact across the global energy landscape.
<p>Explore our expertise. Expand your potential. Energize your future.



        </div>

        <div class="cs-image-group">
            <picture class="cs-picture">
                <!--Mobile Image-->
                <source media="(max-width: 600px)" srcset="./custom/image/puzzle-pieces.jpg">
                <!--Tablet and above Image-->
                <source media="(min-width: 601px)" srcset="./custom/image/puzzle-pieces.jpg">
                <img decoding="async" src="./custom/image/puzzle-pieces.jpg" alt="person" width="542" height="520" aria-hidden="true">
            </picture>
        </div>

    </div>
</section>
                                


          


<!-- ============================================ -->
<!--                  Footer                      -->
<!-- ============================================ -->

<section id="footer-1390">
    <div class="cs-container">
        <div class="cs-top">
            <!--
            <a aria-label="go back to home" class="cs-logo" href="">
                <img class="cs-logo-img" loading="lazy" decoding="async" src="./custom/image/stellarsolve-logo.png" alt="logo" width="209" height="40">
            </a>
-->
            <ul class="cs-ul">
                <li class="cs-li">
                    <a href="./" class="cs-link cs-active fw-bold">Home</a>
                </li>
                <li class="cs-li">
                    <a href="./industries.php" class="cs-link">Industries</a>
                </li>                
                <li class="cs-li">
                    <a href="./efficiency.php" class="cs-link">Efficiency &amp; Cost Savings</a>
                </li>
                <li class="cs-li">
                    <a href="./renewable.php" class="cs-link">Renewable Energy</a>
                </li>
                <li class="cs-li">
                    <a href="./solutions.php" class="cs-link">Hydrocarbons</a>
                </li>                                                
                <li class="cs-li">
                    <a href="./team.php" class="cs-link">Our Team</a>
                </li>
                <li class="cs-li">
                    <a href="./contact.php" class="cs-link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="cs-bottom">

            <span class="cs-copyright">
                Copyright &copy; 2025 <a href="" class="cs-copyright-link">Stellar Geoconsult LLC</a>
            </span>

        </div>
    </div>
</section>

<script src="./view/theme/neuhub-tab/js/codestitch.js"></script>


    </body>
</html>
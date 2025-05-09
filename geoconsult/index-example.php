<!DOCTYPE html>
<html>
    <head>
        <title>Stellarsolve Energy</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                    <a href="/" class="cs-logo" aria-label="back to home">
                        <!-- <img src="./custom/image/stellarsolve-logo-60.png" alt="logo" width="197" height="43" aria-hidden="true" decoding="async"> -->
                        <!-- <img src="./custom/image/stellarsolve-logo-2.png" alt="logo" width="197" height="43" aria-hidden="true" decoding="async"> -->
                        <img src="./custom/image/stellarsolve-long.png" alt="logo" width="300" height="50" aria-hidden="true" decoding="async">
                    </a>
                    <div class="cs-contact-group">
                        <a class="cs-contact-link" href="mailto:info@stellarsolveenergy.com">
                            <picture class="cs-wrapper">
                                <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/yellow-mail.svg" alt="icon" width="24" height="24">
                            </picture>
                            <div class="cs-info">
                                <span class="cs-header">Send A Message</span>
                                <span class="cs-link-content">info@stellarsolveenergy.com</span>
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
                        <a href="https://schedule.stellarsolveenergy.com" target="_blank" class="cs-button-solid">Schedule Appointment</a>
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
                                    <a href="./products.php" class="cs-li-link">
                                        Products
                                    </a>
                                </li>
                                <li class="cs-li">
                                    <a href="./services.php" class="cs-li-link">
                                        Services
                                    </a>
                                </li>
                                <li class="cs-li">
                                    <a href="./about.php" class="cs-li-link">
                                        About
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
<!--                    Hero                      -->
<!-- ============================================ -->

<section id="hero-1618">
    <div class="cs-container">
        <div class="cs-content">
<!--
        <span class="cs-topper">

                Plan for A secure future

            </span>
            -->
            <h1 class="cs-title mb-3">Propelling Profitable Sustainability</h1>

            <span class="cs-topper mb-4 mt-0">

             in Sub-Saharan Africa’s Energy Industry

            </span>

<!--
<p style="color: white;"><b>Welcome to Stellarsolve Energy – Vanguard of Sustainable Energy Transformation</b></p>
<p style="color: white;">At Stellarsolve Energy, we are committed to pioneering energy solutions that lead Sub-Saharan Africa into a new era of profitable, sustainable development. Our mission goes beyond traditional energy production, encompassing renewable energy innovations that meet the unique needs of underserved communities and industries. With a specialized focus on agriculture, we bring scalable, off-grid renewable power to processing plants, empowering communities and driving economic growth.</p>

-->

            <a href="./contact.php" class="cs-button-solid">Request Appointment</a>
        </div>
        <ul class="cs-card-group mb-5">
            <li class="cs-item">
                <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/check-circle.svg" alt="icon" width="48" height="48">
                <h3 class="cs-h3">Expertise</h3>
                <p class="cs-item-text">
                    Our team of seasoned professionals brings a wealth of knowledge in both traditional and renewable energy sectors, enabling us to design solutions that meet Africa’s evolving energy demands with precision.
                </p>
            </li>
            <li class="cs-item">
                <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/speedometer.svg" alt="icon" width="48" height="48">
                <h3 class="cs-h3">Innovation</h3>
                <p class="cs-item-text">
                    Leveraging the latest advancements in solar, wind, biomass, hydropower, and geothermal energy, we maximize production efficiency and minimize environmental impact, propelling Africa toward a resilient and sustainable energy future.
                </p>
            </li>
            <li class="cs-item">
                <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Icons/Like.svg" alt="icon" width="48" height="48">
                <h3 class="cs-h3">Profitable Sustainability</h3>
                <p class="cs-item-text">
                    By integrating renewable energy with economic strategies, Stellarsolve Energy champions a model where sustainability goes hand-in-hand with profitability, ensuring that our projects add long-term value to Sub-Saharan Africa’s energy industry.
                </p>
            </li>
        </ul>
    </div>

    <!-- Background Image, there's a background image in the CSS for the parallax effect you'll need to change as well if you swap out our images -->
    <picture class="cs-background">
        <source media="(max-width: 600px)" srcset="./custom/image/puzzle-pieces.jpg">
        <source media="(min-width: 601px)" srcset="./custom/image/puzzle-pieces.jpg">
        <img decoding="async" src="./custom/image/puzzle-pieces.jpg" alt="meeting" width="2250" height="1500" aria-hidden="true">
        <!-- 
            https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/meeting7.jpg
            /custom/image/puzzle-pieces.jpg
            https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/meeting11.jpg
            https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/People/meeting11-m.jpeg
        -->
    </picture>
</section>
                                        





<!-- ============================================ -->
<!--                  Services                    -->
<!-- ============================================ -->

<section id="services-1131">
    <div class="cs-container">
        <div class="cs-content">
            <span class="cs-topper">Welcome to Stellarsolve Energy</span>
            <h2 class="cs-title">Vanguard of Sustainable Energy Transformation</h2>
            <p class="cs-text">
                At Stellarsolve Energy, we are committed to pioneering energy solutions that lead Sub-Saharan Africa into a new era of profitable, sustainable development. Our mission goes beyond traditional energy production, encompassing renewable energy innovations that meet the unique needs of underserved communities, industries, and digital infrastructure. With a specialized focus on agriculture and data centers, we bring scalable, off-grid renewable power solutions to processing plants and digital facilities, empowering communities and driving economic growth.
            </p>
        </div>
        
    </div>
</section>


<!-- ============================================ -->
<!--                  Content                     -->
<!-- ============================================ -->





<section id="content-1638">
    <div class="cs-container">
        
        
<!--                   
    This is a cs-content section that you can swap out with any cs-content you have in your site that is not a Side By Side. 
-->

<!--
<div id="cs-content-831">
    <span class="cs-topper">Welcome to Stellarsolve Energy</span>
    <h2 class="cs-title" style="margin: 10px 0px 10px 0px;">Vanguard of Sustainable Energy Transformation</h2>
    
    <p class="cs-text">
        At Stellarsolve Energy, we are committed to pioneering energy solutions that lead Sub-Saharan Africa into a new era of profitable, sustainable development. Our mission goes beyond traditional energy production, encompassing renewable energy innovations that meet the unique needs of underserved communities, industries, and digital infrastructure. With a specialized focus on agriculture and data centers, we bring scalable, off-grid renewable power solutions to processing plants and digital facilities, empowering communities and driving economic growth.
    </p>
</div>        
-->
        
        <div class="cs-content">
            <div class="cs-flex">
                <span class="cs-topper">About Us</span>
                <h2 class="cs-title">Where expertise, innovation, and sustainability converge.</h2>
            </div>
            <div class="cs-flex">
                <h3 class="cs-h3">
                    Propelling Profitable Sustainability of the Energy Industry in Sub-Saharan Africa
                </h3>
                <p class="cs-text">
                    Welcome to Stellarsolve Energy, the forerunner in sustainable energy transformation across Sub-Saharan Africa. We are dedicated to supporting both national and indigenous companies in achieving net-zero goals by advancing production in low-carbon oil and gas as well as renewable energy.</p>

<p class="cs-text">Stellarsolve Energy’s Renewable Energies segment harnesses solar, wind, biomass, hydropower, and geothermal energy to meet the growing power needs across the region—from agricultural processing plants to remote communities and data centers. By offering off-grid solutions, we reduce dependency on fossil fuels and traditional grids, empowering industries and digital infrastructure to thrive independently with clean, reliable power.</p>

<h3 class="cs-h3">Explore Our Renewable Solutions</h3>

<p class="cs-text">From powering cashew, cassava, and cocoa processing plants to establishing scalable renewable projects, Stellarsolve is transforming Africa’s energy landscape with solutions designed for the unique environmental and economic needs of Sub-Saharan Africa.
                </p>
                <a href="./hydrocarbons.php" class="cs-button-solid">Hydrocarbons</a> &nbsp;
                <a href="./renewable.php" class="cs-button-solid">Renewable</a> &nbsp;
                <a href="./about.php" class="cs-button-solid">About Us</a>
            </div>
        </div>  
    </div>
</section>
                                





<!-- ============================================ -->
<!--                  Services                    -->
<!-- ============================================ -->

<section id="services-1131" class="custom-bg-green" style="background-color: #DEECEB;">
    <div class="cs-container custom-bg-green">
        <div class="cs-content">
            <span class="cs-topper">Off-Grid Renewable Energy</span>
            <h2 class="cs-title">Powering Agricultural and Digital Transformation</h2>
            <p class="cs-text">
                From powering cashew, cassava, and cocoa processing plants to establishing off-grid renewable energy solutions for data centers, Stellarsolve Energy is transforming Africa’s energy landscape. Our scalable, sustainable solutions are designed for the unique environmental and economic needs of Sub-Saharan Africa, enabling:
            </p>
        </div>
        <ul class="cs-card-group">
            <li class="cs-item">
                <!--
                <div class="cs-image-group">
                    <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity4.svg" alt="icon" width="48" height="48">
                    <img class="cs-graphic" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity-shape.svg" alt="graphic" width="100" height="103">
                </div>
                -->
                <div class="cs-flex">
                    <h3 class="cs-h3">Cashew Processing</h3>
                    <p class="cs-item-text">
                        Solar, biomass, and geothermal-powered systems for processing plants, boosting capacity and reducing post-harvest losses.
                    </p>
                </div>
            </li>
            <li class="cs-item">
                <!--
                <div class="cs-image-group">
                    <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity5.svg" alt="icon" width="48" height="48">
                    <img class="cs-graphic" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity-shape.svg" alt="graphic" width="100" height="103">
                </div>
                -->
                <div class="cs-flex">
                    <h3 class="cs-h3">Cassava Processing</h3>
                    <p class="cs-item-text">
                        Hybrid biomass and solar solutions, as well as geothermal options, to convert raw cassava into valuable products.
                    </p>
                </div>
            </li>
            <li class="cs-item">
                <!--
                <div class="cs-image-group">
                    <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity6.svg" alt="icon" width="48" height="48">
                    <img class="cs-graphic" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity-shape.svg" alt="graphic" width="100" height="103">
                </div>
                -->
                <div class="cs-flex">
                    <h3 class="cs-h3">Cocoa Processing</h3>
                    <p class="cs-item-text">
                        Renewable energy systems that support efficient cocoa processing, enhancing yields and quality.
                    </p>
                </div>
            </li>
            <li class="cs-item">
                <!--
                <div class="cs-image-group">
                    <img class="cs-icon" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity7.svg" alt="icon" width="48" height="48">
                    <img class="cs-graphic" loading="lazy" decoding="async" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/charity-shape.svg" alt="graphic" width="100" height="103">
                </div>
                -->
                <div class="csflex">
                    <h3 class="cs-h3">Data Centers</h3>
                    <p class="cs-item-text">
                        Off-grid renewable systems tailored to the high energy demands of data centers, ensuring efficiency, scalability, and minimal environmental impact.
                    </p>
                </div>
            </li>
        </ul>
        
        <p class="cs-button-solid"><a href="./renewable.php" class="cs-button-solid">Learn More</a> &nbsp;</p>
        
    </div>
</section>
                                




<!-- ============================================ -->
<!--                  Content                     -->
<!-- ============================================ -->





<section id="content-1638">
    <div class="cs-container">
        
        

        
        <div class="cs-content">
            <div class="cs-flex">
                <span class="cs-topper">A New Era for Africa</span>
                <h2 class="cs-title">A Sustainable Future for Agriculture and Digital Infrastructure</h2>
            </div>
            <div class="cs-flex">
                <p class="cs-text">
                    Through our commitment to innovation and sustainability, Stellarsolve supports African agricultural industries and digital infrastructure in becoming more efficient, competitive, and resilient. By reducing reliance on fossil fuels and traditional grid power, we empower local communities with reliable, eco-friendly energy, enhancing productivity and fueling economic growth.</p>
<p class="cs-text">
Our renewable energy projects are designed to scale, offering replicable solutions across various sectors and regions. Stellarsolve Energy is committed to a future where Africa’s agricultural, industrial, and digital advancements are both prosperous and sustainable.
</p>


                <p><a href="./contact.php" class="cs-button-solid">Join Us in Energizing Africa's Future</a> &nbsp;</p>
                
<p class="cs-text">Stellarsolve Energy invites you to be part of a new era for Africa—one that supports growth, protects the environment, and powers communities, industries, and digital infrastructure for generations to come.</p>                
            </div>
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
                <img class="cs-logo-img" loading="lazy" decoding="async" src="./custom/image/stellarsolve-logo-2.png" alt="logo" width="209" height="40">
            </a>
-->
            <ul class="cs-ul">
                <li class="cs-li">
                    <a href="./" class="cs-link">Home</a>
                </li>
                <li class="cs-li">
                    <a href="./solutions.php" class="cs-link">Solutions</a>
                </li>
                <li class="cs-li">
                    <a href="./products.php" class="cs-link">Products</a>
                </li>
                <li class="cs-li">
                    <a href="./services.php" class="cs-link">Services</a>
                </li>
                <li class="cs-li">
                    <a href="./hydrocarbons.php" class="cs-link">Hydrocarbons</a>
                </li>
                <li class="cs-li">
                    <a href="./renewable.php" class="cs-link">Renewable Energy</a>
                </li>                
                <li class="cs-li">
                    <a href="./about.php" class="cs-link">About</a>
                </li>
                <li class="cs-li">
                    <a href="./contact.php" class="cs-link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="cs-bottom">
            <!--Social-->
            <!-- 
            <ul class="cs-social">
                <li class="cs-social-li">
                    <a href="" class="cs-social-link" aria-label="facebook" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/facebook-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
                <li class="cs-social-li">
                    <a href="" class="cs-social-link" aria-label="twitter" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/twitter-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
                <li class="cs-social-li">
                    <a href="" class="cs-social-link" aria-label="instagram" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/instagram-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
                <li class="cs-social-li">
                    <a href="" class="cs-social-link" aria-label="twitter" target="_blank" rel="noopener">
                        <img class="cs-social-icon cs-default" src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Icons/youtube-ba.svg" alt="icon" loading="lazy" decoding="async" width="12" height="12" aria-hidden="true">
                    </a>
                </li>
            </ul>
-->
            <span class="cs-copyright">
                Copyright &copy; 2025 <a href="./" class="cs-copyright-link">Stellarsolve Energy Nigeria Limited</a>
            </span>
            <!--
            <div class="cs-flex">
                <a href="" class="cs-copyright-link">Privacy Policy</a>
                <span class="cs-separater">|</span>
                <a href="" class="cs-copyright-link">Terms of Use</a>
            </div>
-->
        </div>
    </div>
</section>
                                

<script src="./view/theme/neuhub-tab/js/codestitch.js"></script>

    </body>
</html>
<?php
$request = $_SERVER['REQUEST_URI'];
// $page = str_replace("/electric", "", $request);
$page = $request;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rheomite Electronics | Electronic Components | Services</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<!-- Topbar Start -->
<div class="container-fluid bg-dark py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3" style="font-size: 1em; color: white;"></h1>

                        <div class="d-flex flex-column">

                            <p class="m-0" style="font-size: 13px; margin-right: 26px !important;"> USA.</p>
                        </div>
                    </div>
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-email font-weight-normal text-primary m-0 mr-3" style="font-size: 13px; color: white;"></h1>
                        <div class="d-flex flex-column">

                            <p class="m-0" style="font-size: 13px; margin-right: 26px !important; ">sales@rheomite.com</p>
                        </div>
                    </div>
                    <div class="d-inline-flex text-left">
                        <h1 class="flaticon-telephone font-weight-normal text-primary m-0 mr-3" style="font-size: 1em; color: white;"></h1>
                        <div class="d-flex flex-column">

                            <p class="m-0" style="font-size: 13px;  ">+1-856-666-3448</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container position-relative" style="z-index: 9; margin-top : -37px; ;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="index" class="navbar-brand">
                <h1 class="m-0 display-5 text-white"><span class="text-primary" style="color: #dda75b !important;">R</span>HEOMITE
                    <b style="
                    display: block;
                    font-size: 17px;
                ">Distributor of Electronic Components</b>
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a href="home" class="<?php echo ($page == "/home" ? "active" : "") ?>">Home</a></li>

                        <li><a href="about" class="<?php echo ($page == "/about" ? "active" : "") ?>">About</a></li>
                        <li><a href="service" class="<?php echo ($page == "/service" ? "active" : "") ?>">Services</a></li>


                        <li class="dropdown"><a href="product" class="<?php echo ($page == "/product" ? "active" : "") ?>"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>

                                <li class="dropdown"><a href="#"><span>Analog</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Amplifiers</li>
                                        </a>
                                        <a href="product">
                                            <li> Analog Switches</li>
                                        </a>

                                        <a href="product">
                                            <li> Comparators</li>
                                        </a>

                                        <a href="product">
                                            <li> Data Converters</li>
                                        </a>

                                        <a href="product">
                                            <li> Digital Potentiometers</li>
                                        </a>

                                        <a href="product">
                                            <li> Drivers</li>
                                        </a>
                                        <a href="product">
                                            <li> Multiplexers/Demultiplexers</li>
                                        </a>

                                        <a href="product">
                                            <li> Power Controllers</li>
                                        </a>
                                        <a href="product">
                                            <li> Power Switches</li>
                                        </a>

                                        <a href="product">
                                            <li> Regulators References</li>
                                        </a>

                                        <a href="product">
                                            <li> Sensors</li>
                                        </a>

                                        <a href="product">
                                            <li> System Management</li>
                                        </a>

                                        <a href="product">
                                            <li> Timer Circuits</li>
                                        </a>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="product"><span>Capacitors</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Aluminum Electrolytic Capacitors</li>
                                        </a>
                                        <a href="product">
                                            <li> Aluminum Polymer Capacitors</li>
                                        </a>
                                        <a href="product">
                                            <li> Ceramic Capacitors</li>
                                        </a>
                                        <a href="product">
                                            <li> Film Capacitors</li>
                                        </a>
                                        <a href="product">
                                            <li> Mica Capacitors</li>
                                        </a>

                                        <a href="product">
                                            <li> Niobium Oxide Capacitors</li>
                                        </a>

                                        <a href="product">
                                            <li> RF Capacitors</li>
                                        </a>

                                        <a href="product">
                                            <li> Super Caps</li>
                                        </a>

                                        <a href="product">
                                            <li> Super Caps</li>
                                    </ul>
                                    </a>
                                </li>

                                <li class="dropdown"><a href="product"><span>Circuit Protection</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Circuit Breakers</li>
                                        </a>
                                        <a href="product">
                                            <li> Electronic Fuses</li>
                                        </a>
                                        <a href="product">
                                            <li> Power Thyristors</li>
                                        </a>
                                        <a href="product">
                                            <li> Protection Thyristors</li>
                                        </a>
                                        <a href="product">
                                            <li> Resettable Fuses</li>
                                        </a>
                                        <a href="product">
                                            <li> TVS Diodes</li>
                                        </a>
                                        <a href="product">
                                            <li> Varistors (MOV/MLV)</li>
                                        </a>
                                    </ul>

                                </li>
                                <li class="dropdown"><a href="product"><span>Comm Products</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> CAN</li>
                                        </a>
                                        <a href="product">
                                            <li> Controllers</li>
                                        </a>
                                        <a href="product">
                                            <li> Ethernet</li>
                                        </a>
                                        <a href="product">
                                            <li> I2C</li>
                                        </a>
                                        <a href="product">
                                            <li> PHY</li>
                                        </a>
                                        <a href="product">
                                            <li> T1/E1</li>
                                        </a>
                                    </ul>

                                </li>
                                <li class="dropdown"><a href="product"><span>Connectors</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Cable Assemblies</li>
                                        </a>
                                        <a href="product">
                                            <li> Circular Connectors</li>
                                        </a>
                                        <a href="product">
                                            <li> Connector Housings</li>
                                        </a>
                                        <a href="product">
                                            <li> Crimp Terminals</li>
                                        </a>
                                        <a href="product">
                                            <li> PCB</li>
                                        </a>
                                        <a href="product">
                                            <li> Terminal Blocks</li>
                                        </a>
                                    </ul>

                                </li>
                                <li class="dropdown"><a href="product"><span>Development Tools</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product"></a>
                                        <li> Analog & Power</li>
                                        <a href="product">
                                            <li> Communication</li>
                                        </a>
                                        <a href="product">
                                            <li> Dev Tools - Hardware</li>
                                        </a>
                                        <a href="product">
                                            <li> Dev Tools - Software</li>
                                        </a>
                                        <a href="">
                                            <li> Microcontroller & Microprocessor</li>
                                        </a>
                                        <a href="product">
                                            <li> RF / Wireless</li>
                                        </a>
                                    </ul>

                                </li>
                                <li class="dropdown"><a href="product"><span>Discretes</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Diodes</li>
                                        </a>
                                        <a href="product">
                                            <li> Transistors</li>
                                        </a>
                                    </ul>

                                </li>
                                <li class="dropdown"><a href="product"><span>Diodes</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Bridge Rectifiers</li>
                                        </a>
                                        <a href="product">
                                            <li> Current Limiting Diodes</li>
                                        </a>
                                        <a href="product">
                                            <li> Fast Rectifiers</li>
                                        </a>
                                        <a href="product">
                                            <li> PIN Diodes</li>
                                        </a>
                                        <a href="product">
                                            <li> Schottky Diodes</li>
                                        </a>
                                        <a href="product">
                                            <li> Schottky Rectifiers</li>
                                        </a>
                                        <a href="product">
                                            <li> Standard Rectifiers</li>
                                        </a>
                                        <a href="product">
                                            <li> Switching Diodes</li>
                                        </a>
                                        <a href="product">
                                            <li> Ultrafast Rectifiers</li>
                                        </a>
                                        <a href="product">
                                            <li> Zener</li>
                                        </a>
                                    </ul>

                                </li>
                                <li class="dropdown"><a href="product"><span>Display Solutions</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Display Controllers </li>
                                        </a>
                                        <a href="product">
                                            <li> Displays </li>
                                        </a>
                                        <a href="product">
                                            <li> Touch Screens</li>
                                        </a>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="product"><span>Electromechanical</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Batteries </li>
                                        </a>
                                        <a href="product">
                                            <li> Battery Holders Accessories</li>
                                        </a>
                                        <a href="product">
                                            <li> Circuit Protection</li>
                                        </a>
                                        <a href="product">
                                            <li> Power Cords</li>
                                        </a>
                                        <a href="product">
                                            <li> Power Supplies</li>
                                        </a>
                                        <a href="product">
                                            <li> Relays</li>
                                        </a>
                                        <a href="product">
                                            <li> Switches</li>
                                        </a>
                                        <a href="product">
                                            <li> Thermal Management</li>
                                        </a>
                                        <a href="product">
                                            <li> Timing Devices</li>
                                        </a>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="product"><span>Embedded Solutions</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Embedded Boards </li>
                                        </a>
                                        <a href="product">
                                            <li> Embedded Systems</li>
                                        </a>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="product"><span>LED Lighting Components</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Chip-On-Board (COB) LED Holders </li>
                                        </a>
                                        <a href="product">
                                            <li> LED Driver Modules</li>
                                        </a>
                                        <a href="product">
                                            <li> LED Lighting</li>
                                        </a>
                                        <a href="product">
                                            <li> LED Lighting Optics / Lenses</li>
                                        </a>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="product"><span>Lighting Solutions</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> LED Assemblies </li>
                                        </a>
                                        <a href="product">
                                            <li> LED Emitters</li>
                                        </a>
                                        <a href="product">
                                            <li> LED Light Modules</li>
                                        </a>
                                        <a href="product">
                                            <li> Lighting Controls</li>
                                        </a>
                                        <a href="product">
                                            <li> Optics</li>
                                        </a>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="product"><span>Logic</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> 74 Series</li>
                                        </a>
                                        <a href="product">
                                            <li> Bus Switches</li>
                                        </a>
                                        <a href="product">
                                            <li> Gates</li>
                                        </a>
                                        <a href="product">
                                            <li> Timing Solutions</li>
                                        </a>
                                        <a href="product">
                                            <li> Translators</li>
                                        </a>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="product"><span>Memory</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> EEPROM</li>
                                        </a>
                                        <a href="product">
                                            <li> Flash</li>
                                        </a>
                                        <a href="product">
                                            <li> NAND</li>
                                        </a>
                                        <a href="product">
                                            <li> NVRAM</li>
                                        </a>
                                        <a href="product">
                                            <li> RAM</li>
                                        </a>
                                        <a href="product">
                                            <li> Solid State Drive</li>
                                        </a>
                                        <a href="product">
                                            <li> Static RAM</li>
                                        </a>
                                        <a href="product">
                                            <li> Storage</li>
                                        </a>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="product"><span>Optoelectronics</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <a href="product">
                                            <li> Infrared Emitters</li>
                                        </a>
                                        <a href="product">
                                            <li> Infrared Receivers</li>
                                        </a>
                                        <a href="product">
                                            <li> Infrared Transceivers</li>
                                        </a>
                                        <a href="product">
                                            <li> Isolation Components / Optocouplers</li>
                                        </a>
                                        <a href="product">
                                            <li> Lasers</li>
                                        </a>
                                        <a href="product">
                                            <li> LEDs</li>
                                        </a>
                                        <a href="product">
                                            <li> Light Pipes & Light Guides</li>
                                        </a>
                                    </ul>
                                </li>


                            </ul>
                        </li>

                        <li><a href="contact" class="<?php echo ($page == "/contact" ? "active" : "") ?>">Contact</a></li>
                        <li><a href="whychooseus" class="<?php echo ($page == "/whychooseus" ? "active" : "") ?>">Why Choose Us</a></li>

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>

            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
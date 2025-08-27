<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/Logo.svg">
    <link rel="stylesheet" href="./style.css">
    <title>Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #EDE2E2;
            scroll-behavior: smooth;
        }

        header {
            background: #333;
            color: #EDE2E2;
            padding: 10px 0;
        }

        .nav-links {
            list-style: none;
            text-align: center;
        }

        .nav-links li {
            display: inline;
            margin: 0 15px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
        }

        footer {
            background: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            height: 100vh;
            background: #EDE2E2;
            padding: 20px;
            margin-top: 130px;
            position: relative;
        }

        .column {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            font-size: 2em;
            margin-left: 70px;
            margin-top: 110px;
        }

        .column h2 {
            text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
        }

        .description {
            font-size: 0.5em;
            margin-top: 10px;
            color: #555;
            line-height: 1.5;
            max-width: 400px;
            text-shadow: none;
        }



        .right-side-content {
            width: 40%;
            margin-left: 50px;
            margin-left: 40px;
        }

        .right-side-content h3 {
            font-size: 1.1em;
            margin-bottom: 10px;
            color: #333;
            text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);
        }

        .right-side-content p {
            font-size: 1em;
            margin-bottom: 20px;
            color: #555;
        }

        /* Styling the arrow */
        .scroll-arrow {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            cursor: pointer;
        }

        .scroll-arrow img {
            width: 27px;
            height: 27px;
            margin-bottom: 85px;
        }

        .scroll-arrow img {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        @media (max-width: 768px) {
            section {
                flex-direction: column;
                height: auto;
                padding: 10px;
            }


            .right-side-content {
                width: 100%;
                margin-left: 0;
            }
        }

        /* Section 1 styles */
        .section-1 {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background: #EDE2E2;
            padding: 20px;
            margin-top: 110px;
        }

        .section-1 h2 {
            text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
        }

        .section-1 h1 {
            display: block;
            font-size: 1.17em;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);


        }

        /* Section 2 styles */
        .section-2 {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            background: #EDE2E2;
            margin-top: 20px;
        }

        .section-2 h2 {
            font-size: 2.5em;
            margin-bottom: 5px;
            margin-top: 80px;
            text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
            margin-left: 80px;
        }

        .section-2 p {
            font-size: 1em;
            margin: 20px 0;
            color: #555;
            margin-left: 80px;
        }

        .section-2 .container {
            margin: auto;
            width: 25%;
            max-width: 510px;
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.1);
            height: 500px;
        }

        h3 {
            display: block;
            font-size: 1.17em;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            margin-left: 80px;

        }

        /* Section 3 specific styles */
        .section-3 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Aligns the children side by side */
            padding: 40px;
            margin-top: 40px;
        }

        .section-3 h2 {
            color: #000000;
            font-size: 2.3em;
            text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
            margin-left: 50px;
        }

        .section-3 p {
            font-size: 1em;
            color: #555;
            margin-left: 50px;
        }

        .section-3 .container {
            width: 80%;
            height: 100%;
    margin-right: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 170px;

        }
        .section-3 .scroll-arrow img{
            margin-left: 50%;
        }

        .section-3>div {
            width: 60%;
            /* Adjust width for the right-side content */
        }

        .section-3 .container img,
        .section-4 .container img,
        .section-5 .container img,
        .section-6 .container img {
            width: 100%;
        }

        .section-3 img {
            max-width: 130%;
            /* Ensure the image is responsive */
            height: auto;
            /* Maintain the aspect ratio */
            margin-top: -180px;
            margin-left: -50px;
        }

        h4 {
            display: block;
            margin-block-start: 1.33em;
            margin-block-end: 1.33em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
            margin-left: 50px;
            font-size: 1em;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        /* Section 4 styles */
        .section-4 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #EDE2E2;
            margin-top: 20px;
        }

        .section-4 h2 {
            font-size: 2.5em;
            margin-bottom: -4px;
            margin-top: 150px;
            text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
            margin-left: 80px;

        }

        .section-4 p {
            font-size: 1em;
            margin: 20px 0;
            color: #555;
            margin-left: 80px;
        }

        .section-4 .container {
            width: 100%;
            /* Use 100% or a suitable value to ensure it takes the available space */
            display: flex;
            /* Use flex to center the image */
            justify-content: center;
            /* Center the image horizontally */
            align-items: center;
            /* Center the image vertically */
            margin-top: 20px;
            /* Adjust spacing as needed */
        }

        .section-4 img {
            max-width: 130%;
            /* Ensure the image is responsive */
            height: auto;
            /* Maintain the aspect ratio */
            margin-top: -50px;
        }


        h5 {
            display: block;
            font-size: 1.17em;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            margin-left: 80px;

        }

        /* Section 5 specific styles */
        .section-5 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* Aligns the children side by side */
            padding: 40px;
            margin-top: 40px;
        }

        .section-5 .scroll-arrow img{
            margin-left: 50%;
        }
        .section-5 h2 {
            color: #000000;
            font-size: 2.3em;
            text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
            margin-left: 50px;
        }

        .section-5 p {
            font-size: 1.1em;
            color: #555;
            margin-left: 50px;
        }

        .section-5 .container {
            width: 80%;
            margin-right: 20px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .section-5 .container img{
            margin-top: 0px;
        }
        .section-5>div {
            width: 60%;
            /* Adjust width for the right-side content */
        }

        .section-5 img {
            max-width: 90%;
            /* Ensure the image is responsive */
            height: auto;
            /* Maintain the aspect ratio */
            margin-top: -230px;
        }

        h6 {
            display: block;
            margin-block-start: 1.33em;
            margin-block-end: 1.33em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
            margin-left: 50px;
            font-size: 1.17em;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        /* Section 6 styles */
        /* Section 6 specific styles */
        /* Section 6 specific styles */
        /* Specific styles for Section 6's right-side content */
        .section-6 .container {
            width: 50%;
            /* Adjust width as needed */
            margin-right: 0;
            /* Adjust the margin for alignment */
            /* Adjust the top margin to align it with other content */
        }

        .section-6 .column {
            width: 50%;
            margin-top: 0;
            /* Adjust the width of the left column to balance content */
        }
        

        .section-6 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #EDE2E2;
            margin-top: 0px;
        }

        .section-6 img {
            width: 950px;
        }




        .section-6 h2 {
            text-shadow: 4px 4px 2px rgba(0, 0, 0, 0.3);
            margin-top: -10px;
        }

        .section sp {


            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            unicode-bidi: isolate;
            margin-top: -80px;
        }

        .section-6 p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            unicode-bidi: isolate;
        }




        .section-6 h1 {
            display: block;
            font-size: 1.17em;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            font-weight: bold;
            unicode-bidi: isolate;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
            margin-top: 50px;
        }

        @media (max-width: 763px) {
            .column {
                margin-left: 0px;
                margin-top: 0px;
            }

            .description {
                max-width: 100%;
            }

            .scroll-arrow img {
                margin-bottom: -25px;
            }

            .section-2 h2,
            .section-2 p,
            .section-2 h3,
            .section-3 h2,
            .section-3 p,
            .section-3 h4,
            .section-4 h2,
            .section-4 p,
            .section-4 h5,
            .section-5 h2,
            .section-5 p,
            .section-5 h6 {
                margin-left: 0px;
            }
            .section-4{
                flex-direction: column-reverse;
                padding: 41px;
            }
            .section-4 h2{
                margin-top: 10px;
            }
            .section-2 .container, .section-3>div, .section-3 .container, .section-5>div, .section-5 .container, .section-6 .column {
                width: 100%;
                max-width: 100%;
            }
            .section-6 .container{
                margin-top: 40px;
                width: 100%;
            }

            .section-2 .scroll-arrow img {
                margin-bottom: -65px;
            }
        }
    </style>
</head>

<body>
    <?php include "Navbar.php"; ?>

    <!-- Section 1 -->
    <section class="section-1" id="section-1">
        <div class="column">
            <h2>IT</h2>
            <h2>Hardware</h2>
            <h2>Solutions</h2>
            <p class="description">
                We provide a wide range of high-quality hardware products from
                leading global manufacturers to support your business needs.
                Whether you require robust servers, networking equipment,
                or end-user devices, we’ve got you covered.
            </p>
        </div>
        <div class="container">
            <!-- Add images here or other content -->
        </div>

        <div class="scroll-arrow">
            <a href="#section-2">
                <img src="images/arrow.svg" alt="Scroll Down Arrow">
            </a>
        </div>

        <div class="right-side-content">
            <h1>Servers & Storage Systems</h1>
            <p>Reliable and scalable servers, storage arrays, and data management solutions from leading brands like
                Lenovo, HPE, and Dell.</p>

            <h1>Networking Equipment</h1>
            <p>Firewalls, routers, switches, access points, and network infrastructure solutions from Cisco, Fortinet,
                and HPE Aruba.</p>

            <h1>End-User Devices</h1>
            <p>Professional laptops, desktops, and workstations from renowned brands such as Lenovo, HP, and Dell.</p>

            <h1>Peripherals</h1>
            <p>Monitors, printers, and essential accessories to complete your office setup, ensuring optimal
                productivity.</p>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="section-2" id="section-2">
        <div>
            <h2>Software Solutions & Licensing</h2>
            <p class="description">
                We offer a wide selection of software solutions
                that drive productivity, collaboration, and security
                for businesses of all sizes. From productivity suites to advanced
                IT management tools, we provide licenses and support to ensure
                you get the most out of your software.
            </p>
            <h3>Productivity Tools</h3>
            <p>Licensing for Microsoft, Dropbox, Adobe Creative Suite, and other industry-leading tools</p>

            <h3>Cybersecurity Software</h3>
            <p>Stay protected with advanced solutions from Trend Micro and Acronis</p>

            <h3>Virtualization & Cloud Solutions</h3>
            <p>Leverage VMware and Microsoft Azure to manage and scale your IT infrastructure in the cloud.</p>
        </div>
        <div class="container">
            <!-- Add image here -->
        </div>

        <div class="scroll-arrow">
            <a href="#section-3">
                <img src="images/arrow.svg" alt="Scroll Down Arrow">
            </a>
        </div>

    </section>

    <!-- Section 3 -->

    <section class="section-3" id="section-3">
        <div class="container">
            <img src="images/Services3.png" alt="Consulting Services Image">
        </div>

        <div>
            <h2>Consulting & IT Advisory Services</h2>
            <p class="description">
                We provide consulting services that align your IT strategy with your business objectives. We help
                businesses
                assess their IT infrastructure, identify gaps, and develop tailored solutions to optimize operations.
            </p>
            <h4>Infrastructure Assessment</h4>
            <p>Develop bespoke solutions that address your specific operational requirements.</p>

            <h4>Technology Roadmapping</h4>
            <p>Integrate disparate systems into a cohesive IT ecosystem, ensuring data flow and interoperability.</p>
        </div>

        <div class="scroll-arrow">
            <a href="#section-4">
                <img src="images/arrow.svg" alt="Scroll Down Arrow">
            </a>
        </div>
    </section>



    <!-- Section 4 -->

    <section class="section-4" id="section-4">
        <div>
            <h2>Managed IT Services</h2>
            <p class="description">
                Focus on your core business while we manage your IT infrastructure. We offer maintenance, and support,
                providing peace of mind with predictable costs.
            </p>
            <h5>Helpdesk & Support</h5>
            <p>Remote support services to resolve any IT issues quickly and efficiently</p>

            <h5>Managed Firewall Service</h5>
            <p>Provision of firewall including deployment, configuration, monitoring, and maintenance of the firewall
            </p>
        </div>
        <div class="container img">
            <img src="images/Services4.png" alt="Services Image">
        </div>

        <div class="scroll-arrow">
            <a href="#section-5">
                <img src="images/arrow.svg" alt="Scroll Down Arrow">
            </a>
        </div>
    </section>


    <!-- Section 5 -->
    <section class="section-5" id="section-5">
        <div class="container">
            <!-- Add the image here -->
            <img src="images/Services5.png" alt="Cloud Solutions Image">
        </div>

        <div>
            <h2>Cloud Solutions</h2>
            <p class="description">
                We offer a wide range of cloud solutions to help businesses streamline operations and scale efficiently.
                From cloud storage to full infrastructure solutions, we have the tools and expertise to manage your
                cloud
                environment.
            </p>
            <h6>Infrastructure as a Service (IaaS)</h6>
            <p>Scalable cloud infrastructure solutions from Microsoft Azure, AWS, and Google Cloud.</p>

            <h6>Backup & Disaster Recovery</h6>
            <p>Ensure business continuity with our reliable backup and disaster recovery solutions in the cloud.</p>
        </div>

        <div class="scroll-arrow">
            <a href="#section-6">
                <img src="images/arrow.svg" alt="Scroll Down Arrow">
            </a>
        </div>
    </section>



    <!-- Section 6 -->
    <section class="section-6" id="section-6">
        <div class="column">
            <h2>IT</h2>
            <h2>Support &</h2>
            <h2>Maintenance</h2>
            <sp class="description">
                Our team provides reliable IT support and maintenance services to ensure your systems are always
                running optimally. We offer both on-site and remote support options depending on your needs.
            </sp>
        </div>
        <div class="container image-left">
            <img src="images/Services6.png" alt="Services Image">
        </div>


        <div class="right-side-content">
            <h1>Remote Support</h1>
            <p>Quick and efficient remote IT support solutions to resolve issues without the need for on-site visits.
            </p>

            <h1>On-Site Maintenance</h1>
            <p>Our team can also be dispatched to your location to ensure everything runs smoothly.</p>
        </div>
    </section>




    <?php include "footer.php"; ?>

</body>

</html>
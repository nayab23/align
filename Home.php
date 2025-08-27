<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/Logo.svg">
    <link rel="stylesheet" href="./style.css">
    <title>HomePage</title>
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
            /* Background color */
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

        #hero {
            position: relative;
            background: url('your-hero-image.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            /* Center content horizontally */
            align-items: center;
            padding: 0 20px;
            /* Padding for spacing */
        }

        .hero-content {
            display: flex;
            flex-direction: row;
            /* Align items horizontally */
            align-items: center;
            width: 100%;
            max-width: 1200px;
            /* Limit width of container */
            margin: auto;
            /* gap: 100px; */
            justify-content: space-between;
            /* Center horizontally */
            position: relative;
            box-shadow:  0 4px 20px rgba(237, 226, 226, 0.5);

        }
        .image-container{
            width: 60%;
        }

     
        .image-container img {
            max-width: 100%;
            height: auto;
            display: block;
            box-shadow:  0 4px 20px rgba(237, 226, 226, 0.5);
        }

        .text-content {
            text-align: left;
            /* Align text to the left */
            width: 35%;
            /* Adjust max width for text */
            position: relative;
            /* Relative positioning for overlapping */
            z-index: 2;
        }

        .text-content h1 {
            font-size: 4.6rem;
            color: #000;
            /* Set 'ALIGN' to black */
            margin-bottom: 10px;
            /* Space below the heading */
            text-shadow: 0px 5px 5px rgba(0, 0, 0, 0.5);
            /* Drop shadow for the heading */
            position: relative;
            /* Ensure shadow appears correctly */
            left: -60px;
            /* Slight overlap to the left */
        }

        .text-content p {
            font-size: 1rem;
            /* Slightly smaller font size */
            margin: 10px 0 20px;
            /* Space below the paragraph */
            color: #333333;
            /* Set slogan to black */
            text-shadow: 0px 3px 4px rgba(0, 0, 0, 0.5);
            /* Drop shadow for the slogan */
            position: relative;
            /* Ensure shadow appears correctly */
            left: 8px;
            /* Slight overlap to the left */
            margin-top: -30px;
        }

        footer {
            background: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Badges Section */
        #badges {
            background-color: #EDE2E2;
            /* Match the same background as Services */
            padding: 70px 20px;
            text-align: center;
            margin-top: 20px;
            /* Consistent spacing with the Services section */
        }

        .badges-content {
            max-width: 1200px;
            margin: auto;
        }

        .badges-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            /* Same font size, color, and shadow as Services section */
            
        }

        .badges-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            /* Same grid structure as Services */
        }

        .badge-item {
            margin: 20px;
            text-align: center;
            width: 150px;
            /* Same width as service items */
        }

        .badge-img {
            width: 130px;
            height: 130px;
            display: block;
            margin: 0 auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Match the service-item image behavior */
        }

        .badge-img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 20px rgba(237, 226, 226, 0.5);
            /* Same hover effect as the services section */
        }

        #services {
            background-color: #EDE2E2;
            /* Light grey background for contrast */
            padding: 70px 20px;
            /* Increased padding for height */
            text-align: center;
            /* Center text */

            margin-top: -1px;
            /* Space above the section */
        }

        .services-content {
            max-width: 1200px;
            /* Limit the width */
            margin: auto;
            /* Center horizontally */
        }

        .services-content h2 {
            font-size: 2.5rem;
            /* Adjust font size for the section heading */
            margin-bottom: 20px;
            /* Space below the heading */
            color: #333;
            /* Dark text color for better readability */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .services-grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            /* Allow wrapping to fit smaller screens */
        }

        .service-item {
            margin: 20px;
            text-align: center;
            width: 150px;
            /* Adjust width as needed */
        }

        .service-item img {
            width: 100px;
            /* Adjust icon size */
            height: 100px;
            /* Adjust icon size */
            display: block;
            margin: 0 auto;
            /* Center icon horizontally */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Add transition for smooth effect */
        }

        .service-item img:hover {
            transform: scale(1.1);
            /* Scale the icon to 110% */
            box-shadow: 0 4px 20px rgba(237, 226, 226, 0.5);
            /* Add a shadow on hover */
        }


        .service-item h3 {
            font-size: 0.9rem;
            /* Adjust font size for service headings */
            margin-top: 10px;
            /* Space above service headings */
            color: #000;
            /* Dark text color */
        }

        .service-item a {
            color: #000;
            text-decoration: none;
        }


        @media (max-width: 768px) {

            /* Hero section on smaller screens */
            #hero {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: auto;
                padding: 20px;
            }

            .hero-content {
                flex-direction: column;
                align-items: center;
            }

            .image-container {
                width: 100%;
                height: auto;
                margin: 0;
            }

            .text-content {
                text-align: center;
                margin-top: 20px;
                left: -10px;
                max-width: 90%;
                width: 100%;
                display: flex;
        flex-direction: column;
        align-items: center;
                /* Ensure text doesn't go edge-to-edge */
            }

            .text-content h1 {
                font-size: 3rem;
                left: 0;
                margin-bottom: 15px;
            }

            .text-content p {
                font-size: 1rem;
                left: 0;
                margin-bottom: 30px;
            }

            .text-content img {
                max-width: 120px;
                /* Adjust size for smaller screens */
                left: 0;
                /* Reset overlap for small screens */
                top: 0;
                /* Reset vertical positioning for small screens */
            }
        }

        @media (max-width: 768px) {

            /* Hero section on smaller screens */
            #hero {
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: auto;
                padding: 20px;
            }

            .hero-content {
                flex-direction: column;
                align-items: center;
            }

            .image-container {
                width: 100%;
                height: auto;
                margin: 0;
            }

            .text-content {
                text-align: center;
                margin-top: 20px;
                left: 0;
                max-width: 90%;
                /* Ensure text doesn't go edge-to-edge */
            }

            .text-content h1 {
                font-size: 3rem;
                left: 0;
                margin-bottom: 15px;
            }

            .text-content p {
                font-size: 1rem;
                left: 0;
                margin-bottom: 30px;
            }

            .text-content img {
                max-width: 120px;
                left: 0;
                top: 0;
            }

            /* Services section */
            #services {
                padding: 40px 10px;
            }

            .services-content h2 {
                font-size: 2rem;
                text-align: center;
            }

            .services-grid {
                flex-direction: column;
                align-items: center;
            }

            .service-item {
                width: 100%;
                max-width: 350px;
                margin: 20px 0;
            }

            .service-item img {
                width: 80px;
                height: 80px;
            }

            .service-item h3 {
                font-size: 1rem;
            }



            .service-item img {
                width: 75px;
                /* Adjust icon size for smaller screens */
                height: 75px;
                /* Adjust icon size for smaller screens */
            }

            .text-content img {
                max-width: 150px;
                /* Adjust the size of the logo image */
                height: auto;
                /* Maintain aspect ratio */
                display: block;
                margin-bottom: 20px;
                /* Space between the logo and the slogan */
                position: relative;
                /* Enable positioning */
                left: -70px;
                /* Adjust this value to control overlap */
                top: -20px;
                /* Adjust this value for vertical positioning */
                z-index: 2;
                /* Ensure it stays on top of other content */
            }

            @media (max-width: 768px) {
                .text-content img {
                    max-width: 120px;
                    /* Adjust size for smaller screens */
                    left: 0;
                    /* Reset overlap for small screens */
                    top: 0;
                    /* Reset vertical positioning for small screens */
                }


            }


        }

        /* Container for the badges section */
        .badges-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px;
            background-color: #EDE2E2;
            border-radius: 14px;
            box-shadow: 0 0 30px rgba(245, 177, 170, 0.5);
            margin-top: -10px;
        }
    </style>
</head>

<body>
    <?php include "Navbar.php"; ?>

    <section id="hero">
        <div class="hero-content">
            <div class="image-container">
                <img src="images/homepagepic.png" alt="Description of the image">
            </div>
            <div class="text-content">
                <img src="images/Logo2.svg" alt="Logo2">
                <p>Your trusted partner for IT Services, software and services</p>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="services-content">
            <h2 style="text-align: left;">Services</h2>
            <div class="services-grid">
                <div class="service-item">
                    <a href="services.php#section-1">
                        <img src="images/HardwareSol.svg" alt="Hard">
                        <h3>IT Hardware Solutions</h3>
                    </a>
                </div>
                <div class="service-item">
                    <a href="services.php#section-2">
                        <img src="images/SoftwareSol.svg" alt="Soft">
                        <h3>Software Solutions & Licensing</h3>
                    </a>
                </div>
                <div class="service-item">
                    <a href="services.php#section-3">
                        <img src="images/Consult.svg" alt="Consult">
                        <h3>Consulting & IT Advisory Services</h3>
                    </a>
                </div>
                <div class="service-item">
                    <a href="services.php#section-4">
                        <img src="images/ManagedIT.svg" alt="Managed">
                        <h3>Managed IT Services</h3>
                    </a>
                </div>
                <div class="service-item">
                    <a href="services.php#section-5">
                        <img src="images/Cloud.svg" alt="Cloud">
                        <h3>Cloud Solutions</h3>
                    </a>
                </div>
                <div class="service-item">
                    <a href="services.php#section-6">
                        <img src="images/ITSupport.svg" alt="ITSupport">
                        <h3>IT Support & Maintenance</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="badges">
    <div class="badges-content">
        <h2 style="text-align: left; font-size: 2.5rem; color: #333; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Our Badges</h2>
        <div class="badges-container">
            <div class="badges-grid">
                <div class="badge-item">
                    <img src="images/dropboxBadge.png" alt="Dropbox Badge" class="badge-img">
                </div>
               
               
        </div>
    </div>
</section>



    <?php include "footer.php"; ?>

</body>

</html>
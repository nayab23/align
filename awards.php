
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/Logo.svg">
    <link rel="stylesheet" href="./style.css">
    <title>Awards</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #EDE2E2;
        }

        header {
            background: #333;
            color: #EDE2E2;
            padding: 10px 0;
            text-shadow: 1px 1px 1px #000;
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

        .awards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 1px;
            margin-top: 20px;
            margin-bottom: 30px;
            width: 100%;
        }

        /* Individual Award Styling */
        .award {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px;
            padding: 20px;
            width: calc(40% - 100px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .award:hover {
            transform: translateY(-10px);
            box-shadow: 20px 12px 6px rgba(245, 177, 170, 0.5);
        }

        footer {
            background: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            text-align: left;
            margin: 20px;
            font-size: 2.5rem;
            color: #333;
            margin-top: 120px;
            text-shadow: 3px 3px 3px rgba(0, 0, 0, 0.3);
            margin-left: 50px;
            margin-bottom: 65px;
        }

        @media (max-width: 768px) {
            .award {
                width: calc(100% - 40px);
            }
        }

        /* Arrow Styling */
        .award .arrow {
            margin-top: 10px;
            display: inline-block;
            cursor: pointer;
        }

        /* Overlay Styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .overlay img {
            max-width: 90%;
            max-height: 90%;
            border: 5px solid white;
        }

        /* Close Button */
        .overlay .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Fade-in effect for overlay */
        .overlay.show {
            display: flex;
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <?php include "Navbar.php"; ?>

    <h1>Our Achievements</h1>

    <div class="awards-container">
        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>Top Intelligent Devices Group SMB</p>
            <p>Topseller</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture1.jpg">
        </div>

        <!-- Additional awards (repeating the same structure) -->
        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>SEA</p>

            <p>CHANNEL CHAMPIONS DAY 2016/17</p>

            <p>TOP 3 VALUE ADDED PCG</p>
            <p>RESELLERS FOR SMB</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>SEA</p>

            <p>CHANNEL CHAMPIONS DAY 2016/17</p>

            <p>TOP 3 VALUE ADDED DCG</p>
            <p>RESELLERS FOR SMB</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>FY1516
            <p>CHANNEL CHAMPIONS DAY</p>
            <p>TOP VALUE ADDED RESELLER</p>
            <p>OF THE YEAR </p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>FY1314</p>
            <P>TOP ADDED RESELLER</P>
            <p>(SMB)</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>FY23/24</p>
            <p>TOP SMB PARTNER -</p>
            <p>IDG TOPSELLER+ ISG TOPCHOICE</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>SMB PARTNER OF THE YEAR</p>
            <p>2010</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>TOP SMB VALUE </p>
            <p>ADDED RESELLER OF THE YEAR </p>
            <p>2011</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>TOP PARTNER OF THE YEAR</p>
            <p>2019</p>
            <p>RUNRATE BUSINESS</p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>

        <div class="award">
            <img src="images/awards.svg" alt="Award Icon" style="width: 30px; height: 30px; margin-bottom: 10px;">
            <h3>Lenovo</h3>
            <p>TOP COMMSCOPE PARTNER </p>
            <p> 2019 </p>
            <img src="images/sidearrow.svg" alt="Arrow Icon" class="arrow" style="width: 30px; height: 30px;" data-img="path/to/your/picture2.jpg">
        </div>


     
        

        
        


    </div>

    <!-- The Overlay for displaying images -->
    <div id="overlay" class="overlay">
        <span class="close-btn">&times;</span>
        <img id="overlay-img" src="" alt="Popup Image">
    </div>

    <?php include "footer.php"; ?>

    <script>
        // JavaScript to handle the popup overlay
        const overlay = document.getElementById('overlay');
        const overlayImg = document.getElementById('overlay-img');
        const closeBtn = document.querySelector('.close-btn');
        const arrows = document.querySelectorAll('.arrow');

        arrows.forEach(arrow => {
            arrow.addEventListener('click', function () {
                const imgSrc = this.getAttribute('data-img');
                overlayImg.src = imgSrc; // Set the image source
                overlay.classList.add('show'); // Show the overlay
            });
        });

        // Close the overlay when clicking on the close button
        closeBtn.addEventListener('click', function () {
            overlay.classList.remove('show');
        });

        // Close the overlay when clicking outside the image
        overlay.addEventListener('click', function (e) {
            if (e.target === overlay) {
                overlay.classList.remove('show');
            }
        });
    </script>
</body>

</html>

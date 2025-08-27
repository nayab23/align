<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navigation Bar</title>
    <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <style>
        /* Apply Roboto Slab to the whole navbar */
        body {
            font-family: 'Roboto Slab', serif;
        }

        /* Navbar styling */
        .navbar-main {
            width: 100%;
            background-color: #EDE2E2;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            z-index: 1000;
        }

        .logo {
            margin-right: auto;
        }

        .logo img {
            width: 150px; /* Adjust this value to make the logo larger */
        }

        .navbar-main ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-main ul li {
            margin: 0;
        }

        .navbar-main ul li a {
            display: block;
            padding: 14px 20px;
            text-decoration: none;
            color: #E9897E; /* Change text color */
            text-align: center;
            font-family: 'Roboto Slab', serif;
            font-size: 1.1rem; /* Slightly increase font size */
            transition: transform 0.3s ease, color 0.3s ease; /* Animation for transform and color */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Drop shadow effect */
        }

        .navbar-main ul li a:hover {
            color: #555; /* Change color on hover */
            transform: scale(1.1); /* Slightly increase the size on hover */
            text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5); /* Enhanced shadow on hover */
        }

        @media (max-width: 768px) {
            .navbar-main {
                top: auto;
                bottom: 0;
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
                display: block;
                width: 100%;
            }

            .logo,
            .search-bar,
            #profile {
                display: none;
            }

            .navbar-main ul {
                flex-direction: row;
                justify-content: space-around;
                width: 100%;
            }

            .navbar-main ul li a {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar-main">
        <div class="logo">
            <img src="images/Logo.svg" alt="Logo">
        </div>
        <ul>
            <li><a href="Home.php"><span class="nav-text">Home</span><i class="bi bi-house nav-icon"></i></a></li>
            <li><a href="About.php"><span class="nav-text">About Us</span><i class="bi bi-info-circle nav-icon"></i></a></li>
            <li><a href="Services.php"><span class="nav-text">Services</span><i class="bi bi-gear nav-icon"></i></a></li>
        </ul>
    </nav>
    <script src="script.js"></script>
</body>
</html>

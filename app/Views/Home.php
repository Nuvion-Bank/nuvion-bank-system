<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuvion Bank System</title>

    <style>

        /* Reset CSS */
        nav {
        background: #2b3238; /* Changed from #333 to a deep blue */
        color: #fff;
        text-align: center;
        position: fixed;
        width: 100vw;
        min-height: 20vh;
        max-width: 1440px;
        position: relative;
    }

        .nav-items {
            display: grid;
            grid-template-columns: auto auto auto;
            justify-content: space-between;
            column-gap: 1rem;
            padding: 1rem 0.5rem;
            align-content: center;
        }

        .nav-links {
            position: relative;
            right: 100px;
            font-size: 1.2em;
            font-weight: bold;
            color: #fff;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            background: #004080; /* Match the footer color with the header */
            border-radius: 5px;
            padding: 5px 5px;
            transition: background 0.3s ease;
        }

        .hamburger-menu {
            display: none; /* Hide the hamburger menu by default */
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 1.8em;
            cursor: pointer;
        }

        #get-in-touch {
            display: inline-block;
            padding: 5px 5px;
            background: #ff9900;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            justify-self: center;
        }

        #get-in-touch:hover{
            background: hsl(210, 100%, 25%); /* Match the footer color with the header */
        }

        /* Responsive navigation */
        @media (max-width: 768px) {
            header {
                padding: 5px 0;
                text-align: center;
                position: fixed;
                top: 0;
                width: 100vw;
                /* min-height: 20vh; */
                max-width: 768px;
            }

            .hamburger-menu {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                align-items: center;
                position: absolute;
                top: 60px;
                right: 0;
                background: #004080;
                width: 100vw;
                min-height: 100vh;
                padding: 10px;
                border-radius: 5px;
            }

            .nav-links.active {
                display: grid;
                grid-template-columns: auto;
                justify-content: left;
                min-height: 80vh;
            }

            nav ul li {
                margin: 10px 0;
            }

            nav ul li a {
                font-size: 1.2em;
            }
        }

        /* Global Styles */
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        section {
            overflow-x: hidden;
        }

        .underline{
            width: 100px;
            background-color: #ff9900;
            height: 2px;
        }

        h1{
            font-size: 2.2rem;
        }

        h2{
            font-size: 2rem;
        }

        h3{
            font-size: 1.8rem;
        }

        h4{
            font-size:1.3rem;
        }

        p{
            font-size: 1.1rem;
        }

        @media(max-width: 768px) {
            h1{
                font-size: 2rem;
            }

            .underline {
                display: none;
            }
        }

        @media(max-width: 425px) {
            .underline{
                display: none;
            }

            h2,h3,h4 {
                border-bottom: 2px solid #ff9900;
            }
        }

        @media(max-width: 320px) {
            .underline{
                display: none;
            }

            h1{
                font-size: 1.8rem;
            }

            h2,h3,h4 {
                border-bottom: none;
            }
        }
    </style>

</head>
<body>
     <!--  Navigation Bar/Links -->
        <nav>
            <div class="nav-items">
                <h1 id="brand-name">Nuvion Bank</h1>
                <ul id="nav-links" class="nav-links">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Good 
                            <?php
                            date_default_timezone_set('Africa/Nairobi');
                            $hour = date('H');
                            if ($hour < 12) {
                                echo 'Morning';
                            } elseif ($hour >= 12 && $hour <= 15) {
                                echo 'Afternoon';
                            } else {
                                echo 'Evening';
                            }

                            ?>
                        </a>
                    </li>
                </ul>
                 <div class="hamburger-menu" id="hamburger-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav Demo</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <style>
        @media only screen and (min-width: 500px) {
            .hidden-desktop {
                display: none !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .hidden-mobile {
                display: none !important;
            }
        }

        /* mobile nav bar */

        .nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 55px;
            /* box-shadow: 0 0 3px rgba(0, 0, 0, 0.2); */
            background-color: #004d95;
            display: flex;
            overflow-x: auto;
            z-index: 999;
        }

        .nav-desktop {
            /* position: fixed; */
            bottom: 0;
            width: 100%;
            height: 55px;
            /* box-shadow: 0 0 3px rgba(0, 0, 0, 0.2); */
            background-color: #004d95;
            display: flex;
            overflow-x: auto;
            z-index: 999;
        }

        .nav__link {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            min-width: 50px;
            overflow: hidden;
            white-space: nowrap;
            /* font-family: sans-serif; */
            font-size: 20px;
            color: #ffffff;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
            transition: background-color 0.1s ease-in-out;
        }

        .nav__link:hover {
            background-color: #dddddd;
            color: #000000;
        }

        .nav__icon {
            font-size: 18px;
        }

        .nav__text {
            line-height: 15px;
        }

        .smallcfont {
            font-size: 20px;
            font-weight: bolder;
        }

        .linkRefresh {
            align-content: right;
            text-align: right;
            color: var(--thm-text);
            /* float: right; */
            padding-left: 5px;
        }

        .linkRefresh i {
            font-size: 15px;
        }

        .linkRefresh:hover {
            color: white;
        }

        .smalltxt {
            font-weight: normal;
        }

        /* new font style bug fix */
        .block-title h3 {
            font-size: 40px;
        }

        .about-four__content p,
        .about-five__content p {
            font-size: 17px;
            line-height: 30px;
        }

        .about-two__icon-text h3 {
            font-size: 25px;
        }

        .newtitlefont {
            font-size: 60px !important;
        }

        .about-five__moc {
            right: -5% !important;
            top: 5% !important;
        }

        /* end */
    </style>


</head>

<body>

    <div class="container-fluid">
        <div class="jumbotron">
          <h1 style="font-size:20px;">Skanda Sales<img src="img_avatar.png" style=" border-radius:50%;width:40px;float:right;" alt="Avatar"></h1>
		  
		  
        </div>
    </div>

    <nav class="nav hidden-mobile scrollToLink2">
        <a href="#worldwide" class="nav__link">
            <i class="fa fa-home"></i>
            <span class="nav__text">Home</span>
        </a>
        <a href="#state" class="nav__link nav__link--active">
            <i class="fa fa-align-justify"></i>
            <span class="nav__text">Received</span>
        </a>
        <a href="#zone" class="nav__link">
            <i class="fa fa-search"></i>
            <span class="nav__text">Search</span>
        </a>
        <a href="#news" class="nav__link">
            <i style="font-size: 20px; padding-bottom: 3px;" class="fa fa-balance-scale"></i>
            <span class="nav__text">Balance</span>
        </a>
        <a href="#" class="nav__link side-menu__toggler">
            <i class="fa fa-file"></i>
            <span class="nav__text">Report</span>
        </a>
    </nav>


    <nav class="nav hidden-desktop scrollToLink2">
        <a href="#worldwide" class="nav__link">
            <i class="fa fa-home"></i>
            <span class="nav__text">Home</span>
        </a>
        <a href="#state" class="nav__link nav__link--active">
            <i class="fa fa-align-justify"></i>
            <span class="nav__text">Received</span>
        </a>
        <a href="#zone" class="nav__link">
            <i class="fa fa-search"></i>
            <span class="nav__text">Search</span>
        </a>
        <a href="#news" class="nav__link">
            <i style="font-size: 20px; padding-bottom: 3px;" class="fa fa-balance-scale"></i>
            <span class="nav__text">Balance</span>
        </a>
        <a href="#" class="nav__link side-menu__toggler">
            <i class="fa fa-file"></i>
            <span class="nav__text">Report</span>
        </a>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>



</body>

</html>
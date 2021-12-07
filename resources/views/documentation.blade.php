<!doctype html> <!-- Important: must specify -->
<html>

<head>
    <meta charset="utf-8"> <!-- Important: rapi-doc uses utf8 characters -->
    <script type="module" src="https://unpkg.com/rapidoc/dist/rapidoc-min.js"></script>
    <title>Grainvision Web Documentation</title>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <style>
        /*rapi-doc::part(section-navbar) {}*/


        rapi-doc::part(section-auth) {
            padding-bottom: 10%
        }

        img {
            width: 80%;
            height: auto;
        }

    </style>

    <script>
        window.onload = function () {
            document.body.scrollTop = document.documentElement.scrollTop = 0;
        };

    </script>

</head>

<body>

    <rapi-doc spec-url="/docs" show-header='false' render-style="read" regular-font="Nunito" style="read"
        allow-server-selection="false">
        <span class="m-markdown regular-font" slot="overview">

            <h1 >Grainvision API Documentation</h1>
            <hr>
            <p>This is the documentation page for Grainvision Web. Created to provide a better understanding of
                how to use this app, and build a better overall user experience. It contains all relevant
                paths and operations with important data about them, including their parameters, responses, and
                possible errors. </p>

            <p>The aim is to present all this information in an easily understandable manner, so little base knowledge
                is required to read this documentation.</p>

            <br>

            <div id="tags">
                <h2>Tags</h2>
                <hr>
                <ul>
                    <li> <a href="#tag--Administration">Administration</a> </li>
                    <li><a href="#tag--Authentication">Authentication</a></li>
                    <li><a href="#tag--Facilities">Facilities</a></li>
                    <li><a href="#tag--Settings">Settings</a></li>
                </ul>
            </div>


            <br>

            <section>
                <h2 class="sub-title">Getting started.</h2>
                <hr>
                <p>The first step is logging into the app. For this, you will need a valid email and password that you
                    will use to get authenticated, once you do that you will see the first page; a Dashboard with an
                    overview of your facilities.</p>
                <p>On the top right of the page you can see your profile and language settings, and on the top left
                    there's a
                    dropdown menu with some possible operations.</p>

                <img src="{{ asset('images/grainvision_dashboard.png') }}" alt="grainvision_dashboard">

                <h3>Accessing a facility.</h3>
                <p>Accessing a facility to see its data is the most important characteristic of
                    grainvision web. Using the UI from the dashboard, there's two ways to do this.
                </p>

                <p>The first one is clicking on the "Go to facility" link on the dashboard for any of the facilities
                    shown there.</p>
                <p>The second one is opening the dropdown menu on the left and clicking on "My facilities", which will
                    take you to a list of all facilites, then clicking on "View" for any of them.</p>
                <p>Both these options will take you to the same page, which is an overview of the chosen facility, that
                    contains a graph with a history of information about its sensors and their status.
                </p>


            </section>



        </span>
        <a slot="nav-logo" href="#overview">
            <img slot="nav-logo" src="{{ asset('images/grainvision_logo_brand.svg') }}" />


        </a>
        <h2 slot="nav-logo">Documentation</h2>


    </rapi-doc>





</body>

</html>

<!--
  opciones:
    bg-color
    primary-color
    theme
    text-color
    show-header
    render-style
    font
-->

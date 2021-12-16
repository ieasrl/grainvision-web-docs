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

        rapi-doc {
            width: 100%;
        }
    </style>
    


</head>

<body>



        <rapi-doc spec-url="/docs" show-header='false' render-style="focused" regular-font="Nunito" style="read"
        allow-server-selection="false">
        
        <a slot="nav-logo" href="#overview">
            <img slot="nav-logo" src="{{ asset('images/grainvision_logo_brand.svg') }}" />


        </a>

        
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

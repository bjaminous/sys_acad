<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IClan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>


        <div class="menu2">
            <div class="menu">
                <img class="logo" src="iclan_logo_white-5.png" style="max-height: 70px;" alt="">
                <img src="R.png" alt="" class="menu-button">
                <img src="max.png" alt="" id="max" class="max" onclick="toggleFullscreen()">

            </div>

            <div class="container">
                @yield('contenu')
            </div>

            <div class="element">
                @include('includes.nav')
                <hr>
            </div>

            <script src="script.js"></script>

        </div>



</body>
<script>
    const menuHamburger = document.querySelector(".menu-button")
    const navLinks = document.querySelector(".menu2 .element nav")

    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })
</script>
</html>

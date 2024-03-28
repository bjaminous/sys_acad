<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IClan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register">

       @include('layouts.header')
        <div class="menu_btn">
            <img src="menubutton.png" alt="">
        </div>
        <div class="max_btn"><img src="max.png" alt="" id="max" class="max" onclick="toggleFullscreen()">
        </div>
        <div class="mvc">
            @include('layouts.sidebar')
        </div>
        @include('app.registration_form')

    </div>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
<script>
    const menuHamburger = document.querySelector(".menu_btn")
    const navLinks = document.querySelector(".mvc")
    const form = document.querySelector(".container2")
    let isFormHidden = false;

    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu2')
    if (isFormHidden) {
        form.style.display = 'block'; // ou 'inline' selon le type de display initial du formulaire
        isFormHidden = false;
    } else {
        form.style.display = 'none';
        isFormHidden = true;
    }

    })

</script>
</html>

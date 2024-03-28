<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IClan</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="dash">
        @include('layouts.header')
        <img src="max.png" alt="" id="max" class="max" onclick="toggleFullscreen()">
        @include('layouts.sidebar')
        <div class="container3">
            @include('app.thinks')
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>

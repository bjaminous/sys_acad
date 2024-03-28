
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MV</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
    <div class="menu3">
        <img src="mountain.jpg" alt="">

        <div class="menu3-items">
            <div class="items"><a href=""><i class="fas fw fa-tachometer-alt"></i>Dashboard</a></div>
            <div class="items"><a class="sub-btn"><i class="fas fa-book"></i>Print Doc
             <i class="fas fa-angle-right dropdown"></i>
             </a>
             <div class="sub-menu3">
                <a href="" class="sub-items"> items1</a>
                <a href="" class="sub-items" >items2</a>
                <a href="" class="sub-items">items3</a>
             </div>
            </div>
            <div class="items"><a class="sub-btn"><i class="fas fa-bed"></i>Hostels
                <i class="fas fa-angle-right dropdown"></i>
               </a>
              <div class="sub-menu3">
               <a href="" class="sub-items"> items1</a>
               <a href="" class="sub-items" >items2</a>
              </div>
            </div>
            <div class="items"><a class="sub-btn"><i class="fab fa-paypal"></i>Payments
                <i class="fas fa-angle-right dropdown"></i>
            </a>
            <div class="sub-menu3">
               <a href="" class="sub-items"> items1</a>
            </div>
            </div>
            <div class="items"><a class="sub-btn"><i class="fas fas fw fa-tachometer-alt"></i>Course Registration
               <i class="fas fa-angle-right dropdown"></i></a>
               <div  class="sub-menu3">
                 <a target="_parent" href="{{route('registration')}}" class="sub-items"><i class="fas fa-calendar"></i>Register course</a>
                  </div>
            </div>
            <div class="items"><a class="sub-btn"><i class="fas fas fw fa-tachometer-alt"></i>Result
            <i class="fas fa-angle-right dropdown"></i>
            </a>
            <div class="sub-menu3">
               <a href="" class="sub-items"> items1</a>
            </div>
            </div>
            <div class="items"><a class="sub-btn"><i class="fas fas fw fa-tachometer-alt"></i>Account
            <i class="fas fa-angle-right dropdown"></i>
            </a>
            <div class="sub-menu3">
               <a href="" class="sub-items"> items1</a>
            </div>
            </div>

        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
          $('.sub-btn').click(function() {
              $(this).next('.sub-menu3').slideToggle();
              $(this).find('.dropdown').toggleClass('rotate');
          })
        })
      </script>


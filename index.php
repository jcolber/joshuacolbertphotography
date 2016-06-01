<!DOCTYPE html>
<html>
    <head>
        <?php include'templates/head.php';?>
        
        
        <title>Joshua Colbert Photography</title>

    </head>
    
    <body>
        <?php include'templates/navbar.php';?>
        
<!--        <section class="module parallax parallax-1">
          <div class="container">
            <h1>Motion</h1>
          </div>
        </section>

        <section class="module content">
          <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor...</p>
          </div>
        </section>

        <section class="module parallax parallax-2">
          <div class="container">
            <h1>Shape</h1>
          </div>
        </section>

        <section class="module content">
          <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor...</p>
          </div>
        </section>

        <section class="module parallax parallax-3">
          <div class="container">
            <h1>Colour</h1>
          </div>
        </section>

        <section class="module content">
          <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor...</p>
          </div>
        </section>-->

        <section class="module parallax parallax-1">
          <div class="container">
            <h1>Landscapes</h1>
          </div>
        </section>



            <section class="module parallax parallax-2">
                <a href="/panoramic/index.php" class="module parallax-2">
          <div class="container">
            <h1>Panoramic</h1>
          </div>
                    </a>
        </section>



        <section class="module parallax parallax-3">
          <div class="container">
            <h1>Wildlife</h1>
          </div>
        </section>



        
        <?php include'templates/footer.php';?>
        
        <script>
            (function(){

                var parallax = document.querySelectorAll(".parallax"),
                    speed = 0.5;

                window.onscroll = function(){
                  [].slice.call(parallax).forEach(function(el,i){

                    var windowYOffset = window.pageYOffset,
                        elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

                    el.style.backgroundPosition = elBackgrounPos;

                  });
                };

            })();
        </script>
    </body>
</html>

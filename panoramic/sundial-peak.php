<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Panoramic picture of Sundial Peak in the Wasatch Mountains near Salt Lake City, Utah">      
        <title>Sundial Peak, Wasatch Mountains</title>

        <?php include_once("../templates/analyticstracking.php") ?>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img src="/images/Pano/Sundial-Peak.jpg" class="img-responsive" alt="Sundial Peak, Wasatch Mountains, Utah Landscape Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Sundial Peak                 
                </h1>
                <h2>Sundial Peak is one of the best hikes Utah has to offer for sure. It's featured in magazines, guide books, and maps of the state, and is worth the hike to get there.
                            My favorite part of this hike is where this photograph was taken because the color of the rocks and how green everything is around you. Not too much further than 
                            this picture was taken, you reach Lake Blanche, which is a great lake to sit by and watch fish eat bugs off the surface. In the background is Mt. Superior, and Monte Cristo, 
                            which are also fun hikes to do. If you're feeling like an adventure, start in Little Cottonwood and hit the peaks, and then hike down to Big Cottonwood Canyon. From the top 
                            the looks are deceiving because the lake doesn't look too far, but it is a long long way to go. Waterfalls, flowers, marsh areas, cliffs, and water holes into the earth can be seen 
                            if you're willing to walk it, but if not, you can see some more pictures <a href="../stories-through-pictures/little-to-big-cottonwood">here.</a>
                </h2><br>
                    <?php include ('../templates/p1.php'); ?>
                <?php include ('../templates/pricetable-pano.php'); ?>
                <?php include ('../templates/p2.php'); ?>
                <div class="paypal col-xs-12">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="jcolber@gmail.com">
                        <input type="hidden" name="lc" value="US">
                       
                        <!--MAKE SURE TO CHANGE THIS TITLE-->
                        <input type="hidden" name="item_name" value="Sundial Peak Panoramic">
                        <input type="hidden" name="button_subtype" value="products">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="cn" value="Add special instructions to the seller:">
                        <input type="hidden" name="no_shipping" value="2">
                        <input type="hidden" name="tax_rate" value="6.850">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
                        <?php include ('../templates/paypalpano.php'); ?>                        
                    </form>
                </div>
            </div>
        </div>
        <?php include('../templates/footer.php'); ?>
    </body>
</html>

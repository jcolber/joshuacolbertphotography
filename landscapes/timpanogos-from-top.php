<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Mt. Timpanogos</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img src="/images/5x7/Timp-North.jpg" class="img-responsive" alt="Mt. Timpanogos, Wasatch Mountains, Rocky Mountains, Josh Colbert, Utah Landscape Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Looking North off Timp                  
                </h1>
                <h2>Before we slid down the glacier on Timpanogos I took this picture, which is actually a panoramic, only square.
                    This is the view to the North East and way in the distance is the Uinta Mountain Range. Emerald Lake is the lake
                    that can be seen in this photo, and in the full quality version of this picture you can see the cabin that's down
                    by the lake. It's an awesome stopping point after you slide down the snow and want to rest up before the long hike 
                    back to the car. Hiking the second tallest mountain on the Wasatch Front is definitely worth the 14 mile round trip.
                </h2><br>
                    <?php include ('../templates/p1.php'); ?>
                <?php include ('../templates/pricetable.php'); ?>
                <?php include ('../templates/p2.php'); ?>
                <div class="paypal col-xs-12">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="jcolber@gmail.com">
                        <input type="hidden" name="lc" value="US">
                       
                        <!--MAKE SURE TO CHANGE THIS TITLE-->
                        <input type="hidden" name="item_name" value="Timpanogos Looking North">
                        <input type="hidden" name="button_subtype" value="products">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="cn" value="Add special instructions to the seller:">
                        <input type="hidden" name="no_shipping" value="2">
                        <input type="hidden" name="tax_rate" value="6.850">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHosted">
                        <?php include ('../templates/paypal.php'); ?>                        
                    </form>
                </div>
            </div>
        </div>
        <?php include('../templates/footer.php'); ?>
    </body>
</html>

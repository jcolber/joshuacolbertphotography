<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Sunset on Antelope Island</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img src="/images/5x7/AntelopeSunset.jpg" class="img-responsive" alt="Antelope Island, Utah Landscape Photography, Great Salt Lake"><br>
            </a>       
            <div class="content">
                <h1>
                    Antelope Island Sunset                   
                </h1>
                <h2>Antelope Island is a great place to go hike and explore. You can find big horned sheep, buffalo, jackrabbits, pronghorn, 
                    bobcats, mule deer, coyotes, and a countless number of migrating birds. Make sure to take plenty of water because the sun is
                    relentless and there isn't much for shade on the island. It's also fun to take a dip in the Great Salt Lake when you're 
                    all finished and just float around for a little. Your skin will turn white when you dry off and your clothes will be stiff,
                    but hey, thats the fun of swimming in a lake that contains 5-28% salt depending on the water level.
                </h2><br>
                    <?php include ('../templates/p1.php'); ?>
                <?php include ('../templates/pricetable.php'); ?>
                <?php include ('../templates/p2.php'); ?>
                <div class="paypal col-xs-12">
                    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="jcolber@gmail.com">
                        <input type="hidden" name="lc" value="US">
                        <input type="hidden" name="item_name" value="Antelope Island Sunset">
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

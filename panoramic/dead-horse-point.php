<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Overlooking the Colorado River from Dead Horse Point State Park near Moab, Utah">      
        <title>Dead Horse Point Panoramic Photograph</title>

        <?php include_once("../templates/analyticstracking.php") ?>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img src="/images/Pano/Dead-Horse-Point.jpg" class="img-responsive" alt="Dead Horse Point State Park, Colorado River, Utah Landscape Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Dead Horse Point                 
                </h1>
                <h2>If you've ever been to Moab, Utah, then chances are good you took the short drive to Dead Horse Point State Park. 
                    This is one of my favorite places to bring visitors from out of state because it's on the way to Moab and all you 
                    have to do is get out of the car and walk 50 feet to catch a breathtaking view of this landscape carved by the Colorado 
                    River. Then when you're leaving you can make a short drive and hit the Canyonlands National Park before embarking 
                    onto Arches National Park. This is a great place to see and I'm happy to be only a few hours away from these places. 
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
                        <input type="hidden" name="item_name" value="Dead Horse Point">
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

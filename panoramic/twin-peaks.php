<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Twin Peaks from the top of Monte Cristo with Lake Blanche in the foreground.">      
        <title>Twin Peaks and Lake Blanche</title>

        <?php include_once("../templates/analyticstracking.php") ?>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img src="/images/Pano/Twin-Peaks.jpg" class="img-responsive" alt="Twin Peaks, Mountain Photography, Josh Colbert, Utah Landscape Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Twin Peaks                 
                </h1>
                <h2>This picture is similar to the last, except I took this one off Monte Cristo. Our goal was to walk the ridge to the Twin Peaks, but we couldn't get off Monte Cristo without
                    ropes because it was a cliff off the west side. Instead we walked back to Superior and slid down the snow field and hiked to Lake Blanche. You can read that full story
                    <a href='#'>here.</a> I highly recommend you check out the full story about this hike, loaded with photos.
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
                        <input type="hidden" name="item_name" value="Twin Peaks">
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

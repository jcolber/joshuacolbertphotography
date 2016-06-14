<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Pacific Seaweed</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img src="/images/5x7/Seaweed.jpg" class="img-responsive" alt="Seaweed, California, San Diego, Beach Photography, Ocean Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Colors from the Sea                  
                </h1>
                <h2>On Thanksgiving in 2012, we drove from Salt Lake City straight through to San Diego and slept on the side of the
                    road until the sun came up and then went exploring. We only stayed the day, but we saw sea lions, starfish, urchins, climbed 
                    down ropes off a cliff to the beach, and saw just about everyone that owned a surfboard out in the water. While we were exploring
                    I saw this mess of seaweed and sea stuff washed up on the beach and loved all the colors wrapped up in it. Though it may just be
                    some ocean trash that washed up, I thought it was a neat enough mess to take a picture of.
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
                        <input type="hidden" name="item_name" value="Seaweed">
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

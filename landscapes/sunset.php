<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Sunset in the Trees</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img src="/images/5x7/Sunset.jpg" class="img-responsive" alt="Silouhette Sunset, Pine Trees, Salt Lake City, Utah Landscape Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Silhouetted Sunset                 
                </h1>
                <h2>Towards the end of my canyon to canyon hike, we were finally getting close to Lake Blanche and the sun was already
                    setting and we still had three miles to go once we got to the lake. Needless to say, the sunset was amazing and I always
                    liked the way the trees are just a silhouette and the sky is blazing behind them as the sun fades from view. 
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
                        <input type="hidden" name="item_name" value="Sunset">
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

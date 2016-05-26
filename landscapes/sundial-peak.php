<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>INSERT TITLE</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img src="/images/5x7/Sundial-Peak-Color.jpg" class="img-responsive" alt="Sundial Peak, Wasatch Moutnains, Rocky Mountains, Utah Landscape Photography, Josh Colbert"><br>
            </a>       
            <div class="content">
                <h1>
                    Sundial Peak                  
                </h1>
                <h2>This was from the first hike I took after our twins were born and has always been one of my favorite 
                    hikes to go on. I'm particularly fond of the rock formations and the colors just before you get to Lake
                    Blanche. It's a pretty strenuous hike at times, but it's definitely worth the work once you get to the 
                    lake and get to relax and take in the scenery.
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
                        <input type="hidden" name="item_name" value="Sundial Peak">
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

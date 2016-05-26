<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Downtown Salt Lake City</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img src="/images/5x7/Downtown-SLC.jpg" class="img-responsive" alt="City photography, Downtown Salt Lake City, Salt Lake Temple, Devil Clouds, Utah Landscape Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Clouds Over the City                  
                </h1>
                <h2>This was from when I used to take my camera every single day, everywhere I went. Walking from Capitol Hill 
                    to downtown and these clouds were pretty neat looking. I've looked for a cool cloud formation like this 
                    ever since, and still haven't seen any that were quite like this. I don't really have many downtown Salt Lake 
                    pictures and even if I did, this would still be my favorite one I'm sure.
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
                        <input type="hidden" name="item_name" value="Downtown Salt Lake">
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

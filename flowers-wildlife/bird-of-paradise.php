<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Bird of Paradise</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <div itemscope itemtype="https://schema.org/Photograph">
                <a class="view col-xs-12">
                    <img itemprop="image" src="/images/5x7/Bird-Of-Paridise.jpg" class="img-responsive" alt="Bird of Paradise Flower, California" />
                    <meta itemprop="creator" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                    <meta itemprop="about" content="Fine art Photograph of a Bird of Paradise Flower growing in La Jolla, Californa"<br>
                </a> 
            </div>
            <div class="content">
                <h1>
                    Bird of Paradise                 
                </h1>
                <h2>This was the first time a can recall ever seeing this flower and remembering what it was. Then years later I 
                    went to Florida and saw them there too. So I'm guessing I've seen more than I know and just didn't realize it.
                    But it is a pretty cool flower, and I wish we had them in Utah. Good thing the California coast is only 
                    half a days drive away. This particular flower was in La Jolla, California when we were on our way to check out 
                    sea lions hanging out in the ocean.
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
                        <input type="hidden" name="item_name" value="Bird of Paradise">
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

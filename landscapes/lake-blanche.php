<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Lake Blanche/Sundial Peak</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img itemprop="image" src="/images/5x7/Sundial-Blanche.jpg" class="img-responsive" alt="Joshua Colbert, Sundial Peak, Lake Blanche, Mountain Lake, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Sundial Peak and Lake Blanche in the Wasatch Mountains of Utah"<br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Lake Blanche and Sundial Peak                  
                </h1>
                <h2 itemprop="description">I'm pretty sure this is one of the most photographed lakes in Utah. You can always see fish eating bugs off the lake
                    and kids throwing rocks. It is definitely a fun hike, especially if you go beyond the lake and explore the waterfalls
                    that are kind of hidden unless you go looking for them. The most fun way is from Little Cottonwood up and over Mt. Superior
                    and all the way down to Lake Blanche. It takes a long time to do, but you get to see things most people never do and
                    thats worth it in itself.
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
                        <input type="hidden" name="item_name" value="Lake Blanche">
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

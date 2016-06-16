<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>INSERT TITLE</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img itemprop="image" src="/images/5x7/MilkyWay.jpg" class="img-responsive" alt="Milky Way, Night Photography, Snowbird Ski Resort, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Milky Way over Snowbird Ski and Summer Resort in Utah"><br>
                <br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Milky Way                 
                </h1>
                <h2 itemprop="description">This picture was actually an accident and the only shot I have of it. After our hike from Little Cottonwood to 
                    Big Cottonwood, we got a ride back to the car at midnight and I set up the tripod for one last shot of the sky 
                    over Snowbird. It wasn't until the car ride back that I looked at the photos and saw this amazing galaxy that 
                    we get to be a part of. 
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
                        <input type="hidden" name="item_name" value="Milky Way">
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

<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Looking at Monte Cristo and the Twin Peaks from Mt. Superior in Utah.">      
        <title>Monte Cristo from Mt. Superior, Utah</title>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Monte-Cristo-Twin-Peaks-Lake-Blanche.jpg" class="img-responsive" alt="Lake Blanche, Twin Peaks, Monte Cristo, Utah Backcountry, Mountaintop, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="picture of Monte Cristo from Mt. Superior in Utah"><br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Monte Cristo from Mt. Superior                
                </h1>
                <h2 itemprop="description">A panoramic photo of Monte Cristo on the far left, Twin Peaks down the ridge, Sundial Peak and Lake Blanche 
                    to the right of that. I like this picture because you can see the path we took to get to Lake Blanche that day.
                    Which was straight down the snow field, through the trees and down the the lake. It doesn't look like much from 
                    here, but read my story about this hike, and you'll see how awesome everything is between where this picture was 
                    taken and Lake Blanche. Definitely one of my favorite experiences while out and about hiking.
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
                        <input type="hidden" name="item_name" value="Monte Cristo">
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

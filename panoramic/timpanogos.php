<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Mt. Timpanogos from the large meadow, looking at the final destination">      
        <title>Mt. Timpanogos, Wasatch Mountains, Utah</title>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Timp.jpg" class="img-responsive" alt="Mt. Timpanogos, Mountain Meadow, Wasatch Mountains, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Panoramic picture of Mount Timpanogos on the Wasatch Front"<br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Mount Timpanogos                
                </h1>
                <h2 itemprop="description">Timpanogos is impossible to miss when flying, or driving in from the south to Salt Lake City. Every time I see 
                    this mountain, it makes me happy that I climbed it. We did this the long route, which was a 14 mile round trip
                    hike, but it was definitely worth it. Mountain goats hanging out at the top, feeding chipmunks on the peak, and 
                    sliding down the glacier made this worth the pain of wearing those stupid Vibram toe shoes. Read the full story 
                    <a href="#">here.</a>
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
                        <input type="hidden" name="item_name" value="Timpanogos">
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

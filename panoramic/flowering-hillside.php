<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Flowers growing on the side of Mt. Timpanogos in the Wasatch Range, Utah">      
        <title>Flowers Growing on a Mountain</title>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Flowering-Mountain.jpg" class="img-responsive" alt="Panoramic Photography, Flowers growing on mountainside, Joshua Colbert, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Panoramic picture of flowers growing on side of mountain"<br>
            </a>       
            <div class="content">
                <h1 imageprop="headline">
                    Flowers on Timpanogos                 
                </h1>
                <h2 imageprop="description">A lovely photograph taken on the way up Mt. Timpanogos, which shows a rolling hillside with a ton of flowers 
                    all over it. This picture was taken just before you cross back west toward Utah Valley and the final push to the 
                    peak. Shortly after this was taken, we came across a bunch of mountain goats and their kids. You can find more photos
                    from this hike and the whole story in my <a href="../stories-through-pictures/">Stories Through Pictures</a> section.
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
                        <input type="hidden" name="item_name" value="Flowering Mountainside">
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

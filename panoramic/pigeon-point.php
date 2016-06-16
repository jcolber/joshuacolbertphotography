<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Pigeon Point Lighthouse along State Route 1 in California on the way to Santa Cruz">      
        <title>Pigeon Point Lighthouse</title>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Pigeon-Point-Lighthouse.jpg" class="img-responsive" alt="Lighthouse Photography, California Lighthouse, Pacific Coast, Beach Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Lighthouse picture in California, Pigeon Point"><br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Pigeon Point Lighthouse                
                </h1>
                <h2 itemprop="description">If ever driving the Pacific Coast Highway, you might have a good chance of running into this 
                    lighthouse. It's right off the road and definitely worth the stop. When we stumbled upon it we 
                    drove from Salt Lake City, all the way to San Bernardino and then all the way up the coast to San Francisco 
                    and back to Salt Lake City, all in one weekend. It was fin, but should have been spread out a lot more because
                    we missed a bunch along the way.
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
                        <input type="hidden" name="item_name" value="Pigeon Point">
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

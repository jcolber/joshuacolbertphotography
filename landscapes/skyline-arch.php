<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Skyline Arch, Arches National Park</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img itemprop="image" src="/images/5x7/Skyline-Arch.jpg" class="img-responsive" alt="Moab, Arches National Park, Skyline Arch, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Skyline Arch in Arches National Park, Utah"<br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Skyline Arch                 
                </h1>
                <h2 itemprop="description">Arches National Park is one of those places you have to visit the right time of year. Go on the wrong 
                    weekend and you're just walking around in a crowd of people. However, Living in Utah and being only 4 hours 
                    away from this amazing place makes any time a great time. My favorite thing to do when visiting the Moab 
                    area is to drive out to BLM land and camp out where there aren't too many people. Arches, Dead Horse Point, and 
                    the Canyonlands are all right there and it's almost impossible to drive to one without passing all of these destinations.
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
                        <input type="hidden" name="item_name" value="Skyline Arch">
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

<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>

        <title>Tree on Antelope Island</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view col-xs-12">
                <img itemprop="image" src="/images/5x7/AntelopeSunset.jpg" src="/images/5x7/Antelope-Island-Tree.jpg" class="img-responsive" alt="Dead tree on Antelope Island, Sunset, Great Salt Lake, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Fine art sunset photo of a dead tree on Antelope Island in Utah"<br>
            </a>       
            <div class="content">
                <h1 itemprop="name">
                    Dead Tree - Antelope Island                 
                </h1>
                <h2 itemprop="description">I love taking photographs of dead trees in the foreground with an awesome background to finish the picture.
                    Between this one and the one I took in Arches National Park, I like the sunset on this. I have fond memories
                    of this hike, because it was the first time we actually made it to the summit of Frary Peak on Antelope Island.
                    The first time we ran out of water and almost passed out from dehydration on the way down. This trip allowed us to
                    see a ram standing on a cliff and that alone made this hike one to remember.
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
                        <input type="hidden" name="item_name" value="Antelope Island Tree">
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

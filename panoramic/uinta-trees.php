<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Pine trees growing on a mountain in the Uinta Mountain Range in Utah">      
        <title>Pine Trees in the Uinta Mountains</title>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Uinta-Trees.jpg" class="img-responsive" alt="Uinta Mountains, Pine Trees, Mountain Photography, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Panoramic picture of pine trees in the Uinta Mountains, Utah"><br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Trees on the Mountain                 
                </h1>
                <h2 itemprop="description">This was another one from our hike up Kletting peak and I just loved all the trees we were walking through
                    and the views that we stumbled upon. Big  mountains, big blue sky, big clouds, and big pine trees, whats not 
                    to love about the Uinta Mountains?
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
                        <input type="hidden" name="item_name" value="Uinta Trees">
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

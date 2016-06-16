<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="A beautiful sunset captured from Frary Peak overlooking the Great Salt Lake on Antelope Island, Utah">      
        <title>Antelope Island Sunset Panoramic Photograph</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Antelope-Sunset.jpg" class="img-responsive" alt="Antelope Island, Great Salt Lake, Utah, Panoramic Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Panoramic sunset on Antelop Island, Utah"><br>
            </a>       
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Antelope Island Sunset                 
                </h1>
                <h2 itemprop="description">This is almost like the other picture that I offer in my landscapes section, except it is a much longer picture
                    that actually lets you see what it was like from my point of view. I love taking and making panoramic pictures because
                    they all start as single images and when you're finally finished, you get this amazing picture that was hard to imagine 
                    just looking at each of the individual shot. I might ass that hiking to the top of Antelope Island is a very fun hike 
                    that lets you catch some amazing sunsets over the Great Salt Lake.
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
                        <input type="hidden" name="item_name" value="Antelope Island Sunset Panoramic">
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

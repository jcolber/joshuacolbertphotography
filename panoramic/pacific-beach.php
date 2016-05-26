<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Pacific Beach looking North from Crystal Pier, San Diego, California">      
        <title>Pacific Beach from Crystal Pier, California</title>

        <?php include_once("../templates/analyticstracking.php") ?>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img src="/images/Pano/Pacific-Beach.jpg" class="img-responsive" alt="Crystal Pier, Sand Diego, Beach photography, California, Pacific Beach, Panoramic"><br>
            </a>       
            <div class="content">
                <h1>
                    Pacific Beach from Crystal Pier                 
                </h1>
                <h2>If you've ever been to San Diego, chances are good you've been by or on this pier. When we went 
                    it was Thanksgiving morning that we arrived and it was crazy how many people were out surfing that day. 
                    If I lived there and had the day off, I would probably be doing the same thing. We went to a bunch of 
                    different beaches, played in tide pools finding critters, took pictures of sea lions, and even found a 
                    rope over a cliff to the beach below. It was a pretty fun adventure, and was the first time I had ever 
                    been to the Pacific Ocean.
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
                        <input type="hidden" name="item_name" value="Pacific Beach">
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

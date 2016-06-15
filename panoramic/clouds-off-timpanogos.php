<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Storm blowing over Utah Valley and Utah Lake from the side of Timpanogos">      
        <title>Utah Valley Thunderstorm</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Clouds-off-Timpanogos.jpg" class="img-responsive" alt="Storm Clouds, Mountain Storm, Thunderstorm, Panoramic, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Panoramic storm clouds over Utah valley from Mt. Timpanogos"<br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Utah Valley Storm                 
                </h1>
                <h2 itemprop="description">This was a crazy time to be taking pictures because there was a crazy lightning storm blowing in straight towards 
                    us when we were making our way to the top of Mt. Timpanogos. These clouds are amazing, especially when viewed at full 
                    resolution and blown up on print. This is my personal favorite picture that I've taken and it has a super fun story to go 
                    along with it. You can find that story <a href="../stories-through-pictures/">here</a> and a few other ones as well.
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
                        <input type="hidden" name="item_name" value="Utah Valley Storm">
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

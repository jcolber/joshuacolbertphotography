<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Kletting Peak with A-1 to the East and mountain lakes below">      
        <title>Kletting Peak, Uinta Mountains, Utah</title>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Keltting-A1-Peaks.jpg" class="img-responsive" alt="Utah Landscape Photography, Kletting Peak, A-1 Peak, Uinta Mountain Range, 12,000ft Mountains, Mountain Lakes">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="picture of Kletting and A-1 Peak in the Uintas"><br>
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Kletting Peak and A-1                
                </h1>
                <h2 itemprop="description">A panoramic landscape photograph of two of my favorite peaks in the Uinta Mountain Range. 
                    It took about twelve hours to the peaks and back, and God only knows how many miles we traveled. 
                    You can read more about this hike in the <a href="../stories-through-pictures/kletting-peak"> Stories Through Pictures</a> 
                    section of my website. Hope you enjoy reading about this adventure as much as I did doing it. 
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
                        <input type="hidden" name="item_name" value="Kletting and A-1">
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

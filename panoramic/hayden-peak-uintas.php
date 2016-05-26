<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Hayden Peak from Kletting Peak in the Uinta Mountain Range of Utah">      
        <title>Hayden Peak</title>

        <?php include_once("../templates/analyticstracking.php") ?>
    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img src="/images/Pano/Hayden-Peak.jpg" class="img-responsive" alt="Rocky Mountains, Uinta Mountains, Hayden Peak, Mountain Lakes, Utah Landscape Photography"><br>
            </a>       
            <div class="content">
                <h1>
                    Hayden Peak
                </h1>
                <h2> Hayden Peak is a predominate peak that is impossible to miss when driving the Mirror Lake Highway through 
                    the Uinta Mountains in Utah. I've always wanted to reach the peak of this and someday that will happen, I 
                    just need to bring ropes and all the gear for a couple day trip to make it better. This trip though, we 
                    didn't have any of that, nor did we have the time to try without. Once my boys are old enough, we will surely 
                    make a family outing to these lakes and climb a couple of the other nearby peaks. This was a super fun hike that
                    I will always remember. 
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
                        <input type="hidden" name="item_name" value="Hayden Peak">
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

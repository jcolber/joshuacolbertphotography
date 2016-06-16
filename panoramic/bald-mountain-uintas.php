<!DOCTYPE html>
<html>
    <head>
        <?php include('../templates/head.php'); ?>
        <meta name="Description" content="Bald Mountain off the Mirror Lake Highway in the Uinta Mountain Range in Utah">      
        <title>Bald Mountain from Mirror Lake</title>

    </head>
    
    <body>
        
        <?php include('../templates/navbar.php'); ?>    
        <div itemscope itemtype="https://schema.org/Photograph" class="full-background col-xs-12">
            <a class="view2 col-xs-12">
                <img itemprop="image" src="/images/Pano/Bald-Mountain.jpg" class="img-responsive" alt="Bald Mountain, Mirror Lake, Uinta Mountains, Utah Landscape Photography">
                <meta itemprop="creator" type="person" content="Joshua Colbert"><meta itemprop="copyrightHolder" content="Joshua Colbert Photography"><meta itemprop="copyrightYear" content="2012"> 
                <meta itemprop="about" content="Bald Mountain from Mirror Lake, Uinta picture"><br>
            </a>       
            </a>       
            <div class="content">
                <h1 itemprop="headline">
                    Bald Mountain and Mirror Lake                 
                </h1>
                <h2 itemprop="description">If you've ever driven the Mirror Lake Scenic Highway, then you've definitely passed right by both of these features.
                    Just before reaching Mirror Lake the highway reaches a whopping 10,715 ft and is the highest paved road in Utah. Driving 
                    on this road has gotten me to a height that I've only reached hiking, which is pretty cool if you think about it. 
                    Most of the mountains in this range are 12,000+ ft, with the tallest being King's Peak at 13,534 ft. Bald Mountain is only
                    11,948 ft and left me wanting to reach 12,000 because I was so close after this one. Luckily a few months later I made it 
                    up Kletting Peak and that broke my height record. Though they aren't the thirteeners that Colorado has, it's still more than 
                    a lot of people get to experience. 
                 
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
                        <input type="hidden" name="item_name" value="Bald Mountain from Mirror Lake">
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

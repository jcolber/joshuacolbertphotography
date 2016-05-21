<!DOCTYPE html>
<html>
    <head>
        <?php include'head.php';?>
        
        
        <title>Joshua Colbert Photography</title>

    </head>
    
    <body>
        <?php include'navbar.php';?>
        
        
            
        
        
        <div class="pano-image col-xs-12">
            <img src="/images/Pano/baldy-clouds.jpg" class="img-responsive col-xs-12">
        </div>
        <span class="pano-description">
            <h1>
                <?php echo'Clouds off Bald Mountain';?>               
            </h1>
            <h2>A panoramic black and white print of the breath-taking view from the side of 
                Bald Mountain in the Uinta Mountain Range, off Mirror Lake Highway in Northern Utah.
                This picture was taken just before going up and over the cornice to reach the top. I love
                the cloud formation on this one the most.
            </h2>

            <p>All of my photography is printed on archival quality photo paper with a lustre finish, and is 
                thoughtfully packaged to ensure its arrival in perfect condition. Each print is hand checked to 
                ensure it meets my expectations and is personally signed before shipment.<br><br> 

                Sizing that is readily available and prices are listed as follows:<br>

                11.75x36" Unmatted and ready for framing -$120<br>
                12"x36" Canvas -$220<br><br>

                Customization is available on request and may include things such as custom sizing, 
                addition of a quote or verse, or canvas and metallic prints. I will do my best to accommodate any 
                other requests or specialization. Please <a href="mailto:jcolber@gmail.com"> contact me</a> with any questions or requests.
            </p>
            
            <a data-pin-do="buttonPin" data-pin-color="red" href="https://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.joshucolbertphotography.com%2Fpanoramic.html&media=http%3A%2F%2Fjoshuacolbertphotography.com%2Fimages%2FPano%2FJosh-Colbert-1.jpg&description=Next%20stop%3A%20Pinterest">
                <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" />
            </a><br>

            <div class="fb-like" data-href="https://facebook.com/colbertphotography.me" data-width="20" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false">
            </div>
            
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" class="pull-right">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="9HL6YMNJVRYHN">
                <table>
                <tr><td><input type="hidden" name="on0" value="Material"></td></tr><tr><td><select name="os0">
                    <option value="Lustre Print">Lustre Print $120.00 USD</option>
                    <option value="Canvas">Canvas $220.00 USD</option>
                </select> </td></tr>
                </table>
                <input type="hidden" name="currency_code" value="USD"><br>
                <input type="submit" value="Add to Cart" name="submit" title="PayPal - The safer, easier way to pay online!" class="btn btn-primary pull-right btn-sm">

            </form> 
        </span>
        <?php include'footer.php';?>
    </body>
</html>

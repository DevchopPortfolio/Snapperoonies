<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Photography</title>

    <!-- class="material-icons" -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">    
</head>
<body>


    <!-- HEADER SECTION -->

    <?php
        // specifies id of each nav element
        $home_id = '';
        $pricing_id = '';
        $contact_id = 'activenav';
        
        // includes the header php file
        include 'header.php';
    ?>


    <!-- CONTACT SECTION 1 -->

    <section id="contact1" class="wrapper">
        <h1>Contact Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quaerat, odit at aliquid aperiam exercitationem quod necessitatibus, eum molestiae atque minima consectetur sed, voluptatem eligendi quos error debitis eos culpa.</p>
    </section>


    <!-- CONTACT SECTION 2 -->

    <section id="contact2">

        <div id="contact2sub"  class="wrapper">

            <aside id="socialicons">            
                <a href="#" class="fa fa-facebook"></a> <span>Facebook</span>                
                <a href="#" class="fa fa-twitter"></a> <span>Twitter</span>                
                <a href="#" class="fa fa-instagram"></a> <span>Instagram</span>                
                <a href="#" class="fa fa-flickr"></a> <span>Flickr</span>                
                <a href="#" class="fa fa-google"></a> <span>Google</span>                
                <a href="#" class="fa fa-linkedin"></a> <span>LinkedIn</span>                
                <a href="#" class="fa fa-pinterest"></a> <span>Pinterest</span>
            </aside>

            <div id="contacttext">            

                <aside id="contactcards" >
                
                    <article class="contactcard">
                        <i class="material-icons">phone_iphone</i>
                        <span>+44 (0)7777 777777</span>
                    </article>
                    
                    <article class="contactcard">
                        <i class="material-icons">phone</i>
                        <span>01234 5678901</span>
                    </article>
                    
                    <article class="contactcard">
                        <i class="material-icons">alternate_email</i>            
                        <span> <a href="mailto:info@snapperoonies.com">info@snapperoonies.com</a>   </span>            
                    </article>

                </aside>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero illum ad nemo corrupti eius blanditiis in possimus eum. Cum recusandae sed dolor explicabo, eum et maiores culpa obcaecati corporis veniam accusantium. Veritatis voluptatem, molestias ipsum praesentium ipsam consequuntur error quis recusandae esse dolore fuga omnis pariatur nisi a corrupti labore vel quas iste eum nesciunt ad reprehenderit nobis nam debitis. Id dolor ea dolore reiciendis pariatur ut alias veritatis quasi?</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum necessitatibus, deleniti ab dolores a earum libero molestias facere molestiae ipsa quaerat nobis perferendis ut ea.</p>            

            </div>

        </div>

    </section>
    
    
    <!-- CONTACT SECTION 3 -->
    
    <section id="contact3" >

        <div class="wrapper">

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit iure eum nesciunt quaerat eos temporibus non sunt necessitatibus itaque architecto molestiae sed alias laudantium similique quo, voluptates, ea tenetur. Expedita mollitia tenetur voluptatum reprehenderit repellendus.
            </p>

            <div class="messagebox">
                <h2>Message Us</h2>
                <form action="">
                    <label>                    
                        Your Name
                        <br>
                        <input type="text" name="" placeholder="" id="">
                    </label>
                    <br>
                    <label>
                        Your Email Address
                        <br>
                        <input type="text" name="" placeholder="" id="">
                    </label>
                    <br>
                    <label>
                        Your Message
                        <br>
                        <textarea name="" id="" cols="" rows="" placeholder=""></textarea>             
                    </label>
                    <br>    
                    <input type="submit" value="Send">
                </form>
            </div>

        </div>

    </section>


    <!-- FOOTER SECTION -->

    <?php 
        include 'footer.html';
    ?>
    

</body>
</html>
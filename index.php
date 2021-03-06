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


    <!-- HEADER SECTION - external file -->

    <?php
        // specifies id of each nav element
        $home_id = 'activenav';
        $pricing_id = '';
        $contact_id = '';
        
        // includes the header php file
        include 'header.php';
    ?>
    

    <!-- HERO SECTION -->

    <section id="hero">
        <div class="wrapper">
            <h1>Snapperoonies</h1>
            <h2>Professional Photography Services</h2>
            <p>Outstanding images. Every time. Contact us today and discuss your project with our photographers.</p>
            <div id="button"> <a href="contact.php">Contact</a></button>
        </div>
    </section>


    <!-- CARDS SECTION -->

    <section id="cardsouterwrap">
        
        <div id="cards" class="wrapper">

            <article class="card card1">
                <i class="material-icons">thumb_up</i>
                <h5>Professional Service</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae, facilis.</p>
            </article>

            <article class="card card2">
                <i class="material-icons">photo_camera</i>
                <h5>Your Shoot, Your Choice</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam, quae.</p>
            </article>

            <article class="card card3">
                <i class="material-icons">place</i>
                <h5>Studio / Location / Home</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non, perferendis.</p>
            </article>

            <article class="card card4">
                <i class="material-icons">forum</i>
                <h5>Award-Winning Customer Care</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, sit.</p>
            </article>
    
        </div>       

    </section>
    

    <!-- PRESENTATION SECTION -->

    <section id="presentation">
        
        <div class="wrapper">

            <article id="presbox">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae provident harum totam id amet, perspiciatis excepturi error expedita veniam praesentium ad. Earum eligendi distinctio vel dignissimos iusto eius, possimus quae dolorem velit voluptatibus nobis hic voluptates iste mollitia beatae temporibus.</p> 
            </article>
            
        </div>

    </section>


    <!-- TESTIMONIALS SECTION -->

    <section id="testimonial" >

        <div class="wrapper">
        
            <div id="testi-header">
                <h2>Testimonials</h2>
                <p>What our customers say about us...</p>
            </div>

            <div id="testi-main">

                <aside>
                    <img src="./pics/personplaceholder3.png" alt="john smith's pic">            
                    <article class="onlytext">                        
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio earum id voluptate unde voluptas, dolore magni corporis saepe similique possimus, velit quod aperiam, recusandae nisi. Quisquam aliquam recusandae numquam a. </p>
                        <p>Voluptas, dolore magni corporis saepe similique possimus, velit quod aperiam, recusandae nisi. Quisquam aliquam recusandae numquam a. </p>
                        <p><b> - John Smith </b></p>
                    </article>
                </aside>

                <aside>
                    <img src="./pics/personplaceholder2.jpg" alt="john smith's pic">            
                    <article class="onlytext"> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor sunt mollitia aperiam incidunt distinctio natus facilis repellendus voluptate temporibus voluptatem at deleniti adipisci maiores ipsam nisi odio nobis, tenetur a eius? Delectus amet porro ab quos adipisci temporibus quisquam quibusdam qui eveniet nisi. Quidem, illo?</p>
                        <p>Dolor sunt mollitia aperiam incidunt distinctio natus facilis repellendus voluptate temporibus voluptatem at deleniti adipisci maiores ipsam nisi odio nobis, tenetur a eius? Delectus amet porro ab quos adipisci temporibus quisquam quibusdam qui eveniet nisi. Quidem, illo?</p>
                        <p><b> - John Smith </b></p>
                    </article>      
                </aside>

                <aside>
                    <img src="./pics/personplaceholder1.png" alt="john smith's pic">                    
                    <article class="onlytext">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero natus accusantium, maiores doloribus assumenda debitis odio porro! Sed, doloremque delectus? Quia, veniam natus iusto pariatur provident autem praesentium incidunt minima tempore obcaecati, expedita suscipit ipsum sint ex unde impedit quis!</p>
                        <p> <b>- John Smith </b> </p>
                    </article>
                </aside>
  
            </div>
        
        </div>

    </section>


    <!-- FOOTER SECTION -->

    <?php 
        include 'footer.html';
    ?>
    

</body>
</html>
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
        $home_id = '';
        $pricing_id = 'activenav';
        $contact_id = '';
        
        // includes the header php file
        include 'header.php';
    ?>


    <!-- PRICING SECTION 1 -->

    <section id="pricing1" class="wrapper">        
            <h1>Pricing</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit enim necessitatibus velit suscipit minus eveniet! Dignissimos tempore, doloribus labore aperiam nostrum iure libero illum cumque, nihil accusamus, a provident officiis rem excepturi ad optio praesentium laudantium beatae fuga. Tempora mollitia error nobis et fuga quos itaque, incidunt esse inventore adipisci!</p>        
    </section>


    <!-- PRICING SECTION 2 -->

    <section id="pricing2">

        <div id="pricing2-sub" class="wrapper">

            <aside class="head head1">
                <h4>4 hour coverage</h4>
                <h2>£600</h2>                    
            </aside>            

            <aside class="head head2">
                <h4>8 hour coverage</h4>
                <h2>£990</h2>                    
            </aside>            

            <aside class="head head3">
                <h4>12 hour coverage</h4>
                <h2>£1250</h2>                    
            </aside>                
                                        
            <article class = article1>
                <p>Lorem ipsum, velit. Quisquam aliquam recusandae numquam a. </p>
                <p>Voluptas, dolore magni corporis saepe similique possimus, velit quod aperiam, recusandae nisi. Quisquam aliquam recusandae numquam. </p>
            </article>

            <article class = article2> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                <p>Dolor sunt mollitia temporibus quisquam quibusdam qui eveniet nisi. Quidem, illo?</p>                        
            </article>      

            <article class = article3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero natus accusantium, maiores doloribus assumenda debitis odio porro! Sed, doloremque delectus? Quia, veniam natus iusto pariatur provident autem praesentium incidunt minima tempore obcaecati, expedita suscipit ipsum sint ex unde impedit quis!</p>                        
            </article>                

        </div>        

    </section>


    <!-- ALBUM SECTION -->

    <section id="album">     
          
        <img src="./artphotos/1.jpeg" alt="photo album demo pic 1">
        <img src="./artphotos/2.jpeg" alt="photo album demo pic 2">
        <img src="./artphotos/3.jpeg" alt="photo album demo pic 3">
        <img src="./artphotos/4.jpeg" alt="photo album demo pic 4">
        <img src="./artphotos/5.jpeg" alt="photo album demo pic 5">
        <img src="./artphotos/6.jpeg" alt="photo album demo pic 6">
        <img src="./artphotos/7.jpeg" alt="photo album demo pic 7">
        <img src="./artphotos/8.jpeg" alt="photo album demo pic 8">
        <img src="./artphotos/9.jpeg" alt="photo album demo pic 9">
        <img src="./artphotos/10.jpeg" alt="photo album demo pic 10">
        <img src="./artphotos/11.jpeg" alt="photo album demo pic 11">
        <img src="./artphotos/12.jpeg" alt="photo album demo pic 12">
        
    </section>
    

    <!-- FOOTER SECTION -->

    <?php 
        include 'footer.html';
    ?>
    

</body>
</html>
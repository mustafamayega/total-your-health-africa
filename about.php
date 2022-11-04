<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
      />

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" type="text/css" href="css/tyh.css">  

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="row">
            <div class="image">
                <img src="img/tm.jpg" alt="">
            </div>

            <div class="content">
                <h3> Why Choose Total Your Health</h3>
                <p>Total Your Health Africa Global is a transnational group of Companies engaging itself in Scientific
                  research and development, manufacturing of Phamaceuticals, herbal medicine and herbal cosmetics of a complete systems-oriented nature with it's head quarters based in Kampala 
                  Uganda and manufacturing facilities in Masaka. It is registered and accredited by NCRI(Natural Chemotherapeutics Research Institute) and NDA (National Drug Authority) in Uganda. </p>  
                <p>We have urshered in a brandnew era in which science and Techinology are going in momentum everywhere around the world.
                   There is agrowing public Applicationof products made from natural ingredients and manufactured with process sensitive to the natural environment
                  , changing lives through its remarkable products , proven compersation plan and charitable programs.</p>
                  <p>The company has been delivering its promises for more than decades now as the results speak for themselves. With extensive experience as network leaders thier innovativite spirit and vissionary leadership. It's board of directors has taken (TYHAGB) from a simple local organisation to an internaertional enterprise and major industry-player that has improved lives of millions. 
                  It leads the industry with it's stable business model and international growth population in Africa. </p>
                  

                 <a href="products.html" class="btn">Our Products</a>

            </div>

        </div>
</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

<h1 class="title">Mission</h1>
            <div class="box-container">

                <div class="box">
                    <img src="img/seeds.jpg" alt="">
                    <h3>Mission</h3>
                    <p>Our Mission  is to be committed to refine and expand every aspect of our business to catter for the demands of human health through spreading
                     the health care philosophy and the concept based on all natural resources for the optimization of human health and contribute
                     to the well being of African Society.
                    </p>
                </div>

                <div class="box">
                    <img src="img/20220728_130440.jpg" alt="">
                    <h3>Vission</h3>
                    
                    <p>In conticipation of the expansion, the African Consumer base and their spanding power in health and confidence that the back-to-nature and
                     environment-awareness movement will grow even stronger in years to come.</p>
                     <p>Total Your Health Africa Global Business is moving ahead with it's plans for expansion and modernization of it's production facilities in Uganda, which will be the head office for Africa and Global manufacturing production.</p>
                     <h4>Plans for the Future:</h4>
                     <p>To tap previously untouched Countries and maarket sugment the company is revving up to open the markets especially in Uganda and African Continent to target specific segement of the market.</p>  <p>The business level will involve maire cultural promotion and investments, Capital operation 
                     due to the broad distribution of TYHAB.</p>
                
                
                  </div>

                <div class="box">
                    <img src="img/20220728_131315.jpg" alt="">
                    <h3>Marketing Plan</h3>
                    <p>You earn an income of 30% just by Sharing and inviting people to use the products when you resell the products to customers, you earn good retail profits.</p><p><b> TYHAB </b>provides it'self on selling the world's finest nutrietional herbal products and offering a unique business oppotunity.</p>
                    <p><h3>UNLIMITED WAYS OF EARNING</h3></p>
                    <P>Welcoming Bonus</P><p>Sponser's Bonus</p><p>Product Voucher Bonus</p><p>Retail Bonus</p><p>Lifestyle Reward Bonus</p>
                    <p> <font color="red">Earn 2 Million and become your own boss.</font> Total Your Helath Africa ensures good living with amazing Composation plan and stem cell products. You can become financial and Health-wise Reactivated</p>
                </div>

            </div>



   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<section class="about">

<div class="row">
           

            <div class="content">
                <h3>PREFACE</h3>
                <P>As time goes on, mankind development is gaining in momentum. We are creating more advanced Civilization and as we do, we encounter more diseases of civilization on one hand.</P>
                <p>We ha ve obtained unprecendanted achievements in science, technology and we have increased the average life of expectancy and health level of man.</p>
                <p>On the other hand, the population of earth has increased from <font color="red">1.9 billion</font> at the begining of this Century to nearly <font color="red">7.3 billion</font> at present.
               It is estimated by the World Health Organisatin <b>(W.H.O)</b> that it will reach <font color="red">8.3 billion</font> by the year <b>2030.</b></p>
               <p>Problems with the environment wars, over population, lack of education and over-development are all facing usbut the biggest overall problem by far is health. When we speak about health people, we are addressing only about one fourth of the total population of the world suffering with debilitating diseases comprise another one fourth of the population.</p><p>
                  The other half of the world suffer from poor health 60 - 70% of population in poor health are suffering mordern diseases of civilisation such as hypertension, arterioscleroses,
                  Cardiovascular diseases, cancer, Diabetes, and various immunodefiency diseases, such as AIDs.</p>
              <p>Recently the data from domestic and international sources show that there is a high incidence of mortality and disability rates because these diseases are becoming momre severe.</p>
              <p>It is estimated that the number of people afflicted with diabetes will double in the next 15years. <b>WHO</b> pointed out that everyone shares health and care concern to realise this goal. The first step is to make people
            understand that health and prevention care are an indispensable part of their life.</p><p>Next, people should consider wht moder herbalist science has discovered. With the coming of the new century, people are looking to preserve their health and prevent diseases. </p>
            <p>Total Your Health Africa, has developed a series of health products with the aim of lowering blood lipid level delaying senlility, fight cancer, Hypertension and regulating the incorporation of the immune response. Since their introduction millions have benefited from our products.</p>
            

                

            </div>

           

        </div>

</section>

<section class="steps">

<h1 class="title">Management</h1>
            <div class="box-container">

                <div class="box">
                    <img src="img/tony.jpg" alt="">
                    <h3>Dr Tonny Ssentamu</h3>
                    <p>Founder and CEO of Total Your Health Africa (TYHA) was deter mined to take the herbal system especially the traditional African herbal systems and the out come of her scientific research and 
                     to introduce these wonders everywhere in Africa and the World at-large.
                    </p><P> <font color="red"> <i>"Work in the purpose life is short" </i> </font> <font color="blue"><b>Rome 8:28. </b> </font> With this mind, he invested significantly setting up the 
                    <font color="green">   (Total your Health Africa ) </font> new health products manufacturing facility and Traditional Uganda and it's Herbal medical gifts.</P>
                </div>

                <div class="box">
                    <img src="img/manage.jpg" alt="">
                    <h3>Manager</h3>
               
                
                
                  </div>

              

            </div>

</section>

<!-- reviews section starts  -->

<section class="reviews">

    <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">
      <div class="swiper-wrapper">

<div class="swiper-slide slide">
    <img src="img/eyod51.jpg" alt="">
    <p>/*
        Saturday, 19 March 202216:48:16
        User: 
        Server: MUSTAFA
        Database: Hambastores
        Application: 
     */
     
     STORE</p>
     <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
     </div>

    <h3>Mayega Mustafa</h3>
</div>

<div class="swiper-slide slide">
    <img src="img/20220721_145325.jpg" alt="">
    <p>/*
        Saturday, 19 March 202216:48:16
        User: 
        Server: MUSTAFA
        Database: Hambastores
        Application: 
     */
     
     STORE</p>
     <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
     </div>

    <h3>Tonny</h3>
</div>

<div class="swiper-slide slide">
    <img src="img/20220728_130440.jpg" alt="">
    <p>/*
        Saturday, 19 March 202216:48:16
        User: 
        Server: MUSTAFA
        Database: Hambastores
        Application: 
     */
     
     STORE</p>
     <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
     </div>

    <h3>Major</h3>
</div>

<div class="swiper-slide slide">

    <img src="img/eyod51.jpg" alt="">
    <p>/*
        Saturday, 19 March 202216:48:16
        User: 
        Server: MUSTAFA
        Database: Hambastores
        Application: 
     */
     
     STORE</p>
     <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
     </div>

    <h3>Mayega Mustafa</h3>
</div>


</div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
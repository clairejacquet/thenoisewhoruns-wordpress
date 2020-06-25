<div class="container">

  <section id="about" class="row about d-flex justify-content-center ">

    <!-- about us - text -->
    <article class="about__content col col-lg-8 d-print-block">
      <div class="d-flex flex-column align-items-center justify-content-center align-items-xl-center justify-content-xl-start ">

        <h2 class="about__title about__title--text">and here we are...</h2>

        <p class="about__description about__description--text"> In the beginning there was Ian. Then there was O bruit qui court, which is a nice enough restaurant, and quickly there was a direct translation - The Noise Who Runs. Then there was all the songs for a debut The Noise Who Runs album, swiftly followed by a lot more songs, more than enough for a second The Noise Who Runs Album. Then there was an unfathomable plan to pay 200€ a month to release all those songs individually, with the spurious logic that if you make an album it's kind of out of date and you are writing different and more interesting things when you have to promote it. This terrible thing an album causes an artist would obviously be remedied by taking 26 existing songs and releasing individually, once a month, for just over a two-year period. </p>

        <div class="about__image">
          <img  src="wp-content/themes/simple-persona/assets/images/band/37TNWR.jpg" alt="">
          <p class="photo_caption--text" style="margin-top:1em;">Photo by Sidonie <a class="photo_caption--text" href="https://www.instagram.com/sidonie_zenith/" > @sidonie_zenith </a></p>
        </div>

        <p class="about__description about__description--text"> By this point, the parting of the ways across the Atlantic, there was Felipe with his guitar and, even before Felipe, there was Gerald with his bass. And just in time for Christmas, there was Julien. And Julien came with his drumsticks and technology and the album began to be finished. And then there was Coronavirus, although everyone seems to have opted for the "COVID-19" moniker, desperate, since they are all experts enough and that they are all still "bored of experts" anyway, to demonstrate their understanding and awareness of all things in using numbers in a name to sound scientifically informed. </p>
        <p class="about__description about__description--text"> And then there was optimism in the initially surreal "last person on earth AND it's a fucking Sunday" feeling descended. Like World War One (and therefore WWII by a knock-on default really) catalysed greater equality of rights and programmes of social welfare, the global shutdown in the wake of Coronavirus would shift the window of opportunity to a wider view, more panoramic, looking forward several generations, dozens of lifetimes, and repurpose the present industries and workforces to employment specifically designed to move to a green economy and tackle and arrest the irreversible climate change that, if, as will happen, the governments of the world don't demand this with immediate effect, will shortly threaten every single person on the planet - it's just a few short years of doing nothing away. </p>
        <p class="about__description about__description--text"> And so there was So It Goes. And then were was a first EP planned. And songs were written or resurrected, recorded, sent back and forth via WeTransfer. And during this time, a second EP was planned as the initial surrealism of confinement became weirdly existential as you contemplated the absurdity of billions of people all being at home, more or less alone. And songs were written or resurrected, recorded, sent back and forth via WeTransfer, and here we are. This is the first release by The Noise Who Runs, and the first of three, well, let's call them, The Coronaviral EPs. Yes, not so very long ago, upon completion of EP1 - The First of Two Sides of a Double-headed Coin - a third EP was planned. Threes are good. You can't do things without triangles. And three is one of the sacred magic numbers. These are 1, 3, 7, 10 and 12. The best number of all is 82. Thanks for your attention. </p>
      </div>
    </article>

  </section>

</div>

<?php include 'content-displayposts.php';?>


<!-- ************ parrallalw effect - no future ************  -->


<div class="container-fluid parallax--stencil">
</div>

<div class="container">

  <!-- ************ promo EP ************  -->


  <div id="signup-ep" class=" row d-flex align-items-center d-print-none">


    <!-- sign up cover image  -->
    <section class="col-12 col-md-6 signup__image d-flex flex-column align-items-center justify-content-center">
      <img src="wp-content/themes/draco/assets/img/ep1.jpg" alt="">
    </section>

    <!-- sign up description text and form  -->
    <section class="col-12 col-md-6 signup__description d-flex flex-column align-items-center justify-content-between">



      <article class="signup__description__text_area">
        <h2 class="signup__description__text_area--title">Free download available</h2>
        <p class="signup__description__text_area--text">
          Join our mailing list and receive our new EP 'The First of Two Sides of a Double Headed Coin' by email.
        </p>

        <div id="signup" class="col">

          <!-- Begin Mailchimp Signup Form -->
          <!-- <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css"> -->
          <style type="text/css">

          /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
          We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
          </style>
          <div id="mc_embed_signup">
            <form action="https://thenoisewhoruns.us18.list-manage.com/subscribe/post?u=e33150d9edb4aff16116921ac&amp;id=f46ae28c86" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

              <!-- <label for="mce-EMAIL" class="mce-EMAIL">Email Address</label> -->

              <div id="mc_embed_signup_scroll">
                <!-- <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="" required="required"> -->

                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e33150d9edb4aff16116921ac_f46ae28c86" tabindex="-1" value=""></div> -->
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
            </form>
          </div>

          <!--End mc_embed_signup-->
        </div>
      </article>

    </section>




  </div>
  
  <section id="streaming" class="row d-flex align-items-center signup-ep--logos-area">
    <h3  class="stream_area--title col-12">EP available on streaming</h3>
    <div class="d-flex justify-content-center flex-wrap col-12 signup-ep--logos">
      <a v-for="stream in stream" :href="stream.url" class="signup-ep--logo d-flex justify-content-center">
        <img :style="{width: stream.resize}" :src="stream.logo" alt="">
      </a>
    </div>
  </section>

</div>

<!-- ************ parrallax effect - social media ************  -->


<div class="container-fluid parallax--socialmedia">
</div>


<div id="main" class="main container">

  <section id="projects" class="row backcatalogues d-flex justify-content-center">
    <div  class="col-12">
      <div class="backcatalogues__title">
        <h2 class="backcatalogues__title--text">Back catalogue</h2>
      </div>
    </div>

    <div class="col-10 col-md-12 backcatalogues__gallery">

      <div v-for="backcatalogue in backcatalogues" class="backcatalogue col-sm-6 col-md-4" >
        <a class="backcatalogue--link" :href="backcatalogue.link">
          <img :src="backcatalogue.img" :alt="backcatalogue.alt">
          <div class="backcatalogue__overlay overflow">
            <p> {{ backcatalogue.name }} </p>
          </div>
        </a>
      </div>
    </div>

  </section>

</div>

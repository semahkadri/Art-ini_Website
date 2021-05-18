<?php
	require 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Artini</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrapp.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animatee.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/csss/utile.css">
	<link rel="stylesheet" type="text/css" href="assets/csss/maiin.css">
<!--===============================================================================================-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- style-link -->
    <link rel="stylesheet" href="assets/css/stylee.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="Assets/vendor/nouislider/nouislider.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="Assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="Assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="Assets/css/custom.css">
    <link rel="shortcut icon" href="Assets/img/mostache.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script>(function(w, d) { w.CollectId = "6086bfcb34b8b76f099eff1a"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<body>
<?php include_once 'include/header-1.php'; ?>
</br></br></br>

	<div class="bg-contact100" style="background-image: url('assets/img/a.jpg');">
		<div class="container-contact100">
        <div class="wrapper" id="app">
        <div class="card-form">
            <div class="card-list">
                <div class="card-item" v-bind:class="{ '-active' : isCardFlipped }">
                    <div class="card-item__side -front">
                        <div class="card-item__focus" v-bind:class="{'-active' : focusElementStyle }"
                            v-bind:style="focusElementStyle" ref="focusElement"></div>
                        <div class="card-item__cover">
                            <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'"
                                class="card-item__bg">
                        </div>

                        <div class="card-item__wrapper">
                            <div class="card-item__top">
                                <img src="https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/chip.png"
                                    class="card-item__chip">
                                <div class="card-item__type">
                                    <transition name="slide-fade-up">
                                        <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'"
                                            v-if="getCardType" v-bind:key="getCardType" alt=""
                                            class="card-item__typeImg">
                                    </transition>
                                </div>
                            </div>
                            <label for="cardNumber" class="card-item__number" ref="cardNumber">
                                <template v-if="getCardType === 'amex'">
                                    <span v-for="(n, $index) in amexCardMask" :key="$index">
                                        <transition name="slide-fade-up">
                                            <div class="card-item__numberItem"
                                                v-if="$index > 4 && $index < 14 && cardNumber.length > $index && n.trim() !== ''">
                                                *</div>
                                            <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }"
                                                :key="$index" v-else-if="cardNumber.length > $index">
                                                {{cardNumber[$index]}}
                                            </div>
                                            <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }"
                                                v-else :key="$index + 1">
                                                {{n}}</div>
                                        </transition>
                                    </span>
                                </template>

                                <template v-else>
                                    <span v-for="(n, $index) in otherCardMask" :key="$index">
                                        <transition name="slide-fade-up">
                                            <div class="card-item__numberItem"
                                                v-if="$index > 4 && $index < 15 && cardNumber.length > $index && n.trim() !== ''">
                                                *</div>
                                            <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }"
                                                :key="$index" v-else-if="cardNumber.length > $index">
                                                {{cardNumber[$index]}}
                                            </div>
                                            <div class="card-item__numberItem" :class="{ '-active' : n.trim() === '' }"
                                                v-else :key="$index + 1">
                                                {{n}}</div>
                                        </transition>
                                    </span>
                                </template>
                            </label>
                            <div class="card-item__content">
                                <label for="cardName" class="card-item__info" ref="cardName">
                                    <div class="card-item__holder">Card Holder</div>
                                    <transition name="slide-fade-up">
                                        <div class="card-item__name" v-if="cardName.length" key="1">
                                            <transition-group name="slide-fade-right">
                                                <span class="card-item__nameItem"
                                                    v-for="(n, $index) in cardName.replace(/\s\s+/g, ' ')"
                                                    v-if="$index === $index" v-bind:key="$index + 1">{{n}}</span>
                                            </transition-group>
                                        </div>
                                        <div class="card-item__name" v-else key="2">Full Name</div>
                                    </transition>
                                </label>
                                <div class="card-item__date" ref="cardDate">
                                    <label for="cardMonth" class="card-item__dateTitle">Expires</label>
                                    <label for="cardMonth" class="card-item__dateItem">
                                        <transition name="slide-fade-up">
                                            <span v-if="cardMonth" v-bind:key="cardMonth">{{cardMonth}}</span>
                                            <span v-else key="2">MM</span>
                                        </transition>
                                    </label>
                                    /
                                    <label for="cardYear" class="card-item__dateItem">
                                        <transition name="slide-fade-up">
                                            <span v-if="cardYear"
                                                v-bind:key="cardYear">{{String(cardYear).slice(2,4)}}</span>
                                            <span v-else key="2">YY</span>
                                        </transition>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-item__side -back">
                        <div class="card-item__cover">
                            <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + currentCardBackground + '.jpeg'"
                                class="card-item__bg">
                        </div>
                        <div class="card-item__band"></div>
                        <div class="card-item__cvv">
                            <div class="card-item__cvvTitle">CVV</div>
                            <div class="card-item__cvvBand">
                                <span v-for="(n, $index) in cardCvv" :key="$index">
                                    *
                                </span>

                            </div>
                            <div class="card-item__type">
                                <img v-bind:src="'https://raw.githubusercontent.com/muhammederdem/credit-card-form/master/src/assets/images/' + getCardType + '.png'"
                                    v-if="getCardType" class="card-item__typeImg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data">
            <div class="card-form__inner">
                <div class="card-input">
                    <label for="cardNumber" class="card-input__label">Numéro de la carte</label>
                    <input type="text" name="numcarte" id="cardNumber" class="card-input__input" v-mask="generateCardNumberMask"
                        v-model="cardNumber" v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardNumber"
                        autocomplete="off">
                </div>
                <div class="card-input">
                    <label for="cardName" class="card-input__label">Nom</label>
                    <input type="text" id="cardName" class="card-input__input" v-model="cardName"
                        v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardName" autocomplete="off">
                </div>
                <div class="card-form__row">
                    <div class="card-form__col">
                        <div class="card-form__group">
                            <label for="cardMonth" class="card-input__label">Date d'expiration </label>
                            <select class="card-input__input -select" name="mois" id="cardMonth" v-model="cardMonth"
                                v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                                <option value="" disabled selected>Mois</option>
                                <option v-bind:value="n < 10 ? '0' + n : n" v-for="n in 12"
                                    v-bind:disabled="n < minCardMonth" v-bind:key="n">
                                    {{n < 10 ? '0' + n : n}}
                                </option>
                            </select>
                            <select class="card-input__input -select" name="annee" id="cardYear" v-model="cardYear"
                                v-on:focus="focusInput" v-on:blur="blurInput" data-ref="cardDate">
                                <option value="" disabled selected>Année</option>
                                <option v-bind:value="$index + minCardYear" v-for="(n, $index) in 12" v-bind:key="n">
                                    {{$index + minCardYear}}
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="card-form__col -cvv">
                        <div class="card-input">
                            <label for="cardCvv" class="card-input__label">CVV</label>
                            <input type="text" name="cvc" class="card-input__input" id="cardCvv" v-mask="'####'" maxlength="3"
                                v-model="cardCvv" v-on:focus="flipCard(true)" v-on:blur="flipCard(false)"
                                autocomplete="off">
                        </div>
                    </div>
                </div>
                <center>
                <a href="checkout.php" class="btn btn-info">Valider</a>
                <a style="color:azure" type="reset" class="btn btn-dark">Annuler</a>


                   </form> 
                </button>
            </div>
            </form>
        </div>
    </div>

    </div>
		</div>
	</div>


  <!-- Footer-->
    <!-- Footer-->
    <?php include_once 'include/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src="assets/js/sh.js"></script>
    <!-- JavaScript files-->
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }    
      // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
      // use your own URL in production, please :)
      // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
      //- injectSvgSprite('${path}icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- jQuery-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="assets/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="assets/vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>var basePath = ''</script>
    <!-- Main Theme JS file    -->
    <script src="js/theme.js"></script>
<!-- vueJs  start -->
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    <script src="assets/js/sh.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
    <script src="https://unpkg.com/vue-the-mask@0.11.1/dist/vue-the-mask.js"></script>
    <!-- /vueJs end-->
    <!--jQuery-->
    <script src="assets/jQuery/jquery.min.js"></script>
    <script src="assets/jQuery/jQuery.js"></script>
    <!--/jQuery-->
    <!--javascript-->
    <script src="assets/js/main2.js"></script>
    <!--/javascript-->
<!--===============================================================================================-->
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrapp.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="assets/js/maino.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


  
<?php include_once 'include/footer.php'; ?>
    <!-- JavaScript files-->
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // to avoid CORS issues when viewing using file:// protocol, using the demo URL for the SVG sprite
        // use your own URL in production, please :)
        // https://demo.bootstrapious.com/directory/1-0/icons/orion-svg-sprite.svg
        //- injectSvgSprite('${path}icons/orion-svg-sprite.svg'); 
        injectSvgSprite('https://demo.bootstrapious.com/directory/1-4/icons/orion-svg-sprite.svg');
    </script>
    <!-- jQuery-->
    <script src="Assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS bundle - Bootstrap + PopperJS-->
    <script src="Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup - Lightbox for the gallery-->
    <script src="Assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Smooth scroll-->
    <script src="Assets/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="Assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="Assets/vendor/object-fit-images/ofi.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
    <script>
        var basePath = ''
    </script>
    <!-- Main Theme JS file    -->
    <script src="Assets/js/theme.js"></script>
</body>
</html>

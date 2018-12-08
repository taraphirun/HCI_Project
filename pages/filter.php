<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<nav class="app--nav state--loaded">
  
  <!--Logo-->
  <a href="#" class="app--logo">Craigslist</a>
  
  <!--Side nav filters-->
  <div class="rslt__fltr">  

    <!--area filter-->
    <div class="rslt__fltr ui-nav-menu" js-ui-menu>
      <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
        <i class="btn__seg ion ion-ios-location"></i><span class="btn__seg btn__seg--txt">sf bay area</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow"></i>
      </button>
      
      <ul class="ui-nav-menu-opts"><!--empty--></ul>
    </div>
    
    <!--sale filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded" js-ui-menu>
      <button class="ui-nav-menu-trgr" js-ui-menu-trigger>
        <i class="btn__seg ion ion-pricetag"></i><span class="btn__seg btn__seg--txt">for sale</span><i class="btn__seg ion ion-ios-arrow-down menu-arrow"></i>
      </button>
      
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="cars & trucks" />
          <span class="menu__fltr__lbl">Cars & Trucks</span>
          <span class="menu__fltr__cntr cntr-clr--1">163</span>
        </li>        
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="auto parts" />
          <span class="menu__fltr__lbl">Auto Parts</span>
          <span class="menu__fltr__cntr cntr-clr--2">52</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <input type="checkbox" name="sale" value="wanted" />
          <span class="menu__fltr__lbl">Wanted</span>
          <span class="menu__fltr__cntr cntr-clr--3">29</span>
        </li>
      </ul>
    </div>
    
    <!--sold by filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-person"></i><span class="btn__seg btn__seg--txt">Sold by</span>
      </button>
      
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--1"></span>
          <span class="menu__fltr__lbl">Owner</span>
        </li>
        <li class="menu__fltr fltr-type__row">
          <span class="menu__fltr__lgnd lgnd-clr--2"></span>
          <span class="menu__fltr__lbl">Dealer</span>
        </li>
      </ul>
    </div>
    
    <!--price filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-card"></i><span class="btn__seg btn__seg--txt">price</span>
      </button>
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__sldr">
          <div js-price-slider></div>
        </li>
        <li class="menu__fltr fltr-type__sldr"></li>
      </ul>
    </div>
    
    <!--year filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-calendar"></i><span class="btn__seg btn__seg--txt">year</span>
      </button>
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__rang">
          <label class="ui-dd">
            <select name="min-range-year" id="">
              <option value="">min</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
            </select>
            <i class="ion ion-ios-arrow-down"></i>
          </label>
          <span class="rang-brdg">to</span>
          <label class="ui-dd">
            <select name="max-range-year" id="">
              <option value="">max</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
            </select>
            <i class="ion ion-ios-arrow-down"></i>
          </label>
        </li>
      </ul>
    </div>
    
    <!--paint filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-paintbucket"></i><span class="btn__seg btn__seg--txt">paint</span>
      </button>
      <ul class="ui-nav-menu-opts">
        <li class="menu__fltr fltr-type__clr">
          <span class="menu__fltr__clr fltr__clr--white"></span>
          <span class="menu__fltr__clr fltr__clr--black"></span>
          <span class="menu__fltr__clr fltr__clr--orange"></span>
          <span class="menu__fltr__clr fltr__clr--red"></span>
          <span class="menu__fltr__clr fltr__clr--teal"></span>
          <span class="menu__fltr__clr fltr__clr--grey"></span>
          <span class="menu__fltr__clr fltr__clr--yellow"></span>
        </li>
      </ul>
    </div>
    
    <!--odometer filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">odometer</span>
      </button>
      <ul class="ui-nav-menu-opts"><!--empty--></ul>
    </div>
    
    <!--fuel filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">fuel</span>
      </button>
      <ul class="ui-nav-menu-opts"><!--empty--></ul>
    </div>

    <!--transmission filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">transmission</span>
      </button>
      <ul class="ui-nav-menu-opts"><!--empty--></ul>
    </div>

    <!--type filter-->
    <div class="rslt__fltr ui-nav-menu state--expanded">
      <button class="ui-nav-menu-trgr">
        <i class="btn__seg ion ion-ios-plus-outline"></i><span class="btn__seg btn__seg--txt">type</span>
      </button>
      <ul class="ui-nav-menu-opts"><!--empty--></ul>
    </div>

    <div class="rslt__fltr__acts">
      <button class="btn__rds btn__prim btn-act--reset">
        <i class="btn__seg ion ion-ios-refresh-empty"></i><span class="btn__seg btn__seg--txt">reset search</span>
      </button>
    </div>
    
  </div>
</nav>

<main class="app--core">
  <header class="app--hdr">
    <div class="hdr__inr">
      <label for="search" class="hdr__srch">
        <input type="text" class="srch__txt" name="search" placeholder="Search" />
        <span class="srch__icn"><i class="ion-ios-search"></i></span>
      </label>
      <div class="hdr__acts">
        <button class="btn__rd btn--fav-cnt">
          <i class="btn__seg ion-android-favorite"></i>
        </button>
        <button class="btn__rd btn--usr-avtr"></button>
      </div>
    </div>
  </header>
  
  <section class="rslt">
    <nav class="rslt__view">
      <p class="rslt__view__dtl">Showing <strong>476</strong> Results for "Porsche"</p>
      <div class="rslt__view__acts">
        <button class="btn__fl state--active" js-view-grid><i class="btn__seg ion ion-grid"></i></button>
        <button class="btn__fl" js-view-rows><i class="btn__seg ion ion-navicon"></i></button>
        <button class="btn__fl" js-view-map><i class="btn__seg ion ion-ios-location"></i></button>
        
        <label class="ui-dd">
            <select name="result-sort" id="">
              <option value="relevant">Relevant</option>
              <option value="relevant">Recent</option>
            </select>
            <i class="ion ion-ios-arrow-down"></i>
          </label>
      </div>
    </nav>
    
    
    <ul class="rslt__feed">
      
      <li class="feed__itm" js-result-item><!--item 1-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('http://global.fncstatic.com/static/managed/img/Leisure/2009/porsche-spyder-876-fire.jpg')">
            <span class="feed__itm__prc">$34,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h
            >
          <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm feed__itm--fav" js-result-item><!--item 2-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('https://o.aolcdn.com/hss/storage/adam/e62b554e2f0f5edcbfb80f337a438c98/lead6-2015-porsche-918-spyder-fd.jpg')">
            <span class="feed__itm__prc">$84,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--2">by dealer&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm" js-result-item><!--item 3-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('http://airows.com/wp-content/uploads/2014/09/BN-EF721_mag091_J_20140822154547.jpg')">
            <span class="feed__itm__prc">$224,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm feed__itm--fav" js-result-item><!--item 4-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('https://o.aolcdn.com/hss/storage/adam/d5db356cb1fb0f3604cf89c6e6b49667/lead5-2015-porsche-macan-fd.jpg')">
            <span class="feed__itm__prc">$54,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm" js-result-item><!--item 5-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('http://businessdayghana.com/wp-content/uploads/2014/05/porch.jpg')">
            <span class="feed__itm__prc">$24,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--2">by dealer&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm feed__itm--fav" js-result-item><!--item 6-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('http://cnet2.cbsistatic.com/hub/i/r/2014/10/22/d80fd316-a0fd-45fc-9078-37c347630834/thumbnail/770x433/3afcfb2af573eb0306cabe0703df68ef/2015-porsche-macan-turbo-7340-001.jpg')">
            <span class="feed__itm__prc">$114,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm feed__itm--fav" js-result-item><!--item 7-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('https://o.aolcdn.com/hss/storage/adam/86e5b51dbd7e362f3aa7f7d02dc8184e/lead11-singer-reimagined-porsche-911.jpg')">
            <span class="feed__itm__prc">$86,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm" js-result-item><!--item 8-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('http://upload.wikimedia.org/wikipedia/commons/3/32/Porsche_912.jpg')">
            <span class="feed__itm__prc">$126,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--2">by dealer&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
      <li class="feed__itm" js-result-item><!--item 9-->
        <div class="feed__itm__inr">
          <div class="feed__itm__img" style="background-image: url('http://www.fluxauto.com/wp-content/uploads/2012/05/Baby-Porsche-Boxster-front-left-side-view.jpg')">
            <span class="feed__itm__prc">$98,000</span>
            <button class="btn__fl btn--fav" js-item-fav>
              <i class="btn__seg ion ion-android-favorite-outline"></i>
              <i class="btn__seg ion ion-android-favorite"></i>
            </button>
          </div>
          <h5 class="feed__itm__ttl">2013 Porsche 911 Carrera S Cabriolet Only 2,500 Miles!</h5>
          <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;<span>cars & trucks</span></p>
        </div>
      </li><!--@end feed item-->
      
    </ul><!--@end result feed-->
    
    <footer class="feed__pgr">
      <button class="btn__rds pgr__itm pgr__str"><i class="btn__seg ion ion-ios-arrow-left"></i><i class="btn__seg ion ion-ios-arrow-left"></i></button>
      <button class="btn__rds pgr__itm pgr__prev"><i class="btn__seg ion ion-ios-arrow-left"></i></button>
      <button class="btn__rds pgr__itm"><span>1 - 9</span></button>
      <button class="btn__rds pgr__itm"><span>10 - 19</span></button>
      <button class="btn__rds pgr__itm"><span>20 - 29</span></button>
      <button class="btn__rds pgr__itm state--selected"><span>30 - 39</span></button>
      <button class="btn__rds pgr__itm"><span>40 - 49</span></button>
      <button class="btn__rds pgr__itm"><span>50 - 59</span></button>
      <button class="btn__rds pgr__itm"><span>60 - 69</span></button>
      <button class="btn__rds pgr__itm pgr__next"><i class="btn__seg ion ion-ios-arrow-right"></i></button>
      <button class="btn__rds pgr__itm pgr__end"><i class="btn__seg ion ion-ios-arrow-right"></i><i class="btn__seg ion ion-ios-arrow-right"></i></button>
    </footer>
    
  </section>
  
</main>

<script>
(function($){
  $(document).on('ready', function(){
    
    // toggle all nav menus
    $('[js-ui-menu-trigger]').on('click', function(){
      $(this).parents('[js-ui-menu]').toggleClass('state--expanded');
    });
    
    var $price = $("[js-price-slider]");
    
    $price.slider({
      range: true,
      min: 0,
      max: 300,
      values: [ 0, 250 ],
      slide: function( event, ui ) {
        $(ui.handle).attr('data-value', formatCurrency(ui.value));
      }
    });
    
    _.each( $('.ui-slider-handle'), function(item, itr){
      $(item).attr('data-value', formatCurrency($price.slider('values', itr)));
    });
    
    $('[js-item-fav]').on('click', function(){
      $(this).parents('.feed__itm').toggleClass('feed__itm--fav');
    });
    
  });
  
  var formatCurrency = function(num){
    return (num == 0) ? '$' + num : '$' + num + 'k';
  }
})(jQuery);
</script>


<style>
  @import "compass/css3";

// alignment measurements
$pad: 20px;
$pad-double: $pad * 2;
$pad-half: $pad / 2;
$pad-and-half: $pad * 1.5;

$space: 18px;
$space-double: $space * 2;
$space-half: $space / 2;
$space-and-half: $space * 1.5;


// colors
$grey-lightest: #fafafa;
$grey-lighter: #e3e3e3;
$grey-light: #bfbfbf;
$grey-medium: #979797;
$grey-dark: #696969;
$grey-darkest: #1d1d1d;

$grey-border-lightest: #f5f5f5;
$grey-border-lighter: #ebebeb;
$grey-border-light: #e5e5e5;
$grey-border-medium: #cbcbcb;

$blue: #32a1d0;
$blue-dark: #2f9bb2;
$teal: #17d1bd;
$green: #00bf99;
$orange: #ff5631;
$red: #ef331a;
$pink: #ee3d56;
$yellow: #f4d60e;

// dimention and general chared vars
$nav-width: 250px;

@mixin setLeftShift($delay: 0s) {
  @include animation(shiftInLeft .45s ease $delay 1 backwards);
}
@mixin setBottomShift($delay: 0s) {
  @include animation(shiftInBottom .45s ease $delay 1 backwards);
}
@mixin fadeIn($delay: 0s) {
  @include animation(introFadeIn .65s ease-out $delay 1 backwards);
}
@mixin fadeInScale($delay: 0s) {
  @include transform-origin(center, center);
  @include animation(introFadeInScale .45s ease-out $delay 1 backwards);
}


/*------------------------------------*\
    $GENERIC
\*------------------------------------*/
* { box-sizing: border-box; }
html, body {
  position: relative;
  width: 100%;
  height: 100%;
  font-family: "Roboto";
  font-weight: 400;
}

// tags
strong, b {
  font-weight: 700;
}

// forms
input {
  -webkit-appearance: none;
  outline: none;
  background-color: transparent;
  border: none;
  display: inline-block;
  font-family: "Roboto";
}
input[type="checkbox"] {
  -webkit-appearance: checkbox;
  padding: 0;
}
select {
  -webkit-appearance: none;
  outline: none;
  border: none;
  background-color: transparent;
}
input:-webkit-autofill, textarea:-webkit-autofill, select:-webkit-autofill {
  box-shadow: 0 0 0 1000px white inset;
}




/*------------------------------------*\
    $BUTTONS
\*------------------------------------*/
.btn { // dont use directly, meant to be extended
  -webkit-appearance: none;
  display: inline-block;
  padding: 0;
  vertical-align: top;
  line-height: $space-double;
  text-align: left;
  outline: none;
  border: none;
  background-color: transparent;
  @include transition(all .25s ease);
}
  .btn__seg {
    display: inline-block;
    vertical-align: top;
    padding-left: $pad-half;
    line-height: inherit;
    font-size: inherit;
    @include transition(all .25s ease);
    &:first-child, &.ion + &.ion {
      padding-left: 0; // ignore for fist element, as well as side by side icons
    }
    &.ion {
      font-size: 20px;
    }
  }
  .btn__seg--txt {
    font-size: 12px;
  }

// round buttons, see header buttons
.btn__rd {
  @extend .btn;
  width: $space-double;
  height: $space-double;
  font-size: 16px;
  text-align: center;
  line-height: #{$space-double - 4}; // account for border
  border: 1px solid $grey-lighter;
  border-radius: 50%;
  cursor: pointer;
  &:hover {
    border-color: $grey-light;
  }
}

// flat buttons, see result photos
.btn__fl {
  @extend .btn;
  min-width: $space;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
}

// rounded corner buttons, se "reset search" and pager
.btn__rds {
  @extend .btn;
  height: $space-double;
  font-size: 14px;
  line-height: #{$space-double - 4}; // account for border
  text-align: center;
  border: 1px solid $grey-lighter;
  border-radius: $space;
  cursor: pointer;
}
  // primary button style - just a color scheme
  .btn__prim {
    text-transform: uppercase;
    background-color: $red;
    border: 1px solid $red;
    color: white;
    &:hover {
      background-color: lighten($red, 10%);
    }
  }





/*------------------------------------*\
    $DROPDOWNS
\*------------------------------------*/
.ui-dd {
  position: relative;
  display: inline-block;
  height: $space-and-half;
  padding: 0 10px;
  line-height: #{$space-and-half - 4}; // account for border
  color: $grey-medium;
  border: 1px solid $grey-border-medium;
  border-radius: $space;
  background-color: transparent;
  select {
    display: inline-block;
    vertical-align: top;
    height: 100%;
    width: 50px;
    line-height: inherit;
    color: inherit;
    background-color: inherit;
  }
  /* covers up the annoying down arrow FF leaves in. I know this blocks the click event, theres a way around that, but I dont wanna redo how I include the icon file. A tutorial for another day */
  .ion {
    display: block;
    position: absolute;
    top: 0;
    right: 10px;
    height: 100%;
    width: 18px;
    line-height: $space-and-half;
    text-align: center;
    color: inherit;
    background-color: inherit; // same as sidenav
  }
}



/*------------------------------------*\
    $LAYOUT
\*------------------------------------*/

.app--nav {
  overflow-y: scroll;
  position: fixed;
  top: 0; bottom: 0; left: 0;
  width: $nav-width;
  background-color: #f4f4f4;
  @include setLeftShift(.6s);
}

.app--core {
  overflow-y: scroll;
  position: fixed;
  top: 0; right: 0; left: $nav-width; bottom: 0;
  z-index: 10;
  background-color: #fff;
  border-left: 1px solid #d2dee2;
  box-shadow: -2px 0 4px rgba(0,0,0,.04);
  @include fadeIn(0s);
}





/*------------------------------------*\
    $NAV
\*------------------------------------*/

.app--logo {
  display: block;
  padding: $space 0;
  font-family: "Roboto Slab", Times New Roman;
  font-size: 28px;
  line-height: $space-double;
  text-align: center;
  color: #000;
  border-bottom: 1px solid $grey-border-light;
  text-decoration: none;
}

  .ui-nav-menu {
    overflow: hidden;
    position: relative;
    display: block;
    margin-left: $pad;
  }
  .ui-nav-menu + .ui-nav-menu {
      border-top: 1px solid $grey-border-light;
  }
    .ui-nav-menu-trgr {
      @extend .btn;
      display: block;
      position: absolute;
      top: 0; left: 0;
      z-index: 10;
      height: 48px; // ff calculates lh differently
      width: 100%;
      padding-right: $pad;
      line-height: 48px;
      color: $grey-dark;
      text-transform: uppercase;
      background-color: #f4f4f4;
      .btn__seg:first-child {
        padding-left: 0;
        color: $blue-dark;
      }
      .btn__seg.ion {
        font-size: 16px;
      }
      .btn__seg--txt {
        font-size: 10px;
        font-weight: 400;
        letter-spacing: .6px;
      }
      .menu-arrow {
        float: right;
        color: $grey-medium;
      }
    }
    [js-ui-menu-trigger] {
      cursor: pointer;
      &:hover .btn__seg--txt {
        color: #000;
      }
    }
    
    // menu options
    .ui-nav-menu-opts {
      overflow: hidden;
      position: relative;
      z-index: 5;
      width: 100%;
      max-height: 0;
      padding-top: 48px;
      opacity: 0;
      @include transition(all .45s ease);
      @include transform(translateY(-50%));
      button {
        display: block;
        height: 30px;
        background-color: red;
        border-bottom: 1px solid green;
      }
    }
    .state--expanded .ui-nav-menu-opts {
      opacity: 1;
      max-height: 300px;
      @include transform(translateY(0%));
    }

    /* Menu Option Styles */
    .menu__fltr {
      @extend %clearfix;
      padding: 0 $pad $space-half;
      &:last-child {
        padding-bottom: $space;
      }
      > span { // all inner elements
        display: inline-block;
        vertical-align: top;
      }
    }
      .menu__fltr__lbl {
        font-size: 12px;
        line-height: 18px;
        color: $grey-dark;
      }
      .menu__fltr__cntr {
        float: right;
        min-width: 30px;
        padding: 4px 6px;
        font-size: 9px;
        color: white;
        border-radius: 10px;
        text-align: center;
        &.cntr-clr--1 { background-color: $orange; }
        &.cntr-clr--2 { background-color: $green; }
        &.cntr-clr--3 { background-color: $blue; }
      }
      .menu__fltr__lgnd {
        height: 12px;
        width: 12px;
        margin-top: 3px;
        margin-right: 4px;
        border: 2px solid black;        
        background-color: transparent;
        border-radius: 50%;
        &.lgnd-clr--1 { border-color: $red; }
        &.lgnd-clr--2 { border-color: $blue; }
      }
      .menu__fltr__clr {
        display: inline-block;
        vertical-align: top;
        height: $space;
        width: $space;
        margin-right: 6px;
        border-radius: 50%;
        &:last-child {
          margin-right: 0;
        }
        &.fltr__clr--white { background-color: #fff; }
        &.fltr__clr--black { background-color: #000; }
        &.fltr__clr--orange { background-color: $orange; }
        &.fltr__clr--red { background-color: $red; }
        &.fltr__clr--teal { background-color: $teal; }
        &.fltr__clr--grey { background-color: $grey-medium; }
        &.fltr__clr--yellow { background-color: $yellow; }
      }

    // grab the filter by its non ui class
    @for $i from 1 through 10 {
      .rslt__fltr:nth-child(#{$i}) {
        @include setLeftShift(.6s + .04s * $i);
      }
    }

    // custom filter types
    .fltr-type__rang {
      .ui-dd {
        background-color: #f4f4f4;
      }
      .rang-brdg {
        display: inline-block;
        vertical-align: top;
        padding: 0 8px;
        font-size: 12px;
        line-height: $space-and-half;
        color: $grey-medium;
      }
    }
    
    .fltr-type__sldr {
      padding: 8px $pad $space;
      .ui-slider, .ui-slider-range {
        display: block;
        height: 4px;
        border-radius: 2px;        
      }
      .ui-slider {
        position: relative;
        width: 100%;
        background-color: rgba($green, .2);
      }
      .ui-slider-range {
        position: absolute;
        background-color: rgba($green, .4);
      }
      .ui-slider-handle {
        position: absolute;
        display: block;
        width: 16px;
        height: 16px;
        background-color: white;
        border: 2px solid $green;
        border-radius: 50%;
        outline: none;
        @include transform(translateY(-6px));
        &:before {
          content: attr(data-value);
          display: inline-block;
          position: absolute;
          top: 100%;
          left: 50%;
          width: 24px;
          font-size: 10px;
          line-height: 30px;
          text-align: center;
          color: $grey-medium;
          @include transform(translateX(-50%));
        }
        &:after {
          @extend %before-after;
          top: 50%;
          left: 50%;
          width: 4px;
          height: 4px;
          background-color: $green;
          border-radius: 50%;
          @include transform(translate3d(-50%, -50%, 0));
        }
      }
    }
  
  // action button container, in this case just the one reset one
  .rslt__fltr__acts {
    width: 100%;
    padding-top: $space-double;
    padding-bottom: $space-double;
    text-align: center;
    .btn-act--reset {
      width: 65%;
      margin: 0 auto;
    }
  }





/*------------------------------------*\
    $HEADER
\*------------------------------------*/

.app--hdr { // adds up to 72
  width: 100%;
  padding: 0 $pad-and-half;
  @include setBottomShift(.3s);
}
  .hdr__inr {
    position: relative;
    width: 100%;
    border-bottom: 1px solid $grey-border-lighter;
  }

    .hdr__srch {
      display: block;
      position: relative;
      padding: $space 0;
      @include setBottomShift(.34s);
    }
      .srch__txt, .srch__icn {
        // order matters, allows me to piggy back off input:focus
        line-height: $space-double;
        color: $grey-lighter;
      }
      .srch__txt {
        padding: 0 0 0 $pad-double; // offset to stick the search icon to the left
        font-size: 28px;
        font-weight: 100;
        letter-spacing: 1px;
        color: $grey-darkest;
        &:focus + .srch__icn {
          left: -6px;
          color: $grey-darkest;
        }
      }
      .srch__icn {
        display: block;
        position: absolute;
        top: $space; left: 0;
        font-size: 32px;
        @include transition(all .35s ease);
        i {
          line-height: inherit;
        }
      }
        // placeholder styling acrobatics
        .srch__txt::-webkit-input-placeholder { font-family: "Roboto"; font-weight: 100; letter-spacing: 1px; color: $grey-light; }
        .srch__txt::-moz-placeholder { font-family: "Roboto"; font-weight: 100; letter-spacing: 1px; color: $grey-light; }

    // header action button holder
    .hdr__acts {
      position: absolute;
      top: 0; right: 0; height: 100%;
      padding: $space 0;
      @include setBottomShift(.52s);
      .btn__rd {
        position: relative;
        margin-left: $pad-half;
        background-color: transparent;
        color: $grey-medium;
      }
      // red dot augment
      .btn--fav-cnt:before {
        @extend %before-after;
        top: 0; right: 0;
        width: 8px; 
        height: 8px;
        background-color: $red;
        border-radius: 50%;
      }
      .btn--usr-avtr {
        overflow: hidden;
        background: url('https://d13yacurqjgara.cloudfront.net/users/21845/avatars/normal/f8ab26b7cc2ec5bfd0b18f27ad0159d2.png?1418498122') center center no-repeat;
        background-size: cover;
      }
    }





/*------------------------------------*\
    $RESULTS
\*------------------------------------*/
.rslt {
  width: 100%;
  padding: 0 $pad-double;
  @include fadeInScale(.35s);
}

  /* Result Filter bar */
  .rslt__view {
    @extend %clearfix;
    position: relative;
    width: 100%;
    padding: $space-double 0;
  }
    .rslt__view__dtl {
      display: block;
      float: left;
      padding: 0;
      line-height: $space-double;
    }
    .rslt__view__acts {
      display: block;
      float: right;
      .btn__fl {
        color: $grey-lighter;
        margin-left: 4px;
        &:hover {
          color: $grey-light;
        }
        &.state--active {
          color: $blue-dark;
        }
      }
      .ui-dd {
        margin-top: 4px;
        margin-left: $pad;
        background-color: #fff;
        color: $grey-light;
        border: 1px solid $grey-lighter;
        select {
          min-width: 70px;
          max-width: auto; 
        }
      }
    }

  /* Result Item Feed */
  .rslt__feed {
    margin-left: #{$pad-double * -1};
    @include display-flex;
    @include flex-flow(row wrap);
  }
    .feed__itm {
      width: 33.3333%;
      padding-left: $pad-double;
      padding-bottom: $pad-double;
    }
      .feed__itm__inr {
        padding-bottom: $space;
        border-bottom: 1px solid $grey-border-lighter;
        @include transition(all .25s ease);
        &:hover {
          background-color: $grey-lightest;
          border-bottom-color: $blue;
          @include transition(none);
        }
      }
        .feed__itm__img {
          position: relative;
          display: block;
          width: 100%; height: 180px;
          background-position: center center;
          background-repeat: no-repeat;
          background-size: cover;
          .btn__fl, .feed__itm__prc {
            display: block;
            position: absolute;
            top: 0;
            line-height: $space-double;
            color: white;
          }
          .btn__fl {            
            right: 0;
            width: $space-double;
          }
          .btn--fav {
            // layer two icons on top of each other to allow a bg and border color
            .ion {
              position: absolute;
              top: 0; left: 0; bottom: 0; right: 0;
              margin: auto;
            }
            .ion-android-favorite {
              z-index: 10;
              color: rgba(#000, .45);
            }            
            .ion-android-favorite-outline {
              z-index: 15;
            }
          }
        }
        .feed__itm--fav .btn--fav .ion-android-favorite {
          // hate this nesting but whatever
          color: rgba($red, .75);
        }
          .feed__itm__prc {
            padding: 0 $pad-half;
            font-size: 14px;
            font-weight: 300;
            background-color: rgba(#000, .65);
          }
        .feed__itm__ttl {
          padding: $space $pad-half;
          font-size: 16px;
          line-height: $space;
          color: $grey-darkest;
        }
        .feed__itm__lbl {
          position: relative;
          padding-left: 28px;
          font-size: 12px;
          font-weight: 300;
          color: $grey-light;
          &:before {
            @extend %before-after;
            top: 50%; left: $pad-half;
            width: 8px;
            height: 8px;
            background-color: transparent;
            border: 2px solid transparent;
            border-radius: 50%;
            @include transform(translatey(-50%));
          }
        }
        .feed__itm__lbl.lbl--1:before { border-color: $red; }
        .feed__itm__lbl.lbl--2:before { border-color: $blue; }

  /* Result Pager */
  .feed__pgr {
    overflow: hidden;
    padding: $space-half $pad $space-double;
    .btn__rds {
      display: block;
      float: left;
      margin-right: 2.25%;
      color: $grey-light;
      background-color: #fff;
      &:hover {
        color: $grey-medium;
        border-color: $grey-medium;
      }
      &:last-child {
        margin-right: 0;
      }
      &.state--selected {
        border-color: $blue;
        color: $blue;
      }
    }
    .pgr__itm {
      position: relative;
      z-index: 20;
      width: 8%;
      &:after {
        @extend %before-after;
        top: 50%; 
        left: 100%;
        height: 1px;
        width: 60%; 
        background-color: $grey-border-lighter;
      }
      &:last-child:after {
        display: none;
      }
    }
    .pgr__prev, .pgr__next {
      width: 5%;
    }
    .pgr__str, .pgr__end {
      width: 5%;
    }
  }





/*------------------------------------*\
    $EXTENDS
\*------------------------------------*/
%before-after {
  content: '';
  position: absolute;
  display: block;
}

%clearfix {
  &:after {
    content: '';
    display: block;
    clear: both;
  }
}





/*------------------------------------*\
    $KEYFRAMES
\*------------------------------------*/

// Im not even going to try to keep this neat, its purely eye candy for the initial load
@include keyframes(shiftInLeft) {
  0% {
    @include transform(translateX(-100%));
  }
  100% {
    @include transform(translateX(0%));
  }
}
@include keyframes(shiftInBottom) {
  0% {
    opacity: 0;
    @include transform(translateY(20px));
  }
  100% {
    opacity: 1;
    @include transform(translateY(0%));
  }
}
@include keyframes(introFadeIn) {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@include keyframes(introFadeInScale) {
  0% {
    opacity: 0;
    @include transform(scale(.96, .96));
  }
  100% {
    opacity: 1;
    @include transform(scale(1, 1));
  }
}
</style>
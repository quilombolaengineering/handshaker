<div class="slidercontainer">
  <img class='photo'  src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/watercolor.jpg" width="100%" alt="" />
  <img class='photo'  src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/siren.jpg"  width="100%"  alt="" />
  <img class='photo'  src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/eraser-moss.jpg" width="100%"  alt="" />
  <img class='photo'  src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/branch.jpg"  width="100%"  alt="" />
</div>

<h1>SASS Mixins for easy slider creation II</h1>

<div class="fader-horizontal">
  <ul>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
    <li>
      <h2>MADRID</h2>
      <h3><em>#THETYPEINMADRID</em></h3>
    </li>
    <li>
      <h2>BARCELONA</h2>
      <h3><em>#THETYPEINBARCELONA</em></h3>
    </li>
    <li>
      <h2>PANAMÁ</h2>
      <h3><em>#THETYPEINPANAMA</em></h3>
    </li>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
  </ul>
</div>


<div class="fader-vertical">
  <ul>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
    <li>
      <h2>MADRID</h2>
      <h3><em>#THETYPEINMADRID</em></h3>
    </li>
    <li>
      <h2>BARCELONA</h2>
      <h3><em>#THETYPEINBARCELONA</em></h3>
    </li>
    <li>
      <h2>PANAMÁ</h2>
      <h3><em>#THETYPEINPANAMA</em></h3>
    </li>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
  </ul>
</div>


<div class="slider-horizontal">
  <ul>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
    <li>
      <h2>MADRID</h2>
      <h3><em>#THETYPEINMADRID</em></h3>
    </li>
    <li>
      <h2>BARCELONA</h2>
      <h3><em>#THETYPEINBARCELONA</em></h3>
    </li>
    <li>
      <h2>PANAMÁ</h2>
      <h3><em>#THETYPEINPANAMA</em></h3>
    </li>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
  </ul>
</div>


<div class="slider-vertical">
  <ul>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
    <li>
      <h2>MADRID</h2>
      <h3><em>#THETYPEINMADRID</em></h3>
    </li>
    <li>
      <h2>BARCELONA</h2>
      <h3><em>#THETYPEINBARCELONA</em></h3>
    </li>
    <li>
      <h2>PANAMÁ</h2>
      <h3><em>#THETYPEINPANAMA</em></h3>
    </li>
    <li>
      <h2>YOUR CITY</h2>
      <h3><em>#THETYPEINYOURCITY</em></h3>
    </li>
  </ul>
</div>


<div class="slider-vertical">
  <ul>
    <li>
      <img src="http://placehold.it/800x200/ffffff" />
    </li>
    <li>
       <img src="http://placehold.it/800x200" />
    </li>
    <li>
      <img src="http://placehold.it/800x200/ffffff" />
    </li>
    <li>
      <img src="http://placehold.it/800x200" />
    </li>
    <li>
      <img src="http://placehold.it/800x200/ffffff" />
    </li>
  </ul>
</div>




<pre>
// USAGE            
@include vertical-slider(
  $placeholder-name: slide-vertical,
  $height: 200px,
  $slides: 4,
  $easing: ease-in-out,
  $slide-duration: 5,
  $trans-duration: 2
);
  
.slider {
  // extend generated placeholder                     
  @extend %slide-vertical;   
}
</pre>



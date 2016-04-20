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

<div class="slider"> 
        <input type="radio" id="control1" name="controls" checked="checked"/><label for="control1"></label>
        <input type="radio" id="control2" name="controls"/><label for="control2"></label>
        <input type="radio" id="control3" name="controls"/><label for="control3"></label>
        <input type="radio" id="control4" name="controls"/><label for="control4"></label>
        <input type="radio" id="control5" name="controls"/><label for="control5"></label>
        <div class="sliderinner">
            <ul>
                <li>
        	    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/branch.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 1</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
        	    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/flowers.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 2</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/eraser-moss.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 3</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
        	    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/watercolor.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 4</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
                <li>
        	    <img src="https://s3.ap-northeast-2.amazonaws.com/handshaker-theme/siren.jpg" />
                    <div class="description">
 
                        <div class="description-text">
                            <h2>Slideshow Title 5</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div><!--sliderinner-->
</div><!--slider-->

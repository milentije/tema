<div class="container">
<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide shadow"><!-- class of slide for animation -->
  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="http://placehold.it/1200x400" alt="" />
 <!--      <div class="carousel-caption">
        <p>Caption text here</p> 
      </div> -->
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x400" alt="" />
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x400" alt="" />
    </div>
    <div class="item">
      <img src="http://placehold.it/1200x400" alt="" />
      <div class="carousel-caption">
        <p>Caption text here</p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel 
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a> -->

</div> <!--/.carousel--> 
</div>

<script>
$('#this-carousel-id').carousel({
	interval: 8000
});
</script>

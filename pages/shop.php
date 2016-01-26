<script>
function toggle(el){ 
  if (el.className == "col-sm-4 col-lg-4 col-md-4"){
    el.className = "hidden";      
  } else {
    el.className = "col-sm-4 col-lg-4 col-md-4";
  }
};
            
function togglebig(el){
  if (el.className == "col-sm-4 col-lg-4 col-md-4"){
    el.className = "col-sm-12 col-lg-12 col-md-12";
  } else {  
    el.className = "col-sm-4 col-lg-4 col-md-4";
  }
};
function toggledog(){
  toggle(cases);
  toggle(cat);
  togglebig(dog);
};
</script>
  <div class="container">
    <div class="row">
      <div id="cases" class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
          <img src="img/cases_example.jpg" alt="Example of phone cases">
          <hr>
          <div class="caption">
            <h4 class="pull-right">$10</h4>
            <h4>Custom Phone Case</h4>
            <p>Get a custom phone case with a picture or text to show off to everyone!<br><br><a href="/shop/case">Get yours today!</a></p>
          </div>
        </div>
      </div>
      <div id="cat" class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
          <img src="img/cats.jpg" alt="Example of printed cats">
          <hr>
          <div class="caption">
            <h4 class="pull-right">$3</h4>
            <h4>Cuddling Cats</h4>
            <p>Cats are the cutest things you will ever see in your life. Especially cuddling cats!<br><br><a href="/shop/cats">You like cats, right?</a></p>
          </div>
        </div>
      </div>
      <div id="dog" class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
          <div class="row">
            <div id="dogin" class="col-sm-12 col-lg-12 col-md-12">
              <img src="img/dogs.jpg" alt="Example of printed dogs">
              <hr>
              <div class="caption">
                <h4 class="pull-right">$3</h4>
                <h4>Sleeping Dog</h4>
                <p>Here it is for you, if you're more of a dog person! Dogs are just so cute when sleeping.</p>
                <button class="btn btn-primary" id="toggledog" onclick="toggledog()">Learn more</button>
              </div>
            </div>
            <div id="doghide" class="hidden">
              <iframe src="https://docs.google.com/forms/d/1c9a5DCYuqkCMRVKI036pjlZp_vJ4X5xHeV1QAiuhbow/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

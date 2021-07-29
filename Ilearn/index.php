<!--start header-->
<?php
  include('./maininclude/header.php');
?>
<!--end header-->
<!--start video background-->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
    <video playsinline autoplay muted loop>
      <source src="video/banvid.mp4">
    </video>
    <div class="vid-overlay"><!--end start2-->
    </div>
  </div>
  <div class="vid-content">
    <h1 class="my-content">Welcome to WebLearn Community</h1>
    <small class="my-content">Implement new Coding Ideas</small><br>
    <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Get started</a>
  </div>
</div>
<!--end video tag-->
<!--start popular course-->
  <div class="Container mt-5">
    <h2 class="text-center">Popular Projects</h2>
    <!--start most popular ideas-->
    <div class="card-deck mt-4">
      <a href="#" class="btn" style="text-align: center; padding:0px; margin:0px;">
        <div class="card">
          <img src="images/js.jpg" class="card-img-top" alt="" style="height:500px; width:50%; box-shadow:10px;"/>
          <div class="card-body">
            <h5 class="card-title">Learn Scripting language easy way</h5>
            <p class="card-text">Javascript is the most popular browser side language , learn and implement new ideas on javascript</p>
            <div class="card-footer">
              <p class="card-text d-inline">Price:<small><del>& 200</del></small><span class="font-weight-bolder">& 100</span></p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a>
    </div>
            <!--end 1st-->
            <!--start 2-->
    <div class="card-deck mt-4">
      <a href="#" class="btn" style="text-align: center; padding:0px; margin:0px;">
        <div class="card">
          <img src="images/ruby.png" class="card-img-top" alt="Ruby" style="height:500px; width:50%; box-shadow:10px;"/>
          <div class="card-body">
            <h5 class="card-title" style="text-align:center;padding:0px;margin:0px;">Learn Ruby</h5>
            <p class="card-text">Ruby on rails is popular backend language for web and os development , lean and implement new ideas on Ruby</p>
            <div class="card-footer">
              <p class="card-text d-inline">Price:<small><del>& 700</del></small><span class="font-weight-bolder">& 200</span></p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
            </div>
          </div>
        </div>
      </a> 
    </div>
  </div>
  <!--end start2-->
    <div class="text-center m-2">
      <a class="btn btn-danger btn-sm" href="#">View all course</a>
    </div>
    <!--start contact us-->
    <?php
      include('./contact.php');
    ?>
    <!--stop contact us--> 
      <!--student feedback section-->
      <?php
        include('./feedback.php');
      ?>
     <!--end feedback section-->
</div>
<div class="container-fluid p-4"style="background-color:#E9ECEF">
<div class="container" style="background-color:#E9ECEF">
  <div class="col-sm">
    <h5>About us</h5>
    <p>Education is the fundamental rights</p>
  </div>
  <div class="col-sm">
    <h5>Category</h5>
    <a class="text-dark" href="#">Ruby</a><br>
    <a class="text-dark" href="#">Javascript</a><br>
  </div>
</div>
</div>
<!--stop popular course-->
<!--footer sections starts here-->
<?php
  include('./maininclude/footer.php');
?>
<!--footer section ends here-->
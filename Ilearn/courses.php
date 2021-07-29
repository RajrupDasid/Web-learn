<!--header section-->
<?php
    include('./maininclude/header.php');
?>
<!--header ends here-->
<!--Start course page banner-->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/courses.jpg" alt="courses" style="height:650px;width:100%; box-shadow:10px;"/>
    </div>
</div>
<div class="Container mt-5">
    <h2 class="text-center">ALL Projects</h2>
    <!--start most popular ideas-->
    <div class="card-deck mt-4">
      <a href="#" class="btn" style="text-align: center; padding:0px; margin:0px;">
        <div class="card">
          <img src="images/js.jpg" class="card-img-top" alt="" style="height:500px; width:50%; box-shadow:10px;"/>
          <div class="card-body">
            <h5 class="card-title">Learn Scripting language easy way</h5>
            <p class="card-text">Javascript is the most popular browser side language , learn and implement new ideas on javascript</p><br>
            <div class="card-footer">
              <p class="card-text d-inline">Price:<small><del>& 200</del></small><span class="font-weight-bolder">& 100</span></p>
              <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php">Enroll</a>
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
<!--End course page banner-->
<!--footer starts here-->
<?php
    include('./maininclude/footer.php');
?>
<!--footer ends here-->

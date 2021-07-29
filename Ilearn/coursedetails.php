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
<!--course page banner ends here-->
<!--start main containt-->
<div class="container mt-5">
    <div class="row">
        <img src="images/js.jpg" class="card-img-top" alt="" style="height:500px; width:50%; box-shadow:10px;"/>
    </div>
    <div class='col-md-8'>
        <div class="card-body">
            <h5 class="card-title"> Course Name:Learn Javascript</h5>
            <p class="card-text">Description: Best way to learn javascript make projects or implement ideas</p>
            <p class="card-text">Duration:60 days</p>
            <from action="" method="post">
                <p class="card-text d-inline">Price:<small><del>&#8377 </del></small><span class="font-weight-bolder">&#8377 </span></p>
                <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
            </form>
        </div>
    </div>
</div>
<!--end main content-->
<!--footer starts here-->
<?php
    include('./maininclude/footer.php');
?>
<!--footer ends here-->

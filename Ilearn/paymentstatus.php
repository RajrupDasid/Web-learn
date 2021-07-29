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
<!--payment status page design starts-->
<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
                <input type="text" class="form-control mx-3" ><br>
            </div>
            <div>
                <input type="submit" class="btn btn-primary mx-4" value="View">
            </div>
        </div>
    </form>
</div>    
<!--payment status page ends here-->
<!--start contact us-->
<div class="container">
    <?php
        include('./contact.php');
    ?>
</div>
<!--ends contact page-->
<!--footer starts here-->
<?php
    include('./maininclude/footer.php');
?>
<!--footer ends here-->

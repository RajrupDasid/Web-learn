<!--start footer-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy;2021 || Designed by WebLearn community || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModal">Admin Login</a></small>
</footer>
<!--start student modal-->
    <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">registration</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <?php
              include('studentRegistration.php');
            ?>
            </div>
           <!--end registration form-->
          <div class="modal-footer">
            <span id="successMsg"></span>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="addStu()">SignUp</button>
          </div>
        </div>
      </div>
    </div>
    <!--start student login modal-->
    <!-- Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="LoginModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="stuLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="logemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="logemail" id="logemail">
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i><label for="logpass" class="pl-2" font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="logpassword" id="logpassword">
              </div>
          </form>
          <!--end login form-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="loginbtn">Cancel</button>
            <button type="button" class="btn btn-primary" id="loginbtn">Login</button>
          </div>
        </div>
      </div>
    </div>
    <!--Admin login modal-->
    <div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModalLabel">Admin Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="adminLoginForm">
              <div class="form-group">
                <i class="fas fa-envelope"></i><label for="adminemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="adminlogemail" id="admoinlogemail">
              </div>
              <div class="form-group">
                <i class="fas fa-key"></i><label for="adminlogpass" class="pl-2" font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminlogpassword" id="adminlogpassword">
              </div>
          </form>
          <!--end login form-->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="adminloginbtn">Cancel</button>
            <button type="button" class="btn btn-primary" id="adminloginbtn">Admin Login</button>
          </div>
        </div>
      </div>
    </div>
    <!--admin login modal end-->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/all.min.js"></script>
 <script type="text/javascript" src="js/owl.carousel.min.js"></script>
 <script type="text/javascript" src="js/ajaxrequest.js"></script>
</body>
</html>

<?php
include 'header.php';
?>


<div class="col-sm-12 col-12 mt-4">
  <div class="container border p-3">
    <div>
      <ul class="uk-breadcrumb">
        <li><a href="">Home</a></li>
        <li><span>Sign In</span></li>
      </ul>
    </div>
    <div class="row">

      <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-4">
        <div class="col-sm-12 col-12">
         <form>
          <center><h4>Login</h4></center><hr><br>

          <div class="row">
          <div class="form-group col-12">
            <label><b>Email</b> <span class="text-danger">*</span></label>
            <input type="text" class="form-control textfill" name="Username">
          </div>


          <div class="form-group col-12">
            <label><b>Password</b> <span class="text-danger">*</span></label>
            <input type="Password" class="form-control textfill" name="Password" placeholder="Password">
          </div>

           <div class="form-group col-12">
             <input type="checkbox" name="remember">&nbsp;&nbsp;Remember Me
          </div>

        </div>
        <br>
        <input type="submit" value="Login" class="btn btn-info pr-4 pl-4">
      </form>
    </div>
  </div>



  <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt-4">
    <div class="col-sm-12 col-12">
     <center><h4>Login With Social</h4></center><hr><br><br>
     <center>
      <a href="#" class="btn btn-primary d-block p-3"><span uk-icon="icon: facebook; ratio: 1"></span>&nbsp;&nbsp;Login with Facebook</a>
      <br>
      <a href="#" class="btn btn-danger d-block p-3"><span uk-icon="icon:  google-plus; ratio: 1"></span>&nbsp;&nbsp;Login with Google</a>
      <br>
      <a href="#" class="btn btn-info d-block p-3"><span uk-icon="icon: twitter; ratio: 1"></span>&nbsp;&nbsp;Login with Twitter</a>
    </center>

  </div>
</div>


</div>
</div>
</div>



<?php
include 'footer.php';
?>

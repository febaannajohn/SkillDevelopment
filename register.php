
<?php
  include("headr.php");



?> 


<main>
    <div class="container">

      <!-- <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center"> -->

            <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row pt-5 pl-5" style="margin-left:290px; margin-top:56px;">
            <div class="col-md-6  grid-margin stretch-card">
            

              <form action="registeraction.php" method="POST" >
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                     
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-10">
                      <label for="yourName" class="form-label">Address</label>
                      <textarea name="address" rows="4" cols="30"></textarea>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>
                   
                    <div class="col-6">
                      <label for="yourName" class="form-label">Gender</label>
                     <input type="radio" name="gen" value="Male">Male
                     <input type="radio" name="gen" value="Female">Female
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Phone Number</label>
                      <input type="text" name="phone" class="form-control" id="" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">College</label>
                      <select name="college" id="college">
                        <option value="Select College">Select College</option>
                       <option value="Mar Elias College">Mar Elias College</option>
                        <option value="ST Kuriakose College">ST Kuriakose College</option>
                         <option value="St George College">St George College</option>
                         <option value="Nirmala College">Nirmala College</option>
                          </select>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

</section> 
             
             
            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

  <?php
include("footer.php");
?>
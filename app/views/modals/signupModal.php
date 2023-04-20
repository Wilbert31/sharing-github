<div class="modal fade" id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <form class="row g-3 needs-validation p-3" id="signupForm" novalidate>
          <div class="col-md-6">
            <input type="text" name="firstName" id="firstName" value="" class="form-control" placeholder="First Name" required>
            <div id="firstNameErr" class="invalid-feedback">
                <p></p>
            </div>
          </div>

          <div class="col-md-6">
            <input type="text" name="lastName" id="lastName" value="" class="form-control" placeholder="Last Name" required>
            <div id="lastNameErr" class="invalid-feedback">
            </div>
          </div>

          <div class="col-12">
            <input type="email" name="email" id="emailSignup" value="" class="form-control" placeholder="Email Address" required>
            <div id="emailSignupErr" class="invalid-feedback">
            </div>
          </div>

          <div class="col-12">
            <input type="password" name="password" id="passwordSignup" value="" class="form-control" placeholder="Password" required>
            <div id="passwordSignupErr" class="invalid-feedback">
            </div>
          </div>

          <div class="col-12">
            <input type="password" name="confirmPassword" id="confirmPasswordSignup" value="" class="form-control" placeholder="Confirm Password" required>
            <div id="confirmPasswordSignupErr" class="invalid-feedback">
            </div>
          </div>

          <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Sign Up</button>
          </div>
      </form>
    </div>
  </div>
</div>
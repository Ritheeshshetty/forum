 <!-- Button trigger modal  -->
 <button type="button" class="btn btn-primary btn-success mx-2 bg-dark" data-toggle="modal"  data-target="#loginModal">
  login
</button>


<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Login to Our Website </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control"  placeholder="Enter Email" id="Emailid" name="Emailname">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control"  placeholder="Enter password " id="signupPassword" name="signupPassword">
                    </div>
                    <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- <button class="btn btn-success mx-2 bg-dark"data-toggle="modal" data-target="#signupModal">Signup</button> -->
<link rel="stylesheet" href="style.css">
<button type="button" class="btn btn-secondary btn-success  bg-dark" data-toggle="modal"  data-target="#signupModal">
  Signup
</button>
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Signup for an iDiscuss Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form action="/forum/partials/_handleSignup.php" method="post">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <!-- <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp"> -->
                        <input type="email" class="form-control" placeholder="Enter email id" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control"  placeholder="Enter password " id="signupPassword" name="signupPassword">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control"  placeholder="Re-Enter password" id="signupcPassword" name="signupcPassword">
                    </div>
                    <br>
                    
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Signup</button>
                    </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
            </div> -->
                </form>
    </div>
  </div>
</div>
  <div class="login">
    <div data-toggle="modal" data-target="#login" class="icon-nav">
      <i class="flaticon-user"></i>
    </div>
    <div class="hidden-xs">
      <a href="#" data-toggle="modal" data-target="#login">JOIN</a>
       /
      <a href="#why" data-toggle="modal" data-target="#login">LOGIN</a>
    </div>
  </div>
  <div data-toggle="modal" data-target="#login" class="phone">
    <div class="icon-nav">
      <i class="flaticon-24-hours"></i>
    </div>
    <a href="#">
      <div class="hidden-xs">HELP CENTER</div>
    </a>
  </div>
  <div class="slide-logo">
    <div class="">
     </div>
     <div class="">
       <div class="">
         <img src="assets/img/real-estate.png" alt="">
          <h2 class="realestate" >REAL ESTATE</h2>
          <h3 class="yourtaclinehere" >YOUR TACLINE HERE</h3>
        </div>
    </div>
  </div>


  <div class="modal fade bs-modal-sm" id="login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <br>
          <div class="bs-example bs-example-tabs">
              <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#signin" data-toggle="tab">Sign In</a></li>
                <li class=""><a href="#signup" data-toggle="tab">Register</a></li>
                <li class=""><a href="#why" data-toggle="tab">Why?</a></li>
              </ul>
          </div>
        <div class="modal-body">
          <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade in" id="why">
          <p>We need this information so that you can receive access to the site and its content. Rest assured your information will not be sold, traded, or given to anyone.</p>
          <p></p><br> Please contact <a mailto:href="JoeSixPack@Sixpacksrus.com"></a>info@amajgroup.com</a> for any other inquiries.</p>
          </div>
          <div class="tab-pane fade active in" id="signin">
              <form class="form-horizontal">
              <fieldset>
              <!-- Sign In Form -->
              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="userid">Alias:</label>
                <div class="controls">
                  <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="JoeSixpack" class="input-medium" required="">
                </div>
              </div>

              <!-- Password input-->
              <div class="control-group">
                <label class="control-label" for="passwordinput">Password:</label>
                <div class="controls">
                  <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
                </div>
              </div>

              <!-- Multiple Checkboxes (inline) -->
              <div class="control-group">
                <label class="control-label" for="rememberme"></label>
                <div class="controls">
                  <label class="checkbox inline" for="rememberme-0">
                    <input type="checkbox" name="rememberme" id="rememberme-0" value="Remember me">
                    Remember me
                  </label>
                </div>
              </div>

              <!-- Button -->
              <div class="control-group">
                <label class="control-label" for="signin"></label>
                <div class="controls">
                  <button id="signin" name="signin" class="btn btn-success">Sign In</button>
                </div>
              </div>
              </fieldset>
              </form>
          </div>
          <div class="tab-pane fade" id="signup">
              <form class="form-horizontal">
              <fieldset>
              <!-- Sign Up Form -->
              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="Email">Email:</label>
                <div class="controls">
                  <input id="Email" name="Email" class="form-control" type="text" placeholder="JoeSixpack@sixpacksrus.com" class="input-large" required="">
                </div>
              </div>

              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="userid">Alias:</label>
                <div class="controls">
                  <input id="userid" name="userid" class="form-control" type="text" placeholder="JoeSixpack" class="input-large" required="">
                </div>
              </div>

              <!-- Password input-->
              <div class="control-group">
                <label class="control-label" for="password">Password:</label>
                <div class="controls">
                  <input id="password" name="password" class="form-control" type="password" placeholder="********" class="input-large" required="">
                  <em>1-8 Characters</em>
                </div>
              </div>

              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="reenterpassword">Re-Enter Password:</label>
                <div class="controls">
                  <input id="reenterpassword" class="form-control" name="reenterpassword" type="password" placeholder="********" class="input-large" required="">
                </div>
              </div>

              <!-- Multiple Radios (inline) -->
              <br>
              <div class="control-group">
                <label class="control-label" for="humancheck">Humanity Check:</label>
                <div class="controls">
                  <label class="radio inline" for="humancheck-0">
                    <input type="radio" name="humancheck" id="humancheck-0" value="robot" checked="checked">I'm a Robot</label>
                  <label class="radio inline" for="humancheck-1">
                    <input type="radio" name="humancheck" id="humancheck-1" value="human">I'm Human</label>
                </div>
              </div>

              <!-- Button -->
              <div class="control-group">
                <label class="control-label" for="confirmsignup"></label>
                <div class="controls">
                  <button id="confirmsignup" name="confirmsignup" class="btn btn-success">Sign Up</button>
                </div>
              </div>
              </fieldset>
              </form>
        </div>
      </div>
        </div>
        <div class="modal-footer">
        <center>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </center>
        </div>
      </div>
    </div>
  </div>
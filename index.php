<htmL>
    
    <head>
        <title>BrotherSpoolBet</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link href="HomeStyle.css" rel="stylesheet" type="text/css">
        <link href="style2.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div class="container homeContainer">
            <?php include_once('data/header.php'); ?>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h2>NIGERIA'S BEST SPORTS BETTING WEBSITE</h2>
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal">REGISTER NOW  <span class="glyphicon glyphicon glyphicon-send"></span></button>
                                <a href="PlayGame.php"><button id="playgame" class="btn btn-danger">PLAY NOW  <span class="glyphicon glyphicon-chevron-right"></span></button></a>                     
                                <button class="btn btn-primary">POPULAR BET <span class="glyphicon glyphicon-chevron-right"></span></button>                            
                                <button class="btn btn-primary">LIVE GAME <span class="glyphicon glyphicon-chevron-right"></span></button>
                        </div>

                        <div class="col-md-6">
                                <div class="advert">ADVERT PLACEMENT</div>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Tb4X1BWNO5k" frameborder="0" allowfullscreen></iframe>
                                </div>
                        </div>
                </div>
            </div>       
        
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Register Now</h4>
        </div>
        <div class="modal-body">
            <form>
                <div class="alert alert-danger" id="msg">
                    <strong>Warning!</strong> All Field Must be Filled Correctly 
                </div>
                <select id="title">
                    <option>Mr</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                </select>
                <input type="text" class="textfield" id="fname" placeholder="First name" />
                <input type="text" class="textfield" id="lname" placeholder="Last name" />
                <input type="text" class="textfield" id="residence" placeholder="Address" />
                <input type="text" class="textfield" id="residence-city" placeholder="City" />
                <select id="country">
                    <option>Lagos</option>
                </select>
                <input type="text" class="textfield" id="uname" placeholder="User name" />
                <input type="password" class="textfield" id="pword" placeholder="Password" />
                <input type="password" class="textfield" id="Cpword" placeholder="Confirm Password" />
                <input type="email" class="textfield" id="mail" placeholder="E-mail" />
                <p>Date of Birth</p>
                <select id="day">
                    <option>Day</option>
                </select>
                <select id="month">
                    <option>Months</option>
                </select>
                <select id="year">
                    <option>Year</option>
                </select><br />
                <input type="tel" class="textfield" id="phone" placeholder="Phone Number" />
                
                <center>
                <p>It's important that you give us a valid email address as an activation email will be sent. If you have an existing Brother's poolBet account, contact support. Duplicate bank information will cause complications during payout.</p>
                
                    <button class="btn btn-success">Sign Up <span class="glyphicon glyphicon glyphicon-send"></span></button>
                </center>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
    
</htmL>
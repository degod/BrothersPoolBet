<?php 
    
$List = [
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull',
    'Leicester v Hull'
];

?>

<htmL>
    
    <head>
        <title>BrotherSpoolBet</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link href="PlayGameStyle.css" rel="stylesheet" type="text/css">
        <link href="style2.css" rel="stylesheet" type="text/css">
        
        <style>
            .LineHead {
                margin-bottom: 20px;
            }

            .linecircle {
                display: inline-block;
                border: 1px solid #1b5e98 !important;
                border-radius: 50%;
                padding:.4rem .9rem;
                margin-bottom: 10px;
            }
            
            .linecircle:hover {
                color: white !important;
                background-color: #1b5e98 !important;
            }
            
            .tab-content {
                padding: 2rem;
                background: #f9f9f9;
            }
            
            .nav {
                border: none !important;
            }
            
            .HeadTab {
                color: brown !important; 
                font-weight: bolder;
                background: #f9f9f9 !important;
                border:none !important;
            }
            
            .HeadTab:hover {
                background-color: #f9f9f9 !important;
            }
            
            .LineBox {
                margin-bottom: 20px;
            }
        </style>
    </head>
    
    <body>
        <?php include_once('data/header.php'); ?>
        <div class="container-fluid playGameContainer">
            
                <div class="col-md-12">
                    
                    <div class="col-md-8">
                        
                        <div class="TopButton">
                            <center>
                                <button class="btn btn-success">Lucky Dip</button>
                                <button class="btn btn-danger">How to Play</button>
                                <button class="btn btn-danger">Future Games</button>
                            </center>
                        </div>
                                            
                        <div class="GameDeadline">
                            <center>
                            <h3 class="h4red">Game Closes: 04 Mar @ 16:00</h3>
                            <h3>Pick 10 matches where <b>both teams will score</b></h3>
                            </center>
                        </div>
                        
                        <div class="ListofGames">
                            <div class="col-md-6">
                                <div class="list-group">
                                    <center>
                                    <?php
                                    for ($i=0;$i<25;$i++) {
                                    ?>          
                                      <a href="#" class="list-group-item "><span class="number"><?=$i+1?></span><?=$List[$i]?></a>
                                    <?php 
                                    };
                                    ?>
                                    </center>
                                </div>
                            </div>                            
                            <div class="col-md-6">
                                <div class="list-group">
                                    <center>
                                    <?php 
                                    for ($i=0;$i<24;$i++) {
                                    ?>
                                      <a href="#" class="list-group-item "><span class="number"><?=$i+26?></span><?=$List[$i]?></a>
                                    <?php 
                                    };
                                    ?>
                                    </center>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        
                    <div class="UpSide">                          
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home" class="HeadTab">Buy New Lines</a></li>
                      </ul>

                      <div class="tab-content">
                          <div class="LineHead">           
                            <h3>4th - 5th March</h3>
                            <h4 class="h4red">&#36;2.00</h4>
                          </div>
                        <div class="LineBox">
                            <span class="linecircle">1</span>
                            <span class="linecircle">2</span>
                            <span class="linecircle">3</span>
                            <span class="linecircle">4</span>
                            <span class="linecircle">5</span>
                            <span class="linecircle">6</span>
                            <span class="linecircle">7</span>
                            <span class="linecircle">8</span>
                            <span class="linecircle">9</span>
                            <span class="linecircle">10</span>
                          </div>
                      </div>          
                    </div>
                    
                    <div class="DownSide">
                        <div class="col-md-12"><h2 class="h2 h2center">Total Lines</h2></div>
                        <div class="col-md-12">
                            <center>
                                <button class="btn btn-success">&#36; 0.00</button>
                                <button class="btn btn-danger">Play Now</button>
                            </center>
                        </div> 
                    </div>
                    
                        
                    </div>   
                </div>
            
        </div>       
        
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    </body>
    
</htmL>
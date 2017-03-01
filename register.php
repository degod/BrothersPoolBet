<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>
        <style>
            input[type=text] {
                width: 15%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-position: 10px 10px;
                padding: 12px 20px 12px 40px;
            }
            input[type=password] {
                width: 15%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-position: 10px 10px;
                padding: 12px 20px 12px 40px;
            }
            input[type=submit] {
                width: 10%;
                box-sizing: border-box;
                border: none;
                border-radius: 4px;
                font-family: fantasy;
                font-size: 16px;
                color: black;
                background-color: yellow;
                background-position: 10px 10px;
                padding: 12px 20px 12px 40px;
            }
            input[type=tel] {
                width: 15%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-position: 10px 10px;
                padding: 12px 20px 12px 40px;
            }
            input[type=email] {
                width: 15%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: white;
                background-position: 10px 10px;
                padding: 12px 20px 12px 40px;
            } 
            #month,#year,#day,#country,#title{
                width: 10%;
                box-sizing: border-box;
                border: none;
                border-radius: 4px;
                font-size: 14px;
                color: black;
                background-color: white;
                background-position: 10px 10px;
                padding: 12px 20px 12px 40px;
            }
        </style>
        
    </head>
        
        <body>
            <div id="errMsg"></div>
            <form>
                <select id="title">
                    <option>Mr</option>
                    <option>Mrs</option>
                    <option>Miss</option>
                </select><br />
                <input type="text" id="fname" placeholder="First name" /><br />
                <input type="text" id="lname" placeholder="Last name" /><br />
                <input type="text" id="residence" placeholder="Address" /><br />
                <input type="text" id="residence-city" placeholder="City" /><br />
                <select id="country">
                    <option>Choose</option>
                    <?php
                        include_once('data/pre_add_info.php');
                        sort($abr_name);
                        foreach($abr_name as $country){
				            echo "<option>$country</option>";
                        }
                    ?>
                </select><br />
                <input type="text" id="uname" placeholder="User name" /><br />
                <input type="password" id="pword" placeholder="Password" /><br />
                <input type="password" id="Cpword" placeholder="Confirm Password" /><br />
                <label>It's important that you give us a valid email address as an activation email will be sent. If you</label><br />
                <label>have an existing Brother's poolBet account, contact support. Duplicate bank information will cause </label><br />
                <label>complications during payout.</label><br />
                <input type="email" id="mail" placeholder="E-mail" /><br />
                <select id="day">
                    <option>Day</option>
                        <?php
	                           for($day = '1'; $day <= 31; $day++){
	                               echo "<option>$day</option>";
	                           }
                        ?>
                </select>
                <select id="month">
                    <option>Months</option>
                    <?php
                        include_once('data/pre_add_info.php');
	                       foreach($mnth as $months){
	                       echo "<option>$months</option>";
	                   }
                    ?>
                </select>
                <select id="year">
                    <option>Year</option>
                    <?php
	                   	Date('Y');
                        for($i = Date('Y')-18; $i>=1960 ; $i--){
                           echo "<option>$i</option>"; 
                        }
                    ?>
                </select><br />
                <input type="tel" id="phone" placeholder="Mobile" /><br /><br />
                <input type="submit" value="Sign Up" id="signup"/>
                <input type="submit" value="Cancel" id="cancel"/>                
            </form>
            
            <script src="js/jquery.js"></script>
            <script>
                    $(function(){
                            
                        var Cpass = $("#Cpword").val();
                        $("#Cpword").keyup(function(e){
                            
                            var pass = $("#pword").val();
                            if(pass == $(this).val()){
                             $("#errMsg").text("Passwords match.");
                             }else{
                                $("#errMsg").text("Passwords dont match.");
                             }
                        });
                        
                            $("#signup").click(function(e){
                                e.preventDefault();
                                
                                var title = $("#title").val().trim();
                                var fname = $("#fname").val().trim();
                                var lname = $("#lname").val().trim();
                                var address = $("#residence").val().trim();
                                var city = $("#residence-city").val().trim();
                                var country = $("#country").val().trim();
                                var uname = $("#uname").val().trim();
                                var email = $("#mail").val().trim();
    		                    var day = $("#day").val().trim();
                                var month = $("#month").val().trim();
                                var year = $("#year").val().trim();
                                var mobile = $("#phone").val().trim();
                            
                                    $.ajax({
                                    type: "POST",
                                    url: "data/regDetails_into_db.php",
                                    data: "ntitle="+title+"&nfname="+fname+"&nlname="+lname+"&naddress="+address+"&ncity="+city+"&ncountry="
                                             +country+"&nuname="+uname+"&npass="+pass+"&nemail="+email+"&nday="+day+"&nmonth="+month+"&nyear="
                                               +year+"&nmobile="+mobile,
                                    success: function(e){
                						$("#errMsg").text(e);
					                       }
				                 });
                            });
                    });
            </script>
        </body>
</html>

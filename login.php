<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "UTF-8">
	  <meta name = "viewport" cuntent = "width = device-width, initial-scale=1.0">
        <link href="assets/css/Rstyle.css" rel="stylesheet">
    </head>
    <body>
                
            <div class="form">
                           <div class="hello">
                            
                            <form method="POST" action="reg.php">
                            <center><a href="index.php"><img id="img" src="assets/images/be.jpg" width="100%" height="100%" style="margin-bottom:1rem; margin-top:2rem; border-radius:50%; border-color:darkslategrey;"></a></center>
                              <h1 style="color:white; text-align: center; margin-top:1rem; font-size:xxlarge;">Login Here.</h1>
                              <div style="margin-top:2rem">
                              
                        <div class="clm1">
                            <label for="name">userName:</label>
                        </div>
                            <div class="clm2">
                                <input type="text" name="userName" class="btn btn_secondary">
                            </div>
                            <div class="clm1" style="margin-top:2rem">
                            <label for="password">Password:</label>
                        </div>
                        <div class="clm2" style="margin-bottom:4rem; margin-top:2rem;">
                            <input type="text" name="password" class="btn btn_secondary">
                        </div>
                        
                        <div>
                            <button type="submit" name="login" class="btn btn_secondary" value="login">Login</button>
                        </div>
                             <div>
                                <button type="cancel" name="cancel" class="btn btn_secondary" value="CANCEL">Cancel</button>
                             </div>
                             <div class="clm2" style="margin-top:1rem;">
                             <a href ="register.php" class="clm1" style="font-style: italic; margin-left:100px; font-size:25px; color:white;">forget_password!</a>
                        </div>
                            </div>  
                        
                            </form>
                        
                             </div>
                        
        </body>
        </html>
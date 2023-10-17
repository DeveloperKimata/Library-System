<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "UTF-8">
	  <meta name = "viewport" cuntent = "width = device-width, initial-scale=1.0">
        <link href="assets/css/Rstyle.css" rel="stylesheet">
    </head>
    <body>
        <div class="clm">
            <div class="form">
                           <div class="hello">
                            
                            <form method="POST" action="reg.php">
                                <center><a href="index.php"><img id="img" src="assets/images/be.jpg" width="100%" height="100%" style="margin-bottom:1rem; margin-top:2rem; border-radius:50%; border-color:darkslategrey;"></a></center>
                              <h1 style="color:white; text-align: center;">Register Here.</h1>
                              <div style=" margin-top:1rem">
                              <div class="clm1">              
                                    <label for="id">userID:</label>
                                </div>
                                <div class="clm2">
                                    <input type="text" name="userID" class="btn btn_secondary">
                                </div>
                                <div class="clm1">              
                                    <label for="name">userName:</label>
                                </div>
                                <div class="clm2">
                                    <input type="text" name="userName" class="btn btn_secondary">
                                </div>
                        <div class="clm1">
                            <label for="email">Email:</label>
                        </div>
                            <div class="clm2">
                                <input type="text" name="email" class="btn btn_secondary">
                            </div>
                            <div class="clm1">
                            <label for="password">Password:</label>
                        </div>
                        <div class="clm2">
                            <input type="text" name="password" class="btn btn_secondary">
                        </div>
                        <div class="clm1">
                            <label for="mobile">Phone:</label>
                        </div>
                        <div class="clm2" style="margin-bottom:1rem;">
                            <input type="text" name="phone" class="btn btn_secondary">
                        </div>
                        <div>
                            <button type="submit" name="register" class="btn btn_secondary">Register</button>
                        </div>
                        <div>
                            <button type="cancel" name="cancel" class="btn btn_secondary" value="CANCEL" action="cancel">Cancel</button>
                        </div>  
                        
                    </div>
                    </form>
                </div>
             </div>
        </div>
        </body>
        </html>

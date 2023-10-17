<!DOCTYPE hmtl>
<html>
    <head>
       <title>library</title>
        <meta charset = "UTF-8">
	  <meta name = "viewport" cuntent = "width = device-width, initial-scale=1.0">
       <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
    
            <nav class="nav-bar">
        <div>
            <ol>
                <p class="pa">Library Book Management</p>
                <img id="img" src="assets/images/be.jpg" width="100%" height="100%">
                <li class="li"><a href ="login.php">Login</a></li>
                <li class="li"><a href ="register.php">Register</a></li>
            </ol>
        </div>
        <div>

            <ul>
                   <li><a href ="index.php">Home</a></li>
                   <li><a href ="#about-us">About Us</a></li>
                   <li><a href ="#contact-us">Contact Us</a></li>
                </ul>
            </div>
           </nav>
       <div class="hello">
        
       </div>
       <div class="row-1" style="background-color:white; color:darkslategrey;" id="home">
        <div class="clm-3">
        <h1 class="xxlarge-font">Welcome to our school</h1>
        <p class="large-font">Best Place To Learn and get skills!</p>
        <p>Knowledge without practice is like wax without honey. </p>
       </div>
       <div class="clm-2">
        <img class="img" src="assets/images/home.png" width="100%" height="100%" style="margin-right:55px;">
       </div>
    </div>
    <div class="row-1" style="background-color:darkslategrey; color:white" id="about-us">
        <div class="clm-2">
            <div>
                <img class="img" src="assets/images/about.png" width="100%" height="100%" style="margin-left:55px;">
            </div>
        </div>
        <div class="clm-3" style="float:right;">
            <h1 class="xxlarge-font">About Us.</h1>
              <p class="large-font">library Book management.</p>
              <p>Customised tours to cater for every whim!

                Make it a personalized experience for you and your family or friends.
                
                My suggestions are merely a springboard for your imagination!
                
                So whether it be enjoying delicious Italian food and wine whilst mingling with the stylish locals in their favourite haunts, or getting the chance to enter some of the most fascinating local Florentine Artisan's workshops and maybe even trying out your own skills, you'll be taking home some special memories.
                
                 
                
                Please call Virginia on +39 349 5084833 to arrange your bespoke tour.</p>
                <div class="row" id="about-us">
                    <div class="clm">
                        <div class="Body">
                      <p>library management system.</p>
                        </div>
                    </div>
                    <div class="clm">
                        <div class="Body">
                      <p>library management system.</p>
                        </div>
                    </div>
                </div>
       </div>
    </div> 
    <div class="form" id="contact-us" style="background-color:white;">
        <center><form method="POST" action="reg.php">
          <h1 style="color: rgb(22, 50, 112); text-align: center;">Contact with us.</h1>
            <div style="margin-top:2rem;">
                <div class="clm1">
                    <label for="name">Fullname:</label>
                </div>
                    <div class="clm2">
                        <input type="text" name="name" class="btn btn_secondary">
                    </div>
                    <div class="clm1">
                        <label for="email">Email:</label>
                    </div>
                        <div class="clm2">
                            <input type="text" name="email" class="btn btn_secondary">
                        </div>
                        <div class="clm1">
                        <label for="password">contact:</label>
                    </div>
                    <div class="clm2">
                        <input type="text" name="contact" class="btn btn_secondary">
                    </div>
                    <div class="clm1">	
                        <label for="password">comment:</label>
                    </div>
                    <div class="clm2">
                        <input type="textarea" name="textarea" id="textarea" class="form-control required" value="">
                    </div>
             </div>
                    <div>
                        <button type="submit" name="complain" class="btn btn_secondary" value="submit">Submit</button>
                        <button type="cancel" name="cancel" class="btn btn_secondary" value="CANCEL">Cancel</button>
                    </div>
        </form></center>
       </div>
    </div>
    <div class="footer">
     <p>&copy; 2022 Library Book Management.</p>
    </div>
           
    </body>
</html>

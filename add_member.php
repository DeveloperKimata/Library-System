<!DOCTYPE hmtl>
<html>
    <head>
       <title>add-member</title>
        <meta charset = "UTF-8">
	  <meta name = "viewport" cuntent = "width = device-width, initial-scale=1.0">
       <link href="assets/css/acc.css" rel="stylesheet">
    </head>
    <body>
    
            <nav class="nav-bar">
        <div>
            <ol>
                <p class="pa">Library Book Management</p>
                <img id="img" src="assets/images/be.jpg" width="100%" height="100%">
            </ol>
        </div>
        <div>

            <ul>
                   <li><a href ="dashboard.php">Dashboard</a></li>
                </ul>
            </div>
           </nav>
        <div class="row-2">
            <div class="clm-4">
               <div class="form" style="margin-top:15rem;">
               <div class="hello">
                    <form method="POST" action="reg.php" enctype="multipart/form-data">
                      <h1 style="color:darkslategrey; text-align: center;">Add Member.</h1>
                      <div style="margin-top:1rem">
                      
                <div class="clm1">              
                    <label for="number">Member_No:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="id" class="btn btn_secondary">
                </div>
                <div class="clm1">
                    <label for="name">Member_fullName:</label>
                </div>
                    <div class="clm2">
                        <input type="text" name="name" class="btn btn_secondary">
                    </div>
                    <div class="clm1">
                    <label for="address">Member_Address:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="address" class="btn btn_secondary">
                </div>
                <div class="clm1">	
                    <label for="city">City:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="city" class="form-control required" value="">
                </div>
                <div class="clm1">
                    <label for="mobile">Phone:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="phone" class="btn btn_secondary">
                </div>
                <div class="clm1">
                    <label for="email">Member_Email:</label>
                </div>
                    <div class="clm2">
                        <input type="text" name="email" class="btn btn_secondary">
                    </div>
                <div class="clm1"> 
                    <label for="state">Member_State:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="state" class="btn btn_secondary">
                </div>
                    <div class="clm1">
                        <label for="userID">User_id:</label>
                    </div>
                    <div class="clm2">
                        <input type="text" name="u_id" class="btn btn_secondary">
                    </div>
                    <div class="clm1">
                        <label for="occupation">Member_occupation:</label>
                    </div>
                    <div class="clm2">
                        <input type="text" name="occupation" class="btn btn_secondary">
                    </div>
                    <div class="clm1">	
                        <label for="register">Member_DOR:</label>
                    </div>
                    <div class="clm2">
                        <input type="date" name="dor" class="form-control required" value="">
                    </div>             
                <div class="clm1">
                    <label for="date">Member_DOB:</label>
                </div>
                    <div class="clm2">
                        <input type="date" name="dob" class="btn btn_secondary">
                    </div>
                    <div class="clm1">
                        <label for="gender">Member_Gender:</label>
                        </div>
                    <div class="clm2"  style="margin-bottom:2rem;">
                        <div  class="radio-inline">

                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                                 
                        <input type="radio" id="female" name="gender" value="female" style="margin-left:110px;">
                        <label for="female"> Female</lable>
                                
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" name="cancel" class="btn btn_secondary" value="cancel">CANCEL</button>
                        <button type="submit" name="add_member" class="btn btn_secondary" value="add">ADD</button>
                    </div> 
        <div class="clm-3" style="margin-top:15rem; position:fixed; right:0; top:0;">
            <div class="body">
                <div>
                   <h1 style="font-size:25px;">Personal_image.</h1>
               </div>
               <div style="margin-top:2rem">
                <div class="image">
                    <div id="imgBox" class="container"></div>
                   <input type="file" id="myFile" name="_image" accept="image/*" style="display:none;" onchange="loadFile(event)">
                   <label for="myFile" name="image"><img src="assets/images/img4.jfif" class="upload_icon" width="40%" style="cursor:pointer;"></label> 


                </div>
              </div>
            </div>
        </div>
        
        </form>
       </div>
        </div>  
        </div>

                  <script>
                   var imgBox = document.getElementById("imgBox");

                   var loadFile = function(event){
                     imgBox.style.backgroundImage = "url(" + URL.createObjectURL(event.target.files[0])+")"
                     }
                  </script>
</body>
</html>
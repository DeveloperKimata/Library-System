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
                    <form action="reg.php" method="POST" enctypy="multpart/form-data">
                      <h1 style="color:darkslategrey; text-align: center;">Add Book.</h1>
                      <div style="margin-top:1rem">
                      
                <div class="clm1">              
                    <label for="number">Book_code:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="code" class="btn btn_secondary">
                </div>
                <div class="clm1">
                    <label for="name">Book_title:</label>
                </div>
                    <div class="clm2">
                        <input type="text" name="title" class="btn btn_secondary">
                    </div>
                    <div class="clm1">
                    <label for="quality">Book_Quality:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="quality" class="btn btn_secondary">
                </div>
                <div class="clm1">	
                    <label for="section">Section:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="section" class="form-control required" value="">
                </div>
                <div class="clm1">
                    <label for="p_id">Publish_id:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="id" class="btn btn_secondary">
                </div>
                <div class="clm1">
                    <label for="version">Book_version:</label>
                </div>
                    <div class="clm2">
                        <input type="text" name="version" class="btn btn_secondary">
                    </div>
                <div class="clm1"> 
                    <label for="cost">Book_cost:</label>
                </div>
                <div class="clm2">
                    <input type="text" name="cost" class="btn btn_secondary">
                </div>
                    <div class="clm1">
                        <label for="withdrawn">withdrawn:</label>
                    </div>
                    <div class="clm2">
                        <input type="text" name="withdrawn" class="btn btn_secondary">
                    </div>
                    <div class="clm1">
                        <label for="info">Book_information:</label>
                    </div>
                    <div class="clm2">
                        <input type="text" id="textarea" name="info" class="btn btn_secondary">
                    </div>
                    <div class="clm1">	
                        <label for="published">Book_date_published:</label>
                    </div>
                    <div class="clm2" style="margin-bottom:2rem;">
                        <input type="date" name="dop" class="form-control required" value="">
                    </div> 
                </div>
                <div>
                    <button type="button" name="cancel" class="btn btn_secondary" value="cancel">CANCEL</button>
                        <button type="submit" name="add_book" class="btn btn_secondary" value="add">ADD</button>
                    </div>  
                    <div class="clm-3" style="margin-top:15rem; position:fixed; right:0; top:0;">
                <div class="body">
                    <div>
                       <h1 style="font-size:25px;">Book_image.</h1>
                   </div>
                   <div style="margin-top:2rem">
                    <div class="image">
                        <div id="imgBox" class="container"></div>
                       <input type="file" id="myFile" name="_img" accept="image/*" style="display:none;" onchange="loadFile(event)">
                       <label for="myFile" name="_img"><img src="assets/images/img4.jfif" class="upload_icon" width="40%" style="cursor:pointer;"></label> 
    
                    </div>
                  </div>
                </div>
            </div>
     </div>
            </form>
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
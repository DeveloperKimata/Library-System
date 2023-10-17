<!DOCTYPE hmtl>
<html>
    <head>
       <title>services</title>
        <meta charset = "UTF-8">
	  <meta name = "viewport" cuntent = "width = device-width, initial-scale=1.0">
       <link href="assets/css/dash.css" rel="stylesheet">
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
                <li><a href ="dashboard.php">dashboard</a></li>
            </ul>
            </div>
           </nav>
           <div class="row">
            <div class="clm">
                    <div class="body">
                       
                    <form method="POST" action="reg.php" class="row">
                        <h1 style="color:darksgrey; text-align: center;">Lend Book.</h1>
                          <div style=" margin-top:1rem">
                            <div class="clm2">
                                <input type="text" name="member_id" class="btn btn_secondary" placeholder="member_id">
                            </div>
                            <div class="clm2">
                                <input type="text" name="code" class="btn btn_secondary"placeholder="book_code">
                            </div>
                            <div class="clm2">
                        <input type="date" name="bDate" class="form-control required" placeholder="borrow_date">
                            </div>
                            <div class="clm2">
                            <input type="date" name="dDate" class="form-control required" placeholder="due_date">
                            </div>
                            <div>
                                <button type="submit" name="lend" class="btn btn_secondary">Lend_Book</button>
                            </div>
                            <div>
                                <button type="cancel" name="cancel" class="btn btn_secondary" value="CANCEL" action="cancel">Cancel</button>
                            </div>    
                          </div>
                    </form>
                    <div>
                    </div>
                </div>
                </div>
                <div class="clm">
                    <div class="body">
                    <h1>Welcome.</h1>
                    <div style="margin-top:2rem;">
                      <p>library management system.</p>
                      <p>Customised tours to cater for every whim!
        
                        Make it a personalized experience for you and your family or friends.
                        
                        My suggestions are merely a springboard for your imagination!
                        
                        So whether it be enjoying delicious Italian food and wine whilst mingling with the stylish locals in their favourite haunts, or getting the chance to enter some of the most fascinating local Florentine Artisan's workshops and maybe even trying out your own skills, you'll be taking home some special memories.
                        
                         
                        
                        Please call Virginia on +39 349 5084833 to arrange your bespoke tour.</p>
                    </div>
                </div>
                </div>
                <div class="clm">
                    <div class="body">
                    <form method="POST" action="reg.php" class="row">
                  <h1 style="color:darksgrey; text-align: center;">Return book.</h1>
                  <div style=" margin-top:1rem">
            <div class="clm2">
                <input type="text" name="member_id" class="btn btn_secondary" placeholder="member_id">
            </div>
            <div class="clm2">
                <input type="text" name="code" class="btn btn_secondary" placeholder="book_code">
            </div>
    <div class="clm2" style="margin-bottom:1rem;">
        <input type="text" name="date" class="btn btn_secondary" placeholder="return_date">
    </div>
            <div>
                <button type="submit" name="return" class="btn btn_secondary">Return</button>
            </div>
            <div>
                <button type="cancel" name="cancel" class="btn btn_secondary" value="CANCEL" action="cancel">Cancel</button>
            </div>  
            
        </div>
        </form>
                            </div>
                    </div>
                </div>
                </div>
                </div>
            </body>
            </html>
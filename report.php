<!DOCTYPE hmtl>
<html>
    <head>
       <title>reports</title>
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
              <div class="form" style="margin-top:15rem; margin-left:250px;">
                      <h1 style="color:darkslategrey; text-align: center;">Reports.</h1>
                      <div style="margin-top:1rem">

                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include './connect.php';

                                $sql = "SELECT * FROM report";
                                $result = $conn -> query($sql);
                            
                                if ($result->num_rows>0) {
                                    while($row = $result->fetch_assoc()) {

                            ?>
                                        <tr>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['contact']; ?></td>
                                            <td><?php echo $row['comment']; ?></td>
                                        </tr>
                            <?php
                                    }
                                }
                                $conn->close();

                            ?>
                            </tbody>
                        </table>
                      </div>
                     </div>
                   </div>
              </div>
</body>
</html>
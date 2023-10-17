<!DOCTYPE hmtl>
<html>
    <head>
       <title>dashboard</title>
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
            <div class="clm-6">
                    <div class="fomu" style="margin-top:15rem;">
                      <h1 style="color:darkslategrey; text-align:center;">Book Lists.<button type="button" name="add" class="btn btn_secondary" value="cancel"  style="float:right;"><a href="add-book.php" style="color:white;">addBook</a></button></h1>
                      <div style="margin-top:1rem">
                      <div>
                      
                      </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Title</th>
                                    <th>Quality</th>
                                    <th>Section</th>
                                    <th>ID</th>
                                    <th>version</th>
                                    <th>cost</th>
                                    <th>withdrawn</th>
                                    <th>information</th>
                                    <th>date of published</th>
                                    <th>image</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include './connect.php';

                                $sql = "SELECT * FROM book";
                                $result = $conn -> query($sql);
                            
                                if ($result->num_rows>0) {
                                    while($row = $result->fetch_assoc()) {

                            ?>
                                        <tr>
                                            <td><?php echo $row['code']; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['quality']; ?></td>
                                            <td><?php echo $row['sector']; ?></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['version']; ?></td>
                                            <td><?php echo $row['cost']; ?></td>
                                            <td><?php echo $row['withdrawn']; ?></td>
                                            <td><?php echo $row['info']; ?></td>
                                            <td><?php echo $row['dop']; ?></td>
                                            <td><?php echo $row['img']; ?></td>
                                            <td><a href="">delete</a></td>
                                            <td><a href="">update</a></td>
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
              <div style="margin-top:3rem">
            <div class="row-2">
                <div class="clm-6">
                    <div class="fomu" style="margin-top:15rem;">
                      <h1 style="color:darkslategrey; text-align:center;">Member Lists.<button type="button" name="add" class="btn btn_secondary" value="cancel"  style="float:right;"><a href="add_member.php" style="color:white;">addMember</a></button></h1>
                      <div style="margin-top:1rem">

                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>State</th>
                                    <th>userID</th>
                                    <th>occupation</th>
                                    <th>Date of registered</th>
                                    <th>Date Of Birth</th>
                                    <th>Gender</th>
                                    <th>Image</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include './connect.php';

                                $sql = "SELECT * FROM member";
                                $result = $conn -> query($sql);
                            
                                if ($result->num_rows>0) {
                                    while($row = $result->fetch_assoc()) {

                            ?>
                                        <tr>
                                            <td><?php echo $row['member_id']; ?></td>
                                            <td><?php echo $row['fullName']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['state']; ?></td>
                                            <td><?php echo $row['u_id']; ?></td>
                                            <td><?php echo $row['occupation']; ?></td>
                                            <td><?php echo $row['dor']; ?></td>
                                            <td><?php echo $row['dob']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['image']; ?></td>
                                            <td><a href="">delete</a></td>
                                            <td><a href="">update</a></td>
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
                </div>            
</body>
            </html>
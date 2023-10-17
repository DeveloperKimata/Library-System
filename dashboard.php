<?php
session_start();
if (!isset($_SESSION['user']))
{
    header("Location: login.php");
    die();
}
?>
<!DOCTYPE hmtl>
<html>
    <head>
       <title>dashboard</title>
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
                <li><a href="logOut.php">LogOut</a></li>
                <li><a href ="accounts.php">Books & Members Details</a></li>
                <li><a href ="services.php">Services</a></li>
                  <li><a href ="report.php">Reports</a></li>
                <li><a href ="dashboard.php">dashboard</a></li>
                
                  
            </ul>
            </div>
           </nav>
            <div class="row">
            <div class="clm">
                    <div class="body">
                    <h1>Welcome <?php echo $_SESSION['user']['userName']; ?>.</h1>
                    <div style="margin-top:2rem;">
                        <div class="image">
                        <div id="imgBox" class="container">
                        <?php
                            include './connect.php';
                                $uid=$_SESSION['user']['userID']; 

                                $sql = "SELECT image FROM member WHERE u_id = $uid";
                                $result = $conn -> query($sql);
                            
                                if ($result->num_rows>0) {
                                    while($row = $result->fetch_assoc()) {

                            ?>
                             
                            <img src="uploads/<?php echo $row['image']; ?>" width="15%" style="border-radius:50%;">
                            
                            <?php
                                    }
                                }
                                $conn->close();

                            ?>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            <div class="clm">
                    <div class="body">
                        <a href ="accounts.php" style="float:right;">View All.</a>
                    <div>
                    <h1>Top Books list</h1>
                    <table>
                        <tr>
                        <th>code</th>
                        <th>Title</th>
                        </tr>
                        <?php
                        
                        include "./connect.php";

                        $query = "SELECT code,title FROM book LIMIT 5";
                        $result = $conn -> query($query);

                        while($row = $result->fetch_assoc()) {
                            ?>
                        <tr>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['title'];?></td>
                        </tr>
                        <tr>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['title'];?></td>
                        </tr>
                        <tr>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['title'];?></td>
                        </tr>
                        <tr>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['title'];?></td>
                        </tr>
                        <tr>
                        <td><?php echo $row['code']; ?></td>
                        <td><?php echo $row['title'];?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    </div>
                </div>
                </div>
                <div class="clm">
                    <div class="body">
                    <a href ="accounts.php" style="float:right;">View All.</a>
                    <div>
                    <h1>Top Member list</h1>
                    <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include './connect.php';

                                $sql = "SELECT member_id,fullName FROM member LIMIT 5";
                                $result = $conn -> query($sql);
                            
                                if ($result->num_rows>0) {
                                    while($row = $result->fetch_assoc()) {

                            ?>
                                        <tr>
                                            <td><?php echo $row['member_id']; ?></td>
                                            <td><?php echo $row['fullName']; ?></td>
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
                <div class="row">
            <div class="clm" style="width: 50%; margin-top:3rem;">
                    <div class="body">
                    <h1>Lend Book Details</h1>
                    <table>
                            <thead>
                                <tr>
                                    <!-- <th></th> -->
                                    <th>memberID</th>
                                    <th>bookCode</th>
                                    <th>borrowDate</th>
                                    <th>dueDate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include './connect.php';

                                $sql = "SELECT * FROM lend LIMIT 5";
                                $result = $conn -> query($sql);
                            
                                if ($result->num_rows>0) {
                                    while($row = $result->fetch_assoc()) {

                            ?>
                                        <tr>
                                            <td><?php echo $row['memberID']; ?></td>
                                            <td><?php echo $row['bookCode']; ?></td>
                                            <td><?php echo $row['borrowDate']; ?></td>
                                            <td><?php echo $row['dueDate']; ?></td>
                                        </tr>
                            <?php
                                    }
                                }
                                $conn->close();

                            ?>
                            </tbody>
                        </table>
                    <div>
                    </div>
                </div>
                </div>
                <div class="clm"  style="width: 50%; margin-top:3rem;">
                    <div class="body">
                    <h1>Return Book Details</h1>
                    <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>memberID</th>
                                    <th>bookCode</th>
                                    <th>returnDate</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include './connect.php';

                                $sql = "SELECT * FROM returnBook LIMIT 5";
                                $result = $conn -> query($sql);
                            
                                if ($result->num_rows>0) {
                                    while($row = $result->fetch_assoc()) {

                            ?>
                                        <tr>
                                            <td><?php echo $row['member_id']; ?></td>
                                            <td><?php echo $row['bookCode']; ?></td>
                                            <td><?php echo $row['returnDate']; ?></td>
                                            <td><?php echo $row['role']; ?></td>
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
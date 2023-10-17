<?php
include_once './connect.php';


if(isset($_POST['add_book'])){
    $code = $_POST['code'];
    $title = $_POST['title'];
    $quality = $_POST['quality'];
    $section = $_POST['section'];
    $pub_id = $_POST['id'];
    $version = $_POST['version'];
    $cost = $_POST['cost'];
    $withdrawn = $_POST['withdrawn'];
    $info = $_POST['info'];
    $dop = $_POST['dop'];
    $file = $_FILES['_img']['name'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["_img"]["name"]);

    
    $sql = "INSERT INTO book(code,title,quality,section,id,version,cost,withdrawn,info,dop,img) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
    $statement = $conn -> prepare($sql);
    $statement -> bind_param('isssissssss',$code,$title,$quality,$section,$pub_id,$version,$cost,$withdrawn,$info,$dop,$file);
    $statement-> execute();
    $statement -> close();
    $conn -> close();

    
    move_uploaded_file($_FILES["_img"]["tmp_name"], $target_file);

    header("Location: ./dashboard.php");

}
if(isset($_POST['add_member'])){
    
    $member_id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $u_id = $_POST['u_id'];
    $occupation = $_POST['occupation'];
    $dor = $_POST['dor'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender']; 

    $file = $_FILES['_image']['name'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["_image"]["name"]);
    // echo $_FILES['_image']['name'] ;

    
    $query = "INSERT INTO member(member_id,fullName,address,city,phone,email,state,u_id,occupation,dor,dob,gender,image) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $statement = $conn -> prepare($query);
    $statement -> bind_param('isssississsss',$member_id,$name,$address,$city,$phone,$email,$state,$u_id,$occupation,$dor,$dob,$gender,$file);
    $statement-> execute();
    $statement -> close();
    $conn -> close();

    move_uploaded_file($_FILES["_image"]["tmp_name"], $target_file);

    header("Location: ./dashboard.php");
}

if(isset($_POST['register'])){
    $ID =$_POST['userID'];
    $username = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password2 = $_POST['password2'];
    $phone = $_POST['phone'];
    
    $sql = "INSERT INTO user VALUES(?,?,?,?,?)";
    $statement = $conn -> prepare($sql);
    $statement -> bind_param('sssss',$ID,$username,$email,$password,$phone);
    $statement-> execute();
    $statement -> close();
    $conn -> close();

    header("Location: ./login.php");
}
if(isset($_POST['complain'])){
    $name_report = $_POST['name'];
    $email_report = $_POST['email'];
    $contact = $_POST['contact'];
    $comment = $_POST['textarea'];
    
    $sql = "INSERT INTO report VALUES(?,?,?,?)";
    $statement = $conn -> prepare($sql);
    $statement -> bind_param('ssss',$name_report,$email_report,$contact,$comment);
    $statement-> execute();
    $statement -> close();
    $conn -> close();

    header("Location: ./index.php");
}
    if(isset($_POST['login'])){
        $userName = $_POST['userName'];
        $password = $_POST['password'];
    
        
        $sql = "SELECT * FROM user WHERE userName = '$userName'";
        $result = $conn -> query($sql);
    
        if ($result->num_rows>0) {
            session_start();
            while($row = $result->fetch_assoc()) {
                $_SESSION['user']= array('userID'=>$row['userID'],
                'userName'=>$row['userName'],'email'=>$row['email']);
                if ($row['userName']==='admin') {
                    header("Location: ./dashboard.php");
                }else {
                    header("Location: ./Dashboard.php");
                }
              }
        }else {
            header("Location: ./login.php");
        }
        $conn->close();
    }

    if(isset($_POST['lend'])){
        $member_id = $_POST['member_id'];
        $code = $_POST['code'];
        $bDate = $_POST['bDate'];
        $dDate = $_POST['dDate'];
        
        $sql = "INSERT INTO lend VALUES(?,?,?,?)";
        $statement = $conn -> prepare($sql);
        $statement -> bind_param('isss',$member_id,$code,$bDate,$dDate);
        $statement-> execute();
        $statement -> close();
        $conn -> close();
    
        header("Location: ./services.php");
    }

?>
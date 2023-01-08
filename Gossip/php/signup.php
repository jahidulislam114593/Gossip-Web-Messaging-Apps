<?php
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password))
{
    //Email valid or not
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // check that email already exist in the database or not
        $sql=mysqli_query($conn, "SELECT email FROM users WHERE email='{$email}'");
        if(mysqli_num_rows > 0){
            //if already exist;
            echo "$email - this email already exist!";
        }else{
            //check user upload file or not
            if(isset($_FILES['file'])){
                //if file is uploaded
                $img_name=$_FILES['image']['name']; //getting user upoloaded img name
                $img_type=$_FILES['image']['type']; //getting user upoloaded img type
                $tmp_name=$_FILES['image']['tmp_name']; //tmp name is used to save/move file in our folder
                
                //let's explode image and get the last extension like jpg png
                $img_explode=explode('.',$img_name);
                $img_ext=end($img_explode);

                $extension =['png','jpeg','jpg'];
                if(in_array($img_ext, $extension) === true){
                    $time = time(); 
                    $new_img_name= $time.$img_name;

                    if(move_uploaded_file($tmp_name, "image/".$new_img_name)){
                        $status = "Active now";
                        $random_id = rand(time(), 10000000);

                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                             VALUES ('{$random_id}','{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");
                        if($sql2){
                            $sql3= mysqli_connect($conn, "INSERT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }
                        }else{
                            echo "Somthing went wrong!";
                        } 
                }

                }else{
                    echo "Please select an image file - jpeg, jpg, png!";
                }
            }else{
                echo "Please select an image file!";
            }
        }
    }
    else{
        echo "$email - This is not valid a email";
    }

}else
{
    echo "All input field are required!";
}
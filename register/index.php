<?php
include('partials/header.php')
?>

<?php 
if(isset( $_SESSION['accountCreated']))
{
     echo $_SESSION['accountCreated'];
     unset( $_SESSION['accountCreated']);
}
?>
    <div class="form_container">
    <div class="overlay">

    </div>


    <div class="titleDiv">
        <h1 class="title">Login</h1>
        <span class="subTitle">Welcome back!</span>
    </div>


    

     <form action="" method="POST">
        <div class="row grid">
        <div class="row">
            <label for="username">User Name</label>
            <input type="text" id="username" name="userName"
            placeholder="Enter User Name" required>
        </div>

        <div class="row">
            <label for="password">Password</label>
            <input type="password" id="password" name="password"
            placeholder="Enter your password" required>
        </div>
        <div class="row">
            
            <input type="submit" id="submitBtn" name="submit"
            value="Login" required>

            <span class="registerLink">Don't have an account? <a href="register.php">Register</a></span>
        </div>
        </div>

     </form>

     <?php
     include('partials/footer.php')
     ?>


<?php
            if(isset($_POST['submit']))
            {
                $userName = $_POST['userName'];
                $passWord = $_POST['password'];

                $sql= "SELECT * FROM admin WHERE usernames = '$userName' AND passwords = '$passWord'";

                $result = mysqli_query($conn, $sql);

                $count = mysqli_num_rows($result);

                $row = mysqli_fetch_assoc($result);
                $_SESSION["message"]="success registered";

                if($count == 1)
                {
                    $_SESSION['loginMessage'] = '<span class="success">Welcome '.$userName.' </span>';
                    header('location:' .SITEURL. 'register.php');
                    exit();
                }
                else{
                    $_SESSION['noAdmin']='<span class="fail">' .$userName. ' is not regiistered! </span>';
                    header('location:' .SITEURL. 'index.php');
                    exit();
                }
            }
?>

    


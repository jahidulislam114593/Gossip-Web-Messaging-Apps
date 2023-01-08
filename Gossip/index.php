<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gossip</title>


    <!-- css Link -->
    <link rel="stylesheet" href="style.css">
    <!-- fontawesome 4.7 link here -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Gossip</header>
            <form class="#" enctype="multipart/form-data">
                <div class="error_txt">This is an error message</div>
                <div class="name_details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="last Name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="password" required >
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file">
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Gossip">
                    </div>
                    <div class="link">Already Signed up? <a href="#">Login Now</a></div>
            </form>
        </section>
    </div>
</body>
</html>

<!-- JavaScript link -->
<script src="js/pass-show-hide.js"></script>
<script src="js/signup.js"></script>
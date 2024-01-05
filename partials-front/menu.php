<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Fresh</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="http://localhost/food-order/" title="Logo">
                    <img src="images/logo.jpeg" alt="Farm Fresh Logo" class="img-responsive">
                </a>
            </div>
<br>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a style="color: green;" href="<?php echo SITEURL; ?> ">Home</a>
                    </li>
                    <li>
                        <a style="color: green;" href="<?php echo SITEURL; ?>categories.php">Categories</a>
                    </li>
                    <li>
                        <a style="color: green;" href="<?php echo SITEURL; ?>foods.php">Foods</a>
                    </li>
                    <li>
                        <a style="color: green;" href="<?php echo SITEURL; ?>facilities.php">Facilities</a>
                    </li>
                    <li>            
							<?php
						if(empty($_SESSION["u_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active" style="color: green;">User Login</a> </li>';
                                echo '<li class="nav-item"><a href="admin/login.php" class="nav-link active" style="color: green;">Farmer Login</a> </li>';
							}
						else
							{
                                    echo  '<li class="nav-item"><a href="myorders.php" style="color: green;" class="nav-link active">Myorders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" style="color: green;" class="nav-link active">Logout</a> </li>';
							}
						?>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->
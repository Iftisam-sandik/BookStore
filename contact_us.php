<?php

	try{
		$db= new mysqli("localhost","root","","bookhub");
	}catch(Exception $exc){
		echo $exc->getTraceAsString();
	}
	
	if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['msg'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];
		
		$is_insert = $db->query("INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$msg')");
		
		if($is_insert==true){
			echo "<h2>Thanks for your message.</h2> ";
			exit();
		}
	}
	
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Contact us</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/contact_us.css">
    </head>

    <body>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
                <p>If you have any query, suggestion or complain regarding this website, please feel free to contact us.</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>144,Nakhalpara<br>Tejgaon, Dhaka,<br>1215</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>01876144209</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>tjawad98@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form method="post" action="">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea name="msg" required="required"></textarea>
                            <span>Type your message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="Submit" name="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
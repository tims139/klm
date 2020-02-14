<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Performance marketing platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="./template/css/opensans-font.css">
    <link rel="stylesheet" href="./template/css/style.css" />
</head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left">
                <h2>ABOUT US</h2>
                <p>
                The ultimate performance marketing platform. This server handles billions of events per day. Key features include:
                </p>
                <ul>
                    <li>Fraud Prevention</li>
                    <li>Smart Link Campaigns</li>
                    <li>Smart Alerts</li>
                    <li>Deep Analytics and Reporting</li>
                    <li>View Through Attribution</li>
                    <li>e-Commerce Support</li>
                </ul>
                <p><span>Warning:</span> Due to popular demand we have had to temporarily close online registration.</p>
            </div>
            <form class="form-detail" action="index.php" method="post" id="myform">
                <h2>MEMBER LOGIN</h2>
                <div class="form-row">
                    <input type="text" placeholder="Your Email" name="your_email" id="your_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                </div>
                
                <div class="form-row">
                    <input type="password" placeholder="Password" name="password" id="password" class="input-text" required>
                </div>
                <div class="form-row-last">
                    <input type="submit" value="SUBMIT" class="register">
                </div>
                <?php    
					if(isset($_POST['login']) OR isset($_POST['password'])){
					echo '<div style="color:red;font-size: 14px;text-align: center">You have entered an invalid email or password!</div>';
				}    
				?>
            </form>
        </div>
    </div>
</body>

</html>
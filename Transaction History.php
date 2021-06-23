<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home
    </title>
</head>
<body>

    <h1>Page 1 [Home]
    </h1> 
    <h2>Digital Wallet
    </h2> 

    <p>1. <a href="Home.php">Home
    </a>
        2. <a href="History.php">Transaction History
        </a>
    </p> 

    <h2>Fund Transfer:
    </h2> 
    <br>
    <form method="post" action="<?php;?>">
    <label for="category">Select Category: 
    </label>

    <select name="category" id="category">
    <option value="mobileRecharge">Mobile Recharge
    </option>
    <option value="sendMoney">Send Money
    </option>
    <option value="merchantPay">Merchant pay
    </option>
    </select> 
    <span style = "color : red;"><?php echo $categoryErr;?>
        
    </span>
    <br>
    <br>

    <label for="phoneNumber">To:
     </label>
    <input type="text" id="phoneNumber" name="phoneNumber">
    <span style = "color : red;">
        <?php echo $phoneNumberErr;?>
            
        </span>
        <br>
        <br>
    <label for="amount">Amount: 
    </label>
    <input type="text" id="amount" name="amount">
    <span style = "color : red;">
        <?php echo $amountErr;?>
            
        </span>
        <br>
        <br>

    <button type="submit" value="Submit">Submit
    </button>
    </form>

</body>
</html>
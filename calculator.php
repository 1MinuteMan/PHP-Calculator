<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <?php
        if(isset($_POST['count'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            switch($operation){
                case 'Addition':
                    $results = $num1 + $num2;
                    break;
                case 'Substraction':
                    $results = $num1 - $num2;
                    break;
                case 'Multipliction':
                    $results = $num1 * $num2;
                    break;
                case 'Division':
                    $results = $num1 / $num2;
                    break;
            }
        }
    ?>

    <div class="calculator">
        <h1 class="title">CALCULATOR</h1>
        <form method="post" action="calculator.php">
            <input type="text" name="num1" class="num" autocomplete="off" placeholder="Enter The First Number">
            <input type="text" name="num2" class="num" autocomplete="off" placeholder="Enter The Second Number">
            <select name="operation" class="opt">
                <option value="Addition">+</option>
                <option value="Substraction">-</option>
                <option value="Multiplication">X</option>
                <option value="Division">:</option>
            </select>
            <input type="submit" name="count" value="count" class="button">
        </form>
        <?php
            if(isset($_POST['count'])){ ?>
            <input type="text" value="<?php echo $results; ?>" class="num">
            <?php }else{ ?>
                <input type="text" value="0" class="num">
                <?php } ?>
    </div>

    <section class="contact">
    <div class="contact-heading">
        <h1>Feedback</h1>
        <p>Type Your Feedback Below</p>
    </div>
    <form action="userinformation.php" method="post">
        <input type="text" name="user" placeholder="Your Full Name">
        <input type="email" name="email" placeholder="Your E-Mail">
        <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
        <button class="main-btn contact-btn" type="submit">Continue</button>
    </form>
</section>
</body>
</html>
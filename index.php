<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="./webpage/buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give Us Your Money</h2>
<form action="sucker.php" method="POST">
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="name">
        </dd>

        <dt>Section</dt>
        <dd>
            <select name="section" id="">
                <option value="">Select a section</option>
                <?php for ($i = 'A'; $i <= 'M'; $i++) {?>
                <option value="M<?php echo $i ?>">M<?php echo $i ?></option>
                <?php } ?>
            </select>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <input type="number" name="card_number">
        </dd>
        <dd>
            <input type="radio" name="card_type" id="visa" value="visa"> <label for="visa">Visa</label>
            <input type="radio" name="card_type" id="mastercard" value="mastercard"> <label for="mastercard">MasterCard</label>
        </dd>
    </dl>

    <div>
        <input type="submit" value="I am a giant sucker.">
    </div>
</form>
</body>
</html>
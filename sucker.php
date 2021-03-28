<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="./webpage/buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <?php
        if (!isset($_REQUEST['card_type']) or $_REQUEST['name'] == '' or $_REQUEST['section'] == '' or $_REQUEST['card_number'] == '') {
    ?>
        <h1>Sorry!</h1>
        <p>
            You didn't fill out the form completely. <a href="index.php">Try again?</a>
        </p>
    <?php } else {?>
            <?php
            $text = $_REQUEST['name'] . ';' . $_REQUEST['section'] . ';' . $_REQUEST['card_number'] . ';' . $_REQUEST['card_type'] . PHP_EOL;
            file_put_contents("suckers.txt", $text, FILE_APPEND)
            ?>
            <h1>Thanks, sucker!</h1>

            <p>
                Your information has been recorded.
            </p>

                <dl>
                    <dt>Name</dt>
                    <dd>
                        <?= $_REQUEST['name']?>
                    </dd>

                    <dt>Section</dt>
                    <dd>
                        <?= $_REQUEST['section']?>
                    </dd>

                    <dt>Credit Card</dt>
                    <dd>
                        <?= $_REQUEST['card_number']?> <?= '(' . $_REQUEST['card_type'] . ')' ?>
                    </dd>
                </dl>

            <p>
                Here are all the suckers who have submitted here:
            </p>

            <pre><?= file_get_contents("suckers.txt")?></pre>
    <?php } ?>
</body>
</html>
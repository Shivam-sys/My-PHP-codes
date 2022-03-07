<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Table generator</title>
    <link rel="stylesheet" href=".\style.css">
    <style>
        td{
            padding: 0 12px;
        }
    </style>
</head>
<body>
            <header>
                Table generator
            </header>
            <div class="formbox" style = "padding-left:20px">
                <form action="" method="POST">
                    <label>Enter a number</label>
                    <input type="number" class="box1 box2" id = "num" name = 'num' value = "<?php if(isset($_POST['num'])) echo $_POST['num'] ?>" required />
                    <input type="submit" name = "submit" value="Calculate" class = "button1 button2">
                </form>
            </div>
            <div class="outputbox">
                <table style = "margin-left:20px;">
                <?php 
                    $num = $_POST['num'];
                    $i = 20;
                    while($i>0){
                        echo "<tr><td>$num</td><td> x</td> <td>$i</td><td> = </td><td>".$num*$i."</td></tr>";
                        $i--;
                    }
                ?>
                </table>
            </div>
</body>
</html>

   
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Color Name Generator</title>
        <link rel="stylesheet" href=".\style.css">
    </head>
    <body>
        <center>
            <div>
                <header>
                    Color Name Generator
                </header>
                <div class="formbox">
                    <form action="" method="POST">
                        <label>Enter a character</label>
                        <input type="text" class="box1 box2" name = 'char' value = "<?php if(isset($_POST['char'])) echo $_POST['char'] ?>" required /><br>
                        <input type="submit" name = "submit" value="Generate" class = "button1 button2"><br><br>
                    </form>
                    <?php
                        $char = $_POST['char'];
                        if ($char == 'G' || $char == 'g')
                            $color_out = "Green";
                        else if ($char == 'P' || $char == 'p')
                            $color_out = "Pink";
                        else if ($char == 'B' || $char == 'b')
                            $color_out = "Black";
                        else if ($char == 'Y' || $char == 'y')
                            $color_out = "Yellow";
                        else   
                            $color_out = "Wrong symbol";
                    ?>
                    <div class="row">
                        <label>Color name</label><input type="text" value = "<?php echo $color_out; ?>" style = "background-color: <?php echo $color_out; ?>; color:grey" class="box1 box3" readonly><br>
                    </div>
                </div>
            </div>
        </center>
    </body>
</html>
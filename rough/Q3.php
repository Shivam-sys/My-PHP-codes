<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Salary Calculator</title>
    <link rel="stylesheet" href=".\style.css">
</head>
<body>
    <center>
        <div>
            <header>
                Salary Calculator
            </header>
            <div class="formbox">
                <form action="" method="POST">
                    <label>Basic salary</label>
                    <input type="number" class="box1 box2" id = "salary" name = 'salary' value = "<?php if(isset($_POST['salary'])) echo $_POST['salary'] ?>" required /><br>
                    <input type="submit" name = "submit" value="Calculate" class = "button1 button2">
                    <?php
                        function calc_hra(){
                            $salary = $_POST['salary'];
                            return $salary*0.19;
                        }
                        function calc_pf(){
                            $salary = $_POST['salary'];
                            return $salary*0.13;
                        }
                        function calc_total(){
                            $salary = $_POST['salary'];
                            return $salary - calc_pf();
                        }
                    ?>
                    <input type="reset" value="Clear" class="button1 button3"/> <br><br>
                </form>
            </div>
            <div class="outputbox">
                <div class="row">
                    <label>HRA</label><input type="number" value = "<?php echo calc_hra(); ?>" class="box1 box3" id = "rent" readonly><br>
                </div>
                <div class="row">
                    <label>PF</label><input type="number" value = "<?php echo calc_pf(); ?>" class="box1 box3" id = "pf" readonly><br>
                </div>
                <div class="row">
                    <label id ="total">Total Salary</label><input type="number" value = "<?php echo calc_total(); ?>" class="box1 box3" id = "totalsal" readonly><br>
                </div>
            </div>
        </div>
    </center>
</body>
</html>

   
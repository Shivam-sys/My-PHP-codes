<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Expense Calculator</title>
    <link rel="stylesheet" href=".\style.css">
</head>
<body>
    <center>
        <div>
            <header>
                Expense Calculator
            </header>
            <div class="formbox">
                <form action="" method="POST">
                    <label>Salary</label>
                    <input type="number" class="box1 box2" id = "salary" name = 'salary' value = "<?php if(isset($_POST['salary'])) echo $_POST['salary'] ?>" required /><br>
                    <input type="submit" name = "submit" value="Calculate" class = "button1 button2">
                    <?php
                        function calc_hr(){
                            $salary = $_POST['salary'];
                            return $salary*0.16;
                        }
                        function calc_eb(){
                            $salary = $_POST['salary'];
                            return $salary*0.09;
                        }
                        function calc_cl(){
                            $salary = $_POST['salary'];
                            return $salary*0.08;
                        }
                        function calc_exp(){
                            $salary = $_POST['salary'];
                            return $salary - calc_hr() - calc_eb() - calc_cl();
                        }
                    ?>
                    <input type="reset" value="Clear" class="button1 button3"/> <br><br>
                </form>
            </div>
            <div class="outputbox">
                <div class="row">
                    <label>House Rent</label><input type="text" value = "<?php echo calc_hr(); ?>" class="box1 box3" id = "rent" readonly><br>
                </div>
                <div class="row">
                    <label>Electric Bill</label><input type="text" value = "<?php echo calc_eb(); ?>" class="box1 box3" id = "bill" readonly><br>
                </div>
                <div class="row">
                    <label>Car Loan</label><input type="text" value = "<?php echo calc_cl(); ?>" class="box1 box3" id = "loan" readonly><br>
                </div>
                <div class="row">
                    <label id ="total">Total Expenditure</label><input type="text" value = "<?php echo calc_exp(); ?>" class="box1 box3" id = "totalexp" readonly><br>
                </div>
            </div>
        </div>
    </center>
</body>
</html>

   
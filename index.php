<?php //for int
declare(strict_types = 1); ?>

<?php //autolod classes
include_once('autoload/autoload.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

   <?php

    ?>
        <form method="POST" action="includes/calc.inc.php">
            <p>My own calculator</p>
            <input type="number"  name="num1" placeholder="FirstNumber">
            <select name="oper" id="">
                <option value="add">Additional</option>
                <option value="sub">Substraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>
            <input type="num2" placeholder="SecondNumber">
            <button type="submit" name="submit">Calculate</button>
        </form>


<?php


















//    $array = array(
//            'name' => 'mihai',
//            'age'=> 22,
//
//    );
//
//
//
//
//   foreach ($array as $key => $value){
//
//       $person = new Person();
//       if($key == 'name'){
//
//             $person->setName($value);
//             $person->getName();
//
//       }
//
//   }











   ?>



</body>
</html>
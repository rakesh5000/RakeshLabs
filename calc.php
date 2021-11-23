<?php
$a="";
$b="";
$c="";
$d="";
$e="";
$f="";
$g="";
$h="";
$i="";
$j="";
$k="";

if(isset($_POST['submit']))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $c=$_POST['num3'];
    $d=$_POST['num4'];
    $e=$_POST['num5'];
    $f=$_POST['num6'];
    $g=$_POST['num7'];
    $h=$_POST['num8'];
    $i=$_POST['num9'];

    $nume=$a*$b*$c;
    $p=1000;
    $I=($i/$p);
    $deno=($f+$I)*($g+$I)*($h+$I);
    $j=$nume/$deno;

    $q=$j*$f*$g*$h;
    $k=$nume-$q;


}
?>

<html>
    <body>

    <form action="" method="POST">
    <h3>Enter the details of walls</h3>
        Input Length : 
        <input type="text" name="num1" value="<?php echo $a; ?>"><br><br>
        Input Width : 
        <input type="text" name="num2" value="<?php echo $b; ?>"><br><br>
        Input Height : 
        <input type="text" name="num3" value="<?php echo $c; ?>"><br><br>
        Input Cement Ratio : 
        <input type="text" name="num4" value="<?php echo $d; ?>"><br><br>
        Input Sand Ratio : 
        <input type="text" name="num5" value="<?php echo $e; ?>"><br><br>

        <h3>Now , enter the details of brick</h3>
        Input Length : 
        <input type="text" name="num6" value="<?php echo $f; ?>"><br><br>
        Input Width : 
        <input type="text" name="num7" value="<?php echo $g; ?>"><br><br>
        Input Height : 
        <input type="text" name="num8" value="<?php echo $h; ?>"><br><br>
        Input Thickness of Mortar : 
        <input type="text" name="num9" value="<?php echo $i; ?>"><br><br>

        <input type="submit" name="submit" value="Calculate"><br><br>

        Number of Bricks Required is  :
        <input type="number" name="" value="<?php echo $j; ?>"><br><br>
        Volume Of K is  :
        <input type="number" name="" value="<?php echo $k; ?>"><br><br>

    </form>

    All copyright reserved to Er.Ranjeet Sahani

    </body>
</html>

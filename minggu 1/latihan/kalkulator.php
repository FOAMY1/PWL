<!DOCTYPE html>
<html>
<head></head>
<body>
 
<?php
ini_set('display_errors',0);
 if (isset($_REQUEST['operation'])){
     $n1=$_REQUEST['angka1'];
     $n2=$_REQUEST['angka2'];
     $operasi=$_REQUEST['operasi'];
     if ($operasi=='+'){
         $jawab = $n1+$n2;
     }
     if ($operasi=='-'){
        $jawab = $n1-$n2;
    }
    if ($operasi=='x'){
        $jawab = $n1*$n2;
    }
    if ($operasi==':'){
        $jawab = $n1/$n2;
    }
    if ($_REQUEST['angka1']==NULL||$_REQUEST['angka2']==NULL){
        $jawab = "Masukkan angka";
    }

 }
?>
<form>
    <table>
        <tr>
            <td>
                <input name="angka1" type="text"/>
            </td>
        </tr>
        <tr>
            <td>
                <input name="angka2" type="text"/>
            </td>
        </tr>
        <tr>
            <td>
                <select name="operasi" style="width: 50px;">
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option>:</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="operation" value="go"/>
            </td>
        </tr>
        <tr>
            <td style="color:darkblue"><?php echo $jawab;?></td>
        </tr>	
    </table>
</form>
</body>
</html>
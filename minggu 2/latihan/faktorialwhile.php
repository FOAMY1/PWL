<!DOCTYPE html>
<html>
    <body>
        <?php
        ini_set('display_errors',0);
        if (isset($_REQUEST['faktorkan'])){
            $faktor = $_REQUEST['faktor'];
            $i=1;
            $k=1;
            while($i<=$faktor){
                $k=$k*$i;
                $i++;
            }
        }
        ?>
        <form>
            <table>
                <tr>
                    <td>
                        <input name="faktor"type="text" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="faktorkan" value="faktorialkan"/>
                    </td>
                </tr>
                <tr>
                    <td style="color:darkblue"><?php echo $k;?></td>
                </tr>	
            </table>
        </form>
    </body>
</html>
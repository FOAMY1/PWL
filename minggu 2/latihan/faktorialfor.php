<!DOCTYPE html>
<html>
    <body>
        <?php
        ini_set('display_errors',0);
        if (isset($_REQUEST['faktorkan'])){
            $faktor = $_REQUEST['faktor'];
            $k=1;
            for($i=1;$i<=$faktor;$i++){
                $k=$k*$i;
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
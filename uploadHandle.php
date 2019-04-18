<!DOCTYPE html>
<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: thoss
 * Date: 4/15/2019
 * Time: 10:06 PM
 */

    $rowNum = 1;
    if (($myfile = fopen($_POST["fileToUpload"], "r") or die("Exception Thrown: Unable to open file! Not a CSV!")) !== FALSE) {

        echo '<table>';
        while (($data = fgetcsv($myfile, 1000, ",")) !== FALSE) {
            $maxRowNum = count($data);
            if ($rowNum == 1) {
                echo '<thead><tr>';
            }else{
                echo '<tr>';
            }
            for ($i=0; $i < $maxRowNum; $i++) {
                if(empty($data[$i])) {
                $value = "&nbsp;";
                }else{
                $value = $data[$i];
                }
                if ($rowNum == 1) {
                    echo '<th>'.$value.'</th>';
                }else{
                    echo '<td>'.$value.'</td>';
                }
            }
            if ($rowNum == 1) {
                echo '</tr></thead><tbody>';
            }else{
                echo '</tr>';
            }
            $rowNum++;
        }

        echo '</tbody></table>';
        fclose($myfile);
    }
?>
</body>
</html>
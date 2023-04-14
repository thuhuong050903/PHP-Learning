<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc tep</title>
</head>
<body>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <?php
                $file = fopen('C:\xampp\htdocs\ltweb_php\docTep\pnv24a.txt', 'r',1);
                if(!$file)
                    {
                        echo "<br> Khong the mo duoc file nay. <br>";
                        exit;
                        
                    }
                    else{
                        echo "<p align='center class='style1'>";
                        echo "<b> </b> <br>";
                        while(!feof($file))
                            {
                                $noidung = fgets($file);
                                echo nl2br($noidung);

                            }
                            echo "<br> <b> Mo va doc file thanh cong </b>";
                            echo "</font></p>";

                    }
                fclose($file);
            ?>

        </td>
    </tr>
                </table>
</body>
</html>
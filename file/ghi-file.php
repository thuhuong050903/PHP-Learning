<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name = "form1" id="form1" action="index2.php" method="post">
    <table width="500" border="0" align="center" cellpadding="2" bgcolor="#DB95B8">
        <tr bgcolor="#BDBAE7">
            <td colspan="2" bgcolor="#CC3366"><h2 align="center" class="stylel">TẠO - GHI VÀ ĐỌC FILE VỪA TẠO</h2></td>
        </tr>
            <tr>
                <td>Tên file: </td>
                <td>
                    <label for="ten_file">
                        <input type="text" name="ten_file" id="ten_file" value="<?php echo $_POST['ten_file']?>">
                    </label>
                </td>
            </tr>
            <tr>
                <td>Nội dung: </td>
                <td>
                    <label for="noidung">
                    <textarea type="text" name="noidung" id="noidung" value="<?php echo $_POST['noidung']?>"></textarea>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">
                        <input type="submit" name="Submit" id="Submit" value="Đọc và ghi file">
                    </label>
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['ten_file']) && isset($_POST['noidung'])){
            $ten_file =$_POST['ten_file'];
            $noidung =$_POST['noidung'];
            //Ghi fle
            $file = fopen("$ten_file","w",1);
            fwrite($file,$noidung);
            echo "<p>Đã ghi file thành công</p>";
            fclose($file);
            // XUất file ra màn hình
            $file = fopen("$ten_file","r");
            echo "NỘI DUNG CỦA FILE: <br>";
            while(!feof($file)){
                $noidung = fgets($file,1000);
                echo nl2br($noidung);
                
            }echo "<br> Đọc file thành công <br>";
            fclose($file);
        }
        else{
            echo "Hãy nhập đầy đủ nội dung";
        }
    ?>
</body>
</html>

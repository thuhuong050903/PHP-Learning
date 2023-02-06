<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Hình chữ nhật</title>
</head>
<body>
     <?php
        $cdai=$_POST["dai"];
        $crong=$_POST["rong"];
        $dt = $cdai * $crong;
    ?>
    <form name="" id="forml" method="post" >
        <table width="400" border="0" align="center" cellpadding="2" cellapacing="2">
            <tr>
                <td colspan="2" align="center" > <span class="stylel">DIỆN TÍCH HÌNH CHỮ NHẬT</span></td>
            </tr>
            <tr>
                <td width="125"><span class="style4">Chiều dài: </span></td>
                <td width="261">
                    <label for="">
                        <input name="dai" id="dai" type="text" value="<?php echo $_POST["dai"];?>" >
                    </label>
                </td>
            </tr>
            <tr>
                <td><span class="style4">Chiều rộng: </span></td>
                <td>
                    <label for="">
                        <input type="text" name="rong" id="rong" value="<?php echo $_POST["rong"]; ?>" >
                    </label>
                </td>
            </tr>
            <tr>
                <td><span class="style4">Diện tích: </span></td>
                <td>
                    <label for="">
                        <input type="text"  name="dt" id="dt" value="<?php echo $dt;?>"  readonly="true" background="#FFCCCC">
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <label for="">
                        <input type="submit" name="submit" value="Tính">
                    </label>
                </td>
            </tr>
        </table>
    </form>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
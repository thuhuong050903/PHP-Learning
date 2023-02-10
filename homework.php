<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    #tinhtien{
        text-align: center;
        background-color: orange;
        font-weight: bold;
        font-size: 30px;
        width:500px;
        padding:10px;
      
    }
    table{
        background-color: orange;
        margin-left: auto;
        margin-right: auto;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

    }
    #tinh{
        margin-left: 130px;
        border-radius: 3px;
        border: none;

    }
    #cancel{
        margin-right: 150px;
        border-radius: 3px;
        border: none;

        
    }
    h1{
        color: #f53b57;
        

    }
     #cancel:hover{
        background-color: #546de5
    }
    #bill{
        margin-left: 600px;
        margin-top: 50px;
        width: 370px;
        padding-left: 20px;
        border: 1px solid black;
    
    }
   
    #tinh:hover{
        background-color: #546de5
    }
</style>
</head>
<body>
    <?php
    error_reporting(0);

    $loaiPhong = $_POST["loaiPhong"];
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]); 
    $gioThue = (floor( abs($checkout- $checkin) / (60*60)));
    $tienAn = $_POST["an"];
    $giat = $_POST["giat"];
    $anSangBuffer = $_POST["ansang"];
    $tam = $_POST["tam"];
    $dichVu = $giat + $tienAn + $tam;
    $tong = (int)$tienAn +(int) $dichVu + ((int)$loaiPhong * (int)$gioThue);

?>
<form action="" method="post">
        <table  >
            <tr class="title">
                <td id="tinhtien" colspan="2">
                    TÍNH TIỀN
                </td>
            </tr>
            <tr>
                <td>
                     LOẠI PHÒNG
                </td>
                <td>
                    <select name="loaiPhong">
                        <option value="1000">A</option>
                        <option value="500">B</option>
                        <option value="200">C</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-IN
                </td>
                <td>
                    <input type="datetime-local" name="checkin" value="">
                </td>
            </tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="datetime-local" name="checkout"  value="">
                </td>
            </tr>           
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="an" value=" ">
                </td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input  type="checkbox" name="giat" value="300 ">GIẶT LÀ 
                    <input  type="checkbox" name="ansang" value="500">ĂN SÁNG
                    <input  type="checkbox" name="tam" value="200 ">TẮM HƠI 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button id="tinh"  >Tính</button>
                    <button id="cancel">Cancel</button>
                </td>
                 
            </tr>

        
        </table>
</form >
<form method="post" id="bill">
    <h1>BILL</h1>
    <b>TypeRoom: </b>
    <input type="text" value="<?php echo $loaiPhong ?>"> <br> <br>
    <b>Rental hours:</b>
    <input type="text" value="<?php echo $gioThue ?>"> <br> <br>
    <b> Money for meals:</b>
    <input type="text" value="<?php echo $tienAn ?>"> <br> <br>
    <b> Money for service:</b>
    <input type="text" value="<?php echo $dichVu ?>"> <br> <br>
    <b>Total:</b>
    <input type="text" value="<?php echo $tong ?>"> <br> <br>
</form>
</body>
</html>
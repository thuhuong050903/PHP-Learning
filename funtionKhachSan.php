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
<title>Title</title>
</head>
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
<body>
<?php

error_reporting(0);

function tinhGio () {
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]);
    $gioThue = (floor( abs($checkout- $checkin) / (60*60)));
    return $gioThue;
}
function getLoaiPhong() {
    $loaiPhong = $_POST["loaiPhong"];
    return $loaiPhong;
}

function tienDV(){
    $tienAn = $_POST["an"];
    $giat = $_POST["giat"];
    $tam = $_POST["tam"];
    $dichVu = $giat + $tienAn + $tam;
    return $dichVu;
}

function tinhTong () {
    $tong = tienDV() +  $_POST["an"] + ($_POST["loaiPhong"]*tinhGio());
    return $tong;
}

function validTimeCheckin () {
    $checkin =  $_POST["checkin"];
    if ($checkin == null || $checkin < date('Y-m-d H:i:s')) {
        return "M???i b???n ch???n l???i";
    }
    else {
        return true;
    }
  
}

function validTimeCheckOut () {
    $checkout =  $_POST["checkout"];
    if (empty($checkout)) {
        return "M???i b???n ch???n l???i";
    }
    else {
        return true;
    }
}

function validTienAn () {
    $tienAn = $_POST["an"];
    if (empty($tienAn)) {
        return "M???i b???n nh???p ti???n ??n";
    }
    else if ($tienAn > 500000) {
        return "Kh??ch s???n b??nh d??n n??n kh??ng c?? m??n ??n ?????t v???y. M???i b???n ch???n l???i";
    }
    else if ($tienAn <30000  ) {
        return "Kh??ng c?? m??n ??n n??o r??? nh?? v???y t???i kh??ch s???n";
    }
    else {
        return true;
    }

}

function validDichVu () {
    $tienAn = $_POST["an"];
    $giat = $_POST["giat"];
    $tam = $_POST["tam"];
    if ($giat == null && $tam == null && $tienAn ==null) {
        return "M???i b???n ch???n d???ch v???";
    }
    else {
        return true;
    }
}




?>
<form action="" method="post">
        <table  >
            <tr class="title">
                <td id="tinhtien" colspan="2">
                    T??NH TI???N
                </td>
            </tr>
            <tr>
                <td>
                     LO???I PH??NG
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
                    TI???N ??N
                </td>
                <td>
                    <input type="text" name="an" value=" ">
                </td>
                
            </tr>
            <tr>
                <td>
                    D???CH V???
                    
                </td>
                <td >
                    <input  type="checkbox" name="giat" value="300 ">GI???T L?? 
                    <input  type="checkbox" name="ansang" value="500">??N S??NG
                    <input  type="checkbox" name="tam" value="200 ">T???M H??I 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button id="tinh"  >T??nh</button>
                    <button id="cancel">Cancel</button>
                </td>
                 
            </tr>

        
        </table>
</form >

<div>
    <p><?php echo validTimeCheckin () ?></p>
    <p><?php echo validTimeCheckOut () ?></p>
    <p><?php echo validTienAn () ?></p>
    <p><?php echo validDichVu () ?></p>
    
</div>

<?php
if (validTimeCheckin ()==true && validTimeCheckOut ()==true && validTienAn ()==true && validDichVu ()==true) {
    echo '<form method="post" id="bill">
    <h1>BILL</h1>
    <b>TypeRoom: </b>
    <input type="text" value="<?php echo getLoaiPhong() ?>"> <br> <br>
    <b>Rental hours:</b>
    <input type="text" value="<?php echo tinhGio() ?>"> <br> <br>
    <b> Money for meals:</b>
    <input type="text" value="<?php echo $_POST["an"] ?>"> <br> <br>
    <b> Money for service:</b>
    <input type="text" value="<?php echo tienDV() ?>"> <br> <br>
    <b>Total:</b>
    <input type="text" value="<?php echo tinhTong()?>"> <br> <br>
    </form>';
} ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
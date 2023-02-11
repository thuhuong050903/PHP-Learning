

<!DOCTYPE html>
<html>
<head>
    <title>Hóa đơn thanh toán </title>
    <style>
    #tinhtien{
        text-align: center;
        background-color: #f53b57;
        font-weight: bold;
        font-size: 30px;
      
    }
    table{
        background-color: #f78fb3;
        margin-left: auto;
        margin-right: auto;
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
        margin-left: 350px;
    
    }
   
    #tinh:hover{
        background-color: #546de5
    }

    
</style>
</head>

<body>
<?php 
error_reporting(0);
function tinhGio () {
    $checkin = strtotime( $_POST["checkin"]);
    $checkout = strtotime($_POST["checkout"]);
    $giothue= (floor( abs(strtotime($checkout)- strtotime($checkin) / (60*60*24))))*24;
    return $giothue;
}

function tinhDV () {
    $tienAn = $_POST["an"];
    $giat = $_POST["giat"];
    $anSangBuffer = $_POST["anSang"];
    $tam = $_POST["tam"];
    $dichVu = $giat + $tienAn + $tam + $anSangBuffer;
    return $dichVu;
}
function loaiPhong() {
    $loaiPhong=$_POST["loaiPhong"];
    return $loaiPhong;
}
function tienAn () {
    $tienAn=$_POST["an"];
    return $tienAn;
}
function tinhTong () {
   $tong = tienAn() + (loaiPhong() * tinhGio()) + tinhDV();
   return $tong;
}
 // 
$error = array () ;
if (is_numeric($_POST["an"])) {
      $error['an'] = "Bạn cần nhập số tiền ăn";
    }

if (empty($_POST["checkin"])) {
    $error['checkin'] = "Bạn cần chọn ngày checkin";
    }
    
if (empty($_POST["checkout"])) {
        $error['checkout'] = "Bạn cần chọn ngày checkout";
    }
    

function form_error ($label_field) {
    global $error ;
    if (isset ($error[$label_field])) {
        echo "<span style=\"color:red\">{$error[$label_field]} </span>";
    }
}
function validCheckIn ($checkin) {
    if ($checkin >= date('Y-m-d H:i:s') && $checkin != null) {
        return true;
    }
}

function validCheckOut ($checkin,$checkout) {
    if ($checkout < date('Y-m-d H:i:s') || $checkout < $checkin) {
        echo "Ngày check out phải lớn hơn ngày check in và phải ở tương lai";
    }
}

function validTienAn ($tienAn) {
    if (isset($tienAn)) {
        if ($tienAn <30000 || $tienAn >500000) {
            return "Các món ăn của khách sạn chỉ từ 30000 -> 500000";
        }
        else {
            return $tienAn;
        }
    }
    else {
        return "Bạn cần nhập tiền ăn";
    }
}
function validDichVu () {
    $tienDV=tinhDV();
    if ($tienDV!=0) {
        return $tienDV;
    }
    else return "Bạn cần chọn 1 dịch vụ để thưởng thức";
}
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
                    <input type="date" name="checkin" value="">
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php 
                    echo form_error("checkin") ;
                    if (validCheckIn($_POST["checkin"])==0) {
                        echo "Ngày ". $_POST ["checkin"]. " đã là quá khứ ";
                    }?></td></tr>
            <tr>
                <td>
                    CHECK-OUT
                </td>
                <td>
                    <input type="date" name="checkout"  value="">
                </td>
                
            </tr>      
            <tr>     
            <td></td>
                <td><?php 
                    echo form_error("checkout") ;
                    validCheckOut($_POST["checkin"],$_POST["checkout"]);
                    ?>
                    </td></tr> 
            <tr>
            <tr>
                <td>
                    TIỀN ĂN
                </td>
                <td>
                    <input type="text" name="an" value=" ">
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td><?php echo validTienAn($_POST["an"]) ?></td>
            </tr>
            <tr>
                <td>
                    DỊCH VỤ
                    
                </td>
                <td >
                    <input  type="checkbox" name="giat" value="300 ">GIẶT LÀ 
                    <input  type="checkbox" name="anSang" value="500">ĂN SÁNG
                    <input  type="checkbox" name="tam" value="200 ">TẮM HƠI 
                </td>
            </tr>
            <tr>
                <td></td> 
                <td></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button id="tinh">Tính</button>
                    <button id="cancel">Cancel</button>
                </td>
                 
            </tr>
        </table>
    </form >

    <form action=""  method="post" id="bill"  >
    <h1>BILL</h1>
        <b>TypeRoom: </b>  
            <input type="text" value="<?php echo $loaiPhong ?>"> <br> <br>
        <b>Rental hours:</b>
            <input type="text" value="<?php echo $gioThue?>"> <br> <br>
        <b> Money for meals:</b>
            <input type="text" value="<?php echo $tienAn ?>"> <br> <br>
        <b> Money for service:</b>
             <input type="text" value="<?php echo $dichVu ?>"> <br> <br>
        <b>Total:</b>
            <input type="text" value="<?php echo $tong?>"> <br> <br>
    </form>
</body>
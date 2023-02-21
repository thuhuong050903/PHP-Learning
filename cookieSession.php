<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<title>Title</title>
<style>
    .form {
        width: 30%;
        margin: auto;
        padding: auto;
    }
    table {
        width:400px;
        background-color: #D7E9D7;
    }
    table tr,td {
        padding: 10px;
    }
    .center {
        background-color: #76BB68;
        font-weight: bold;
        font-size: 20px;
        text-align: center;
    }

    .center button {
        background-color: #FFBF00;
        font-weight: bold;
        font-size: 20px;
    }
    table .center {
        margin: auto;
    }
</style>
</head>
<body>
    <?php 
        session_start();
        $flag=0;
        if (!empty($_POST['name']) && !empty ($_POST['mail']) && !empty($_POST['add']))
        {
            $inform =$_POST['name']. " - ". $_POST['mail']." - " .$_POST['add'];
            setcookie("khach_hang",$inform, time() +3600);
            $flag=1;
        }
    ?>

    <form action="" method="post" class="form">
        <table>
            <tr class="center">
                <td colspan="2">
                    Thông tin đăng nhập
                </td>
            </tr>

            <tr class="">
                <td>
                    Họ và tên: 
                </td>
                <td>
                    <input type="text" name="name" id="name" value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Email: 
                </td>
                <td>
                    <input type="text" name="mail" id="mail" value="<?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    Địa chỉ: 
                </td>
                <td>
                    <input type="text" name="add" id="add" value="<?php if(isset($_POST['add']))  echo $_POST['add']; ?>">
                </td>
            </tr>

            <tr class="center">
                <td colspan="2">
                    <button type="submit">Xác nhận</button>
                </td>
            </tr>
        </table>
    </form>

        
    <div>
        <?php 
            if ($flag==1) {
                echo "<table><tr class='center'><td>";
                echo "<font color='#ffffff'>Thông tin khách hàng: </br>";
                echo $_COOKIE["khach_hang"]."<br>";
                echo "<a href='cookies_doc.php' >Click here! </a>";
                echo "</td></tr></table>";
            }
        ?>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
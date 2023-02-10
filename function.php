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
<title>Ví dụ 3</title>
<style>
table {
    width: 500px;
    margin:auto;
    background-color: coral;
}
</style>
</head>
<body>
    <form method="post" action="">
        <table>
            <tr> 
                <th></th>
                <th>Chuyển đổi đơn vị</th>
                <th></th>
            </tr>
            <tr>
                <td>Kilometers</td>
                <td>
                    <input type="text" name="kilo" value="<?php echo $_POST["kilo"] ?>">
                </td>
            </tr>
            <br>
            <tr>
                <td>Kết quả</td>
                <td><?php echo kilometers_to_miles($_POST["kilo"]) ?></td>
            </tr>
            <br>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
    </form>
<?php
error_reporting(0);
function kilometers_to_miles ($kilometers = 0) {
    $miles =0.62;
    return $kilometers*$miles;
}


?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Title</title>
</head>

<style>
    .title {
        color:black;
        background-color: aquamarine;
        width: 40%;
        text-align: center;
        margin: auto;
        font-size: 24px;
        font-weight: bold;
    }
    .ket_qua {
        color:red;
        display: absolute;
        width: 320px;
        float: right;
        padding-top:50px;
        margin-right: 20%;
        font-size: 20px;
        font-weight: bold;
    }
    .content-img1 {
        display: absolute;
        margin-top:3%;
        margin-left:15%;
       
    }
    .content-img2 {
        margin-top:3%;
        margin-left:15%;
        width:70%;
        height: 70%;
       
    }
</style>
<body>
    
    <div class="title">
        
        Kết quả sau khi nhấn <a > click here! </a> của trang session.
    </div>

    <?php 
        echo '<div class="ket_qua">Xin chào '. $_COOKIE["khach_hang"].'<br>';
        echo '<a href="cookieSession.php"> Click để quay về trang đăng nhập </a>';
        echo '</div>';
        echo '<img class="content-img1" src="https://img.meta.com.vn/Data/image/2020/12/07/ong-gia-noel-cuoi-may-con-tuan-loc-al.jpg">';
        echo '<img class="content-img2" src="https://cdn.tgdd.vn/Files/2022/11/05/1484413/ong-gia-noel-cuoi-may-con-tuan-loc-ten-cua-chung-la-gi-202211050908100309.jpg">';

    ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
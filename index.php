<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Phone</title>
    <style>
        header {
            display: flex;
            justify-content: space-around;
        }
        .searchBar ul{
            padding-top: 20px;
            display: flex;
            list-style-type: none;
            justify-content: space-around;
        }
        .logo img {
            width:250px;
            height: 150px;
        }
        .card-group{
            grid: 25% 25% 25% 25%;
            display: flex;
            gap: 10px;
    
        }
        .card{
            width: 250px;
            height: 500px;
        }
        #phone_img img {
            width: 210px;
            height: 260px;
        }
        .star {
            color: yellow;
        }
        .title{
            margin-top: 20px;
            margin-bottom: 20px;
            text-align: center;
            color:#ffff;
            font-size: 34px;
            background-color:cornflowerblue;
            border-radius: 50px;
        }
        #phone_price{
            color: red;
        }
        #plus_button{
        border-radius: 100px;
        }
    </style>
</head>
<body>
    <?php 
    $list_phones = 
    array (
    'Sản phẩm nổi bật' => array(
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/260546/oppo-reno8-pro-thumb-xanh-1-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '1.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/240259/iPhone-14-thumb-do-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '4.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/249945/oppo-a16k-thumb1-600x600-1-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '8.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
        ),
      
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '2.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
             ),
  
            ),


    'Sản phẩm mới nhất' => array(
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '1.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
           ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/249945/oppo-a16k-thumb1-600x600-1-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '6.300.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-vang-thumb-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '1.700.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        array(
            'img' => 'https://cdn.tgdd.vn/Products/Images/42/249945/oppo-a16k-thumb1-600x600-1-600x600.jpg',
            'name' => 'Oppo Reno8',
            'price' => '1.900.000đ',
            'feedback' => array(
                                'quatity_star' => 4,
                                'quatity_feedback' => "9999 đánh giá", ),
            ),
        
        ));
?>
<header>
    <div class="logo">
        <img src="https://img.freepik.com/premium-vector/smart-phone-store-logo-vector_8169-118.jpg" alt="logo">
    </div>
    <div class="searchBar">
        <div>
            <input type="text" name="" value="Nhập từ khoá tìm kiếm" ><button type=""><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm</button>
        </div>
        <div>
            <ul>
                Từ khoá: 
                <li>Samsung  </li>
                <li>iPhone  </li>
                <li>Huawei  </li>
                <li>Oppo  </li>
                <li>Mobi  </li>
            </ul>
        </div>
    </div>
    <div>
        <button type=""><i class="fa-solid fa-user"></i></button><span>Tài khoản</span>
    </div>
</header>
<div id="content">
    <?php 
    foreach ($list_phones as $key => $value) { ?>
        <div class="title"> 
            <?php echo $key ?>
    </div>
        <div class="card-group">
            
                <?php 
                foreach ( $value as $k => $v ) {
                    ?>
                    <div class="card" id="card-item">
                    <div id="phone_img" class="card-img-top"><img src="<?php echo $v['img'] ?>"> </div>
                    <div class="card-body">
                        <div id="phone_name" class="card-title"><?php echo $v['name'] ?> </div>
                        <div id="phone_price" ><?php echo $v['price'] ?></div>
                        <div id="phone_feedback">
                            <?php 
                                $quatity_star= $v['feedback']['quatity_star'];
                                for ($i=0; $i< $quatity_star; $i++) {
                                    echo '<span class="star"><i class="fa-sharp fa-solid fa-star"></i></span>';};
                            
                            echo '<span>  ' .$v['feedback']['quatity_feedback']. '</span>';
                            ?>
                        </div>
                        <div id="plus_button"><button>+</button></div>
                    </div>
                    </div>
            <?php }
                ?>
            
        </div>
    <?php } ?>
</div>
</body>
</html>

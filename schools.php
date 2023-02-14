<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

<title>Title</title>
<style>
    #content {
        background-color: bisque;
        width:600px;
        height: 600px;
        margin: auto;
        padding-top: 50px;
    }
    .list_schools {
        margin:auto;
        background-color: coral;
        width: 500px;
        border: 1px solid black;
    }
    .title {
        color:crimson;
        text-align: center;
    }

</style>
</head>
<body>
<?php 
$schools =array( 
    'Students' => array(
        'SV01'=> array(
            'name' => 'Phan Văn Cường',
            'birth' => '10/11/1998',
            'gender' => 'Nam'
        ),
        'SV02'=> array(
            'name' => 'Nguyễn Văn Hoàng',
            'birth' => '10/09/2000',
            'gender' => 'Nam'
        ),
        'SV03'=> array(
            'name' => 'Trần Thị Hằng',
            'birth' => '10/12/2002',
            'gender' => 'Nữ'
        )

        ),
    'Teachers' => array(
        'GV01' => array(
            'name' => 'Trần Thiên Thành',
            'birth' => '10/06/1980',
            'gender' => 'Nam'
        ),
        'GV02' => array(
            'name' => 'Nguyễn Văn Hiếu',
            'birth' => '01/06/1981',
            'gender' => 'Nam'
        ),
        'GV03' => array(
            'name' => 'Nguyễn Thị Lệ',
            'birth' => '13/07/1985',
            'gender' => 'Nữ'
        )

    )
)
?>

<div id="content" >
    <?php 
    foreach ($schools as $key => $value) {
        ?>
        <h2 class="title"><?php echo $key; ?></h2>
        <table border=1 class="list_schools">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Gender</th>
            </tr>
            <?php foreach($value as $k => $v) {
                 ?>
                <tr>
                    <td><?php echo $k; ?></td>
                    <td><?php echo $v['name']; ?></td>
                    <td><?php echo $v['birth']; ?></td>
                    <td><?php echo $v['gender']; ?></td>
                </tr>
           <?php } 
            ?>
        </table>
    <?php } 
    ?> 
</div>}

</html>

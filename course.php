<?php 
$course = array( 
    'FRONT-END' => array(
                    'title' => 'Khoá học JavaScript',
                    'fee' => 1200000
    ),
    'PHP-MySQL' => array(
                    'title' => 'Khoá học PHP từ cơ bản đến nâng cao',
                    'fee' => 1600000
    )
    );
foreach ($course as $key => $value) {
    echo "<div style='font-weight:bold;color:red'>{$key}</div>";
    echo "<div>Tên khoá học: ". $value['title']. "</div>";
    echo "<div>Học phí: ". $value['fee'] . "</div><br>";
}
?>
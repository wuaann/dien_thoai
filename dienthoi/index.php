<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
    <title>dienthoai</title>
</head>

<body><?php
include 'data.php';
$list_product = $data;
//echo $list_product[1]['status'];
$noi_bat = '';
$moi = '';


for ($i = 0; $i < count($list_product); $i++) {
    if ($list_product[$i]['status'] == '1'){
        $noi_bat = $noi_bat.'<div class="card">';
        $noi_bat = $noi_bat.'<div class="card-top">';
        $noi_bat = $noi_bat.'<img src="'. $list_product[$i]['img'] .'" alt="">';
        $noi_bat = $noi_bat.'<p class="des">'. $list_product[$i]['des'] .'</p></div>';
        $noi_bat = $noi_bat.'<div class="card-body">';
        $noi_bat = $noi_bat.'<p class="product-name"> '. $list_product[$i]['name'] .'</p>';
        $noi_bat = $noi_bat.'<p class="product-price">'. $list_product[$i]['price'] .'</p></div></div>';
    }
    else{
        $moi = $moi.'<div class="card">';
        $moi = $moi.'<div class="card-top">';
        $moi = $moi.'<img src="'. $list_product[$i]['img'] .'" alt="">';
        $moi = $moi.'<p class="des">'. $list_product[$i]['des'] .'</p></div>';
        $moi = $moi.'<div class="card-body">';
        $moi = $moi.'<p class="product-name"> '. $list_product[$i]['name'] .'</p>';
        $moi = $moi.'<p class="product-price">'. $list_product[$i]['price'] .'</p></div></div>';
    }
}



$arr=['aaa','bbb'];
$name = 'aa';
function them($mang, $name){
    if (in_array($name , $mang)){
        echo 'co';
    }
    else{
        echo '0';
        array_push($mang, $name);
        echo var_dump($mang);
    }
}


?>

<div class="container">
    <p class="text"><i class="fa-solid fa-star"></i>Noi Bat Nhat<i class="fa-solid fa-star"></i></p>
    <div class="noibat">
        <?php echo $noi_bat?>

    </div>
    <p class="text1"><i class="fa-solid fa-star"></i>San Pham moi<i class="fa-solid fa-star"></i></p>
    <div class="spmoi">
        <?php echo $moi?>

    </div>
    <?php echo them($arr,$name)?>
</div>
</body>
</html>
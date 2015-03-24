<!DOCTYPE html>
<html>
<head>
  <title>Mon Vivaldi</title>
  <style type="text/css">
    @font-face {
      font-family: 'mon_vivaldiregular';
      src: url('fonts/monvivaldi-webfont.eot');
      src: url('fonts/monvivaldi-webfont.eot?#iefix') format('embedded-opentype'),
           url('fonts/monvivaldi-webfont.woff2') format('woff2'),
           url('fonts/monvivaldi-webfont.woff') format('woff'),
           url('fonts/monvivaldi-webfont.ttf') format('truetype'),
           url('fonts/monvivaldi-webfont.svg#mon_vivaldiregular') format('svg');
      font-weight: normal;
      font-style: normal;
      
  }
  body{
    font-family: 'mon_vivaldiregular';
    color: #222;
  }
  </style>
  
  
</head>

<body>

<?php
  function monvivaldi_Convert($string){
  	$array1 = array('А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я','Ё','ё','Ү','ү','Ө','ө');
  	$array2 = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','×','Ø','Ù','Ú','Û','Ü','Ý','Þ','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ð','ñ','ò','ó','ô','õ','ö','÷','ø','ù','ú','û','ü','ý','þ','ÿ','¨','¸','¯','¿','ª','º');
  	return str_replace($array1, $array2, $string);
  }

?>

  <h1><?php echo monvivaldi_Convert('Аргалын утаа бургилсан малчны гэрт төрсөн би');?></h1>
  <h2><?php echo monvivaldi_Convert('Атар хээр нутгаа Өлгий минь гэж боддог');?></h2>
  <h3><?php echo monvivaldi_Convert('Цэнхэр манан суунагласан Алсын барааг ширтээд');?></h3>
  <h4><?php echo monvivaldi_Convert('Цэлгэр сайхан нутгаа Сэтгэл бахдан харахад');?></h4>
  <h5><?php echo monvivaldi_Convert('Үлээж байгаа салхи нь Үнсээд ч байгаа юм шиг');?></h5>
  <h6><?php echo monvivaldi_Convert('Өршөөлт ээжийн минь гар Илээд ч байгаа юм шиг');?></h6>
  <h6><?php echo monvivaldi_Convert('Энэрэнгүй сайхан санагдахад Элэг зүрх минь догдолж');?></h6>
  <h6><?php echo monvivaldi_Convert('Хосгүй баярын нулимс Хоёр нүдийг минь бүрхдэг.');?></h6>
  

</body>

</html>

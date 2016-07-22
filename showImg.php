<?

$id = $_GET["id"];
$image_path="./photo/".$id;
//echo $image_path;
$openfile = fopen($image_path, 'r');
$forasp_cn = fread($openfile, filesize($image_path));
header("Content-type: image/* ");
header("Location:$image_path");  

echo $forasp_cn;
fclose($openfile)
?>
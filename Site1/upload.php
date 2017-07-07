

<?

$ran= rand(0000, 9999);
$put='images/';
if (isset($_FILES['filename']['name']) && ($_FILES['filename'] ['name'] != '')){
  $name = $_FILES["filename"]["name"];
  move_uploaded_file($_FILES["filename"] ["tmp_name"], $put.$ran.$name);
  $namefile=$ran.$name;
  echo "Vivod";
  echo "<img src='images/".$namefile."/>";
}

else {
  echo "False";
}

?>

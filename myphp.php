<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Logical Operators</title>
</head>
<body>
<?php
$d = date("Fri");
if($d == "Fri"){
    echo "Have a nice weekend!";
} elseif($d == "Sun"){
    echo "Have a nice Sunday!";
} else{
    echo "Have a nice day!";
}
//Test
?>

</body>
</html>
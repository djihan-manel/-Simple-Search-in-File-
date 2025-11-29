<?php
$result = "";
if(isset($_POST["search"])){
    $key = trim($_POST["key"]);
    $data = file_exists("data.txt") ? file("data.txt") : [];

    foreach($data as $line){
        if(stripos($line, $key) !== false){
            $result .= $line."<br>";
        }
    }
    if($result == "") $result = "لا يوجد نتائج";
}
?>
<!DOCTYPE html>
<html>
<body>
<h2>البحث داخل ملف</h2>

<form method="post">
    <input type="text" name="key" placeholder="اكتب كلمة للبحث" required>
    <button name="search">بحث</button>
</form>

<p><?= $result ?></p>
</body>
</html>

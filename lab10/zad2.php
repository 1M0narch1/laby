<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        $file = fopen("text.txt", 'r');
        $text = fread($file, filesize("text.txt"));
        fclose($file);
        echo "Исходный текст<br>" . $text . "<br>";
        $arr = explode(' ', $text);
        $count1 = strlen($arr[0]);
        for ($i = 0; $i < count($arr); $i++) { 
            $arr[$i] = "'" . $arr[$i] . "'";
        }
        echo "Измененный текст<br>" . join(" ", $arr) . "<br>";
        echo "Количество букв во втором слове - " . $count1 . "<br>";
    ?>
</body>

</html>

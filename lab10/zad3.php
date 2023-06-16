<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
        echo "<table style=\"border: 1px solid black;\">\n<tr>\n<td align=";
        echo $_GET["align"];
        echo " valign=";
        echo $_GET["valign"];
        echo " style=\"width: 100px; height: 100px;\">Hey</td>\n</tr>\n</table>";
    ?>
    <form action="/lab10-3.php" method="GET">
        <div>
            <input type="radio" value="left" name="align" checked>
            <label for="left">left</label>
        </div>
        <div>
            <input type="radio" value="center" name="align">
            <label for="center">center</label>
        </div>
        <div>
            <input type="radio" value="right" name="align">
            <label for="right">right</label>
        </div>
        <div>
            <input type="checkbox" value="top" name="valign" checked>
            <label for="top">top</label>
        </div>
        <div>
            <input type="checkbox" value="center" name="valign">
            <label for="center">center</label>
        </div>
        <div>
            <input type="checkbox" value="bottom" name="valign">
            <label for="bottom">bottom</label>
        </div>
        <input name="button" type="submit" value="Отправить">
    </form>
</body>

</html>

<?php
include("db_info.php");
$sql = "SELECT * FROM `peopleinfo` WHERE `id` ='$_GET[id]'";
$result = mysqli_query($link, $sql);
$record = mysqli_fetch_array($result);
?>
<html>

<head>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            font-family: DFKai-SB;
            font-size: 22px;
        }

        input,
        select,
        textarea {
            border-radius: 25px;
            border: 2px solid #73AD21;
            padding: 20px;
        }

        h1 {
            font-size: 60px;
            color: rgb(51, 153, 102);
            letter-spacing: 10px;
        }

        div {
            position: absolute;
            left: 80px;
            top: 0px
        }

        a:link {
            color: rgb(0, 0, 204);
        }

        a:visited {
            color: rgb(204, 0, 255);
        }

        a:hover {
            color: rgb(255, 255, 255);
            background: rgb(255, 102, 51);
        }
    </style>
</head>

<body text="#0033FF" background="images/cat.jpg">
    <img src="images/sti.png" style="float:right;width:300px;height:300px;">
    <div>
        <h1>新增人員資料</h1>
        <p>
        <h3>
            <form method="POST" action="class.php" name="new">
                <label for="fname">姓名:</label><br>
                <input type="text" name="name" value='<?php echo $record[name]; ?>'>
                <p>
                    <label for="fname">身分證:</label><br>
                    <input type="text" name="id" value='<?php echo $record[id]; ?>'>
                <p>
                    <label for="fname">班級別:</label><br>
                    <select name="inc">
                        <option value="資一甲">資一甲</option>
                        <option value="資二甲">資二甲</option>
                        <option value="資三甲">資三甲</option>
                        <option value="資四甲">資四甲</option>
                    </select>
                <p>
                    <label for="fname">出生日期:</label><br>
                    <input class="date" type="date" name="birthday" value='<?php echo $record[birthday]; ?>'>
                <p>
                    性別:
                    <input type="radio" name="sex" value="男生">男生
                    <input type="radio" name="sex" value="女生">女生
                <p>
                    聯絡地址:<br>
                    <textarea name="address" cols="50" rows="4"><?php echo $record[address]; ?>
        </textarea>
                <p>
                    <input type="submit" name="enter" value="新增">
                    <input type="reset" value="清除表單">
                    <a class="back" href=index.html>回首頁</a><br>
            </form>
        </h3>
    </div>
</body>

</html>
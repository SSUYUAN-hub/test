<?php
?>
<html>

<head>
    <title>新增人員資料</title>
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
            border: 2px solid rgb(255, 51, 204);
            padding: 20px;
            \\width: 100%;
            \\padding: 0 10px;
            \\color: #333;
            \\box-sizing: border-box;
            cursor: pointer;
            \\word-break: break-all;
            font-size: 15px;
        }

        h1 {
            font-size: 50px;
            color: rgb(0, 51, 255);
            letter-spacing: 10px;
        }

        .one {
            position: absolute;
            left: 80px;
            top: 0px
        }

        \\fieldset{
        width: 50%;
        font-size: 30px;
        border: none;
        }

        .push {
            display: flex;
        }

        .push input {
            margin-top: -20px;
            width: 20px;
        }

        \\.over{
        margin-top: 24px;
        display: grid;
        grid-template-columns: auto auto;
        gap: 5px;
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
    <div class="one">
        <h1>新增人員資料</h1>
        <p>
        <h3>
            <form method="POST" action="new_db.php" name="new">
                <label for="fname">姓名:</label><br>
                <input type="text" name="name">
                <p>
                    <label for="fname">身分證:</label><br>
                    <input type="text" name="id">
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
                    <input class="date" type="date" name="birthday">
                <p>
                <div class="push">性別:
                    <input type="radio" name="sex" value="男生">男生
                    <input type="radio" name="sex" value="女生">女生
                    <p>
                </div>
                聯絡地址:<br>
                <textarea name="address" cols="50" rows="3">
        </textarea>
                <p>
                <div class="over">
                    <input type="submit" name="enter" value="新增">
                    <input type="reset" value="清除表單">
                    <a class="back" href=index.html>回首頁</a><br>
                </div>
            </form>
        </h3>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <img src="diblog_logo.jpg" class=logo alt="ロゴ">

        <div class=black>
            <p class=top>トップ</p>
            <ul>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
            </ul>
            <p class=another>その他</p>
        </div>

    </header>

    <main>
        

        <div class=left>
            <h2 class=program>プログラミングに役立つ掲示板</h2>

            <form method="post" action="insert.php">
                <h1>入力フォーム</h1>
                <div>
                    <label>ハンドルネーム</label><br>
                    <input type="text" class=handlename size="35" name="handlename">
                </div>

                <div>
                    <label>タイトル</label><br>
                    <input type="text" class=title size="35" name="title">
                </div>

                <div>
                    <label>コメント</label><br>
                    <textarea cols="55" row="30" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" class="botan" value="投稿する">
                </div>
            </form>

            <!-- <div class=kiji> -->
                <!-- <h3>タイトル</h3> -->
                <!-- <div class=contents> -->
                    <!-- 記事の中身。記事の中身。記事の中身。 -->
                <!-- </div> -->

                <!-- <div class=handlename2>posted by 通りすがり</div> -->
            <!-- </div> -->

            <?php
            mb_internal_encoding("utf8");
            $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
            $stmt = $pdo -> query("select * from diworks_keijiban");

            // while ($row = $stmt -> fetch()) {
                // echo $row['handlename'];
                // echo $row['title'];
                // echo $row['comments'];
            // }
            while ($row = $stmt -> fetch()) {

                echo "<div class=kiji>";
                        echo "<div class=title2><h3>".$row['title']."</h3></div>";
                        echo "<div class=contents>".$row['comments']."</div>";
                        echo "<div class=handlename2>posted by".$row['handlename']. "</div>";
                echo "</div>";
            }
            ?>
        </div>

        <div class=right>
            <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメの本</li>
                <li>PHP  Myadminの使い方</li>
                <li>いま人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>

            <h3>オススメリンク</h3>
            <ul>
                <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Braketsのダウンロード</li>
            </ul>

            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
        

    </main>

    <footer>
        <div class=under>Copyright D.I.Works D.I.blog is the one which provides A to Z about programming</div>
    </footer>

    
</body>
</html>
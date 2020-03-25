<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/all.css">
    <title>送信完了</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png">

</head>
<body>

    
<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "yumiken.main@outlook.jp"; //Gmailはphpのmail()を受け付けないので一旦outlook.jpに送ってそこからGmailに転送する。
    //$mailto = "taiga.k-25@keio.jp";
    $headers = "From: "."yumiken.com";
    $txt = "<< ".$name." さんからウェブサイトのお問い合わせフォームよりご連絡がありました。>>"."\n\n".$message."\n\n"."<<".$mailFrom."よりご返信ください。>>";

    mail($mailto,$subject,$txt,$headers);
    //header("Location: contact.php?mailsent");

    $sent = 1;
}

?>

<menu>
<div id="pc-nav">
      <div class="topnav">
        <div class="logo"><img src="img/logo.png" class="logo-image" /></div>
        <a href="index.html">ホーム</a>
        <a href="about.html">紹介</a>
        <a href="yotei.html">予定</a>
        <a href="recruitment.html">新歓情報</a>
        <a href="join.html">入部</a>
        <a href="faq.html">よくある質問</a>
        <a href="contact.php">お問い合わせ</a>
      </div> 
    </div>
        <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span><i id="ham" class="fas fa-bars"></i></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
            <ul>
                <div class="logo"><img src="img/logo.png" class="logo-image" /></div>
                <a href="index.html"><li>ホーム</li></a>
                <a href="about.html"><li>紹介</li></a>
                <a href="yotei.html"><li>予定</li></a>
                <a href="join.html"><li>入部</li></a>
                <a href="faq.html"><li>よくある質問</li></a>
                <a href="recruitment.html"><li>新歓情報</li></a>
                <a href="contact.php"><li>お問い合わせ</li></a>
              </ul>
              <div class="contacts">
                <a href="mailto: yumiken.main@gmail.com" class="mail"
                  ><i class="far fa-envelope"></i
                ></a>
                <a href="https://twitter.com/Yumiken_Main" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/yumiken_main/" class="instagram"><i class="fab fa-instagram"></i></a>
              </div>
        </div>
        </div>
       
    </menu>


    <div class="filler"></div>
    <main>
    <h1>CONTACT</h1>
    <hr>
    <h2>送信完了</h2>
    <div style="text-align:left;margin:10%;">
    <p style="text-align:center;" >以下の内容で送信されました。</p> <br>
    <p class="smallt" style="color:#a4a4a4">お名前:</p> <?php echo $name?><br>
    <p class="smallt" style="color:#a4a4a4">メールアドレス:</p> <?php echo $mailFrom?><br>
    <p class="smallt" style="color:#a4a4a4">ご用件:</p> <?php echo $subject?><br>
    <p class="smallt" style="color:#a4a4a4">お問い合わせ内容:</p> <?php echo $message?><br>
    </div>
    <br>
    <a href="index.html" class="link-btn">トップページに戻る</a>
    
<footer>
  <p class="smallt">CONTACTS</p>

  <a href="mailto: yumiken.main@gmail.com" class="mail"
    ><i class="far fa-envelope"></i
  ></a>

  <a href="https://twitter.com/Yumiken_Main" class="twitter"><i class="fab fa-twitter"></i></a>

  <a href="https://www.instagram.com/yumiken_main/" class="instagram"><i class="fab fa-instagram"></i></a>
</footer>
</body>
</html>

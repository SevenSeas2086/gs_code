<?php
function h($value){
  return htmlspecialchars($value,ENT_QUOTES);
}


$flg=0;
$name = $_POST["name"];
$mail = $_POST["mail"];
$st = $name.",".$mail; 
//File書き込み
//課題は名前とメールの変数をカンマ区切りの文字列にしてファイルに書き込めるようにする。
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $st."\r\n");//JSなどではつなげるとき⁺だっだがphpでは.を使う,\r\nは改行
fclose($file);//↑表示(ヤマザキ,メールアドレス)

// if($name ==""){
//  $flg=1;
//  $name = "未入力です";
 
// }
// if($mail ==""){
//  $flg=1;
//  $mail = "未入力です";
// }


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo h($name); ?>
EMAIL：<?php echo h($mail); ?>
<?php 
 if($flg == 0){
 ?>
  <button>登録</button>
  <?php
  }
  ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>
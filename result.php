<?php 
$number = $_POST['number'];
$rand = rand(1, 5); 
function judgement($number,$rand){
  switch($number){
    case 1:
      switch($rand){
        case 1:
          return "引き分け";
          break;
        case 2:
          return "僕の勝ち";
          break;
        case 3:
          return "僕の勝ち";
          break;
        case 4:
          return "僕の勝ち";
          break;
        case 5:
          return "あなたの勝ち";
          break;}
    case 2:
      switch($rand){
        case 1:
          return "あなたの勝ち";
          break;
        case 2:
          return "引き分け";
          break;
        case 3:
          return "僕の勝ち";
          break;
        case 4:
          return "僕の勝ち";
          break;
        case 5:
          return "僕の勝ち";
          break;}
      case 3:
        switch($rand){
          case 1:
            return "あなたの勝ち";
            break;
          case 2:
            return "あなたの勝ち";
            break;
          case 3:
            return "引き分け";
            break;
          case 4:
            return "僕の勝ち";
            break;
          case 5:
            return "僕の勝ち";
            break;}
        case 4:
          switch($rand){
            case 1:
              return "あなたの勝ち";
              break;
            case 2:
              return "あなたの勝ち";
              break;
            case 3:
              return "あなたの勝ち";
              break;
            case 4:
              return "引き分け";
              break;
            case 5:
              return "僕の勝ち";
              break;
            }
          case 5:
            switch($rand){
              case 1:
                return "僕の勝ち";
                break;
              case 2:
                return "あなたの勝ち";
                break;
              case 3:
                return "あなたの勝ち";
                break;
              case 4:
                return "あなたの勝ち";
                break;
              case 5:
                return "引き分け";
                break;}
                break;
            default:
                break;
        }}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>大きい数字ゲーム</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <?php $win = judgement($number,$rand)?>
    <h2>僕は<?php echo $rand?>を選びました</h2>
    <h2>あなたは<?php echo $number?>を選びました</h2>
    <h2>結果は<?php echo $win ?>です！！</h2>
    <a href="index.php">もう一度遊ぶ</a>
</body>
</html>

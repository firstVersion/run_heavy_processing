<?php

//文字列を連結するのに10秒かかる関数
function mettya_jikankakaru(){
  $str = "";
  //1秒ごとに文字列を連結する
  for($i=0; $i<10; $i++) {
    echo $i."\n";
    $str .= $i.",";
    sleep(1);
  }
  //連結した文字列をファイルとして保存する．
  file_put_contents('output.txt',$str);
  echo "end\n";
}

mettya_jikankakaru();
?>

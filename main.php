<?php
echo "start heavy processing.\n";

//phpコマンドをバックグランドで実行，標準出力は/dev/nullへ飛ばす．
exec('nohup php mettya_jikankakaru.php > /dev/null&');

echo "response\n";
?>

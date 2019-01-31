<?php
$a = 10;
$str = <<<EOT
$a
EOT;
$str1 = <<<'EOD'
$a
EOD;
echo $str;
echo $str1;
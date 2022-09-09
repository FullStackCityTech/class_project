<?php

echo crypt('my password', 'salt'); //salt

//register, login, update

echo $hash = hash('sha512', '99990000'); //algo, password

echo "    ".strlen($hash);
?>
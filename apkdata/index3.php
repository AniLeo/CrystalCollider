<?php

// TODO: Temporary debug code
function log_message(string $message) : void
{
  file_put_contents(__DIR__."/../debug.log", $message, FILE_APPEND | LOCK_EX);
}

$timestamp = time();
$str_get = (string) var_export($_GET, true);
$str_post = (string) var_export($_POST, true);

log_message("{$timestamp}: New request".PHP_EOL);
log_message("GET:{$str_get}".PHP_EOL);
log_message("POST:{$str_post}".PHP_EOL);


// TODO: Handle player registration
// TODO: Return leaderboards
echo '{"ok":"true", "count":"0", "data":{"player_id":"1"}}';

?>

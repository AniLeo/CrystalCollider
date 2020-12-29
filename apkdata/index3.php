<?php

// TODO: Temporary debug code
function log_message(string $message) : void
{
  file_put_contents(__DIR__."/../debug.log", $message.PHP_EOL, FILE_APPEND | LOCK_EX);
}

$timestamp = time();
$str_get = (string) var_export($_GET, true);
$str_post = (string) var_export($_POST, true);

log_message("{$timestamp}: New request");
log_message("GET:{$str_get}");
log_message("POST:{$str_post}");

// TODO: Handle player registration
// TODO: Return leaderboards

// getUserScore
// {"player_id":2,"apk":"Collider1","data":{"relative":1,"limit":20,"page":0,"offset":0,"player_score":0},"hash":"39f3833df667a2c16006be6df2e15b4ff234c55cbb5e91fb0cf69e8d71e3cd10","call":"getUserScore"}

// getScoresToPass
// {"player_id":2,"apk":"Collider1","data":{"relative":0,"limit":100,"page":0,"offset":0},"hash":"c3dbcfcfe1b1782be7574300108eb9552836c6c2384ffa5ab0541c6f154dd9d9","call":"getScoresToPass"}

$request = json_decode(array_key_first($_POST), true);

$apk         = $request["apk"];                 // "Collider1"
$player_name = $request["data"]["player_name"]; // string username
$add_data    = $request["data"]["add_data"];    // string flags
$hash        = $request["hash"];                // string hash
$call        = $request["call"];                // string ("newUser", "getUserScore", "getScoresToPass")

if ($call == "newUser")
{
  $response = array(
    "ok"    => 1,
    "count" => 0,
    "data"  => array(
      "player_id" => "2"
    )
  );
}
else
{
  // Unimplemented call
  log_message("TODO: {$call}");

  $response = array(
    "ok" => 0
  );
}

header('Content-Type: application/json');
echo json_encode($response, JSON_PRETTY_PRINT);

?>

<?php

int_set('session.use_only_cookies', 1);
int_set('session.use_strict_mode', 1);

session_set_cookie_params([
  'lifetime' => 1800,
  'domain' => 'localhost',
  'path' => '/',
  'secure' => true,
  'httponly'=> true,
]);

if (!isset($_SESSION["last_regenerate"])) {
  regenerate_session_id();
} else {
  $intervel = 60 * 30;
  if (time() - $_SESSION["last_regenerate"] >= $intervel) {
    regenerate_session_id();
  }
}

function regenerate_session_id(){
  session_regenerate_id();
  $_SESSION["last_regenerate"] = time();

}
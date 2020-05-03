<?php

$digit_pressed = $_REQUEST['Digits'];

if ($digit_pressed == '1') {
  $ability = "1";
} else {
  $ability = "3";
}

header("Content-Type: application/xml; charset=utf-8");

?>

<Response>
  <Enqueue workflowSid="WW3b339c5b67dc05815ce5d632c0c48dca">
    <Task timeout="50">{"ability": "<?= $ability ?>"}</Task>
  </Enqueue>
</Response>
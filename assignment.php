<?php
$ACavailable = "WAde30a670713abcd7c83b04a89a653b10";
$ACoffline = "WA507de4de198cb89293ecca10f4964a73";
$assignment_instruction = [
  'instruction' => 'dequeue',
  // 'instruction' => 'call',
  'post_work_activity_sid' => $ACavailable,
  'from' => '+17786558568',
  'timeout' => '15',
  'status_callback_url' => true ? 'http://twilio.autowebinar.online/call-fallback.php' : 'https://20e20c90.ngrok.io/Twilio/call-fallback.php'
];

header('Content-Type: application/json');
echo json_encode($assignment_instruction);
<?php
require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "AC5e755be5db90ced26fe31d0c2664007a";
$token  = "b87d33c0afead1870444b1a6bdd3bd3d";
$workspace = "WS527041efe321ba7b088de5f39d9ffb12";

$twilio = new Client($sid, $token);
$callSid = $_GET["TaskCallSid"];
$callStatus = $_POST["CallStatus"];
$taskSid = $_GET["TaskSid"];

if($callStatus == "no-answer"){
    $call = $twilio->calls($callSid)
                ->update(array(
                                "method" => "POST",
                                "url" => true ? "http://twilio.autowebinar.online/incoming-call.php" : "https://20e20c90.ngrok.io/Twilio/incoming-call.php"
                            )
                );

    print($call->to);
}
elseif($callStatus == "completed"){
    $task = $twilio->taskrouter->v1->workspaces($workspace)
                               ->tasks($taskSid)
                               ->update(array(
                                            "assignmentStatus" => "completed",
                                            "reason" => "Call Completed Successfully"
                                        )
                               );
    print($task->taskQueueFriendlyName);
}
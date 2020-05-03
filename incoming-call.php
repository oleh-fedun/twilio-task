<?php
header("Content-Type: application/xml; charset=utf-8");
$digit_pressed = '1';
if(isset($_REQUEST['Digits'])){
    $digit_pressed = $_REQUEST['Digits'];    
}
if ($digit_pressed == '1') { // Call another agent
?>
    <Response>
        <Enqueue waitUrl="beep.php" workflowSid="WW3b339c5b67dc05815ce5d632c0c48dca">
            <Task timeout="15">{"ability": "1"}</Task>
        </Enqueue>
    </Response>
<?php
} elseif($digit_pressed == '2') { // Leave Voicemail
?>
    <Response>
        <Say>
            Please leave a message at the beep. 
            Press the star key when finished. 
        </Say>
        <Record
            maxLength="20"
            finishOnKey="*"
        />
        <Hangup />
    </Response>
<?php        
}
else{ // quit
?>
    <Response>
        <say>Thank you for contacting us. Good Bye.</say>
    </Response>
<?php
}
?>

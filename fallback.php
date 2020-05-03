<?php
header("Content-Type: application/xml; charset=utf-8");
?>

<Response>
  <Say language="es">Agent is not available.</Say>
  <Gather action="incoming-call.php" numDigits="1" timeout="5">
    <Say language="es">Press 1 to call another agent.</Say>
    <Say language="en">Press 2 to leave voice mail.</Say>
    <Say language="en">Press 3 to quit.</Say>
  </Gather>
</Response>

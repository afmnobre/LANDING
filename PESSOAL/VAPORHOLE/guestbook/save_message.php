<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$message = json_decode($_POST["message"], true);

    if ($message) {
        $messages = json_decode(file_get_contents("messages.json"), true);
        if (!$messages) {
            $messages = array();
        }

        array_push($messages, $message);

        if (file_put_contents("messages.json", json_encode($messages))) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "Invalid message data.";
    }
} else {
    echo "Method not allowed.";
}
?>


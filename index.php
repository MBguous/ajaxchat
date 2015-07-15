<?php

session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

// require 'core/classes/Core.php';
// require 'core/classes/Chat.php';

// $chat = new Chat();
// $chat->throwMessage(1, 'This is a test message');
// echo '<pre>', print_r($chat->fetchMessages(), true), '</pre>';

// require 'core/init.php';
// echo $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>AJAX Chat</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>

		<div class="chat">
			<div class="title">Chat with us</div>
			<div class="chat-box">
				<div class="messages"></div>
				<textarea class="entry" placeholder="Type here and hit Return. Use Shift + Return for a new line."></textarea>
			</div>
		</div>

		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/chat.js"></script>
	</body>
</html>
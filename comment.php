<?php
	if (isset($_POST["comment_author"]) && isset($_POST["comment"])) {
		$author = $_POST["comment_author"];
		$comment = $_POST["comment"];

		$text = urlencode("Author: {$author}\n\nComment: {$comment}");
		$response = file_get_contents("https://api.telegram.org/bot1023824074:AAEc_rBa2_KlVZB1w0hExsFtHc-QvVXvaUg/sendMessage?chat_id=-357673386&text={$text}");
	}
	header("Location: Fascinating Videos.Html");
?>

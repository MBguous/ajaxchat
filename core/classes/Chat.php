<?php
class Chat extends Core {
	public function fetchMessages() {
		//query db
		$this->query("
			SELECT		`messages`.`content`,
								`messages`.`timestamp`,
								`users`.`username`,
								`users`.`id`
			FROM			`messages`
			JOIN			`users`
			ON				`messages`.`user_id` = `users`.`id`
			ORDER BY	`messages`.`timestamp`
			
			");

		//return rows
		return $this->rows();
	}

	public function throwMessage($user_id, $message) {
		// insert into db
		$this->query("
				INSERT INTO `messages` (`user_id`, `content`, `timestamp`)
				VALUES (" . (int)$user_id . ", '" . $this->db->real_escape_string(htmlentities($message)) . "', UNIX_TIMESTAMP())
			");
	}
}
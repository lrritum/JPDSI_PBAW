<?php

class Messages {
	private $messages = array ();
	private $num = 0;


	public function addMsg($message) {
		$this->messages[] = $message;
		$this->num ++;
	}

	public function isEmpty() {
		return $this->num == 0;
	}
	
	public function isMsgs() {
		return count ( $this->messages ) > 0;
	}
	
	public function getMsgs() {
		return $this->messages;
	}
	
	public function clear() {

		$this->messages = array ();
		$this->num = 0;
	}
}
?>

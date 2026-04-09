<?php

require_once "class/sblampost.php";

class SblamBasePost extends SblamPost
{
	protected $reason;
	public function setSpamReason(?string $r): void {$this->reason = $r;}
	public function getSpamReason(): ?string {return $this->reason;}

	protected $spam_score = array();
	public function setSpamScore(array $s): void
	{
	    assert('is_numeric($s[0])');
	    assert('is_numeric($s[1]) && $s[1]>=0');
	    $this->spam_score = $s;
	}

	/**
	 * @return array(score, certainity) in scale 0-1
	 */
	public function getSpamScore(): array {return $this->spam_score;}

	protected $post_id;
	public function setPostId(int $p): void {$this->post_id = $p;}
	public function getPostId(): int {return $this->post_id;}
}

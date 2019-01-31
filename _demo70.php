<?php
class Test {
	public function demo($data) {
		if ($data) {
			$messsage = 1;
		} else {
			$messsage = 2;
		}
		echo $messsage;
	}
}

echo (new Test())->demo(true);
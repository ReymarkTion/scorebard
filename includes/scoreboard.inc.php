<?php

	class scoreboard extends dbh {

		public function setTimeOut($timeout) {
			$sql = 'UPDATE scoreboard SET time_out = '.$timeout;
			$res = $this->connect()->query($sql);
			/*if($res===TRUE) {

			} */
		}

		public function getFoulHome() {
			$sql = 'select foul_home from scoreboard;';
			$res = $this->connect()->query($sql);
			$row = mysqli_fetch_object($res);
			return $row->foul_home;
		}

		public function getFoulGuest() {
			$sql = 'select foul_guest from scoreboard;';
			$res = $this->connect()->query($sql);
			$row = mysqli_fetch_object($res);
			return $row->foul_guest;
		}



		
	}

 ?>
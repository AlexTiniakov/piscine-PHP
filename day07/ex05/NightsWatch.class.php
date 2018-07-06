<?php
	class NightsWatch implements IFighter
	{
		private $arr = array();

		public function recruit($s)
		{
			$this->arr[] = $s;
		}
		
		public function fight()
		{
			foreach ($this->arr as $key) {
				if (method_exists(get_class($key), 'fight'))
					$key->fight();
			}
		}
	}
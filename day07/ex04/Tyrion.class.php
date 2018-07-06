<?php
	class Tyrion
	{
		public function sleepWith($a)
		{
			if ($a instanceof Jaime)
				echo "Not even if I'm drunk !\n";
			else if ($a instanceof Sansa)
				echo "Let's do this.\n";
			else if ($a instanceof Cersei)
				echo "Not even if I'm drunk !\n";
		}
	}
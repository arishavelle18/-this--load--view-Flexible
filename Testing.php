<?php

	class Testing extends CI_Controller
	{

		public function display()
		{
			$data["title"] = 'Hello';
			$this->test->show(array("pages/try",$data), array("pages/try2",$data) );
		}
	}



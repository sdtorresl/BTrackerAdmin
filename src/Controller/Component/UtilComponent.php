<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class UtilComponent extends Component
{
	public function lastMonthDay() { 
		$month = date('m');
		$year = date('Y');
		$day = date("d", mktime(0,0,0, $month+1, 0, $year));

		return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
	}

	/** Actual month first day **/
	public function firstMonthDay() {
		$month = date('m');
		$year = date('Y');
		return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
	}
}


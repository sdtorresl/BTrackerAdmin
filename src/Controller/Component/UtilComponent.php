<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class UtilComponent extends Component
{
	public function lastCurrentMonthDay() { 
		$month = date('m');
		$year = date('Y');
		$day = date("d", mktime(0,0,0, $month+1, 0, $year));

		return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
	}

	/** Actual month first day **/
	public function firstCurrentMonthDay() {
		$month = date('m');
		$year = date('Y');

		return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
	}

	public function lastMonthDay($month) { 
		$year = date('Y');
		$day = date("d", mktime(0,0,0, $month+1, 0, $year));

		return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
	}

	public function firstMonthDay($month) {
		$year = date('Y');

		return date('Y-m-d', mktime(0,0,0, $month, 1, $year));
	}

	public function firstWeekEndDay($month) {
		$year = date('Y');

		return date('Y-m-d', mktime(0,0,0, $month, 7, $year));
	}

	public function secondWeekEndDay($month) {
		$year = date('Y');

		return date('Y-m-d', mktime(0,0,0, $month, 13, $year));
	}

	public function thirdWeekEndDay($month) {
		$year = date('Y');

		return date('Y-m-d', mktime(0,0,0, $month, 19, $year));
	}

	public function fourthWeekEndDay($month) {
		$year = date('Y');

		return date('Y-m-d', mktime(0,0,0, $month, 25, $year));
	}

	public function fifthWeekEndDay($month) { 
		$year = date('Y');
		$day = date("d", mktime(0,0,0, $month+1, 0, $year));

		return date('Y-m-d', mktime(0,0,0, $month, $day, $year));
	}
}


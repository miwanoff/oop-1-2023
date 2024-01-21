<?php
class Point {
	public $x, $y;
	public function __construct($x = 0, $y = 0) {
		$this->x = $x;
		$this->y = $y;
	}
	public function distance() {
		return sqrt ( $this->x * $this->x + $this->y * $this->y );
	}
	public static function distance1(Point $p1, Point $p2) {
		return sqrt ( ($p1->x - $p2->x) * ($p1->x - $p2->x) + 
					($p1->y - $p2->y) * ($p1->y - $p2->y) );
	}
    public function distance2(Point $p) {
		return sqrt ( ($p->x - $this->x) * ($p->x - $this->x) + 
					($p->y - $this->y) * ($p->y - $this->y) );
	}
}
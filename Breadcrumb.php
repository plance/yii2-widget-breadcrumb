<?php
namespace plance\widget;

class Breadcrumb extends \yii\base\Widget
{
	private static $breadcrumbs_ar = [];
	
    public function run()
    {
		return $this -> render('breadcrumb',[
			'breadcrumbs' => self::$breadcrumbs_ar,
		]);
    }
	
	/**
	 * Set breadcrumb
	 * @param string $title
	 * @param bool $is_active
	 */
	public static function set($title, $is_active = false)
	{
		self::$breadcrumbs_ar[] = [
			'title'		=> $title,
			'is_active' => $is_active,
		];
	}
}
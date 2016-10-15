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
	 * @param mixed $url
	 */
	public static function set($title, $url = false)
	{
		self::$breadcrumbs_ar[] = [
			'title'	=> $title,
			'url'	=> $url,
		];
	}
}

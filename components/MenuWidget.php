<?php 
namespace app\components;
use yii\base\Widget;
use app\models\Category;

class MenuWidget extends Widget {
	
	public $tpl;
	public $date; // массив категории из БД
	public $tree; // массив дерева, какая категория вложена в категории
	public $menuHtml; // шаблон html кода

	public function init(){
		parent::init();
		if( $this->tpl === null ) {
			$this->tpl = 'menu';
		}
		$this->tpl .= '.php';
	}
	public function run(){
		$this->date = Category::find()->all();
		debug($this->date);
		return $this->tpl;
	}
}
 ?>
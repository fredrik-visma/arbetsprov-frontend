<?php

// Normally this would be done with autoload and composer
include 'model/baseModel.php';
include 'model/shopModel.php';

class WGR_ExamplePageModel extends WGR_BaseModel
{
	/**
	 * @var array
	 */
	public $categories;

	/**
	 * @var array
	 */
	public $products;

	/**
	 * @var string
	 */
	public $pageTitle = 'Modern nagelkosmetik för proffs & konsument';

	/**
	 * @var string
	 */
	public $pageDesc = 'Vi utvecklar innovativa, säkra och prisvärda system inom nagelvård. Låt oss överträffa dina förväntningar!';

	/**
	 * Loads data to be used on example page
	 */
	public function loadData()
	{
		$shopModel = new WGR_ShopModel($this);
		$this->categories = $shopModel->getCategories('foo');
		$this->products = $shopModel->getProducts('bar');
	}

	/**
	 * Used to fetch data for a specific product
	 */
	public function getProductById($id)
	{
		foreach ($this->products as $product) {
			if ($product->id == $id) {
				return $product;
			}
		}
	}
}

class WGR_ExamplePageView
{
	/**
	 * Renders the page
	 * @param WGR_ExamplePageModel $pageModel
	 */
	public function render($pageModel)
	{
		include 'view/startpage.php';
	}

	/**
	 * Sets response headers
	 */
	public function renderResponseHeaders()
	{
		header('Content-type: text/html; charset=UTF-8');
	}
}

class WGR_ExamplePageController
{
	public function execute()
	{
		$pageModel = new WGR_ExamplePageModel();
		$pageModel->loadData();

		$pageView = new WGR_ExamplePageView();
		$pageView->renderResponseHeaders();
		$pageView->render($pageModel);
	}
}

$controller = new WGR_ExamplePageController();
$controller->execute();

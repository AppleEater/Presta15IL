<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class BlockNewProducts extends Module
{
	public function __construct()
	{
		$this->name = 'blocknewproducts';
		$this->tab = 'front_office_features';
		$this->version = '1.4.2';
		$this->author = 'PrestaShop';
		$this->need_instance = 0;
    	$this->ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6');

		parent::__construct();

		$this->displayName = $this->l('New products block');
		$this->description = $this->l('Displays a block featuring your store\'s newest products. Upgraded by MachoG');
	}

	public function install()
	{
		if (Shop::isFeatureActive())  //checks whether the multistore feature is active or not, and if at least two stores are presently activated.
			Shop::setContext(Shop::CONTEXT_ALL);   //changes the context in order  to apply coming changes to all existing stores instead of only the current store.

		if (!parent::install()
			|| !$this->registerHook('displayHeader')
			|| !$this->registerHook('displayRightColumn')
			|| !$this->registerHook('displayLeftColumn')
			|| !$this->registerHook('displayHome')
			|| !$this->registerHook('displayFooter')
			|| !$this->registerHook('addproduct')
			|| !$this->registerHook('updateproduct')
			|| !$this->registerHook('deleteproduct')
			|| !Configuration::updateValue('NEW_PRODUCTS_NBR', 5)
		)
			return false;
		$this->_clearCache('blocknewproducts.tpl');
		return true;
	}

	public function uninstall()
	{
		return (
			parent::uninstall() &&
		$this->_clearCache('blocknewproducts.tpl') &&
		Configuration::deleteByName('NEW_PRODUCTS_NBR') &&
		Configuration::deleteByName('PS_BLOCK_NEWPRODUCTS_DISPLAY')
		);
	}

	public function getContent()
	{
		$output = '<h2>'.$this->displayName.'</h2>';
		if (Tools::isSubmit('submitBlockNewProducts'))
		{
			if (!($productNbr = Tools::getValue('productNbr')) || empty($productNbr))
				$output .= $this->displayError($this->l('Please complete the "products to display" field.'));
			elseif ((int)($productNbr) == 0)
				$output .= $this->displayError($this->l('Invalid number.'));
			else
			{
				Configuration::updateValue('PS_BLOCK_NEWPRODUCTS_DISPLAY', (int)(Tools::getValue('always_display')));
				Configuration::updateValue('NEW_PRODUCTS_NBR', (int)($productNbr));
				$output .=	$this->displayConfirmation($this->l('Settings updated'));
			}
		}
		return $output.$this->displayForm();
	}

	public function displayForm()
	{
		$output = '
		<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post">
		<fieldset><legend><img src="'.$this->_path.'logo.gif" alt="" title="" />'.$this->l('Settings').'</legend>
				<label>'.$this->l('Products to display.').'</label>
					<div class="margin-form">
						<input type="text" name="productNbr" value="'.(int)(Configuration::get('NEW_PRODUCTS_NBR')).'" />
						<p class="clear">'.$this->l('Define the number of products to be displayed in this block.').'</p>
					</div>
					<label>'.$this->l('Always display this block.').'</label>
					<div class="margin-form">
						<input type="radio" name="always_display" id="display_on" value="1" '.(Tools::getValue('always_display', Configuration::get('PS_BLOCK_NEWPRODUCTS_DISPLAY')) ? 'checked="checked" ' : '').'/>
						<label class="t" for="display_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
						<input type="radio" name="always_display" id="display_off" value="0" '.(!Tools::getValue('always_display', Configuration::get('PS_BLOCK_NEWPRODUCTS_DISPLAY')) ? 'checked="checked" ' : '').'/>
						<label class="t" for="display_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
						<p class="clear">'.$this->l('Show the block even if no products are available.').'</p>
					</div>
					<center><input type="submit" name="submitBlockNewProducts" value="'.$this->l('Save').'" class="button" /></center>
				</fieldset>
			</form>';
		return $output;
	}

	public function hookDisplayRightColumn($params)
	{
		if (!$this->isCached('blocknewproducts-right.tpl', $this->getCacheId('blocknewproducts-right')))
		{
			if (!Configuration::get('PS_BLOCK_NEWPRODUCTS_DISPLAY'))
				return;
			$newProducts = Product::getNewProducts((int) $params['cookie']->id_lang, 0, (int) Configuration::get('NEW_PRODUCTS_NBR'));
			if (!$newProducts)
				return;

			$this->smarty->assign(array(
				'new_products' => $newProducts,
				'mediumSize' => Image::getSize(ImageType::getFormatedName('medium')),
			));
		}
		return $this->display(__FILE__, 'blocknewproducts-right.tpl', $this->getCacheId('blocknewproducts-right'));
	}

	public function hookDisplayLeftColumn($params)
	{
		return $this->hookDisplayRightColumn($params);
	}


	public function hookDisplayHome($params)
	{
		if (!$this->isCached('blocknewproducts-home.tpl', $this->getCacheId('blocknewproducts-home')))
		{
			if (!Configuration::get('PS_BLOCK_NEWPRODUCTS_DISPLAY'))
				return;
			$np_nbr = (int)Configuration::get('NEW_PRODUCTS_NBR');
            $productClass = new Product();
			$newProducts = $productClass -> getNewProducts((int)Context::getContext()->language->id, 0, ($np_nbr ? $np_nbr : 2));
			if (!$newProducts)
				return;

			$this->smarty->assign(array(
				'new_products' => $newProducts,
				'homeSize' => Image::getSize(ImageType::getFormatedName('home')),
			));
		}
		return $this->display(__FILE__, 'blocknewproducts-home.tpl', $this->getCacheId('blocknewproducts-home'));
	}

	public function hookDisplayFooter($params)
	{
		return $this->hookDisplayRightColumn($params);
	}

	public function hookDisplayHeader($params)
	{
		$this->context->controller->addCSS(($this->_path).'views/css/blocknewproducts.css', 'all');
	}

	public function hookAddProduct($params)
	{
		$this->_clearCache('blocknewproducts-home.tpl');
		$this->_clearCache('blocknewproducts-right.tpl');
	}

	public function hookUpdateProduct($params)
	{
		$this->_clearCache('blocknewproducts-home.tpl');
		$this->_clearCache('blocknewproducts-right.tpl');
	}

	public function hookDeleteProduct($params)
	{
		$this->_clearCache('blocknewproducts-home.tpl');
		$this->_clearCache('blocknewproducts-right.tpl');
	}
}

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.blockwishlist.grid.current_month_stastistics_grid_factory' shared service.

return $this->services['prestashop.module.blockwishlist.grid.current_month_stastistics_grid_factory'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(($this->services['prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory'] ?? $this->load('getPrestashop_Module_Blockwishlist_Grid_CurrentMonthStatisticsGridDefinitionFactoryService.php')), new \PrestaShop\Module\BlockWishList\Grid\Data\CurrentMonthStatisticsGridDataFactory(($this->services['doctrine.cache.provider'] ?? $this->getDoctrine_Cache_ProviderService()), ($this->services['prestashop.module.blockwishlist.calculator.statistics_calculator'] ?? $this->load('getPrestashop_Module_Blockwishlist_Calculator_StatisticsCalculatorService.php')), ($this->services['prestashop.adapter.shop.context'] ?? ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context()))->getContextShopID()), ($this->services['prestashop.core.grid.filter.form_factory'] ?? $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()));
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.access_denied.listener' shared service.

return $this->services['prestashop.access_denied.listener'] = new \PrestaShopBundle\EventListener\AccessDeniedListener(($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['session'] ?? $this->getSessionService()));
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'cache.property_access' shared service.

return $this->services['cache.property_access'] = \Symfony\Component\PropertyAccess\PropertyAccessor::createCache('axXtaO8x+d', NULL, $this->getParameter('container.build_id'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->load('getMonolog_Logger_CacheService.php')) && false ?: '_'});
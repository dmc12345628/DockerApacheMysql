<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.

$this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

$instance->setNamespace('sf_orm_default_44da3ba903d2633d953693e1dbe3aa466350156a54d920917a4b624ab42ce6fd');

return $instance;

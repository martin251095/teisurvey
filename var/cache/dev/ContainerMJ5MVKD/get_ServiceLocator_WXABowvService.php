<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.WXABowv' shared service.

return $this->privates['.service_locator.WXABowv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'category' => ['privates', '.errored..service_locator.WXABowv.App\\Entity\\Category', NULL, 'Cannot autowire service "debug.argument_resolver.not_tagged_controller.inner": it references class "App\\Entity\\Category" but no such service exists.'],
    'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
    'translationManager' => ['privates', 'App\\Service\\TranslationManager', 'getTranslationManagerService.php', true],
], [
    'category' => 'App\\Entity\\Category',
    'em' => '?',
    'translationManager' => 'App\\Service\\TranslationManager',
]);

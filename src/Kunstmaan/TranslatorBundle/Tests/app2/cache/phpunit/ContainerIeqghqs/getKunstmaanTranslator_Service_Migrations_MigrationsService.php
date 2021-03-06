<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'kunstmaan_translator.service.migrations.migrations' shared service.

$this->services['kunstmaan_translator.service.migrations.migrations'] = $instance = new \Kunstmaan\TranslatorBundle\Service\Migrations\MigrationsService();

$instance->setTranslationRepository(${($_ = isset($this->services['kunstmaan_translator.repository.translation']) ? $this->services['kunstmaan_translator.repository.translation'] : $this->load(__DIR__.'/getKunstmaanTranslator_Repository_TranslationService.php')) && false ?: '_'});
$instance->setEntityManager(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'});

return $instance;

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\DBAL\\Migrations\\Tools\\Console\\Command\\AbstractCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\DBAL\\Migrations\\Tools\\Console\\Command\\GenerateCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\migrations\\lib\\Doctrine\\DBAL\\Migrations\\Tools\\Console\\Command\\DiffCommand.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle\\Command\\MigrationsDiffDoctrineCommand.php';

return $this->services['console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand'] = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDiffDoctrineCommand();

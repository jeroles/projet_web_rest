<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotations.cached_reader' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\ProxyTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\PhpArrayTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\PhpArrayAdapter.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\DoctrineProvider.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\Reader.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\annotations\\lib\\Doctrine\\Common\\Annotations\\CachedReader.php';

return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->load(__DIR__.'/getAnnotations_ReaderService.php')), new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()))), true);

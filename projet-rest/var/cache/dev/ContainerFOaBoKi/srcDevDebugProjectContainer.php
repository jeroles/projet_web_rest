<?php

namespace ContainerFOaBoKi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class srcDevDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * @internal but protected for BC on cache:clear
     */
    protected $privates = array();

    public function __construct()
    {
        $dir = $this->targetDirs[0] = dirname(__DIR__);
        for ($i = 1; $i <= 5; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = array();
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'cache.app' => 'getCache_AppService',
            'cache.system' => 'getCache_SystemService',
            'doctrine' => 'getDoctrineService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'twig' => 'getTwigService',
        );
        $this->fileMap = array(
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => __DIR__.'/getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => __DIR__.'/getTemplateControllerService.php',
            'cache.app_clearer' => __DIR__.'/getCache_AppClearerService.php',
            'cache.global_clearer' => __DIR__.'/getCache_GlobalClearerService.php',
            'cache.system_clearer' => __DIR__.'/getCache_SystemClearerService.php',
            'cache_clearer' => __DIR__.'/getCacheClearerService.php',
            'cache_warmer' => __DIR__.'/getCacheWarmerService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandContainscommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandDeletecommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandFlushcommandService.php',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => __DIR__.'/getConsole_Command_DoctrineBundleDoctrinecachebundleCommandStatscommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsdiffdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsexecutedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsgeneratedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationslatestdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsmigratedoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsstatusdoctrinecommandService.php',
            'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => __DIR__.'/getConsole_Command_DoctrineBundleMigrationsbundleCommandMigrationsversiondoctrinecommandService.php',
            'console.command_loader' => __DIR__.'/getConsole_CommandLoaderService.php',
            'doctrine.dbal.default_connection' => __DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.orm.default_entity_manager' => __DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php',
            'filesystem' => __DIR__.'/getFilesystemService.php',
            'routing.loader' => __DIR__.'/getRouting_LoaderService.php',
            'services_resetter' => __DIR__.'/getServicesResetterService.php',
            'twig.controller.exception' => __DIR__.'/getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => __DIR__.'/getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception' => __DIR__.'/getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => __DIR__.'/getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => __DIR__.'/getWebProfiler_Controller_RouterService.php',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
        );

        include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerNameParser.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventSubscriberInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ResponseListener.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\StreamedResponseListener.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\LocaleListener.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ValidateRequestListener.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\EventListener\\ResolveControllerNameSubscriber.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolverInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ControllerResolver.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ContainerControllerResolver.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerResolver.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\TraceableControllerResolver.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\ControllerMetadata\\ArgumentMetadataFactory.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolverInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\ArgumentResolver.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Controller\\TraceableArgumentResolver.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernelInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\TerminableInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\HttpKernel.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-foundation\\RequestStack.php';
        include_once $this->targetDirs[3].'\\vendor\\psr\\cache\\src\\CacheItemPoolInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AdapterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\ResettableInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerAwareTrait.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\AbstractTrait.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\AbstractAdapter.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\PruneableInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\FilesystemCommonTrait.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Traits\\FilesystemTrait.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\FilesystemAdapter.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\Adapter\\TraceableAdapter.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Profiler\\ProfilerStorageInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Profiler\\FileProfilerStorage.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollectorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\DataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\LateDataCollectorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\TimeDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\MemoryDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\AjaxDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\ExceptionDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\LoggerDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\EventDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\cache\\DataCollector\\CacheDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\DataCollector\\TwigDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\DataCollector\\DoctrineDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\DataCollector\\DoctrineDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\ConfigDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Profiler\\Profiler.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\ProfilerListener.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\RequestDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\DataCollector\\RequestDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\DataCollector\\RouterDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\DataCollector\\RouterDataCollector.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\DebugHandlersListener.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Debug\\FileLinkFormatter.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\stopwatch\\Stopwatch.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContext.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\EventListener\\RouterListener.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\LoaderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\ExistsLoaderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\SourceContextLoaderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Loader\\Filesystem.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\ExtensionInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Extension.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Extension\\Profiler.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\ProfilerExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\TranslationExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\CodeExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\RoutingExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\YamlExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\StopwatchExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpKernelExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\Extension\\HttpFoundationExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Extension\\Debug.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\DataDumperInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Cloner\\DumperInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\AbstractDumper.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\CliDumper.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\HtmlDumper.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle\\Twig\\WebProfilerExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Twig\\DoctrineExtension.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\AppVariable.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceLocator.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\RuntimeLoaderInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\ContainerRuntimeLoader.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\DependencyInjection\\Configurator\\EnvironmentConfigurator.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Environment.php';
        include_once $this->targetDirs[3].'\\vendor\\twig\\twig\\lib\\Twig\\Profiler\\Profile.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle\\Csp\\NonceGenerator.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle\\Csp\\ContentSecurityPolicyHandler.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle\\EventListener\\WebDebugToolbarListener.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\ConnectionRegistry.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\ManagerRegistry.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\AbstractManagerRegistry.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\ManagerRegistry.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\doctrine-bridge\\RegistryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle\\Registry.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\SQLLogger.php';
        include_once $this->targetDirs[3].'\\vendor\\doctrine\\dbal\\lib\\Doctrine\\DBAL\\Logging\\DebugStack.php';
        include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\LoggerInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\psr\\log\\Psr\\Log\\AbstractLogger.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Log\\Logger.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ConfigCacheFactoryInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\ResourceCheckerConfigCacheFactory.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RequestContextAwareInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\UrlMatcherInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Generator\\UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\RouterInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Matcher\\RequestMatcherInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\routing\\Router.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\WarmableInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ServiceSubscriberInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Routing\\Router.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcherInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\EventDispatcher.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcherInterface.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\event-dispatcher\\Debug\\TraceableEventDispatcher.php';
        include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Debug\\TraceableEventDispatcher.php';
    }

    public function reset()
    {
        $this->privates = array();
        parent::reset();
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return require __DIR__.'/removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('ES4Fahtc93', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Ref11w4DMa', 0, '-WWfJLRNWKnd58Dy8Ffxvr', ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()));

        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['data_collector.router'] ?? $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['response_listener'] ?? $this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'));
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['streamed_response_listener'] ?? $this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener());
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['validate_request_listener'] ?? $this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener());
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['resolve_controller_name_subscriber'] ?? $this->getResolveControllerNameSubscriberService());
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load(__DIR__.'/getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load(__DIR__.'/getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector());
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('console.command', array(0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ($this->privates['twig.exception_listener'] ?? $this->load(__DIR__.'/getTwig_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'), -128);
        $instance->addListener('console.error', array(0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? $this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber());
        }, 1 => 'onConsoleError'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? $this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber());
        }, 1 => 'onConsoleTerminate'), 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel')))), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), $a), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory(), new RewindableGenerator(function () {
            yield 0 => ($this->privates['argument_resolver.request_attribute'] ?? $this->privates['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver());
            yield 1 => ($this->privates['argument_resolver.request'] ?? $this->privates['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver());
            yield 2 => ($this->privates['argument_resolver.session'] ?? $this->privates['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver());
            yield 3 => ($this->privates['argument_resolver.service'] ?? $this->load(__DIR__.'/getArgumentResolver_ServiceService.php'));
            yield 4 => ($this->privates['argument_resolver.default'] ?? $this->privates['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver());
            yield 5 => ($this->privates['argument_resolver.variadic'] ?? $this->privates['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver());
        }, 6)), $a));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger());

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $c->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $c->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $c->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $c->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $d->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? $this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()));

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? $this->privates['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/srcDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService())));
        $instance->add(($this->privates['data_collector.router'] ?? $this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        $instance->add($c);
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? $this->privates['twig.profile'] = new \Twig\Profiler\Profile()), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($d);
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, 'kernel:loadRoutes', array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'srcDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'srcDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'service'), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()));

        $instance->setConfigCacheFactory(new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? $this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker());
        }, 2)));

        return $instance;
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = new \Twig\Loader\FilesystemLoader(array(), $this->targetDirs[3]);
        $a->addPath(($this->targetDirs[3].'/templates'));
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src/Resources/views'), 'Maker');
        $a->addPath(($this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src/Resources/views'), '!Maker');
        $a->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $a->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '!Doctrine');
        $a->addPath(($this->targetDirs[3].'/templates'));

        $this->services['twig'] = $instance = new \Twig\Environment($a, array('paths' => array(($this->targetDirs[3].'/templates') => NULL), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $b = ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true));
        $c = ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService());
        $d = ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $c));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('request_stack')) {
            $f->setRequestStack($d);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? $this->privates['twig.profile'] = new \Twig\Profiler\Profile()), $b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($c, ($this->targetDirs[3].'\\src'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService())));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($b, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($d, ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ($this->privates['twig.runtime.httpkernel'] ?? $this->load(__DIR__.'/getTwig_Runtime_HttpkernelService.php'));
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FM9V-USzvW', 0, '-WWfJLRNWKnd58Dy8Ffxvr', ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('voz-VjS5qz', 0, '-WWfJLRNWKnd58Dy8Ffxvr', ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('GaLHdgKGZs', 0, '-WWfJLRNWKnd58Dy8Ffxvr', ($this->targetDirs[0].'/pools'), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()), -1, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->privates['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel')))));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['logger'] ?? $this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()), $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/(app(_[\\w]+)?\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'kernel.secret' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'twig.default_path' => false,
        'doctrine.orm.proxy_dir' => false,
        'doctrine_migrations.dir_name' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'\\src'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'\\log'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'WebServerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\web-server-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
                'TwigBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'WebProfilerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'MakerBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\maker-bundle\\src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ),
                'DoctrineCacheBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ),
                'DoctrineBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'DoctrineMigrationsBundle' => array(
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ),
            ); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/srcDevDebugProjectContainer.xml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'doctrine_migrations.dir_name': $value = ($this->targetDirs[3].'/src/Migrations'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcDevDebugProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'env(DATABASE_URL)' => '',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel:loadRoutes',
            'router.cache_class_prefix' => 'srcDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsdiffdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsexecutedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsgeneratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationslatestdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsmigratedoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsstatusdoctrinecommand',
                'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand' => 'console.command.doctrine_bundle_migrationsbundle_command_migrationsversiondoctrinecommand',
                'console.command.symfony_bundle_makerbundle_command_makercommand' => 'maker.auto_command.make_voter',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.yaml_lint' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'maker.auto_command.make_auth' => true,
                'maker.auto_command.make_command' => true,
                'maker.auto_command.make_controller' => true,
                'maker.auto_command.make_entity' => true,
                'maker.auto_command.make_form' => true,
                'maker.auto_command.make_functional_test' => true,
                'maker.auto_command.make_serializer_encoder' => true,
                'maker.auto_command.make_subscriber' => true,
                'maker.auto_command.make_twig_extension' => true,
                'maker.auto_command.make_unit_test' => true,
                'maker.auto_command.make_validator' => true,
                'maker.auto_command.make_voter' => true,
            ),
        );
    }
}

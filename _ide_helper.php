<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 5.5.42 on 2018-09-30 15:46:45.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace Illuminate\Support\Facades { 

    class App {
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function publicPath()
        {
            return \October\Rain\Foundation\Application::publicPath();
        }
        
        /**
         * Get the path to the language files.
         *
         * @return string 
         * @static 
         */ 
        public static function langPath()
        {
            return \October\Rain\Foundation\Application::langPath();
        }
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function pluginsPath()
        {
            return \October\Rain\Foundation\Application::pluginsPath();
        }
        
        /**
         * Set the plugins path for the application.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function setPluginsPath($path)
        {
            return \October\Rain\Foundation\Application::setPluginsPath($path);
        }
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function themesPath()
        {
            return \October\Rain\Foundation\Application::themesPath();
        }
        
        /**
         * Set the themes path for the application.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function setThemesPath($path)
        {
            return \October\Rain\Foundation\Application::setThemesPath($path);
        }
        
        /**
         * Get the path to the public / web directory.
         *
         * @return string 
         * @static 
         */ 
        public static function tempPath()
        {
            return \October\Rain\Foundation\Application::tempPath();
        }
        
        /**
         * Resolve the given type from the container.
         * 
         * (Overriding Container::make)
         *
         * @param string $abstract
         * @return mixed 
         * @static 
         */ 
        public static function make($abstract, $parameters = array())
        {
            return \October\Rain\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * Register a "before" application filter.
         *
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \October\Rain\Foundation\Application::before($callback);
        }
        
        /**
         * Register an "after" application filter.
         *
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \October\Rain\Foundation\Application::after($callback);
        }
        
        /**
         * Register an application error handler.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function error($callback)
        {
            \October\Rain\Foundation\Application::error($callback);
        }
        
        /**
         * Register an error handler for fatal errors.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function fatal($callback)
        {
            \October\Rain\Foundation\Application::fatal($callback);
        }
        
        /**
         * Determine if we are running in the back-end area.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningInBackend()
        {
            return \October\Rain\Foundation\Application::runningInBackend();
        }
        
        /**
         * Sets the execution context
         *
         * @param string $context
         * @return void 
         * @static 
         */ 
        public static function setExecutionContext($context)
        {
            \October\Rain\Foundation\Application::setExecutionContext($context);
        }
        
        /**
         * Returns true if a database connection is present.
         *
         * @return boolean 
         * @static 
         */ 
        public static function hasDatabase()
        {
            return \October\Rain\Foundation\Application::hasDatabase();
        }
        
        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
            \October\Rain\Foundation\Application::setLocale($locale);
        }
        
        /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */ 
        public static function registerCoreContainerAliases()
        {
            \October\Rain\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedConfigPath()
        {
            return \October\Rain\Foundation\Application::getCachedConfigPath();
        }
        
        /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedRoutesPath()
        {
            return \October\Rain\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * Get the path to the cached "compiled.php" file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedCompilePath()
        {
            return \October\Rain\Foundation\Application::getCachedCompilePath();
        }
        
        /**
         * Get the path to the cached services.json file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedServicesPath()
        {
            return \October\Rain\Foundation\Application::getCachedServicesPath();
        }
        
        /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedPackagesPath()
        {
            return \October\Rain\Foundation\Application::getCachedPackagesPath();
        }
        
        /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedClassesPath()
        {
            return \October\Rain\Foundation\Application::getCachedClassesPath();
        }
        
        /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */ 
        public static function version()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::version();
        }
        
        /**
         * Run the given array of bootstrap classes.
         *
         * @param array $bootstrappers
         * @return void 
         * @static 
         */ 
        public static function bootstrapWith($bootstrappers)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterLoadingEnvironment($callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterBootstrapping($bootstrapper, $callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasBeenBootstrapped()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::hasBeenBootstrapped();
        }
        
        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return $this 
         * @static 
         */ 
        public static function setBasePath($basePath)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::setBasePath($basePath);
        }
        
        /**
         * Get the path to the application "app" directory.
         *
         * @param string $path Optionally, a path to append to the app path
         * @return string 
         * @static 
         */ 
        public static function path($path = '')
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::path($path);
        }
        
        /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path Optionally, a path to append to the base path
         * @return string 
         * @static 
         */ 
        public static function basePath($path = '')
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::basePath($path);
        }
        
        /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path Optionally, a path to append to the bootstrap path
         * @return string 
         * @static 
         */ 
        public static function bootstrapPath($path = '')
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::bootstrapPath($path);
        }
        
        /**
         * Get the path to the application configuration files.
         *
         * @param string $path Optionally, a path to append to the config path
         * @return string 
         * @static 
         */ 
        public static function configPath($path = '')
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::configPath($path);
        }
        
        /**
         * Get the path to the database directory.
         *
         * @param string $path Optionally, a path to append to the database path
         * @return string 
         * @static 
         */ 
        public static function databasePath($path = '')
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::databasePath($path);
        }
        
        /**
         * Set the database directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function useDatabasePath($path)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::useDatabasePath($path);
        }
        
        /**
         * Get the path to the storage directory.
         *
         * @return string 
         * @static 
         */ 
        public static function storagePath()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::storagePath();
        }
        
        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function useStoragePath($path)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::useStoragePath($path);
        }
        
        /**
         * Get the path to the resources directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function resourcePath($path = '')
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::resourcePath($path);
        }
        
        /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentPath()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::environmentPath();
        }
        
        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return $this 
         * @static 
         */ 
        public static function useEnvironmentPath($path)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::useEnvironmentPath($path);
        }
        
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return $this 
         * @static 
         */ 
        public static function loadEnvironmentFrom($file)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFile()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::environmentFile();
        }
        
        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFilePath()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::environmentFilePath();
        }
        
        /**
         * Get or check the current application environment.
         *
         * @return string|bool 
         * @static 
         */ 
        public static function environment()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::environment();
        }
        
        /**
         * Determine if application is in local environment.
         *
         * @return bool 
         * @static 
         */ 
        public static function isLocal()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::isLocal();
        }
        
        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */ 
        public static function detectEnvironment($callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::detectEnvironment($callback);
        }
        
        /**
         * Determine if we are running in the console.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningInConsole()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::runningInConsole();
        }
        
        /**
         * Determine if we are running unit tests.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningUnitTests()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::runningUnitTests();
        }
        
        /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */ 
        public static function registerConfiguredProviders()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::registerConfiguredProviders();
        }
        
        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function register($provider, $options = array(), $force = false)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::register($provider, $options, $force);
        }
        
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */ 
        public static function getProvider($provider)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::getProvider($provider);
        }
        
        /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return array 
         * @static 
         */ 
        public static function getProviders($provider)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::getProviders($provider);
        }
        
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function resolveProvider($provider)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::resolveProvider($provider);
        }
        
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProviders()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProvider($service)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::loadDeferredProvider($service);
        }
        
        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void 
         * @static 
         */ 
        public static function registerDeferredProvider($provider, $service = null)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * Determine if the given abstract type has been bound.
         * 
         * (Overriding Container::bound)
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function bound($abstract)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::bound($abstract);
        }
        
        /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */ 
        public static function isBooted()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::isBooted();
        }
        
        /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */ 
        public static function boot()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::boot();
        }
        
        /**
         * Register a new boot listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function booting($callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::booting($callback);
        }
        
        /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function booted($callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::booted($callback);
        }
        
        /**
         * {@inheritdoc}
         *
         * @static 
         */ 
        public static function handle($request, $type = 1, $catch = true)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */ 
        public static function shouldSkipMiddleware()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::shouldSkipMiddleware();
        }
        
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function configurationIsCached()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::configurationIsCached();
        }
        
        /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function routesAreCached()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::routesAreCached();
        }
        
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static 
         */ 
        public static function abort($code, $message = '', $headers = array())
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * Register a terminating callback with the application.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function terminating($callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::terminating($callback);
        }
        
        /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */ 
        public static function terminate()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::terminate();
        }
        
        /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoadedProviders()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */ 
        public static function getDeferredServices()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::getDeferredServices();
        }
        
        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function setDeferredServices($services)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function addDeferredServices($services)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::addDeferredServices($services);
        }
        
        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */ 
        public static function isDeferredService($service)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function provideFacades($namespace)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::provideFacades($namespace);
        }
        
        /**
         * Define a callback to be used to configure Monolog.
         *
         * @param callable $callback
         * @return $this 
         * @static 
         */ 
        public static function configureMonologUsing($callback)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::configureMonologUsing($callback);
        }
        
        /**
         * Determine if the application has a custom Monolog configurator.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasMonologConfigurator()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::hasMonologConfigurator();
        }
        
        /**
         * Get the custom Monolog configurator for the application.
         *
         * @return callable 
         * @static 
         */ 
        public static function getMonologConfigurator()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::getMonologConfigurator();
        }
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::getLocale();
        }
        
        /**
         * Determine if application locale is the given locale.
         *
         * @param string $locale
         * @return bool 
         * @static 
         */ 
        public static function isLocale($locale)
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::isLocale($locale);
        }
        
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            \October\Rain\Foundation\Application::flush();
        }
        
        /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getNamespace()
        {
            //Method inherited from \Illuminate\Foundation\Application            
            return \October\Rain\Foundation\Application::getNamespace();
        }
        
        /**
         * Define a contextual binding.
         *
         * @param string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */ 
        public static function when($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::when($concrete);
        }
        
        /**
         * Returns true if the container can return an entry for the given identifier.
         * 
         * Returns false otherwise.
         * 
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param string $id Identifier of the entry to look for.
         * @return bool 
         * @static 
         */ 
        public static function has($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::has($id);
        }
        
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function resolved($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::resolved($abstract);
        }
        
        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function isShared($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::isShared($abstract);
        }
        
        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function isAlias($name)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::isAlias($name);
        }
        
        /**
         * Register a binding with the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         * @return bool 
         * @static 
         */ 
        public static function hasMethodBinding($method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::hasMethodBinding($method);
        }
        
        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param string $method
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function bindMethod($method, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::bindMethod($method, $callback);
        }
        
        /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function callMethodBinding($method, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::callMethodBinding($method, $instance);
        }
        
        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */ 
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * Register a shared binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singleton($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function extend($abstract, $closure)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function instance($abstract, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */ 
        public static function tag($abstracts, $tags)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return array 
         * @static 
         */ 
        public static function tagged($tag)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::tagged($tag);
        }
        
        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @static 
         */ 
        public static function alias($abstract, $alias)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rebinding($abstract, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */ 
        public static function refresh($abstract, $target, $method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */ 
        public static function wrap($callback, $parameters = array())
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @static 
         */ 
        public static function call($callback, $parameters = array(), $defaultMethod = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
         * @return \Closure 
         * @static 
         */ 
        public static function factory($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::factory($abstract);
        }
        
        /**
         * An alias function name for make().
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function makeWith($abstract, $parameters = array())
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::makeWith($abstract, $parameters);
        }
        
        /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param string $id Identifier of the entry to look for.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @return mixed Entry.
         * @static 
         */ 
        public static function get($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::get($id);
        }
        
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function build($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::build($concrete);
        }
        
        /**
         * Register a new resolving callback.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function resolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * Register a new after resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function afterResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getBindings()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::getBindings();
        }
        
        /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         * @return string 
         * @throws \LogicException
         * @static 
         */ 
        public static function getAlias($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::getAlias($abstract);
        }
        
        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetExtenders($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::forgetExtenders($abstract);
        }
        
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetInstance($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetInstances()
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::forgetInstances();
        }
        
        /**
         * Set the globally available instance of the container.
         *
         * @return static 
         * @static 
         */ 
        public static function getInstance()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::getInstance();
        }
        
        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container|null $container
         * @return static 
         * @static 
         */ 
        public static function setInstance($container = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::setInstance($container);
        }
        
        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::offsetExists($key);
        }
        
        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \October\Rain\Foundation\Application::offsetGet($key);
        }
        
        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            \October\Rain\Foundation\Application::offsetUnset($key);
        }
         
    }

    class Artisan {
        
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface $output
         * @return int 
         * @static 
         */ 
        public static function handle($input, $output = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \October\Rain\Foundation\Console\Kernel::handle($input, $output);
        }
        
        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */ 
        public static function terminate($input, $status)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \October\Rain\Foundation\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         * @return \Illuminate\Foundation\Console\ClosureCommand 
         * @static 
         */ 
        public static function command($signature, $callback)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \October\Rain\Foundation\Console\Kernel::command($signature, $callback);
        }
        
        /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return void 
         * @static 
         */ 
        public static function registerCommand($command)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \October\Rain\Foundation\Console\Kernel::registerCommand($command);
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface $outputBuffer
         * @return int 
         * @static 
         */ 
        public static function call($command, $parameters = array(), $outputBuffer = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \October\Rain\Foundation\Console\Kernel::call($command, $parameters, $outputBuffer);
        }
        
        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return \Illuminate\Foundation\Bus\PendingDispatch 
         * @static 
         */ 
        public static function queue($command, $parameters = array())
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \October\Rain\Foundation\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \October\Rain\Foundation\Console\Kernel::all();
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */ 
        public static function output()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \October\Rain\Foundation\Console\Kernel::output();
        }
        
        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */ 
        public static function bootstrap()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \October\Rain\Foundation\Console\Kernel::bootstrap();
        }
        
        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application $artisan
         * @return void 
         * @static 
         */ 
        public static function setArtisan($artisan)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \October\Rain\Foundation\Console\Kernel::setArtisan($artisan);
        }
         
    }

    class Bus {
        
        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @return mixed 
         * @static 
         */ 
        public static function dispatch($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatch($command);
        }
        
        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed 
         * @static 
         */ 
        public static function dispatchNow($command, $handler = null)
        {
            return \Illuminate\Bus\Dispatcher::dispatchNow($command, $handler);
        }
        
        /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         * @return bool 
         * @static 
         */ 
        public static function hasCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::hasCommandHandler($command);
        }
        
        /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         * @return bool|mixed 
         * @static 
         */ 
        public static function getCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::getCommandHandler($command);
        }
        
        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function dispatchToQueue($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatchToQueue($command);
        }
        
        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         * @return $this 
         * @static 
         */ 
        public static function pipeThrough($pipes)
        {
            return \Illuminate\Bus\Dispatcher::pipeThrough($pipes);
        }
        
        /**
         * Map a command to a handler.
         *
         * @param array $map
         * @return $this 
         * @static 
         */ 
        public static function map($map)
        {
            return \Illuminate\Bus\Dispatcher::map($map);
        }
         
    }

    class Cache {
        
        /**
         * 
         *
         * @static 
         */ 
        public static function repository($store)
        {
            return \October\Rain\Halcyon\MemoryCacheManager::repository($store);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function isEnabled()
        {
            return \October\Rain\Halcyon\MemoryCacheManager::isEnabled();
        }
        
        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function store($name = null)
        {
            //Method inherited from \Illuminate\Cache\CacheManager            
            return \October\Rain\Halcyon\MemoryCacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Cache\CacheManager            
            return \October\Rain\Halcyon\MemoryCacheManager::driver($driver);
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            //Method inherited from \Illuminate\Cache\CacheManager            
            return \October\Rain\Halcyon\MemoryCacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            //Method inherited from \Illuminate\Cache\CacheManager            
            \October\Rain\Halcyon\MemoryCacheManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Cache\CacheManager            
            return \October\Rain\Halcyon\MemoryCacheManager::extend($driver, $callback);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string|array $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \October\Rain\Halcyon\MemoryRepository::get($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
        public static function put($key, $value, $minutes = null)
        {
            \October\Rain\Halcyon\MemoryRepository::put($key, $value, $minutes);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function increment($key, $value = 1)
        {
            return \October\Rain\Halcyon\MemoryRepository::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function decrement($key, $value = 1)
        {
            return \October\Rain\Halcyon\MemoryRepository::decrement($key, $value);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function forever($key, $value)
        {
            \October\Rain\Halcyon\MemoryRepository::forever($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function forget($key)
        {
            return \October\Rain\Halcyon\MemoryRepository::forget($key);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return bool 
         * @static 
         */ 
        public static function flush()
        {
            return \October\Rain\Halcyon\MemoryRepository::flush();
        }
        
        /**
         * Retrieve an item from the internal memory cache without trying the external driver.
         * 
         * Used in testing
         *
         * @param $key
         * @return mixed 
         * @static 
         */ 
        public static function getFromMemoryCache($key)
        {
            return \October\Rain\Halcyon\MemoryRepository::getFromMemoryCache($key);
        }
        
        /**
         * Puts an item in the memory cache, but not in the external cache.
         * 
         * Used in testing
         *
         * @param $key
         * @param $value
         * @static 
         */ 
        public static function putInMemoryCache($key, $value)
        {
            return \October\Rain\Halcyon\MemoryRepository::putInMemoryCache($key, $value);
        }
        
        /**
         * Flushes the memory cache.
         * 
         * Calling this directly is generally only useful in testing.
         * Use flush() otherwise.
         *
         * @static 
         */ 
        public static function flushInternalCache()
        {
            return \October\Rain\Halcyon\MemoryRepository::flushInternalCache();
        }
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getPrefix()
        {
            return \October\Rain\Halcyon\MemoryRepository::getPrefix();
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::has($key);
        }
        
        /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function many($keys)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::many($keys);
        }
        
        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of keys that can obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function getMultiple($keys, $default = null)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::getMultiple($keys, $default);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::pull($key, $default);
        }
        
        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function set($key, $value, $ttl = null)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::set($key, $value, $ttl);
        }
        
        /**
         * Store multiple items in the cache for a given number of minutes.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return void 
         * @static 
         */ 
        public static function putMany($values, $minutes)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            \October\Rain\Halcyon\MemoryRepository::putMany($values, $minutes);
        }
        
        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                       the driver supports TTL then the library may set a default value
         *                                       for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static 
         */ 
        public static function setMultiple($values, $ttl = null)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::setMultiple($values, $ttl);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @return bool 
         * @static 
         */ 
        public static function add($key, $value, $minutes)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::add($key, $value, $minutes);
        }
        
        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTimeInterface|\DateInterval|float|int $minutes
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $minutes, $callback)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::remember($key, $minutes, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function sear($key, $callback)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rememberForever($key, $callback)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::rememberForever($key, $callback);
        }
        
        /**
         * Delete an item from the cache by its unique key.
         *
         * @param string $key The unique cache key of the item to delete.
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function delete($key)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::delete($key);
        }
        
        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param \Psr\SimpleCache\iterable $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function deleteMultiple($keys)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::deleteMultiple($keys);
        }
        
        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool True on success and false on failure.
         * @static 
         */ 
        public static function clear()
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::clear();
        }
        
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function tags($names)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::tags($names);
        }
        
        /**
         * Get the default cache time.
         *
         * @return float|int 
         * @static 
         */ 
        public static function getDefaultCacheTime()
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in minutes.
         *
         * @param float|int $minutes
         * @return $this 
         * @static 
         */ 
        public static function setDefaultCacheTime($minutes)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::setDefaultCacheTime($minutes);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */ 
        public static function getStore()
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::getStore();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            \October\Rain\Halcyon\MemoryRepository::setEventDispatcher($events);
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            \October\Rain\Halcyon\MemoryRepository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            \October\Rain\Halcyon\MemoryRepository::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            \October\Rain\Halcyon\MemoryRepository::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            \October\Rain\Halcyon\MemoryRepository::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            //Method inherited from \Illuminate\Cache\Repository            
            return \October\Rain\Halcyon\MemoryRepository::macroCall($method, $parameters);
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */ 
        public static function getFilesystem()
        {
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */ 
        public static function getDirectory()
        {
            return \Illuminate\Cache\FileStore::getDirectory();
        }
         
    }

    class Cookie {
        
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        
        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        
        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string $path
         * @param string $domain
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forget($name, $path = null, $domain = null)
        {
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasQueued($key)
        {
            return \Illuminate\Cookie\CookieJar::hasQueued($key);
        }
        
        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function queued($key, $default = null)
        {
            return \Illuminate\Cookie\CookieJar::queued($key, $default);
        }
        
        /**
         * Queue a cookie to send with the next response.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function queue($parameters = null)
        {
            \Illuminate\Cookie\CookieJar::queue($parameters);
        }
        
        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function unqueue($name)
        {
            \Illuminate\Cookie\CookieJar::unqueue($name);
        }
        
        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param string $sameSite
         * @return $this 
         * @static 
         */ 
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
        
        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[] 
         * @static 
         */ 
        public static function getQueuedCookies()
        {
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
         
    }

    class Crypt {
        
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool 
         * @static 
         */ 
        public static function supported($key, $cipher)
        {
            return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
        
        /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         * @return string 
         * @static 
         */ 
        public static function generateKey($cipher)
        {
            return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }
        
        /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
        public static function encrypt($value, $serialize = true)
        {
            return \Illuminate\Encryption\Encrypter::encrypt($value, $serialize);
        }
        
        /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function encryptString($value)
        {
            return \Illuminate\Encryption\Encrypter::encryptString($value);
        }
        
        /**
         * Decrypt the given value.
         *
         * @param mixed $payload
         * @param bool $unserialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
        public static function decrypt($payload, $unserialize = true)
        {
            return \Illuminate\Encryption\Encrypter::decrypt($payload, $unserialize);
        }
        
        /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         * @return string 
         * @static 
         */ 
        public static function decryptString($payload)
        {
            return \Illuminate\Encryption\Encrypter::decryptString($payload);
        }
        
        /**
         * Get the encryption key.
         *
         * @return string 
         * @static 
         */ 
        public static function getKey()
        {
            return \Illuminate\Encryption\Encrypter::getKey();
        }
         
    }

    class DB {
        
        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
        public static function supportedDrivers()
        {
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
        public static function availableDrivers()
        {
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function getConnections()
        {
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
         
    }

    class DB {
        
        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return array 
         * @static 
         */ 
        public static function supportedDrivers()
        {
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return array 
         * @static 
         */ 
        public static function availableDrivers()
        {
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */ 
        public static function getConnections()
        {
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function getSchemaBuilder()
        {
            return \October\Rain\Database\Connections\MySqlConnection::getSchemaBuilder();
        }
        
        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void 
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {
            \October\Rain\Database\Connections\MySqlConnection::bindValues($statement, $bindings);
        }
        
        /**
         * Get a new query builder instance.
         *
         * @return \October\Rain\Database\QueryBuilder 
         * @static 
         */ 
        public static function query()
        {
            //Method inherited from \October\Rain\Database\Connections\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::query();
        }
        
        /**
         * Flush the memory cache.
         *
         * @return void 
         * @static 
         */ 
        public static function flushDuplicateCache()
        {
            //Method inherited from \October\Rain\Database\Connections\Connection            
            \October\Rain\Database\Connections\MySqlConnection::flushDuplicateCache();
        }
        
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \October\Rain\Database\Connections\Connection            
            \October\Rain\Database\Connections\MySqlConnection::logQuery($query, $bindings, $time);
        }
        
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::useDefaultQueryGrammar();
        }
        
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::useDefaultPostProcessor();
        }
        
        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function table($table)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::table($table);
        }
        
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @static 
         */ 
        public static function selectOne($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::selectOne($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function select($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::select($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */ 
        public static function cursor($query, $bindings = array(), $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::cursor($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function insert($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::insert($query, $bindings);
        }
        
        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function update($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::update($query, $bindings);
        }
        
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function delete($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::delete($query, $bindings);
        }
        
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function statement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::statement($query, $bindings);
        }
        
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = array())
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::affectingStatement($query, $bindings);
        }
        
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */ 
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::unprepared($query);
        }
        
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */ 
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::pretend($callback);
        }
        
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::prepareBindings($bindings);
        }
        
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::listen($callback);
        }
        
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression 
         * @static 
         */ 
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::raw($value);
        }
        
        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::recordsHaveBeenModified($value);
        }
        
        /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::isDoctrineAvailable();
        }
        
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getDoctrineSchemaManager();
        }
        
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */ 
        public static function getDoctrineConnection()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getDoctrineConnection();
        }
        
        /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getPdo();
        }
        
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getReadPdo();
        }
        
        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return $this 
         * @static 
         */ 
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::setPdo($pdo);
        }
        
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return $this 
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::setReadPdo($pdo);
        }
        
        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return $this 
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::setReconnector($reconnector);
        }
        
        /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getName();
        }
        
        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed 
         * @static 
         */ 
        public static function getConfig($option = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getConfig($option);
        }
        
        /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getDriverName();
        }
        
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */ 
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getQueryGrammar();
        }
        
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::setQueryGrammar($grammar);
        }
        
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */ 
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getSchemaGrammar();
        }
        
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return void 
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */ 
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getPostProcessor();
        }
        
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return void 
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::setPostProcessor($processor);
        }
        
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::setEventDispatcher($events);
        }
        
        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool 
         * @static 
         */ 
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::pretending();
        }
        
        /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */ 
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getQueryLog();
        }
        
        /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */ 
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::flushQueryLog();
        }
        
        /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::enableQueryLog();
        }
        
        /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::disableQueryLog();
        }
        
        /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */ 
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::logging();
        }
        
        /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */ 
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getDatabaseName();
        }
        
        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return string 
         * @static 
         */ 
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::setDatabaseName($database);
        }
        
        /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getTablePrefix();
        }
        
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::setTablePrefix($prefix);
        }
        
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::withTablePrefix($grammar);
        }
        
        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::resolverFor($driver, $callback);
        }
        
        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function getResolver($driver)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::getResolver($driver);
        }
        
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::transaction($callback, $attempts);
        }
        
        /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::beginTransaction();
        }
        
        /**
         * Commit the active database transaction.
         *
         * @return void 
         * @static 
         */ 
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::commit();
        }
        
        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void 
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \October\Rain\Database\Connections\MySqlConnection::rollBack($toLevel);
        }
        
        /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */ 
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \October\Rain\Database\Connections\MySqlConnection::transactionLevel();
        }
         
    }

    class Event {
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param string|array $events
         * @param mixed $listener
         * @param int $priority
         * @return void 
         * @static 
         */ 
        public static function listen($events, $listener, $priority = 0)
        {
            \October\Rain\Events\Dispatcher::listen($events, $listener, $priority);
        }
        
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasListeners($eventName)
        {
            return \October\Rain\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param array $payload
         * @return void 
         * @static 
         */ 
        public static function push($event, $payload = array())
        {
            \October\Rain\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */ 
        public static function subscribe($subscriber)
        {
            \October\Rain\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function flush($event)
        {
            \October\Rain\Events\Dispatcher::flush($event);
        }
        
        /**
         * Get the event that is currently firing.
         *
         * @return string 
         * @static 
         */ 
        public static function firing()
        {
            return \October\Rain\Events\Dispatcher::firing();
        }
        
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return array|null 
         * @static 
         */ 
        public static function until($event, $payload = array())
        {
            return \October\Rain\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function fire($event, $payload = array(), $halt = false)
        {
            return \October\Rain\Events\Dispatcher::fire($event, $payload, $halt);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function dispatch($event, $payload = array(), $halt = false)
        {
            return \October\Rain\Events\Dispatcher::dispatch($event, $payload, $halt);
        }
        
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */ 
        public static function getListeners($eventName)
        {
            return \October\Rain\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param mixed $listener
         * @return mixed 
         * @static 
         */ 
        public static function makeListener($listener)
        {
            return \October\Rain\Events\Dispatcher::makeListener($listener);
        }
        
        /**
         * Create a class based listener using the IoC container.
         *
         * @param mixed $listener
         * @return \Closure 
         * @static 
         */ 
        public static function createClassListener($listener)
        {
            return \October\Rain\Events\Dispatcher::createClassListener($listener);
        }
        
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function forget($event)
        {
            \October\Rain\Events\Dispatcher::forget($event);
        }
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetPushed()
        {
            \October\Rain\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return $this 
         * @static 
         */ 
        public static function setQueueResolver($resolver)
        {
            return \October\Rain\Events\Dispatcher::setQueueResolver($resolver);
        }
         
    }

    class Hash {
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function make($value, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function check($value, $hashedValue, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function needsRehash($hashedValue, $options = array())
        {
            return \Illuminate\Hashing\BcryptHasher::needsRehash($hashedValue, $options);
        }
        
        /**
         * Set the default password work factor.
         *
         * @param int $rounds
         * @return $this 
         * @static 
         */ 
        public static function setRounds($rounds)
        {
            return \Illuminate\Hashing\BcryptHasher::setRounds($rounds);
        }
         
    }

    class Input {
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */ 
        public static function instance()
        {
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
        public static function method()
        {
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
        public static function root()
        {
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function url()
        {
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function fullUrl()
        {
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
            return \Illuminate\Http\Request::fullUrlWithQuery($query);
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function path()
        {
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function decodedPath()
        {
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
        public static function segments()
        {
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is($patterns = null)
        {
            return \Illuminate\Http\Request::is($patterns);
        }
        
        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function routeIs($patterns = null)
        {
            return \Illuminate\Http\Request::routeIs($patterns);
        }
        
        /**
         * Determine if the current request URL and query string matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function fullUrlIs($patterns = null)
        {
            return \Illuminate\Http\Request::fullUrlIs($patterns);
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function ajax()
        {
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function pjax()
        {
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
        public static function secure()
        {
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Get the client IP address.
         *
         * @return string 
         * @static 
         */ 
        public static function ip()
        {
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
        public static function ips()
        {
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Get the client user agent.
         *
         * @return string 
         * @static 
         */ 
        public static function userAgent()
        {
            return \Illuminate\Http\Request::userAgent();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function merge($input)
        {
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function replace($input)
        {
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed 
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static 
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function session()
        {
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void 
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
            \Illuminate\Http\Request::setLaravelSession($session);
        }
        
        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */ 
        public static function user($guard = null)
        {
            return \Illuminate\Http\Request::user($guard);
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */ 
        public static function route($param = null)
        {
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function fingerprint()
        {
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         * @return $this 
         * @static 
         */ 
        public static function setJson($json)
        {
            return \Illuminate\Http\Request::setJson($json);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getUserResolver()
        {
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getRouteResolver()
        {
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($offset)
        {
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($offset)
        {
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */ 
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static 
         * @static 
         */ 
        public static function createFromGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return static 
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */ 
        public static function setFactory($callable)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
         * @static 
         */ 
        public static function setTrustedProxies($proxies)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
         * @static 
         */ 
        public static function getTrustedProxies()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
         * @static 
         */ 
        public static function getTrustedHosts()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         *  * Request::HEADER_FORWARDED:    defaults to Forwarded         (see RFC 7239)
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the $trustedHeaderSet argument of the Request::setTrustedProxies() method instead.
         * @static 
         */ 
        public static function setTrustedHeaderName($key, $value)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the Request::getTrustedHeaderSet() method instead.
         * @static 
         */ 
        public static function getTrustedHeaderName($key)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key the key
         * @param mixed $default the default value if the parameter key does not exist
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */ 
        public static function getSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasPreviousSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */ 
        public static function hasSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */ 
        public static function setSession($session)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null The client IP address
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */ 
        public static function getScriptName()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getPathInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBasePath()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBaseUrl()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */ 
        public static function getScheme()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return int|string can be a string if fetched from the server bag
         * @static 
         */ 
        public static function getPort()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getUser()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getPassword()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */ 
        public static function getUserInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */ 
        public static function getHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */ 
        public static function getRequestUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */ 
        public static function getUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */ 
        public static function getQueryString()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return bool 
         * @static 
         */ 
        public static function isSecure()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return string 
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */ 
        public static function setMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string The associated mime type (null if not found)
         * @static 
         */ 
        public static function getMimeType($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the mime types associated with the format.
         *
         * @param string $format The format
         * @return array The associated mime types
         * @static 
         */ 
        public static function getMimeTypes($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeTypes($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */ 
        public static function getFormat($mimeType)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @param string $default The default format
         * @return string The request format
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @param string $format The request format
         * @static 
         */ 
        public static function setRequestFormat($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */ 
        public static function getContentType()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool 
         * @static 
         */ 
        public static function isMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
         * @return bool 
         * @static 
         */ 
        public static function isMethodSafe()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool 
         * @static 
         */ 
        public static function isMethodIdempotent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodIdempotent();
        }
        
        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @return bool 
         * @static 
         */ 
        public static function isMethodCacheable()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodCacheable();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream
         * @throws \LogicException
         * @static 
         */ 
        public static function getContent($asResource = false)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */ 
        public static function getETags()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */ 
        public static function isNoCache()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */ 
        public static function getLanguages()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */ 
        public static function getCharsets()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */ 
        public static function getEncodings()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
        /**
         * Indicates whether this request originated from a trusted proxy.
         * 
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool true if the request came from a trusted proxy, false otherwise
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isFromTrustedProxy();
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function isJson()
        {
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
        public static function expectsJson()
        {
            return \Illuminate\Http\Request::expectsJson();
        }
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */ 
        public static function wantsJson()
        {
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsJson()
        {
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsHtml()
        {
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function format($default = 'html')
        {
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flash()
        {
            \Illuminate\Http\Request::flash();
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashOnly($keys)
        {
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashExcept($keys)
        {
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasHeader($key)
        {
            return \Illuminate\Http\Request::hasHeader($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
        public static function bearerToken()
        {
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param mixed $key
         * @return bool 
         * @static 
         */ 
        public static function hasAny($keys = null)
        {
            return \Illuminate\Http\Request::hasAny($keys);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function filled($key)
        {
            return \Illuminate\Http\Request::filled($key);
        }
        
        /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
            return \Illuminate\Http\Request::keys();
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function all($keys = null)
        {
            return \Illuminate\Http\Request::all($keys);
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function except($keys)
        {
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Retrieve a request payload item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
            return \Illuminate\Http\Request::post($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasCookie($key)
        {
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
        public static function allFiles()
        {
            return \Illuminate\Http\Request::allFiles();
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasFile($key)
        {
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|array|null 
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Http\Request::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function validate($rules, $params = null)
        {
            return \Illuminate\Http\Request::validate($rules, $params);
        }
         
    }

    class Lang {
        
        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string $locale
         * @return bool 
         * @static 
         */ 
        public static function has($key, $locale = null)
        {
            return \October\Rain\Translation\Translator::has($key, $locale);
        }
        
        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function get($key, $replace = array(), $locale = null)
        {
            return \October\Rain\Translation\Translator::get($key, $replace, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param int $number
         * @param array $replace
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function choice($key, $number, $replace = array(), $locale = null)
        {
            return \October\Rain\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * Get the translation for a given key.
         *
         * @param string $id
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function trans($id, $parameters = array(), $domain = 'messages', $locale = null)
        {
            return \October\Rain\Translation\Translator::trans($id, $parameters, $domain, $locale);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $id
         * @param int $number
         * @param array $parameters
         * @param string $domain
         * @param string $locale
         * @return string 
         * @static 
         */ 
        public static function transChoice($id, $number, $parameters = array(), $domain = 'messages', $locale = null)
        {
            return \October\Rain\Translation\Translator::transChoice($id, $number, $parameters, $domain, $locale);
        }
        
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function load($namespace, $group, $locale)
        {
            \October\Rain\Translation\Translator::load($namespace, $group, $locale);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {
            \October\Rain\Translation\Translator::addNamespace($namespace, $hint);
        }
        
        /**
         * Get the message selector instance.
         *
         * @return \Symfony\Component\Translation\MessageSelector 
         * @static 
         */ 
        public static function getSelector()
        {
            return \October\Rain\Translation\Translator::getSelector();
        }
        
        /**
         * Set the message selector instance.
         *
         * @param \Symfony\Component\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */ 
        public static function setSelector($selector)
        {
            \October\Rain\Translation\Translator::setSelector($selector);
        }
        
        /**
         * Get the language line loader implementation.
         *
         * @return \October\Rain\Translation\LoaderInterface 
         * @static 
         */ 
        public static function getLoader()
        {
            return \October\Rain\Translation\Translator::getLoader();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function locale()
        {
            return \October\Rain\Translation\Translator::locale();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            return \October\Rain\Translation\Translator::getLocale();
        }
        
        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
            \October\Rain\Translation\Translator::setLocale($locale);
        }
        
        /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getFallback()
        {
            return \October\Rain\Translation\Translator::getFallback();
        }
        
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */ 
        public static function setFallback($fallback)
        {
            \October\Rain\Translation\Translator::setFallback($fallback);
        }
        
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {
            \October\Rain\Translation\Translator::setParsedKey($key, $parsed);
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseKey($key)
        {
            return \October\Rain\Translation\Translator::parseKey($key);
        }
         
    }

    class Log {
        
        /**
         * Adds a log record at the DEBUG level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function debug($message, $context = array())
        {
            return \Monolog\Logger::debug($message, $context);
        }
        
        /**
         * Adds a log record at the INFO level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function info($message, $context = array())
        {
            return \Monolog\Logger::info($message, $context);
        }
        
        /**
         * Adds a log record at the NOTICE level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function notice($message, $context = array())
        {
            return \Monolog\Logger::notice($message, $context);
        }
        
        /**
         * Adds a log record at the WARNING level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function warning($message, $context = array())
        {
            return \Monolog\Logger::warning($message, $context);
        }
        
        /**
         * Adds a log record at the ERROR level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function error($message, $context = array())
        {
            return \Monolog\Logger::error($message, $context);
        }
        
        /**
         * Adds a log record at the CRITICAL level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function critical($message, $context = array())
        {
            return \Monolog\Logger::critical($message, $context);
        }
        
        /**
         * Adds a log record at the ALERT level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function alert($message, $context = array())
        {
            return \Monolog\Logger::alert($message, $context);
        }
        
        /**
         * Adds a log record at the EMERGENCY level.
         *
         * @param string $message The log message
         * @param array $context The log context
         * @return Boolean Whether the record has been processed
         * @static 
         */ 
        public static function emergency($message, $context = array())
        {
            return \Monolog\Logger::emergency($message, $context);
        }
        
        /**
         * Log a message to the logs.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function log($level, $message, $context = array())
        {
            \Illuminate\Log\Writer::log($level, $message, $context);
        }
        
        /**
         * Dynamically pass log calls into the writer.
         *
         * @param string $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function write($level, $message, $context = array())
        {
            \Illuminate\Log\Writer::write($level, $message, $context);
        }
        
        /**
         * Register a file log handler.
         *
         * @param string $path
         * @param string $level
         * @return void 
         * @static 
         */ 
        public static function useFiles($path, $level = 'debug')
        {
            \Illuminate\Log\Writer::useFiles($path, $level);
        }
        
        /**
         * Register a daily file log handler.
         *
         * @param string $path
         * @param int $days
         * @param string $level
         * @return void 
         * @static 
         */ 
        public static function useDailyFiles($path, $days = 0, $level = 'debug')
        {
            \Illuminate\Log\Writer::useDailyFiles($path, $days, $level);
        }
        
        /**
         * Register a Syslog handler.
         *
         * @param string $name
         * @param string $level
         * @param mixed $facility
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function useSyslog($name = 'laravel', $level = 'debug', $facility = 8)
        {
            return \Illuminate\Log\Writer::useSyslog($name, $level, $facility);
        }
        
        /**
         * Register an error_log handler.
         *
         * @param string $level
         * @param int $messageType
         * @return void 
         * @static 
         */ 
        public static function useErrorLog($level = 'debug', $messageType = 0)
        {
            \Illuminate\Log\Writer::useErrorLog($level, $messageType);
        }
        
        /**
         * Register a new callback handler for when a log event is triggered.
         *
         * @param \Closure $callback
         * @return void 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function listen($callback)
        {
            \Illuminate\Log\Writer::listen($callback);
        }
        
        /**
         * Get the underlying Monolog instance.
         *
         * @return \Monolog\Logger 
         * @static 
         */ 
        public static function getMonolog()
        {
            return \Illuminate\Log\Writer::getMonolog();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            return \Illuminate\Log\Writer::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $dispatcher
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($dispatcher)
        {
            \Illuminate\Log\Writer::setEventDispatcher($dispatcher);
        }
         
    }

    class Mail {
        
        /**
         * Send a new message using a view.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */ 
        public static function send($view, $data = array(), $callback = null)
        {
            return \October\Rain\Mail\Mailer::send($view, $data, $callback);
        }
        
        /**
         * Helper for send() method, the first argument can take a single email or an
         * array of recipients where the key is the address and the value is the name.
         *
         * @param array $recipients
         * @param string|array $view
         * @param array $data
         * @param mixed $callback
         * @param array $options
         * @return void 
         * @static 
         */ 
        public static function sendTo($recipients, $view, $data = array(), $callback = null, $options = array())
        {
            \October\Rain\Mail\Mailer::sendTo($recipients, $view, $data, $callback, $options);
        }
        
        /**
         * Queue a new e-mail message for sending.
         *
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function queue($view, $data = null, $callback = null, $queue = null)
        {
            return \October\Rain\Mail\Mailer::queue($view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */ 
        public static function queueOn($queue, $view, $data = null, $callback = null)
        {
            return \October\Rain\Mail\Mailer::queueOn($queue, $view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $view, $data = null, $callback = null, $queue = null)
        {
            return \October\Rain\Mail\Mailer::later($delay, $view, $data, $callback, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds on the given queue.
         *
         * @param string $queue
         * @param int $delay
         * @param string|array $view
         * @param array $data
         * @param \Closure|string $callback
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $view, $data = null, $callback = null)
        {
            return \October\Rain\Mail\Mailer::laterOn($queue, $delay, $view, $data, $callback);
        }
        
        /**
         * Send a new message when only a raw text part.
         *
         * @param string $text
         * @param mixed $callback
         * @return int 
         * @static 
         */ 
        public static function raw($view, $callback)
        {
            return \October\Rain\Mail\Mailer::raw($view, $callback);
        }
        
        /**
         * Helper for raw() method, send a new message when only a raw text part.
         *
         * @param array $recipients
         * @param string $view
         * @param mixed $callback
         * @param array $options
         * @return int 
         * @static 
         */ 
        public static function rawTo($recipients, $view, $callback = null, $options = array())
        {
            return \October\Rain\Mail\Mailer::rawTo($recipients, $view, $callback, $options);
        }
        
        /**
         * Tell the mailer to not really send messages.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function pretend($value = true)
        {
            \October\Rain\Mail\Mailer::pretend($value);
        }
        
        /**
         * Set the global from address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysFrom($address, $name = null)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            \October\Rain\Mail\Mailer::alwaysFrom($address, $name);
        }
        
        /**
         * Set the global reply-to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysReplyTo($address, $name = null)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            \October\Rain\Mail\Mailer::alwaysReplyTo($address, $name);
        }
        
        /**
         * Set the global to address and name.
         *
         * @param string $address
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function alwaysTo($address, $name = null)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            \October\Rain\Mail\Mailer::alwaysTo($address, $name);
        }
        
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function to($users)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::to($users);
        }
        
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function bcc($users)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::bcc($users);
        }
        
        /**
         * Send a new message when only a plain part.
         *
         * @param string $view
         * @param array $data
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function plain($view, $data, $callback)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            \October\Rain\Mail\Mailer::plain($view, $data, $callback);
        }
        
        /**
         * Render the given message as a view.
         *
         * @param string|array $view
         * @param array $data
         * @return string 
         * @static 
         */ 
        public static function render($view, $data = array())
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::render($view, $data);
        }
        
        /**
         * Queue a new e-mail message for sending on the given queue.
         *
         * @param string $queue
         * @param string|array $view
         * @return mixed 
         * @static 
         */ 
        public static function onQueue($queue, $view)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::onQueue($queue, $view);
        }
        
        /**
         * Get the view factory instance.
         *
         * @return \Illuminate\Contracts\View\Factory 
         * @static 
         */ 
        public static function getViewFactory()
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::getViewFactory();
        }
        
        /**
         * Get the Swift Mailer instance.
         *
         * @return \Swift_Mailer 
         * @static 
         */ 
        public static function getSwiftMailer()
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::getSwiftMailer();
        }
        
        /**
         * Get the array of failed recipients.
         *
         * @return array 
         * @static 
         */ 
        public static function failures()
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::failures();
        }
        
        /**
         * Set the Swift Mailer instance.
         *
         * @param \Swift_Mailer $swift
         * @return void 
         * @static 
         */ 
        public static function setSwiftMailer($swift)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            \October\Rain\Mail\Mailer::setSwiftMailer($swift);
        }
        
        /**
         * Set the queue manager instance.
         *
         * @param \Illuminate\Contracts\Queue\Factory $queue
         * @return $this 
         * @static 
         */ 
        public static function setQueue($queue)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::setQueue($queue);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            \October\Rain\Mail\Mailer::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            \October\Rain\Mail\Mailer::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Mail\Mailer            
            return \October\Rain\Mail\Mailer::hasMacro($name);
        }
        
        /**
         * Create a new event binding.
         *
         * @return self 
         * @static 
         */ 
        public static function bindEvent($event, $callback, $priority = 0)
        {
            return \October\Rain\Mail\Mailer::bindEvent($event, $callback, $priority);
        }
        
        /**
         * Create a new event binding that fires once only
         *
         * @return self 
         * @static 
         */ 
        public static function bindEventOnce($event, $callback)
        {
            return \October\Rain\Mail\Mailer::bindEventOnce($event, $callback);
        }
        
        /**
         * Destroys an event binding.
         *
         * @param string $event Event to destroy
         * @return self 
         * @static 
         */ 
        public static function unbindEvent($event = null)
        {
            return \October\Rain\Mail\Mailer::unbindEvent($event);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string $event Event name
         * @param array $params Event parameters
         * @param boolean $halt Halt after first non-null result
         * @return array Collection of event results / Or single result (if halted)
         * @static 
         */ 
        public static function fireEvent($event, $params = array(), $halt = false)
        {
            return \October\Rain\Mail\Mailer::fireEvent($event, $params, $halt);
        }
         
    }

    class Queue {
        
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \Illuminate\Queue\QueueManager::before($callback);
        }
        
        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \Illuminate\Queue\QueueManager::after($callback);
        }
        
        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function exceptionOccurred($callback)
        {
            \Illuminate\Queue\QueueManager::exceptionOccurred($callback);
        }
        
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function looping($callback)
        {
            \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function failing($callback)
        {
            \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function stopping($callback)
        {
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * Determine if the driver is connected.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function connected($name = null)
        {
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * Resolve a queue connection instance.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addConnector($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * Get the full name for the given connection.
         *
         * @param string $connection
         * @return string 
         * @static 
         */ 
        public static function getName($connection = null)
        {
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * Determine if the application is in maintenance mode.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
            return \Illuminate\Queue\QueueManager::isDownForMaintenance();
        }
        
        /**
         * Get the size of the queue.
         *
         * @param string $queue
         * @return int 
         * @static 
         */ 
        public static function size($queue = null)
        {
            return \Illuminate\Queue\SyncQueue::size($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @throws \Exception|\Throwable
         * @static 
         */ 
        public static function push($job, $data = '', $queue = null)
        {
            return \Illuminate\Queue\SyncQueue::push($job, $data, $queue);
        }
        
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string $queue
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function pushRaw($payload, $queue = null, $options = array())
        {
            return \Illuminate\Queue\SyncQueue::pushRaw($payload, $queue, $options);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string $job
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $job, $data = '', $queue = null)
        {
            return \Illuminate\Queue\SyncQueue::later($delay, $job, $data, $queue);
        }
        
        /**
         * Pop the next job off of the queue.
         *
         * @param string $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */ 
        public static function pop($queue = null)
        {
            return \Illuminate\Queue\SyncQueue::pop($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function pushOn($queue, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::pushOn($queue, $job, $data);
        }
        
        /**
         * Push a new job onto the queue after a delay.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string $queue
         * @return mixed 
         * @static 
         */ 
        public static function bulk($jobs, $data = '', $queue = null)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::bulk($jobs, $data, $queue);
        }
        
        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed 
         * @static 
         */ 
        public static function getJobExpiration($job)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getJobExpiration($job);
        }
        
        /**
         * Get the connection name for the queue.
         *
         * @return string 
         * @static 
         */ 
        public static function getConnectionName()
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getConnectionName();
        }
        
        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return $this 
         * @static 
         */ 
        public static function setConnectionName($name)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::setConnectionName($name);
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
         
    }

    class Redirect {
        
        /**
         * Create a new redirect response to the "home" route.
         *
         * @param int $status
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function home($status = 302)
        {
            return \Illuminate\Routing\Redirector::home($status);
        }
        
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function back($status = 302, $headers = array(), $fallback = false)
        {
            return \Illuminate\Routing\Redirector::back($status, $headers, $fallback);
        }
        
        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function refresh($status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function guest($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function intended($default = '/', $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function to($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function away($path, $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function secure($path, $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function route($route, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function action($action, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function getUrlGenerator()
        {
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
        
        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void 
         * @static 
         */ 
        public static function setSession($session)
        {
            \Illuminate\Routing\Redirector::setSession($session);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Redirector::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\Redirector::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Redirector::hasMacro($name);
        }
         
    }

    class Request {
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return $this 
         * @static 
         */ 
        public static function instance()
        {
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
        public static function method()
        {
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
        public static function root()
        {
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function url()
        {
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function fullUrl()
        {
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
            return \Illuminate\Http\Request::fullUrlWithQuery($query);
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function path()
        {
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function decodedPath()
        {
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
        public static function segments()
        {
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is($patterns = null)
        {
            return \Illuminate\Http\Request::is($patterns);
        }
        
        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function routeIs($patterns = null)
        {
            return \Illuminate\Http\Request::routeIs($patterns);
        }
        
        /**
         * Determine if the current request URL and query string matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function fullUrlIs($patterns = null)
        {
            return \Illuminate\Http\Request::fullUrlIs($patterns);
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function ajax()
        {
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of an PJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function pjax()
        {
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
        public static function secure()
        {
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Get the client IP address.
         *
         * @return string 
         * @static 
         */ 
        public static function ip()
        {
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
        public static function ips()
        {
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Get the client user agent.
         *
         * @return string 
         * @static 
         */ 
        public static function userAgent()
        {
            return \Illuminate\Http\Request::userAgent();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function merge($input)
        {
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function replace($input)
        {
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed 
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @return static 
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Session\Store 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function session()
        {
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void 
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
            \Illuminate\Http\Request::setLaravelSession($session);
        }
        
        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */ 
        public static function user($guard = null)
        {
            return \Illuminate\Http\Request::user($guard);
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @return \Illuminate\Routing\Route|object|string 
         * @static 
         */ 
        public static function route($param = null)
        {
            return \Illuminate\Http\Request::route($param);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function fingerprint()
        {
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         * @return $this 
         * @static 
         */ 
        public static function setJson($json)
        {
            return \Illuminate\Http\Request::setJson($json);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getUserResolver()
        {
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getRouteResolver()
        {
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($offset)
        {
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($offset)
        {
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource $content The raw body data
         * @static 
         */ 
        public static function initialize($query = array(), $request = array(), $attributes = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @return static 
         * @static 
         */ 
        public static function createFromGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string $content The raw body data
         * @return static 
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @param callable|null $callable A PHP callable
         * @static 
         */ 
        public static function setFactory($callable)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static 
         */ 
        public static function overrideGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
         * @static 
         */ 
        public static function setTrustedProxies($proxies)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedProxies($proxies);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return array An array of trusted proxies
         * @static 
         */ 
        public static function getTrustedProxies()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return array An array of trusted host patterns
         * @static 
         */ 
        public static function getTrustedHosts()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Sets the name for trusted headers.
         * 
         * The following header keys are supported:
         * 
         *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
         *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getHost())
         *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getPort())
         *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
         *  * Request::HEADER_FORWARDED:    defaults to Forwarded         (see RFC 7239)
         * 
         * Setting an empty value allows to disable the trusted header for the given key.
         *
         * @param string $key The header key
         * @param string $value The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the $trustedHeaderSet argument of the Request::setTrustedProxies() method instead.
         * @static 
         */ 
        public static function setTrustedHeaderName($key, $value)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setTrustedHeaderName($key, $value);
        }
        
        /**
         * Gets the trusted proxy header name.
         *
         * @param string $key The header key
         * @return string The header name
         * @throws \InvalidArgumentException
         * @deprecated since version 3.3, to be removed in 4.0. Use the Request::getTrustedHeaderSet() method instead.
         * @static 
         */ 
        public static function getTrustedHeaderName($key)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderName($key);
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @param string $qs Query string
         * @return string A normalized query string for the Request
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @return bool True when the _method request parameter is enabled, false otherwise
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Gets a "parameter" value from any bag.
         * 
         * This method is mainly useful for libraries that want to provide some flexibility. If you don't need the
         * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
         * public property instead (attributes, query, request).
         * 
         * Order of precedence: PATH (routing placeholders or custom attributes), GET, BODY
         *
         * @param string $key the key
         * @param mixed $default the default value if the parameter key does not exist
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Gets the Session.
         *
         * @return \Symfony\Component\HttpFoundation\SessionInterface|null The session
         * @static 
         */ 
        public static function getSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasPreviousSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @return bool true when the Request contains a Session object, false otherwise
         * @static 
         */ 
        public static function hasSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasSession();
        }
        
        /**
         * Sets the Session.
         *
         * @param \Symfony\Component\HttpFoundation\SessionInterface $session The Session
         * @static 
         */ 
        public static function setSession($session)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @return array The client IP addresses
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return string|null The client IP address
         * @see getClientIps()
         * @see http://en.wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @return string 
         * @static 
         */ 
        public static function getScriptName()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getPathInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBasePath()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBaseUrl()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @return string 
         * @static 
         */ 
        public static function getScheme()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Port",
         * configure it via via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return int|string can be a string if fetched from the server bag
         * @static 
         */ 
        public static function getPort()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getUser()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getPassword()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */ 
        public static function getUserInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @return string 
         * @static 
         */ 
        public static function getHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */ 
        public static function getRequestUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @return string The scheme and HTTP host
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @return string A normalized URI (URL) for the Request
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @return string The normalized URI for the path
         * @static 
         */ 
        public static function getUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @param string $path The target path
         * @return string The relative target path
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @return string|null A normalized query string for the Request
         * @static 
         */ 
        public static function getQueryString()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
         * ("SSL_HTTPS" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @return bool 
         * @static 
         */ 
        public static function isSecure()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-Host",
         * configure it via the $trustedHeaderSet argument of the
         * Request::setTrustedProxies() method instead.
         *
         * @return string 
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @param string $method
         * @static 
         */ 
        public static function setMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @return string The request method
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @return string The request method
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @param string $format The format
         * @return string The associated mime type (null if not found)
         * @static 
         */ 
        public static function getMimeType($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the mime types associated with the format.
         *
         * @param string $format The format
         * @return array The associated mime types
         * @static 
         */ 
        public static function getMimeTypes($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeTypes($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @param string $mimeType The associated mime type
         * @return string|null The format (null if not found)
         * @static 
         */ 
        public static function getFormat($mimeType)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string $format The format
         * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @param string $default The default format
         * @return string The request format
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @param string $format The request format
         * @static 
         */ 
        public static function setRequestFormat($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the format associated with the request.
         *
         * @return string|null The format (null if no content type is present)
         * @static 
         */ 
        public static function getContentType()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Sets the default locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @param string $locale
         * @static 
         */ 
        public static function setLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @return bool 
         * @static 
         */ 
        public static function isMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
         * @return bool 
         * @static 
         */ 
        public static function isMethodSafe()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Checks whether or not the method is idempotent.
         *
         * @return bool 
         * @static 
         */ 
        public static function isMethodIdempotent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodIdempotent();
        }
        
        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @return bool 
         * @static 
         */ 
        public static function isMethodCacheable()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodCacheable();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource The request body content or a resource to read the body stream
         * @throws \LogicException
         * @static 
         */ 
        public static function getContent($asResource = false)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the Etags.
         *
         * @return array The entity tags
         * @static 
         */ 
        public static function getETags()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @return bool 
         * @static 
         */ 
        public static function isNoCache()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Returns the preferred language.
         *
         * @param array $locales An array of ordered available locales
         * @return string|null The preferred locale
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser.
         *
         * @return array Languages ordered in the user browser preferences
         * @static 
         */ 
        public static function getLanguages()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser.
         *
         * @return array List of charsets in preferable order
         * @static 
         */ 
        public static function getCharsets()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser.
         *
         * @return array List of encodings in preferable order
         * @static 
         */ 
        public static function getEncodings()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser.
         *
         * @return array List of content types in preferable order
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is a XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @return bool true if the request is an XMLHttpRequest, false otherwise
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
        /**
         * Indicates whether this request originated from a trusted proxy.
         * 
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @return bool true if the request came from a trusted proxy, false otherwise
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isFromTrustedProxy();
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function isJson()
        {
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
        public static function expectsJson()
        {
            return \Illuminate\Http\Request::expectsJson();
        }
        
        /**
         * Determine if the current request is asking for JSON in return.
         *
         * @return bool 
         * @static 
         */ 
        public static function wantsJson()
        {
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsJson()
        {
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsHtml()
        {
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function format($default = 'html')
        {
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flash()
        {
            \Illuminate\Http\Request::flash();
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashOnly($keys)
        {
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashExcept($keys)
        {
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasHeader($key)
        {
            return \Illuminate\Http\Request::hasHeader($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
        public static function bearerToken()
        {
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param mixed $key
         * @return bool 
         * @static 
         */ 
        public static function hasAny($keys = null)
        {
            return \Illuminate\Http\Request::hasAny($keys);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function filled($key)
        {
            return \Illuminate\Http\Request::filled($key);
        }
        
        /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
            return \Illuminate\Http\Request::keys();
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function all($keys = null)
        {
            return \Illuminate\Http\Request::all($keys);
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function except($keys)
        {
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Retrieve a request payload item from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
            return \Illuminate\Http\Request::post($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasCookie($key)
        {
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string $key
         * @param string|array|null $default
         * @return string|array 
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
        public static function allFiles()
        {
            return \Illuminate\Http\Request::allFiles();
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasFile($key)
        {
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|array|null 
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Http\Request::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function validate($rules, $params = null)
        {
            return \Illuminate\Http\Request::validate($rules, $params);
        }
         
    }

    class Response {
        
        /**
         * Return a new response from the application.
         *
         * @param string $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function make($content = '', $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * Return a new view response from the application.
         *
         * @param string $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function view($view, $data = array(), $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * Return a new JSON response from the application.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function json($data = array(), $status = 200, $headers = array(), $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * Return a new JSONP response from the application.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function jsonp($callback, $data = array(), $status = 200, $headers = array(), $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * Return a new streamed response from the application.
         *
         * @param \Closure $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function stream($callback, $status = 200, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function download($file, $name = null, $headers = array(), $disposition = 'attachment')
        {
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function file($file, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::file($file, $headers);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectTo($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToRoute($route, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param array $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToAction($action, $parameters = array(), $status = 302, $headers = array())
        {
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToIntended($default = '/', $status = 302, $headers = array(), $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\ResponseFactory::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
         
    }

    class Route {
        
        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function dispatch($request)
        {
            return \October\Rain\Router\CoreRouter::dispatch($request);
        }
        
        /**
         * Register a new "before" filter with the router.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \October\Rain\Router\CoreRouter::before($callback);
        }
        
        /**
         * Register a new "after" filter with the router.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \October\Rain\Router\CoreRouter::after($callback);
        }
        
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function get($uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::get($uri, $action);
        }
        
        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function post($uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::post($uri, $action);
        }
        
        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function put($uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::put($uri, $action);
        }
        
        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function patch($uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::patch($uri, $action);
        }
        
        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function delete($uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::delete($uri, $action);
        }
        
        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function options($uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::options($uri, $action);
        }
        
        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function any($uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::any($uri, $action);
        }
        
        /**
         * Register a new Fallback route with the router.
         *
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function fallback($action)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::fallback($action);
        }
        
        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function redirect($uri, $destination, $status = 301)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::redirect($uri, $destination, $status);
        }
        
        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function view($uri, $view, $data = array())
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::view($uri, $view, $data);
        }
        
        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param \Closure|array|string|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function match($methods, $uri, $action = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::match($methods, $uri, $action);
        }
        
        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */ 
        public static function resources($resources)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::resources($resources);
        }
        
        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function resource($name, $controller, $options = array())
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::resource($name, $controller, $options);
        }
        
        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @return void 
         * @static 
         */ 
        public static function apiResources($resources)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::apiResources($resources);
        }
        
        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function apiResource($name, $controller, $options = array())
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::apiResource($name, $controller, $options);
        }
        
        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|string $routes
         * @return void 
         * @static 
         */ 
        public static function group($attributes, $routes)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::group($attributes, $routes);
        }
        
        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @return array 
         * @static 
         */ 
        public static function mergeWithLastGroup($new)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::mergeWithLastGroup($new);
        }
        
        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */ 
        public static function getLastGroupPrefix()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getLastGroupPrefix();
        }
        
        /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return mixed 
         * @static 
         */ 
        public static function respondWithRoute($name)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::respondWithRoute($name);
        }
        
        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return mixed 
         * @static 
         */ 
        public static function dispatchToRoute($request)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::dispatchToRoute($request);
        }
        
        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array 
         * @static 
         */ 
        public static function gatherRouteMiddleware($route)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::gatherRouteMiddleware($route);
        }
        
        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function prepareResponse($request, $response)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::prepareResponse($request, $response);
        }
        
        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function toResponse($request, $response)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::toResponse($request, $response);
        }
        
        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function substituteBindings($route)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::substituteBindings($route);
        }
        
        /**
         * Substitute the implicit Eloquent model bindings for the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void 
         * @static 
         */ 
        public static function substituteImplicitBindings($route)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::substituteImplicitBindings($route);
        }
        
        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function matched($callback)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::matched($callback);
        }
        
        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddleware()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getMiddleware();
        }
        
        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return $this 
         * @static 
         */ 
        public static function aliasMiddleware($name, $class)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::aliasMiddleware($name, $class);
        }
        
        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMiddlewareGroup($name)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::hasMiddlewareGroup($name);
        }
        
        /**
         * Get all of the defined middleware groups.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddlewareGroups()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getMiddlewareGroups();
        }
        
        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return $this 
         * @static 
         */ 
        public static function middlewareGroup($name, $middleware)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::middlewareGroup($name, $middleware);
        }
        
        /**
         * Add a middleware to the beginning of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return $this 
         * @static 
         */ 
        public static function prependMiddlewareToGroup($group, $middleware)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::prependMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Add a middleware to the end of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return $this 
         * @static 
         */ 
        public static function pushMiddlewareToGroup($group, $middleware)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::pushMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */ 
        public static function bind($key, $binder)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::bind($key, $binder);
        }
        
        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
         * @static 
         */ 
        public static function model($key, $class, $callback = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::model($key, $class, $callback);
        }
        
        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return \Closure|null 
         * @static 
         */ 
        public static function getBindingCallback($key)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getBindingCallback($key);
        }
        
        /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */ 
        public static function getPatterns()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getPatterns();
        }
        
        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void 
         * @static 
         */ 
        public static function pattern($key, $pattern)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::pattern($key, $pattern);
        }
        
        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void 
         * @static 
         */ 
        public static function patterns($patterns)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::patterns($patterns);
        }
        
        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasGroupStack()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::hasGroupStack();
        }
        
        /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */ 
        public static function getGroupStack()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getGroupStack();
        }
        
        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function input($key, $default = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::input($key, $default);
        }
        
        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getCurrentRequest()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getCurrentRequest();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function getCurrentRoute()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getCurrentRoute();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function current()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::current();
        }
        
        /**
         * Check if a route with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function has($name)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::has($name);
        }
        
        /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteName()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::currentRouteName();
        }
        
        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is($patterns = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::is($patterns);
        }
        
        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function currentRouteNamed($patterns = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::currentRouteNamed($patterns);
        }
        
        /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteAction()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::currentRouteAction();
        }
        
        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         * @return bool 
         * @static 
         */ 
        public static function uses($patterns = null)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::uses($patterns);
        }
        
        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool 
         * @static 
         */ 
        public static function currentRouteUses($action)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::currentRouteUses($action);
        }
        
        /**
         * Register the typical authentication routes for an application.
         *
         * @return void 
         * @static 
         */ 
        public static function auth()
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::auth();
        }
        
        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void 
         * @static 
         */ 
        public static function singularResourceParameters($singular = true)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::singularResourceParameters($singular);
        }
        
        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function resourceParameters($parameters = array())
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::resourceParameters($parameters);
        }
        
        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null 
         * @static 
         */ 
        public static function resourceVerbs($verbs = array())
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::resourceVerbs($verbs);
        }
        
        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollection 
         * @static 
         */ 
        public static function getRoutes()
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::getRoutes();
        }
        
        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void 
         * @static 
         */ 
        public static function setRoutes($routes)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::setRoutes($routes);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            //Method inherited from \Illuminate\Routing\Router            
            \October\Rain\Router\CoreRouter::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::hasMacro($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            //Method inherited from \Illuminate\Routing\Router            
            return \October\Rain\Router\CoreRouter::macroCall($method, $parameters);
        }
         
    }

    class Session {
        
        /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */ 
        public static function getSessionConfig()
        {
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool 
         * @static 
         */ 
        public static function start()
        {
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * Save the session data to storage.
         *
         * @return bool 
         * @static 
         */ 
        public static function save()
        {
            return \Illuminate\Session\Store::save();
        }
        
        /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */ 
        public static function ageFlashData()
        {
            \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * Get all of the session data.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * Checks if a key exists.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
            return \Illuminate\Session\Store::exists($key);
        }
        
        /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Session\Store::has($key);
        }
        
        /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Session\Store::get($key, $default);
        }
        
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * Determine if the session contains old input.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasOldInput($key = null)
        {
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function getOldInput($key = null, $default = null)
        {
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void 
         * @static 
         */ 
        public static function replace($attributes)
        {
            \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function put($key, $value = null)
        {
            \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $callback)
        {
            return \Illuminate\Session\Store::remember($key, $callback);
        }
        
        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
            \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed 
         * @static 
         */ 
        public static function increment($key, $amount = 1)
        {
            return \Illuminate\Session\Store::increment($key, $amount);
        }
        
        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int 
         * @static 
         */ 
        public static function decrement($key, $amount = 1)
        {
            return \Illuminate\Session\Store::decrement($key, $amount);
        }
        
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function flash($key, $value = true)
        {
            \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function now($key, $value)
        {
            \Illuminate\Session\Store::now($key, $value);
        }
        
        /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */ 
        public static function reflash()
        {
            \Illuminate\Session\Store::reflash();
        }
        
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function keep($keys = null)
        {
            \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */ 
        public static function flashInput($value)
        {
            \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function remove($key)
        {
            return \Illuminate\Session\Store::remove($key);
        }
        
        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */ 
        public static function forget($keys)
        {
            \Illuminate\Session\Store::forget($keys);
        }
        
        /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Session\Store::flush();
        }
        
        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool 
         * @static 
         */ 
        public static function invalidate()
        {
            return \Illuminate\Session\Store::invalidate();
        }
        
        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function regenerate($destroy = false)
        {
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function migrate($destroy = false)
        {
            return \Illuminate\Session\Store::migrate($destroy);
        }
        
        /**
         * Determine if the session has been started.
         *
         * @return bool 
         * @static 
         */ 
        public static function isStarted()
        {
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * Get the name of the session.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setName($name)
        {
            \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * Get the current session ID.
         *
         * @return string 
         * @static 
         */ 
        public static function getId()
        {
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * Set the session ID.
         *
         * @param string $id
         * @return void 
         * @static 
         */ 
        public static function setId($id)
        {
            \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * Determine if this is a valid session ID.
         *
         * @param string $id
         * @return bool 
         * @static 
         */ 
        public static function isValidId($id)
        {
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function setExists($value)
        {
            \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */ 
        public static function regenerateToken()
        {
            \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */ 
        public static function previousUrl()
        {
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */ 
        public static function setPreviousUrl($url)
        {
            \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */ 
        public static function getHandler()
        {
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */ 
        public static function handlerNeedsRequest()
        {
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequestOnHandler($request)
        {
            \Illuminate\Session\Store::setRequestOnHandler($request);
        }
         
    }

    class Storage {
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function drive($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function disk($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function cloud()
        {
            return \Illuminate\Filesystem\FilesystemManager::cloud();
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createLocalDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createFtpDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createS3Driver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create an instance of the Rackspace driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createRackspaceDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver($config);
        }
        
        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return void 
         * @static 
         */ 
        public static function set($name, $disk)
        {
            \Illuminate\Filesystem\FilesystemManager::set($name, $disk);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Get the default cloud driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultCloudDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver();
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
        /**
         * Assert that the given file exists.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertExists($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertExists($path);
        }
        
        /**
         * Assert that the given file does not exist.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function assertMissing($path)
        {
            \Illuminate\Filesystem\FilesystemAdapter::assertMissing($path);
        }
        
        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::exists($path);
        }
        
        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function path($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::path($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::get($path);
        }
        
        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function response($path, $name = null, $headers = array(), $disposition = 'inline')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::response($path, $name, $headers, $disposition);
        }
        
        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array|null $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function download($path, $name = null, $headers = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::download($path, $name, $headers);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string|resource $contents
         * @param mixed $options
         * @return bool 
         * @static 
         */ 
        public static function put($path, $contents, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $options);
        }
        
        /**
         * Store the uploaded file on the disk.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFile($path, $file, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFile($path, $file, $options);
        }
        
        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile $file
         * @param string $name
         * @param array $options
         * @return string|false 
         * @static 
         */ 
        public static function putFileAs($path, $file, $name, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFileAs($path, $file, $name, $options);
        }
        
        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getVisibility($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getVisibility($path);
        }
        
        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return void 
         * @static 
         */ 
        public static function setVisibility($path, $visibility)
        {
            \Illuminate\Filesystem\FilesystemAdapter::setVisibility($path, $visibility);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::prepend($path, $data, $separator);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return int 
         * @static 
         */ 
        public static function append($path, $data, $separator = '')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::append($path, $data, $separator);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::delete($paths);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function copy($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::copy($from, $to);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function move($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::move($from, $to);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::size($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::mimeType($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::lastModified($path);
        }
        
        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function url($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::url($path);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function temporaryUrl($path, $expiration, $options = array())
        {
            return \Illuminate\Filesystem\FilesystemAdapter::temporaryUrl($path, $expiration, $options);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\AwsS3v3\AwsS3Adapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getAwsTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getAwsTemporaryUrl($adapter, $path, $expiration, $options);
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param \League\Flysystem\Rackspace\RackspaceAdapter $adapter
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function getRackspaceTemporaryUrl($adapter, $path, $expiration, $options)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getRackspaceTemporaryUrl($adapter, $path, $expiration, $options);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function files($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::files($directory, $recursive);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allFiles($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allFiles($directory);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function directories($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::directories($directory, $recursive);
        }
        
        /**
         * Get all (recursive) of the directories within a given directory.
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allDirectories($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allDirectories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::makeDirectory($path);
        }
        
        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory($directory);
        }
        
        /**
         * Flush the Flysystem cache.
         *
         * @return void 
         * @static 
         */ 
        public static function flushCache()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushCache();
        }
        
        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemInterface 
         * @static 
         */ 
        public static function getDriver()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getDriver();
        }
         
    }

    class URL {
        
        /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */ 
        public static function full()
        {
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function current()
        {
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */ 
        public static function previous($fallback = false)
        {
            return \Illuminate\Routing\UrlGenerator::previous($fallback);
        }
        
        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function to($path, $extra = array(), $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string 
         * @static 
         */ 
        public static function secure($path, $parameters = array())
        {
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function asset($path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function secureAsset($path)
        {
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function assetFrom($root, $path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
        }
        
        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function formatScheme($secure)
        {
            return \Illuminate\Routing\UrlGenerator::formatScheme($secure);
        }
        
        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function route($name, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * Get the URL to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function action($action, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array 
         * @static 
         */ 
        public static function formatParameters($parameters)
        {
            return \Illuminate\Routing\UrlGenerator::formatParameters($parameters);
        }
        
        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string $root
         * @return string 
         * @static 
         */ 
        public static function formatRoot($scheme, $root = null)
        {
            return \Illuminate\Routing\UrlGenerator::formatRoot($scheme, $root);
        }
        
        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function format($root, $path)
        {
            return \Illuminate\Routing\UrlGenerator::format($root, $path);
        }
        
        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isValidUrl($path)
        {
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void 
         * @static 
         */ 
        public static function defaults($defaults)
        {
            \Illuminate\Routing\UrlGenerator::defaults($defaults);
        }
        
        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array 
         * @static 
         */ 
        public static function getDefaultParameters()
        {
            return \Illuminate\Routing\UrlGenerator::getDefaultParameters();
        }
        
        /**
         * Force the scheme for URLs.
         *
         * @param string $schema
         * @return void 
         * @static 
         */ 
        public static function forceScheme($schema)
        {
            \Illuminate\Routing\UrlGenerator::forceScheme($schema);
        }
        
        /**
         * Set the forced root URL.
         *
         * @param string $root
         * @return void 
         * @static 
         */ 
        public static function forceRootUrl($root)
        {
            \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function formatHostUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatHostUsing($callback);
        }
        
        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function formatPathUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatPathUsing($callback);
        }
        
        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function pathFormatter()
        {
            return \Illuminate\Routing\UrlGenerator::pathFormatter();
        }
        
        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getRequest()
        {
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequest($request)
        {
            \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return $this 
         * @static 
         */ 
        public static function setRoutes($routes)
        {
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return $this 
         * @static 
         */ 
        public static function setSessionResolver($sessionResolver)
        {
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
        
        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return $this 
         * @static 
         */ 
        public static function setRootControllerNamespace($rootNamespace)
        {
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\UrlGenerator::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
         
    }

    class URL {
        
        /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */ 
        public static function full()
        {
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function current()
        {
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */ 
        public static function previous($fallback = false)
        {
            return \Illuminate\Routing\UrlGenerator::previous($fallback);
        }
        
        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function to($path, $extra = array(), $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string 
         * @static 
         */ 
        public static function secure($path, $parameters = array())
        {
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function asset($path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function secureAsset($path)
        {
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function assetFrom($root, $path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
        }
        
        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function formatScheme($secure)
        {
            return \Illuminate\Routing\UrlGenerator::formatScheme($secure);
        }
        
        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function route($name, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * Get the URL to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function action($action, $parameters = array(), $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array 
         * @static 
         */ 
        public static function formatParameters($parameters)
        {
            return \Illuminate\Routing\UrlGenerator::formatParameters($parameters);
        }
        
        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string $root
         * @return string 
         * @static 
         */ 
        public static function formatRoot($scheme, $root = null)
        {
            return \Illuminate\Routing\UrlGenerator::formatRoot($scheme, $root);
        }
        
        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function format($root, $path)
        {
            return \Illuminate\Routing\UrlGenerator::format($root, $path);
        }
        
        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isValidUrl($path)
        {
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void 
         * @static 
         */ 
        public static function defaults($defaults)
        {
            \Illuminate\Routing\UrlGenerator::defaults($defaults);
        }
        
        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array 
         * @static 
         */ 
        public static function getDefaultParameters()
        {
            return \Illuminate\Routing\UrlGenerator::getDefaultParameters();
        }
        
        /**
         * Force the scheme for URLs.
         *
         * @param string $schema
         * @return void 
         * @static 
         */ 
        public static function forceScheme($schema)
        {
            \Illuminate\Routing\UrlGenerator::forceScheme($schema);
        }
        
        /**
         * Set the forced root URL.
         *
         * @param string $root
         * @return void 
         * @static 
         */ 
        public static function forceRootUrl($root)
        {
            \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function formatHostUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatHostUsing($callback);
        }
        
        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return $this 
         * @static 
         */ 
        public static function formatPathUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatPathUsing($callback);
        }
        
        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function pathFormatter()
        {
            return \Illuminate\Routing\UrlGenerator::pathFormatter();
        }
        
        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getRequest()
        {
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequest($request)
        {
            \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return $this 
         * @static 
         */ 
        public static function setRoutes($routes)
        {
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return $this 
         * @static 
         */ 
        public static function setSessionResolver($sessionResolver)
        {
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
        
        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return $this 
         * @static 
         */ 
        public static function setRootControllerNamespace($rootNamespace)
        {
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \Illuminate\Routing\UrlGenerator::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
         
    }

    class Validator {
        
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */ 
        public static function make($data, $rules, $messages = array(), $customAttributes = array())
        {
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $customAttributes
         * @return void 
         * @throws \Illuminate\Validation\ValidationException
         * @static 
         */ 
        public static function validate($data, $rules, $messages = array(), $customAttributes = array())
        {
            \Illuminate\Validation\Factory::validate($data, $rules, $messages, $customAttributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extend($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendImplicit($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string $message
         * @return void 
         * @static 
         */ 
        public static function extendDependent($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendDependent($rule, $extension, $message);
        }
        
        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */ 
        public static function replacer($rule, $replacer)
        {
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function resolver($resolver)
        {
            \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator 
         * @static 
         */ 
        public static function getTranslator()
        {
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */ 
        public static function getPresenceVerifier()
        {
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */ 
        public static function setPresenceVerifier($presenceVerifier)
        {
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
         
    }

    class View {
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function file($path, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::file($path, $data, $mergeData);
        }
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function make($view, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }
        
        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function first($views, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::first($views, $data, $mergeData);
        }
        
        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param array $data
         * @param array $mergeData
         * @return string 
         * @static 
         */ 
        public static function renderWhen($condition, $view, $data = array(), $mergeData = array())
        {
            return \Illuminate\View\Factory::renderWhen($condition, $view, $data, $mergeData);
        }
        
        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string 
         * @static 
         */ 
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
        
        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool 
         * @static 
         */ 
        public static function exists($view)
        {
            return \Illuminate\View\Factory::exists($view);
        }
        
        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\Contracts\View\Engine 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function getEngineFromPath($path)
        {
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }
        
        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed $value
         * @return mixed 
         * @static 
         */ 
        public static function share($key, $value = null)
        {
            return \Illuminate\View\Factory::share($key, $value);
        }
        
        /**
         * Increment the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementRender()
        {
            \Illuminate\View\Factory::incrementRender();
        }
        
        /**
         * Decrement the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function decrementRender()
        {
            \Illuminate\View\Factory::decrementRender();
        }
        
        /**
         * Check if there are no active render operations.
         *
         * @return bool 
         * @static 
         */ 
        public static function doneRendering()
        {
            return \Illuminate\View\Factory::doneRendering();
        }
        
        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void 
         * @static 
         */ 
        public static function addLocation($location)
        {
            \Illuminate\View\Factory::addLocation($location);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
        public static function addNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }
        
        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
        public static function prependNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }
        
        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return $this 
         * @static 
         */ 
        public static function replaceNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::replaceNamespace($namespace, $hints);
        }
        
        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addExtension($extension, $engine, $resolver = null)
        {
            \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }
        
        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushState()
        {
            \Illuminate\View\Factory::flushState();
        }
        
        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStateIfDoneRendering()
        {
            \Illuminate\View\Factory::flushStateIfDoneRendering();
        }
        
        /**
         * Get the extension to engine bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getExtensions()
        {
            return \Illuminate\View\Factory::getExtensions();
        }
        
        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver 
         * @static 
         */ 
        public static function getEngineResolver()
        {
            return \Illuminate\View\Factory::getEngineResolver();
        }
        
        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface 
         * @static 
         */ 
        public static function getFinder()
        {
            return \Illuminate\View\Factory::getFinder();
        }
        
        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void 
         * @static 
         */ 
        public static function setFinder($finder)
        {
            \Illuminate\View\Factory::setFinder($finder);
        }
        
        /**
         * Flush the cache of views located by the finder.
         *
         * @return void 
         * @static 
         */ 
        public static function flushFinderCache()
        {
            \Illuminate\View\Factory::flushFinderCache();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getDispatcher()
        {
            return \Illuminate\View\Factory::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setDispatcher($events)
        {
            \Illuminate\View\Factory::setDispatcher($events);
        }
        
        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
            return \Illuminate\View\Factory::getContainer();
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            \Illuminate\View\Factory::setContainer($container);
        }
        
        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function shared($key, $default = null)
        {
            return \Illuminate\View\Factory::shared($key, $default);
        }
        
        /**
         * Get all of the shared data for the environment.
         *
         * @return array 
         * @static 
         */ 
        public static function getShared()
        {
            return \Illuminate\View\Factory::getShared();
        }
        
        /**
         * Start a component rendering process.
         *
         * @param string $name
         * @param array $data
         * @return void 
         * @static 
         */ 
        public static function startComponent($name, $data = array())
        {
            \Illuminate\View\Factory::startComponent($name, $data);
        }
        
        /**
         * Render the current component.
         *
         * @return string 
         * @static 
         */ 
        public static function renderComponent()
        {
            return \Illuminate\View\Factory::renderComponent();
        }
        
        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @return void 
         * @static 
         */ 
        public static function slot($name, $content = null)
        {
            \Illuminate\View\Factory::slot($name, $content);
        }
        
        /**
         * Save the slot content for rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function endSlot()
        {
            \Illuminate\View\Factory::endSlot();
        }
        
        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function creator($views, $callback)
        {
            return \Illuminate\View\Factory::creator($views, $callback);
        }
        
        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array 
         * @static 
         */ 
        public static function composers($composers)
        {
            return \Illuminate\View\Factory::composers($composers);
        }
        
        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function composer($views, $callback)
        {
            return \Illuminate\View\Factory::composer($views, $callback);
        }
        
        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callComposer($view)
        {
            \Illuminate\View\Factory::callComposer($view);
        }
        
        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callCreator($view)
        {
            \Illuminate\View\Factory::callCreator($view);
        }
        
        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void 
         * @static 
         */ 
        public static function startSection($section, $content = null)
        {
            \Illuminate\View\Factory::startSection($section, $content);
        }
        
        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function inject($section, $content)
        {
            \Illuminate\View\Factory::inject($section, $content);
        }
        
        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string 
         * @static 
         */ 
        public static function yieldSection()
        {
            return \Illuminate\View\Factory::yieldSection();
        }
        
        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopSection($overwrite = false)
        {
            return \Illuminate\View\Factory::stopSection($overwrite);
        }
        
        /**
         * Stop injecting content into a section and append it.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function appendSection()
        {
            return \Illuminate\View\Factory::appendSection();
        }
        
        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldContent($section, $default = '')
        {
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }
        
        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         * @return string 
         * @static 
         */ 
        public static function parentPlaceholder($section = '')
        {
            return \Illuminate\View\Factory::parentPlaceholder($section);
        }
        
        /**
         * Check if section exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasSection($name)
        {
            return \Illuminate\View\Factory::hasSection($name);
        }
        
        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string $default
         * @return mixed 
         * @static 
         */ 
        public static function getSection($name, $default = null)
        {
            return \Illuminate\View\Factory::getSection($name, $default);
        }
        
        /**
         * Get the entire array of sections.
         *
         * @return array 
         * @static 
         */ 
        public static function getSections()
        {
            return \Illuminate\View\Factory::getSections();
        }
        
        /**
         * Flush all of the sections.
         *
         * @return void 
         * @static 
         */ 
        public static function flushSections()
        {
            \Illuminate\View\Factory::flushSections();
        }
        
        /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
         * @return void 
         * @static 
         */ 
        public static function addLoop($data)
        {
            \Illuminate\View\Factory::addLoop($data);
        }
        
        /**
         * Increment the top loop's indices.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementLoopIndices()
        {
            \Illuminate\View\Factory::incrementLoopIndices();
        }
        
        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void 
         * @static 
         */ 
        public static function popLoop()
        {
            \Illuminate\View\Factory::popLoop();
        }
        
        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null 
         * @static 
         */ 
        public static function getLastLoop()
        {
            return \Illuminate\View\Factory::getLastLoop();
        }
        
        /**
         * Get the entire loop stack.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoopStack()
        {
            return \Illuminate\View\Factory::getLoopStack();
        }
        
        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPush($section, $content = '')
        {
            \Illuminate\View\Factory::startPush($section, $content);
        }
        
        /**
         * Stop injecting content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPush()
        {
            return \Illuminate\View\Factory::stopPush();
        }
        
        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPrepend($section, $content = '')
        {
            \Illuminate\View\Factory::startPrepend($section, $content);
        }
        
        /**
         * Stop prepending content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPrepend()
        {
            return \Illuminate\View\Factory::stopPrepend();
        }
        
        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldPushContent($section, $default = '')
        {
            return \Illuminate\View\Factory::yieldPushContent($section, $default);
        }
        
        /**
         * Flush all of the stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStacks()
        {
            \Illuminate\View\Factory::flushStacks();
        }
        
        /**
         * Start a translation block.
         *
         * @param array $replacements
         * @return void 
         * @static 
         */ 
        public static function startTranslation($replacements = array())
        {
            \Illuminate\View\Factory::startTranslation($replacements);
        }
        
        /**
         * Render the current translation.
         *
         * @return string 
         * @static 
         */ 
        public static function renderTranslation()
        {
            return \Illuminate\View\Factory::renderTranslation();
        }
         
    }
 
}

namespace October\Rain\Database { 

    class Model {
         
    }
 
}

namespace October\Rain\Support\Facades { 

    class Block {
        
        /**
         * Helper for startBlock
         *
         * @param string $name Specifies the block name.
         * @return void 
         * @static 
         */ 
        public static function put($name)
        {
            \October\Rain\Html\BlockBuilder::put($name);
        }
        
        /**
         * Begins the layout block.
         *
         * @param string $name Specifies the block name.
         * @static 
         */ 
        public static function startBlock($name)
        {
            return \October\Rain\Html\BlockBuilder::startBlock($name);
        }
        
        /**
         * Helper for endBlock and also clears the output buffer.
         *
         * @param boolean $append Indicates that the new content should be appended to the existing block content.
         * @return void 
         * @static 
         */ 
        public static function endPut($append = false)
        {
            \October\Rain\Html\BlockBuilder::endPut($append);
        }
        
        /**
         * Closes the layout block.
         *
         * @param boolean $append Indicates that the new content should be appended to the existing block content.
         * @static 
         */ 
        public static function endBlock($append = false)
        {
            return \October\Rain\Html\BlockBuilder::endBlock($append);
        }
        
        /**
         * Sets a content of the layout block.
         *
         * @param string $name Specifies the block name.
         * @param string $content Specifies the block content.
         * @static 
         */ 
        public static function set($name, $content)
        {
            return \October\Rain\Html\BlockBuilder::set($name, $content);
        }
        
        /**
         * Appends a content of the layout block.
         *
         * @param string $name Specifies the block name.
         * @param string $content Specifies the block content.
         * @static 
         */ 
        public static function append($name, $content)
        {
            return \October\Rain\Html\BlockBuilder::append($name, $content);
        }
        
        /**
         * Returns the layout block contents and deletes the block from memory.
         *
         * @param string $name Specifies the block name.
         * @param string $default Specifies a default block value to use if the block requested is not exists.
         * @return string 
         * @static 
         */ 
        public static function placeholder($name, $default = null)
        {
            return \October\Rain\Html\BlockBuilder::placeholder($name, $default);
        }
        
        /**
         * Returns the layout block contents but not deletes the block from memory.
         *
         * @param string $name Specifies the block name.
         * @param string $default Specifies a default block value to use if the block requested is not exists.
         * @return string 
         * @static 
         */ 
        public static function get($name, $default = null)
        {
            return \October\Rain\Html\BlockBuilder::get($name, $default);
        }
        
        /**
         * Clears all the registered blocks.
         *
         * @return void 
         * @static 
         */ 
        public static function reset()
        {
            \October\Rain\Html\BlockBuilder::reset();
        }
         
    }

    class File {
        
        /**
         * Determine if the given path contains no files.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function isDirectoryEmpty($directory)
        {
            return \October\Rain\Filesystem\Filesystem::isDirectoryEmpty($directory);
        }
        
        /**
         * Converts a file size in bytes to human readable format.
         *
         * @param int $bytes
         * @return string 
         * @static 
         */ 
        public static function sizeToString($bytes)
        {
            return \October\Rain\Filesystem\Filesystem::sizeToString($bytes);
        }
        
        /**
         * Returns a public file path from an absolute one
         * eg: /home/mysite/public_html/welcome -> /welcome
         *
         * @param string $path Absolute path
         * @return string 
         * @static 
         */ 
        public static function localToPublic($path)
        {
            return \October\Rain\Filesystem\Filesystem::localToPublic($path);
        }
        
        /**
         * Returns true if the specified path is within the path of the application
         *
         * @param string $path The path to
         * @param boolean $realpath Default true, uses realpath() to resolve the provided path before checking location. Set to false if you need to check if a potentially non-existent path would be within the application path
         * @return boolean 
         * @static 
         */ 
        public static function isLocalPath($path, $realpath = true)
        {
            return \October\Rain\Filesystem\Filesystem::isLocalPath($path, $realpath);
        }
        
        /**
         * Finds the path to a class
         *
         * @param mixed $className Class name or object
         * @return string The file path
         * @static 
         */ 
        public static function fromClass($className)
        {
            return \October\Rain\Filesystem\Filesystem::fromClass($className);
        }
        
        /**
         * Determine if a file exists with case insensitivity
         * supported for the file only.
         *
         * @param string $path
         * @return mixed Sensitive path or false
         * @static 
         */ 
        public static function existsInsensitive($path)
        {
            return \October\Rain\Filesystem\Filesystem::existsInsensitive($path);
        }
        
        /**
         * Normalizes the directory separator, often used by Win systems.
         *
         * @param string $path Path name
         * @return string Normalized path
         * @static 
         */ 
        public static function normalizePath($path)
        {
            return \October\Rain\Filesystem\Filesystem::normalizePath($path);
        }
        
        /**
         * Converts a path using path symbol. Returns the original path if
         * no symbol is used and no default is specified.
         *
         * @param string $path
         * @param mixed $default
         * @return string 
         * @static 
         */ 
        public static function symbolizePath($path, $default = false)
        {
            return \October\Rain\Filesystem\Filesystem::symbolizePath($path, $default);
        }
        
        /**
         * Returns true if the path uses a symbol.
         *
         * @param string $path
         * @return boolean 
         * @static 
         */ 
        public static function isPathSymbol($path)
        {
            return \October\Rain\Filesystem\Filesystem::isPathSymbol($path);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @return int 
         * @static 
         */ 
        public static function put($path, $contents, $lock = false)
        {
            return \October\Rain\Filesystem\Filesystem::put($path, $contents, $lock);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function copy($path, $target)
        {
            return \October\Rain\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path, $mode = 511, $recursive = false, $force = false)
        {
            return \October\Rain\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * Modify file/folder permissions
         *
         * @param string $path
         * @param \October\Rain\Filesystem\octal $mask
         * @return void 
         * @static 
         */ 
        public static function chmod($path, $mask = null)
        {
            \October\Rain\Filesystem\Filesystem::chmod($path, $mask);
        }
        
        /**
         * Modify file/folder permissions recursively
         *
         * @param string $path
         * @param \October\Rain\Filesystem\octal $fileMask
         * @param \October\Rain\Filesystem\octal $directoryMask
         * @return void 
         * @static 
         */ 
        public static function chmodRecursive($path, $fileMask = null, $directoryMask = null)
        {
            \October\Rain\Filesystem\Filesystem::chmodRecursive($path, $fileMask, $directoryMask);
        }
        
        /**
         * Returns the default file permission mask to use.
         *
         * @return string Permission mask as octal (0777) or null
         * @static 
         */ 
        public static function getFilePermissions()
        {
            return \October\Rain\Filesystem\Filesystem::getFilePermissions();
        }
        
        /**
         * Returns the default folder permission mask to use.
         *
         * @return string Permission mask as octal (0777) or null
         * @static 
         */ 
        public static function getFolderPermissions()
        {
            return \October\Rain\Filesystem\Filesystem::getFolderPermissions();
        }
        
        /**
         * Match filename against a pattern.
         *
         * @param string|array $fileName
         * @param string $pattern
         * @return bool 
         * @static 
         */ 
        public static function fileNameMatch($fileName, $pattern)
        {
            return \October\Rain\Filesystem\Filesystem::fileNameMatch($fileName, $pattern);
        }
        
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path, $lock = false)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::get($path, $lock);
        }
        
        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function sharedGet($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::sharedGet($path);
        }
        
        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function getRequire($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::getRequire($path);
        }
        
        /**
         * Require the given file once.
         *
         * @param string $file
         * @return mixed 
         * @static 
         */ 
        public static function requireOnce($file)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::requireOnce($file);
        }
        
        /**
         * Get the MD5 hash of the file at the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function hash($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::hash($path);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function append($path, $data)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function move($path, $target)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * Create a hard link to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @return void 
         * @static 
         */ 
        public static function link($target, $link)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            \October\Rain\Filesystem\Filesystem::link($target, $link);
        }
        
        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function name($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::name($path);
        }
        
        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function basename($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::basename($path);
        }
        
        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function dirname($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::dirname($path);
        }
        
        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function extension($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function type($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::type($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::mimeType($path);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::size($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function isDirectory($directory)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isReadable($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::isReadable($path);
        }
        
        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isWritable($path)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool 
         * @static 
         */ 
        public static function isFile($file)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array 
         * @static 
         */ 
        public static function glob($pattern, $flags = 0)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function files($directory, $hidden = false)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::files($directory, $hidden);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function allFiles($directory, $hidden = false)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::allFiles($directory, $hidden);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */ 
        public static function directories($directory)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool 
         * @static 
         */ 
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::moveDirectory($from, $to, $overwrite);
        }
        
        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int $options
         * @return bool 
         * @static 
         */ 
        public static function copyDirectory($directory, $destination, $options = null)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory, $preserve = false)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function cleanDirectory($directory)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            \October\Rain\Filesystem\Filesystem::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            \October\Rain\Filesystem\Filesystem::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Filesystem\Filesystem            
            return \October\Rain\Filesystem\Filesystem::hasMacro($name);
        }
         
    }

    class Config {
        
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \October\Rain\Config\Repository::has($key);
        }
        
        /**
         * Determine if a configuration group exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasGroup($key)
        {
            return \October\Rain\Config\Repository::hasGroup($key);
        }
        
        /**
         * Get the specified configuration value.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \October\Rain\Config\Repository::get($key, $default);
        }
        
        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function set($key, $value = null)
        {
            \October\Rain\Config\Repository::set($key, $value);
        }
        
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function prepend($key, $value)
        {
            \October\Rain\Config\Repository::prepend($key, $value);
        }
        
        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
            \October\Rain\Config\Repository::push($key, $value);
        }
        
        /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            return \October\Rain\Config\Repository::all();
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseConfigKey($key)
        {
            return \October\Rain\Config\Repository::parseConfigKey($key);
        }
        
        /**
         * Register a package for cascading configuration.
         *
         * @param string $namespace
         * @param string $hint
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function package($namespace, $hint)
        {
            \October\Rain\Config\Repository::package($namespace, $hint);
        }
        
        /**
         * Register an after load callback for a given namespace.
         *
         * @param string $namespace
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterLoading($namespace, $callback)
        {
            \October\Rain\Config\Repository::afterLoading($namespace, $callback);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {
            \October\Rain\Config\Repository::addNamespace($namespace, $hint);
        }
        
        /**
         * Returns all registered namespaces with the config
         * loader.
         *
         * @return array 
         * @static 
         */ 
        public static function getNamespaces()
        {
            return \October\Rain\Config\Repository::getNamespaces();
        }
        
        /**
         * Get the loader implementation.
         *
         * @return \October\Rain\Config\LoaderInterface 
         * @static 
         */ 
        public static function getLoader()
        {
            return \October\Rain\Config\Repository::getLoader();
        }
        
        /**
         * Set the loader implementation.
         *
         * @param \October\Rain\Config\LoaderInterface $loader
         * @return void 
         * @static 
         */ 
        public static function setLoader($loader)
        {
            \October\Rain\Config\Repository::setLoader($loader);
        }
        
        /**
         * Get the current configuration environment.
         *
         * @return string 
         * @static 
         */ 
        public static function getEnvironment()
        {
            return \October\Rain\Config\Repository::getEnvironment();
        }
        
        /**
         * Get the after load callback array.
         *
         * @return array 
         * @static 
         */ 
        public static function getAfterLoadCallbacks()
        {
            return \October\Rain\Config\Repository::getAfterLoadCallbacks();
        }
        
        /**
         * Get all of the configuration items.
         *
         * @return array 
         * @static 
         */ 
        public static function getItems()
        {
            return \October\Rain\Config\Repository::getItems();
        }
        
        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            return \October\Rain\Config\Repository::offsetExists($key);
        }
        
        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            return \October\Rain\Config\Repository::offsetGet($key);
        }
        
        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            \October\Rain\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            \October\Rain\Config\Repository::offsetUnset($key);
        }
        
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {
            \October\Rain\Config\Repository::setParsedKey($key, $parsed);
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseKey($key)
        {
            return \October\Rain\Config\Repository::parseKey($key);
        }
         
    }

    class Flash {
        
        /**
         * Checks to see if any message is available.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {
            return \October\Rain\Flash\FlashBag::check();
        }
        
        /**
         * Get first message for every key in the bag.
         *
         * @param string|null $format
         * @return array 
         * @static 
         */ 
        public static function all($format = null)
        {
            return \October\Rain\Flash\FlashBag::all($format);
        }
        
        /**
         * Gets all the flash messages of a given type.
         *
         * @param string $key
         * @param string|null $format
         * @return array 
         * @static 
         */ 
        public static function get($key, $format = null)
        {
            return \October\Rain\Flash\FlashBag::get($key, $format);
        }
        
        /**
         * Gets / Sets an error message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function error($message = null)
        {
            return \October\Rain\Flash\FlashBag::error($message);
        }
        
        /**
         * Sets Gets / a success message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function success($message = null)
        {
            return \October\Rain\Flash\FlashBag::success($message);
        }
        
        /**
         * Gets / Sets a warning message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function warning($message = null)
        {
            return \October\Rain\Flash\FlashBag::warning($message);
        }
        
        /**
         * Gets / Sets a information message
         *
         * @param string|null $message
         * @return array|\October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function info($message = null)
        {
            return \October\Rain\Flash\FlashBag::info($message);
        }
        
        /**
         * Add a message to the bag and stores it in the session.
         *
         * @param string $key
         * @param string $message
         * @return \October\Rain\Flash\FlashBag 
         * @static 
         */ 
        public static function add($key, $message)
        {
            return \October\Rain\Flash\FlashBag::add($key, $message);
        }
        
        /**
         * Stores the flash data to the session.
         *
         * @static 
         */ 
        public static function store()
        {
            return \October\Rain\Flash\FlashBag::store();
        }
        
        /**
         * Removes an object with a specified key or erases the flash data.
         *
         * @param string $key Specifies a key to remove, optional
         * @static 
         */ 
        public static function forget($key = null)
        {
            return \October\Rain\Flash\FlashBag::forget($key);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function purge()
        {
            return \October\Rain\Flash\FlashBag::purge();
        }
        
        /**
         * Get the keys present in the message bag.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::keys();
        }
        
        /**
         * Merge a new array of messages into the bag.
         *
         * @param \Illuminate\Contracts\Support\MessageProvider|array $messages
         * @return $this 
         * @static 
         */ 
        public static function merge($messages)
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::merge($messages);
        }
        
        /**
         * Determine if messages exist for all of the given keys.
         *
         * @param array|string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::has($key);
        }
        
        /**
         * Determine if messages exist for any of the given keys.
         *
         * @param array|string $keys
         * @return bool 
         * @static 
         */ 
        public static function hasAny($keys = array())
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::hasAny($keys);
        }
        
        /**
         * Get the first message from the bag for a given key.
         *
         * @param string $key
         * @param string $format
         * @return string 
         * @static 
         */ 
        public static function first($key = null, $format = null)
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::first($key, $format);
        }
        
        /**
         * Get all of the unique messages for every key in the bag.
         *
         * @param string $format
         * @return array 
         * @static 
         */ 
        public static function unique($format = null)
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::unique($format);
        }
        
        /**
         * Get the raw messages in the container.
         *
         * @return array 
         * @static 
         */ 
        public static function messages()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::messages();
        }
        
        /**
         * Get the raw messages in the container.
         *
         * @return array 
         * @static 
         */ 
        public static function getMessages()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::getMessages();
        }
        
        /**
         * Get the messages for the instance.
         *
         * @return \Illuminate\Support\MessageBag 
         * @static 
         */ 
        public static function getMessageBag()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::getMessageBag();
        }
        
        /**
         * Get the default message format.
         *
         * @return string 
         * @static 
         */ 
        public static function getFormat()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::getFormat();
        }
        
        /**
         * Set the default message format.
         *
         * @param string $format
         * @return \Illuminate\Support\MessageBag 
         * @static 
         */ 
        public static function setFormat($format = ':message')
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::setFormat($format);
        }
        
        /**
         * Determine if the message bag has any messages.
         *
         * @return bool 
         * @static 
         */ 
        public static function isEmpty()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::isEmpty();
        }
        
        /**
         * Determine if the message bag has any messages.
         *
         * @return bool 
         * @static 
         */ 
        public static function isNotEmpty()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::isNotEmpty();
        }
        
        /**
         * Determine if the message bag has any messages.
         *
         * @return bool 
         * @static 
         */ 
        public static function any()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::any();
        }
        
        /**
         * Get the number of messages in the container.
         *
         * @return int 
         * @static 
         */ 
        public static function count()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::count();
        }
        
        /**
         * Get the instance as an array.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::toArray();
        }
        
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array 
         * @static 
         */ 
        public static function jsonSerialize()
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::jsonSerialize();
        }
        
        /**
         * Convert the object to its JSON representation.
         *
         * @param int $options
         * @return string 
         * @static 
         */ 
        public static function toJson($options = 0)
        {
            //Method inherited from \Illuminate\Support\MessageBag            
            return \October\Rain\Flash\FlashBag::toJson($options);
        }
         
    }

    class Form {
        
        /**
         * Open up a new HTML form and includes a session key.
         *
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function open($options = array())
        {
            return \October\Rain\Html\FormBuilder::open($options);
        }
        
        /**
         * Helper for opening a form used for an AJAX call.
         *
         * @param string $handler Request handler name, eg: onUpdate
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function ajax($handler, $options = array())
        {
            return \October\Rain\Html\FormBuilder::ajax($handler, $options);
        }
        
        /**
         * Create a new model based form builder.
         *
         * @param mixed $model
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function model($model, $options = array())
        {
            return \October\Rain\Html\FormBuilder::model($model, $options);
        }
        
        /**
         * Set the model instance on the form builder.
         *
         * @param mixed $model
         * @return void 
         * @static 
         */ 
        public static function setModel($model)
        {
            \October\Rain\Html\FormBuilder::setModel($model);
        }
        
        /**
         * Close the current form.
         *
         * @return string 
         * @static 
         */ 
        public static function close()
        {
            return \October\Rain\Html\FormBuilder::close();
        }
        
        /**
         * Generate a hidden field with the current CSRF token.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
            return \October\Rain\Html\FormBuilder::token();
        }
        
        /**
         * Create a form label element.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function label($name, $value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::label($name, $value, $options);
        }
        
        /**
         * Create a form input field.
         *
         * @param string $type
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function input($type, $name, $value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::input($type, $name, $value, $options);
        }
        
        /**
         * Create a text input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function text($name, $value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::text($name, $value, $options);
        }
        
        /**
         * Create a password input field.
         *
         * @param string $name
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function password($name, $options = array())
        {
            return \October\Rain\Html\FormBuilder::password($name, $options);
        }
        
        /**
         * Create a hidden input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function hidden($name, $value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::hidden($name, $value, $options);
        }
        
        /**
         * Create an e-mail input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function email($name, $value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::email($name, $value, $options);
        }
        
        /**
         * Create a url input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function url($name, $value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::url($name, $value, $options);
        }
        
        /**
         * Create a file input field.
         *
         * @param string $name
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function file($name, $options = array())
        {
            return \October\Rain\Html\FormBuilder::file($name, $options);
        }
        
        /**
         * Create a textarea input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function textarea($name, $value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::textarea($name, $value, $options);
        }
        
        /**
         * Create a select box field with empty option support.
         *
         * @param string $name
         * @param array $list
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function select($name, $list = array(), $selected = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::select($name, $list, $selected, $options);
        }
        
        /**
         * Create a select range field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function selectRange($name, $begin, $end, $selected = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
        }
        
        /**
         * Create a select year field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function selectYear()
        {
            return \October\Rain\Html\FormBuilder::selectYear();
        }
        
        /**
         * Create a select month field.
         *
         * @param string $name
         * @param string $selected
         * @param array $options
         * @param string $format
         * @return string 
         * @static 
         */ 
        public static function selectMonth($name, $selected = null, $options = array(), $format = '%B')
        {
            return \October\Rain\Html\FormBuilder::selectMonth($name, $selected, $options, $format);
        }
        
        /**
         * Get the select option for the given value.
         *
         * @param string $display
         * @param string $value
         * @param string $selected
         * @return string 
         * @static 
         */ 
        public static function getSelectOption($display, $value, $selected)
        {
            return \October\Rain\Html\FormBuilder::getSelectOption($display, $value, $selected);
        }
        
        /**
         * Create a checkbox input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function checkbox($name, $value = 1, $checked = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::checkbox($name, $value, $checked, $options);
        }
        
        /**
         * Create a radio button input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function radio($name, $value = null, $checked = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::radio($name, $value, $checked, $options);
        }
        
        /**
         * Create a HTML reset input element.
         *
         * @param string $value
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function reset($value, $attributes = array())
        {
            return \October\Rain\Html\FormBuilder::reset($value, $attributes);
        }
        
        /**
         * Create a HTML image input element.
         *
         * @param string $url
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function image($url, $name = null, $attributes = array())
        {
            return \October\Rain\Html\FormBuilder::image($url, $name, $attributes);
        }
        
        /**
         * Create a submit button element.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function submit($value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::submit($value, $options);
        }
        
        /**
         * Create a button element.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function button($value = null, $options = array())
        {
            return \October\Rain\Html\FormBuilder::button($value, $options);
        }
        
        /**
         * Get the ID attribute for a field name.
         *
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function getIdAttribute($name, $attributes)
        {
            return \October\Rain\Html\FormBuilder::getIdAttribute($name, $attributes);
        }
        
        /**
         * Get the value that should be assigned to the field.
         *
         * @param string $name
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function getValueAttribute($name, $value = null)
        {
            return \October\Rain\Html\FormBuilder::getValueAttribute($name, $value);
        }
        
        /**
         * Get a value from the session's old input.
         *
         * @param string $name
         * @return string 
         * @static 
         */ 
        public static function old($name)
        {
            return \October\Rain\Html\FormBuilder::old($name);
        }
        
        /**
         * Determine if the old input is empty.
         *
         * @return bool 
         * @static 
         */ 
        public static function oldInputIsEmpty()
        {
            return \October\Rain\Html\FormBuilder::oldInputIsEmpty();
        }
        
        /**
         * Get the session store implementation.
         *
         * @return \Illuminate\Session\Store $session
         * @static 
         */ 
        public static function getSessionStore()
        {
            return \October\Rain\Html\FormBuilder::getSessionStore();
        }
        
        /**
         * Set the session store implementation.
         *
         * @param \Illuminate\Session\Store $session
         * @return $this 
         * @static 
         */ 
        public static function setSessionStore($session)
        {
            return \October\Rain\Html\FormBuilder::setSessionStore($session);
        }
        
        /**
         * Helper for getting form values. Tries to find the old value,
         * then uses a postback/get value, then looks at the form model values.
         *
         * @param string $name
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function value($name, $value = null)
        {
            return \October\Rain\Html\FormBuilder::value($name, $value);
        }
        
        /**
         * Returns a hidden HTML input, supplying the session key value.
         *
         * @return string 
         * @static 
         */ 
        public static function sessionKey($sessionKey = null)
        {
            return \October\Rain\Html\FormBuilder::sessionKey($sessionKey);
        }
        
        /**
         * Returns the active session key, used fr deferred bindings.
         *
         * @return string 
         * @static 
         */ 
        public static function getSessionKey()
        {
            return \October\Rain\Html\FormBuilder::getSessionKey();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \October\Rain\Html\FormBuilder::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \October\Rain\Html\FormBuilder::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \October\Rain\Html\FormBuilder::hasMacro($name);
        }
         
    }

    class Html {
        
        /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function entities($value)
        {
            return \October\Rain\Html\HtmlBuilder::entities($value);
        }
        
        /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function decode($value)
        {
            return \October\Rain\Html\HtmlBuilder::decode($value);
        }
        
        /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function script($url, $attributes = array(), $secure = null)
        {
            return \October\Rain\Html\HtmlBuilder::script($url, $attributes, $secure);
        }
        
        /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function style($url, $attributes = array(), $secure = null)
        {
            return \October\Rain\Html\HtmlBuilder::style($url, $attributes, $secure);
        }
        
        /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function image($url, $alt = null, $attributes = array(), $secure = null)
        {
            return \October\Rain\Html\HtmlBuilder::image($url, $alt, $attributes, $secure);
        }
        
        /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function link($url, $title = null, $attributes = array(), $secure = null)
        {
            return \October\Rain\Html\HtmlBuilder::link($url, $title, $attributes, $secure);
        }
        
        /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function secureLink($url, $title = null, $attributes = array())
        {
            return \October\Rain\Html\HtmlBuilder::secureLink($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @return string 
         * @static 
         */ 
        public static function linkAsset($url, $title = null, $attributes = array(), $secure = null)
        {
            return \October\Rain\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure);
        }
        
        /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function linkSecureAsset($url, $title = null, $attributes = array())
        {
            return \October\Rain\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes);
        }
        
        /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function linkRoute($name, $title = null, $parameters = array(), $attributes = array())
        {
            return \October\Rain\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function linkAction($action, $title = null, $parameters = array(), $attributes = array())
        {
            return \October\Rain\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes);
        }
        
        /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function mailto($email, $title = null, $attributes = array())
        {
            return \October\Rain\Html\HtmlBuilder::mailto($email, $title, $attributes);
        }
        
        /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string 
         * @static 
         */ 
        public static function email($email)
        {
            return \October\Rain\Html\HtmlBuilder::email($email);
        }
        
        /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function ol($list, $attributes = array())
        {
            return \October\Rain\Html\HtmlBuilder::ol($list, $attributes);
        }
        
        /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function ul($list, $attributes = array())
        {
            return \October\Rain\Html\HtmlBuilder::ul($list, $attributes);
        }
        
        /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function attributes($attributes)
        {
            return \October\Rain\Html\HtmlBuilder::attributes($attributes);
        }
        
        /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function obfuscate($value)
        {
            return \October\Rain\Html\HtmlBuilder::obfuscate($value);
        }
        
        /**
         * Removes HTML from a string
         *
         * @param $string String to strip HTML from
         * @return string 
         * @static 
         */ 
        public static function strip($string)
        {
            return \October\Rain\Html\HtmlBuilder::strip($string);
        }
        
        /**
         * Limits HTML with specific length with a proper tag handling.
         *
         * @param string $html HTML string to limit
         * @param int $maxLength String length to truncate at
         * @param string $end
         * @return string 
         * @static 
         */ 
        public static function limit($html, $maxLength = 100, $end = '...')
        {
            return \October\Rain\Html\HtmlBuilder::limit($html, $maxLength, $end);
        }
        
        /**
         * Cleans HTML to prevent most XSS attacks.
         *
         * @param string $html HTML
         * @return string Cleaned HTML
         * @static 
         */ 
        public static function clean($html)
        {
            return \October\Rain\Html\HtmlBuilder::clean($html);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \October\Rain\Html\HtmlBuilder::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            \October\Rain\Html\HtmlBuilder::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \October\Rain\Html\HtmlBuilder::hasMacro($name);
        }
         
    }

    class Http {
        
        /**
         * Make the object with common properties
         *
         * @param string $url HTTP request address
         * @param string $method Request method (GET, POST, PUT, DELETE, etc)
         * @param callable $options Callable helper function to modify the object
         * @static 
         */ 
        public static function make($url, $method, $options = null)
        {
            return \October\Rain\Network\Http::make($url, $method, $options);
        }
        
        /**
         * Make a HTTP GET call.
         *
         * @param string $url
         * @param array $options
         * @return self 
         * @static 
         */ 
        public static function get($url, $options = null)
        {
            return \October\Rain\Network\Http::get($url, $options);
        }
        
        /**
         * Make a HTTP POST call.
         *
         * @param string $url
         * @param array $options
         * @return self 
         * @static 
         */ 
        public static function post($url, $options = null)
        {
            return \October\Rain\Network\Http::post($url, $options);
        }
        
        /**
         * Make a HTTP DELETE call.
         *
         * @param string $url
         * @param array $options
         * @return self 
         * @static 
         */ 
        public static function delete($url, $options = null)
        {
            return \October\Rain\Network\Http::delete($url, $options);
        }
        
        /**
         * Make a HTTP PATCH call.
         *
         * @param string $url
         * @param array $options
         * @return self 
         * @static 
         */ 
        public static function patch($url, $options = null)
        {
            return \October\Rain\Network\Http::patch($url, $options);
        }
        
        /**
         * Make a HTTP PUT call.
         *
         * @param string $url
         * @param array $options
         * @return self 
         * @static 
         */ 
        public static function put($url, $options = null)
        {
            return \October\Rain\Network\Http::put($url, $options);
        }
        
        /**
         * Make a HTTP OPTIONS call.
         *
         * @param string $url
         * @param array $options
         * @return self 
         * @static 
         */ 
        public static function options($url, $options = null)
        {
            return \October\Rain\Network\Http::options($url, $options);
        }
        
        /**
         * Execute the HTTP request.
         *
         * @return string response body
         * @static 
         */ 
        public static function send()
        {
            return \October\Rain\Network\Http::send();
        }
        
        /**
         * Add a data to the request.
         *
         * @param string $value
         * @return self 
         * @static 
         */ 
        public static function data($key, $value = null)
        {
            return \October\Rain\Network\Http::data($key, $value);
        }
        
        /**
         * Add a header to the request.
         *
         * @param string $value
         * @return self 
         * @static 
         */ 
        public static function header($key, $value = null)
        {
            return \October\Rain\Network\Http::header($key, $value);
        }
        
        /**
         * Sets a proxy to use with this request
         *
         * @static 
         */ 
        public static function proxy($type, $host, $port, $username = null, $password = null)
        {
            return \October\Rain\Network\Http::proxy($type, $host, $port, $username, $password);
        }
        
        /**
         * Adds authentication to the comms.
         *
         * @param string $user
         * @param string $pass
         * @return self 
         * @static 
         */ 
        public static function auth($user, $pass = null)
        {
            return \October\Rain\Network\Http::auth($user, $pass);
        }
        
        /**
         * Disable follow location (redirects)
         *
         * @static 
         */ 
        public static function noRedirect()
        {
            return \October\Rain\Network\Http::noRedirect();
        }
        
        /**
         * Enable SSL verification
         *
         * @static 
         */ 
        public static function verifySSL()
        {
            return \October\Rain\Network\Http::verifySSL();
        }
        
        /**
         * Sets the request timeout.
         *
         * @param string $timeout
         * @return self 
         * @static 
         */ 
        public static function timeout($timeout)
        {
            return \October\Rain\Network\Http::timeout($timeout);
        }
        
        /**
         * Write the response to a file
         *
         * @param string $path Path to file
         * @param string $filter Stream filter as listed in stream_get_filters()
         * @return self 
         * @static 
         */ 
        public static function toFile($path, $filter = null)
        {
            return \October\Rain\Network\Http::toFile($path, $filter);
        }
        
        /**
         * Add a single option to the request.
         *
         * @param string $option
         * @param string $value
         * @return self 
         * @static 
         */ 
        public static function setOption($option, $value = null)
        {
            return \October\Rain\Network\Http::setOption($option, $value);
        }
         
    }

    class Str {
        
        /**
         * Converts number to its ordinal English form.
         * 
         * This method converts 13 to 13th, 2 to 2nd ...
         *
         * @param integer $number Number to get its ordinal value
         * @return string Ordinal representation of given string.
         * @static 
         */ 
        public static function ordinal($number)
        {
            return \October\Rain\Support\Str::ordinal($number);
        }
        
        /**
         * Converts line breaks to a standard \r\n pattern.
         *
         * @static 
         */ 
        public static function normalizeEol($string)
        {
            return \October\Rain\Support\Str::normalizeEol($string);
        }
        
        /**
         * Removes the starting slash from a class namespace \
         *
         * @static 
         */ 
        public static function normalizeClassName($name)
        {
            return \October\Rain\Support\Str::normalizeClassName($name);
        }
        
        /**
         * Generates a class ID from either an object or a string of the class name.
         *
         * @static 
         */ 
        public static function getClassId($name)
        {
            return \October\Rain\Support\Str::getClassId($name);
        }
        
        /**
         * Returns a class namespace
         *
         * @static 
         */ 
        public static function getClassNamespace($name)
        {
            return \October\Rain\Support\Str::getClassNamespace($name);
        }
        
        /**
         * If $string begins with any number of consecutive symbols,
         * returns the number, otherwise returns 0
         *
         * @param string $string
         * @param string $symbol
         * @return int 
         * @static 
         */ 
        public static function getPrecedingSymbols($string, $symbol)
        {
            return \October\Rain\Support\Str::getPrecedingSymbols($string, $symbol);
        }
        
        /**
         * Return the remainder of a string after a given value.
         *
         * @param string $subject
         * @param string $search
         * @return string 
         * @static 
         */ 
        public static function after($subject, $search)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::after($subject, $search);
        }
        
        /**
         * Transliterate a UTF-8 value to ASCII.
         *
         * @param string $value
         * @param string $language
         * @return string 
         * @static 
         */ 
        public static function ascii($value, $language = 'en')
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::ascii($value, $language);
        }
        
        /**
         * Get the portion of a string before a given value.
         *
         * @param string $subject
         * @param string $search
         * @return string 
         * @static 
         */ 
        public static function before($subject, $search)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::before($subject, $search);
        }
        
        /**
         * Convert a value to camel case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function camel($value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::camel($value);
        }
        
        /**
         * Determine if a given string contains a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool 
         * @static 
         */ 
        public static function contains($haystack, $needles)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::contains($haystack, $needles);
        }
        
        /**
         * Determine if a given string ends with a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool 
         * @static 
         */ 
        public static function endsWith($haystack, $needles)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::endsWith($haystack, $needles);
        }
        
        /**
         * Cap a string with a single instance of a given value.
         *
         * @param string $value
         * @param string $cap
         * @return string 
         * @static 
         */ 
        public static function finish($value, $cap)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::finish($value, $cap);
        }
        
        /**
         * Determine if a given string matches a given pattern.
         *
         * @param string|array $pattern
         * @param string $value
         * @return bool 
         * @static 
         */ 
        public static function is($pattern, $value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::is($pattern, $value);
        }
        
        /**
         * Convert a string to kebab case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function kebab($value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::kebab($value);
        }
        
        /**
         * Return the length of the given string.
         *
         * @param string $value
         * @param string $encoding
         * @return int 
         * @static 
         */ 
        public static function length($value, $encoding = null)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::length($value, $encoding);
        }
        
        /**
         * Limit the number of characters in a string.
         *
         * @param string $value
         * @param int $limit
         * @param string $end
         * @return string 
         * @static 
         */ 
        public static function limit($value, $limit = 100, $end = '...')
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::limit($value, $limit, $end);
        }
        
        /**
         * Convert the given string to lower-case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function lower($value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::lower($value);
        }
        
        /**
         * Limit the number of words in a string.
         *
         * @param string $value
         * @param int $words
         * @param string $end
         * @return string 
         * @static 
         */ 
        public static function words($value, $words = 100, $end = '...')
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::words($value, $words, $end);
        }
        
        /**
         * Parse a Class@method style callback into class and method.
         *
         * @param string $callback
         * @param string|null $default
         * @return array 
         * @static 
         */ 
        public static function parseCallback($callback, $default = null)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::parseCallback($callback, $default);
        }
        
        /**
         * Get the plural form of an English word.
         *
         * @param string $value
         * @param int $count
         * @return string 
         * @static 
         */ 
        public static function plural($value, $count = 2)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::plural($value, $count);
        }
        
        /**
         * Generate a more truly "random" alpha-numeric string.
         *
         * @param int $length
         * @return string 
         * @static 
         */ 
        public static function random($length = 16)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::random($length);
        }
        
        /**
         * Replace a given value in the string sequentially with an array.
         *
         * @param string $search
         * @param array $replace
         * @param string $subject
         * @return string 
         * @static 
         */ 
        public static function replaceArray($search, $replace, $subject)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::replaceArray($search, $replace, $subject);
        }
        
        /**
         * Replace the first occurrence of a given value in the string.
         *
         * @param string $search
         * @param string $replace
         * @param string $subject
         * @return string 
         * @static 
         */ 
        public static function replaceFirst($search, $replace, $subject)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::replaceFirst($search, $replace, $subject);
        }
        
        /**
         * Replace the last occurrence of a given value in the string.
         *
         * @param string $search
         * @param string $replace
         * @param string $subject
         * @return string 
         * @static 
         */ 
        public static function replaceLast($search, $replace, $subject)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::replaceLast($search, $replace, $subject);
        }
        
        /**
         * Begin a string with a single instance of a given value.
         *
         * @param string $value
         * @param string $prefix
         * @return string 
         * @static 
         */ 
        public static function start($value, $prefix)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::start($value, $prefix);
        }
        
        /**
         * Convert the given string to upper-case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function upper($value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::upper($value);
        }
        
        /**
         * Convert the given string to title case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function title($value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::title($value);
        }
        
        /**
         * Get the singular form of an English word.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function singular($value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::singular($value);
        }
        
        /**
         * Generate a URL friendly "slug" from a given string.
         *
         * @param string $title
         * @param string $separator
         * @param string $language
         * @return string 
         * @static 
         */ 
        public static function slug($title, $separator = '-', $language = 'en')
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::slug($title, $separator, $language);
        }
        
        /**
         * Convert a string to snake case.
         *
         * @param string $value
         * @param string $delimiter
         * @return string 
         * @static 
         */ 
        public static function snake($value, $delimiter = '_')
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::snake($value, $delimiter);
        }
        
        /**
         * Determine if a given string starts with a given substring.
         *
         * @param string $haystack
         * @param string|array $needles
         * @return bool 
         * @static 
         */ 
        public static function startsWith($haystack, $needles)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::startsWith($haystack, $needles);
        }
        
        /**
         * Convert a value to studly caps case.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function studly($value)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::studly($value);
        }
        
        /**
         * Returns the portion of string specified by the start and length parameters.
         *
         * @param string $string
         * @param int $start
         * @param int|null $length
         * @return string 
         * @static 
         */ 
        public static function substr($string, $start, $length = null)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::substr($string, $start, $length);
        }
        
        /**
         * Make a string's first character uppercase.
         *
         * @param string $string
         * @return string 
         * @static 
         */ 
        public static function ucfirst($string)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::ucfirst($string);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Support\Str            
            \October\Rain\Support\Str::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @return void 
         * @static 
         */ 
        public static function mixin($mixin)
        {
            //Method inherited from \Illuminate\Support\Str            
            \October\Rain\Support\Str::mixin($mixin);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Support\Str            
            return \October\Rain\Support\Str::hasMacro($name);
        }
         
    }

    class Markdown {
        
        /**
         * Parse text using Markdown and Markdown-Extra
         *
         * @param string $text Markdown text to parse
         * @return string Resulting HTML
         * @static 
         */ 
        public static function parse($text)
        {
            return \October\Rain\Parse\Markdown::parse($text);
        }
        
        /**
         * Disables code blocks caused by indentation.
         *
         * @param string $text Markdown text to parse
         * @return string Resulting HTML
         * @static 
         */ 
        public static function parseSafe($text)
        {
            return \October\Rain\Parse\Markdown::parseSafe($text);
        }
        
        /**
         * Parse a single line
         *
         * @param string $text Markdown text to parse
         * @return string Resulting HTML
         * @static 
         */ 
        public static function parseLine($text)
        {
            return \October\Rain\Parse\Markdown::parseLine($text);
        }
        
        /**
         * Create a new event binding.
         *
         * @return self 
         * @static 
         */ 
        public static function bindEvent($event, $callback, $priority = 0)
        {
            return \October\Rain\Parse\Markdown::bindEvent($event, $callback, $priority);
        }
        
        /**
         * Create a new event binding that fires once only
         *
         * @return self 
         * @static 
         */ 
        public static function bindEventOnce($event, $callback)
        {
            return \October\Rain\Parse\Markdown::bindEventOnce($event, $callback);
        }
        
        /**
         * Destroys an event binding.
         *
         * @param string $event Event to destroy
         * @return self 
         * @static 
         */ 
        public static function unbindEvent($event = null)
        {
            return \October\Rain\Parse\Markdown::unbindEvent($event);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string $event Event name
         * @param array $params Event parameters
         * @param boolean $halt Halt after first non-null result
         * @return array Collection of event results / Or single result (if halted)
         * @static 
         */ 
        public static function fireEvent($event, $params = array(), $halt = false)
        {
            return \October\Rain\Parse\Markdown::fireEvent($event, $params, $halt);
        }
         
    }

    class Yaml {
        
        /**
         * Parses supplied YAML contents in to a PHP array.
         *
         * @param string $contents YAML contents to parse.
         * @return array The YAML contents as an array.
         * @static 
         */ 
        public static function parse($contents)
        {
            return \October\Rain\Parse\Yaml::parse($contents);
        }
        
        /**
         * Parses YAML file contents in to a PHP array.
         *
         * @param string $fileName File to read contents and parse.
         * @return array The YAML contents as an array.
         * @static 
         */ 
        public static function parseFile($fileName)
        {
            return \October\Rain\Parse\Yaml::parseFile($fileName);
        }
        
        /**
         * Renders a PHP array to YAML format.
         *
         * @param array $vars
         * @param array $options Supported options:
         * - inline: The level where you switch to inline YAML.
         * - exceptionOnInvalidType: if an exception must be thrown on invalid types.
         * - objectSupport: if object support is enabled.
         * @static 
         */ 
        public static function render($vars = array(), $options = array())
        {
            return \October\Rain\Parse\Yaml::render($vars, $options);
        }
         
    }

    class Ini {
        
        /**
         * Parses supplied INI contents in to a PHP array.
         *
         * @param string $contents INI contents to parse.
         * @return array 
         * @static 
         */ 
        public static function parse($contents)
        {
            return \October\Rain\Parse\Ini::parse($contents);
        }
        
        /**
         * Parses supplied INI file contents in to a PHP array.
         *
         * @param string $fileName File to read contents and parse.
         * @return array 
         * @static 
         */ 
        public static function parseFile($fileName)
        {
            return \October\Rain\Parse\Ini::parseFile($fileName);
        }
        
        /**
         * Expands a single array property from traditional INI syntax.
         * 
         * If no key is given to the method, the entire array will be replaced.
         *
         * @param array $array
         * @param string $key
         * @param mixed $value
         * @return array 
         * @static 
         */ 
        public static function expandProperty($array, $key, $value)
        {
            return \October\Rain\Parse\Ini::expandProperty($array, $key, $value);
        }
        
        /**
         * Formats an INI file string from an array
         *
         * @param array $vars Data to format.
         * @param int $level Specifies the level of array value.
         * @return string Returns the INI file string.
         * @static 
         */ 
        public static function render($vars = array(), $level = 1)
        {
            return \October\Rain\Parse\Ini::render($vars, $level);
        }
         
    }

    class Twig {
        
        /**
         * Parses supplied Twig contents, with supplied variables.
         *
         * @param string $contents Twig contents to parse.
         * @param array $vars Context variables.
         * @return string 
         * @static 
         */ 
        public static function parse($contents, $vars = array())
        {
            return \October\Rain\Parse\Twig::parse($contents, $vars);
        }
         
    }

    class DbDongle {
        
        /**
         * Transforms and executes a raw SQL statement
         *
         * @param string $sql
         * @return mixed 
         * @static 
         */ 
        public static function raw($sql)
        {
            return \October\Rain\Database\Dongle::raw($sql);
        }
        
        /**
         * Transforms an SQL statement to match the active driver.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parse($sql)
        {
            return \October\Rain\Database\Dongle::parse($sql);
        }
        
        /**
         * Transforms GROUP_CONCAT statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseGroupConcat($sql)
        {
            return \October\Rain\Database\Dongle::parseGroupConcat($sql);
        }
        
        /**
         * Transforms CONCAT statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseConcat($sql)
        {
            return \October\Rain\Database\Dongle::parseConcat($sql);
        }
        
        /**
         * Transforms IFNULL statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseIfNull($sql)
        {
            return \October\Rain\Database\Dongle::parseIfNull($sql);
        }
        
        /**
         * Transforms true|false expressions in a statement.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function parseBooleanExpression($sql)
        {
            return \October\Rain\Database\Dongle::parseBooleanExpression($sql);
        }
        
        /**
         * Some drivers require same-type comparisons.
         *
         * @param string $sql
         * @return string 
         * @static 
         */ 
        public static function cast($sql, $asType = 'INTEGER')
        {
            return \October\Rain\Database\Dongle::cast($sql, $asType);
        }
        
        /**
         * Alters a table's TIMESTAMP field(s) to be nullable and converts existing values.
         * 
         * This is needed to transition from older Laravel code that set DEFAULT 0, which is an
         * invalid date in newer MySQL versions where NO_ZERO_DATE is included in strict mode.
         *
         * @param string $table
         * @param string|array $columns Column name(s). Defaults to ['created_at', 'updated_at']
         * @static 
         */ 
        public static function convertTimestamps($table, $columns = null)
        {
            return \October\Rain\Database\Dongle::convertTimestamps($table, $columns);
        }
        
        /**
         * Used to disable strict mode during migrations
         *
         * @static 
         */ 
        public static function disableStrictMode()
        {
            return \October\Rain\Database\Dongle::disableStrictMode();
        }
        
        /**
         * Returns the driver name as a string, eg: pgsql
         *
         * @return string 
         * @static 
         */ 
        public static function getDriver()
        {
            return \October\Rain\Database\Dongle::getDriver();
        }
        
        /**
         * Get the table prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {
            return \October\Rain\Database\Dongle::getTablePrefix();
        }
         
    }

    class Schema {
        
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */ 
        public static function hasTable($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
        }
        
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */ 
        public static function getColumnListing($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
        }
        
        /**
         * Drop all tables from the database.
         *
         * @return void 
         * @static 
         */ 
        public static function dropAllTables()
        {
            \Illuminate\Database\Schema\MySqlBuilder::dropAllTables();
        }
        
        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void 
         * @static 
         */ 
        public static function defaultStringLength($length)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }
        
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */ 
        public static function hasColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
        }
        
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */ 
        public static function hasColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
        }
        
        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string 
         * @static 
         */ 
        public static function getColumnType($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnType($table, $column);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function table($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function create($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
        }
        
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function drop($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::drop($table);
        }
        
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function dropIfExists($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
        }
        
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void 
         * @static 
         */ 
        public static function rename($from, $to)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
        }
        
        /**
         * Enable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function enableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::enableForeignKeyConstraints();
        }
        
        /**
         * Disable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function disableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::disableForeignKeyConstraints();
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function getConnection()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
        }
        
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return $this 
         * @static 
         */ 
        public static function setConnection($connection)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
        }
        
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function blueprintResolver($resolver)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
        }
         
    }
 
}

namespace October\Rain\Database\Updates { 

    class Seeder {
         
    }
 
}

namespace Cms\Facades { 

    class Cms {
        
        /**
         * Returns a URL in context of the Frontend
         *
         * @static 
         */ 
        public static function url($path = null)
        {
            return \Cms\Helpers\Cms::url($path);
        }
         
    }
 
}

namespace Backend\Facades { 

    class Backend {
        
        /**
         * Returns the backend URI segment.
         *
         * @static 
         */ 
        public static function uri()
        {
            return \Backend\Helpers\Backend::uri();
        }
        
        /**
         * Returns a URL in context of the Backend
         *
         * @static 
         */ 
        public static function url($path = null, $parameters = array(), $secure = null)
        {
            return \Backend\Helpers\Backend::url($path, $parameters, $secure);
        }
        
        /**
         * Returns the base backend URL
         *
         * @static 
         */ 
        public static function baseUrl($path = null)
        {
            return \Backend\Helpers\Backend::baseUrl($path);
        }
        
        /**
         * Returns a URL in context of the active Backend skin
         *
         * @static 
         */ 
        public static function skinAsset($path = null)
        {
            return \Backend\Helpers\Backend::skinAsset($path);
        }
        
        /**
         * Create a new redirect response to a given backend path.
         *
         * @static 
         */ 
        public static function redirect($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Backend\Helpers\Backend::redirect($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new backend redirect response, while putting the current URL in the session.
         *
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Backend\Helpers\Backend::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended backend location.
         *
         * @static 
         */ 
        public static function redirectIntended($path, $status = 302, $headers = array(), $secure = null)
        {
            return \Backend\Helpers\Backend::redirectIntended($path, $status, $headers, $secure);
        }
        
        /**
         * Proxy method for dateTime() using "date" format alias.
         *
         * @return string 
         * @static 
         */ 
        public static function date($dateTime, $options = array())
        {
            return \Backend\Helpers\Backend::date($dateTime, $options);
        }
        
        /**
         * Returns the HTML for a date formatted in the backend.
         * 
         * Supported for formatAlias:
         *   time             -> 6:28 AM
         *   timeLong         -> 6:28:01 AM
         *   date             -> 04/23/2016
         *   dateMin          -> 4/23/2016
         *   dateLong         -> April 23, 2016
         *   dateLongMin      -> Apr 23, 2016
         *   dateTime         -> April 23, 2016 6:28 AM
         *   dateTimeMin      -> Apr 23, 2016 6:28 AM
         *   dateTimeLong     -> Saturday, April 23, 2016 6:28 AM
         *   dateTimeLongMin  -> Sat, Apr 23, 2016 6:29 AM
         *
         * @return string 
         * @static 
         */ 
        public static function dateTime($dateTime, $options = array())
        {
            return \Backend\Helpers\Backend::dateTime($dateTime, $options);
        }
         
    }

    class BackendMenu {
        
        /**
         * Registers a callback function that defines menu items.
         * 
         * The callback function should register menu items by calling the manager's
         * `registerMenuItems` method. The manager instance is passed to the callback
         * function as an argument. Usage:
         * 
         *     BackendMenu::registerCallback(function($manager){
         *         $manager->registerMenuItems([...]);
         *     });
         *
         * @param callable $callback A callable function.
         * @static 
         */ 
        public static function registerCallback($callback)
        {
            return \Backend\Classes\NavigationManager::registerCallback($callback);
        }
        
        /**
         * Registers the back-end menu items.
         * 
         * The argument is an array of the main menu items. The array keys represent the
         * menu item codes, specific for the plugin/module. Each element in the
         * array should be an associative array with the following keys:
         * - label - specifies the menu label localization string key, required.
         * - icon - an icon name from the Font Awesome icon collection, required.
         * - url - the back-end relative URL the menu item should point to, required.
         * - permissions - an array of permissions the back-end user should have, optional.
         *   The item will be displayed if the user has any of the specified permissions.
         * - order - a position of the item in the menu, optional.
         * - sideMenu - an array of side menu items, optional. If provided, the array items
         *   should represent the side menu item code, and each value should be an associative
         *   array with the following keys:
         * - label - specifies the menu label localization string key, required.
         * - icon - an icon name from the Font Awesome icon collection, required.
         * - url - the back-end relative URL the menu item should point to, required.
         * - attributes - an array of attributes and values to apply to the menu item, optional.
         * - permissions - an array of permissions the back-end user should have, optional.
         * - counter - an optional numeric value to output near the menu icon. The value should be
         *   a number or a callable returning a number.
         * - counterLabel - an optional string value to describe the numeric reference in counter.
         *
         * @param string $owner Specifies the menu items owner plugin or module in the format Author.Plugin.
         * @param array $definitions An array of the menu item definitions.
         * @static 
         */ 
        public static function registerMenuItems($owner, $definitions)
        {
            return \Backend\Classes\NavigationManager::registerMenuItems($owner, $definitions);
        }
        
        /**
         * Dynamically add an array of main menu items
         *
         * @param string $owner
         * @param array $definitions
         * @static 
         */ 
        public static function addMainMenuItems($owner, $definitions)
        {
            return \Backend\Classes\NavigationManager::addMainMenuItems($owner, $definitions);
        }
        
        /**
         * Dynamically add a single main menu item
         *
         * @param string $owner
         * @param string $code
         * @param array $definitions
         * @static 
         */ 
        public static function addMainMenuItem($owner, $code, $definition)
        {
            return \Backend\Classes\NavigationManager::addMainMenuItem($owner, $code, $definition);
        }
        
        /**
         * Removes a single main menu item
         *
         * @static 
         */ 
        public static function removeMainMenuItem($owner, $code)
        {
            return \Backend\Classes\NavigationManager::removeMainMenuItem($owner, $code);
        }
        
        /**
         * Dynamically add an array of side menu items
         *
         * @param string $owner
         * @param string $code
         * @param array $definitions
         * @static 
         */ 
        public static function addSideMenuItems($owner, $code, $definitions)
        {
            return \Backend\Classes\NavigationManager::addSideMenuItems($owner, $code, $definitions);
        }
        
        /**
         * Dynamically add a single side menu item
         *
         * @param string $owner
         * @param string $code
         * @param string $sideCode
         * @param array $definitions
         * @static 
         */ 
        public static function addSideMenuItem($owner, $code, $sideCode, $definition)
        {
            return \Backend\Classes\NavigationManager::addSideMenuItem($owner, $code, $sideCode, $definition);
        }
        
        /**
         * Removes a single main menu item
         *
         * @static 
         */ 
        public static function removeSideMenuItem($owner, $code, $sideCode)
        {
            return \Backend\Classes\NavigationManager::removeSideMenuItem($owner, $code, $sideCode);
        }
        
        /**
         * Returns a list of the main menu items.
         *
         * @return array 
         * @static 
         */ 
        public static function listMainMenuItems()
        {
            return \Backend\Classes\NavigationManager::listMainMenuItems();
        }
        
        /**
         * Returns a list of side menu items for the currently active main menu item.
         * 
         * The currently active main menu item is set with the setContext methods.
         *
         * @static 
         */ 
        public static function listSideMenuItems($owner = null, $code = null)
        {
            return \Backend\Classes\NavigationManager::listSideMenuItems($owner, $code);
        }
        
        /**
         * Sets the navigation context.
         * 
         * The function sets the navigation owner, main menu item code and the side menu item code.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module
         * @param string $mainMenuItemCode Specifies the main menu item code
         * @param string $sideMenuItemCode Specifies the side menu item code
         * @static 
         */ 
        public static function setContext($owner, $mainMenuItemCode, $sideMenuItemCode = null)
        {
            return \Backend\Classes\NavigationManager::setContext($owner, $mainMenuItemCode, $sideMenuItemCode);
        }
        
        /**
         * Sets the navigation context.
         * 
         * The function sets the navigation owner.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module
         * @static 
         */ 
        public static function setContextOwner($owner)
        {
            return \Backend\Classes\NavigationManager::setContextOwner($owner);
        }
        
        /**
         * Specifies a code of the main menu item in the current navigation context.
         *
         * @param string $mainMenuItemCode Specifies the main menu item code
         * @static 
         */ 
        public static function setContextMainMenu($mainMenuItemCode)
        {
            return \Backend\Classes\NavigationManager::setContextMainMenu($mainMenuItemCode);
        }
        
        /**
         * Returns information about the current navigation context.
         *
         * @return mixed Returns an object with the following fields:
         * - mainMenuCode
         * - sideMenuCode
         * - owner
         * @static 
         */ 
        public static function getContext()
        {
            return \Backend\Classes\NavigationManager::getContext();
        }
        
        /**
         * Specifies a code of the side menu item in the current navigation context.
         * 
         * If the code is set to TRUE, the first item will be flagged as active.
         *
         * @param string $sideMenuItemCode Specifies the side menu item code
         * @static 
         */ 
        public static function setContextSideMenu($sideMenuItemCode)
        {
            return \Backend\Classes\NavigationManager::setContextSideMenu($sideMenuItemCode);
        }
        
        /**
         * Determines if a main menu item is active.
         *
         * @param mixed $item Specifies the item object.
         * @return boolean Returns true if the menu item is active.
         * @static 
         */ 
        public static function isMainMenuItemActive($item)
        {
            return \Backend\Classes\NavigationManager::isMainMenuItemActive($item);
        }
        
        /**
         * Returns the currently active main menu item
         *
         * @param mixed $item Returns the item object or null.
         * @static 
         */ 
        public static function getActiveMainMenuItem()
        {
            return \Backend\Classes\NavigationManager::getActiveMainMenuItem();
        }
        
        /**
         * Determines if a side menu item is active.
         *
         * @param mixed $item Specifies the item object.
         * @return boolean Returns true if the side item is active.
         * @static 
         */ 
        public static function isSideMenuItemActive($item)
        {
            return \Backend\Classes\NavigationManager::isSideMenuItemActive($item);
        }
        
        /**
         * Registers a special side navigation partial for a specific main menu.
         * 
         * The sidenav partial replaces the standard side navigation.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module.
         * @param string $mainMenuItemCode Specifies the main menu item code.
         * @param string $partial Specifies the partial name.
         * @static 
         */ 
        public static function registerContextSidenavPartial($owner, $mainMenuItemCode, $partial)
        {
            return \Backend\Classes\NavigationManager::registerContextSidenavPartial($owner, $mainMenuItemCode, $partial);
        }
        
        /**
         * Returns the side navigation partial for a specific main menu previously registered
         * with the registerContextSidenavPartial() method.
         *
         * @param string $owner Specifies the navigation owner in the format Vendor/Module.
         * @param string $mainMenuItemCode Specifies the main menu item code.
         * @return mixed Returns the partial name or null.
         * @static 
         */ 
        public static function getContextSidenavPartial($owner, $mainMenuItemCode)
        {
            return \Backend\Classes\NavigationManager::getContextSidenavPartial($owner, $mainMenuItemCode);
        }
        
        /**
         * Create a new instance of this singleton.
         *
         * @static 
         */ 
        public static function instance()
        {
            return \Backend\Classes\NavigationManager::instance();
        }
        
        /**
         * Forget this singleton's instance if it exists
         *
         * @static 
         */ 
        public static function forgetInstance()
        {
            return \Backend\Classes\NavigationManager::forgetInstance();
        }
         
    }

    class BackendAuth {
        
        /**
         * Registers a callback function that defines authentication permissions.
         * 
         * The callback function should register permissions by calling the manager's
         * registerPermissions() function. The manager instance is passed to the
         * callback function as an argument. Usage:
         * 
         *     BackendAuth::registerCallback(function($manager){
         *         $manager->registerPermissions([...]);
         *     });
         *
         * @param callable $callback A callable function.
         * @static 
         */ 
        public static function registerCallback($callback)
        {
            return \Backend\Classes\AuthManager::registerCallback($callback);
        }
        
        /**
         * Registers the back-end permission items.
         * 
         * The argument is an array of the permissions. The array keys represent the
         * permission codes, specific for the plugin/module. Each element in the
         * array should be an associative array with the following keys:
         * - label - specifies the menu label localization string key, required.
         * - order - a position of the item in the menu, optional.
         * - comment - a brief comment that describes the permission, optional.
         * - tab - assign this permission to a tabbed group, optional.
         *
         * @param string $owner Specifies the menu items owner plugin or module in the format Vendor/Module.
         * @param array $definitions An array of the menu item definitions.
         * @static 
         */ 
        public static function registerPermissions($owner, $definitions)
        {
            return \Backend\Classes\AuthManager::registerPermissions($owner, $definitions);
        }
        
        /**
         * Returns a list of the registered permissions items.
         *
         * @return array 
         * @static 
         */ 
        public static function listPermissions()
        {
            return \Backend\Classes\AuthManager::listPermissions();
        }
        
        /**
         * Returns an array of registered permissions, grouped by tabs.
         *
         * @return array 
         * @static 
         */ 
        public static function listTabbedPermissions()
        {
            return \Backend\Classes\AuthManager::listTabbedPermissions();
        }
        
        /**
         * Returns an array of registered permissions belonging to a given role code
         *
         * @param string $role
         * @return array 
         * @static 
         */ 
        public static function listPermissionsForRole($role, $includeOrphans = true)
        {
            return \Backend\Classes\AuthManager::listPermissionsForRole($role, $includeOrphans);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function hasPermissionsForRole($role)
        {
            return \Backend\Classes\AuthManager::hasPermissionsForRole($role);
        }
        
        /**
         * Creates a new instance of the user model
         *
         * @return \October\Rain\Auth\Models\User 
         * @static 
         */ 
        public static function createUserModel()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::createUserModel();
        }
        
        /**
         * Extend the query used for finding the user.
         *
         * @param \October\Rain\Database\Builder $query
         * @return void 
         * @static 
         */ 
        public static function extendUserQuery($query)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            \Backend\Classes\AuthManager::extendUserQuery($query);
        }
        
        /**
         * Registers a user with the provided credentials with optional flags
         * for activating the newly created user and automatically logging them in
         *
         * @param array $credentials
         * @param bool $activate
         * @param bool $autoLogin
         * @return \October\Rain\Auth\Models\User 
         * @static 
         */ 
        public static function register($credentials, $activate = false, $autoLogin = true)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::register($credentials, $activate, $autoLogin);
        }
        
        /**
         * Sets the user
         *
         * @static 
         */ 
        public static function setUser($user)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::setUser($user);
        }
        
        /**
         * Returns the current user, if any.
         *
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function getUser()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::getUser();
        }
        
        /**
         * Finds a user by the login value.
         *
         * @param string $id
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function findUserById($id)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::findUserById($id);
        }
        
        /**
         * Finds a user by the login value.
         *
         * @param string $login
         * @return mixed (Models\User || null)
         * @static 
         */ 
        public static function findUserByLogin($login)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::findUserByLogin($login);
        }
        
        /**
         * Finds a user by the given credentials.
         *
         * @param array $credentials The credentials to find a user by
         * @throws AuthException If the credentials are invalid
         * @return \October\Rain\Auth\Models\User The requested user
         * @static 
         */ 
        public static function findUserByCredentials($credentials)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::findUserByCredentials($credentials);
        }
        
        /**
         * Creates an instance of the throttle model
         *
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function createThrottleModel()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::createThrottleModel();
        }
        
        /**
         * Find a throttle record by login and ip address
         *
         * @param string $loginName
         * @param string $ipAddress
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function findThrottleByLogin($loginName, $ipAddress)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::findThrottleByLogin($loginName, $ipAddress);
        }
        
        /**
         * Find a throttle record by user id and ip address
         *
         * @param integer $userId
         * @param string $ipAddress
         * @return \October\Rain\Auth\Models\Throttle 
         * @static 
         */ 
        public static function findThrottleByUserId($userId, $ipAddress = null)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::findThrottleByUserId($userId, $ipAddress);
        }
        
        /**
         * Attempts to authenticate the given user according to the passed credentials.
         *
         * @param array $credentials The user login details
         * @param bool $remember Store a non-expire cookie for the user
         * @throws AuthException If authentication fails
         * @return \October\Rain\Auth\Models\User The successfully logged in user
         * @static 
         */ 
        public static function authenticate($credentials, $remember = true)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::authenticate($credentials, $remember);
        }
        
        /**
         * Check to see if the user is logged in and activated, and hasn't been banned or suspended.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::check();
        }
        
        /**
         * Logs in the given user and sets properties in the session
         *
         * @throws AuthException If the user is not activated
         * @static 
         */ 
        public static function login($user, $remember = true)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::login($user, $remember);
        }
        
        /**
         * Logs the current user out.
         *
         * @static 
         */ 
        public static function logout()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::logout();
        }
        
        /**
         * Impersonates the given user and sets properties
         * in the session but not the cookie.
         *
         * @static 
         */ 
        public static function impersonate($user)
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::impersonate($user);
        }
        
        /**
         * Stop the current session being impersonated and
         * authenticate as the impersonator again
         *
         * @static 
         */ 
        public static function stopImpersonate()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::stopImpersonate();
        }
        
        /**
         * Check to see if the current session is being impersonated
         *
         * @return bool 
         * @static 
         */ 
        public static function isImpersonator()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::isImpersonator();
        }
        
        /**
         * Get the original user doing the impersonation
         *
         * @return mixed Returns the User model for the impersonator if able, false if not
         * @static 
         */ 
        public static function getImpersonator()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::getImpersonator();
        }
        
        /**
         * Create a new instance of this singleton.
         *
         * @static 
         */ 
        public static function instance()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::instance();
        }
        
        /**
         * Forget this singleton's instance if it exists
         *
         * @static 
         */ 
        public static function forgetInstance()
        {
            //Method inherited from \October\Rain\Auth\Manager            
            return \Backend\Classes\AuthManager::forgetInstance();
        }
         
    }
 
}

namespace October\Rain\Exception { 

    class AjaxException {
         
    }

    class SystemException {
         
    }

    class ApplicationException {
         
    }

    class ValidationException {
         
    }
 
}

namespace Jenssegers\Date { 

    class Date {
         
    }
 
}


namespace  { 

    class App extends \Illuminate\Support\Facades\App {}

    class Artisan extends \Illuminate\Support\Facades\Artisan {}

    class Bus extends \Illuminate\Support\Facades\Bus {}

    class Cache extends \Illuminate\Support\Facades\Cache {}

    class Cookie extends \Illuminate\Support\Facades\Cookie {}

    class Crypt extends \Illuminate\Support\Facades\Crypt {}

    class Db extends \Illuminate\Support\Facades\DB {}

    class DB extends \Illuminate\Support\Facades\DB {}

    class Eloquent extends \Illuminate\Database\Eloquent\Model {         
            /**
             * Get an array with the values of a given column.
             *
             * @param string $column
             * @param string|null $key
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function lists($column, $key = null)
            {    
                return \October\Rain\Database\Builder::lists($column, $key);
            }
         
            /**
             * Perform a search on this query for term found in columns.
             *
             * @param string $term Search query
             * @param array $columns Table columns to search
             * @param string $mode Search mode: all, any, exact.
             * @return self 
             * @static 
             */ 
            public static function searchWhere($term, $columns = array(), $mode = 'all')
            {    
                return \October\Rain\Database\Builder::searchWhere($term, $columns, $mode);
            }
         
            /**
             * Add an "or search where" clause to the query.
             *
             * @param string $term Search query
             * @param array $columns Table columns to search
             * @param string $mode Search mode: all, any, exact.
             * @return self 
             * @static 
             */ 
            public static function orSearchWhere($term, $columns = array(), $mode = 'all')
            {    
                return \October\Rain\Database\Builder::orSearchWhere($term, $columns, $mode);
            }
         
            /**
             * Paginate the given query.
             *
             * @param int $perPage
             * @param int $currentPage
             * @param array $columns
             * @param string $pageName
             * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator 
             * @static 
             */ 
            public static function paginate($perPage = 15, $currentPage = null, $columns = array(), $pageName = 'page')
            {    
                return \October\Rain\Database\Builder::paginate($perPage, $currentPage, $columns, $pageName);
            }
         
            /**
             * Paginate the given query into a simple paginator.
             *
             * @param int $perPage
             * @param int $currentPage
             * @param array $columns
             * @return \Illuminate\Contracts\Pagination\Paginator 
             * @static 
             */ 
            public static function simplePaginate($perPage = null, $currentPage = null, $pageName = 'page', $columns = array())
            {    
                return \October\Rain\Database\Builder::simplePaginate($perPage, $currentPage, $pageName, $columns);
            }
         
            /**
             * Create and return an un-saved model instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function make($attributes = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::make($attributes);
            }
         
            /**
             * Register a new global scope.
             *
             * @param string $identifier
             * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
             * @return $this 
             * @static 
             */ 
            public static function withGlobalScope($identifier, $scope)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::withGlobalScope($identifier, $scope);
            }
         
            /**
             * Remove a registered global scope.
             *
             * @param \Illuminate\Database\Eloquent\Scope|string $scope
             * @return $this 
             * @static 
             */ 
            public static function withoutGlobalScope($scope)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::withoutGlobalScope($scope);
            }
         
            /**
             * Remove all or passed registered global scopes.
             *
             * @param array|null $scopes
             * @return $this 
             * @static 
             */ 
            public static function withoutGlobalScopes($scopes = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::withoutGlobalScopes($scopes);
            }
         
            /**
             * Get an array of global scopes that were removed from the query.
             *
             * @return array 
             * @static 
             */ 
            public static function removedScopes()
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::removedScopes();
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return $this 
             * @static 
             */ 
            public static function whereKey($id)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::whereKey($id);
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return $this 
             * @static 
             */ 
            public static function whereKeyNot($id)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::whereKeyNot($id);
            }
         
            /**
             * Add a basic where clause to the query.
             *
             * @param string|array|\Closure $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function where($column, $operator = null, $value = null, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::where($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where" clause to the query.
             *
             * @param \Closure|array|string $column
             * @param string $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhere($column, $operator = null, $value = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::orWhere($column, $operator, $value);
            }
         
            /**
             * Create a collection of models from plain arrays.
             *
             * @param array $items
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function hydrate($items)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::hydrate($items);
            }
         
            /**
             * Create a collection of models from a raw query.
             *
             * @param string $query
             * @param array $bindings
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function fromQuery($query, $bindings = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::fromQuery($query, $bindings);
            }
         
            /**
             * Find a model by its primary key.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null 
             * @static 
             */ 
            public static function find($id, $columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::find($id, $columns);
            }
         
            /**
             * Find multiple models by their primary keys.
             *
             * @param \Illuminate\Contracts\Support\Arrayable|array $ids
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function findMany($ids, $columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::findMany($ids, $columns);
            }
         
            /**
             * Find a model by its primary key or throw an exception.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function findOrFail($id, $columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::findOrFail($id, $columns);
            }
         
            /**
             * Find a model by its primary key or return fresh model instance.
             *
             * @param mixed $id
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function findOrNew($id, $columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::findOrNew($id, $columns);
            }
         
            /**
             * Get the first record matching the attributes or instantiate it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrNew($attributes, $values = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::firstOrNew($attributes, $values);
            }
         
            /**
             * Get the first record matching the attributes or create it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function firstOrCreate($attributes, $values = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::firstOrCreate($attributes, $values);
            }
         
            /**
             * Create or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function updateOrCreate($attributes, $values = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::updateOrCreate($attributes, $values);
            }
         
            /**
             * Execute the query and get the first result or throw an exception.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
             * @static 
             */ 
            public static function firstOrFail($columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::firstOrFail($columns);
            }
         
            /**
             * Execute the query and get the first result or call a callback.
             *
             * @param \Closure|array $columns
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Model|static|mixed 
             * @static 
             */ 
            public static function firstOr($columns = array(), $callback = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::firstOr($columns, $callback);
            }
         
            /**
             * Get a single column's value from the first result of a query.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function value($column)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::value($column);
            }
         
            /**
             * Execute the query as a "select" statement.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Collection|static[] 
             * @static 
             */ 
            public static function get($columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::get($columns);
            }
         
            /**
             * Get the hydrated models without eager loading.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model[] 
             * @static 
             */ 
            public static function getModels($columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::getModels($columns);
            }
         
            /**
             * Eager load the relationships for the models.
             *
             * @param array $models
             * @return array 
             * @static 
             */ 
            public static function eagerLoadRelations($models)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::eagerLoadRelations($models);
            }
         
            /**
             * Get a generator for the given query.
             *
             * @return \Generator 
             * @static 
             */ 
            public static function cursor()
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::cursor();
            }
         
            /**
             * Chunk the results of a query by comparing numeric IDs.
             *
             * @param int $count
             * @param callable $callback
             * @param string $column
             * @param string|null $alias
             * @return bool 
             * @static 
             */ 
            public static function chunkById($count, $callback, $column = null, $alias = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::chunkById($count, $callback, $column, $alias);
            }
         
            /**
             * Get an array with the values of a given column.
             *
             * @param string $column
             * @param string|null $key
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function pluck($column, $key = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::pluck($column, $key);
            }
         
            /**
             * Save a new model and return the instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function create($attributes = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::create($attributes);
            }
         
            /**
             * Save a new model and return the instance. Allow mass-assignment.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function forceCreate($attributes)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::forceCreate($attributes);
            }
         
            /**
             * Register a replacement for the default delete function.
             *
             * @param \Closure $callback
             * @return void 
             * @static 
             */ 
            public static function onDelete($callback)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                \October\Rain\Database\Builder::onDelete($callback);
            }
         
            /**
             * Call the given local model scopes.
             *
             * @param array $scopes
             * @return mixed 
             * @static 
             */ 
            public static function scopes($scopes)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::scopes($scopes);
            }
         
            /**
             * Apply the scopes to the Eloquent builder instance and return it.
             *
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function applyScopes()
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::applyScopes();
            }
         
            /**
             * Prevent the specified relations from being eager loaded.
             *
             * @param mixed $relations
             * @return $this 
             * @static 
             */ 
            public static function without($relations)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::without($relations);
            }
         
            /**
             * Create a new instance of the model being queried.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function newModelInstance($attributes = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::newModelInstance($attributes);
            }
         
            /**
             * Get the underlying query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function getQuery()
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::getQuery();
            }
         
            /**
             * Set the underlying query builder instance.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return $this 
             * @static 
             */ 
            public static function setQuery($query)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::setQuery($query);
            }
         
            /**
             * Get a base query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function toBase()
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::toBase();
            }
         
            /**
             * Get the relationships being eagerly loaded.
             *
             * @return array 
             * @static 
             */ 
            public static function getEagerLoads()
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::getEagerLoads();
            }
         
            /**
             * Set the relationships being eagerly loaded.
             *
             * @param array $eagerLoad
             * @return $this 
             * @static 
             */ 
            public static function setEagerLoads($eagerLoad)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::setEagerLoads($eagerLoad);
            }
         
            /**
             * Get the model instance being queried.
             *
             * @return \Illuminate\Database\Eloquent\Model 
             * @static 
             */ 
            public static function getModel()
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::getModel();
            }
         
            /**
             * Set a model instance for the model being queried.
             *
             * @param \Illuminate\Database\Eloquent\Model $model
             * @return $this 
             * @static 
             */ 
            public static function setModel($model)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::setModel($model);
            }
         
            /**
             * Get the given macro by name.
             *
             * @param string $name
             * @return \Closure 
             * @static 
             */ 
            public static function getMacro($name)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::getMacro($name);
            }
         
            /**
             * Chunk the results of the query.
             *
             * @param int $count
             * @param callable $callback
             * @return bool 
             * @static 
             */ 
            public static function chunk($count, $callback)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::chunk($count, $callback);
            }
         
            /**
             * Execute a callback over each item while chunking.
             *
             * @param callable $callback
             * @param int $count
             * @return bool 
             * @static 
             */ 
            public static function each($callback, $count = 1000)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::each($callback, $count);
            }
         
            /**
             * Execute the query and get the first result.
             *
             * @param array $columns
             * @return \Illuminate\Database\Eloquent\Model|object|static|null 
             * @static 
             */ 
            public static function first($columns = array())
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::first($columns);
            }
         
            /**
             * Apply the callback's query changes if the given "value" is true.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function when($value, $callback, $default = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::when($value, $callback, $default);
            }
         
            /**
             * Pass the query to a given callback.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function tap($callback)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::tap($callback);
            }
         
            /**
             * Apply the callback's query changes if the given "value" is false.
             *
             * @param mixed $value
             * @param callable $callback
             * @param callable $default
             * @return mixed 
             * @static 
             */ 
            public static function unless($value, $callback, $default = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::unless($value, $callback, $default);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::has($relation, $operator, $count, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orHas($relation, $operator = '>=', $count = 1)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::orHas($relation, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function doesntHave($relation, $boolean = 'and', $callback = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::doesntHave($relation, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orDoesntHave($relation)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::orDoesntHave($relation);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::whereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::orWhereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereDoesntHave($relation, $callback = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::whereDoesntHave($relation, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereDoesntHave($relation, $callback = null)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::orWhereDoesntHave($relation, $callback);
            }
         
            /**
             * Add subselect queries to count the relations.
             *
             * @param mixed $relations
             * @return $this 
             * @static 
             */ 
            public static function withCount($relations)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::withCount($relations);
            }
         
            /**
             * Merge the where constraints from another query to the current query.
             *
             * @param \Illuminate\Database\Eloquent\Builder $from
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function mergeConstraintsFrom($from)
            {    
                //Method inherited from \Illuminate\Database\Eloquent\Builder                    
                return \October\Rain\Database\Builder::mergeConstraintsFrom($from);
            }
         
            /**
             * Indicate that the query results should be cached.
             *
             * @param \DateTime|int $minutes
             * @param string $key
             * @return $this 
             * @static 
             */ 
            public static function remember($minutes, $key = null)
            {    
                return \October\Rain\Database\QueryBuilder::remember($minutes, $key);
            }
         
            /**
             * Indicate that the query results should be cached forever.
             *
             * @param string $key
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rememberForever($key = null)
            {    
                return \October\Rain\Database\QueryBuilder::rememberForever($key);
            }
         
            /**
             * Indicate that the results, if cached, should use the given cache tags.
             *
             * @param array|mixed $cacheTags
             * @return $this 
             * @static 
             */ 
            public static function cacheTags($cacheTags)
            {    
                return \October\Rain\Database\QueryBuilder::cacheTags($cacheTags);
            }
         
            /**
             * Execute the query as a cached "select" statement.
             *
             * @param array $columns
             * @return array 
             * @static 
             */ 
            public static function getCached($columns = array())
            {    
                return \October\Rain\Database\QueryBuilder::getCached($columns);
            }
         
            /**
             * Get a unique cache key for the complete query.
             *
             * @return string 
             * @static 
             */ 
            public static function getCacheKey()
            {    
                return \October\Rain\Database\QueryBuilder::getCacheKey();
            }
         
            /**
             * Generate the unique cache key for the query.
             *
             * @return string 
             * @static 
             */ 
            public static function generateCacheKey()
            {    
                return \October\Rain\Database\QueryBuilder::generateCacheKey();
            }
         
            /**
             * Retrieve the "count" result of the query,
             * also strips off any orderBy clause.
             *
             * @param string $columns
             * @return int 
             * @static 
             */ 
            public static function count($columns = '*')
            {    
                return \October\Rain\Database\QueryBuilder::count($columns);
            }
         
            /**
             * Insert a new record and get the value of the primary key.
             *
             * @param array $values
             * @param string $sequence
             * @return int 
             * @static 
             */ 
            public static function insertGetId($values, $sequence = null)
            {    
                return \October\Rain\Database\QueryBuilder::insertGetId($values, $sequence);
            }
         
            /**
             * Insert a new record into the database.
             *
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function insert($values)
            {    
                return \October\Rain\Database\QueryBuilder::insert($values);
            }
         
            /**
             * Run a truncate statement on the table.
             *
             * @return void 
             * @static 
             */ 
            public static function truncate()
            {    
                \October\Rain\Database\QueryBuilder::truncate();
            }
         
            /**
             * Clear memory cache for the given table.
             *
             * @param string|null $table
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function clearDuplicateCache($table = null)
            {    
                return \October\Rain\Database\QueryBuilder::clearDuplicateCache($table);
            }
         
            /**
             * Flush the memory cache.
             *
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function flushDuplicateCache()
            {    
                return \October\Rain\Database\QueryBuilder::flushDuplicateCache();
            }
         
            /**
             * Enable the memory cache on the query.
             *
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function enableDuplicateCache()
            {    
                return \October\Rain\Database\QueryBuilder::enableDuplicateCache();
            }
         
            /**
             * Disable the memory cache on the query.
             *
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function disableDuplicateCache()
            {    
                return \October\Rain\Database\QueryBuilder::disableDuplicateCache();
            }
         
            /**
             * Determine whether we're caching duplicate queries.
             *
             * @return bool 
             * @static 
             */ 
            public static function cachingDuplicates()
            {    
                return \October\Rain\Database\QueryBuilder::cachingDuplicates();
            }
         
            /**
             * Set the columns to be selected.
             *
             * @param array|mixed $columns
             * @return $this 
             * @static 
             */ 
            public static function select($columns = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::select($columns);
            }
         
            /**
             * Add a new "raw" select expression to the query.
             *
             * @param string $expression
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function selectRaw($expression, $bindings = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::selectRaw($expression, $bindings);
            }
         
            /**
             * Add a subselect expression to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|string $query
             * @param string $as
             * @return \Illuminate\Database\Query\Builder|static 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function selectSub($query, $as)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::selectSub($query, $as);
            }
         
            /**
             * Add a new select column to the query.
             *
             * @param array|mixed $column
             * @return $this 
             * @static 
             */ 
            public static function addSelect($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::addSelect($column);
            }
         
            /**
             * Force the query to only return distinct results.
             *
             * @return $this 
             * @static 
             */ 
            public static function distinct()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::distinct();
            }
         
            /**
             * Set the table which the query is targeting.
             *
             * @param string $table
             * @return $this 
             * @static 
             */ 
            public static function from($table)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::from($table);
            }
         
            /**
             * Add a join clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @param string $type
             * @param bool $where
             * @return $this 
             * @static 
             */ 
            public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::join($table, $first, $operator, $second, $type, $where);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @param string $type
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::joinWhere($table, $first, $operator, $second, $type);
            }
         
            /**
             * Add a left join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoin($table, $first, $operator = null, $second = null)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::leftJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function leftJoinWhere($table, $first, $operator, $second)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::leftJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a right join to the query.
             *
             * @param string $table
             * @param string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoin($table, $first, $operator = null, $second = null)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::rightJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "right join where" clause to the query.
             *
             * @param string $table
             * @param string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function rightJoinWhere($table, $first, $operator, $second)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::rightJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a "cross join" clause to the query.
             *
             * @param string $table
             * @param string|null $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function crossJoin($table, $first = null, $operator = null, $second = null)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::crossJoin($table, $first, $operator, $second);
            }
         
            /**
             * Merge an array of where clauses and bindings.
             *
             * @param array $wheres
             * @param array $bindings
             * @return void 
             * @static 
             */ 
            public static function mergeWheres($wheres, $bindings)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                \October\Rain\Database\QueryBuilder::mergeWheres($wheres, $bindings);
            }
         
            /**
             * Prepare the value and operator for a where clause.
             *
             * @param string $value
             * @param string $operator
             * @param bool $useDefault
             * @return array 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function prepareValueAndOperator($value, $operator, $useDefault = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::prepareValueAndOperator($value, $operator, $useDefault);
            }
         
            /**
             * Add a "where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @param string|null $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereColumn($first, $operator, $second, $boolean);
            }
         
            /**
             * Add an "or where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereColumn($first, $operator = null, $second = null)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereColumn($first, $operator, $second);
            }
         
            /**
             * Add a raw where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function whereRaw($sql, $bindings = array(), $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereRaw($sql, $bindings = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereRaw($sql, $bindings);
            }
         
            /**
             * Add a "where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereIn($column, $values, $boolean = 'and', $not = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereIn($column, $values, $boolean, $not);
            }
         
            /**
             * Add an "or where in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereIn($column, $values)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereIn($column, $values);
            }
         
            /**
             * Add a "where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotIn($column, $values, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereNotIn($column, $values, $boolean);
            }
         
            /**
             * Add an "or where not in" clause to the query.
             *
             * @param string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotIn($column, $values)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereNotIn($column, $values);
            }
         
            /**
             * Add a "where null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereNull($column, $boolean = 'and', $not = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereNull($column, $boolean, $not);
            }
         
            /**
             * Add an "or where null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNull($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereNull($column);
            }
         
            /**
             * Add a "where not null" clause to the query.
             *
             * @param string $column
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotNull($column, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereNotNull($column, $boolean);
            }
         
            /**
             * Add a where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereBetween($column, $values, $boolean = 'and', $not = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereBetween($column, $values, $boolean, $not);
            }
         
            /**
             * Add an or where between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereBetween($column, $values)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereBetween($column, $values);
            }
         
            /**
             * Add a where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotBetween($column, $values, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereNotBetween($column, $values, $boolean);
            }
         
            /**
             * Add an or where not between statement to the query.
             *
             * @param string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotBetween($column, $values)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereNotBetween($column, $values);
            }
         
            /**
             * Add an "or where not null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotNull($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereNotNull($column);
            }
         
            /**
             * Add a "where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDate($column, $operator, $value = null, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereDate($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where date" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param string $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereDate($column, $operator, $value)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereDate($column, $operator, $value);
            }
         
            /**
             * Add a "where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereTime($column, $operator, $value, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereTime($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where time" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereTime($column, $operator, $value)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereTime($column, $operator, $value);
            }
         
            /**
             * Add a "where day" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereDay($column, $operator, $value = null, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereDay($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "where month" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereMonth($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "where year" statement to the query.
             *
             * @param string $column
             * @param string $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereYear($column, $operator, $value = null, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereYear($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a nested where statement to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNested($callback, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereNested($callback, $boolean);
            }
         
            /**
             * Create a new query instance for nested where condition.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forNestedWhere()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::forNestedWhere();
            }
         
            /**
             * Add another query builder as a nested where to the query builder.
             *
             * @param \Illuminate\Database\Query\Builder|static $query
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function addNestedWhereQuery($query, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::addNestedWhereQuery($query, $boolean);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function whereExists($callback, $boolean = 'and', $not = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereExists($callback, $boolean, $not);
            }
         
            /**
             * Add an or exists clause to the query.
             *
             * @param \Closure $callback
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereExists($callback, $not = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereExists($callback, $not);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function whereNotExists($callback, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::whereNotExists($callback, $boolean);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure $callback
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orWhereNotExists($callback)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orWhereNotExists($callback);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @param string $boolean
             * @param bool $not
             * @return $this 
             * @static 
             */ 
            public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::addWhereExistsQuery($query, $boolean, $not);
            }
         
            /**
             * Handles dynamic "where" clauses to the query.
             *
             * @param string $method
             * @param string $parameters
             * @return $this 
             * @static 
             */ 
            public static function dynamicWhere($method, $parameters)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::dynamicWhere($method, $parameters);
            }
         
            /**
             * Add a "group by" clause to the query.
             *
             * @param array $groups
             * @return $this 
             * @static 
             */ 
            public static function groupBy($groups = null)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::groupBy($groups);
            }
         
            /**
             * Add a "having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function having($column, $operator = null, $value = null, $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::having($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a "or having" clause to the query.
             *
             * @param string $column
             * @param string|null $operator
             * @param string|null $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHaving($column, $operator = null, $value = null)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orHaving($column, $operator, $value);
            }
         
            /**
             * Add a raw having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @param string $boolean
             * @return $this 
             * @static 
             */ 
            public static function havingRaw($sql, $bindings = array(), $boolean = 'and')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::havingRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function orHavingRaw($sql, $bindings = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orHavingRaw($sql, $bindings);
            }
         
            /**
             * Add an "order by" clause to the query.
             *
             * @param string $column
             * @param string $direction
             * @return $this 
             * @static 
             */ 
            public static function orderBy($column, $direction = 'asc')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orderBy($column, $direction);
            }
         
            /**
             * Add a descending "order by" clause to the query.
             *
             * @param string $column
             * @return $this 
             * @static 
             */ 
            public static function orderByDesc($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orderByDesc($column);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function latest($column = 'created_at')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::latest($column);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function oldest($column = 'created_at')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::oldest($column);
            }
         
            /**
             * Put the query's results in random order.
             *
             * @param string $seed
             * @return $this 
             * @static 
             */ 
            public static function inRandomOrder($seed = '')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::inRandomOrder($seed);
            }
         
            /**
             * Add a raw "order by" clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return $this 
             * @static 
             */ 
            public static function orderByRaw($sql, $bindings = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::orderByRaw($sql, $bindings);
            }
         
            /**
             * Alias to set the "offset" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function skip($value)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::skip($value);
            }
         
            /**
             * Set the "offset" value of the query.
             *
             * @param int $value
             * @return $this 
             * @static 
             */ 
            public static function offset($value)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::offset($value);
            }
         
            /**
             * Alias to set the "limit" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function take($value)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::take($value);
            }
         
            /**
             * Set the "limit" value of the query.
             *
             * @param int $value
             * @return $this 
             * @static 
             */ 
            public static function limit($value)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::limit($value);
            }
         
            /**
             * Set the limit and offset for a given page.
             *
             * @param int $page
             * @param int $perPage
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPage($page, $perPage = 15)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::forPage($page, $perPage);
            }
         
            /**
             * Constrain the query to the next "page" of results after a given ID.
             *
             * @param int $perPage
             * @param int $lastId
             * @param string $column
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::forPageAfterId($perPage, $lastId, $column);
            }
         
            /**
             * Add a union statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @param bool $all
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function union($query, $all = false)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::union($query, $all);
            }
         
            /**
             * Add a union all statement to the query.
             *
             * @param \Illuminate\Database\Query\Builder|\Closure $query
             * @return \Illuminate\Database\Query\Builder|static 
             * @static 
             */ 
            public static function unionAll($query)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::unionAll($query);
            }
         
            /**
             * Lock the selected rows in the table.
             *
             * @param string|bool $value
             * @return $this 
             * @static 
             */ 
            public static function lock($value = true)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::lock($value);
            }
         
            /**
             * Lock the selected rows in the table for updating.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function lockForUpdate()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::lockForUpdate();
            }
         
            /**
             * Share lock the selected rows in the table.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function sharedLock()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::sharedLock();
            }
         
            /**
             * Get the SQL representation of the query.
             *
             * @return string 
             * @static 
             */ 
            public static function toSql()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::toSql();
            }
         
            /**
             * Get the count of the total records for the paginator.
             *
             * @param array $columns
             * @return int 
             * @static 
             */ 
            public static function getCountForPagination($columns = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::getCountForPagination($columns);
            }
         
            /**
             * Concatenate values of a given column as a string.
             *
             * @param string $column
             * @param string $glue
             * @return string 
             * @static 
             */ 
            public static function implode($column, $glue = '')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::implode($column, $glue);
            }
         
            /**
             * Determine if any rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function exists()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::exists();
            }
         
            /**
             * Determine if no rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function doesntExist()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::doesntExist();
            }
         
            /**
             * Retrieve the minimum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function min($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::min($column);
            }
         
            /**
             * Retrieve the maximum value of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function max($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::max($column);
            }
         
            /**
             * Retrieve the sum of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function sum($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::sum($column);
            }
         
            /**
             * Retrieve the average of the values of a given column.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function avg($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::avg($column);
            }
         
            /**
             * Alias for the "avg" method.
             *
             * @param string $column
             * @return mixed 
             * @static 
             */ 
            public static function average($column)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::average($column);
            }
         
            /**
             * Execute an aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return mixed 
             * @static 
             */ 
            public static function aggregate($function, $columns = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::aggregate($function, $columns);
            }
         
            /**
             * Execute a numeric aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return float|int 
             * @static 
             */ 
            public static function numericAggregate($function, $columns = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::numericAggregate($function, $columns);
            }
         
            /**
             * Insert or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function updateOrInsert($attributes, $values = array())
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::updateOrInsert($attributes, $values);
            }
         
            /**
             * Create a raw database expression.
             *
             * @param mixed $value
             * @return \Illuminate\Database\Query\Expression 
             * @static 
             */ 
            public static function raw($value)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::raw($value);
            }
         
            /**
             * Get the current query value bindings in a flattened array.
             *
             * @return array 
             * @static 
             */ 
            public static function getBindings()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::getBindings();
            }
         
            /**
             * Get the raw array of bindings.
             *
             * @return array 
             * @static 
             */ 
            public static function getRawBindings()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::getRawBindings();
            }
         
            /**
             * Set the bindings on the query builder.
             *
             * @param array $bindings
             * @param string $type
             * @return $this 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function setBindings($bindings, $type = 'where')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::setBindings($bindings, $type);
            }
         
            /**
             * Add a binding to the query.
             *
             * @param mixed $value
             * @param string $type
             * @return $this 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function addBinding($value, $type = 'where')
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::addBinding($value, $type);
            }
         
            /**
             * Merge an array of bindings into our bindings.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return $this 
             * @static 
             */ 
            public static function mergeBindings($query)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::mergeBindings($query);
            }
         
            /**
             * Get the database query processor instance.
             *
             * @return \Illuminate\Database\Query\Processors\Processor 
             * @static 
             */ 
            public static function getProcessor()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::getProcessor();
            }
         
            /**
             * Get the query grammar instance.
             *
             * @return \Illuminate\Database\Query\Grammars\Grammar 
             * @static 
             */ 
            public static function getGrammar()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::getGrammar();
            }
         
            /**
             * Use the write pdo for query.
             *
             * @return $this 
             * @static 
             */ 
            public static function useWritePdo()
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::useWritePdo();
            }
         
            /**
             * Clone the query without the given properties.
             *
             * @param array $properties
             * @return static 
             * @static 
             */ 
            public static function cloneWithout($properties)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::cloneWithout($properties);
            }
         
            /**
             * Clone the query without the given bindings.
             *
             * @param array $except
             * @return static 
             * @static 
             */ 
            public static function cloneWithoutBindings($except)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::cloneWithoutBindings($except);
            }
         
            /**
             * Register a custom macro.
             *
             * @param string $name
             * @param object|callable $macro
             * @return void 
             * @static 
             */ 
            public static function macro($name, $macro)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                \October\Rain\Database\QueryBuilder::macro($name, $macro);
            }
         
            /**
             * Mix another object into the class.
             *
             * @param object $mixin
             * @return void 
             * @static 
             */ 
            public static function mixin($mixin)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                \October\Rain\Database\QueryBuilder::mixin($mixin);
            }
         
            /**
             * Checks if macro is registered.
             *
             * @param string $name
             * @return bool 
             * @static 
             */ 
            public static function hasMacro($name)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::hasMacro($name);
            }
         
            /**
             * Dynamically handle calls to the class.
             *
             * @param string $method
             * @param array $parameters
             * @return mixed 
             * @throws \BadMethodCallException
             * @static 
             */ 
            public static function macroCall($method, $parameters)
            {    
                //Method inherited from \Illuminate\Database\Query\Builder                    
                return \October\Rain\Database\QueryBuilder::macroCall($method, $parameters);
            }
        }

    class Event extends \Illuminate\Support\Facades\Event {}

    class Hash extends \Illuminate\Support\Facades\Hash {}

    class Input extends \Illuminate\Support\Facades\Input {}

    class Lang extends \Illuminate\Support\Facades\Lang {}

    class Log extends \Illuminate\Support\Facades\Log {}

    class Mail extends \Illuminate\Support\Facades\Mail {}

    class Queue extends \Illuminate\Support\Facades\Queue {}

    class Redirect extends \Illuminate\Support\Facades\Redirect {}

    class Request extends \Illuminate\Support\Facades\Request {}

    class Response extends \Illuminate\Support\Facades\Response {}

    class Route extends \Illuminate\Support\Facades\Route {}

    class Session extends \Illuminate\Support\Facades\Session {}

    class Storage extends \Illuminate\Support\Facades\Storage {}

    class Url extends \Illuminate\Support\Facades\URL {}

    class URL extends \Illuminate\Support\Facades\URL {}

    class Validator extends \Illuminate\Support\Facades\Validator {}

    class View extends \Illuminate\Support\Facades\View {}

    class Model extends \October\Rain\Database\Model {}

    class Block extends \October\Rain\Support\Facades\Block {}

    class File extends \October\Rain\Support\Facades\File {}

    class Config extends \October\Rain\Support\Facades\Config {}

    class Seeder extends \October\Rain\Database\Updates\Seeder {}

    class Flash extends \October\Rain\Support\Facades\Flash {}

    class Form extends \October\Rain\Support\Facades\Form {}

    class Html extends \October\Rain\Support\Facades\Html {}

    class Http extends \October\Rain\Support\Facades\Http {}

    class Str extends \October\Rain\Support\Facades\Str {}

    class Markdown extends \October\Rain\Support\Facades\Markdown {}

    class Yaml extends \October\Rain\Support\Facades\Yaml {}

    class Ini extends \October\Rain\Support\Facades\Ini {}

    class Twig extends \October\Rain\Support\Facades\Twig {}

    class DbDongle extends \October\Rain\Support\Facades\DbDongle {}

    class Schema extends \October\Rain\Support\Facades\Schema {}

    class Cms extends \Cms\Facades\Cms {}

    class Backend extends \Backend\Facades\Backend {}

    class BackendMenu extends \Backend\Facades\BackendMenu {}

    class BackendAuth extends \Backend\Facades\BackendAuth {}

    class AjaxException extends \October\Rain\Exception\AjaxException {}

    class SystemException extends \October\Rain\Exception\SystemException {}

    class ApplicationException extends \October\Rain\Exception\ApplicationException {}

    class ValidationException extends \October\Rain\Exception\ValidationException {}

    class Date extends \Jenssegers\Date\Date {}
 
}




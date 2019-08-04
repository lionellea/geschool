<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
        'classe_index' => [[], ['_controller' => 'App\\Controller\\ClasseController::index'], [], [['text', '/classe/']], [], []],
        'classe_new' => [[], ['_controller' => 'App\\Controller\\ClasseController::new'], [], [['text', '/classe/new']], [], []],
        'classe_show' => [['id'], ['_controller' => 'App\\Controller\\ClasseController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/classe']], [], []],
        'classe_edit' => [['id'], ['_controller' => 'App\\Controller\\ClasseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/classe']], [], []],
        'classe_delete' => [['id'], ['_controller' => 'App\\Controller\\ClasseController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/classe']], [], []],
        'home' => [[], ['_controller' => 'App\\Controller\\DefaultController::admin'], [], [['text', '/']], [], []],
        'parametre' => [[], ['_controller' => 'App\\Controller\\DefaultController::parametre'], [], [['text', '/parametre']], [], []],
        'eleve_index' => [[], ['_controller' => 'App\\Controller\\EleveController::index'], [], [['text', '/eleve/']], [], []],
        'inscrire' => [['id'], ['_controller' => 'App\\Controller\\EleveController::inscrire'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eleve/inscrire']], [], []],
        'inscription' => [[], ['_controller' => 'App\\Controller\\EleveController::inscription'], [], [['text', '/eleve/inscription']], [], []],
        'eleve_new' => [[], ['_controller' => 'App\\Controller\\EleveController::new'], [], [['text', '/eleve/new']], [], []],
        'eleve_show' => [['id'], ['_controller' => 'App\\Controller\\EleveController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eleve']], [], []],
        'eleve_edit' => [['id'], ['_controller' => 'App\\Controller\\EleveController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/eleve']], [], []],
        'eleve_delete' => [['id'], ['_controller' => 'App\\Controller\\EleveController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/eleve']], [], []],
        'salle_index' => [[], ['_controller' => 'App\\Controller\\SalleController::index'], [], [['text', '/salle/']], [], []],
        'sectiona' => [[], ['_controller' => 'App\\Controller\\SalleController::sectiona'], [], [['text', '/salle/']], [], []],
        'sectionf' => [[], ['_controller' => 'App\\Controller\\SalleController::sectionf'], [], [['text', '/salle/']], [], []],
        'sectionb' => [[], ['_controller' => 'App\\Controller\\SalleController::sectionb'], [], [['text', '/salle/']], [], []],
        'salle_new' => [[], ['_controller' => 'App\\Controller\\SalleController::new'], [], [['text', '/salle/new']], [], []],
        'salle_show' => [['id'], ['_controller' => 'App\\Controller\\SalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], []],
        'salle_edit' => [['id'], ['_controller' => 'App\\Controller\\SalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], []],
        'salle_delete' => [['id'], ['_controller' => 'App\\Controller\\SalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

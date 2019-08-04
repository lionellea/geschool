<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/classe' => [[['_route' => 'classe_index', '_controller' => 'App\\Controller\\ClasseController::index'], null, ['GET' => 0], null, true, false, null]],
            '/classe/new' => [[['_route' => 'classe_new', '_controller' => 'App\\Controller\\ClasseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::admin'], null, ['GET' => 0], null, false, false, null]],
            '/parametre' => [[['_route' => 'parametre', '_controller' => 'App\\Controller\\DefaultController::parametre'], null, ['GET' => 0], null, false, false, null]],
            '/eleve' => [[['_route' => 'eleve_index', '_controller' => 'App\\Controller\\EleveController::index'], null, ['GET' => 0], null, true, false, null]],
            '/eleve/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\EleveController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/eleve/new' => [[['_route' => 'eleve_new', '_controller' => 'App\\Controller\\EleveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/salle' => [
                [['_route' => 'salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, true, false, null],
                [['_route' => 'sectiona', '_controller' => 'App\\Controller\\SalleController::sectiona'], null, ['GET' => 0], null, true, false, null],
                [['_route' => 'sectionf', '_controller' => 'App\\Controller\\SalleController::sectionf'], null, ['GET' => 0], null, true, false, null],
                [['_route' => 'sectionb', '_controller' => 'App\\Controller\\SalleController::sectionb'], null, ['GET' => 0], null, true, false, null],
            ],
            '/salle/new' => [[['_route' => 'salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/classe/([^/]++)(?'
                        .'|(*:188)'
                        .'|/edit(*:201)'
                        .'|(*:209)'
                    .')'
                    .'|/eleve/(?'
                        .'|inscrire/([^/]++)(*:245)'
                        .'|([^/]++)(?'
                            .'|(*:264)'
                            .'|/edit(*:277)'
                            .'|(*:285)'
                        .')'
                    .')'
                    .'|/salle/([^/]++)(?'
                        .'|(*:313)'
                        .'|/edit(*:326)'
                        .'|(*:334)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            188 => [[['_route' => 'classe_show', '_controller' => 'App\\Controller\\ClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            201 => [[['_route' => 'classe_edit', '_controller' => 'App\\Controller\\ClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            209 => [[['_route' => 'classe_delete', '_controller' => 'App\\Controller\\ClasseController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            245 => [[['_route' => 'inscrire', '_controller' => 'App\\Controller\\EleveController::inscrire'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            264 => [[['_route' => 'eleve_show', '_controller' => 'App\\Controller\\EleveController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            277 => [[['_route' => 'eleve_edit', '_controller' => 'App\\Controller\\EleveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            285 => [[['_route' => 'eleve_delete', '_controller' => 'App\\Controller\\EleveController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            313 => [[['_route' => 'salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            326 => [[['_route' => 'salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            334 => [[['_route' => 'salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}

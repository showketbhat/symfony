<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'ShowketBhatBundle_homepage' => true,
       'ShowketBhatBundle_movies' => true,
       'ShowketBhatBundle_song' => true,
       'ShowketBhatBundle_register' => true,
       'ShowketBhatBundle_information' => true,
       'ShowketBhatBundle_registeruser' => true,
       'BloggerBlogBundle_homepage' => true,
       'BloggerBlogBundle_about' => true,
       'BloggerBlogBundle_contact' => true,
       'BloggerBlogBundle_comment_create' => true,
       'BloggerBlogBundle_blog_show' => true,
       'AcmeHelloBundle_homepage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getShowketBhatBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Showket\\BhatBundle\\Controller\\MyController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/showket/',  ),));
    }

    private function getShowketBhatBundle_moviesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Showket\\BhatBundle\\Controller\\MyController::moviesAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/showket/movies',  ),));
    }

    private function getShowketBhatBundle_songRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Showket\\BhatBundle\\Controller\\MyController::songAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/showket/song',  ),));
    }

    private function getShowketBhatBundle_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Showket\\BhatBundle\\Controller\\MyController::registerAction',), array (  '_method' => 'GET|POSt',), array (  0 =>   array (    0 => 'text',    1 => '/showket/register',  ),));
    }

    private function getShowketBhatBundle_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Showket\\BhatBundle\\Controller\\UserinfoController::infoAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/showket/userinfo',  ),));
    }

    private function getShowketBhatBundle_registeruserRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Showket\\BhatBundle\\Controller\\UserinfoController::registerAction',), array (  '_method' => 'GET|POSt',), array (  0 =>   array (    0 => 'text',    1 => '/showket/register_user',  ),));
    }

    private function getBloggerBlogBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getBloggerBlogBundle_aboutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::aboutAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/about',  ),));
    }

    private function getBloggerBlogBundle_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\PageController::contactAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getBloggerBlogBundle_comment_createRouteInfo()
    {
        return array(array (  0 => 'blog_id',), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\CommentController::createAction',), array (  '_method' => 'POST',  'blog_id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'blog_id',  ),  1 =>   array (    0 => 'text',    1 => '/comment',  ),));
    }

    private function getBloggerBlogBundle_blog_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Blogger\\BlogBundle\\Controller\\BlogController::showAction',), array (  '_method' => 'GET',  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),));
    }

    private function getAcmeHelloBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }
}

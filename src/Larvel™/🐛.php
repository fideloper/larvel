<?php namespace Larvel™;

use Illuminate\Container\Container;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;

class 🐛 extends Container {

    public function __construct()
    {
        $this['🏃'] = $this->share(function($app)
        {
            return $app->make('Larvel™\Routing\🏃');
        });

        $this['❓'] = Request::createFromGlobals();
    }

    public function 🔫()
    {
        $context = new RequestContext;
        $context->fromRequest( $this['❓'] );

        $matcher = new UrlMatcher($this['🏃']->routes(), $context);

        $parameters = $matcher->matchRequest( $this['❓'] );

        if( $parameters['_controller'] instanceof \Closure )
        {
            $out = $parameters['_controller']($this['❓']);
        } elseif( is_string($parameters['_controller']) )
        {
            $parts = explode('@', $parameters['_controller']);

            $controller = $his->make($parts[0]);

            $out = $controller->$parts[1]($this['❓']);
        }

        if( ! $out instanceof Response )
        {
            $out = new Response($out);
        }

        return $out->send();
    }


}

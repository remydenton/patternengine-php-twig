<?php

namespace PatternLab\PatternEngine\Twig\Loaders;

use \Twig\Loader\ExistsLoaderInterface;
use \Twig\Loader\LoaderInterface;
use \Twig\Loader\SourceContextLoaderInterface;
use \Twig\Source;

//@trigger_error('The Twig_Loader_String class is deprecated since version 1.18.1 and will be removed in 2.0. Use "Twig\Loader\ArrayLoader" instead or "Twig\Environment::createTemplate()".', E_USER_DEPRECATED);

/**
 * This is a copy of the Twig_Loader_String loader, which existed in Twig 1.0.
 */
class PatternLabStringLoader implements LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface
{
    public function getSource($name)
    {
        @trigger_error(sprintf('Calling "getSource" on "%s" is deprecated since 1.27. Use getSourceContext() instead.', \get_class($this)), E_USER_DEPRECATED);

        return $name;
    }

    public function getSourceContext($name)
    {
        return new Source($name, $name);
    }

    public function exists($name)
    {
        return true;
    }

    public function getCacheKey($name)
    {
        return $name;
    }

    public function isFresh($name, $time)
    {
        return true;
    }
}

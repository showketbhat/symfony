<?php

/* ShowketBhatBundle:My:index.html.twig */
class __TwigTemplate_33177a8a5166efe6e6d18b7b461ed547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShowketBhatBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navigation($context, array $blocks = array())
    {
        // line 4
        echo "\t<h3>These Are the links to ShowketBhatBundle Module</h3>
\t<nav>
\t    <ul class=\"navigation\">
\t\t <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
\t\t <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_song"), "html", null, true);
        echo "\">Songs</a></li>
\t\t <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_movies"), "html", null, true);
        echo "\">Movies</a></li>
\t    </ul>
\t</nav>
";
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "    Showket Content Here
";
    }

    public function getTemplateName()
    {
        return "ShowketBhatBundle:My:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

<?php

/* ShowketBhatBundle:My:index.html.twig */
class __TwigTemplate_33177a8a5166efe6e6d18b7b461ed547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
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

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
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

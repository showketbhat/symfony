<?php

/* ShowketBhatBundle:My:song.html.twig */
class __TwigTemplate_60760d968bfcee4680f03344cd1a7369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        echo "this is my Songs html file";
    }

    public function getTemplateName()
    {
        return "ShowketBhatBundle:My:song.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

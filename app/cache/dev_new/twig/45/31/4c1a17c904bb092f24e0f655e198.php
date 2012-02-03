<?php

/* ShowketBhatBundle:Register:register.html.twig */
class __TwigTemplate_45314c1a17c904bb092f24e0f655e198 extends Twig_Template
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
        echo "Here I will Write Code for registration In ShowketBhatBundle (I Am In Register Folder)";
    }

    public function getTemplateName()
    {
        return "ShowketBhatBundle:Register:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

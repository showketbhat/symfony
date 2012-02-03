<?php

/* AcmeHelloBundle:Default:index.html.twig */
class __TwigTemplate_83f1639df4f89c52e24e2d932e12620b extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

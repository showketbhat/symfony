<?php

/* ShowketBhatBundle:Default:index.html.twig */
class __TwigTemplate_41e37b09bab43e86927e1f278eff73b7 extends Twig_Template
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
        return "ShowketBhatBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

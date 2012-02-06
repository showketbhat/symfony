<?php

/* ShowketBhatBundle:My:userinfo.html.twig */
class __TwigTemplate_a211ef16484243f1c3c114e2df3fe945 extends Twig_Template
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
        echo "this is my userinfo html file <p>
Where Ever U ll Go I am Gonna Follow You <p>
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "info"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
            echo " \t        Name  = \t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name"), "html", null, true);
            echo " <p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "ShowketBhatBundle:My:userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

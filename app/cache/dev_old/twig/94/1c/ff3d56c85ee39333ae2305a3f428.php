<?php

/* ShowketBhatBundle:My:register.html.twig */
class __TwigTemplate_941cff3d56c85ee39333ae2305a3f428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Register";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>
\t<p>Want to contact symblog?</p>
    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_register"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " >
        ";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

\t<div>";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "f_name"));
        echo "</div><p>
\t<div>";
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "l_name"));
        echo "</div><p>
\t<div>";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "age"));
        echo "</div><p>
\t<div>";
        // line 18
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "sex"));
        echo "</div><p>
\t<div>";
        // line 19
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "location"));
        echo "</div><p>
        <div>";
        // line 20
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "</div><p>
       

        ";
        // line 23
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "ShowketBhatBundle:My:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

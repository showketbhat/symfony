<?php

/* ShowketBhatBundle:My:userinfoform.html.twig */
class __TwigTemplate_b74492d4b6637913fac08fa4d148a174 extends Twig_Template
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
        echo "UserInfo";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <header>
        <h1>User Information</h1>
    </header>
\t<p>Register Urself With Symfony Today?</p>
    <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_registeruser"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " >
        ";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

\t<div>";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "</div><p>
\t<div>";
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "username"));
        echo "</div><p>
        <div>";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "</div><p>
       

        ";
        // line 20
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "ShowketBhatBundle:My:userinfoform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

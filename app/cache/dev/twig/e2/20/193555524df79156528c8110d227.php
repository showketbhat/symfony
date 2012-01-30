<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_e220193555524df79156528c8110d227 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'test' => array($this, 'block_test'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 6
    public function block_navigation($context, array $blocks = array())
    {
        // line 7
        echo "\t<nav>
\t    <ul class=\"navigation\">
\t\t <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
\t\t <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
\t\t <li><a href=\"#\">Contact</a></li>
\t\t <li><a href=\"#\">Contact</a></li>
\t\t <li><a href=\"#\">Contact</a></li>
\t\t <li><a href=\"#\">Contact</a></li>
\t\t <li><a href=\"#\">Contact</a></li>
\t    </ul>
\t</nav>
";
    }

    // line 40
    public function block_test($context, array $blocks = array())
    {
        // line 41
        echo "\t\tI dont know what to write here but i expect it come after the body block..Lets See
\t";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
    
<div class=\"new-col\">
        ";
        // line 40
        $this->displayBlock('test', $context, $blocks);
        // line 43
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

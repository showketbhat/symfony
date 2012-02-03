<?php

/* ShowketBhatBundle::layout.html.twig */
class __TwigTemplate_642ee27891c844ea1296873f560b0115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
\t<!-- Above used Tag is Called Twig Do something tag -->

        <!--[if lt IE 9]>
            \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script> 
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t<!-- Above used  tag is called as Say something tag -->
    </head>
    <body>
\t<section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 35
        echo "                </div>
\t    </header>
\t\t <section class=\"main-col\">
        \t        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "\t         </section>
\t\t <aside class=\"sidebar\">
        \t        ";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "\t         </aside>
\t</section>
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        // line 23
        echo "\t\t\t<h3>These Are the links to ShowketbhatBundle Module</h3>
                        <nav>
                            <ul class=\"navigation\">
                                 <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
           \t\t\t <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_song"), "html", null, true);
        echo "\">Songs</a></li>
           \t\t\t <!-- Above we are giving a routing path -->
           \t\t\t <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_movies"), "html", null, true);
        echo "\">Movies</a></li>
           \t\t\t <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_register"), "html", null, true);
        echo "\">Registration</a></li>
           \t\t\t <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Go To Bloger</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ShowketBhatBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

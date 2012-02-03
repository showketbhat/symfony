<?php

/* ::base.html.twig */
class __TwigTemplate_89f0be59eee4a61ff630215c5c3035b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
\t<!-- Above used Tag is Called Twig Do something tag -->

        <!--[if lt IE 9]>
            \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script> 
        <![endif]-->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t<!-- Above used  tag is called as Say something tag -->
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 24
        $this->displayBlock('navigation', $context, $blocks);
        // line 34
        echo "                </div>

\t\t<hgroup>
\t\t    <h2>";
        // line 37
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
\t\t    <h3>";
        // line 38
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
\t\t</hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 46
        $this->displayBlock('sidebar', $context, $blocks);
        // line 47
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "            </div>
        </section>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        // line 25
        echo "                        <nav>
                            <ul class=\"navigation\">
                                 <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
\t\t\t           \t\t\t <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
\t\t\t           \t\t\t <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
\t\t\t           \t\t\t <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShowketBhatBundle_homepage"), "html", null, true);
        echo "\">Go To Showket's Bundle</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 37
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">symblog</a>";
    }

    // line 38
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage"), "html", null, true);
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

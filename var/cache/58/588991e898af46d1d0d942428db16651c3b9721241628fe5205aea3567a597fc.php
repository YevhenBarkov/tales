<?php

/* base.html.twig */
class __TwigTemplate_7dbff6928585a4f0e6c9d96b37d7674f83ba108c5282d0e7825dbef636579638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<meta charset=\"UTF-8\" />
<head>
    <link rel=\"stylesheet\" href=\"bootstrap-3.3.7-dist/css/bootstrap.css\" type=\"text/css\"/>
    <title>Tales</title>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "    <script src=\"js/scripts.js\"></script>
</head>
<body>
<div id=\"all\" class=\"container-fluid col-lg-10 col-lg-offset-1\">
    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/\">Home page</a></li>
                <li><a href=\"/talesList\">Tales list</a></li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 22
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user", array())) {
            // line 23
            echo "                    <li><a href=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["session"] ?? null), "user", array()), "login", array()), "html", null, true);
            echo "</a></li>
                    <li><a href=\"/logout\"><span class=\"glyphicon glyphicon-log-out\"></span> Log out</a></li>
                ";
        } else {
            // line 26
            echo "                    <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Log in</a></li>
                    <li><a href=\"/reg\"><span class=\"glyphicon glyphicon-user\"></span> Sign up</a></li>
                ";
        }
        // line 29
        echo "            </ul>
        </div>
    </nav>
    ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
</div>

";
        // line 42
        echo "</body>
</html>";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <h1 id=\"sitePage\" class=\"text-center\">Tales</h1>
    ";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        // line 33
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 33,  84 => 32,  79 => 8,  76 => 7,  71 => 42,  66 => 34,  64 => 32,  59 => 29,  54 => 26,  47 => 23,  45 => 22,  31 => 10,  29 => 7,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/yevhen/PhpstormProjects/tales/app/Resources/templates/base.html.twig");
    }
}

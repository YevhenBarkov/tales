<?php

/* home.html.twig */
class __TwigTemplate_3a396e9b20b1eea7abd26f0660206987bbd680af131ed3e8483364011e4e5ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3 class=\"text-center\">Home page</h3><br>
    <div id=\"content\" class=\"container-fluid text-center bg-info col-lg-9 img-rounded\">
        Massage : ";
        // line 6
        echo twig_escape_filter($this->env, ($context["massage"] ?? null), "html", null, true);
        echo "<br>some text for testsome text for testsome text for testsome text for testsome text for test
        some text for testsome text for testsome text for testsome text for testsome text for testsome text for testsome text for testsome text for test
        some text for testsome text for testsome text for testsome text for testsome text for testsome text for testsome text for testsome text for testsome text for testsome text for test
        some text for testsome text for testsome text for testsome text for testsome text for testsome text for test

    </div>
    <div class=\"container-fluid bg-primary col-lg-3 img-rounded\">
        some navigation, tags etc.
    </div>

";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.html.twig", "/home/yevhen/PhpstormProjects/tales/app/Resources/templates/home.html.twig");
    }
}

<?php

/* read.html.twig */
class __TwigTemplate_cc0827551191eed290890022a8a0ed054e8f8bde478fdecc3ace6da1ebcd1b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "read.html.twig", 1);
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
        echo "    <div class=\"text-center\">
        <h3>Read page</h3>
    </div>
    <div>
        <div id=\"content\" class=\"container-viewport col-lg-9\">
            <h4><a href=\"/tale?id=";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["chapter"] ?? null), "tale", array()), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["chapter"] ?? null), "tale", array()), "name", array()), "html", null, true);
        echo "</a> : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["chapter"] ?? null), "name", array()), "html", null, true);
        echo "</h4>
            <p>
                ";
        // line 11
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["chapter"] ?? null), "content", array());
        echo "
            </p>
        </div>
        <div id=\"content\" class=\"container-viewport col-lg-3\">
            <button>Night/Day</button><br><br>
            <button>Hide</button>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "read.html.twig", "/home/yevhen/PhpstormProjects/tales/app/Resources/templates/read.html.twig");
    }
}

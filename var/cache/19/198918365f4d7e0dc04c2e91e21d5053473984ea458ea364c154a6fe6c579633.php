<?php

/* login.html.twig */
class __TwigTemplate_7031ce3e9425de8b839f4e63ef8780f3d9cc1fae41eeaf398cc0bea12f817ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
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
        <h3>Login page</h3>
        Massage : ";
        // line 6
        echo twig_escape_filter($this->env, ($context["massage"] ?? null), "html", null, true);
        echo "
    </div>
    <div>
        <form method=\"post\" class=\"form-horizontal\">
            <div class=\"form-group\">
                <label for=\"loginInput\" class=\"col-sm-2 control-label col-lg-offset-2\">Login</label>
                <div class=\"col-sm-6\">
                    <input name=\"login\" class=\"form-control\" id=\"loginInput\" placeholder=\"Login\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"passwordInput\" class=\"col-sm-2 control-label col-lg-offset-2\">Password</label>
                <div class=\"col-sm-6\">
                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"passwordInput\"
                           placeholder=\"Password\"/>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-lg-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-info\">Sign in</button>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
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
        return new Twig_Source("", "login.html.twig", "/home/yevhen/PhpstormProjects/tales/app/Resources/templates/login.html.twig");
    }
}

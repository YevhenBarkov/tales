<?php

/* reg.html.twig */
class __TwigTemplate_e663fa73cffea615e6886deffc763e2b7878d37b22f2518fa575fcdc34a6c5ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reg.html.twig", 1);
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
        echo "    <h3>Registration page</h3>
    Massage : ";
        // line 5
        echo twig_escape_filter($this->env, ($context["massage"] ?? null), "html", null, true);
        echo "<br>
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
            <label for=\"passwordConfInput\" class=\"col-sm-2 control-label col-lg-offset-2\">Confirm</label>
            <div class=\"col-sm-6\">
                <input name=\"passwordConf\" type=\"password\" class=\"form-control\" id=\"passwordConfInput\"
                       placeholder=\"Confirm\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"emailInput\" class=\"col-sm-2 control-label col-lg-offset-2\">E-mail</label>
            <div class=\"col-sm-6\">
                <input name=\"email\" type=\"email\" class=\"form-control\" id=\"emailInput\"
                       placeholder=\"email@email.com\"/>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-lg-12\">
                <button type=\"submit\" class=\"btn btn-info\">Sign up</button>
            </div>
        </div>
    </form>



";
    }

    public function getTemplateName()
    {
        return "reg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reg.html.twig", "/home/yevhen/PhpstormProjects/tales/app/Resources/templates/reg.html.twig");
    }
}

<?php

/* talesList.html.twig */
class __TwigTemplate_138c1c88ccfb587df7bb2c7e7109de82783d19ab17a3a7e892edfe52326a56ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "talesList.html.twig", 1);
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
        <h3>Tales page</h3>
    </div>
    <div id=\"content\" class=\"container-viewport col-lg-9\">
        <ul class=\"list-group\">
            ";
        // line 9
        if (twig_test_empty(($context["tales"] ?? null))) {
            // line 10
            echo "                <li class=\"list-group-item row\">
                    <h3>No tales by this tags</h3>
                </li>
            ";
        }
        // line 14
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tales"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tale"]) {
            // line 15
            echo "                <li class=\"list-group-item row\">
                    <div class=\"container-viewport\">
                        <a href=\"/tale?id=";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "id", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "cover", array()), "html", null, true);
            echo "\" class=\"col-lg-3 img-rounded\"/></a>
                        <div class=\"container-viewport col-lg-9\">
                            <div class=\"col-lg-2\">Title</div>
                            <div><a href=\"/tale?id=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "name", array()), "html", null, true);
            echo "</a></div>
                            <div class=\"col-lg-2\">Author</div>
                            <div>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "user", array()), "login", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-lg-2\"> Status</div>
                            <div>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "status", array()), "html", null, true);
            echo "</div>
                            <div class=\"col-lg-2\">Tags</div>
                            <div>
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 28
                echo "                                    ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "</div>

                            <div class=\"col-lg-12\">
                                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tale"], "description", array()), "html", null, true);
            echo "a aaa aa aa aa aaaa aa aa aaaa aa aa aaaa aa aa aaaa aa aa aaaa aa
                                aa aaaa aa aa aaa a aa aaa aa aaa aa aa aa aaaa aa aaaaaa
                            </div>
                        </div>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </ul>
    </div>
    <div class=\"container-fluid col-lg-3 \">
        <ul class=\"list-group text-center row\">
            <li class=\"list-group-item active \">
                Tags
            </li>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 47
            echo "                <li class=\"list-group-item container-fluid\">
                    <a onclick=\"searchByTags(0,'";
            // line 48
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "')\" class=\"col-lg-1\"><span class=\"glyphicon glyphicon-ok\"></span></a>
                    <a href=\"/talesList?include=";
            // line 49
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\" class=\"col-sm-8\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a>
                    <a onclick=\"searchByTags(1,'";
            // line 50
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "')\" class=\"col-lg-1\"><span class=\"glyphicon glyphicon-remove\"></span></a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "talesList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 53,  138 => 50,  132 => 49,  128 => 48,  125 => 47,  121 => 46,  112 => 39,  99 => 32,  94 => 29,  85 => 28,  81 => 27,  75 => 24,  70 => 22,  63 => 20,  55 => 17,  51 => 15,  46 => 14,  40 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "talesList.html.twig", "/home/yevhen/PhpstormProjects/tales/app/Resources/templates/talesList.html.twig");
    }
}

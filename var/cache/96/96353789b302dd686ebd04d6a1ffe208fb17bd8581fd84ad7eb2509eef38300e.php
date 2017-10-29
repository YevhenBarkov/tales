<?php

/* tale.html.twig */
class __TwigTemplate_5d8280638aa7e7957861d7b4623413a4d5971b8640a8ef8e90e73927d363da57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tale.html.twig", 1);
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
        <h3>Tale page</h3>
    </div>
    <div>
        <div id=\"content\" class=\"container-viewport col-lg-9\">
            <ul class=\"list-group\">
                <li class=\"list-group-item row\">
                    <div class=\"container-viewport\">
                        <img src=\"img/no_book_cover_lg.jpg\" class=\"col-lg-3 img-rounded\"/>
                        <div class=\"container-viewport col-lg-9\">
                            <div class=\"col-lg-2\">Title</div>
                            <div>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["tale"] ?? null), "name", array()), "html", null, true);
        echo "</div>
                            <div class=\"col-lg-2\">Author</div>
                            <div>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tale"] ?? null), "user", array()), "login", array()), "html", null, true);
        echo "</div>
                            <div class=\"col-lg-2\"> Status</div>
                            <div>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["tale"] ?? null), "status", array()), "name", array()), "html", null, true);
        echo "</div>
                            <div class=\"col-lg-2\">Tags</div>
                            <div>
                                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["tale"] ?? null), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 23
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], "name", array()), "html", null, true);
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</div>

                            <div class=\"col-lg-12\">
                                ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["tale"] ?? null), "description", array()), "html", null, true);
        echo "a aaa aa aa aa aaaa aa aa aaaa aa aa aaaa aa aa aaaa aa aa aaaa aa
                                aa
                                aaaa aa aa aaa a aa aaa aa aaa aa aa aa aaaa aa aaaaaa
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class=\"container-fluid bg-primary col-lg-3 img-rounded\">
            some navigation, tags etc.
        </div>
    </div>
    <div>
        <div id=\"content\" class=\"container-viewport col-lg-9\">
            <ul class=\"list-group\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chapters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
            // line 44
            echo "                    <li class=\"list-group-item\">
                        <a href=\"/read?chapterId=";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["chapter"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["chapter"], "name", array()), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </ul>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "tale.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 48,  104 => 45,  101 => 44,  97 => 43,  78 => 27,  73 => 24,  64 => 23,  60 => 22,  54 => 19,  49 => 17,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tale.html.twig", "/home/yevhen/PhpstormProjects/tales/app/Resources/templates/tale.html.twig");
    }
}

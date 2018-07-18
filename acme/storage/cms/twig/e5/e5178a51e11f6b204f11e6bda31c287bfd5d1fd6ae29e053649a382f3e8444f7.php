<?php

/* D:\xampp2\htdocs\acme/plugins/eduonix/resources/components/links/default.htm */
class __TwigTemplate_9ec1312b4626be491a4724978b5b830b785d2d791dc5c712d1e0b3180bd3adaf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<ul class=\"list-group\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            echo " <li class=\"list-group-item\"> <a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "</a> </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp2\\htdocs\\acme/plugins/eduonix/resources/components/links/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<ul class=\"list-group\">
  {% for link in links %}
 <li class=\"list-group-item\"> <a href=\"{{link}}\">{{link}}</a> </li>
  {%endfor%}
</ul>
", "D:\\xampp2\\htdocs\\acme/plugins/eduonix/resources/components/links/default.htm", "");
    }
}

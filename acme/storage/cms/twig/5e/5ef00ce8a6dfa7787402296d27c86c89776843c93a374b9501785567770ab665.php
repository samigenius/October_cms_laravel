<?php

/* D:\xampp2\htdocs\acme/themes/acme/pages/home.htm */
class __TwigTemplate_e4780dbdb91bb277a9352de894be1d326e5239ad21c0a7a0fd399f726115f4d4 extends Twig_Template
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
        echo "<div class=\"jumbotron text-center\">
 <h1>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</h1>
 <p>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_description", array()), "html", null, true);
        echo "</p>
 <p>
  <a href=\"{'about'|page}\" class=\"btn btn-default\">Read More</a>
 </p>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp2\\htdocs\\acme/themes/acme/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron text-center\">
 <h1>{{this.theme.site_name}}</h1>
 <p>{{this.theme.site_description}}</p>
 <p>
  <a href=\"{'about'|page}\" class=\"btn btn-default\">Read More</a>
 </p>
</div>", "D:\\xampp2\\htdocs\\acme/themes/acme/pages/home.htm", "");
    }
}

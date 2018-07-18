<?php

/* D:\xampp2\htdocs\acme/themes/acme/partials/site/header.htm */
class __TwigTemplate_b7ed0dfc53074b22cf5a390f6fce48a1c72a7f469839fea278e6beee29e50959 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">

     <a class=\"navbar-brand\" href=\"#\">Acme </a>
     <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"navbar-toggler-icon\"></span>
     </button>

     <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
       <ul class=\"navbar-nav mr-auto\">
          <li class=\"";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo " nav-item active\"> <a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
          <li class=\"";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active";
        }
        echo " nav-item active\"> <a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a></li>
          <li class=\"";
        // line 12
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo " nav-item active\"> <a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
            <li class=\"";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "cantact")) {
            echo "active";
        }
        echo " nav-item active\"> <a class=\"nav-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
       </ul>
       <form class=\"form-inline my-2 my-lg-0\">
         <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
         <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
       </form>
     </div>
   </nav>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp2\\htdocs\\acme/themes/acme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  50 => 12,  42 => 11,  34 => 10,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-md navbar-dark bg-dark\">

     <a class=\"navbar-brand\" href=\"#\">Acme </a>
     <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"navbar-toggler-icon\"></span>
     </button>

     <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
       <ul class=\"navbar-nav mr-auto\">
          <li class=\"{% if this.page.id == 'home' %}active{% endif%} nav-item active\"> <a class=\"nav-link\" href=\"{{ 'home'|page}}\">Home</a></li>
          <li class=\"{% if this.page.id == 'about' %}active{% endif%} nav-item active\"> <a class=\"nav-link\" href=\"{{ 'about'|page}}\">About</a></li>
          <li class=\"{% if this.page.id == 'blog' %}active{% endif%} nav-item active\"> <a class=\"nav-link\" href=\"{{ 'blog'|page}}\">Blog</a></li>
            <li class=\"{% if this.page.id == 'cantact' %}active{% endif%} nav-item active\"> <a class=\"nav-link\" href=\"{{ 'contact'|page}}\">Contact</a></li>
       </ul>
       <form class=\"form-inline my-2 my-lg-0\">
         <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
         <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
       </form>
     </div>
   </nav>", "D:\\xampp2\\htdocs\\acme/themes/acme/partials/site/header.htm", "");
    }
}

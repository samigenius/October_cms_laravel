<?php

/* D:\xampp2\htdocs\acme/themes/acme/layouts/default.htm */
class __TwigTemplate_da3a850d5ea6830f31a1c3adfba9e9e2a7549b024612135ef9a8e17267da4126 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
<title>Acme - ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/them.css");
        echo "\">
";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 9
        echo "</head>
<body>
<header>
  ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</header>

<div class=\"container\">
  ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 17
        echo "</div>

<footer>
";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</footer>
<script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
<script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
<script src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp2\\htdocs\\acme/themes/acme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  76 => 23,  72 => 22,  69 => 21,  65 => 20,  60 => 17,  58 => 16,  53 => 13,  49 => 12,  44 => 9,  41 => 8,  37 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<title>Acme - {{this.page.title}}</title>
<meta name=\"description\" content=\"{{this.page.meta_description}}\">
<link rel=\"stylesheet\" href=\"https://bootswatch.com/4/sandstone/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"{{'assets/css/them.css'|theme }}\">
{% styles %}
</head>
<body>
<header>
  {% partial 'site/header' %}
</header>

<div class=\"container\">
  {% page %}
</div>

<footer>
{% partial 'site/footer' %}
</footer>
<script src=\"{{'assets/vendor/jquery.js'|theme}}\"></script>
<script src=\"{{'assets/vendor/bootstrap.js'|theme}}\"></script>
<script src=\"{{'assets/javascript/app.js'|theme}}\"></script>
</body>
</html>", "D:\\xampp2\\htdocs\\acme/themes/acme/layouts/default.htm", "");
    }
}

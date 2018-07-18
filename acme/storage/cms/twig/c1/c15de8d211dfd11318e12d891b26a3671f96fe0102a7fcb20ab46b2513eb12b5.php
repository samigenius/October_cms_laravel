<?php

/* D:\xampp2\htdocs\acme/themes/acme/pages/about.htm */
class __TwigTemplate_d2aa11345c5b1c8438193f180962273fc43210ea72d12eb36671156d22f95563 extends Twig_Template
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
        echo "<h1>About Us</h1>
<p>this is about us</p>
<hr>
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp2\\htdocs\\acme/themes/acme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>About Us</h1>
<p>this is about us</p>
<hr>
{% component \"resourcesLinks\" %}
{% component \"resourcesLinks\" %}", "D:\\xampp2\\htdocs\\acme/themes/acme/pages/about.htm", "");
    }
}

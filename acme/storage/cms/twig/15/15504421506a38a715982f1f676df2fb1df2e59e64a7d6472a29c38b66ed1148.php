<?php

/* D:\xampp2\htdocs\acme/themes/acme/pages/contact.htm */
class __TwigTemplate_4ef67f07dd652132ffae30b8e23e9cc2f3f7d194f22f4e5b2617cf024c9b83d4 extends Twig_Template
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
        echo "<h1>Contact Us</h1>
<form >
  <div class=\"form-group\">
  <label >Name</label>
  <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
  <label >Email</label>
  <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
  <label >Message</label>
  <input type=\"text\" class=\"form-control\">
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp2\\htdocs\\acme/themes/acme/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
<form >
  <div class=\"form-group\">
  <label >Name</label>
  <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
  <label >Email</label>
  <input type=\"text\" class=\"form-control\">
  </div>
  <div class=\"form-group\">
  <label >Message</label>
  <input type=\"text\" class=\"form-control\">
  </div>
</form>", "D:\\xampp2\\htdocs\\acme/themes/acme/pages/contact.htm", "");
    }
}

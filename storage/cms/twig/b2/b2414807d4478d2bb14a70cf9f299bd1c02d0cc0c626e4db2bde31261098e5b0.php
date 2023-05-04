<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\CardioCheck/themes/demo/partials/site/doctor_recomandations.htm */
class __TwigTemplate_09b97c3e3068051c66b8949bf5dd572999a855bfc37f63a9ca74f563f9a1a133 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("doctor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<!--<div class=\"col-lg-12\">-->
<!--    <div class=\"widget\">-->
<!--        <div class=\"widget-body\">-->
<!--            <img loading=\"lazy\" decoding=\"async\" src=\"images/author.jpg\" alt=\"About Me\"-->
<!--                 class=\"w-100 author-thumb-sm d-block\">-->
<!--            <h2 class=\"widget-title my-3\">Hootan Safiyari</h2>-->
<!--            <p class=\"mb-3 pb-2\">Hello, I’m Hootan Safiyari. A Content writter, Developer and Story teller. Working as a-->
<!--                Content writter at CoolTech Agency. Quam nihil …</p> <a href=\"about.html\"-->
<!--                                                                        class=\"btn btn-sm btn-outline-primary\">Know-->
<!--            More</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CardioCheck/themes/demo/partials/site/doctor_recomandations.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'doctor' %}

<!--<div class=\"col-lg-12\">-->
<!--    <div class=\"widget\">-->
<!--        <div class=\"widget-body\">-->
<!--            <img loading=\"lazy\" decoding=\"async\" src=\"images/author.jpg\" alt=\"About Me\"-->
<!--                 class=\"w-100 author-thumb-sm d-block\">-->
<!--            <h2 class=\"widget-title my-3\">Hootan Safiyari</h2>-->
<!--            <p class=\"mb-3 pb-2\">Hello, I’m Hootan Safiyari. A Content writter, Developer and Story teller. Working as a-->
<!--                Content writter at CoolTech Agency. Quam nihil …</p> <a href=\"about.html\"-->
<!--                                                                        class=\"btn btn-sm btn-outline-primary\">Know-->
<!--            More</a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->", "C:\\xampp\\htdocs\\CardioCheck/themes/demo/partials/site/doctor_recomandations.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

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

/* C:\xampp\htdocs\CardioCheck/themes/demo/partials/site/dash_header.htm */
class __TwigTemplate_dada4bfcd95511b5de9b0756ebf47731917c6263629f3a5a1fed82393f3bff65 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
    <div class=\"container px-5\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("dashboard");
        echo "\">
            <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/LogoNew.png");
        echo "\" height=\"70\" width=\"170\"></img src=\"
            ";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/LogoNew.png");
        echo "\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
                class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\"><a class=\"btn btn-sm rounded-pill\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("heartdiseasetestformular");
        echo "\">Take
                    a test</a></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/home'\">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CardioCheck/themes/demo/partials/site/dash_header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  51 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-white\">
    <div class=\"container px-5\">
        <a class=\"navbar-brand\" href=\"{{ 'dashboard' | page }}\">
            <img src=\"{{ 'assets/images/LogoNew.png' | theme}}\" height=\"70\" width=\"170\"></img src=\"
            {{ 'assets/images/LogoNew.png' | theme}}\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span
                class=\"navbar-toggler-icon\"></span></button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item\"><a class=\"btn btn-sm rounded-pill\" href=\"{{ 'heartdiseasetestformular'|page }}\">Take
                    a test</a></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-request=\"onLogout\" data-request-data=\"redirect: '/home'\">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>", "C:\\xampp\\htdocs\\CardioCheck/themes/demo/partials/site/dash_header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 3, "theme" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page', 'theme'],
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

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

/* C:\xampp\htdocs\CardioCheck/plugins/daniela/doctors/components/doctor/default.htm */
class __TwigTemplate_ddf8bbf7d9842c27804f3b08e56991e79bd6acd77cb001fe05555555db679d4c extends \Twig\Template
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
        echo "<div class=\"col-lg-4\">
    <div class=\"widget-blocks\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-6\">
                <div class=\"widget\">
                    <h2 class=\"section-title mb-3\">Recommended</h2>
                    <div class=\"widget-body\">
                        <div class=\"widget-list\">
                            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["doctors"] ?? null), "doctors", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["current_doctor"]) {
            // line 10
            echo "                            <div class=\"card-body px-0 pb-0\">
                                <h2><a class=\"post-title\">";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["current_doctor"], "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a></h2>
                                <p class=\"card-text\">";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["current_doctor"], "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</p>
                                <!--                                <div class=\"content\"><a class=\"read-more-btn\" href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "excerpt", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">Read Full-->
                                <!--                                    Article</a>-->
                                <br></br>
                                <br></br>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current_doctor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CardioCheck/plugins/daniela/doctors/components/doctor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  64 => 13,  60 => 12,  56 => 11,  53 => 10,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-4\">
    <div class=\"widget-blocks\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-6\">
                <div class=\"widget\">
                    <h2 class=\"section-title mb-3\">Recommended</h2>
                    <div class=\"widget-body\">
                        <div class=\"widget-list\">
                            {% for current_doctor in doctors.doctors %}
                            <div class=\"card-body px-0 pb-0\">
                                <h2><a class=\"post-title\">{{current_doctor.name}}</a></h2>
                                <p class=\"card-text\">{{current_doctor.description}}</p>
                                <!--                                <div class=\"content\"><a class=\"read-more-btn\" href=\"{{post.excerpt}}\">Read Full-->
                                <!--                                    Article</a>-->
                                <br></br>
                                <br></br>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\CardioCheck/plugins/daniela/doctors/components/doctor/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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

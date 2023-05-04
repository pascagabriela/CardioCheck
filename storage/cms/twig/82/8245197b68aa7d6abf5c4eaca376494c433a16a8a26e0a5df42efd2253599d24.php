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

/* C:\xampp\htdocs\CardioCheck/themes/demo/pages/dashboard.htm */
class __TwigTemplate_f45dd0f746c30ca2ad657b4e4873dd8f5bf20be0f842ed49b8c34668df01073c extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row no-gutters-lg\">
        <div class=\"col-lg-8 mb-5 mb-lg-0\">
            <div class=\"row\">
                <div class=\"col-12 mb-4\">
                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "                    ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 7), "Y/m/d") < "2022/12/24")) {
                // line 8
                echo "                    <article class=\"card article-card\">
                        <a>
                            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 10), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 11
                    echo "                            <div class=\"card-image\">
                                <div class=\"post-info\"> <span class=\"text-uppercase\">";
                    // line 12
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 12), 12, $this->source), "d M, Y"), "html", null, true);
                    echo "</span>
                                </div>
                                <img loading=\"lazy\" decoding=\"async\" src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo "\" alt=\"Post Thumbnail\" class=\"img-fluid\">
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "                            </div>
                        </a>
                        <div class=\"card-body px-0 pb-1\">
                            <h2 class=\"h1\"><a class=\"post-title\" href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "</a></h2>
                            <p class=\"card-text\">";
                // line 20
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</p>
                            <div class=\"content\"> <a class=\"read-more-btn\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "\">Read Full Article</a>
                            </div>
                        </div>
                    </article>
                    ";
            }
            // line 26
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </div>
            </div>

            ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 30) > 1)) {
            // line 31
            echo "            <ul class=\"pagination\">
                <li><a style=\"color: red\" href=\"";
            // line 32
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 32), "baseFileName", [], "any", false, false, true, 32), 32, $this->source), ["pageParam" => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 32) - 1)]);
            echo "\">&larr; Prev</a></li>

                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 34)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 35
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 35) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a style=\"color: red\" href=\"";
                // line 36
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 36), "baseFileName", [], "any", false, false, true, 36), 36, $this->source), ["pageParam" => $context["page"]]);
                echo "\" class=\"mx-3\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 36, $this->source), "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
                ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 40) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 40))) {
                // line 41
                echo "                <li><a style=\"color: red\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 41), "baseFileName", [], "any", false, false, true, 41), 41, $this->source), ["pageParam" => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 41) + 1)]);
                echo "\">Next &rarr;</a></li>
                ";
            }
            // line 43
            echo "            </ul>
            ";
        }
        // line 45
        echo "
        </div>
        ";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("dashboard/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CardioCheck/themes/demo/pages/dashboard.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  160 => 47,  156 => 45,  152 => 43,  146 => 41,  144 => 40,  141 => 39,  130 => 36,  125 => 35,  121 => 34,  116 => 32,  113 => 31,  111 => 30,  106 => 27,  100 => 26,  92 => 21,  88 => 20,  82 => 19,  77 => 16,  69 => 14,  64 => 12,  61 => 11,  57 => 10,  53 => 8,  50 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row no-gutters-lg\">
        <div class=\"col-lg-8 mb-5 mb-lg-0\">
            <div class=\"row\">
                <div class=\"col-12 mb-4\">
                    {% for post in posts %}
                    {% if post.published_at|date('Y/m/d') < '2022/12/24' %}
                    <article class=\"card article-card\">
                        <a>
                            {% for image in post.featured_images|slice(0,1) %}
                            <div class=\"card-image\">
                                <div class=\"post-info\"> <span class=\"text-uppercase\">{{post.published_at | date('d M, Y') }}</span>
                                </div>
                                <img loading=\"lazy\" decoding=\"async\" src=\"{{image.path}}\" alt=\"Post Thumbnail\" class=\"img-fluid\">
                                {% endfor %}
                            </div>
                        </a>
                        <div class=\"card-body px-0 pb-1\">
                            <h2 class=\"h1\"><a class=\"post-title\" href=\"{{post.url}}\">{{post.title}}</a></h2>
                            <p class=\"card-text\">{{post.content}}</p>
                            <div class=\"content\"> <a class=\"read-more-btn\" href=\"{{post.excerpt}}\">Read Full Article</a>
                            </div>
                        </div>
                    </article>
                    {% endif %}
                    {% endfor %}
                </div>
            </div>

            {% if posts.lastPage > 1 %}
            <ul class=\"pagination\">
                <li><a style=\"color: red\" href=\"{{ this.page.baseFileName|page({ pageParam: (posts.currentPage-1) }) }}\">&larr; Prev</a></li>

                {% for page in 1..posts.lastPage %}
                <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                    <a style=\"color: red\" href=\"{{ this.page.baseFileName|page({ pageParam: page }) }}\" class=\"mx-3\">{{ page }}</a>
                </li>
                {% endfor %}

                {% if posts.lastPage > posts.currentPage %}
                <li><a style=\"color: red\" href=\"{{ this.page.baseFileName|page({ pageParam: (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
                {% endif %}
            </ul>
            {% endif %}

        </div>
        {% partial 'dashboard/sidebar' %}
    </div>
</div>", "C:\\xampp\\htdocs\\CardioCheck/themes/demo/pages/dashboard.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 6, "if" => 7, "partial" => 47);
        static $filters = array("date" => 7, "slice" => 10, "escape" => 12, "page" => 32);
        static $functions = array("range" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['date', 'slice', 'escape', 'page'],
                ['range']
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

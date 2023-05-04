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

/* C:\xampp\htdocs\CardioCheck/themes/demo/partials/dashboard/sidebar.htm */
class __TwigTemplate_8719ea76d944e12adba83aad858cca3d637e8289fded36533f129fe18e0a3f84 extends \Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            echo "                                ";
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 10), "Y/m/d") > "2022/12/24")) {
                // line 11
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 11), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 12
                    echo "<!--                            <article class=\"card article-card article-card-sm h-100\">-->
                                <a href=\"\">
                                    ";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 14), 0, 1));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 15
                        echo "                                    <div class=\"card-image\">
                                        <div class=\"post-info\"> <span class=\"text-uppercase\">";
                        // line 16
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 16), 16, $this->source), "d M, Y"), "html", null, true);
                        echo "</span>
                                        </div>
                                        <img loading=\"lazy\" decoding=\"async\" src=\"";
                        // line 18
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                        echo "\" alt=\"Post Thumbnail\" class=\"w-70\">
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "                                    </div>
                                </a>
                                <div class=\"card-body px-0 pb-0\">
                                    <h2><a class=\"post-title\" href=\"";
                    // line 23
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                    echo "</a></h2>
                                    <p class=\"card-text\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                    echo "</p>
                                    <div class=\"content\"> <a class=\"read-more-btn\" href=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "\">Read Full Article</a>
                                    <br></br>
                                    <br></br>
                                    </div>
                                </div>
<!--                            </article>-->
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "                                ";
            }
            // line 33
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CardioCheck/themes/demo/partials/dashboard/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  116 => 33,  113 => 32,  100 => 25,  96 => 24,  90 => 23,  85 => 20,  77 => 18,  72 => 16,  69 => 15,  65 => 14,  61 => 12,  56 => 11,  53 => 10,  49 => 9,  39 => 1,);
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
                            {% for post in posts %}
                                {% if post.published_at|date('Y/m/d') > '2022/12/24' %}
                            {% for image in post.featured_images|slice(0,1) %}
<!--                            <article class=\"card article-card article-card-sm h-100\">-->
                                <a href=\"\">
                                    {% for image in post.featured_images|slice(0,1) %}
                                    <div class=\"card-image\">
                                        <div class=\"post-info\"> <span class=\"text-uppercase\">{{post.published_at | date('d M, Y') }}</span>
                                        </div>
                                        <img loading=\"lazy\" decoding=\"async\" src=\"{{image.path}}\" alt=\"Post Thumbnail\" class=\"w-70\">
                                        {% endfor %}
                                    </div>
                                </a>
                                <div class=\"card-body px-0 pb-0\">
                                    <h2><a class=\"post-title\" href=\"{{post.excerpt}}\">{{post.title}}</a></h2>
                                    <p class=\"card-text\">{{post.content}}</p>
                                    <div class=\"content\"> <a class=\"read-more-btn\" href=\"{{post.excerpt}}\">Read Full Article</a>
                                    <br></br>
                                    <br></br>
                                    </div>
                                </div>
<!--                            </article>-->
                            {% endfor %}
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp\\htdocs\\CardioCheck/themes/demo/partials/dashboard/sidebar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 10);
        static $filters = array("date" => 10, "slice" => 11, "escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['date', 'slice', 'escape'],
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

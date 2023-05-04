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

/* C:\xampp\htdocs\CardioCheck/themes/demo/pages/home.htm */
class __TwigTemplate_c77f54bf2b82449601965adc6b395f1b41b35baa1c8d0628b9f6077f49f74b8b extends \Twig\Template
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
    <header class=\"bg-white\">
        <div class=\"container px-5\">
            <div class=\"row gx-5 justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"text-center my-4\">
                        <h1 class=\"display-5 fw-bolder text-black mb-2\">Do your part by caring for the heart</h1>
                        <p class=\"lead text-black-50 mb-4\">CardioCheck is a key provider for public health analysis.
                            It helps patients improve their lives by providing good medical examination.</p>
                        <div class=\"d-grid gap-3 d-sm-flex justify-content-sm-center\">
                            <a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Get started</a>
<!--                            <a class=\"btn btn-outline-dark btn-lg px-4\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
        echo "\">Log in</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!--    Image gallery slide-->
    <div class=\"container-fluid my-5\">
        <div class=\"row\">
            <div class=\"col-12 m-auto\">
                <div class=\"owl-carousel owl-theme\">
                    <div class=\"item mb-4\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image1.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Blood test</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image2.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Stethoscope</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image5.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Electrocardiogram</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image4.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Sphygmomanometer</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/image3.jpg");
        echo "\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Pills</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"
            integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\"
            crossorigin=\"anonymous\"></script>
    <script>
        \$('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CardioCheck/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 71,  115 => 60,  101 => 49,  87 => 38,  73 => 27,  55 => 12,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <header class=\"bg-white\">
        <div class=\"container px-5\">
            <div class=\"row gx-5 justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"text-center my-4\">
                        <h1 class=\"display-5 fw-bolder text-black mb-2\">Do your part by caring for the heart</h1>
                        <p class=\"lead text-black-50 mb-4\">CardioCheck is a key provider for public health analysis.
                            It helps patients improve their lives by providing good medical examination.</p>
                        <div class=\"d-grid gap-3 d-sm-flex justify-content-sm-center\">
                            <a class=\"btn btn-primary btn-lg px-4 me-sm-3\" href=\"{{ 'login'|page }}\">Get started</a>
<!--                            <a class=\"btn btn-outline-dark btn-lg px-4\" href=\"{{ 'login'|page }}\">Log in</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!--    Image gallery slide-->
    <div class=\"container-fluid my-5\">
        <div class=\"row\">
            <div class=\"col-12 m-auto\">
                <div class=\"owl-carousel owl-theme\">
                    <div class=\"item mb-4\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"{{ 'assets/images/image1.jpg' | theme}}\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Blood test</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"{{ 'assets/images/image2.jpg' | theme}}\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Stethoscope</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"{{ 'assets/images/image5.jpg' | theme}}\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Electrocardiogram</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"{{ 'assets/images/image4.jpg' | theme}}\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Sphygmomanometer</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"item\">
                        <div class=\"card border-0 shadow\">
                            <img src=\"{{ 'assets/images/image3.jpg' | theme}}\" alt=\"\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <div class=\"card-title text-center\">
                                    <h4>Pills</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"
            integrity=\"sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==\"
            crossorigin=\"anonymous\"></script>
    <script>
        \$('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</div>", "C:\\xampp\\htdocs\\CardioCheck/themes/demo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("page" => 11, "theme" => 27);
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

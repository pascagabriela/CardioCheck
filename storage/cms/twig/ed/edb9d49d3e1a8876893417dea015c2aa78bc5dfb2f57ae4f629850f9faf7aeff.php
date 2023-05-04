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

/* C:\xampp\htdocs\CardioCheck/plugins/daniela/formular/components/testformular/default.htm */
class __TwigTemplate_adb1c450957464ef284afd7e2181a8ce12e46ef039f400c962ab517bbf627f8b extends \Twig\Template
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
    <div class=\"row mt-5\">
        <div class=\"col-8 mb-4\">
            <h2>Heart disease prediction test</h2>
            <p class=\"pb-4\"><small><i>Please fill all the inputs below.</i></small></p>
            <form data-request=\"onRequestEstimation\" data-request-success=\"showPopup(data.target)\">
                <div class=\"container px-0\">
                    <label>How old are you?</label>
                    <input type=\"number\" name=\"age\" class=\"form-control form-control-md\"
                           placeholder=\"Type your answer here\" required/>
                    <br>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"form-group\">
                                <label>Choose your gender:</label>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"sex\" id=\"answer1\" value=\"0\"
                                           required>
                                    <label class=\"form-check-label\" for=\"answer1\">
                                        Female
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"sex\" id=\"answer2\" value=\"1\"
                                           required>
                                    <label class=\"form-check-label\" for=\"answer2\">
                                        Male
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6 mb-4\">
                            <div class=\"form-group\">
                                <label>What kind of chest pain are you feeling?</label>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer3\"
                                           value=\"1\" required>
                                    <label class=\"form-check-label\" for=\"answer3\">
                                        Typical pain
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer4\"
                                           value=\"2\" required>
                                    <label class=\"form-check-label\" for=\"answer4\">
                                        Atypical pain
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer6\"
                                           value=\"3\" required>
                                    <label class=\"form-check-label\" for=\"answer6\">
                                        Non-anginal pain
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer7\"
                                           value=\"4\" required>
                                    <label class=\"form-check-label\" for=\"answer7\">
                                        Asymptomatic
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-4\">
                            <label>What is your resting blood pressure value?</label>
                            <input type=\"number\" name=\"resting_blood_pressure\" class=\"form-control form-control-md\"
                                   placeholder=\"Type your answer here\" required/>
                        </div>

                        <div class=\"col-md-6 mb-4\">
                            <label>What is your cholesterol value?</label>
                            <input type=\"number\" name=\"cholesterol\" class=\"form-control form-control-md\"
                                   placeholder=\"Type your answer here\" required/>
                        </div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label>How is your fasting blood sugar value?</label>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"fasting_blood_sugar\" id=\"answer8\"
                                   value=\"1\" required>
                            <label class=\"form-check-label\" for=\"answer8\">
                                Over 120mg/dl
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"fasting_blood_sugar\" id=\"answer9\"
                                   value=\"0\" required>
                            <label class=\"form-check-label\" for=\"answer9\">
                                Under 120mg/dl
                            </label>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"form-group mb-4\">
                            <label>How is your resting electrocardiogram?</label>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"resting_ecg\" id=\"answer10\"
                                       value=\"1\" required>
                                <label class=\"form-check-label\" for=\"answer10\">
                                    Normal
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"resting_ecg\" id=\"answer11\"
                                       value=\"2\" required>
                                <label class=\"form-check-label\" for=\"answer11\">
                                    Having ST wave abnormality
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"resting_ecg\" id=\"answer12\"
                                       value=\"3\" required>
                                <label class=\"form-check-label\" for=\"answer12\">
                                    Showing propable or definite left ventricular hypertrophy by Ester's criteria
                                </label>
                            </div>
                        </div>

                        <div class=\"col\">
                            <label>What is your heart rate level?</label>
                            <input type=\"number\" name=\"max_heart_rate\" class=\"form-control form-control-md\"
                                   placeholder=\"Type your answer here\" required/>
                        </div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label>Do you have exercise induced angina?</label>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exercise_angina\" id=\"answer13\"
                                   value=\"1\" required>
                            <label class=\"form-check-label\" for=\"answer13\">
                                Yes
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exercise_angina\" id=\"answer14\"
                                   value=\"0\" required>
                            <label class=\"form-check-label\" for=\"answer14\">
                                No
                            </label>
                        </div>
                    </div>

                    <div class=\"col mb-4\">
                        <label>What is your oldpeak value?</label>
                        <input type=\"number\" step=\"0.01\" name=\"oldpeak\" class=\"form-control form-control-md\"
                               placeholder=\"Type your answer here\" required/>
                    </div>


                    <div class=\"form-group mb-4\">
                        <label>How is your ST-slope?</label>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"st_slope\" id=\"answer15\" value=\"1\"
                                   required>
                            <label class=\"form-check-label\" for=\"answer15\">
                                Upsloping
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"st_slope\" id=\"answer16\" value=\"2\"
                                   required>
                            <label class=\"form-check-label\" for=\"answer16\">
                                Flat
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"st_slope\" id=\"answer17\" value=\"3\"
                                   required>
                            <label class=\"form-check-label\" for=\"answer17\">
                                Downsloping
                            </label>
                        </div>
                    </div>

                    <div class=\"row mt-3\">
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary mt-0\">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"col-lg-4\">
            ";
        // line 194
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/doctor_recomandations"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 195
        echo "        </div>
    </div>

    <div id=\"popup-container\" style=\"display: none;\" class=\"mt-3\">
        <div class=\"row\">
            <h1 id=\"resultsTitle\" class=\"mb-4\"></h1>
            <canvas id=\"myChart\" class=\"mb-4\"></canvas>
            <p id=\"resultDescription\" class=\"mb-4\"></p>
            <!--            <div class=\"row\">-->
            <!--                <div class=\"col-lg-2\"></div>-->
            <!--                <div class=\"col-lg-8\">-->
            <!--                    <p id=\"resultDescription\"></p>-->
            <!--                </div>-->
            <!--                <div class=\"col-lg-2\"></div>-->
            <!--            </div>-->
            <div class=\"row mt-5 mb-5\">
                <div class=\"col-lg-2\"></div>
                <div class=\"col-lg-8\">
                    <h1 class=\"display-5 fw-bolder text-black mb-2\">Thank you for trusting us!</h1>
                </div>
                <div class=\"col-lg-2\"></div>
            </div>
        </div>
    </div>
</div>
<script>
    function showPopup(data) {
        // get a reference to the popup container and content elements
        var container = document.getElementById(\"popup-container\");
        var title = document.getElementById(\"resultsTitle\");
        var description = document.getElementById(\"resultDescription\");

        title.innerHTML = \"Prediction results: \"

        if (data == 1) {
            description.innerHTML = \"Based on the information you provided we were able to predict that your heart may be in trouble. We kindly recommend to see a doctor. If you don't know where to go, on the right side of this page there are some doctors recommandation from us.\"
            var xValues = [\"Weak heart\", \"Healthy heart\"];
            var yValues = [89,6, 10.4, 100, 0];
            var barColors = [\"red\", \"green\"];

            new Chart(\"myChart\", {
                type: \"bar\",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: {display: false},
                    title: {
                        display: false,
                        // text:  \"These are the results generated based on the information you provided.\"
                    }
                }
            });
        } else {
            description.innerHTML = \"Based on the information you provided we were able to predict that your heart is healthy. In order to always be informed, we have prepared for you a section with articles related to heart health. Keep taking care of your heart.\"
            var xValues = [\"Healthy heart\", \"Weak heart\"];
            var yValues = [89.6, 10.4, 100, 0];
            var barColors = [\"green\", \"red\"];

            new Chart(\"myChart\", {
                type: \"bar\",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: false,
                        // text: \"These are the results generated based on the information you provided.\"
                    }
                }
            });
        }


        // display the popup
        container.style.display = \"block\";
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\CardioCheck/plugins/daniela/formular/components/testformular/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 195,  234 => 194,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row mt-5\">
        <div class=\"col-8 mb-4\">
            <h2>Heart disease prediction test</h2>
            <p class=\"pb-4\"><small><i>Please fill all the inputs below.</i></small></p>
            <form data-request=\"onRequestEstimation\" data-request-success=\"showPopup(data.target)\">
                <div class=\"container px-0\">
                    <label>How old are you?</label>
                    <input type=\"number\" name=\"age\" class=\"form-control form-control-md\"
                           placeholder=\"Type your answer here\" required/>
                    <br>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"form-group\">
                                <label>Choose your gender:</label>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"sex\" id=\"answer1\" value=\"0\"
                                           required>
                                    <label class=\"form-check-label\" for=\"answer1\">
                                        Female
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"sex\" id=\"answer2\" value=\"1\"
                                           required>
                                    <label class=\"form-check-label\" for=\"answer2\">
                                        Male
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6 mb-4\">
                            <div class=\"form-group\">
                                <label>What kind of chest pain are you feeling?</label>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer3\"
                                           value=\"1\" required>
                                    <label class=\"form-check-label\" for=\"answer3\">
                                        Typical pain
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer4\"
                                           value=\"2\" required>
                                    <label class=\"form-check-label\" for=\"answer4\">
                                        Atypical pain
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer6\"
                                           value=\"3\" required>
                                    <label class=\"form-check-label\" for=\"answer6\">
                                        Non-anginal pain
                                    </label>
                                </div>
                                <div class=\"form-check\">
                                    <input class=\"form-check-input\" type=\"radio\" name=\"chest_pain\" id=\"answer7\"
                                           value=\"4\" required>
                                    <label class=\"form-check-label\" for=\"answer7\">
                                        Asymptomatic
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-md-6 mb-4\">
                            <label>What is your resting blood pressure value?</label>
                            <input type=\"number\" name=\"resting_blood_pressure\" class=\"form-control form-control-md\"
                                   placeholder=\"Type your answer here\" required/>
                        </div>

                        <div class=\"col-md-6 mb-4\">
                            <label>What is your cholesterol value?</label>
                            <input type=\"number\" name=\"cholesterol\" class=\"form-control form-control-md\"
                                   placeholder=\"Type your answer here\" required/>
                        </div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label>How is your fasting blood sugar value?</label>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"fasting_blood_sugar\" id=\"answer8\"
                                   value=\"1\" required>
                            <label class=\"form-check-label\" for=\"answer8\">
                                Over 120mg/dl
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"fasting_blood_sugar\" id=\"answer9\"
                                   value=\"0\" required>
                            <label class=\"form-check-label\" for=\"answer9\">
                                Under 120mg/dl
                            </label>
                        </div>
                    </div>

                    <div class=\"row mb-4\">
                        <div class=\"form-group mb-4\">
                            <label>How is your resting electrocardiogram?</label>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"resting_ecg\" id=\"answer10\"
                                       value=\"1\" required>
                                <label class=\"form-check-label\" for=\"answer10\">
                                    Normal
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"resting_ecg\" id=\"answer11\"
                                       value=\"2\" required>
                                <label class=\"form-check-label\" for=\"answer11\">
                                    Having ST wave abnormality
                                </label>
                            </div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"resting_ecg\" id=\"answer12\"
                                       value=\"3\" required>
                                <label class=\"form-check-label\" for=\"answer12\">
                                    Showing propable or definite left ventricular hypertrophy by Ester's criteria
                                </label>
                            </div>
                        </div>

                        <div class=\"col\">
                            <label>What is your heart rate level?</label>
                            <input type=\"number\" name=\"max_heart_rate\" class=\"form-control form-control-md\"
                                   placeholder=\"Type your answer here\" required/>
                        </div>
                    </div>

                    <div class=\"form-group mb-4\">
                        <label>Do you have exercise induced angina?</label>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exercise_angina\" id=\"answer13\"
                                   value=\"1\" required>
                            <label class=\"form-check-label\" for=\"answer13\">
                                Yes
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"exercise_angina\" id=\"answer14\"
                                   value=\"0\" required>
                            <label class=\"form-check-label\" for=\"answer14\">
                                No
                            </label>
                        </div>
                    </div>

                    <div class=\"col mb-4\">
                        <label>What is your oldpeak value?</label>
                        <input type=\"number\" step=\"0.01\" name=\"oldpeak\" class=\"form-control form-control-md\"
                               placeholder=\"Type your answer here\" required/>
                    </div>


                    <div class=\"form-group mb-4\">
                        <label>How is your ST-slope?</label>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"st_slope\" id=\"answer15\" value=\"1\"
                                   required>
                            <label class=\"form-check-label\" for=\"answer15\">
                                Upsloping
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"st_slope\" id=\"answer16\" value=\"2\"
                                   required>
                            <label class=\"form-check-label\" for=\"answer16\">
                                Flat
                            </label>
                        </div>
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"st_slope\" id=\"answer17\" value=\"3\"
                                   required>
                            <label class=\"form-check-label\" for=\"answer17\">
                                Downsloping
                            </label>
                        </div>
                    </div>

                    <div class=\"row mt-3\">
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-primary mt-0\">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class=\"col-lg-4\">
            {% partial 'site/doctor_recomandations' %}
        </div>
    </div>

    <div id=\"popup-container\" style=\"display: none;\" class=\"mt-3\">
        <div class=\"row\">
            <h1 id=\"resultsTitle\" class=\"mb-4\"></h1>
            <canvas id=\"myChart\" class=\"mb-4\"></canvas>
            <p id=\"resultDescription\" class=\"mb-4\"></p>
            <!--            <div class=\"row\">-->
            <!--                <div class=\"col-lg-2\"></div>-->
            <!--                <div class=\"col-lg-8\">-->
            <!--                    <p id=\"resultDescription\"></p>-->
            <!--                </div>-->
            <!--                <div class=\"col-lg-2\"></div>-->
            <!--            </div>-->
            <div class=\"row mt-5 mb-5\">
                <div class=\"col-lg-2\"></div>
                <div class=\"col-lg-8\">
                    <h1 class=\"display-5 fw-bolder text-black mb-2\">Thank you for trusting us!</h1>
                </div>
                <div class=\"col-lg-2\"></div>
            </div>
        </div>
    </div>
</div>
<script>
    function showPopup(data) {
        // get a reference to the popup container and content elements
        var container = document.getElementById(\"popup-container\");
        var title = document.getElementById(\"resultsTitle\");
        var description = document.getElementById(\"resultDescription\");

        title.innerHTML = \"Prediction results: \"

        if (data == 1) {
            description.innerHTML = \"Based on the information you provided we were able to predict that your heart may be in trouble. We kindly recommend to see a doctor. If you don't know where to go, on the right side of this page there are some doctors recommandation from us.\"
            var xValues = [\"Weak heart\", \"Healthy heart\"];
            var yValues = [89,6, 10.4, 100, 0];
            var barColors = [\"red\", \"green\"];

            new Chart(\"myChart\", {
                type: \"bar\",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: {display: false},
                    title: {
                        display: false,
                        // text:  \"These are the results generated based on the information you provided.\"
                    }
                }
            });
        } else {
            description.innerHTML = \"Based on the information you provided we were able to predict that your heart is healthy. In order to always be informed, we have prepared for you a section with articles related to heart health. Keep taking care of your heart.\"
            var xValues = [\"Healthy heart\", \"Weak heart\"];
            var yValues = [89.6, 10.4, 100, 0];
            var barColors = [\"green\", \"red\"];

            new Chart(\"myChart\", {
                type: \"bar\",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: false,
                        // text: \"These are the results generated based on the information you provided.\"
                    }
                }
            });
        }


        // display the popup
        container.style.display = \"block\";
    }
</script>
", "C:\\xampp\\htdocs\\CardioCheck/plugins/daniela/formular/components/testformular/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 194);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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

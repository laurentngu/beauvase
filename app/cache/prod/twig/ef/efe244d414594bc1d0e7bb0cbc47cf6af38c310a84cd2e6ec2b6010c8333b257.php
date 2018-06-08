<?php

/* @AdvancedParameters/system_information.html.twig */
class __TwigTemplate_fb7bf4f6db0a8ecd2209dcde0c210f140a47763701bf2c9cab198296c74ff610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@AdvancedParameters/system_information.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration information", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This information must be provided when you report an issue on our bug tracker or forum.", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        ";
        // line 41
        if ($this->getAttribute(($context["system"] ?? null), "notHostMode", array())) {
            // line 42
            echo "        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server information", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    ";
            // line 48
            if ( !twig_test_empty($this->getAttribute(($context["system"] ?? null), "uname", array()))) {
                // line 49
                echo "                        <p>
                            <strong>";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server information", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["system"] ?? null), "uname", array()), "html", null, true);
                echo "
                        </p>
                    ";
            }
            // line 53
            echo "                    <p>
                        <strong>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server software version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", array()), "version", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", array()), "php", array()), "version", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Memory limit:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", array()), "php", array()), "memoryLimit", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max execution time:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", array()), "php", array()), "maxExecutionTime", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload Max File size:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? null), "server", array()), "php", array()), "maxFileSizeUpload", array()), "html", null, true);
            echo "
                    </p>
                    ";
            // line 68
            if ($this->getAttribute(($context["system"] ?? null), "instaWebInstalled", array())) {
                // line 69
                echo "                        <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PageSpeed module for Apache installed (mod_instaweb)", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</p>
                    ";
            }
            // line 71
            echo "                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Database information", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", array()), "version", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL server:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", array()), "server", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL name:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", array()), "name", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL user:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", array()), "user", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tables prefix:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", array()), "prefix", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL engine:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", array()), "engine", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL driver:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "database", array()), "driver", array()), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 107
        echo "    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Store information", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "shop", array()), "version", array()), "html", null, true);
        echo "
                    </p>
                    <p>
                        <strong>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop URL:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "shop", array()), "url", array()), "html", null, true);
        echo "
                    </p>
                    <p>
                        <strong>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current theme in use:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "shop", array()), "theme", array()), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail configuration", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail method:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong>

                        ";
        // line 136
        if ($this->getAttribute(($context["system"] ?? null), "isNativePHPmail", array())) {
            // line 137
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are using the PHP mail() function.", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                        ";
        } else {
            // line 139
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are using your own SMTP parameters.", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
                    <p>
                        <strong>";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP server:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", array()), "server", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP username:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 145
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", array()), "user", array()))) {
                // line 146
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "
                        ";
            } else {
                // line 148
                echo "                            <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 150
            echo "                    </p>
                    <p>
                        <strong>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP password:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 153
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", array()), "password", array()))) {
                // line 154
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "
                        ";
            } else {
                // line 156
                echo "                            <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 158
            echo "                    </p>
                    <p>
                        <strong>";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", array()), "encryption", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP port:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? null), "smtp", array()), "port", array()), "html", null, true);
            echo "
                    </p>
                    ";
        }
        // line 166
        echo "                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your information", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your web browser:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["userAgent"] ?? null), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\" id=\"checkConfiguration\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check your configuration", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Required parameters:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong>
                    ";
        // line 191
        if (($this->getAttribute(($context["requirements"] ?? null), "failRequired", array()) == false)) {
            // line 192
            echo "                        <span class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OK", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
                    </p>
                    ";
        } else {
            // line 195
            echo "                        <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please fix the following error(s)", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
                        </p>
                        <ul>
                            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["requirements"] ?? null), "testsRequired", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 199
                echo "                                ";
                if ((("fail" == $context["value"]) && twig_in_filter($context["key"], twig_get_array_keys_filter($this->getAttribute(($context["requirements"] ?? null), "testsErrors", array()))))) {
                    // line 200
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["requirements"] ?? null), "testsErrors", array()), $context["key"], array(), "array"), "html", null, true);
                    echo "</li>
                                ";
                }
                // line 202
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                        </ul>
                    ";
        }
        // line 205
        echo "                    ";
        if ($this->getAttribute(($context["requirements"] ?? null), "failOptional", array(), "any", true, true)) {
            // line 206
            echo "                        <p>
                        <strong>";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional parameters:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 208
            if (($this->getAttribute(($context["requirements"] ?? null), "failOptional", array()) == false)) {
                // line 209
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OK", array(), "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
                            </p>
                        ";
            } else {
                // line 212
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please fix the following error(s)", array(), "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
                            </p>
                            <ul>
                                ";
                // line 215
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["requirements"] ?? null), "testsOptional", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 216
                    echo "                                    ";
                    if ((("fail" == $context["value"]) && $this->getAttribute(($context["testsErrors"] ?? null), $context["key"], array(), "array", true, true))) {
                        // line 217
                        echo "                                        <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["requirements"] ?? null), "testsErrors", array()), $context["key"], array(), "array"), "html", null, true);
                        echo "</li>
                                    ";
                    }
                    // line 219
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                            </ul>
                        ";
            }
            // line 222
            echo "                    ";
        }
        // line 223
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 228
        if ($this->getAttribute(($context["system"] ?? null), "notHostMode", array())) {
            // line 229
            echo "    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">info_outline</i> ";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of changed files", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\" id=\"changedFiles\">
                <i class=\"material-icons\">loop</i> ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Checking files...", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 240
        if ($this->getAttribute(($context["system"] ?? null), "notHostMode", array())) {
            // line 241
            echo "    <script>
        \$(document).ready(function()
        {
            var translations = {
                missing: '";
            // line 245
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Missing files", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                updated: '";
            // line 246
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated files", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                changesDetected: '";
            // line 247
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changed/missing files have been detected.", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                noChangeDetected: '";
            // line 248
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No change has been detected in your files.", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "'
            };

            \$.ajax({
                type: 'POST',
                url: '";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_information_check_files");
            echo "',
                data: {},
                dataType: 'json',
                success: function(json)
                {
                    var tab = {
                        'missing': translations.missing,
                        'updated': translations.updated,
                    };

                    if (json.missing.length || json.updated.length)
                        \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">'+ translations.changesDetected +'</p></div>');
                    else
                        \$('#changedFiles').html('<div class=\"alert alert-success\" role=\"alert\"><p class=\"alert-text\">'+ translations.noChangeDetected +'</p></div>');

                    \$.each(tab, function(key, lang) {
                        if (json[key].length) {
                            var html = \$('<ul>').attr('id', key+'_files');
                            \$(json[key]).each(function(key, file) {
                                html.append(\$('<li>').html(file))
                            });
                            \$('#changedFiles')
                                .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
                                .append(html);
                        }
                    });
                }
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/system_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 253,  520 => 248,  516 => 247,  512 => 246,  508 => 245,  502 => 241,  500 => 240,  492 => 235,  485 => 231,  481 => 229,  479 => 228,  472 => 223,  469 => 222,  465 => 220,  459 => 219,  453 => 217,  450 => 216,  446 => 215,  439 => 212,  432 => 209,  430 => 208,  426 => 207,  423 => 206,  420 => 205,  416 => 203,  410 => 202,  404 => 200,  401 => 199,  397 => 198,  390 => 195,  383 => 192,  381 => 191,  377 => 190,  369 => 185,  356 => 177,  348 => 172,  340 => 166,  332 => 163,  324 => 160,  320 => 158,  314 => 156,  308 => 154,  306 => 153,  302 => 152,  298 => 150,  292 => 148,  286 => 146,  284 => 145,  280 => 144,  272 => 141,  266 => 139,  260 => 137,  258 => 136,  253 => 134,  245 => 129,  232 => 121,  224 => 118,  216 => 115,  208 => 110,  203 => 107,  191 => 100,  183 => 97,  175 => 94,  167 => 91,  159 => 88,  151 => 85,  143 => 82,  135 => 77,  127 => 71,  121 => 69,  119 => 68,  112 => 66,  104 => 63,  96 => 60,  88 => 57,  80 => 54,  77 => 53,  69 => 50,  66 => 49,  64 => 48,  57 => 44,  53 => 42,  51 => 41,  44 => 37,  37 => 33,  31 => 29,  28 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@AdvancedParameters/system_information.html.twig", "C:\\wamp64\\www\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Configure\\AdvancedParameters\\system_information.html.twig");
    }
}

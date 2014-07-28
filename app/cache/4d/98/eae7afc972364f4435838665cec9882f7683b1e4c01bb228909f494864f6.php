<?php

/* _sub_stack.twig */
class __TwigTemplate_4d98eae7afc972364f4435838665cec9882f7683b1e4c01bb228909f494864f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["stack"]) ? $context["stack"] : null)) {
            // line 2
            echo "    ";
            if (((isset($context["options"]) ? $context["options"] : null) == "full")) {
                // line 3
                echo "
    <section>
        <h2><i class=\"icon-paper-clip\"></i> ";
                // line 5
                echo $this->env->getExtension('Bolt')->trans("Files on the stack");
                echo "</h2>

        <div id=\"protostack\">

            <div class=\"stackitem image info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
                <img src=\"\" width=\"100\" height=\"100\">
            </div>

            <div class=\"stackitem other info-pop item-1\" data-placement=\"bottom\" data-html=\"true\" data-title=\"\" data-content=\"\">
                <strong>HTML</strong>
                <small>index.html</small>
            </div>

        </div>

        <div id=\"stackholder\">
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 22
                    echo "
            <div class=\"stackitem item-";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type"), "html", null, true);
                    echo " info-pop\"
                 data-placement=\"bottom\" data-html=\"true\" data-title=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                    echo "\" data-content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "info"), "html", null, true);
                    echo "\">
                ";
                    // line 25
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type") == "image")) {
                        // line 26
                        echo "                    <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), 100, 100), "html", null, true);
                        echo "\" width=\"100\" height=\"100\">
                ";
                    } else {
                        // line 28
                        echo "                   <strong>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extension")), "html", null, true);
                        echo "</strong>
                   <small>";
                        // line 29
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo "</small>
                ";
                    }
                    // line 31
                    echo "            </div>

            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "        </div>


        <div class=\"btn-group\">
            <span class=\"btn fileinput-button\">
                <i class=\"icon-upload\"></i>
                <span>";
                // line 40
                echo $this->env->getExtension('Bolt')->trans("Upload");
                echo "</span>
                <input id=\"fileupload-stack\"
                       type=\"file\"
                       name=\"fileupload-stack[]\"
                       data-url=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "app"), "html", null, true);
                echo "classes/upload/\"
                       accept=\".";
                // line 45
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["filetypes"]) ? $context["filetypes"] : null), ",."), "html", null, true);
                echo "\">
            </span>
        </div>

        <div class=\"btn-group\" style=\"margin-left: 0px;\">
            <a data-target=\"#selectModal-stack\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paths"]) ? $context["paths"] : null), "async"), "html", null, true);
                echo "browse/files?key=stack\" class=\"btn fileinput-select\" data-toggle=\"modal\">
                <i class=\"icon-upload-alt\"></i>
                ";
                // line 52
                echo $this->env->getExtension('Bolt')->trans("Select");
                echo "
            </a>
        </div>

        ";
                // line 61
                echo "        
        <!-- Modal \"select from server\"  -->
        <div class=\"modal hide modal-wide\" id=\"selectModal-stack\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">

            <div class=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">";
                // line 68
                echo $this->env->getExtension('Bolt')->trans("Cancel");
                echo "</button>
            </div>
        </div>

    </section>

    ";
            } elseif (((isset($context["options"]) ? $context["options"] : null) == "minimal")) {
                // line 75
                echo "
        <h2><i class=\"icon-paper-clip\"></i> ";
                // line 76
                echo $this->env->getExtension('Bolt')->trans("Files on the stack");
                echo "</h2>
        <div id=\"stackholder\">
            ";
                // line 78
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 79
                    echo "
                <div class=\"stackitem stackitem-wide item-";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type"), "html", null, true);
                    echo "\">
                    <a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "files"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                    echo "\" class=\"filebrowserCallbackLink\">
                    ";
                    // line 82
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type") == "image")) {
                        // line 83
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->thumbnail($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), 100, 100), "html", null, true);
                        echo "\" width=\"100\" height=\"100\">
                    ";
                    } else {
                        // line 85
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extension")), "html", null, true);
                        echo "</strong>
                        <small>";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                        echo "</small>
                    ";
                    }
                    // line 88
                    echo "                    </a>
                </div>

            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "        </div>

    ";
            } elseif (((isset($context["options"]) ? $context["options"] : null) == "list")) {
                // line 95
                echo "
        <ul>
        ";
                // line 97
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["stack"]) ? $context["stack"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 98
                    echo "            <li>
                <a href=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "paths"), "files"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filepath"), "html", null, true);
                    echo "\" class=\"filebrowserCallbackLink\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "basename"), "html", null, true);
                    echo "
                    <small>(";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "filesize"), "html", null, true);
                    // line 101
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize")) {
                        echo ", ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "imagesize"), "html", null, true);
                        echo " px";
                    }
                    echo ")</small></a>
            </li>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "        </ul>

    ";
            }
            // line 108
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "_sub_stack.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 99,  258 => 98,  254 => 97,  250 => 95,  228 => 88,  223 => 86,  212 => 83,  210 => 82,  205 => 81,  199 => 80,  179 => 78,  171 => 75,  161 => 68,  152 => 61,  145 => 52,  140 => 50,  132 => 45,  121 => 40,  92 => 29,  87 => 28,  81 => 26,  64 => 22,  47 => 21,  28 => 5,  24 => 3,  584 => 125,  580 => 124,  577 => 123,  573 => 121,  567 => 119,  565 => 118,  562 => 117,  560 => 116,  554 => 114,  539 => 113,  531 => 182,  525 => 181,  520 => 179,  515 => 178,  510 => 176,  505 => 175,  502 => 174,  498 => 173,  494 => 172,  490 => 171,  486 => 170,  482 => 169,  478 => 168,  474 => 167,  468 => 166,  464 => 165,  460 => 164,  456 => 163,  453 => 162,  447 => 161,  441 => 159,  439 => 158,  434 => 157,  430 => 155,  425 => 152,  423 => 149,  420 => 148,  417 => 147,  412 => 145,  407 => 144,  404 => 143,  401 => 142,  396 => 140,  391 => 139,  388 => 138,  385 => 137,  379 => 134,  376 => 133,  373 => 132,  370 => 131,  367 => 130,  364 => 129,  361 => 112,  356 => 110,  351 => 109,  349 => 108,  342 => 103,  336 => 100,  331 => 99,  329 => 98,  325 => 96,  322 => 95,  317 => 91,  311 => 89,  309 => 88,  306 => 87,  300 => 85,  290 => 83,  288 => 82,  285 => 81,  279 => 80,  273 => 78,  271 => 77,  267 => 75,  259 => 70,  251 => 67,  245 => 92,  236 => 60,  233 => 59,  220 => 55,  218 => 85,  213 => 52,  206 => 51,  196 => 79,  193 => 46,  187 => 38,  177 => 36,  160 => 31,  151 => 29,  148 => 28,  142 => 4,  136 => 187,  134 => 95,  131 => 94,  128 => 44,  125 => 74,  120 => 72,  118 => 50,  115 => 49,  113 => 34,  106 => 44,  98 => 40,  96 => 28,  93 => 27,  88 => 25,  82 => 23,  79 => 25,  76 => 21,  70 => 19,  67 => 23,  37 => 5,  30 => 3,  25 => 1,  63 => 15,  57 => 11,  33 => 4,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 74,  257 => 85,  253 => 68,  242 => 63,  227 => 56,  222 => 70,  207 => 68,  203 => 50,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 32,  164 => 56,  159 => 53,  157 => 52,  154 => 51,  137 => 50,  133 => 48,  129 => 46,  123 => 73,  117 => 42,  112 => 41,  109 => 40,  105 => 39,  102 => 42,  97 => 31,  91 => 26,  85 => 24,  80 => 30,  77 => 29,  73 => 24,  66 => 24,  62 => 22,  60 => 21,  56 => 19,  51 => 9,  45 => 7,  43 => 6,  39 => 5,  34 => 9,  32 => 8,  27 => 2,  21 => 2,  19 => 1,);
    }
}

<?php

/* _sub_pretty.twig */
class __TwigTemplate_a028935ce40fdbca4ed18e239b901367c0a72db60f426325528a80025a22e55e extends Twig_Template
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
        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 14
        echo "
";
        // line 25
        echo "
";
        // line 30
        echo "
";
        // line 32
        echo "
";
        // line 39
        echo "
";
        // line 48
        echo "
";
    }

    // line 3
    public function getuserlink($_user = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $_user,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 4
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("useredit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id"))), "html", null, true);
            echo "\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "displayname"), "html", null, true);
            // line 6
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getcontentlink_by_id($_contenttype = null, $_title = null, $_content_id = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "title" => $_title,
            "content_id" => $_content_id,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 10
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editcontent", array("contenttypeslug" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "id" => (isset($context["content_id"]) ? $context["content_id"] : null))), "html", null, true);
            echo "\">";
            // line 11
            echo $this->env->getExtension('Bolt')->trim((isset($context["title"]) ? $context["title"] : null), 70);
            // line 12
            echo "</a>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getcontentlink($_contenttype = null, $_content = null)
    {
        $context = $this->env->mergeGlobals(array(
            "contenttype" => $_contenttype,
            "content" => $_content,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    ";
            $context["crosslinks"] = $this;
            // line 17
            echo "
    ";
            // line 18
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array(), "any", true, true)) {
                // line 19
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title");
                // line 20
                echo "    ";
            } else {
                // line 21
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "name");
                // line 22
                echo "    ";
            }
            // line 23
            echo "    ";
            echo $context["crosslinks"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["title"]) ? $context["title"] : null), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function getchangelogmutation($_raw = null)
    {
        $context = $this->env->mergeGlobals(array(
            "raw" => $_raw,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "    ";
            $context["mapping"] = array("UPDATE" => "changed", "INSERT" => "created", "DELETE" => "deleted", "HOLD" => "put on hold", "PUBLISH" => "published", "DRAFT" => "depublished");
            // line 28
            echo "    ";
            if ($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), (isset($context["raw"]) ? $context["raw"] : null), array(), "array"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["raw"]) ? $context["raw"] : null), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getdatetime($_d = null)
    {
        $context = $this->env->mergeGlobals(array(
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            echo "<time class=\"moment\" datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["d"]) ? $context["d"] : null), "html", null, true);
            echo "</time>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettypepopover($_types = null)
    {
        $context = $this->env->mergeGlobals(array(
            "types" => $_types,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["types"] = ((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/accept_file_types"), "method"))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config"), "get", array(0 => "general/accept_file_types"), "method")));
            // line 35
            echo "    ";
            $context["text"] = ((($this->env->getExtension('Bolt')->trans("Allowed filetypes are:") . "<code>") . twig_join_filter((isset($context["types"]) ? $context["types"] : null), "</code>, <code>")) . "</code>.");
            // line 36
            echo "    <span class=\"label info-pop\" ata-title=\"\"
      data-html=\"true\" data-content=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Bolt')->trans("Types");
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 40
    public function getstackbutton($_file = null)
    {
        $context = $this->env->mergeGlobals(array(
            "file" => $_file,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "    ";
            if ((!$this->env->getExtension('Bolt')->stacked($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath")))) {
                // line 42
                echo "    <a href=\"#\" class=\"btn btn-mini\" data-action=\"stack.addToStack('";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "newpath"), "html", null, true);
                echo "', this);\">
        <i class=\"icon-paper-clip\"></i>
        ";
                // line 44
                echo $this->env->getExtension('Bolt')->trans("Place on stack");
                echo "
    </a>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getdatepickervalue($_date = null)
    {
        $context = $this->env->mergeGlobals(array(
            "date" => $_date,
        ));

        $blocks = array();

        ob_start();
        try {
            ob_start();
            // line 50
            echo "    ";
            if (((isset($context["date"]) ? $context["date"] : null) > "1970-01-01 01:01:01")) {
                // line 51
                echo "       ";
                echo twig_escape_filter($this->env, (((twig_capitalize_string_filter($this->env, $this->env->getExtension('Bolt')->localedatetime((isset($context["date"]) ? $context["date"] : null), "%A")) . twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), ", d")) . $this->env->getExtension('Bolt')->localedatetime((isset($context["date"]) ? $context["date"] : null), " %B")) . twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : null), " Y")), "html", null, true);
                echo "
    ";
            }
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_sub_pretty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 51,  294 => 50,  282 => 49,  247 => 40,  232 => 37,  229 => 36,  226 => 35,  185 => 31,  169 => 28,  166 => 27,  155 => 26,  141 => 23,  138 => 22,  135 => 21,  127 => 18,  124 => 17,  94 => 11,  90 => 10,  61 => 5,  22 => 8,  150 => 39,  130 => 34,  104 => 28,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  54 => 14,  52 => 13,  49 => 12,  46 => 11,  40 => 48,  189 => 80,  178 => 79,  139 => 63,  119 => 57,  116 => 56,  89 => 45,  86 => 44,  31 => 30,  289 => 108,  284 => 105,  270 => 101,  268 => 100,  261 => 42,  258 => 41,  254 => 97,  250 => 95,  228 => 88,  223 => 34,  212 => 33,  210 => 82,  205 => 81,  199 => 80,  179 => 78,  171 => 75,  161 => 78,  152 => 61,  145 => 52,  140 => 50,  132 => 20,  121 => 16,  92 => 29,  87 => 24,  81 => 23,  64 => 22,  47 => 24,  28 => 25,  24 => 3,  584 => 125,  580 => 124,  577 => 123,  573 => 121,  567 => 119,  565 => 118,  562 => 117,  560 => 116,  554 => 114,  539 => 113,  531 => 182,  525 => 181,  520 => 179,  515 => 178,  510 => 176,  505 => 175,  502 => 174,  498 => 173,  494 => 172,  490 => 171,  486 => 170,  482 => 169,  478 => 168,  474 => 167,  468 => 166,  464 => 165,  460 => 164,  456 => 163,  453 => 162,  447 => 161,  441 => 159,  439 => 158,  434 => 157,  430 => 155,  425 => 152,  423 => 149,  420 => 148,  417 => 147,  412 => 145,  407 => 144,  404 => 143,  401 => 142,  396 => 140,  391 => 139,  388 => 138,  385 => 137,  379 => 134,  376 => 133,  373 => 132,  370 => 131,  367 => 130,  364 => 129,  361 => 112,  356 => 110,  351 => 109,  349 => 108,  342 => 103,  336 => 100,  331 => 99,  329 => 98,  325 => 96,  322 => 95,  317 => 91,  311 => 89,  309 => 88,  306 => 87,  300 => 85,  290 => 83,  288 => 82,  285 => 81,  279 => 80,  273 => 78,  271 => 77,  267 => 44,  259 => 70,  251 => 67,  245 => 92,  236 => 60,  233 => 59,  220 => 55,  218 => 85,  213 => 52,  206 => 51,  196 => 79,  193 => 46,  187 => 38,  177 => 36,  160 => 31,  151 => 29,  148 => 67,  142 => 4,  136 => 36,  134 => 95,  131 => 94,  128 => 44,  125 => 59,  120 => 32,  118 => 50,  115 => 49,  113 => 34,  106 => 44,  98 => 40,  96 => 12,  93 => 46,  88 => 25,  82 => 43,  79 => 25,  76 => 9,  70 => 36,  67 => 23,  37 => 39,  30 => 6,  25 => 14,  63 => 6,  57 => 4,  33 => 4,  291 => 104,  280 => 96,  274 => 93,  269 => 91,  264 => 74,  257 => 85,  253 => 68,  242 => 63,  227 => 56,  222 => 70,  207 => 68,  203 => 81,  201 => 66,  198 => 65,  181 => 64,  174 => 76,  168 => 32,  164 => 56,  159 => 53,  157 => 52,  154 => 41,  137 => 50,  133 => 61,  129 => 19,  123 => 58,  117 => 42,  112 => 30,  109 => 15,  105 => 50,  102 => 42,  97 => 31,  91 => 26,  85 => 24,  80 => 30,  77 => 29,  73 => 24,  66 => 18,  62 => 22,  60 => 16,  56 => 28,  51 => 9,  45 => 3,  43 => 10,  39 => 5,  34 => 32,  32 => 8,  27 => 2,  21 => 2,  19 => 2,);
    }
}

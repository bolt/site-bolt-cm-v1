<?php

/* activity.twig */
class __TwigTemplate_3cb4f895c0f2c6bc4dc07c7b1b49c38f1cf16e8e894f72ed194d3d18da8e3f7d extends Twig_Template
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
        $this->env->loadTemplate("_header.twig")->display(array_merge($context, array("active" => "settings")));
        // line 2
        echo "

<h1><strong>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</strong></h1>

<div class=\"btn-group\" style='padding-bottom: 12px'>
    <a class=\"btn\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("activitylog", array("action" => "trim"));
        echo "\">
        <i class=\"icon-trash\"></i> ";
        // line 8
        echo $this->env->getExtension('Bolt')->trans("Trim Activitylog");
        echo "
    </a>
    <a class=\"btn confirm\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("activitylog", array("action" => "clear"));
        echo "\" data-confirm=\"Are you sure you want to clear the activity logs?\">
        <i class=\"icon-trash\"></i> ";
        // line 11
        echo $this->env->getExtension('Bolt')->trans("Clear Activitylog");
        echo "
    </a>
</div>

<table class=\"dashboardlisting\">
    <tbody>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) ? $context["activity"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 18
            echo "    <tr>
        <td>
            № ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "id"), "html", null, true);
            echo "<br>Lvl ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "level"), "html", null, true);
            echo "
        </td>
        <td>
            <b>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "code"), "html", null, true);
            echo "</b> <br>
            ";
            // line 24
            echo $this->env->getExtension('Bolt')->trans("in:");
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "file"), "html", null, true);
            echo "::";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "line"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "route"), "html", null, true);
            echo ")
        </td>
        <td>
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "username"), "html", null, true);
            echo " <br>
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "ip"), "html", null, true);
            echo "
        </td>
        <td>
            <time class=\"moment\" datetime=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "c"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "date"), "html", null, true);
            echo "</time>
        </td>
    </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>

</table>

";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Bolt')->pager($this->env), "html", null, true);
        echo "


";
        // line 43
        $this->env->loadTemplate("_footer.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "activity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 43,  118 => 40,  112 => 36,  97 => 31,  91 => 28,  87 => 27,  75 => 24,  69 => 23,  61 => 20,  57 => 18,  53 => 17,  44 => 11,  40 => 10,  35 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}

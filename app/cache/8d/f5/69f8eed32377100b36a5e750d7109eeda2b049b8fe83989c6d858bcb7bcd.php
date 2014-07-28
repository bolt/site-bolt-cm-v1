<?php

/* _sub_lastmodified.twig */
class __TwigTemplate_8df569f8eed32377100b36a5e750d7109eeda2b049b8fe83989c6d858bcb7bcd extends Twig_Template
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
        $context["pretty"] = $this->env->loadTemplate("_sub_pretty.twig");
        // line 2
        echo "<section>
    <h2>
    ";
        // line 4
        if ((array_key_exists("filtered", $context) && (isset($context["filtered"]) ? $context["filtered"] : null))) {
            // line 5
            echo "        ";
            echo "Recent modifications";
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo $this->env->getExtension('Bolt')->trans("Last modified %contenttypes%", array("%contenttypes%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
            echo "
    ";
        }
        // line 9
        echo "    </h2>
    <ul>
    ";
        // line 11
        if (array_key_exists("changelog", $context)) {
            // line 12
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["changelog"]) ? $context["changelog"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["entry"]) {
                // line 13
                echo "            <li>
                ";
                // line 14
                if ((array_key_exists("filtered", $context) && (isset($context["filtered"]) ? $context["filtered"] : null))) {
                    // line 15
                    echo "                    ";
                    $context["title"] = $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name");
                    // line 16
                    echo "                ";
                } else {
                    // line 17
                    echo "                    ";
                    if ($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title")) {
                        // line 18
                        echo "                        ";
                        $context["title"] = $context["pretty"]->getcontentlink_by_id((isset($context["contenttype"]) ? $context["contenttype"] : null), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title"), $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid"));
                        // line 19
                        echo "                    ";
                    } else {
                        // line 20
                        echo "                        ";
                        $context["title"] = $this->env->getExtension('Bolt')->trans("%name% № %id%", array("%name%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "singular_name"), "%id%" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid")));
                        // line 21
                        echo "                    ";
                    }
                    // line 22
                    echo "                    № ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid"), "html", null, true);
                    echo ".
                ";
                }
                // line 24
                echo "               ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
               ";
                // line 25
                echo $context["pretty"]->getchangelogmutation($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "effectiveMutationType"));
                echo "
               ";
                // line 26
                echo $this->env->getExtension('Bolt')->trans("by");
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "username"), "html", null, true);
                echo "
               <small>(";
                // line 27
                echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "date"));
                echo ")</small>
               <small><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changelogdetails", array("contenttype" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "contentid" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "contentid"), "id" => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "id"))), "html", null, true);
                echo "\">view</a></small>
            </li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "            <li><em>";
                echo $this->env->getExtension('Bolt')->trans("No latest %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
                echo ".</em></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latest"]) ? $context["latest"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 35
                echo "            <li>
               № ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id"), "html", null, true);
                echo ".
               ";
                // line 37
                echo $context["pretty"]->getcontentlink((isset($context["contenttype"]) ? $context["contenttype"] : null), (isset($context["content"]) ? $context["content"] : null));
                echo "
               <small>(";
                // line 38
                echo $context["pretty"]->getdatetime($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "datechanged"));
                echo ")</small>
            </li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 41
                echo "            <li><em>";
                echo $this->env->getExtension('Bolt')->trans("No latest %contenttype%", array("%contenttype%" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "name")));
                echo ".</em></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    ";
        }
        // line 44
        echo "    </ul>
    ";
        // line 45
        if (((array_key_exists("changelog", $context) && (isset($context["contentid"]) ? $context["contentid"] : null)) && (isset($context["filtered"]) ? $context["filtered"] : null))) {
            // line 46
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("changeloglist", array("contenttype" => $this->getAttribute((isset($context["contenttype"]) ? $context["contenttype"] : null), "slug"), "contentid" => (isset($context["contentid"]) ? $context["contentid"] : null))), "html", null, true);
            echo "\">
            ";
            // line 47
            echo $this->env->getExtension('Bolt')->trans("Full list...");
            echo "
        </a>
    ";
        }
        // line 50
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "_sub_lastmodified.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 45,  135 => 37,  128 => 35,  122 => 34,  102 => 28,  98 => 27,  83 => 24,  74 => 21,  68 => 19,  59 => 16,  43 => 11,  39 => 9,  33 => 7,  27 => 5,  25 => 4,  389 => 148,  382 => 146,  374 => 142,  362 => 139,  359 => 138,  356 => 137,  350 => 135,  348 => 134,  343 => 133,  341 => 132,  337 => 130,  322 => 128,  313 => 125,  307 => 124,  300 => 122,  297 => 121,  295 => 120,  277 => 112,  271 => 111,  265 => 108,  260 => 105,  241 => 102,  238 => 101,  232 => 98,  225 => 97,  203 => 90,  197 => 87,  189 => 81,  181 => 76,  171 => 69,  145 => 57,  139 => 38,  132 => 50,  105 => 34,  91 => 29,  88 => 25,  85 => 27,  79 => 25,  77 => 22,  67 => 21,  62 => 17,  56 => 15,  207 => 65,  204 => 64,  200 => 89,  190 => 59,  170 => 55,  163 => 53,  159 => 44,  156 => 43,  153 => 50,  149 => 49,  146 => 48,  141 => 55,  119 => 33,  104 => 31,  99 => 30,  70 => 22,  66 => 20,  63 => 19,  60 => 18,  57 => 16,  53 => 14,  50 => 14,  48 => 12,  45 => 12,  36 => 8,  32 => 7,  24 => 4,  22 => 3,  2146 => 751,  2138 => 748,  2134 => 746,  2132 => 745,  2129 => 744,  2123 => 741,  2120 => 740,  2118 => 739,  2115 => 738,  2111 => 735,  2103 => 730,  2099 => 729,  2095 => 728,  2089 => 727,  2079 => 724,  2073 => 723,  2067 => 722,  2061 => 721,  2055 => 720,  2051 => 719,  2045 => 718,  2036 => 717,  2034 => 716,  2031 => 715,  2027 => 712,  2019 => 707,  2015 => 706,  2011 => 705,  2001 => 702,  1995 => 701,  1991 => 700,  1985 => 699,  1976 => 698,  1974 => 697,  1971 => 696,  1967 => 693,  1963 => 691,  1953 => 679,  1943 => 678,  1933 => 677,  1925 => 674,  1917 => 673,  1909 => 672,  1906 => 671,  1904 => 670,  1901 => 669,  1897 => 666,  1889 => 664,  1885 => 663,  1878 => 662,  1870 => 661,  1861 => 660,  1859 => 659,  1856 => 658,  1853 => 656,  1849 => 654,  1845 => 653,  1839 => 652,  1832 => 651,  1824 => 650,  1815 => 649,  1813 => 648,  1810 => 647,  1802 => 640,  1796 => 637,  1783 => 631,  1777 => 628,  1771 => 627,  1765 => 626,  1761 => 625,  1756 => 623,  1748 => 622,  1744 => 621,  1736 => 620,  1731 => 618,  1723 => 617,  1716 => 615,  1708 => 614,  1700 => 613,  1691 => 607,  1687 => 606,  1682 => 603,  1680 => 602,  1677 => 601,  1675 => 600,  1672 => 599,  1665 => 593,  1656 => 587,  1652 => 585,  1646 => 583,  1640 => 581,  1638 => 580,  1626 => 571,  1616 => 568,  1606 => 567,  1598 => 566,  1590 => 565,  1582 => 564,  1574 => 563,  1568 => 560,  1559 => 558,  1549 => 557,  1543 => 554,  1535 => 553,  1528 => 551,  1520 => 550,  1509 => 549,  1501 => 548,  1494 => 543,  1488 => 541,  1482 => 539,  1480 => 538,  1476 => 537,  1471 => 534,  1469 => 533,  1466 => 532,  1464 => 531,  1461 => 530,  1458 => 528,  1448 => 523,  1428 => 512,  1422 => 509,  1418 => 508,  1414 => 507,  1409 => 505,  1405 => 504,  1395 => 497,  1389 => 494,  1385 => 493,  1377 => 492,  1372 => 489,  1366 => 488,  1362 => 486,  1360 => 485,  1357 => 484,  1353 => 481,  1343 => 476,  1327 => 463,  1320 => 459,  1307 => 455,  1303 => 453,  1298 => 450,  1281 => 447,  1278 => 446,  1274 => 445,  1270 => 444,  1263 => 440,  1258 => 437,  1255 => 436,  1253 => 435,  1246 => 431,  1237 => 429,  1228 => 423,  1224 => 422,  1220 => 421,  1215 => 419,  1211 => 418,  1202 => 412,  1195 => 410,  1187 => 409,  1184 => 408,  1178 => 407,  1174 => 405,  1172 => 404,  1169 => 403,  1165 => 400,  1159 => 396,  1147 => 389,  1143 => 388,  1138 => 386,  1131 => 383,  1129 => 382,  1122 => 378,  1119 => 377,  1114 => 374,  1099 => 371,  1096 => 370,  1092 => 369,  1088 => 368,  1081 => 364,  1076 => 361,  1073 => 360,  1071 => 359,  1058 => 355,  1054 => 354,  1042 => 347,  1035 => 343,  1029 => 342,  1025 => 341,  1018 => 340,  1010 => 336,  1002 => 335,  994 => 334,  985 => 329,  983 => 328,  980 => 327,  975 => 323,  969 => 319,  956 => 311,  947 => 309,  943 => 308,  937 => 305,  933 => 304,  928 => 302,  923 => 299,  921 => 298,  912 => 292,  904 => 287,  896 => 282,  892 => 280,  887 => 277,  870 => 274,  867 => 273,  863 => 272,  859 => 271,  852 => 267,  847 => 264,  844 => 263,  842 => 262,  835 => 258,  826 => 256,  812 => 251,  808 => 250,  801 => 245,  797 => 243,  791 => 242,  785 => 239,  776 => 238,  773 => 237,  768 => 236,  765 => 234,  758 => 233,  755 => 231,  753 => 230,  745 => 227,  739 => 224,  733 => 223,  729 => 222,  722 => 221,  714 => 217,  706 => 216,  698 => 215,  691 => 210,  685 => 208,  679 => 206,  677 => 205,  673 => 204,  667 => 201,  664 => 200,  660 => 198,  656 => 196,  654 => 195,  652 => 194,  649 => 193,  647 => 192,  644 => 191,  641 => 189,  637 => 187,  622 => 185,  618 => 184,  613 => 182,  607 => 181,  598 => 180,  596 => 179,  593 => 178,  590 => 176,  585 => 173,  579 => 172,  567 => 170,  555 => 168,  552 => 167,  548 => 166,  537 => 165,  528 => 161,  522 => 160,  517 => 157,  511 => 156,  499 => 154,  487 => 152,  484 => 151,  480 => 150,  469 => 149,  459 => 147,  456 => 146,  453 => 145,  450 => 144,  443 => 142,  440 => 141,  437 => 140,  431 => 138,  428 => 137,  425 => 136,  422 => 135,  420 => 134,  417 => 133,  414 => 131,  410 => 129,  405 => 126,  401 => 124,  399 => 123,  388 => 119,  383 => 117,  372 => 109,  360 => 106,  353 => 136,  351 => 100,  339 => 95,  331 => 94,  326 => 93,  321 => 91,  317 => 88,  302 => 84,  296 => 83,  289 => 117,  284 => 78,  272 => 74,  269 => 73,  267 => 109,  264 => 71,  261 => 69,  256 => 66,  245 => 103,  239 => 63,  235 => 62,  226 => 60,  220 => 59,  217 => 95,  215 => 94,  209 => 66,  205 => 91,  198 => 51,  194 => 61,  188 => 49,  184 => 58,  178 => 47,  175 => 50,  169 => 47,  166 => 67,  164 => 46,  158 => 40,  147 => 41,  143 => 36,  137 => 43,  133 => 34,  127 => 33,  124 => 36,  118 => 31,  115 => 30,  113 => 29,  110 => 31,  94 => 30,  90 => 27,  80 => 24,  64 => 17,  51 => 13,  46 => 14,  44 => 11,  41 => 12,  31 => 6,  28 => 6,  26 => 4,  519 => 240,  509 => 233,  504 => 231,  486 => 216,  471 => 206,  467 => 148,  446 => 143,  434 => 139,  418 => 171,  396 => 151,  390 => 149,  380 => 147,  378 => 144,  369 => 140,  365 => 139,  361 => 138,  354 => 134,  347 => 130,  340 => 126,  334 => 123,  324 => 92,  318 => 127,  308 => 85,  306 => 110,  299 => 106,  292 => 119,  285 => 115,  278 => 77,  263 => 91,  259 => 90,  253 => 89,  249 => 65,  244 => 85,  229 => 61,  224 => 82,  222 => 81,  216 => 80,  212 => 56,  208 => 92,  199 => 76,  195 => 75,  187 => 74,  182 => 73,  180 => 72,  177 => 56,  167 => 54,  165 => 62,  161 => 65,  154 => 38,  150 => 59,  144 => 47,  140 => 56,  134 => 53,  131 => 36,  129 => 51,  126 => 47,  116 => 42,  114 => 40,  106 => 25,  101 => 22,  96 => 37,  92 => 26,  86 => 34,  82 => 26,  76 => 22,  73 => 29,  71 => 20,  65 => 18,  58 => 16,  54 => 14,  52 => 18,  49 => 17,  47 => 16,  42 => 13,  40 => 12,  37 => 9,  35 => 10,  29 => 7,  23 => 2,  21 => 2,  19 => 1,);
    }
}

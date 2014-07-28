<?php

/* assets/socialite.twig */
class __TwigTemplate_46595e3ddec400f8919361c4885f720f6df7e9be0d622517cc64c9cd2b492e84 extends Twig_Template
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
        echo "
";
        // line 2
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "BufferAppButton")) {
            // line 3
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://bufferapp.com/add\"
        class=\"socialite bufferapp-button\"
        data-text=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true);
            echo "\"
        data-url=\"";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-count=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
        data-via=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["via"]) ? $context["via"] : null), "html", null, true);
            echo "\"
        data-picture=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["image"]) ? $context["image"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Buffer it</span>
    </a>
</div>
";
        }
        // line 17
        echo "
";
        // line 18
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "FacebookLike")) {
            // line 19
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://www.facebook.com/sharer.php?u=";
            // line 21
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "url"), "html", null, true);
            echo "&amp;t=";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "url"), "html", null, true);
            echo "\"
        class=\"socialite facebook-like\"
        data-href=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-send=\"false\"
        data-action=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\"
        data-colorscheme=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["colorscheme"]) ? $context["colorscheme"] : null), "html", null, true);
            echo "\"
        data-kid_directed_site=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["kid_directed_site"]) ? $context["kid_directed_site"] : null), "html", null, true);
            echo "\"
        data-show-faces=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["showfaces"]) ? $context["showfaces"] : null), "html", null, true);
            echo "\"
        data-layout=\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["layout"]) ? $context["layout"] : null), "html", null, true);
            echo "\"
        data-width=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
           <span class=\"vhidden\">Share on Facebook</span>
    </a>
</div>
";
        }
        // line 36
        echo "
";
        // line 37
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "FacebookFollow")) {
            // line 38
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        class=\"socialite facebook-like\"
        data-href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-send=\"false\"
        data-action=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo "\"
        data-colorscheme=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["colorscheme"]) ? $context["colorscheme"] : null), "html", null, true);
            echo "\"
        data-kid_directed_site=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["kid_directed_site"]) ? $context["kid_directed_site"] : null), "html", null, true);
            echo "\"
        data-show-faces=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["showfaces"]) ? $context["showfaces"] : null), "html", null, true);
            echo "\"
        data-layout=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["layout"]) ? $context["layout"] : null), "html", null, true);
            echo "\"
        data-width=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
           <span class=\"vhidden\">Follow on Facebook</span>
    </a>
</div>
";
        }
        // line 55
        echo "
";
        // line 56
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "FacebookFacepile")) {
            // line 57
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"";
            // line 59
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        class=\"socialite facebook-facepile\"
        data-href=\"";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-max-rows=\"";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["maxrows"]) ? $context["maxrows"] : null), "html", null, true);
            echo "\"
        data-colorscheme=\"";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["colorscheme"]) ? $context["colorscheme"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        data-show-count=\"";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
           <span class=\"vhidden\">Facebook Facepile</span>
    </a>
</div>
";
        }
        // line 71
        echo "
";
        // line 72
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "TwitterShare")) {
            // line 73
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://twitter.com/share\"
        class=\"socialite twitter-share\"
        data-text=\"";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\"
        data-url=\"";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-align=\"";
            // line 79
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
            echo "\"
        data-count=\"";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Share on Twitter</span>
    </a>
</div>
";
        }
        // line 87
        echo "
";
        // line 88
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "TwitterFollow")) {
            // line 89
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://twitter.com/";
            // line 91
            echo twig_escape_filter($this->env, (isset($context["twitter_handle"]) ? $context["twitter_handle"] : null), "html", null, true);
            echo "\"
        class=\"socialite twitter-follow\"
        data-text=\"";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\"
        data-url=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-align=\"";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
            echo "\"
        data-count=\"";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Follow on Twitter</span>
    </a>
</div>
";
        }
        // line 103
        echo "
";
        // line 104
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "TwitterMention")) {
            // line 105
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"https://twitter.com/intent/tweet?screen_name=";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["twitter_handle"]) ? $context["twitter_handle"] : null), "html", null, true);
            echo "\"
        class=\"socialite twitter-mention\"
        data-text=\"";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\"
        data-url=\"";
            // line 110
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-align=\"";
            // line 111
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 112
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Mention on Twitter</span>
    </a>
</div>
";
        }
        // line 118
        echo "
";
        // line 119
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "TwitterHashtag")) {
            // line 120
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"https://twitter.com/intent/tweet?button_hashtag=";
            // line 122
            echo twig_escape_filter($this->env, (isset($context["hashtag"]) ? $context["hashtag"] : null), "html", null, true);
            echo "\"
        class=\"socialite twitter-hashtag\"
        data-text=\"";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "\"
        data-url=\"";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-align=\"";
            // line 126
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 127
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Hashtag on Twitter</span>
        </a>
</div>
";
        }
        // line 133
        echo "
";
        // line 134
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "TwitterEmbed")) {
            // line 135
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        class=\"socialite twitter-embed\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Embed from Twitter</span>
    </a>
</div>
";
        }
        // line 144
        echo "
";
        // line 145
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "TwitterTimeline")) {
            // line 146
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"https://twitter.com/";
            // line 148
            echo twig_escape_filter($this->env, (isset($context["twitter_handle"]) ? $context["twitter_handle"] : null), "html", null, true);
            echo "\"
        class=\"socialite twitter-timeline\"
        data-widget-id=\"";
            // line 150
            echo twig_escape_filter($this->env, (isset($context["widget_id"]) ? $context["widget_id"] : null), "html", null, true);
            echo "\"
        data-chrome=\"";
            // line 151
            echo twig_escape_filter($this->env, (isset($context["chrome"]) ? $context["chrome"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">PopAnth on Twitter</span>
    </a>
</div>
";
        }
        // line 157
        echo "
";
        // line 158
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "GooglePlusFollow")) {
            // line 159
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        class=\"socialite googleplus-follow\"
        data-annotation=\"";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : null), "html", null, true);
            echo "\"
        data-height=\"";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "\"
        data-href=\"";
            // line 165
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-rel=\"";
            // line 166
            echo twig_escape_filter($this->env, (isset($context["rel"]) ? $context["rel"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Follow on Google+</span>
    </a>
</div>
";
        }
        // line 172
        echo "
";
        // line 173
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "GooglePlusOne")) {
            // line 174
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"https://plus.google.com/share?url=";
            // line 176
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "url"), "html", null, true);
            echo "\"
        class=\"socialite googleplus-one\"
        data-size=\"tall\"
        data-href=\"";
            // line 179
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\" rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">+1 on Google+</span>
    </a>
</div>
";
        }
        // line 184
        echo "
";
        // line 185
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "GooglePlusShare")) {
            // line 186
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"https://plus.google.com/share?url=";
            // line 188
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "url"), "html", null, true);
            echo "\"
        class=\"socialite googleplus-share\"
        data-action=\"share\"
        data-annotation=\"";
            // line 191
            echo twig_escape_filter($this->env, (isset($context["annotation"]) ? $context["annotation"] : null), "html", null, true);
            echo "\"
        data-height=\"";
            // line 192
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "\"
        data-href=\"";
            // line 193
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Share on Google+</span>
    </a>
</div>
";
        }
        // line 199
        echo "
";
        // line 200
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "GooglePlusBadge")) {
            // line 201
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"";
            // line 203
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        class=\"socialite googleplus-badge\"
        data-href=\"";
            // line 205
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-layout=\"";
            // line 206
            echo twig_escape_filter($this->env, (isset($context["layout"]) ? $context["layout"] : null), "html", null, true);
            echo "\"
        data-width=\"";
            // line 207
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
            echo "\"
        data-theme=\"";
            // line 208
            echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : null), "html", null, true);
            echo "\"
        data-showcoverphoto=\"";
            // line 209
            echo twig_escape_filter($this->env, (isset($context["showcoverphoto"]) ? $context["showcoverphoto"] : null), "html", null, true);
            echo "\"
        data-showtagline=\"";
            // line 210
            echo twig_escape_filter($this->env, (isset($context["showtagline"]) ? $context["showtagline"] : null), "html", null, true);
            echo "\"
        data-rel=\"";
            // line 211
            echo twig_escape_filter($this->env, (isset($context["rel"]) ? $context["rel"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Follow on Google+</span>
    </a>
</div>
";
        }
        // line 217
        echo "
";
        // line 218
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "LinkedinShare")) {
            // line 219
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
            // line 221
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "url"), "html", null, true);
            echo "&amp;title=";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "url"), "html", null, true);
            echo "\"
        class=\"socialite linkedin-share\"
        data-url=\"";
            // line 223
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-counter=\"top\" rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Share on LinkedIn</span>
    </a>
</div>
";
        }
        // line 229
        echo "
";
        // line 230
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "LinkedinRecommend")) {
            // line 231
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
            // line 233
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "url"), "html", null, true);
            echo "&amp;title=";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "url"), "html", null, true);
            echo "\"
        class=\"socialite linkedin-recommend\"
        data-url=\"";
            // line 235
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-counter=\"top\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Share on LinkedIn</span>
    </a>
</div>
";
        }
        // line 242
        echo "
";
        // line 243
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "PinterestPinit")) {
            // line 244
            echo "<div class=\"social-buttons cf\" style=\"margin-top: 41px;\">
    <a
        href=\"//www.pinterest.com/pin/create/button/\"
        class=\"socialite pinterest-pinit\"
        data-pin-do=\"buttonBookmark\"
        data-pin-lang=\"";
            // line 249
            echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
            echo "\"
        data-pin-color=\"";
            // line 250
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : null), "html", null, true);
            echo "\"
        data-pin-height=\"";
            // line 251
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
            echo "\"
        data-pin-config=\"";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">PinIt on Pinterest</span>
    </a>
</div>
";
        }
        // line 258
        echo "
";
        // line 260
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "GitHubStar")) {
            // line 261
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://github.com/";
            // line 263
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["repo"]) ? $context["repo"] : null), "html", null, true);
            echo "\"
        class=\"socialite github-watch\"
        data-user=\"";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "\"
        data-repo=\"";
            // line 266
            echo twig_escape_filter($this->env, (isset($context["repo"]) ? $context["repo"] : null), "html", null, true);
            echo "\"
        data-type=\"watch\"
        data-count=\"";
            // line 268
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 269
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Star on GitHub</span>
    </a>
</div>
";
        }
        // line 275
        echo "
";
        // line 276
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "GitHubFork")) {
            // line 277
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://github.com/";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["repo"]) ? $context["repo"] : null), "html", null, true);
            echo "\"
        class=\"socialite github-fork\"
        data-user=\"";
            // line 281
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "\"
        data-repo=\"";
            // line 282
            echo twig_escape_filter($this->env, (isset($context["repo"]) ? $context["repo"] : null), "html", null, true);
            echo "\"
        data-type=\"fork\"
        data-count=\"";
            // line 284
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 285
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Fork on GitHub</span>
    </a>
</div>
";
        }
        // line 291
        echo "
";
        // line 292
        if (((isset($context["socialite"]) ? $context["socialite"] : null) == "GitHubFollow")) {
            // line 293
            echo "<div class=\"social-buttons cf\">
    <a
        href=\"http://github.com/";
            // line 295
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "\"
        class=\"socialite github-follow\"
        data-user=\"";
            // line 297
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : null), "html", null, true);
            echo "\"
        data-type=\"follow\"
        data-count=\"";
            // line 299
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
            echo "\"
        data-size=\"";
            // line 300
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo "\"
        rel=\"nofollow\" target=\"_blank\">
            <span class=\"vhidden\">Follow on GitHub</span>
    </a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "assets/socialite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 300,  699 => 299,  694 => 297,  689 => 295,  685 => 293,  683 => 292,  680 => 291,  671 => 285,  667 => 284,  662 => 282,  658 => 281,  651 => 279,  647 => 277,  645 => 276,  642 => 275,  633 => 269,  629 => 268,  624 => 266,  620 => 265,  613 => 263,  609 => 261,  607 => 260,  604 => 258,  595 => 252,  591 => 251,  587 => 250,  583 => 249,  576 => 244,  574 => 243,  571 => 242,  561 => 235,  554 => 233,  550 => 231,  548 => 230,  545 => 229,  536 => 223,  529 => 221,  525 => 219,  523 => 218,  520 => 217,  511 => 211,  507 => 210,  503 => 209,  499 => 208,  495 => 207,  491 => 206,  487 => 205,  482 => 203,  478 => 201,  476 => 200,  473 => 199,  464 => 193,  460 => 192,  456 => 191,  450 => 188,  446 => 186,  444 => 185,  441 => 184,  433 => 179,  427 => 176,  423 => 174,  421 => 173,  418 => 172,  409 => 166,  405 => 165,  401 => 164,  397 => 163,  392 => 161,  388 => 159,  386 => 158,  383 => 157,  374 => 151,  370 => 150,  365 => 148,  361 => 146,  359 => 145,  356 => 144,  346 => 137,  342 => 135,  340 => 134,  337 => 133,  328 => 127,  324 => 126,  320 => 125,  316 => 124,  311 => 122,  307 => 120,  305 => 119,  302 => 118,  293 => 112,  289 => 111,  285 => 110,  281 => 109,  276 => 107,  272 => 105,  270 => 104,  267 => 103,  258 => 97,  254 => 96,  250 => 95,  246 => 94,  242 => 93,  237 => 91,  233 => 89,  231 => 88,  228 => 87,  219 => 81,  215 => 80,  211 => 79,  207 => 78,  203 => 77,  197 => 73,  195 => 72,  192 => 71,  183 => 65,  179 => 64,  175 => 63,  171 => 62,  167 => 61,  162 => 59,  158 => 57,  156 => 56,  153 => 55,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  119 => 42,  114 => 40,  110 => 38,  108 => 37,  96 => 30,  92 => 29,  64 => 21,  60 => 19,  34 => 8,  154 => 13,  150 => 11,  133 => 9,  116 => 8,  113 => 7,  98 => 4,  90 => 3,  67 => 1,  61 => 21,  27 => 18,  126 => 58,  120 => 56,  117 => 55,  111 => 6,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  71 => 23,  66 => 29,  51 => 15,  46 => 11,  42 => 10,  38 => 9,  25 => 5,  105 => 36,  97 => 35,  93 => 37,  89 => 33,  79 => 2,  72 => 22,  69 => 21,  63 => 19,  58 => 18,  55 => 17,  53 => 15,  50 => 14,  44 => 19,  39 => 10,  37 => 9,  30 => 7,  24 => 3,  22 => 2,  19 => 1,);
    }
}

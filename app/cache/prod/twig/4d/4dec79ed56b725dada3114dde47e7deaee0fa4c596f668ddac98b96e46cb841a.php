<?php

/* PointWebAppBundle:Default:index.html.twig */
class __TwigTemplate_db0f5f95c73275d173bea72bfd39f0e18130dae356174af3ee31ace4f69190e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "



<!-- BEGIN RECOMMEND -->
<section id=\"recommend\" style=\"background:url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/sectionOffer/bg.jpg"), "html", null, true);
        echo ") fixed no-repeat; background-size:cover;\">
\t<div class=\"container\">
\t\t<div class=\"header text-center\">
\t\t\t<h3>Vidéo <span>recommandé</span></h3>
\t\t\t<p></p>
\t\t</div>
\t\t<div class=\"row m-t-50 gallery\">

\t\t\t<!-- begin position -->
\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["recommend"]) ? $context["recommend"] : $this->getContext($context, "recommend")), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "\t\t\t<div class=\"col-md-3 col-sm-6 text-center\">
\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "#spot\">
\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t";
            // line 20
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "pictures", array())) > 0)) {
                // line 21
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "pictures", array()), 0, array()), "getWebPath", array(), "method"), "my_thumb_1_3")), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" class=\"img-responsive\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'>\t\t\t\t\t\t
\t\t\t\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t\t\t<img src=\"http://img.youtube.com/vi/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                echo "/hqdefault.jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"img-responsive\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'>\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t\t<h4>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<p>";
            // line 27
            echo $this->getAttribute($context["item"], "reference", array());
            echo "</p>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t<!-- ./end position -->


\t\t</div>
\t</div>
</section>
<!-- END RECOMMEND -->


<!-- BEGIN PORTFOLIO -->
<section id=\"portfolio\">
\t<div class=\"container\">


\t\t<div class=\"header\">
\t\t\t<h3>La<br>Mediathèque</h3>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<p>Centralisation de toutes les vidéos qui ont pû être publié sur le site. </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-right portfolio-list-action\">
\t\t\t\t\t<a href=\"#\" class=\"fa fa-2x fa-th-large\" id=\"projectListLarge\"></a>
\t\t\t\t\t<a href=\"#\" class=\"fa fa-2x fa-th\" id=\"projectListStandard\"></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div id=\"portfolioProject\">

\t\t\t<div class=\"apple\"></div>

\t\t\t<div class=\"gallery\">
\t\t\t\t<ul class=\"list-unstyled row m-b-20\">
\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 65
            echo "\t\t\t\t\t<li class=\"col-md-2 col-sm-3 col-xs-4 video\">
\t\t\t\t\t\t";
            // line 66
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "pictures", array())) > 0)) {
                // line 67
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "pictures", array()), 0, array()), "getWebPath", array(), "method"), "my_thumb_1_3")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\tdailymotion=\"";
                // line 68
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "http://www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                }
                echo "\" vimeo=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                }
                echo "\" autre=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                }
                echo "\">\t\t\t\t\t\t
\t\t\t\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t\t\t<img src=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo " http://img.youtube.com/vi/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "/hqdefault.jpg ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "http://www.dailymotion.com/thumbnail/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                }
                echo " \"
\t\t\t\t\t\t\t\t alt=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t id-video=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t class=\"img-responsive\"
\t\t\t\t\t\t\t\t data-image='";
                // line 74
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\t\t\t\t\tdailymotion=\"";
                // line 75
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "http://www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                }
                echo "\"
\t\t\t\t\t\t\t\t \t\tvimeo=\"";
                // line 76
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                }
                echo "\"
\t\t\t\t\t\t\t\t \t\tautre=\"";
                // line 77
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                }
                echo "\">
\t\t\t\t\t\t";
            }
            // line 79
            echo "
\t\t\t\t\t\t<!--<center><span>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</span></center>-->

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"col-md-4 col-sm-6 col-xs-8\">
\t\t\t\t\t\t<div class=\"padding-20\">
\t\t\t\t\t\t\t<h4 class=\"title\">L'article libre<span> du jour</span></h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tBientôt un article tout les jours, un article libre, traîtant de tout sujet divers et variés.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "id", array()))), "html", null, true);
        echo "#spot\" class=\"more\">Lire</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>


\t\t\t\t\t";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), 1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 97
            echo "\t\t\t\t\t<li class=\"col-md-2 col-sm-3 col-xs-4 video\">
\t\t\t\t\t\t";
            // line 98
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "pictures", array())) > 0)) {
                // line 99
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "pictures", array()), 0, array()), "getWebPath", array(), "method"), "my_thumb_1_3")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\tdailymotion=\"";
                // line 100
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "http://www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                }
                echo "\" vimeo=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                }
                echo "\" autre=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                }
                echo "\">\t\t\t\t\t\t
\t\t\t\t\t\t";
            } else {
                // line 102
                echo "\t\t\t\t\t\t<img src=\"http://img.youtube.com/vi/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                echo "/hqdefault.jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" class=\"img-responsive\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\tdailymotion=\"";
                // line 103
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "//www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                }
                echo "\" vimeo=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                }
                echo "\" autre=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                }
                echo "\">\t\t\t\t\t\t";
            }
            // line 104
            echo "
\t\t\t\t\t\t<!--<center><span>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</span></center>-->
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
\t\t\t\t</ul>
\t\t\t</div>

\t\t</div>
\t</div>
</section>
<footer id=\"sectionFooter\">
\t<script>
\t// Create a lightbox

var \$lightbox = \$(\"<div class='lightbox'></div>\");
var \$img = \$('<iframe width=\"560\" height=\"315\"  frameborder=\"0\" allowfullscreen>');
var \$caption = \$(\"<h2 class='caption'></h2>\");
var \$center = \$(\"<center></center>\")
var \$btn = \$(\"<a class='btn btn-primary' align='center' role='button' href='' >Détail</a>\");


// Add image and caption to lightbox

\$lightbox
\t.append(\$img)
\t.append(\$caption)
\t.append(\$center);
\$center
\t.append(\$btn);


// Add lighbox to document

\$('body').append(\$lightbox);


\$('.gallery .video').click(function(e) {
\te.preventDefault();

\t// Get image link and description
\tvar src = \$(this).children('img').attr(\"data-image\");
\tvar cap = \$(this).children('img').attr(\"alt\");
\tvar idvideo = \$(this).children('img').attr(\"id-video\");
\tvar youtube = \$(this).children('img').attr(\"youtube\");
\tvar dailymotion = \$(this).children('img').attr(\"dailymotion\");
\tvar vimeo = \$(this).children('img').attr(\"vimeo\");
\tvar autre = \$(this).children('img').attr(\"autre\");

\t// Add data to lighbox
\tif (src != 0) {
\t\t\$img.attr('src', src);
\t} else if (dailymotion != 0) {
\t\t\$img.attr('src', dailymotion);
\t} else if (vimeo != 0) {
\t\t\$img.attr('src', vimeo);
\t} else if (autre != 0) {
\t\t\$img.attr('src', autre);
\t}

\t\$caption.text(cap);
\t\$btn.attr('href', idvideo);

\t// \$lightbox.append('<img src=\"' + src + '\"></img><p class=\"caption\">' + caption + '</p>');

\t// Show lightbox

\t\$lightbox.show();

\t\$(document).on('keydown', function(e) {
\t\tif (e.keyCode === 27) { // ESC
\t\t\t\$(\$lightbox).hide();
\t\t}
\t});

\t\$lightbox.click(function() {
\t\t\$lightbox.hide();
\t});
});
</script>
<script type=\"text/javascript\">
    google_ad_client = \"ca-pub-4226977241428006\";
    google_ad_slot = \"3115380575\";
    google_ad_width = 728;
    google_ad_height = 90;
</script>
<!-- Pub Google -->
<script type=\"text/javascript\"
src=\"//pagead2.googlesyndication.com/pagead/show_ads.js\">
</script>
\t<script type=\"text/javascript\">
    google_ad_client = \"ca-pub-4226977241428006\";
    google_ad_slot = \"6978421771\";
    google_ad_width = 728;
    google_ad_height = 90;
</script>
<!-- Block1 -->
<script type=\"text/javascript\"
src=\"//pagead2.googlesyndication.com/pagead/show_ads.js\">
</script>
\t<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- pub -->
<ins class=\"adsbygoogle\"
     style=\"display:block\"
     data-ad-client=\"ca-pub-4226977241428006\"
     data-ad-slot=\"2067782979\"
     data-ad-format=\"auto\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
\t</footer>
";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 108,  371 => 105,  368 => 104,  351 => 103,  336 => 102,  318 => 100,  303 => 99,  301 => 98,  298 => 97,  294 => 96,  286 => 91,  276 => 83,  267 => 80,  264 => 79,  256 => 77,  249 => 76,  242 => 75,  234 => 74,  229 => 72,  225 => 71,  213 => 70,  195 => 68,  180 => 67,  178 => 66,  175 => 65,  171 => 64,  135 => 30,  126 => 27,  122 => 26,  118 => 24,  91 => 23,  63 => 21,  61 => 20,  56 => 18,  53 => 17,  49 => 16,  37 => 7,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %} {% block content %}*/
/* */
/* */
/* */
/* */
/* <!-- BEGIN RECOMMEND -->*/
/* <section id="recommend" style="background:url({{asset('img/sectionOffer/bg.jpg')}}) fixed no-repeat; background-size:cover;">*/
/* 	<div class="container">*/
/* 		<div class="header text-center">*/
/* 			<h3>Vidéo <span>recommandé</span></h3>*/
/* 			<p></p>*/
/* 		</div>*/
/* 		<div class="row m-t-50 gallery">*/
/* */
/* 			<!-- begin position -->*/
/* 			{% for item in recommend|slice(0,4) %}*/
/* 			<div class="col-md-3 col-sm-6 text-center">*/
/* 				<a href="{{path('product_show', {'id':item.id})}}#spot">*/
/* 					<div class="img">*/
/* 						{% if item.pictures|length > 0 %}*/
/* 						<img src="{{ asset(item.pictures.0.getWebPath()|imagine_filter('my_thumb_1_3')) }}" id-video="{{path('product_show', {'id': item.id })}}" alt="{{ item.title }}" class="img-responsive" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% elseif item.urlLink2|length >0 %}https://www.youtube.com/embed/{{item.urlLink2}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% elseif item.urlLink3|length >0 %}https://www.youtube.com/embed/{{item.urlLink3}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% elseif item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'>						*/
/* 						{% else %}*/
/* 						<img src="http://img.youtube.com/vi/{{item.urlLink}}/hqdefault.jpg" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}" class="img-responsive" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% elseif item.urlLink2|length >0 %}https://www.youtube.com/embed/{{item.urlLink2}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% elseif item.urlLink3|length >0 %}https://www.youtube.com/embed/{{item.urlLink3}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% elseif item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'>						{% endif %}*/
/* 					</div>*/
/* 				</a>*/
/* 				<h4>{{item.title}}</h4>*/
/* 				<p>{{item.reference|raw}}</p>*/
/* 			</div>*/
/* 			{% endfor %}*/
/* 			<!-- ./end position -->*/
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <!-- END RECOMMEND -->*/
/* */
/* */
/* <!-- BEGIN PORTFOLIO -->*/
/* <section id="portfolio">*/
/* 	<div class="container">*/
/* */
/* */
/* 		<div class="header">*/
/* 			<h3>La<br>Mediathèque</h3>*/
/* */
/* 			<div class="row">*/
/* 				<div class="col-md-6">*/
/* 					<p>Centralisation de toutes les vidéos qui ont pû être publié sur le site. </p>*/
/* 				</div>*/
/* 				<div class="col-md-6 text-right portfolio-list-action">*/
/* 					<a href="#" class="fa fa-2x fa-th-large" id="projectListLarge"></a>*/
/* 					<a href="#" class="fa fa-2x fa-th" id="projectListStandard"></a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="portfolioProject">*/
/* */
/* 			<div class="apple"></div>*/
/* */
/* 			<div class="gallery">*/
/* 				<ul class="list-unstyled row m-b-20">*/
/* 					{% for item in central|slice(0,1) %}*/
/* 					<li class="col-md-2 col-sm-3 col-xs-4 video">*/
/* 						{% if item.pictures|length >0 %}*/
/* 						<img src="{{ asset(item.pictures.0.getWebPath()|imagine_filter('my_thumb_1_3')) }}" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 						dailymotion="{% if item.urlLink2|length >0 %}http://www.dailymotion.com/embed/video/{{item.urlLink2}}{% endif %}" vimeo="{% if item.urlLink3|length >0 %}https://www.youtube.com/embed/{{item.urlLink3}}{% endif %}" autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">						*/
/* 						{% else %}*/
/* 						<img src="{% if item.urlLink|length >0 %} http://img.youtube.com/vi/{{item.urlLink}}/hqdefault.jpg {% elseif item.urlLink2|length > 0 %}http://www.dailymotion.com/thumbnail/video/{{item.urlLink2}}{% endif %} "*/
/* 								 alt="{{ item.title }}"*/
/* 								 id-video="{{path('product_show', {'id': item.id })}}"*/
/* 								 class="img-responsive"*/
/* 								 data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 										dailymotion="{% if item.urlLink2|length >0 %}http://www.dailymotion.com/embed/video/{{item.urlLink2}}{% endif %}"*/
/* 								 		vimeo="{% if item.urlLink3|length >0 %}https://www.youtube.com/embed/{{item.urlLink3}}{% endif %}"*/
/* 								 		autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">*/
/* 						{% endif %}*/
/* */
/* 						<!--<center><span>{{ item.title }}</span></center>-->*/
/* */
/* 						{% endfor %}*/
/* 					</li>*/
/* */
/* 					<li class="col-md-4 col-sm-6 col-xs-8">*/
/* 						<div class="padding-20">*/
/* 							<h4 class="title">L'article libre<span> du jour</span></h4>*/
/* 							<p>*/
/* 								Bientôt un article tout les jours, un article libre, traîtant de tout sujet divers et variés.*/
/* 							</p>*/
/* 							<a href="{{path('news_show', {'id': article.0.id })}}#spot" class="more">Lire</a>*/
/* 						</div>*/
/* 					</li>*/
/* */
/* */
/* 					{% for item in central|slice(1,16) %}*/
/* 					<li class="col-md-2 col-sm-3 col-xs-4 video">*/
/* 						{% if item.pictures|length >0 %}*/
/* 						<img src="{{ asset(item.pictures.0.getWebPath()|imagine_filter('my_thumb_1_3')) }}" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 						dailymotion="{% if item.urlLink2|length >0 %}http://www.dailymotion.com/embed/video/{{item.urlLink2}}{% endif %}" vimeo="{% if item.urlLink3|length >0 %}https://www.youtube.com/embed/{{item.urlLink3}}{% endif %}" autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">						*/
/* 						{% else %}*/
/* 						<img src="http://img.youtube.com/vi/{{item.urlLink}}/hqdefault.jpg" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}" class="img-responsive" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 						dailymotion="{% if item.urlLink2|length >0 %}//www.dailymotion.com/embed/video/{{item.urlLink}}{% endif %}" vimeo="{% if item.urlLink3|length >0 %}https://www.youtube.com/embed/{{item.urlLink3}}{% endif %}" autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">						{% endif %}*/
/* */
/* 						<!--<center><span>{{ item.title }}</span></center>-->*/
/* 					</li>*/
/* 					{% endfor %}*/
/* */
/* 				</ul>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* <footer id="sectionFooter">*/
/* 	<script>*/
/* 	// Create a lightbox*/
/* */
/* var $lightbox = $("<div class='lightbox'></div>");*/
/* var $img = $('<iframe width="560" height="315"  frameborder="0" allowfullscreen>');*/
/* var $caption = $("<h2 class='caption'></h2>");*/
/* var $center = $("<center></center>")*/
/* var $btn = $("<a class='btn btn-primary' align='center' role='button' href='' >Détail</a>");*/
/* */
/* */
/* // Add image and caption to lightbox*/
/* */
/* $lightbox*/
/* 	.append($img)*/
/* 	.append($caption)*/
/* 	.append($center);*/
/* $center*/
/* 	.append($btn);*/
/* */
/* */
/* // Add lighbox to document*/
/* */
/* $('body').append($lightbox);*/
/* */
/* */
/* $('.gallery .video').click(function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	// Get image link and description*/
/* 	var src = $(this).children('img').attr("data-image");*/
/* 	var cap = $(this).children('img').attr("alt");*/
/* 	var idvideo = $(this).children('img').attr("id-video");*/
/* 	var youtube = $(this).children('img').attr("youtube");*/
/* 	var dailymotion = $(this).children('img').attr("dailymotion");*/
/* 	var vimeo = $(this).children('img').attr("vimeo");*/
/* 	var autre = $(this).children('img').attr("autre");*/
/* */
/* 	// Add data to lighbox*/
/* 	if (src != 0) {*/
/* 		$img.attr('src', src);*/
/* 	} else if (dailymotion != 0) {*/
/* 		$img.attr('src', dailymotion);*/
/* 	} else if (vimeo != 0) {*/
/* 		$img.attr('src', vimeo);*/
/* 	} else if (autre != 0) {*/
/* 		$img.attr('src', autre);*/
/* 	}*/
/* */
/* 	$caption.text(cap);*/
/* 	$btn.attr('href', idvideo);*/
/* */
/* 	// $lightbox.append('<img src="' + src + '"></img><p class="caption">' + caption + '</p>');*/
/* */
/* 	// Show lightbox*/
/* */
/* 	$lightbox.show();*/
/* */
/* 	$(document).on('keydown', function(e) {*/
/* 		if (e.keyCode === 27) { // ESC*/
/* 			$($lightbox).hide();*/
/* 		}*/
/* 	});*/
/* */
/* 	$lightbox.click(function() {*/
/* 		$lightbox.hide();*/
/* 	});*/
/* });*/
/* </script>*/
/* <script type="text/javascript">*/
/*     google_ad_client = "ca-pub-4226977241428006";*/
/*     google_ad_slot = "3115380575";*/
/*     google_ad_width = 728;*/
/*     google_ad_height = 90;*/
/* </script>*/
/* <!-- Pub Google -->*/
/* <script type="text/javascript"*/
/* src="//pagead2.googlesyndication.com/pagead/show_ads.js">*/
/* </script>*/
/* 	<script type="text/javascript">*/
/*     google_ad_client = "ca-pub-4226977241428006";*/
/*     google_ad_slot = "6978421771";*/
/*     google_ad_width = 728;*/
/*     google_ad_height = 90;*/
/* </script>*/
/* <!-- Block1 -->*/
/* <script type="text/javascript"*/
/* src="//pagead2.googlesyndication.com/pagead/show_ads.js">*/
/* </script>*/
/* 	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>*/
/* <!-- pub -->*/
/* <ins class="adsbygoogle"*/
/*      style="display:block"*/
/*      data-ad-client="ca-pub-4226977241428006"*/
/*      data-ad-slot="2067782979"*/
/*      data-ad-format="auto"></ins>*/
/* <script>*/
/* (adsbygoogle = window.adsbygoogle || []).push({});*/
/* </script>*/
/* 	</footer>*/
/* {% endblock %}*/

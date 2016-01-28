<?php

/* PointWebProductBundle:Default:index.html.twig */
class __TwigTemplate_0ee5ae00db9dedafdc3c73b094d1f41a5ecc23aacd54d08ceab184bbc24dcfb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebProductBundle:Default:index.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "\t\t\t\t\t<li class=\"col-md-2 col-sm-3 col-xs-4 video\">
\t\t\t\t\t\t";
            // line 31
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "pictures", array())) > 0)) {
                // line 32
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "pictures", array()), 0, array()), "getWebPath", array(), "method"), "my_thumb_1_3")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "#spot\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\tdailymotion=\"";
                // line 33
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "http://www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                }
                echo "\" vimeo=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://player.vimeo.com/video/";
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
                // line 35
                echo "\t\t\t\t\t\t<img src=\"http://img.youtube.com/vi/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                echo "/hqdefault.jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "#spot\" class=\"img-responsive\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\tdailymotion=\"";
                // line 36
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "http://www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                }
                echo "\" vimeo=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://player.vimeo.com/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                }
                echo "\" autre=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                }
                echo "\">\t\t\t\t\t\t";
            }
            // line 37
            echo "
\t\t\t\t\t\t<!--<center><span>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</span></center>-->

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"col-md-4 col-sm-6 col-xs-8\">
\t\t\t\t\t\t<div class=\"padding-20\">
\t\t\t\t\t\t\t<h4 class=\"title\">L'article libre<span> du jour</span></h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tBientôt un article tout les jours, un article libre, traîtant de tout sujet divers et variés.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), 0, array()), "id", array()))), "html", null, true);
        echo "#spot\" class=\"more\">Lire</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>


\t\t\t\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["central"]) ? $context["central"] : $this->getContext($context, "central")), 1, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "\t\t\t\t\t<li class=\"col-md-2 col-sm-3 col-xs-4 video\">
\t\t\t\t\t\t";
            // line 56
            if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "pictures", array())) > 0)) {
                // line 57
                echo "\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "pictures", array()), 0, array()), "getWebPath", array(), "method"), "my_thumb_1_3")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "#spot\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\tdailymotion=\"";
                // line 58
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "http://www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array()), "html", null, true);
                }
                echo "\" vimeo=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://player.vimeo.com/video/";
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
                // line 60
                echo "\t\t\t\t\t\t<img src=\"http://img.youtube.com/vi/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                echo "/hqdefault.jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "\" id-video=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "#spot\" class=\"img-responsive\" data-image='";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                    echo "?list=UUaQm6lX79kQ25DJGAn0cFwg";
                }
                echo "'
\t\t\t\t\t\tdailymotion=\"";
                // line 61
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink2", array())) > 0)) {
                    echo "//www.dailymotion.com/embed/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink", array()), "html", null, true);
                }
                echo "\" vimeo=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array())) > 0)) {
                    echo "https://player.vimeo.com/video/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink3", array()), "html", null, true);
                }
                echo "\" autre=\"";
                if ((twig_length_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array())) > 0)) {
                    echo "https://www.youtube.com/embed/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "urlLink4", array()), "html", null, true);
                }
                echo "\">\t\t\t\t\t\t";
            }
            // line 62
            echo "
\t\t\t\t\t\t<!--<center><span>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</span></center>-->
\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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


\$('.gallery li').click(function(e) {
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

";
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 66,  240 => 63,  237 => 62,  220 => 61,  205 => 60,  187 => 58,  172 => 57,  170 => 56,  167 => 55,  163 => 54,  155 => 49,  145 => 41,  136 => 38,  133 => 37,  116 => 36,  101 => 35,  83 => 33,  68 => 32,  66 => 31,  63 => 30,  59 => 29,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
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
/* 						<img src="{{ asset(item.pictures.0.getWebPath()|imagine_filter('my_thumb_1_3')) }}" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}#spot" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 						dailymotion="{% if item.urlLink2|length >0 %}http://www.dailymotion.com/embed/video/{{item.urlLink2}}{% endif %}" vimeo="{% if item.urlLink3|length >0 %}https://player.vimeo.com/video/{{item.urlLink3}}{% endif %}" autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">						*/
/* 						{% else %}*/
/* 						<img src="http://img.youtube.com/vi/{{item.urlLink}}/hqdefault.jpg" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}#spot" class="img-responsive" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 						dailymotion="{% if item.urlLink2|length >0 %}http://www.dailymotion.com/embed/video/{{item.urlLink2}}{% endif %}" vimeo="{% if item.urlLink3|length >0 %}https://player.vimeo.com/video/{{item.urlLink3}}{% endif %}" autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">						{% endif %}*/
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
/* 						<img src="{{ asset(item.pictures.0.getWebPath()|imagine_filter('my_thumb_1_3')) }}" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}#spot" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 						dailymotion="{% if item.urlLink2|length >0 %}http://www.dailymotion.com/embed/video/{{item.urlLink2}}{% endif %}" vimeo="{% if item.urlLink3|length >0 %}https://player.vimeo.com/video/{{item.urlLink3}}{% endif %}" autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">						*/
/* 						{% else %}*/
/* 						<img src="http://img.youtube.com/vi/{{item.urlLink}}/hqdefault.jpg" alt="{{ item.title }}" id-video="{{path('product_show', {'id': item.id })}}#spot" class="img-responsive" data-image='{% if item.urlLink|length >0 %}https://www.youtube.com/embed/{{item.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg{% endif %}'*/
/* 						dailymotion="{% if item.urlLink2|length >0 %}//www.dailymotion.com/embed/video/{{item.urlLink}}{% endif %}" vimeo="{% if item.urlLink3|length >0 %}https://player.vimeo.com/video/{{item.urlLink3}}{% endif %}" autre="{% if item.urlLink4|length >0 %}https://www.youtube.com/embed/{{item.urlLink4}}{% endif %}">						{% endif %}*/
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
/* $('.gallery li').click(function(e) {*/
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
/* */
/* {% endblock %}*/
/* */

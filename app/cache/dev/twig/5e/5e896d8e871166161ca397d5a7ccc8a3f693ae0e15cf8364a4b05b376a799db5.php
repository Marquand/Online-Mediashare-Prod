<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_33e21b564d6178f3c5725779d2d39eb416256c39880117999b6729910d397820 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\"/>
        <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "title"), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "description"), "html", null, true);
        echo "\"/>
        <meta name=\"keywords\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "keywords"), "html", null, true);
        echo "\"/>
        <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">

    <!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ -->
    <!-- <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> -->
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!--<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\"/>-->
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.anti-ie7.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jserror.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/antispam.js"), "html", null, true);
        echo "\"></script>



    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Magnific-Popup-master/dist/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Magnific-Popup-master/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>



        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <!-- BEGIN PACE PLUGIN FILES -->
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pace/themes/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- END PACE PLUGIN FILES -->
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,400italic,700,500italic,500,700italic,300|Roboto+Condensed:400italic,700italic,400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
    <!-- Theme color -->
    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/themes/turquoise.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-color\">

    <!-- BEGIN bxslider -->
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bxslider/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- END bxslider -->    
    
    <!-- JavaScript at bottom except for Modernizr -->
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    

    </head>
    <body>
    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 78
        echo "     
        
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 139
        echo "    </body>
</html>";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('menu', $context, $blocks);
        // line 62
        echo "
            <noscript>
                <dl id=\"jserror\">
                    <dt>Attention</dt>
                    <dd>Si vous souhaitez utiliser pleinement toutes les capacités de ce site Internet vous devez activer javascript dans votre \t\t
                    navigateur</dd>
                </dl>
            </noscript>
            ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "            
            ";
        // line 74
        $this->displayBlock('footer', $context, $blocks);
        // line 77
        echo "        ";
    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        // line 56
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_header.html.twig", "PointWebAppBundle::base.html.twig", 56)->display($context);
        // line 57
        echo "            ";
    }

    // line 59
    public function block_menu($context, array $blocks = array())
    {
        // line 60
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
            ";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "
            ";
    }

    // line 74
    public function block_footer($context, array $blocks = array())
    {
        // line 75
        echo "               ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:footer"));
        echo "
            ";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.10.4/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fancybox/source/jquery.fancybox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.scrollTo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.localscroll-1.2.7-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- BEGIN MAPS PLUGIN FILES -->
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true')}}\"></script>
<script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/gmaps/gmaps.js"), "html", null, true);
        echo "\"></script>
</script>
<!-- END MAPS PLUGIN FILES -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS -->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    (function(\$) { \"use strict\";
        Layout.init();   
    })(jQuery);
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->


<!-- BEGIN bxslider -->
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bxslider/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
<script>
(function(\$) { \"use strict\";
  \$('.bx-offer').bxSlider({
    slideWidth: 250,
    pager : false,
    minSlides: 1,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 10
  });
  \$('.bx-persons').bxSlider({
    slideWidth: 200,
    pager : false,
    minSlides: 1,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 10
  });
})(jQuery);
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62856817-1', 'auto');
  ga('send', 'pageview');

</script>
        ";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 107,  265 => 97,  257 => 92,  250 => 88,  246 => 87,  242 => 86,  238 => 85,  234 => 84,  230 => 83,  226 => 82,  223 => 81,  220 => 80,  213 => 75,  210 => 74,  205 => 71,  202 => 70,  195 => 60,  192 => 59,  188 => 57,  185 => 56,  182 => 55,  178 => 77,  176 => 74,  173 => 73,  171 => 70,  161 => 62,  159 => 59,  156 => 58,  153 => 55,  150 => 54,  145 => 139,  143 => 80,  139 => 78,  137 => 54,  129 => 49,  125 => 48,  118 => 44,  112 => 41,  106 => 38,  98 => 33,  94 => 32,  88 => 29,  81 => 25,  77 => 24,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <title>{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))|getRef('title') }}</title>*/
/*         <meta name="description" content="{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))|getRef('description') }}"/>*/
/*         <meta name="keywords" content="{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))|getRef('keywords') }}"/>*/
/*         <meta name="HandheldFriendly" content="True">*/
/*     <meta name="MobileOptimized" content="320">*/
/* */
/*     <!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ -->*/
/*     <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->*/
/*     <meta content="width=device-width, initial-scale=1" name="viewport">*/
/*     <!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>-->*/
/*         <script src="{{ asset('jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery.anti-ie7.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>*/
/*         <script src="{{ asset('js/jserror.js') }}"></script>*/
/*         <script src="{{ asset('js/antispam.js') }}"></script>*/
/* */
/* */
/* */
/*     <link href="{{ asset('Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">*/
/*     <script src="{{ asset('Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>*/
/* */
/* */
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* */
/*     <!-- BEGIN PACE PLUGIN FILES -->*/
/*     <script src="{{asset('plugins/pace/pace.min.js') }}" type="text/javascript"></script>*/
/*     <link href="{{asset('plugins/pace/themes/pace-theme-flash.css') }}" rel="stylesheet" type="text/css">*/
/*     <!-- END PACE PLUGIN FILES -->*/
/*     */
/*     <!-- BEGIN GLOBAL MANDATORY STYLES -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,400italic,700,500italic,500,700italic,300|Roboto+Condensed:400italic,700italic,400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/*     <link href="{{asset('css/style.css') }}" rel="stylesheet" type="text/css">*/
/*     */
/*     <!-- Theme color -->*/
/*     <link href="{{asset('css/themes/turquoise.css') }}" rel="stylesheet" id="style-color">*/
/* */
/*     <!-- BEGIN bxslider -->*/
/*     <link href="{{asset('plugins/bxslider/jquery.bxslider.css') }}" rel="stylesheet">*/
/*     <!-- END bxslider -->    */
/*     */
/*     <!-- JavaScript at bottom except for Modernizr -->*/
/*     <script src="{{asset('plugins/modernizr.custom.js') }}"></script>*/
/* <link href="{{asset('css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" type="text/css">*/
/*     */
/* */
/*     </head>*/
/*     <body>*/
/*     {% block body %}*/
/*             {% block header %}*/
/*                 {% include 'PointWebAppBundle::_header.html.twig' %}*/
/*             {% endblock %}*/
/* */
/*             {% block menu %}*/
/*                 {{ render(controller('PointWebAppBundle:Default:menu')) }}*/
/*             {% endblock %}*/
/* */
/*             <noscript>*/
/*                 <dl id="jserror">*/
/*                     <dt>Attention</dt>*/
/*                     <dd>Si vous souhaitez utiliser pleinement toutes les capacités de ce site Internet vous devez activer javascript dans votre 		*/
/*                     navigateur</dd>*/
/*                 </dl>*/
/*             </noscript>*/
/*             {% block content %}*/
/* */
/*             {% endblock %}*/
/*             */
/*             {% block footer %}*/
/*                {{ render(controller('PointWebAppBundle:Default:footer')) }}*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*      */
/*         */
/*         {% block javascripts %}*/
/* */
/* <script src="{{asset('plugins/jquery-1.10.2.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('plugins/jquery-ui-1.10.4/js/jquery-ui-1.10.4.custom.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('plugins/fancybox/source/jquery.fancybox.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('plugins/jquery.scrollTo.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('plugins/jquery.localscroll-1.2.7-min.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('plugins/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>*/
/* */
/* <!-- BEGIN MAPS PLUGIN FILES -->*/
/* <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true')}}"></script>*/
/* <script type="text/javascript" src="{{asset('plugins/gmaps/gmaps.js')}}"></script>*/
/* </script>*/
/* <!-- END MAPS PLUGIN FILES -->*/
/* */
/* <!-- BEGIN PAGE LEVEL JAVASCRIPTS -->*/
/* <script src="{{asset('js/layout.js')}}" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/*     (function($) { "use strict";*/
/*         Layout.init();   */
/*     })(jQuery);*/
/* </script>*/
/* <!-- END PAGE LEVEL JAVASCRIPTS -->*/
/* */
/* */
/* <!-- BEGIN bxslider -->*/
/* <script type="text/javascript" src="{{asset('plugins/bxslider/jquery.bxslider.js')}}"></script>*/
/* <script>*/
/* (function($) { "use strict";*/
/*   $('.bx-offer').bxSlider({*/
/*     slideWidth: 250,*/
/*     pager : false,*/
/*     minSlides: 1,*/
/*     maxSlides: 4,*/
/*     moveSlides: 1,*/
/*     slideMargin: 10*/
/*   });*/
/*   $('.bx-persons').bxSlider({*/
/*     slideWidth: 200,*/
/*     pager : false,*/
/*     minSlides: 1,*/
/*     maxSlides: 4,*/
/*     moveSlides: 1,*/
/*     slideMargin: 10*/
/*   });*/
/* })(jQuery);*/
/* </script>*/
/* <script>*/
/*   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*   ga('create', 'UA-62856817-1', 'auto');*/
/*   ga('send', 'pageview');*/
/* */
/* </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/

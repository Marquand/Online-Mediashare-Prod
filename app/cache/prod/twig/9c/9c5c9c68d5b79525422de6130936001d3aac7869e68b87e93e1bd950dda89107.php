<?php

/* PointWebAppBundle::base.html.twig */
class __TwigTemplate_dc7f2ede5f3d2346cacf11ced3bb5fbb64e73fac4b034240a48f8832a0826ee3 extends Twig_Template
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
<html lang=\"fr\" hreflang=\"fr\">
  
    <head>
        <meta charset=\"UTF-8\"/>
        <title>Mediashare - Actualité en vidéo</title>
        <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "description"), "html", null, true);
        echo "\"/>
        <meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->getRef($this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method")), "keywords"), "html", null, true);
        echo "\"/>
        <meta name=\"HandheldFriendly\" content=\"True\">
    <meta name=\"MobileOptimized\" content=\"320\">
<meta name=\"google-site-verification\" content=\"eCQHNCXu6yslpuStRG1Ktzd6WoW2hWv35P3GoUTj3gQ\" />
      
    <!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ -->
    <!-- <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> -->
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!--<meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\"/>-->
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
<!--        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script> -->
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.anti-ie7.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.js"), "html", null, true);
        echo "\"></script>
<!--        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jserror.js"), "html", null, true);
        echo "\"></script> -->
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/antispam.js"), "html", null, true);
        echo "\"></script>



        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Magnific-Popup-master/dist/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Magnific-Popup-master/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>



        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

    <!-- BEGIN PACE PLUGIN FILES -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/pace/themes/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- END PACE PLUGIN FILES -->
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,400italic,700,500italic,500,700italic,300|Roboto+Condensed:400italic,700italic,400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    
    <!-- Theme color -->
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/themes/turquoise.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style-color\">

    <!-- BEGIN bxslider -->
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bxslider/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- END bxslider -->    
    
    <!-- JavaScript at bottom except for Modernizr -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    

    </head>
    <body>
    ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "     
        
        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "    </body>
</html>";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        // line 57
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('menu', $context, $blocks);
        // line 64
        echo "
            <noscript>
                <dl id=\"jserror\">
                    <dt>Attention</dt>
                    <dd>Si vous souhaitez utiliser pleinement toutes les capacités de ce site Internet vous devez activer javascript dans votre \t\t
                    navigateur</dd>
                </dl>
            </noscript>
            ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "            
            ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 79
        echo "        ";
    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        // line 58
        echo "                ";
        $this->loadTemplate("PointWebAppBundle::_header.html.twig", "PointWebAppBundle::base.html.twig", 58)->display($context);
        // line 59
        echo "            ";
    }

    // line 61
    public function block_menu($context, array $blocks = array())
    {
        // line 62
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:menu"));
        echo "
            ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
        echo "
            ";
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "               ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PointWebAppBundle:Default:footer"));
        echo "
            ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "
<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-1.10.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery-ui-1.10.4/js/jquery-ui-1.10.4.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fancybox/source/jquery.fancybox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.scrollTo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.localscroll-1.2.7-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jquery.parallax-1.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!-- BEGIN MAPS PLUGIN FILES -->
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true')}}\"></script>
<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/gmaps/gmaps.js"), "html", null, true);
        echo "\"></script>
</script>
<!-- END MAPS PLUGIN FILES -->

<!-- BEGIN PAGE LEVEL JAVASCRIPTS -->
<script src=\"";
        // line 99
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
        // line 109
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
        return array (  277 => 109,  264 => 99,  256 => 94,  249 => 90,  245 => 89,  241 => 88,  237 => 87,  233 => 86,  229 => 85,  225 => 84,  222 => 83,  219 => 82,  212 => 77,  209 => 76,  204 => 73,  201 => 72,  194 => 62,  191 => 61,  187 => 59,  184 => 58,  181 => 57,  177 => 79,  175 => 76,  172 => 75,  170 => 72,  160 => 64,  158 => 61,  155 => 60,  152 => 57,  149 => 56,  144 => 141,  142 => 82,  138 => 80,  136 => 56,  128 => 51,  124 => 50,  117 => 46,  111 => 43,  105 => 40,  97 => 35,  93 => 34,  87 => 31,  80 => 27,  76 => 26,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  49 => 17,  37 => 8,  33 => 7,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr" hreflang="fr">*/
/*   */
/*     <head>*/
/*         <meta charset="UTF-8"/>*/
/*         <title>Mediashare - Actualité en vidéo</title>*/
/*         <meta name="description" content="{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))|getRef('description') }}"/>*/
/*         <meta name="keywords" content="{{ path(app.request.attributes.get('_route'), app.request.attributes.get('_route_params'))|getRef('keywords') }}"/>*/
/*         <meta name="HandheldFriendly" content="True">*/
/*     <meta name="MobileOptimized" content="320">*/
/* <meta name="google-site-verification" content="eCQHNCXu6yslpuStRG1Ktzd6WoW2hWv35P3GoUTj3gQ" />*/
/*       */
/*     <!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ -->*/
/*     <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->*/
/*     <meta content="width=device-width, initial-scale=1" name="viewport">*/
/*     <!--<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>-->*/
/*         <script src="{{ asset('jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/* <!--        <script src="{{ asset('js/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script> -->*/
/*         <script src="{{ asset('js/jquery.anti-ie7.js') }}"></script>*/
/*         <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}"></script>*/
/* <!--        <script src="{{ asset('js/jserror.js') }}"></script> -->*/
/*         <script src="{{ asset('js/antispam.js') }}"></script>*/
/* */
/* */
/* */
/*         <link href="{{ asset('Magnific-Popup-master/dist/magnific-popup.css') }}" rel="stylesheet">*/
/*         <script src="{{ asset('Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>*/
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

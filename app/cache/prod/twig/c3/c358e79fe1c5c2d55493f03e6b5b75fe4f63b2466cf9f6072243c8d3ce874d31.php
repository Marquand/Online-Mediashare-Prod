<?php

/* PointWebAdminBundle::base.html.twig */
class __TwigTemplate_57e24f20f6ea315b3da89d8fffde72c5657628fe2f85fd3bc192fffb28fd8007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body_head_login' => array($this, 'block_body_head_login'),
            'content_full' => array($this, 'block_content_full'),
            'body_content' => array($this, 'block_body_content'),
            'content_left' => array($this, 'block_content_left'),
            'content_right' => array($this, 'block_content_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
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
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/external/jquery/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tinymce/js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-common-libraries.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-functions.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-thumbsgeneral.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-thumbsstrip.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-touchthumbs.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-panelsbase.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-strippanel.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-gridpanel.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-thumbsgrid.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-tiles.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-tiledesign.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-avia.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-slider.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-sliderassets.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-touchslider.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-zoomslider.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-video.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-gallery.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-lightbox.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-carousel.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/js/ug-api.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript'
            src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/themes/grid/ug-theme-grid.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-material-datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ripples.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.rowsorter.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("okfocus-okzoom/src/okzoom.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin.js"), "html", null, true);
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("font-awesome-4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"
          media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel='stylesheet' href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("unitegallery-master/source/unitegallery/css/unite-gallery.css"), "html", null, true);
        echo "\"
          type='text/css' media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-material-datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/material.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/material-fullpalette.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ripples.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/roboto.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>
<body>
";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "</body>
<footer>
    ";
        // line 118
        $this->displayBlock('footer', $context, $blocks);
        // line 119
        echo "</footer>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "ESPACE D'ADMINISTRATION";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "    <div class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                    data-target=\".navbar-responsive-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("point_web_admin_homepage");
        echo "\">
                <!-- <img class=\"logo\" src=\"\" alt=\"logo\"/> -->
            </a>
        </div>
        <div class=\"navbar-collapse collapse navbar-responsive-collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 87
        $this->loadTemplate("PointWebAdminBundle::_menu_admin.html.twig", "PointWebAdminBundle::base.html.twig", 87)->display($context);
        // line 88
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    ";
        // line 91
        $this->displayBlock('body_head_login', $context, $blocks);
        // line 97
        echo "                </li>
            </ul>
        </div>
    </div>
    ";
        // line 101
        $this->displayBlock('content_full', $context, $blocks);
    }

    // line 91
    public function block_body_head_login($context, array $blocks = array())
    {
        // line 92
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"
                           class=\"mdi-action-exit-to-app\"
                           data-toggle=\"tooltip\"
                           data-placement=\"bottom\" title=\"Se déconnecter\"></a>
                    ";
    }

    // line 101
    public function block_content_full($context, array $blocks = array())
    {
        // line 102
        echo "        <div class=\"row\">
            <div class=\"col-lg-1\"></div>
            <div class=\"col-lg-10 well page active\">
                ";
        // line 105
        $this->displayBlock('body_content', $context, $blocks);
        // line 109
        echo "</div>

            <div class=\"col-lg-1\"></div>
        </div>
    ";
    }

    // line 105
    public function block_body_content($context, array $blocks = array())
    {
        // line 106
        echo "                    ";
        $this->displayBlock('content_left', $context, $blocks);
        // line 108
        echo "                    ";
        $this->displayBlock('content_right', $context, $blocks);
        // line 109
        echo "                ";
    }

    // line 106
    public function block_content_left($context, array $blocks = array())
    {
        // line 107
        echo "                    ";
    }

    // line 108
    public function block_content_right($context, array $blocks = array())
    {
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 118
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 118,  355 => 115,  350 => 108,  346 => 107,  343 => 106,  339 => 109,  336 => 108,  333 => 106,  330 => 105,  322 => 109,  320 => 105,  315 => 102,  312 => 101,  302 => 92,  299 => 91,  295 => 101,  289 => 97,  287 => 91,  282 => 88,  280 => 87,  271 => 81,  261 => 73,  258 => 72,  252 => 5,  246 => 119,  244 => 118,  240 => 116,  238 => 115,  236 => 72,  230 => 69,  226 => 68,  222 => 67,  218 => 66,  214 => 65,  210 => 64,  206 => 63,  202 => 62,  197 => 60,  193 => 59,  188 => 57,  184 => 56,  180 => 55,  176 => 54,  172 => 53,  168 => 52,  164 => 51,  160 => 50,  156 => 49,  152 => 48,  147 => 46,  143 => 45,  138 => 43,  133 => 41,  128 => 39,  124 => 38,  119 => 36,  114 => 34,  109 => 32,  104 => 30,  100 => 29,  95 => 27,  91 => 26,  86 => 24,  81 => 22,  76 => 20,  71 => 18,  66 => 16,  61 => 14,  56 => 12,  51 => 10,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}ESPACE D'ADMINISTRATION{% endblock %}</title>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/external/jquery/jquery.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('jquery-ui-1.11.4.custom/jquery-ui.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-common-libraries.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-functions.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-thumbsgeneral.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-thumbsstrip.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-touchthumbs.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-panelsbase.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-strippanel.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-gridpanel.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-thumbsgrid.js') }}"></script>*/
/*     <script type='text/javascript' src="{{ asset('unitegallery-master/source/unitegallery/js/ug-tiles.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-tiledesign.js') }}"></script>*/
/*     <script type='text/javascript' src="{{ asset('unitegallery-master/source/unitegallery/js/ug-avia.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-slider.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-sliderassets.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-touchslider.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-zoomslider.js') }}"></script>*/
/*     <script type='text/javascript' src="{{ asset('unitegallery-master/source/unitegallery/js/ug-video.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-gallery.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-lightbox.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/js/ug-carousel.js') }}"></script>*/
/*     <script type='text/javascript' src="{{ asset('unitegallery-master/source/unitegallery/js/ug-api.js') }}"></script>*/
/*     <script type='text/javascript'*/
/*             src="{{ asset('unitegallery-master/source/unitegallery/themes/grid/ug-theme-grid.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/material.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/ripples.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery.rowsorter.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('okfocus-okzoom/src/okzoom.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>*/
/*     <link rel="stylesheet" href="{{ asset('font-awesome-4.3.0/css/font-awesome.min.css') }}" type="text/css"*/
/*           media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('jquery-ui-1.11.4.custom/jquery-ui.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel='stylesheet' href="{{ asset('unitegallery-master/source/unitegallery/css/unite-gallery.css') }}"*/
/*           type='text/css' media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/material.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/material-fullpalette.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/ripples.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/roboto.min.css') }}" type="text/css" media="all"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/admin.css') }}" type="text/css" media="all"/>*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/* </head>*/
/* <body>*/
/* {% block body %}*/
/*     <div class="navbar navbar-default">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse"*/
/*                     data-target=".navbar-responsive-collapse">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path("point_web_admin_homepage") }}">*/
/*                 <!-- <img class="logo" src="" alt="logo"/> -->*/
/*             </a>*/
/*         </div>*/
/*         <div class="navbar-collapse collapse navbar-responsive-collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 {% include 'PointWebAdminBundle::_menu_admin.html.twig' %}*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li>*/
/*                     {% block body_head_login %}*/
/*                         <a href="{{ path("fos_user_security_logout") }}"*/
/*                            class="mdi-action-exit-to-app"*/
/*                            data-toggle="tooltip"*/
/*                            data-placement="bottom" title="Se déconnecter"></a>*/
/*                     {% endblock %}*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     {% block content_full %}*/
/*         <div class="row">*/
/*             <div class="col-lg-1"></div>*/
/*             <div class="col-lg-10 well page active">*/
/*                 {% block body_content %}*/
/*                     {% block content_left %}*/
/*                     {% endblock %}*/
/*                     {% block content_right %}{% endblock %}*/
/*                 {% endblock %}</div>*/
/* */
/*             <div class="col-lg-1"></div>*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* <footer>*/
/*     {% block footer %}{% endblock %}*/
/* </footer>*/
/* </html>*/
/* */

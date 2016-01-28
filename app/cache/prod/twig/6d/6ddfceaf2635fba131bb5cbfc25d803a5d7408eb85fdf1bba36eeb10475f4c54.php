<?php

/* PointWebAppBundle::_header.html.twig */
class __TwigTemplate_362eec5da192ec0c6e705291218fa3f0b72d07eafe63e9959eecd939c992a736 extends Twig_Template
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
<!-- BEGIN NAVBAR -->
<nav class=\"navbar navbar-default-top navbar-fixed-top header-nav\" role=\"navigation\">
  <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"sr-only\">MENU</span>
          <span class=\"glyphicon glyphicon-align-justify\"></span>
        </button>
        <div class=\"topbar\">Mediashare site d'actualité en vidéo.</div>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li class=\"active\"><a href=\"http://mediashare.fr/web/#sectionLogo\">Accueil</a></li>
          <li><a href=\"http://mediashare.fr/web/#recommend\">Recommandation</a></li>
          <li><a href=\"http://mediashare.fr/web/#portfolio\">Mediathèque</a></li>
          <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("point_web_app_contact");
        echo "\">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- END NAVBAR -->";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle::_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 17,  19 => 1,);
    }
}
/*     */
/* <!-- BEGIN NAVBAR -->*/
/* <nav class="navbar navbar-default-top navbar-fixed-top header-nav" role="navigation">*/
/*   <div class="container">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*           <span class="sr-only">MENU</span>*/
/*           <span class="glyphicon glyphicon-align-justify"></span>*/
/*         </button>*/
/*         <div class="topbar">Mediashare site d'actualité en vidéo.</div>*/
/*       </div>*/
/*       <div class="navbar-collapse collapse">*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*           <li class="active"><a href="http://mediashare.fr/web/#sectionLogo">Accueil</a></li>*/
/*           <li><a href="http://mediashare.fr/web/#recommend">Recommandation</a></li>*/
/*           <li><a href="http://mediashare.fr/web/#portfolio">Mediathèque</a></li>*/
/*           <li><a href="{{ path('point_web_app_contact') }}">Contact</a></li>*/
/*         </ul>*/
/*       </div><!--/.nav-collapse -->*/
/*     </div>*/
/* </nav>*/
/* <!-- END NAVBAR -->*/

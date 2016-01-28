<?php

/* PointWebProductBundle:Default:show.html.twig */
class __TwigTemplate_23f052a8203cfba787c8b76654c40f153235f3552fd48c1b1b9da5ce28e374f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebProductBundle:Default:show.html.twig", 1);
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
<div id=\"spot\" class=\"videodetail\">
  <!-- overlay -->
  <div class=\"overlayz\"></div>
  <!-- lightbulb -->
  <div class=\"togglelight\" title=\"click to toggle the lights mode\">
    <i class=\"fa fa-lightbulb-o\"></i>
  </div>

  <!-- video -->
";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink", array())) > 0)) {
            // line 13
            echo "  <iframe style=\"margin-top:3%\" src=\"https://www.youtube.com/embed/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink", array()), "html", null, true);
            echo "?list=UUaQm6lX79kQ25DJGAn0cFwg\" frameborder=\"0\" allowfullscreen></iframe>
";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 14
(isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink2", array())) > 0)) {
            // line 15
            echo "    <iframe style=\"margin-top:3%\" src=\"http://www.dailymotion.com/embed/video/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink2", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 16
(isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink3", array())) > 0)) {
            // line 17
            echo "    <iframe style=\"margin-top:3%\" src=\"https://player.vimeo.com/video/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink3", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 18
(isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink4", array())) > 0)) {
            // line 19
            echo "    <iframe style=\"margin-top:3%\" src=\"https://www.youtube.com/embed/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "urlLink4", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
";
        }
        // line 21
        echo "  <center>
    <div style=\"max-width:75%;min-width:50%;margin-top:5%;\" class=\"info\">
      <h1 style=\"margin-top:0px;\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "title", array()), "html", null, true);
        echo "</h1> ";
        echo $this->getAttribute((isset($context["detail"]) ? $context["detail"] : $this->getContext($context, "detail")), "description", array());
        echo "

      <hr class=\"clear\">
    </div>
  </center>

</div>
<script>
  /* show/hide overlay & toggle style of button */
  \$('.togglelight').click(function() {
    \$(this).toggleClass('lightsoff');
    \$('.overlayz').fadeToggle(400);
  });

  /* set video volume to 25% */
  \$('video')[0].volume = 0.15;

  /* 
   * tested with:
   * chrome 31 and Firefox 23 @ Win 7
   *
   */
</script>

";
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  71 => 21,  65 => 19,  63 => 18,  58 => 17,  56 => 16,  51 => 15,  49 => 14,  44 => 13,  42 => 12,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %} {% block content %}*/
/* */
/* <div id="spot" class="videodetail">*/
/*   <!-- overlay -->*/
/*   <div class="overlayz"></div>*/
/*   <!-- lightbulb -->*/
/*   <div class="togglelight" title="click to toggle the lights mode">*/
/*     <i class="fa fa-lightbulb-o"></i>*/
/*   </div>*/
/* */
/*   <!-- video -->*/
/* {% if detail.urlLink|length > 0  %}*/
/*   <iframe style="margin-top:3%" src="https://www.youtube.com/embed/{{detail.urlLink}}?list=UUaQm6lX79kQ25DJGAn0cFwg" frameborder="0" allowfullscreen></iframe>*/
/* {% elseif detail.urlLink2|length > 0 %}*/
/*     <iframe style="margin-top:3%" src="http://www.dailymotion.com/embed/video/{{detail.urlLink2}}" frameborder="0" allowfullscreen></iframe>*/
/* {% elseif detail.urlLink3|length > 0 %}*/
/*     <iframe style="margin-top:3%" src="https://player.vimeo.com/video/{{detail.urlLink3}}" frameborder="0" allowfullscreen></iframe>*/
/* {% elseif detail.urlLink4|length > 0 %}*/
/*     <iframe style="margin-top:3%" src="https://www.youtube.com/embed/{{detail.urlLink4}}" frameborder="0" allowfullscreen></iframe>*/
/* {% endif %}*/
/*   <center>*/
/*     <div style="max-width:75%;min-width:50%;margin-top:5%;" class="info">*/
/*       <h1 style="margin-top:0px;">{{detail.title}}</h1> {{detail.description|raw}}*/
/* */
/*       <hr class="clear">*/
/*     </div>*/
/*   </center>*/
/* */
/* </div>*/
/* <script>*/
/*   /* show/hide overlay & toggle style of button *//* */
/*   $('.togglelight').click(function() {*/
/*     $(this).toggleClass('lightsoff');*/
/*     $('.overlayz').fadeToggle(400);*/
/*   });*/
/* */
/*   /* set video volume to 25% *//* */
/*   $('video')[0].volume = 0.15;*/
/* */
/*   /* */
/*    * tested with:*/
/*    * chrome 31 and Firefox 23 @ Win 7*/
/*    **/
/*    *//* */
/* </script>*/
/* */
/* {% endblock %}*/

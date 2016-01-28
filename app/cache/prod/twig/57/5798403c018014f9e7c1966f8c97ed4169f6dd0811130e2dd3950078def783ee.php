<?php

/* PointWebNewsBundle:Default:show.html.twig */
class __TwigTemplate_432c9ca81a5ba4367c28b6d8cf388424607b0a42b7904e6c22c6a0f26dc8c3e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebNewsBundle:Default:show.html.twig", 1);
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
        echo "<div id=\"spot\" class=\"videodetail\">
  <div class=\"articleNews\">
<!--     <h1 class=\"title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "title", array()), "html", null, true);
        echo "</h1> -->

    <article class=\"card\">
      <header class=\"card__thumb\">
        <a href=\"#\"><img alt=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "pictures", array()), 0, array()), "name", array()), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "pictures", array()), 0, array()), "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method"), "html", null, true);
        echo "\" /></a>
      </header>
      <date class=\"card__date\">
        
        <span class=\"card__date__day\"> ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "createDate", array()), "d"), "html", null, true);
        echo "</span>
        <br/>
        <span class=\"card__date__month\">";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "createDate", array()), "M"), "html", null, true);
        echo "</span>
      </date>

      <div class=\"card__body\">
        <div class=\"card__category\"><a href=\"#\">Article</a></div>
        <h2 class=\"card__title\"><a href=\"#\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "title", array()), "html", null, true);
        echo "</a></h2>
        <div class=\"card__subtitle\">L'article libre du jour</div>
        <div class=\"card__description\">
          ";
        // line 22
        echo $this->getAttribute((isset($context["detailnews"]) ? $context["detailnews"] : $this->getContext($context, "detailnews")), "content", array());
        echo "
        </div>
      </div>

      <footer class=\"card__footer\">
        Marquand Thibault <span class=\"icon fa fa-user\"></span>
        <!--     <span class=\"icon ion-clock\"></span> 6min ago -->
        <!--     <span class=\"icon ion-chatbox\"></span><a href=\"#\"> 42 comments</a> -->
      </footer>
    </article>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PointWebNewsBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  63 => 19,  55 => 14,  50 => 12,  41 => 8,  34 => 4,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %} {% block content %}*/
/* <div id="spot" class="videodetail">*/
/*   <div class="articleNews">*/
/* <!--     <h1 class="title">{{ detailnews.title }}</h1> -->*/
/* */
/*     <article class="card">*/
/*       <header class="card__thumb">*/
/*         <a href="#"><img alt="{{ detailnews.pictures.0.name }}" src="{{ detailnews.pictures.0.getWebPath(base) }}" /></a>*/
/*       </header>*/
/*       <date class="card__date">*/
/*         */
/*         <span class="card__date__day"> {{ detailnews.createDate|date('d') }}</span>*/
/*         <br/>*/
/*         <span class="card__date__month">{{ detailnews.createDate|date('M') }}</span>*/
/*       </date>*/
/* */
/*       <div class="card__body">*/
/*         <div class="card__category"><a href="#">Article</a></div>*/
/*         <h2 class="card__title"><a href="#">{{detailnews.title}}</a></h2>*/
/*         <div class="card__subtitle">L'article libre du jour</div>*/
/*         <div class="card__description">*/
/*           {{ detailnews.content|raw }}*/
/*         </div>*/
/*       </div>*/
/* */
/*       <footer class="card__footer">*/
/*         Marquand Thibault <span class="icon fa fa-user"></span>*/
/*         <!--     <span class="icon ion-clock"></span> 6min ago -->*/
/*         <!--     <span class="icon ion-chatbox"></span><a href="#"> 42 comments</a> -->*/
/*       </footer>*/
/*     </article>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/

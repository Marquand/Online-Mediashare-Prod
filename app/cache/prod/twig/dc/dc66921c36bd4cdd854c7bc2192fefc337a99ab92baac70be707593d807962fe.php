<?php

/* PointWebNewsBundle:Default:index.html.twig */
class __TwigTemplate_65f935534aa6a45cc82902911b8eddf34b5619708bc9d55ff3cc0dd1a7bdb042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebNewsBundle:Default:index.html.twig", 1);
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
<style>
  .articleNews {
    display: block;
    padding-top: 1%;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    max-width: 600px;
  }
  /**
* Title
**/
  
  .articleNews .title {
    text-align: center;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    font-size: 45px;
    color: coral;
    text-transform: uppercase;
  }
  /**
* CARD
**/
  
  .articleNews .card {
    position: relative;
    top: -50%;
    left: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0);
    transform: translateX(-50%) translateY(-50%) translateZ(0);
    width: 100%;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    -webkit-transition: box-shadow 0.5s;
    transition: box-shadow 0.5s;
  }
  
  .articleNews .card a {
    color: inherit;
    text-decoration: none;
  }
  
  .articleNews .card:hover {
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
  }
  /**
* DATE
**/
  
  .articleNews .card__date {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 45px;
    height: 45px;
    padding-top: 10px;
    background-color: coral;
    border-radius: 50%;
    color: #fff;
    text-align: center;
    font-weight: 700;
    line-height: 13px;
  }
  
  .articleNews .card__date__day {
    font-size: 14px;
  }
  
  .articleNews .card__date__month {
    text-transform: uppercase;
    font-size: 10px;
  }
  /**
* THUMB
**/
  
  .articleNews .card__thumb {
    height: 245px;
    overflow: hidden;
    background-color: #000;
    -webkit-transition: height 0.5s;
    transition: height 0.5s;
  }
  
  .articleNews .card__thumb img {
    display: block;
    width: 100%;
    max-width: 600px;
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition: opacity 0.5s, -webkit-transform 0.5s;
    transition: opacity 0.5s, -webkit-transform 0.5s;
    transition: opacity 0.5s, transform 0.5s;
    transition: opacity 0.5s, transform 0.5s, -webkit-transform 0.5s;
  }
  
  .articleNews .card:hover .card__thumb {
    height: 130px;
  }
  
  .articleNews .card:hover .card__thumb img {
    opacity: 0.6;
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
  }
  /**
* BODY
**/
  
  .articleNews .card__body {
    position: relative;
    height: 185px;
    padding: 20px;
    -webkit-transition: height 0.5s;
    transition: height 0.5s;
  }
  
  .articleNews .card:hover .card__body {
    height: 300px;
  }
  
  .articleNews .card__category {
    position: absolute;
    top: -25px;
    left: 0;
    height: 25px;
    padding: 0 15px;
    background-color: coral;
    color: #fff;
    text-transform: uppercase;
    font-size: 11px;
    line-height: 25px;
  }
  
  .articleNews .card__title {
    margin: 0;
    padding: 0 0 10px 0;
    color: #000;
    font-size: 22px;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  .articleNews .card__subtitle {
    margin: 0;
    padding: 0 0 10px 0;
    font-size: 19px;
    color: coral;
  }
  
  .articleNews .card__description {
    position: absolute;
    left: 20px;
    right: 20px;
    bottom: 56px;
    margin: 0;
    padding: 0;
    color: #666C74;
    line-height: 27px;
    opacity: 0;
    -webkit-transform: translateY(45px);
    transform: translateY(45px);
    -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, -webkit-transform 0.3s;
    transition: opacity 0.3s, transform 0.3s;
    transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
  }
  
  .articleNews .card:hover .card__description {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }
  
  .articleNews .card__footer {
    position: absolute;
    bottom: 12px;
    left: 20px;
    right: 20px;
    font-size: 11px;
    color: #A3A9A2;
  }
  
  .articleNews .icon {
    display: inline-block;
    vertical-align: middle;
    margin: -2px 0 0 2px;
    font-size: 18px;
  }
  
  .articleNews .icon + .icon {
    padding-left: 10px;
  }
</style>
<div id=\"spot\" class=\"videodetail\">
  <div class=\"articleNews\">
    <h1 class=\"title\">UI - Card Design</h1>

    <article class=\"card\">
      <header class=\"card__thumb\">
        <a href=\"#\"><img src=\"http://lorempicsum.com/futurama/370/245/3\" /></a>
      </header>
      <date class=\"card__date\">
        <span class=\"card__date__day\">11</span>
        <br/>
        <span class=\"card__date__month\">Juin</span>
      </date>

      <div class=\"card__body\">
        <div class=\"card__category\"><a href=\"#\">Photos</a></div>
        <h2 class=\"card__title\"><a href=\"#\">We're on a highway to hell!</a></h2>
        <div class=\"card__subtitle\">Bender is frying Doc !</div>
        <p class=\"card__description\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit cumque non commodi, modi recusandae cupiditate ipsa ab soluta. Illum, dolore.</p>
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
        return "PointWebNewsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %} {% block content %}*/
/* */
/* <style>*/
/*   .articleNews {*/
/*     display: block;*/
/*     padding-top: 1%;*/
/*     margin-left: auto;*/
/*     margin-right: auto;*/
/*     width: 100%;*/
/*     max-width: 600px;*/
/*   }*/
/*   /***/
/* * Title*/
/* **//* */
/*   */
/*   .articleNews .title {*/
/*     text-align: center;*/
/*     -webkit-transform: translateY(20px);*/
/*     transform: translateY(20px);*/
/*     font-size: 45px;*/
/*     color: coral;*/
/*     text-transform: uppercase;*/
/*   }*/
/*   /***/
/* * CARD*/
/* **//* */
/*   */
/*   .articleNews .card {*/
/*     position: relative;*/
/*     top: -50%;*/
/*     left: 50%;*/
/*     -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0);*/
/*     transform: translateX(-50%) translateY(-50%) translateZ(0);*/
/*     width: 100%;*/
/*     background-color: #fff;*/
/*     box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);*/
/*     overflow: hidden;*/
/*     -webkit-transition: box-shadow 0.5s;*/
/*     transition: box-shadow 0.5s;*/
/*   }*/
/*   */
/*   .articleNews .card a {*/
/*     color: inherit;*/
/*     text-decoration: none;*/
/*   }*/
/*   */
/*   .articleNews .card:hover {*/
/*     box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);*/
/*   }*/
/*   /***/
/* * DATE*/
/* **//* */
/*   */
/*   .articleNews .card__date {*/
/*     position: absolute;*/
/*     top: 20px;*/
/*     right: 20px;*/
/*     width: 45px;*/
/*     height: 45px;*/
/*     padding-top: 10px;*/
/*     background-color: coral;*/
/*     border-radius: 50%;*/
/*     color: #fff;*/
/*     text-align: center;*/
/*     font-weight: 700;*/
/*     line-height: 13px;*/
/*   }*/
/*   */
/*   .articleNews .card__date__day {*/
/*     font-size: 14px;*/
/*   }*/
/*   */
/*   .articleNews .card__date__month {*/
/*     text-transform: uppercase;*/
/*     font-size: 10px;*/
/*   }*/
/*   /***/
/* * THUMB*/
/* **//* */
/*   */
/*   .articleNews .card__thumb {*/
/*     height: 245px;*/
/*     overflow: hidden;*/
/*     background-color: #000;*/
/*     -webkit-transition: height 0.5s;*/
/*     transition: height 0.5s;*/
/*   }*/
/*   */
/*   .articleNews .card__thumb img {*/
/*     display: block;*/
/*     width: 100%;*/
/*     max-width: 600px;*/
/*     opacity: 1;*/
/*     -webkit-transform: scale(1);*/
/*     transform: scale(1);*/
/*     -webkit-transition: opacity 0.5s, -webkit-transform 0.5s;*/
/*     transition: opacity 0.5s, -webkit-transform 0.5s;*/
/*     transition: opacity 0.5s, transform 0.5s;*/
/*     transition: opacity 0.5s, transform 0.5s, -webkit-transform 0.5s;*/
/*   }*/
/*   */
/*   .articleNews .card:hover .card__thumb {*/
/*     height: 130px;*/
/*   }*/
/*   */
/*   .articleNews .card:hover .card__thumb img {*/
/*     opacity: 0.6;*/
/*     -webkit-transform: scale(1.2);*/
/*     transform: scale(1.2);*/
/*   }*/
/*   /***/
/* * BODY*/
/* **//* */
/*   */
/*   .articleNews .card__body {*/
/*     position: relative;*/
/*     height: 185px;*/
/*     padding: 20px;*/
/*     -webkit-transition: height 0.5s;*/
/*     transition: height 0.5s;*/
/*   }*/
/*   */
/*   .articleNews .card:hover .card__body {*/
/*     height: 300px;*/
/*   }*/
/*   */
/*   .articleNews .card__category {*/
/*     position: absolute;*/
/*     top: -25px;*/
/*     left: 0;*/
/*     height: 25px;*/
/*     padding: 0 15px;*/
/*     background-color: coral;*/
/*     color: #fff;*/
/*     text-transform: uppercase;*/
/*     font-size: 11px;*/
/*     line-height: 25px;*/
/*   }*/
/*   */
/*   .articleNews .card__title {*/
/*     margin: 0;*/
/*     padding: 0 0 10px 0;*/
/*     color: #000;*/
/*     font-size: 22px;*/
/*     font-weight: bold;*/
/*     text-transform: uppercase;*/
/*   }*/
/*   */
/*   .articleNews .card__subtitle {*/
/*     margin: 0;*/
/*     padding: 0 0 10px 0;*/
/*     font-size: 19px;*/
/*     color: coral;*/
/*   }*/
/*   */
/*   .articleNews .card__description {*/
/*     position: absolute;*/
/*     left: 20px;*/
/*     right: 20px;*/
/*     bottom: 56px;*/
/*     margin: 0;*/
/*     padding: 0;*/
/*     color: #666C74;*/
/*     line-height: 27px;*/
/*     opacity: 0;*/
/*     -webkit-transform: translateY(45px);*/
/*     transform: translateY(45px);*/
/*     -webkit-transition: opacity 0.3s, -webkit-transform 0.3s;*/
/*     transition: opacity 0.3s, -webkit-transform 0.3s;*/
/*     transition: opacity 0.3s, transform 0.3s;*/
/*     transition: opacity 0.3s, transform 0.3s, -webkit-transform 0.3s;*/
/*     -webkit-transition-delay: 0s;*/
/*     transition-delay: 0s;*/
/*   }*/
/*   */
/*   .articleNews .card:hover .card__description {*/
/*     opacity: 1;*/
/*     -webkit-transform: translateY(0);*/
/*     transform: translateY(0);*/
/*     -webkit-transition-delay: 0.2s;*/
/*     transition-delay: 0.2s;*/
/*   }*/
/*   */
/*   .articleNews .card__footer {*/
/*     position: absolute;*/
/*     bottom: 12px;*/
/*     left: 20px;*/
/*     right: 20px;*/
/*     font-size: 11px;*/
/*     color: #A3A9A2;*/
/*   }*/
/*   */
/*   .articleNews .icon {*/
/*     display: inline-block;*/
/*     vertical-align: middle;*/
/*     margin: -2px 0 0 2px;*/
/*     font-size: 18px;*/
/*   }*/
/*   */
/*   .articleNews .icon + .icon {*/
/*     padding-left: 10px;*/
/*   }*/
/* </style>*/
/* <div id="spot" class="videodetail">*/
/*   <div class="articleNews">*/
/*     <h1 class="title">UI - Card Design</h1>*/
/* */
/*     <article class="card">*/
/*       <header class="card__thumb">*/
/*         <a href="#"><img src="http://lorempicsum.com/futurama/370/245/3" /></a>*/
/*       </header>*/
/*       <date class="card__date">*/
/*         <span class="card__date__day">11</span>*/
/*         <br/>*/
/*         <span class="card__date__month">Juin</span>*/
/*       </date>*/
/* */
/*       <div class="card__body">*/
/*         <div class="card__category"><a href="#">Photos</a></div>*/
/*         <h2 class="card__title"><a href="#">We're on a highway to hell!</a></h2>*/
/*         <div class="card__subtitle">Bender is frying Doc !</div>*/
/*         <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit cumque non commodi, modi recusandae cupiditate ipsa ab soluta. Illum, dolore.</p>*/
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

<?php

/* PointWebAppBundle:Default:sitemap.html.twig */
class __TwigTemplate_24e63427bdd4e207ceb36fd86e0da1d27f639c13be703e054f3d0a0f58abdb32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:sitemap.html.twig", 1);
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
    <div id=\"sitemap\">
        <ul>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["urls"]) ? $context["urls"] : $this->getContext($context, "urls"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "                <li><a href=\"http://";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["urls"]) ? $context["urls"] : $this->getContext($context, "urls")), $context["i"], array(), "array"), "loc", array(), "array"), "html", null, true);
            echo "\" target=\"_blank\" alt=\"sitemap\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["urls"]) ? $context["urls"] : $this->getContext($context, "urls")), $context["i"], array(), "array"), "loc", array(), "array"), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ul>
    </div>

";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:sitemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* */
/*     <div id="sitemap">*/
/*         <ul>*/
/*             {% for i in 0..urls|length-1  %}*/
/*                 <li><a href="http://{{  urls[i]['loc'] }}" target="_blank" alt="sitemap">{{  urls[i]['loc'] }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* {% endblock %}*/

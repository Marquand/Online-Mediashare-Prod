<?php

/* PointWebReferencingBundle:Keywords:index.html.twig */
class __TwigTemplate_38b2333901b6273fcd7b134fe59b54296aae40045083d320d46e5b2aff72e973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebReferencingBundle:Keywords:index.html.twig", 1);
        $this->blocks = array(
            'content_right' => array($this, 'block_content_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PointWebAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_right($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Mots-cl&eacute;s</h1>
    ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key"))) > 0)) {
            // line 6
            echo "        <div>
            ";
            // line 7
            echo $this->getAttribute($this->getAttribute((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), 0, array()), "keywords", array());
            echo "
        </div>
        <div class=\"btn-group-vertical\">
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_keywords_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), 0, array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i
                        class=\"fa fa-pencil\"></i> Modifier</a>
        </div>
    ";
        } else {
            // line 14
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_keywords_new");
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
    ";
        }
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "PointWebReferencingBundle:Keywords:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  52 => 14,  45 => 10,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Mots-cl&eacute;s</h1>*/
/*     {% if key|length > 0 %}*/
/*         <div>*/
/*             {{ key.0.keywords|raw }}*/
/*         </div>*/
/*         <div class="btn-group-vertical">*/
/*             <a href="{{ path('admin_keywords_edit', {'id':key.0.id}) }}" class="btn btn-primary"><i*/
/*                         class="fa fa-pencil"></i> Modifier</a>*/
/*         </div>*/
/*     {% else %}*/
/*         <a href="{{ path('admin_keywords_new') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */

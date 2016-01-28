<?php

/* PointWebReferencingBundle:Keywords:new.html.twig */
class __TwigTemplate_78fbaa864664d8bb8f558ebecd841ce338756f2e92e6d276912f07e25c8a853c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebReferencingBundle:Keywords:new.html.twig", 1);
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
        echo "    <h1>Ajouter des mots-cl&eacute;s</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <fieldset>
        <div class=\"form-group\">
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keywords", array()), 'label');
        echo "
            <div class=\"col-lg-10\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keywords", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keywords", array()), 'widget');
        echo "
            </div>
        </div>

    </fieldset>
    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_keywords");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour &agrave; la
        liste</a>
";
    }

    public function getTemplateName()
    {
        return "PointWebReferencingBundle:Keywords:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  58 => 17,  50 => 12,  46 => 11,  41 => 9,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Ajouter des mots-cl&eacute;s</h1>*/
/* */
/*     {{ form_start(form, {'attr': {'class':'form-horizontal' }}) }}*/
/*     <fieldset>*/
/*         <div class="form-group">*/
/*             {{ form_label(form.keywords) }}*/
/*             <div class="col-lg-10">*/
/*                 {{ form_errors(form.keywords) }}*/
/*                 {{ form_widget(form.keywords) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </fieldset>*/
/*     {{ form_end(form) }}*/
/* */
/*     <a href="{{ path('admin_keywords') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour &agrave; la*/
/*         liste</a>*/
/* {% endblock %}*/
/* */

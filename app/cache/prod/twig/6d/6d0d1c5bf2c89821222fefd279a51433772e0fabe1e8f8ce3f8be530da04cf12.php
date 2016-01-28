<?php

/* PointWebProductBundle:Product:show.html.twig */
class __TwigTemplate_0325e8884cc5999dc9adcba59c49aea3440db75a95793e1e5b82faa6fa211b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebProductBundle:Product:show.html.twig", 1);
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
        echo "    <h1>Produit</h1>


    <div class=\"panel panel-info\">
    <div class=\"panel-heading\">Titre</div>
        <div class=\"panel-body\">
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
    <div class=\"panel-heading\">Référence</div>
        <div class=\"panel-body\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reference", array()), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Description</div>
        <div class=\"panel-body\">
            ";
        // line 23
        echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array());
        echo "
        </div>
    </div>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Titre Catégorie</div>
            <div class=\"panel-body\">
                ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "category", array()), "html", null, true);
        echo "
            </div>
    </div>

    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">Lien vidéo</div>
        <div class=\"panel-body\">
            ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "urlLink", array()), "html", null, true);
        echo "
        </div>
    </div>

    <div class=\"col-xs-12\" >
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">En ligne ?</div>
            <div class=\"panel-body\">
                ";
        // line 44
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "online", array())) {
            echo " Oui ";
        } else {
            echo " Non ";
        }
        // line 45
        echo "            </div>
        </div>
         <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Recommender ?</div>
            <div class=\"panel-body\">
                ";
        // line 50
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recommended", array())) {
            echo " Oui ";
        } else {
            echo " Non ";
        }
        // line 51
        echo "            </div>
        </div>
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Position</div>
            <div class=\"panel-body\">
                ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
            </div>
        </div>
    ";
        // line 59
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array())) > 0)) {
            // line 60
            echo "        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">Fichiers</div>
            <div class=\"panel-body\">
                <div id=\"gallery\" style=\"display:none;\">
                    ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pictures", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                // line 65
                echo "                        <img alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "name", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-image=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["picture"], "getWebPath", array(0 => (isset($context["base"]) ? $context["base"] : $this->getContext($context, "base"))), "method")), "html", null, true);
                echo "\"
                             data-description=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["picture"], "description", array()), "html", null, true);
                echo "\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 73
        echo "    </div>



            <a href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("admin_product");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-circle-left\"></i> Retour à la
                liste</a>
            <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i>
                Modifier</a>
 ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PointWebProductBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 81,  168 => 79,  163 => 77,  157 => 73,  151 => 69,  143 => 67,  139 => 66,  132 => 65,  128 => 64,  122 => 60,  120 => 59,  114 => 56,  107 => 51,  101 => 50,  94 => 45,  88 => 44,  77 => 36,  67 => 29,  58 => 23,  48 => 16,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Produit</h1>*/
/* */
/* */
/*     <div class="panel panel-info">*/
/*     <div class="panel-heading">Titre</div>*/
/*         <div class="panel-body">*/
/*         {{ entity.title }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*     <div class="panel-heading">Référence</div>*/
/*         <div class="panel-body">*/
/*         {{ entity.reference }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Description</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.description|raw }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Titre Catégorie</div>*/
/*             <div class="panel-body">*/
/*                 {{ entity.category }}*/
/*             </div>*/
/*     </div>*/
/* */
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">Lien vidéo</div>*/
/*         <div class="panel-body">*/
/*             {{ entity.urlLink }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-xs-12" >*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">En ligne ?</div>*/
/*             <div class="panel-body">*/
/*                 {% if entity.online %} Oui {% else %} Non {% endif %}*/
/*             </div>*/
/*         </div>*/
/*          <div class="panel panel-info">*/
/*             <div class="panel-heading">Recommender ?</div>*/
/*             <div class="panel-body">*/
/*                 {% if entity.recommended %} Oui {% else %} Non {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">Position</div>*/
/*             <div class="panel-body">*/
/*                 {{ entity.position }}*/
/*             </div>*/
/*         </div>*/
/*     {% if entity.pictures|length >0 %}*/
/*         <div class="panel panel-info">*/
/*             <div class="panel-heading">Fichiers</div>*/
/*             <div class="panel-body">*/
/*                 <div id="gallery" style="display:none;">*/
/*                     {% for picture in entity.pictures %}*/
/*                         <img alt="{{ picture.name }}" src="{{ asset(picture.getWebPath(base)) }}"*/
/*                              data-image="{{ asset(picture.getWebPath(base)) }}"*/
/*                              data-description="{{ picture.description }}">*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     </div>*/
/* */
/* */
/* */
/*             <a href="{{ path('admin_product') }}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour à la*/
/*                 liste</a>*/
/*             <a href="{{ path('admin_product_edit', { 'id': entity.id }) }}" class="btn btn-primary"><i class="fa fa-pencil"></i>*/
/*                 Modifier</a>*/
/*  {{ form(delete_form) }}*/
/* {% endblock %}*/
/* */
/* */

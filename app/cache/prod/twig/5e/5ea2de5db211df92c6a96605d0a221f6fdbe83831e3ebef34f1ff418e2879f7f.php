<?php

/* PointWebReferencingBundle:Referencing:index.html.twig */
class __TwigTemplate_9269c9971a38d7d466366647d7e22707884bd04603d7d7ec8a98b2b73445c0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAdminBundle::base.html.twig", "PointWebReferencingBundle:Referencing:index.html.twig", 1);
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
        echo "    <h1>Liste des pages referenc&eacute;es</h1>

    <table class=\"table table-striped table-hover\">
        <thead>
        <tr>
            <th>Title</th>
            <th>Path</th>
            <th style=\"width: 125px;\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["referencing"]) ? $context["referencing"] : $this->getContext($context, "referencing")));
        foreach ($context['_seq'] as $context["_key"] => $context["ref"]) {
            // line 16
            echo "            ";
            if (($this->getAttribute($context["ref"], "online", array()) == true)) {
                // line 17
                echo "                <tr>
                    <td>
                        <span>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["ref"], "title", array()), "html", null, true);
                echo "</span>
                    </td>
                    <td>
                        <span>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["ref"], "path", array()), "html", null, true);
                echo "</span>
                    </td>
                    <td>
                        <div class=\"btn-group-vertical\">
                            <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_referencing_show", array("id" => $this->getAttribute($context["ref"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i
                                        class=\"fa fa-eye\"></i> Voir</a>
                            <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_referencing_edit", array("id" => $this->getAttribute($context["ref"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary\"><i
                                        class=\"fa fa-pencil\"></i> Modifier</a>
                        </div>
                    </td>
                </tr>
            ";
            }
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_referencing_new");
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> Ajouter</a>
";
    }

    public function getTemplateName()
    {
        return "PointWebReferencingBundle:Referencing:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 38,  88 => 35,  82 => 34,  73 => 28,  68 => 26,  61 => 22,  55 => 19,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PointWebAdminBundle::base.html.twig' %}*/
/* */
/* {% block content_right %}*/
/*     <h1>Liste des pages referenc&eacute;es</h1>*/
/* */
/*     <table class="table table-striped table-hover">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Title</th>*/
/*             <th>Path</th>*/
/*             <th style="width: 125px;">Actions</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ref in referencing %}*/
/*             {% if ref.online == true %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         <span>{{ ref.title }}</span>*/
/*                     </td>*/
/*                     <td>*/
/*                         <span>{{ ref.path }}</span>*/
/*                     </td>*/
/*                     <td>*/
/*                         <div class="btn-group-vertical">*/
/*                             <a href="{{ path('admin_referencing_show', {'id':ref.id}) }}" class="btn btn-primary"><i*/
/*                                         class="fa fa-eye"></i> Voir</a>*/
/*                             <a href="{{ path('admin_referencing_edit', {'id':ref.id}) }}" class="btn btn-primary"><i*/
/*                                         class="fa fa-pencil"></i> Modifier</a>*/
/*                         </div>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <a href="{{ path('admin_referencing_new') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Ajouter</a>*/
/* {% endblock %}*/
/* */

<?php

/* PointWebAppBundle:Default:contact.html.twig */
class __TwigTemplate_14d9df86649138b47f93d155841b8d55b6c3b16b1234d53e7f69b9d172f3b860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PointWebAppBundle::base.html.twig", "PointWebAppBundle:Default:contact.html.twig", 1);
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
<div class=\"container\" style=\"margin-top:5%;\">

<div class=\"row\" id=\"contact\">
                <div class=\"col-md-8 col-sm-7 space-mobile\">
                    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                            <!-- form block -->
                                            <div class=\"input-group m-b-20\">
                                               <span class=\"input-group-addon\"><i class=\"fa fa-users\"></i></span>
                                                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
                                                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
                                                </div>

                                            <div class=\"input-group m-b-20\">
                                                <span class=\"input-group-addon\"><i class=\"fa fa-phone\"></i></span>
                                                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
                                                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
                                              </div>
                                </div>

                                           
                                <div class=\"col-md-6\">
                                    <!-- form block -->
                                    <div class=\"input-group m-b-20\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-location-arrow\"></i></span>
                                              
                                                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
                                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
        echo "
             
                                             </div>
                                    <div class=\"input-group m-b-20\">
                                        <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                                                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                                            </div>
                                            
                                                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
                                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
                                    </div>
                                        <div class=\"col-md-12\">      
                                            <fieldset id=\"captcha\">
                                               <legend align=\"center\">Veuillez répondre à la question pour envoyer votre message.</legend>
                                               ";
        // line 47
        if (((isset($context["captcha"]) ? $context["captcha"] : $this->getContext($context, "captcha")) != "")) {
            // line 48
            echo "                                                <p class=\"error\"> mauvaise r&eacute;ponse </p>";
        }
        // line 49
        echo "                                                <center><div id=\"captcha_content\">
                                                    <p class=\"captcha_question\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "html", null, true);
        echo " <span>*</span></p>
                                                    <input class=\"reponse_captcha\" type=\"text\" name=\"captcha\" placeholder=\"Entrez la réponse\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["captcha"]) ? $context["captcha"] : $this->getContext($context, "captcha")), "html", null, true);
        echo "\" />
                                                </div>
                                                </center>
                                            </fieldset>
                                            </div>
                    </div>
               
                 ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>

                <div class=\"col-md-4 col-sm-5 contactData\">
                    <h3 class=\"titleTag m-t-0\">Contact<br>Details</h3>
                    <p class=\"m-b-40\">Vous avez des questions ? Contacté nous directement par internet ou voie postal.</p>
                    <p class=\"contactlocation\">France, Lyon 69004</p>
                    <p class=\"contactphone\">06 74 32 85 57</p>
                    <p class=\"contactmail\">Marquand.Thibault@gmail.com</p>
                    <hr>
                </div>
        </div>

    </div>



 

";
    }

    public function getTemplateName()
    {
        return "PointWebAppBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 58,  122 => 51,  118 => 50,  115 => 49,  112 => 48,  110 => 47,  102 => 42,  98 => 41,  92 => 38,  88 => 37,  80 => 32,  76 => 31,  63 => 21,  59 => 20,  51 => 15,  47 => 14,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'PointWebAppBundle::base.html.twig' %}*/
/* {% block content %}*/
/* */
/* <div class="container" style="margin-top:5%;">*/
/* */
/* <div class="row" id="contact">*/
/*                 <div class="col-md-8 col-sm-7 space-mobile">*/
/*                     {{ form_start(form) }}*/
/*                         <div class="row">*/
/*                             <div class="col-md-6">*/
/*                             <!-- form block -->*/
/*                                             <div class="input-group m-b-20">*/
/*                                                <span class="input-group-addon"><i class="fa fa-users"></i></span>*/
/*                                                     {{ form_errors(form.lastname) }}*/
/*                                                     {{ form_widget(form.lastname) }}*/
/*                                                 </div>*/
/* */
/*                                             <div class="input-group m-b-20">*/
/*                                                 <span class="input-group-addon"><i class="fa fa-phone"></i></span>*/
/*                                                     {{ form_errors(form.phone) }}*/
/*                                                     {{ form_widget(form.phone) }}*/
/*                                               </div>*/
/*                                 </div>*/
/* */
/*                                            */
/*                                 <div class="col-md-6">*/
/*                                     <!-- form block -->*/
/*                                     <div class="input-group m-b-20">*/
/*                                         <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>*/
/*                                               */
/*                                                     {{ form_errors(form.address) }}*/
/*                                                     {{ form_widget(form.address) }}*/
/*              */
/*                                              </div>*/
/*                                     <div class="input-group m-b-20">*/
/*                                         <span class="input-group-addon"><i class="fa fa-envelope"></i></span>*/
/*                                                     {{ form_errors(form.email) }}*/
/*                                                     {{ form_widget(form.email) }}*/
/*                                             </div>*/
/*                                             */
/*                                                     {{ form_errors(form.message) }}*/
/*                                                     {{ form_widget(form.message) }}*/
/*                                     </div>*/
/*                                         <div class="col-md-12">      */
/*                                             <fieldset id="captcha">*/
/*                                                <legend align="center">Veuillez répondre à la question pour envoyer votre message.</legend>*/
/*                                                {% if captcha != "" %}*/
/*                                                 <p class="error"> mauvaise r&eacute;ponse </p>{% endif %}*/
/*                                                 <center><div id="captcha_content">*/
/*                                                     <p class="captcha_question">{{ question }} <span>*</span></p>*/
/*                                                     <input class="reponse_captcha" type="text" name="captcha" placeholder="Entrez la réponse" value="{{ captcha }}" />*/
/*                                                 </div>*/
/*                                                 </center>*/
/*                                             </fieldset>*/
/*                                             </div>*/
/*                     </div>*/
/*                */
/*                  {{ form_end(form) }}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4 col-sm-5 contactData">*/
/*                     <h3 class="titleTag m-t-0">Contact<br>Details</h3>*/
/*                     <p class="m-b-40">Vous avez des questions ? Contacté nous directement par internet ou voie postal.</p>*/
/*                     <p class="contactlocation">France, Lyon 69004</p>*/
/*                     <p class="contactphone">06 74 32 85 57</p>*/
/*                     <p class="contactmail">Marquand.Thibault@gmail.com</p>*/
/*                     <hr>*/
/*                 </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/*  */
/* */
/* {% endblock %}*/

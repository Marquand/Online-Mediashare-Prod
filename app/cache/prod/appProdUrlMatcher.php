<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin/newsletter')) {
            // admin_newsletter
            if (rtrim($pathinfo, '/') === '/admin/newsletter') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_newsletter');
                }

                return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterController::indexAction',  '_route' => 'admin_newsletter',);
            }

            // admin_newsletter_show
            if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_show')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterController::showAction',));
            }

            // admin_newsletter_new
            if ($pathinfo === '/admin/newsletter/new') {
                return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterController::newAction',  '_route' => 'admin_newsletter_new',);
            }

            // admin_newsletter_create
            if ($pathinfo === '/admin/newsletter/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_newsletter_create;
                }

                return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterController::createAction',  '_route' => 'admin_newsletter_create',);
            }
            not_admin_newsletter_create:

            // admin_newsletter_edit
            if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_edit')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterController::editAction',));
            }

            // admin_newsletter_update
            if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_newsletter_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_update')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterController::updateAction',));
            }
            not_admin_newsletter_update:

            // admin_newsletter_delete
            if (preg_match('#^/admin/newsletter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_newsletter_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_delete')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterController::deleteAction',));
            }
            not_admin_newsletter_delete:

            if (0 === strpos($pathinfo, '/admin/newsletter/abonnes')) {
                // admin_newsletter_mail
                if (rtrim($pathinfo, '/') === '/admin/newsletter/abonnes') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_newsletter_mail');
                    }

                    return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterMailController::indexAction',  '_route' => 'admin_newsletter_mail',);
                }

                // admin_newsletter_mail_show
                if (preg_match('#^/admin/newsletter/abonnes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_mail_show')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterMailController::showAction',));
                }

                // admin_newsletter_mail_new
                if ($pathinfo === '/admin/newsletter/abonnes/new') {
                    return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterMailController::newAction',  '_route' => 'admin_newsletter_mail_new',);
                }

                // admin_newsletter_mail_create
                if ($pathinfo === '/admin/newsletter/abonnes/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_newsletter_mail_create;
                    }

                    return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterMailController::createAction',  '_route' => 'admin_newsletter_mail_create',);
                }
                not_admin_newsletter_mail_create:

                // admin_newsletter_mail_edit
                if (preg_match('#^/admin/newsletter/abonnes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_mail_edit')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterMailController::editAction',));
                }

                // admin_newsletter_mail_update
                if (preg_match('#^/admin/newsletter/abonnes/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_newsletter_mail_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_mail_update')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterMailController::updateAction',));
                }
                not_admin_newsletter_mail_update:

                // admin_newsletter_mail_delete
                if (preg_match('#^/admin/newsletter/abonnes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_newsletter_mail_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_mail_delete')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterMailController::deleteAction',));
                }
                not_admin_newsletter_mail_delete:

            }

            if (0 === strpos($pathinfo, '/admin/newsletter/group')) {
                // admin_newsletter_group
                if (rtrim($pathinfo, '/') === '/admin/newsletter/group') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_newsletter_group');
                    }

                    return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterGroupController::indexAction',  '_route' => 'admin_newsletter_group',);
                }

                // admin_newsletter_group_show
                if (preg_match('#^/admin/newsletter/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_group_show')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterGroupController::showAction',));
                }

                // admin_newsletter_group_new
                if ($pathinfo === '/admin/newsletter/group/new') {
                    return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterGroupController::newAction',  '_route' => 'admin_newsletter_group_new',);
                }

                // admin_newsletter_group_create
                if ($pathinfo === '/admin/newsletter/group/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_newsletter_group_create;
                    }

                    return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterGroupController::createAction',  '_route' => 'admin_newsletter_group_create',);
                }
                not_admin_newsletter_group_create:

                // admin_newsletter_group_edit
                if (preg_match('#^/admin/newsletter/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_group_edit')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterGroupController::editAction',));
                }

                // admin_newsletter_group_update
                if (preg_match('#^/admin/newsletter/group/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_newsletter_group_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_group_update')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterGroupController::updateAction',));
                }
                not_admin_newsletter_group_update:

                // admin_newsletter_group_delete
                if (preg_match('#^/admin/newsletter/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_newsletter_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_newsletter_group_delete')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\NewsletterGroupController::deleteAction',));
                }
                not_admin_newsletter_group_delete:

            }

        }

        // point_web_newsletter_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'point_web_newsletter_homepage')), array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            // newsletter
            if (rtrim($pathinfo, '/') === '/newsletter') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'newsletter');
                }

                return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\DefaultController::newsletterAction',  '_route' => 'newsletter',);
            }

            // newsletter_remove
            if ($pathinfo === '/newsletter/abonne/delete') {
                return array (  '_controller' => 'PointWeb\\NewsletterBundle\\Controller\\DefaultController::removeAction',  '_route' => 'newsletter_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/page')) {
            // admin_page
            if (rtrim($pathinfo, '/') === '/admin/page') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_page');
                }

                return array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::indexAction',  '_route' => 'admin_page',);
            }

            // admin_page_show
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_show')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::showAction',));
            }

            // admin_page_new
            if ($pathinfo === '/admin/page/new') {
                return array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::newAction',  '_route' => 'admin_page_new',);
            }

            // admin_page_create
            if ($pathinfo === '/admin/page/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_page_create;
                }

                return array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::createAction',  '_route' => 'admin_page_create',);
            }
            not_admin_page_create:

            // admin_page_edit
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_edit')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::editAction',));
            }

            // admin_page_update
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_page_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_update')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::updateAction',));
            }
            not_admin_page_update:

            // admin_page_delete
            if (preg_match('#^/admin/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_page_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_page_delete')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\PageController::deleteAction',));
            }
            not_admin_page_delete:

        }

        // page
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<path>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'PointWeb\\PageBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/keywords')) {
                // admin_keywords
                if (rtrim($pathinfo, '/') === '/admin/keywords') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_keywords');
                    }

                    return array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\KeywordsController::indexAction',  '_route' => 'admin_keywords',);
                }

                // admin_keywords_new
                if ($pathinfo === '/admin/keywords/new') {
                    return array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\KeywordsController::newAction',  '_route' => 'admin_keywords_new',);
                }

                // admin_keywords_create
                if ($pathinfo === '/admin/keywords/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_keywords_create;
                    }

                    return array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\KeywordsController::createAction',  '_route' => 'admin_keywords_create',);
                }
                not_admin_keywords_create:

                // admin_keywords_edit
                if (preg_match('#^/admin/keywords/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_keywords_edit')), array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\KeywordsController::editAction',));
                }

                // admin_keywords_update
                if (preg_match('#^/admin/keywords/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_keywords_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_keywords_update')), array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\KeywordsController::updateAction',));
                }
                not_admin_keywords_update:

                // admin_keywords_delete
                if (preg_match('#^/admin/keywords/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_keywords_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_keywords_delete')), array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\KeywordsController::deleteAction',));
                }
                not_admin_keywords_delete:

            }

            if (0 === strpos($pathinfo, '/admin/referencing')) {
                // admin_referencing
                if (rtrim($pathinfo, '/') === '/admin/referencing') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_referencing');
                    }

                    return array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\ReferencingController::indexAction',  '_route' => 'admin_referencing',);
                }

                // admin_referencing_show
                if (preg_match('#^/admin/referencing/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referencing_show')), array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\ReferencingController::showAction',));
                }

                // admin_referencing_new
                if ($pathinfo === '/admin/referencing/new') {
                    return array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\ReferencingController::newAction',  '_route' => 'admin_referencing_new',);
                }

                // admin_referencing_create
                if ($pathinfo === '/admin/referencing/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_referencing_create;
                    }

                    return array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\ReferencingController::createAction',  '_route' => 'admin_referencing_create',);
                }
                not_admin_referencing_create:

                // admin_referencing_edit
                if (preg_match('#^/admin/referencing/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referencing_edit')), array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\ReferencingController::editAction',));
                }

                // admin_referencing_update
                if (preg_match('#^/admin/referencing/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_referencing_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referencing_update')), array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\ReferencingController::updateAction',));
                }
                not_admin_referencing_update:

                // admin_referencing_delete
                if (preg_match('#^/admin/referencing/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referencing_delete')), array (  '_controller' => 'PointWeb\\ReferencingBundle\\Controller\\ReferencingController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/ca')) {
                if (0 === strpos($pathinfo, '/admin/calendar')) {
                    if (0 === strpos($pathinfo, '/admin/calendarevent')) {
                        // admin_calendarevent
                        if (rtrim($pathinfo, '/') === '/admin/calendarevent') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_calendarevent');
                            }

                            return array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\CalendarEventController::indexAction',  '_route' => 'admin_calendarevent',);
                        }

                        // admin_calendarevent_show
                        if (preg_match('#^/admin/calendarevent/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_calendarevent_show')), array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\CalendarEventController::showAction',));
                        }

                        // admin_calendarevent_new
                        if ($pathinfo === '/admin/calendarevent/new') {
                            return array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\CalendarEventController::newAction',  '_route' => 'admin_calendarevent_new',);
                        }

                        // admin_calendarevent_create
                        if ($pathinfo === '/admin/calendarevent/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_admin_calendarevent_create;
                            }

                            return array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\CalendarEventController::createAction',  '_route' => 'admin_calendarevent_create',);
                        }
                        not_admin_calendarevent_create:

                        // admin_calendarevent_edit
                        if (preg_match('#^/admin/calendarevent/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_calendarevent_edit')), array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\CalendarEventController::editAction',));
                        }

                        // admin_calendarevent_update
                        if (preg_match('#^/admin/calendarevent/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_admin_calendarevent_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_calendarevent_update')), array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\CalendarEventController::updateAction',));
                        }
                        not_admin_calendarevent_update:

                        // admin_calendarevent_delete
                        if (preg_match('#^/admin/calendarevent/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_admin_calendarevent_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_calendarevent_delete')), array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\CalendarEventController::deleteAction',));
                        }
                        not_admin_calendarevent_delete:

                    }

                    // point_web_calendar_admin
                    if (preg_match('#^/admin/calendar/(?P<year>[^/]++)/(?P<month>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'point_web_calendar_admin')), array (  '_controller' => 'PointWeb\\CalendarBundle\\Controller\\DefaultController::indexAction',));
                    }

                    // point_web_calendar_admin_reroute
                    if (rtrim($pathinfo, '/') === '/admin/calendar') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'point_web_calendar_admin_reroute');
                        }

                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'point_web_calendar_admin',  'permanent' => true,  'year' => 0,  'month' => 0,  '_route' => 'point_web_calendar_admin_reroute',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/category')) {
                    // admin_category
                    if (rtrim($pathinfo, '/') === '/admin/category') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_category');
                        }

                        return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::indexAction',  '_route' => 'admin_category',);
                    }

                    // admin_category_show
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_show')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::showAction',));
                    }

                    // admin_category_new
                    if ($pathinfo === '/admin/category/new') {
                        return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::newAction',  '_route' => 'admin_category_new',);
                    }

                    // admin_category_create
                    if ($pathinfo === '/admin/category/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_category_create;
                        }

                        return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::createAction',  '_route' => 'admin_category_create',);
                    }
                    not_admin_category_create:

                    // admin_category_edit
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_edit')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::editAction',));
                    }

                    // admin_category_update
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_admin_category_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_update')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::updateAction',));
                    }
                    not_admin_category_update:

                    // admin_category_delete
                    if (preg_match('#^/admin/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_admin_category_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_delete')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::deleteAction',));
                    }
                    not_admin_category_delete:

                    // admin_category_submenu
                    if (0 === strpos($pathinfo, '/admin/category/submenu') && preg_match('#^/admin/category/submenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_category_submenu;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_category_submenu')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\CategoryController::subMenuAction',));
                    }
                    not_admin_category_submenu:

                }

            }

            if (0 === strpos($pathinfo, '/admin/product')) {
                // admin_product
                if (rtrim($pathinfo, '/') === '/admin/product') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_product');
                    }

                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::indexAction',  '_route' => 'admin_product',);
                }

                // admin_product_show
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_show')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::showAction',));
                }

                // admin_product_new
                if ($pathinfo === '/admin/product/new') {
                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::newAction',  '_route' => 'admin_product_new',);
                }

                // admin_product_create
                if ($pathinfo === '/admin/product/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_product_create;
                    }

                    return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::createAction',  '_route' => 'admin_product_create',);
                }
                not_admin_product_create:

                // admin_product_edit
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_edit')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::editAction',));
                }

                // admin_product_update
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_update')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::updateAction',));
                }
                not_admin_product_update:

                // admin_product_delete
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_product_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_delete')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::deleteAction',));
                }
                not_admin_product_delete:

                // admin_product_subcat
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/sub$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_subcat')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::subAction',));
                }

                // admin_product_sort
                if (preg_match('#^/admin/product/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_product_sort')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\ProductController::sortAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/video')) {
            // product
            if (rtrim($pathinfo, '/') === '/video') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product');
                }

                return array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\DefaultController::indexAction',  '_route' => 'product',);
            }

            // product_show
            if (preg_match('#^/video/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'PointWeb\\ProductBundle\\Controller\\DefaultController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/guestbook')) {
            // admin_guestbook
            if (rtrim($pathinfo, '/') === '/admin/guestbook') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_guestbook');
                }

                return array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::indexAction',  '_route' => 'admin_guestbook',);
            }

            // admin_guestbook_show
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_show')), array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::showAction',));
            }

            // admin_guestbook_new
            if ($pathinfo === '/admin/guestbook/new') {
                return array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::newAction',  '_route' => 'admin_guestbook_new',);
            }

            // admin_guestbook_create
            if ($pathinfo === '/admin/guestbook/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_guestbook_create;
                }

                return array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::createAction',  '_route' => 'admin_guestbook_create',);
            }
            not_admin_guestbook_create:

            // admin_guestbook_edit
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_edit')), array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::editAction',));
            }

            // admin_guestbook_update
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_guestbook_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_update')), array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::updateAction',));
            }
            not_admin_guestbook_update:

            // admin_guestbook_delete
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_guestbook_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_delete')), array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::deleteAction',));
            }
            not_admin_guestbook_delete:

            // admin_guestbook_sort
            if (preg_match('#^/admin/guestbook/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_guestbook_sort')), array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\GuestBookController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/guestbook')) {
            // guestbook
            if (rtrim($pathinfo, '/') === '/guestbook') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'guestbook');
                }

                return array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\DefaultController::indexAction',  '_route' => 'guestbook',);
            }

            // guestbook_create
            if ($pathinfo === '/guestbook/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_guestbook_create;
                }

                return array (  '_controller' => 'PointWeb\\GuestBookBundle\\Controller\\DefaultController::createAction',  '_route' => 'guestbook_create',);
            }
            not_guestbook_create:

        }

        if (0 === strpos($pathinfo, '/admin/partner')) {
            // admin_partner
            if (preg_match('#^/admin/partner/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::indexAction',  'page' => 1,));
            }

            // admin_partner_show
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_show')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::showAction',));
            }

            // admin_partner_new
            if ($pathinfo === '/admin/partner/new') {
                return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::newAction',  '_route' => 'admin_partner_new',);
            }

            // admin_partner_create
            if ($pathinfo === '/admin/partner/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_partner_create;
                }

                return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::createAction',  '_route' => 'admin_partner_create',);
            }
            not_admin_partner_create:

            // admin_partner_edit
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_edit')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::editAction',));
            }

            // admin_partner_update
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_partner_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_update')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::updateAction',));
            }
            not_admin_partner_update:

            // admin_partner_delete
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_partner_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_delete')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::deleteAction',));
            }
            not_admin_partner_delete:

            // admin_partner_sort
            if (preg_match('#^/admin/partner/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_partner_sort')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\PartnerController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/partner')) {
            // partner
            if (rtrim($pathinfo, '/') === '/partner') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'partner');
                }

                return array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\DefaultController::indexAction',  '_route' => 'partner',);
            }

            // partner_show
            if (preg_match('#^/partner/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partner_show')), array (  '_controller' => 'PointWeb\\PartnerBundle\\Controller\\DefaultController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/news')) {
            // admin_news
            if (preg_match('#^/admin/news/(?P<page>[^/]++)/list$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::indexAction',  'page' => 1,));
            }

            // admin_news_show
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_show')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::showAction',));
            }

            // admin_news_new
            if ($pathinfo === '/admin/news/new') {
                return array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::newAction',  '_route' => 'admin_news_new',);
            }

            // admin_news_create
            if ($pathinfo === '/admin/news/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_news_create;
                }

                return array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::createAction',  '_route' => 'admin_news_create',);
            }
            not_admin_news_create:

            // admin_news_edit
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_edit')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::editAction',));
            }

            // admin_news_update
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_news_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_update')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::updateAction',));
            }
            not_admin_news_update:

            // admin_news_delete
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_news_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_delete')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::deleteAction',));
            }
            not_admin_news_delete:

            // admin_news_sort
            if (preg_match('#^/admin/news/(?P<id>[^/]++)/sort$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_news_sort')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\NewsController::sortAction',));
            }

        }

        if (0 === strpos($pathinfo, '/news')) {
            // news
            if (rtrim($pathinfo, '/') === '/news') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'news');
                }

                return array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'news',);
            }

            // news_show
            if (preg_match('#^/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_show')), array (  '_controller' => 'PointWeb\\NewsBundle\\Controller\\DefaultController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user
            if (rtrim($pathinfo, '/') === '/admin/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_user');
                }

                return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user',);
            }

            // admin_user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::showAction',));
            }

            // admin_user_new
            if ($pathinfo === '/admin/user/new') {
                return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::editAction',));
            }

            // admin_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_admin_user_update:

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_admin_user_delete:

        }

        // user
        if (rtrim($pathinfo, '/') === '/profile') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user');
            }

            return array (  '_controller' => 'PointWeb\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/menu')) {
                // admin_menu
                if (rtrim($pathinfo, '/') === '/admin/menu') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_menu');
                    }

                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::indexAction',  '_route' => 'admin_menu',);
                }

                // admin_menu_show
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_show')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::showAction',));
                }

                // admin_menu_new
                if ($pathinfo === '/admin/menu/new') {
                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::newAction',  '_route' => 'admin_menu_new',);
                }

                // admin_menu_create
                if ($pathinfo === '/admin/menu/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_menu_create;
                    }

                    return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::createAction',  '_route' => 'admin_menu_create',);
                }
                not_admin_menu_create:

                // admin_menu_edit
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_edit')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::editAction',));
                }

                // admin_menu_update
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_menu_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_update')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::updateAction',));
                }
                not_admin_menu_update:

                // admin_menu_delete
                if (preg_match('#^/admin/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_menu_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_delete')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::deleteAction',));
                }
                not_admin_menu_delete:

                // admin_menu_submenu
                if (0 === strpos($pathinfo, '/admin/menu/submenu') && preg_match('#^/admin/menu/submenu/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_menu_submenu;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_menu_submenu')), array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\MenuController::subMenuAction',));
                }
                not_admin_menu_submenu:

            }

            // point_web_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'point_web_admin_homepage');
                }

                return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'point_web_admin_homepage',);
            }

            // point_web_admin_update
            if ($pathinfo === '/admin/upload') {
                return array (  '_controller' => 'PointWeb\\AdminBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'point_web_admin_update',);
            }

        }

        // point_web_app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'point_web_app_homepage');
            }

            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'point_web_app_homepage',);
        }

        // point_web_app_legal
        if ($pathinfo === '/legal') {
            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::legalAction',  '_route' => 'point_web_app_legal',);
        }

        if (0 === strpos($pathinfo, '/sitemap')) {
            // point_web_app_sitemap
            if ($pathinfo === '/sitemap') {
                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::sitemapAction',  '_route' => 'point_web_app_sitemap',);
            }

            // point_web_app_sitemapXml
            if ($pathinfo === '/sitemap.xml') {
                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::sitemapXmlAction',  '_route' => 'point_web_app_sitemapXml',);
            }

        }

        if (0 === strpos($pathinfo, '/co')) {
            // point_web_app_contact
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'point_web_app_contact',);
            }

            // point_web_app_cookies
            if ($pathinfo === '/cookies') {
                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::cookiesAction',  '_route' => 'point_web_app_cookies',);
            }

        }

        // point_web_app_thanks
        if ($pathinfo === '/thanks') {
            return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\DefaultController::thanksAction',  '_route' => 'point_web_app_thanks',);
        }

        if (0 === strpos($pathinfo, '/admin/contact')) {
            // admin_contact
            if (rtrim($pathinfo, '/') === '/admin/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_contact');
                }

                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::indexAction',  '_route' => 'admin_contact',);
            }

            // admin_contact_show
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_show')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::showAction',));
            }

            // admin_contact_new
            if ($pathinfo === '/admin/contact/new') {
                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::newAction',  '_route' => 'admin_contact_new',);
            }

            // admin_contact_create
            if ($pathinfo === '/admin/contact/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_contact_create;
                }

                return array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::createAction',  '_route' => 'admin_contact_create',);
            }
            not_admin_contact_create:

            // admin_contact_edit
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_edit')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::editAction',));
            }

            // admin_contact_update
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_contact_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_update')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::updateAction',));
            }
            not_admin_contact_update:

            // admin_contact_delete
            if (preg_match('#^/admin/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_contact_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contact_delete')), array (  '_controller' => 'PointWeb\\AppBundle\\Controller\\ContactController::deleteAction',));
            }
            not_admin_contact_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

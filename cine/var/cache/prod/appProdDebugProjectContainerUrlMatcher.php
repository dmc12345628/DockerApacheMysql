<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/cinema')) {
            if (0 === strpos($pathinfo, '/cinemas')) {
                // app_cinema_salle_getsalles
                if (preg_match('#^/cinemas/(?P<id>[^/]++)/salles$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_app_cinema_salle_getsalles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_salle_getsalles')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::getSallesAction',));
                }
                not_app_cinema_salle_getsalles:

                // app_cinema_salle_getsalle
                if (0 === strpos($pathinfo, '/cinemas/salles') && preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_app_cinema_salle_getsalle;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_salle_getsalle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::getSalleAction',));
                }
                not_app_cinema_salle_getsalle:

                // app_cinema_salle_postsalles
                if (preg_match('#^/cinemas/(?P<id>[^/]++)/salles$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_app_cinema_salle_postsalles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_salle_postsalles')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::postSallesAction',));
                }
                not_app_cinema_salle_postsalles:

                if (0 === strpos($pathinfo, '/cinemas/salles')) {
                    // app_cinema_salle_removesalle
                    if (preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_app_cinema_salle_removesalle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_salle_removesalle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::removeSalleAction',));
                    }
                    not_app_cinema_salle_removesalle:

                    // app_cinema_salle_updatesalle
                    if (preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_app_cinema_salle_updatesalle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_salle_updatesalle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::updateSalleAction',));
                    }
                    not_app_cinema_salle_updatesalle:

                    // app_cinema_salle_patchsalle
                    if (preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('PATCH' !== $canonicalMethod) {
                            $allow[] = 'PATCH';
                            goto not_app_cinema_salle_patchsalle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_salle_patchsalle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::patchSalleAction',));
                    }
                    not_app_cinema_salle_patchsalle:

                }

                // app_cinema_getcinemas
                if ('/cinemas' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_app_cinema_getcinemas;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CinemaController::getCinemasAction',  '_route' => 'app_cinema_getcinemas',);
                }
                not_app_cinema_getcinemas:

                // app_cinema_getcinema
                if (preg_match('#^/cinemas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_app_cinema_getcinema;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_getcinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::getCinemaAction',));
                }
                not_app_cinema_getcinema:

                // app_cinema_postcinema
                if ('/cinemas' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_app_cinema_postcinema;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CinemaController::postCinemaAction',  '_route' => 'app_cinema_postcinema',);
                }
                not_app_cinema_postcinema:

                // app_cinema_removecinema
                if (preg_match('#^/cinemas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_app_cinema_removecinema;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_removecinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::removeCinemaAction',));
                }
                not_app_cinema_removecinema:

                // app_cinema_updatecinema
                if (preg_match('#^/cinemas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PUT' !== $canonicalMethod) {
                        $allow[] = 'PUT';
                        goto not_app_cinema_updatecinema;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_updatecinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::updateCinemaAction',));
                }
                not_app_cinema_updatecinema:

                // app_cinema_patchcinema
                if (preg_match('#^/cinemas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PATCH' !== $canonicalMethod) {
                        $allow[] = 'PATCH';
                        goto not_app_cinema_patchcinema;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_cinema_patchcinema')), array (  '_controller' => 'AppBundle\\Controller\\CinemaController::patchCinemaAction',));
                }
                not_app_cinema_patchcinema:

            }

            // app_film_getcinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_app_film_getcinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_film_getcinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::getCinemaAction',));
            }
            not_app_film_getcinema:

            // app_film_postcinema
            if ('/cinema' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_app_film_postcinema;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FilmController::postCinemaAction',  '_route' => 'app_film_postcinema',);
            }
            not_app_film_postcinema:

            // app_film_removecinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_app_film_removecinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_film_removecinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::removeCinemaAction',));
            }
            not_app_film_removecinema:

            // app_film_updatecinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_app_film_updatecinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_film_updatecinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::updateCinemaAction',));
            }
            not_app_film_updatecinema:

            // app_film_patchcinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PATCH' !== $canonicalMethod) {
                    $allow[] = 'PATCH';
                    goto not_app_film_patchcinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_film_patchcinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::patchCinemaAction',));
            }
            not_app_film_patchcinema:

            // remove_cinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_remove_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_cinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::removeCinemaAction',  '_format' => NULL,));
            }
            not_remove_cinema:

            // update_cinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PUT' !== $canonicalMethod) {
                    $allow[] = 'PUT';
                    goto not_update_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_cinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::updateCinemaAction',  '_format' => NULL,));
            }
            not_update_cinema:

            // get_cinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_cinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::getCinemaAction',  '_format' => NULL,));
            }
            not_get_cinema:

            // post_cinema
            if ('/cinema' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_post_cinema;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FilmController::postCinemaAction',  '_format' => NULL,  '_route' => 'post_cinema',);
            }
            not_post_cinema:

            // patch_cinema
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('PATCH' !== $canonicalMethod) {
                    $allow[] = 'PATCH';
                    goto not_patch_cinema;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_cinema')), array (  '_controller' => 'AppBundle\\Controller\\FilmController::patchCinemaAction',  '_format' => NULL,));
            }
            not_patch_cinema:

            if (0 === strpos($pathinfo, '/cinemas')) {
                if (0 === strpos($pathinfo, '/cinemas/salles')) {
                    // remove_salle
                    if (preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_remove_salle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_salle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::removeSalleAction',  '_format' => NULL,));
                    }
                    not_remove_salle:

                    // update_salle
                    if (preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('PUT' !== $canonicalMethod) {
                            $allow[] = 'PUT';
                            goto not_update_salle;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_salle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::updateSalleAction',  '_format' => NULL,));
                    }
                    not_update_salle:

                }

                // get_salles
                if (preg_match('#^/cinemas/(?P<id>[^/]++)/salles$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_salles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_salles')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::getSallesAction',  '_format' => NULL,));
                }
                not_get_salles:

                // get_salle
                if (0 === strpos($pathinfo, '/cinemas/salles') && preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_get_salle;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_salle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::getSalleAction',  '_format' => NULL,));
                }
                not_get_salle:

                // post_salles
                if (preg_match('#^/cinemas/(?P<id>[^/]++)/salles$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_post_salles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_salles')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::postSallesAction',  '_format' => NULL,));
                }
                not_post_salles:

                // patch_salle
                if (0 === strpos($pathinfo, '/cinemas/salles') && preg_match('#^/cinemas/salles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('PATCH' !== $canonicalMethod) {
                        $allow[] = 'PATCH';
                        goto not_patch_salle;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patch_salle')), array (  '_controller' => 'AppBundle\\Controller\\Cinema\\SalleController::patchSalleAction',  '_format' => NULL,));
                }
                not_patch_salle:

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        if (0 === strpos($pathinfo, '/films')) {
            // app_film_getcinemas
            if ('/films' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_app_film_getcinemas;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FilmController::getCinemasAction',  '_route' => 'app_film_getcinemas',);
            }
            not_app_film_getcinemas:

            // get_cinemas
            if ('/films' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_get_cinemas;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FilmController::getCinemasAction',  '_format' => NULL,  '_route' => 'get_cinemas',);
            }
            not_get_cinemas:

        }

        // app.swagger_ui
        if ('/api/doc' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_appswagger_ui;
            }

            return array (  '_controller' => 'nelmio_api_doc.controller.swagger_ui',  '_route' => 'app.swagger_ui',);
        }
        not_appswagger_ui:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

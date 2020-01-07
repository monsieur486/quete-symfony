<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route({
     *     "fr": "/",
     *     "en": "/"
     * }, name="mainPage")
     */
    public function mainPageIndex()
    {
        return $this->render('mainPage/index.html.twig');
    }

    /**
     * @Route({
     *     "fr": "/lien01",
     *     "en": "/link01"
     * }, name="link01Page")
     */
    public function link01Index()
    {
        return $this->render('link01Page/index.html.twig');
    }

    /**
     * @Route({
     *     "fr": "/lien02",
     *     "en": "/link02"
     * }, name="link02Page")
     */
    public function link02Index()
    {
        return $this->render('link02Page/index.html.twig');
    }
}

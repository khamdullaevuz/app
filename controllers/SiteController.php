<?php

namespace controllers;

use Framework\Response;

class SiteController
{
    public function actionIndex(): Response
    {
        return new Response('Index page');
    }

    public function actionAbout(): Response
    {
        return new Response('About page');
    }
}
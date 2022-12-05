<?php

require_once 'loader/autoloader.php';
$router = new Router([
    new Route(
        '/',
        function ($context) {
            return Viewer::view('main/main.php', $context);
        }
    ),

    new Route(
        '/home',
        function ($context) {
            return Viewer::view('main/main.php', $context);
        }
    ),
    new Route('/about', function ($context) {
        return Viewer::view('main/aboutus.php', $context);
    }),

    new Route('/contactus', function ($context) {
        return Viewer::view('main/contactpage.php', $context);
    }),

    new Route('/awards', function ($context) {
        return Viewer::view('main/awardlist.php', $context);
    }),

    new Route('/adminauth', function ($context) {
        return Viewer::view('main/firm/login.php', $context);
    }),
    new Route('/adminhome', function ($context) {
        return Viewer::view('main/firm/main.php', $context);
    }),

    new Route('/admin', function ($context) {
        return Viewer::view('main/firm/main.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),

    new Route('/addpractice', function ($context) {
        return Viewer::view('main/firm/newpractice.php', $context);
    }),

    new Route('/addawards', function ($context) {
        return Viewer::view('main/firm/newawards.php', $context);
    }),

    new Route('/addtestimoney', function ($context) {
        return Viewer::view('main/firm/newtest.php', $context);
    }),

    new Route('/addslider', function ($context) {
        return Viewer::view('main/firm/slidera.php', $context);
    }),

    new Route('/editceo', function ($context) {
        return Viewer::view('main/firm/newceo.php', $context);
    }),

    new Route('/editabout', function ($context) {
        return Viewer::view('main/firm/newabout.php', $context);
    }),

    new Route('/addattorney', function ($context) {
        return Viewer::view('main/firm/newattorney.php', $context);
    }),

    new Route('/editcontact', function ($context) {
        return Viewer::view('main/firm/newcontact.php', $context);
    }),

    new Route('/profile', function ($context) {
        return Viewer::view('main/firm/newprofile.php', $context);
    }),

    new Route('/appname', function ($context) {
        return Viewer::view('main/firm/newappname.php', $context);
    }),

    new Route('/appsettings', function ($context) {
        return Viewer::view('main/firm/newappname.php', $context);
    }),

    new Route('/applogo', function ($context) {
        return Viewer::view('main/firm/newlogo.php', $context);
    }),

    new Route('/social', function ($context) {
        return Viewer::view('main/firm/newsocial.php', $context);
    }),

    new Route('/newadmin', function ($context) {
        return Viewer::view('main/firm/newadmin.php', $context);
    }),

    new Route('/adminlogout', function ($context) {
        return Viewer::view('main/firm/logout.php', $context);
    }),

    new Route('/viewsliders', function ($context) {
        return Viewer::view('main/firm/vslide.php', $context);
    }),

    new Route('/viewpractices', function ($context) {
        return Viewer::view('main/firm/vpractice.php', $context);
    }),

    new Route('/viewawards', function ($context) {
        return Viewer::view('main/firm/vawards.php', $context);
    }),

    new Route('/Viewtestimoney', function ($context) {
        return Viewer::view('main/firm/vtestimony.php', $context);
    }),

    new Route('/viewpractices', function ($context) {
        return Viewer::view('main/firm/vpractice.php', $context);
    }),

    new Route('/viewattorney', function ($context) {
        return Viewer::view('main/firm/vattorney.php', $context);
    }),

    new Route('/viewadmins', function ($context) {
        return Viewer::view('main/firm/vadmin.php', $context);
    }),

    new Route('/attorney', function ($context) {
        return Viewer::view('main/attornies.php', $context);
    }),

    new Route('/areas/{id}', function ($context) {
        return Viewer::view('main/singlep.php', $context);
    }),

    new Route('/viewattorney/{id}', function ($context) {
        return Viewer::view('main/singlea.php', $context);
    }),
]);
$router->launch();

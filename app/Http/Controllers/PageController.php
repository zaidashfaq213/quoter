<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('frontend.about');
    }

    /**
     * Display the services page
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        return view('frontend.services');
    }

    /**
     * Display the contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Display the explore kitchen page
     *
     * @return \Illuminate\View\View
     */
    public function exploreKitchen()
    {
        return view('pages.explore-kitchen');
    }

    /**
     * Display the order comments page
     *
     * @return \Illuminate\View\View
     */
    public function orderComments()
    {
        return view('pages.order-comments');
    }

    /**
     * Display the max storage page
     *
     * @return \Illuminate\View\View
     */
    public function maxStorage()
    {
        return view('pages.max-storage');
    }

    /**
     * Display the wardrobes page
     *
     * @return \Illuminate\View\View
     */
    public function wardrobes()
    {
        return view('pages.wardrobes');
    }

    /**
     * Display the help & guides page
     *
     * @return \Illuminate\View\View
     */
    public function helpGuides()
    {
        return view('pages.help-guides');
    }

    /**
     * Display the design service page
     *
     * @return \Illuminate\View\View
     */
    public function designService()
    {
        return view('pages.design-service');
    }
}

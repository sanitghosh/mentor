<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FrontendController extends BaseController
{
    public function index()
    {
        return view('homepage');
    }
    public function about()
    {
        return view('about');
    }
    public function courses()
    {
        return view('courses');
    }
    public function trainers()
    {
        return view('trainers');
    }
    public function events()
    {
        return view('events');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function contact()
    {
        return view('contact');
    }
    public function coursedata(){
        return view('coursedetails');
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
            $data['PageTitle'] = 'Home Page';
            $data['content'] = view('pages/main');
           // $HomeModel = new HomeModel();
           // $record = $HomeModel->where("page_slug_url='Home'")->first();
           // $data['PageTitle'] =$record['page_title']?$record['page_title']:'';
          //  $data['PageMetaDescription']=$record['meta_description']?$record['meta_description']:'';
           // $data['PageMetaKeyword']=$record['meta_keyword']?$record['meta_keyword']:'';
            // Load the index view with the header, footer, and main content
            return view('index', $data);
        }
        public function mentors(): string
        {
            $data['PageTitle'] = 'Home Page';
            $data['content'] = view('pages/mentors');
    
            return view('index', $data);
        }
        public function contact_us(): string
        {
            $data['PageTitle'] = 'Contact Us Page';
            $data['content'] = view('pages/contact');
    
            return view('index', $data);
        }
        public function events(): string
        {
            $data['PageTitle'] = 'Events Page';
            $data['content'] = view('pages/events');
    
            return view('index', $data);
        }
         
        public function about_us(): string
        {
            $data['PageTitle'] = 'About Us Page';
            $data['content'] = view('pages/about-us');
    
            return view('index', $data);
        }
        public function what_we_do(): string
        {
            $data['PageTitle'] = 'What We Do Page';
            $data['content'] = view('pages/what-we-do');
    
            return view('index', $data);
        }
        public function startups(): string
        {
            $data['PageTitle'] = 'Startups Page';
            $data['content'] = view('pages/startups');
    
            return view('index', $data);
        }
    
        public function programs(): string
        {
            $data['PageTitle'] = 'Programs Page';
            $data['content'] = view('pages/programs');
    
            return view('index', $data);
        }
        public function facilities(): string
        {
            $data['PageTitle'] = 'Facilities Page';
            $data['content'] = view('pages/facilities');
    
            return view('index', $data);
        }
        public function arambh(): string
        {
            $data['PageTitle'] = 'National Level Entrepreneurship Competition: ARAMBH Season-1';
            $data['content'] = view('pages/arambh');
    
            return view('index', $data);
        }
        public function startup_2023(): string
        {
            $data['PageTitle'] = 'Festival of Start-up 2023';
            $data['content'] = view('pages/startup_2023');
    
            return view('index', $data);
        }
        public function event_e_summit(): string
        {
            $data['PageTitle'] = 'IIT Bombay 2024 – E-Summit';
            $data['content'] = view('pages/event-e-summit');
    
            return view('index', $data);
        }
        public function event_t_hub(): string
        {
            $data['PageTitle'] = 'Visit to - T-Hub';
            $data['content'] = view('pages/event-t-hub');
    
            return view('index', $data);
        }
        
    
}

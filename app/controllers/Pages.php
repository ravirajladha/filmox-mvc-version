<?php
class Pages extends Controller
{
        
        public function about(){
            $this->view('pages/about');
        }
        public function contact(){
            $this->view('pages/contact');
        }
        // public function services(){
        //     $this->view('pages/services');
        // }

        public function index(){
            $this->view('pages/index');
        }

        public function copy_right_policy(){
            $this->view('pages/copy_right_policy');
        }

        public function privacy_policy(){
            $this->view('pages/privacy_policy');
        }
        public function terms_condition(){
            $this->view('pages/terms_condition');
        }
        
        
        }
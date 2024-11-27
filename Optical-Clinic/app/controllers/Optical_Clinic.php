<?php

class OpticalClinic extends Controller {

    public function index() {
        // Load the homepage
        $this->load->view('template', ['title' => 'Welcome']);
    }

    public function appointments() {
        $this->load_view('appointments', 'Appointments');
    }

    public function prescriptions() {
        $this->load_view('prescriptions', 'Prescriptions');
    }

    public function frames() {
        $this->load_view('frames', 'Frames');
    }

    public function profile() {
        $this->load_view('profile', 'Profile');
    }

    private function load_view($view, $title) {
        $data['title'] = $title;
        $data['content'] = $this->load->view("optical/$view", [], true);
        $this->load->view('template', $data);
    }
}

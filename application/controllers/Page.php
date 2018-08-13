<?php

if (!defined('BASEPATH'))
    exit('Hacking Attempt: Get out of the system ..!');

class Page extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['contact'] = $this->contact_model->index();
        $data['banners'] = $this->banners_model->index();

        $data['article'] = $this->article_model->latest_about();
        $data['news'] = $this->news_model->latest_news();
        $data['slider'] = $this->slider_model->index();
        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function contact() {
        $data['contact'] = $this->contact_model->index();
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }

    // Online feedback
    public function contactadd() {
        $message = $this->input->post('comments') . '<br/> Contact From <br/>' .
                $this->input->post('name') . '<br/>' .
                $this->input->post('phone');

        $contact = $this->contact_model->index();

        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to($contact->email, $contact->company_name);
        $this->email->subject("Contact via website");
        $this->email->message($message);

        if ($this->email->send()) {
            $this->session->set_tempdata("msg", "<span style='color:green'> Successfully submitted. </span>", 5);
        } else {
            $this->session->set_tempdata("msg", "<span style='color:red'> Submission fail. Please try again ! </span>", 5);
        }
        redirect('page/contact');
    }
    public function about($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['article'] = $this->article_model->get_by_id($id);
        $this->load->view('header', $data);
        $this->load->view('about');
        $this->load->view('footer');
    }
    public function news_details($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['news_details'] = $this->news_model->get_by_id($id);
        $this->load->view('header', $data);
        $this->load->view('news-details-one');
        $this->load->view('footer');
    }

    public function all_news() {
        $data['contact'] = $this->contact_model->index();
        $data['news'] = $this->news_model->index();
        $this->load->view('header', $data);
        $this->load->view('news-details-two');
        $this->load->view('footer');
    }

    public function aboutus($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['aboutus'] = $this->aboutus_model->get_by_id($id);
        $data['id'] = $id;
        if (!$data['aboutus']) {
            redirect(base_url());
        }
        $this->load->view('header', $data);
        $this->load->view('management');
        $this->load->view('footer');
    }

    public function coreprograms($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['coreprograms'] = $this->coreprograms_model->get_by_id($id);
        $data['id'] = $id;
        if (!$data['coreprograms']) {
            redirect(base_url());
        }
        $this->load->view('header', $data);
        $this->load->view('emergency-relief-and-rehabilitation-activities');
        $this->load->view('footer');
    }

    public function membership($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['membership'] = $this->membership_model->get_by_id($id);
        $data['id'] = $id;
        if (!$data['membership']) {
            redirect(base_url());
        }
        $this->load->view('header', $data);
        $this->load->view('affiliated-member');
        $this->load->view('footer');
    }

    public function photo() {
        $data['contact'] = $this->contact_model->index();

        $data['photo'] = $this->album_model->get_all("Photo");
        $this->load->view('header', $data);
        $this->load->view('photo');
        $this->load->view('footer');
    }

    public function photo_details($album_id = NULL) {
        $data['contact'] = $this->contact_model->index();

        $data['photo'] = $this->gallery_model->get_all($album_id);
        $this->load->view('header', $data);
        $this->load->view('photo_details');
        $this->load->view('footer');
    }

    public function video() {
        $data['contact'] = $this->contact_model->index();

        $data['video'] = $this->album_model->get_all("Video");
        $this->load->view('header', $data);
        $this->load->view('video');
        $this->load->view('footer');
    }

    public function video_details($album_id = NULL) {
        $data['contact'] = $this->contact_model->index();

        $data['video'] = $this->gallery_model->get_all($album_id);
        $this->load->view('header', $data);
        $this->load->view('video_details');
        $this->load->view('footer');
    }

    public function year_ways($id = NULL) {
        $data['contact'] = $this->contact_model->index();
        $data['article'] = $this->article_model->get_by_id($id);
        $this->load->view('header', $data);
        $this->load->view('year-ways');
        $this->load->view('footer');
    }

}

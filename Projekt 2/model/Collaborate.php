<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Collaborate extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();

        // Load form validation library
        $this->load->library('form_validation');
    }
    public function index() {
        $this->load->view('elements/header');
        $this->load->view('collabform');
        $this->load->view('elements/footer');

        if ($this->uri->segment(3, 0) === "done") {
            $this->load->view("elements/sweet_alert");
        }
    }

    public function collab() {
        $data = $formData = array();

        // If contact request is submitted
        if ($this->input->post('contactSubmit')) {

            // Get the form data
            $formData = $this->input->post();

            // Form field validation rules
            $this->form_validation->set_rules('first_name', 'Krstné meno', 'required');
            $this->form_validation->set_rules('last_name', 'Priezvisko', 'required');
            $this->form_validation->set_rules('birth', 'Dátum narodenia', 'required');
            $this->form_validation->set_rules('street', 'Ulica', 'required');
            $this->form_validation->set_rules('city', 'Mesto', 'required');
            $this->form_validation->set_rules('country', 'krajina', 'required');
            $this->form_validation->set_rules('zip', 'PSČ', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('number', 'Telefónne číslo', 'required');
            $this->form_validation->set_rules('instagram', '@ Instagram', 'required');
            $this->form_validation->set_rules('other', 'Iné profily');
            $this->form_validation->set_rules('message', 'Správa', 'required');
//            $this->form_validation->set_rules('photo', 'Upload photo', 'required');

            // Validate submitted form data
            if ($this->form_validation->run() == true) {

                // Define email data
                $mailData = array(
                    'first_name' => $formData['first_name'],
                    'last_name' => $formData['last_name'],
                    'birth' => $formData['birth'],
                    'street' => $formData['street'],
                    'city' => $formData['city'],
                    'country' => $formData['country'],
                    'zip' => $formData['zip'],
                    'email' => $formData['email'],
                    'number' => $formData['number'],
                    'instagram' => $formData['instagram'],
                    'other' => $formData['other'],
                    'message' => $formData['message']
//                    'photo' => $formData['photo']
                );

                // Send an email to the site admin
                $send = $this->sendEmail($mailData);

                // Check email sending status
                if ($send) {
                    // Unset form data
                    $formData = array();

                    $data['status'] = array(
                        'type' => 'success',
                        'msg' => 'Your contact request has been submitted successfully.'
                    );
                } else {
                    $data['status'] = array(
                        'type' => 'error',
                        'msg' => 'Some problems occured, please try again.'
                    );
                }
            }
        }

        // Pass POST data to view
        $data['postData'] = $formData;

        // Pass the data to view
//        $this->load->view('elements/header');
//        $this->load->view('model_form', $data);
//        $this->load->view('elements/footer');
        //redirect
        redirect(base_url('model_form/index/done'));
    }
    private function sendEmail($mailData) {
        // Load the email library
        $this->load->library('email');
//        $this->load->library('upload');

        // Mail config
        $to = 'tatraja.art@gmail.com';
        $from = 'tatraja@apexfuture.tech';
        $fromName = 'Collab registracia';
        $mailSubject = 'Contact Request Submitted by ' . $mailData['first_name'] . $mailData['last_name'];
//        $file_data = $this->upload_file();
        // Mail content
        $mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>First Name: </b>' . $mailData['first_name'] . '</p>
            <p><b>Last Name: </b>' . $mailData['last_name'] . '</p>
            <p><b>Birth: </b>' . $mailData['birth'] . '</p>
            <p><b>Street: </b>' . $mailData['street'] . '</p>
            <p><b>Street: </b>' . $mailData['city'] . '</p>
            <p><b>Street: </b>' . $mailData['zip'] . '</p>
            <p><b>Email: </b>' . $mailData['email'] . '</p>
            <p><b>Number: </b>' . $mailData['number'] . '</p>
            <p><b>Instagram: </b>' . $mailData['instagram'] . '</p>
            <p><b>Other: </b>' . $mailData['other'] . '</p>
            <p><b>Message: </b>' . $mailData['message'] . '</p>

        ';

        $config['mailtype'] = 'html';
        $config['protocol'] = 'sendmail';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'UTF-8';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);
        $this->email->to($to);
        $this->email->from($from, $fromName);
        $this->email->subject($mailSubject);
        $this->email->message($mailContent);

        // Send email & return status
        return $this->email->send() ? true : false;
    }

}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mdashboard', 'model');

        # Check Session
        // if (empty($this->session->userdata('id_user'))) {
        //     redirect('auth');
        // }
    }

    public function index()
    {

        $data['title'] = 'Dashboard';

        $data['radio'] = $this->model->getRadioList();

        $page = array(
            'header'        => $this->load->view('templates/header', $data, TRUE),
            'sidebar'       => $this->load->view('templates/sidebar', $data, TRUE),
            'main_content'  => $this->load->view('contents/dashboard/dashboard', $data, TRUE),
            'footer'        => $this->load->view('templates/footer', $data, TRUE),
            // 'modals'        => array(
            //     'view' => $this->load->view('contents/dashboard/view', $data, TRUE)
            // ),
            'JS'            => array(
                'dashboard_js' => 'dashboard/dashboard_js.js'
            )
        );

        $this->load->view('templates/layout', $page);
    }

    public function details()
    {

        $radio_id = $this->uri->segment(3);

        $data['title'] = 'Details Radio';

        $data['alarm_list']   = $this->model->getAlarmList();
        $data['detail_radio'] = $this->model->getDetailsRadio($radio_id);

        // var_dump($data['detail_radio']);
        // die;

        $page = array(
            'header'        => $this->load->view('templates/header', $data, TRUE),
            'sidebar'       => $this->load->view('templates/sidebar', $data, TRUE),
            'main_content'  => $this->load->view('contents/dashboard/details_radio', $data, TRUE),
            'footer'        => $this->load->view('templates/footer', $data, TRUE),
            // 'modals'        => array(
            //     'view' => $this->load->view('contents/dashboard/view', $data, TRUE)
            // ),
            'JS'            => array(
                'dashboard_js' => 'dashboard/dashboard_js.js'
            )
        );

        $this->load->view('templates/layout', $page);
    }
}

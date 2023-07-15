<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mst_alarm_information extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mmst_alarm_information', 'model');

        # Check Session
        // if (empty($this->session->userdata('id_user'))) {
        //     redirect('auth');
        // }
    }

    public function index()
    {

        $data['title'] = 'Master Alarm Name';

        $page = array(
            'header'        => $this->load->view('templates/header', $data, TRUE),
            'sidebar'       => $this->load->view('templates/sidebar', $data, TRUE),
            'main_content'  => $this->load->view('contents/mst_alarm_information/mst_alarm_information', $data, TRUE),
            'footer'        => $this->load->view('templates/footer', $data, TRUE),
            'modals'        => array(
                'add'    => $this->load->view('contents/mst_alarm_information/add', $data, TRUE),
                'delete' => $this->load->view('contents/mst_alarm_information/delete', $data, TRUE)
            ),
            'JS'            => array(
                'datatable_js' => 'mst_alarm_information/datatable.js',
                'form_js'      => 'mst_alarm_information/form.js',
            )
        );

        $this->load->view('templates/layout', $page);
    }

    public function add()
    {

        $form = array();
        parse_str($this->input->post('form'), $form);

        $this->_validate($form);

        $payload = array(
            'alarm_name'     => $form['alarm_name'],
            'created_by'     => 10
            // 'created_by'            => $this->session->userdata('user_login_id')
        );

        if ($form['alarm_id'] == '') :
            $action = 'add.';
            $res_query = $this->model->create($payload);
        else :
            $action = 'updated.';
            $res_query = $this->model->update($payload, $form['alarm_id']);
        endif;

        #If approval status is 2 then user is rejected
        $notification = array(
            'status'  => $res_query,
            'action'  => $action,
        );
        $this->_show_notification($notification);
    }

    public function view()
    {
        $id     = $this->input->post('id');
        $query  = $this->model->view($id);
        echo json_encode($query);
    }

    public function delete()
    {

        $id         = $this->input->post('id');
        $action     = 'delete';
        $res_query  = $this->model->delete($id);

        $notification = array(
            'status'  => $res_query,
            'action'  => $action,
        );
        $this->_show_notification($notification);
    }

    public function create_datatable()
    {

        $order_col  = $this->input->post('order[0][column]');

        $data = array(
            'iduser'     => $this->session->userdata('id'),
            'order_col'  => $this->input->post('order[0][column]'),
            'order_sort' => $this->input->post('order[0][dir]'),
            'order_name' => $this->input->post("columns[$order_col][data]")
        );

        $this->model->ignitedDatatable($data);
    }

    private function _validate($form)
    {

        $required             = array();
        $validate             = array();
        $validate['field']    = array();
        $validate['message']  = array();
        $validate['status']   = TRUE;

        $is_not_required = array(
            'alarm_id' => $form['alarm_id'],
        );

        foreach ($form as $key => $val) :
            # Jika ada kolom yg tidak mandatory maka kolom tsb tidak perlu di validasi
            if (array_key_exists($key, $is_not_required)) {
                unset($form[$key]);
                $required = $form;
            }
        endforeach;

        foreach ($required as $key => $value) :
            # Mengubah simbol _ menjadi format tertentu
            $check       = strpos($key, '_');
            // $message  = $check ? str_replace("_", " ", $key) : $key;

            # Memunculkan keterangan error form dan border merah
            if ($value == '') {
                $validate['field'][]   = "$key";
                $validate['message'][] = 'This field is required';
                $validate['status']    = FALSE;
            }
        endforeach;

        /* ======= EXIT Jika status validasi FALSE ======= */
        if ($validate['status'] === FALSE) {
            echo json_encode($validate);
            exit();
        }
    }

    private function _show_notification($notification)
    {

        if ($notification['status']) :
            $response = array(
                'status'     => $notification['status'],
                'title'      => 'Success!',
                'message'    => 'Success! Alarm data is succesfully to ' . $notification['action'],
            );
        else :
            $response = array(
                'status'     => $notification['status'],
                'title'      => 'Error!',
                'message'    => 'Sorry, Alarm data is failed to ' . $notification['action'],
            );
        endif;

        echo json_encode($response);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmst_alarm_information extends CI_Model
{

    public function create($payload)
    {
        return $this->db->insert('mst_alarm_information', $payload);
    }

    public function update($payload, $alarm_id)
    {
        return $this->db
            ->set($payload)
            ->where('mst_alarm_information_id', $alarm_id)
            ->update('mst_alarm_information');
    }

    public function view($alarm_id)
    {
        return $this->db
            ->where('mst_alarm_information_id', $alarm_id)
            ->get('mst_alarm_information')
            ->row_array();
    }

    public function delete($id)
    {
        return $this->db
            ->set('is_delete', true)
            ->where('mst_alarm_information_id', $id)
            ->update('mst_alarm_information');
    }

    public function ignitedDatatable($input)
    {

        $this->datatables
            ->add_column('nomor', '$1', 'mst_alarm_information_id')
            ->select('mst_alarm_information_id, alarm_name, created_date')
            ->from('mst_alarm_information')
            ->where('is_delete = 0');

        $this->db->order_by($input['order_name'], $input['order_sort']);

        print_r($this->datatables->generate());
    }
}

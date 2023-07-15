<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmst_radio_frequency extends CI_Model
{

    public function create($payload)
    {
        return $this->db->insert('mst_radio_frequency', $payload);
    }

    public function update($payload, $id_radio_frequency)
    {
        return $this->db
            ->set($payload)
            ->where('mst_radio_frequency_id', $id_radio_frequency)
            ->update('mst_radio_frequency');
    }

    public function view($id_radio_frequency)
    {
        return $this->db
            ->where('mst_radio_frequency_id', $id_radio_frequency)
            ->get('mst_radio_frequency')
            ->row_array();
    }

    public function delete($id)
    {
        return $this->db
            ->set('is_delete', true)
            ->where('mst_radio_frequency_id', $id)
            ->update('mst_radio_frequency');
    }

    public function ignitedDatatable($input)
    {

        $this->datatables
            ->add_column('nomor', '$1', 'mst_radio_frequency_id')
            ->select('mst_radio_frequency_id, radio_number, station_no, station_display_name, type_name, serial_number, frequency_channel, 
            ip_address, subnet_mask, default_gateway, tcp_port, dsc_unit_address, created_date')
            ->from('mst_radio_frequency')
            ->where('is_delete = 0');

        $this->db->order_by($input['order_name'], $input['order_sort']);

        print_r($this->datatables->generate());
    }
}

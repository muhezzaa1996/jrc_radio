<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mdashboard extends CI_Model
{

    public function getRadioList()
    {
        return $this->db
            ->where('is_delete', FALSE)
            ->get('mst_radio_frequency')
            ->result_array();
    }

    public function getDetailsRadio($radio_id)
    {
        return $this->db
            ->where('mst_radio_frequency_id', $radio_id)
            ->where('is_delete', FALSE)
            ->get('mst_radio_frequency')
            ->result_array();
    }

    public function getAlarmList()
    {
        return $this->db
            ->where('is_delete', FALSE)
            ->get('mst_alarm_information')
            ->result_array();
    }
}

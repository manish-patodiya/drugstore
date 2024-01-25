<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Doctors extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Count doctor
    public function count_doctor()
    {
        return $this->db->count_all("doctor_information");
    }

    public function getDoctorList($postData = null)
    {

        $response = array();

        ## Read value
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value

        ## Search
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " (doctor_name like '%" . $searchValue . "%') ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('doctor_information');
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('doctor_information');
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select("*");
        $this->db->from('doctor_information');
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $this->db->order_by($columnName, $columnSortOrder);
        $this->db->limit($rowperpage, $start);
        $records = $this->db->get()->result();
        $data = array();
        $sl = 1;

        foreach ($records as $record) {
            $button = '';
            $base_url = base_url();
            $jsaction = "return confirm('Are You Sure ?')";

            if ($this->permission1->method('profit_loss', 'read')->access()) {
                $button .= ' <a href="' . $base_url . 'Admin_dashboard/profit_doctorwise_form" class="btn btn-sm btn-success ">View Sale</a>';
            }
            if ($this->permission1->method('manage_doctor', 'update')->access()) {
                $button .= ' <a href="' . $base_url . 'Cdoctor/doctor_update_form/' . $record->id . '" class="btn btn-sm btn-info"  data-placement="left" title="' . display('update') . '">Edit</a>';
            }
            if ($this->permission1->method('manage_doctor', 'delete')->access()) {
                $button .= ' <a href="' . $base_url . 'Cdoctor/doctor_delete/' . $record->id . '" class="btn btn-sm btn-danger " onclick="' . $jsaction . '">Delete</a>';
            }

            $data[] = array(
                'sl' => $sl,
                'doctor_name' => $record->doctor_name,
                'button' => $button,
            );
            $sl++;
        }

        ## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecordwithFilter,
            "iTotalDisplayRecords" => $totalRecords,
            "aaData" => $data,
        );

        return $response;
    }

    //Retrieve doctor Edit Data
    public function retrieve_doctor_editdata($doc_id)
    {
        $this->db->select('*');
        $this->db->from('doctor_information');
        $this->db->where('id', $doc_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    // Delete doctor Item
    public function delete_doctor($doc_id)
    {
        $this->db->where('id', $doc_id);
        $this->db->delete('doctor_information');

        $this->db->select('*');
        $this->db->from('doctor_information');
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $json_doctor[] = array('label' => $row->doctor_name, 'value' => $row->id);
        }
        $cache_file = './my-assets/js/admin_js/json/doctor.json';
        $doctorList = json_encode($json_doctor);
        file_put_contents($cache_file, $doctorList);
        return true;
    }

    //Update Doctor
    public function update_doctor($data, $doctor_id)
    {
        $this->db->where('id', $doctor_id);
        $this->db->update('doctor_information', $data);

        $this->db->select('*');
        $this->db->from('doctor_information');
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $json_doctor[] = array('label' => $row->doctor_name, 'value' => $row->id);
        }
        $cache_file = './my-assets/js/admin_js/json/doctor.json';
        $doctorList = json_encode($json_doctor);
        file_put_contents($cache_file, $doctorList);
        return true;
    }

    //all doctor List
    public function all_doctor_list()
    {
        $this->db->select('*');
        $this->db->from('doctor_information');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        return false;
    }
}
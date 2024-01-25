<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hrm_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //Count designation
    public function count_designation() {
        return $this->db->count_all("designation");
    }
public function create_designation($data = []){
return $this->db->insert('designation',$data);
}

    //designation List
    public function designation_list() {
        $this->db->select('*');
        $this->db->from('designation');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }


    //Retrieve designation Edit Data
    public function designation_editdata($id) {
        $this->db->select('*');
        $this->db->from('designation');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }


    //Update Categories
    public function update_designation($data = []) {
        $this->db->where('id', $data['id']);
        $this->db->update('designation', $data);
        return true;
    }


    // Delete designation Item
    public function delete_designation($id) {
        $this->db->where('id', $id);
        $this->db->delete('designation');
        return true;
    }
 public function designation_dropdown(){
        $this->db->select('*');
        $this->db->from('designation');
        $query=$this->db->get();
        $data=$query->result();
        $list[''] = display('select_option');
        if(!empty($data)){
            foreach ($data as  $value) {
                $list[$value->id]=$value->designation;
            }
        }
        return $list;
    }
//=========================== employeee data start ===========================
    // create employee
   public function create_employee($data = []){
     $this->db->insert('employee_history',$data);
     $id =$this->db->insert_id();
     $coa = $this->headcode();
           if($coa->HeadCode!=NULL){
                $headcode=$coa->HeadCode+1;
           }else{
                $headcode="502040001";
            }
    $c_acc=$id.'-'.$data['first_name'].''.$data['last_name'];
  $createby=$this->session->userdata('user_id');
  $createdate=date('Y-m-d H:i:s');
    $employee_coa = [
             'HeadCode'         => $headcode,
             'HeadName'         => $c_acc,
             'PHeadName'        => 'Employee Ledger',
             'HeadLevel'        => '3',
             'IsActive'         => '1',
             'IsTransaction'    => '1',
             'IsGL'             => '0',
             'HeadType'         => 'L',
             'IsBudget'         => '0',
             'IsDepreciation'   => '0',
             'DepreciationRate' => '0',
             'CreateBy'         => $createby,
             'CreateDate'       => $createdate,
        ];
        $this->db->insert('acc_coa',$employee_coa);
        return true;

   }
   // Employee list
   public function employee_list(){
       $this->db->select('a.*,b.designation');
        $this->db->from('employee_history a');
        $this->db->join('designation b','a.designation = b.id');
        $this->db->order_by('a.id', 'DESC');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
   }
   // Employee Edit data
   public function employee_editdata($id){
        $this->db->select('*');
        $this->db->from('employee_history');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
   }

     public function headcode(){
        $query=$this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='3' And HeadCode LIKE '50204000%'");
        return $query->row();

    }
// update employee
    public function update_employee($data = [],$headname){
        $this->db->where('id', $data['id']);
        $this->db->update('employee_history',$data);
     $id = $data['id'];
    $up_headname = $id.'-'.$data['first_name'].''.$data['last_name'];
    $updatedby   = $this->session->userdata('user_id');
    $updateddate = date('Y-m-d H:i:s');
    $employee_coa = [
             'HeadName'         => $up_headname,
             'UpdateBy'         => $updatedby,
             'UpdateDate'       => $updateddate,
        ];
        $this->db->where('HeadName', $headname);
        $this->db->update('acc_coa',$employee_coa);
        return true;
    }
    //delete employee
        public function delete_employee($id) {
            $emplyeeinfo = $this->db->select('first_name,last_name')->from('employee_history')->where('id',$id)->get()->row();
            $headname = $id.'-'.$emplyeeinfo->first_name.''.$emplyeeinfo->last_name;
            $this->db->where('HeadName', $headname);
        $this->db->delete('acc_coa');
        //employee history
        $this->db->where('id', $id);
        $this->db->delete('employee_history');
        return true;
    }

      public function employee_details($id){
        $this->db->select('a.*,b.designation');
        $this->db->from('employee_history a');
        $this->db->join('designation b','a.designation = b.id');
        $this->db->where('a.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
   }
}

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Laccounting {

    public function coa_form() {

         $CI = & get_instance();
         $CI->load->model('Accounts_model');
        // $account = $CI->Accounts_model->account_list("110", "0");
        // $data = array(
        //     'title' => display('create_accounts'),
        //     'account' => $account,
        // );
         $data['title'] = 'Chart of Account';

        $account = $CI->parser->parse('newaccount/coa',$data,true);
        return $account;
    }
    public function treeview_form($id=null){
         $CI = & get_instance();
         $CI->load->model('Accounts_model');
           $data['title'] = display('accounts_form');
           $id      = ($id ?$id :2);
           $data['id'] =($id ?$id :2);

        $data = array(
            'userList' => $CI->Accounts_model->get_userlist(),
            'userID' => set_value('userID'),
        );

        $treeinfo = $CI->parser->parse('newaccount/treeview',$data,true);
        return $treeinfo;

    }
}

?>
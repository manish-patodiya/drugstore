<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_synchronizer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array(
            'synchronizer/SyncData',
            'synchronizer/SyncManager',
        ));
        $this->load->model(array('synchronizer_model'));

        $this->auth->check_admin_auth();
    }

    public function form($id = null)
    {
        $data['title'] = display('ftp_setting');
        #----------------------------------#
        $this->form_validation->set_rules('hostname', display('hostname'), 'required|max_length[100]');
        $this->form_validation->set_rules('username', display('username'), 'required|max_length[100]');
        $this->form_validation->set_rules('password', display('password'), 'required|max_length[100]');
        $this->form_validation->set_rules('port', display('ftp_port'), 'required|max_length[5]|numeric');
        $this->form_validation->set_rules('debug', display('ftp_debug'), 'required|max_length[100]');
        $this->form_validation->set_rules('project_root', display('project_root'), 'required|max_length[100]');
        #----------------------------------#
        $data['ftp'] = (object) $ftpData = array(
            'hostname' => $this->input->post('hostname'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'port' => $this->input->post('port'),
            'debug' => $this->input->post('debug'),
            'project_root' => $this->input->post('project_root'),
        );
        #----------------------------------#
        if ($this->form_validation->run()) {
            //already exists
            if ($this->synchronizer_model->check_exists()) {
                if ($this->synchronizer_model->update($ftpData)) {
                    $this->session->set_flashdata('success', display('successfully_updated'));
                } else {
                    $this->session->set_flashdata('error', display('please_try_again'));
                }
            } else {
                if ($this->synchronizer_model->create($ftpData)) {
                    $this->session->set_flashdata('success', display('save_successfully'));
                } else {
                    $this->session->set_flashdata('error', display('please_try_again'));
                }
            }
            redirect('data_synchronizer/form');
        } else {

            $ftp = [];
            if ($this->synchronizer_model->check_exists()) {
                $ftp = $this->synchronizer_model->read();
            }

            $data = array(
                'title' => "Synchronizer Setting",
                'hostname' => !empty($ftp)?$ftp[0]['hostname']:"",
                'username' => !empty($ftp)?$ftp[0]['username']:"",
                'password' => !empty($ftp)?$ftp[0]['password']:"",
                'port' => !empty($ftp)?$ftp[0]['port']:"",
                'debug' => !empty($ftp)?$ftp[0]['debug']:"",
                'project_root' => !empty($ftp)?$ftp[0]['project_root']:"",
            );

            $productList = $this->parser->parse('synchronizer/setting', $data, true);
            $this->template->full_admin_html_view($productList);
        }
    }

    public function synchronize()
    {
        $data['title'] = "Data Synchronizer";
        $data['module'] = "dashboard";
        $data['page'] = "synchronizer/synchronizer";
        $data['internet'] = $this->checkConnection();
        $data['incoming'] = $this->checkIncoming();
        $data['outgoing'] = $this->checkOutgoing();

        $productList = $this->parser->parse('synchronizer/synchronizer', $data, true);
        $this->template->full_admin_html_view($productList);
    }

    public function ftp_upload()
    {
        if ($this->synchronizer_model->check_exists()) {

            $ftp = $this->synchronizer_model->read();

            $config = array(
                'title' => "Synchronizer Setting",
                'hostname' => $ftp[0]['hostname'],
                'username' => $ftp[0]['username'],
                'password' => $ftp[0]['password'],
                'port' => $ftp[0]['port'],
                'debug' => $ftp[0]['debug'],
                'project_root' => $ftp[0]['project_root'],
            );

            if ($this->syncmanager->upload($config)) {
                $data['success'] = display('upload_successfully');
            } else {
                $data['error'] = display('unable_to_upload_file_please_check_configuration');
            }
        } else {
            $data['error'] = display('please_configure_synchronizer_settings');
        }
        echo json_encode($data);
    }

    public function ftp_download()
    {
        if (!$this->checkIncoming()) {

            if ($this->synchronizer_model->check_exists()) {
                $ftp = $this->synchronizer_model->read();

                $config = array(
                    'title' => "Synchronizer Setting",
                    'hostname' => $ftp[0]['hostname'],
                    'username' => $ftp[0]['username'],
                    'password' => $ftp[0]['password'],
                    'port' => $ftp[0]['port'],
                    'debug' => $ftp[0]['debug'],
                    'project_root' => $ftp[0]['project_root'],
                );

                if ($this->syncmanager->download($config)) {
                    $data['success'] = display('download_successfully');
                } else {
                    $data['error'] = display('unable_to_download_file_please_check_configuration');
                }
            } else {
                $data['error'] = display('please_configure_synchronizer_settings');
            }

        } else {
            $data['error'] = display('data_import_first');
        }
        echo json_encode($data);
    }

    public function import()
    {
        if ($this->checkIncoming()) {

            if ($this->syncdata->importSQL()) {
                $data['success'] = display('data_import_successfully');
            } else {
                $data['error'] = display('unable_to_import_data_please_check_config_or_sql_file');
            }

        } else {
            $data['error'] = display('download_data_from_server');
        }
        echo json_encode($data);
    }

    /*-----------------------------------------------*/
    /*-----------------------------------------------*/
    /*-----------------------------------------------*/
    /*-----------------------------------------------*/

    public function checkConnection()
    {
        if ($pf = @fsockopen("google.com", 80)) {
            return true;
            fclose($pf);
        } else {
            return false;
        }
    }

    public function checkIncoming()
    {
        if (file_exists('./assets/data/incoming/backup.sql')) {
            return true;
        } else {
            return false;
        }
    }

    public function checkOutgoing()
    {
        if (file_exists('./assets/data/outgoing/backup.sql')) {
            return true;
        } else {
            return false;
        }
    }

}
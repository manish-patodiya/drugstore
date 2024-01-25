<?php
function prd($d)
{
    echo "<pre>";
    print_r($d);
    die;
}

function pr($d)
{
    echo "<pre>";
    print_r($d);
}

function formatDate($d)
{
    return date("d M Y", strtotime($d));
}

function formatAmount($amt)
{
    return number_format($amt, 2, '.', '');
}

function formatQty($qty)
{
    return number_format($qty, 0, '.', ',');
}

function manage_stock($data, $action)
{
    $CI = &get_instance();
    $CI->load->database();
    $CI->load->model('Reports');
    if ($action == 'update') {
        $CI->Reports->update_stock($data);
    } elseif (($action == 'insert')) {
        $CI->Reports->insert_stock($data);
    }
}

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('display')) {

    function display($text = null)
    {
        $ci = &get_instance();
        $ci->load->database();
        $table = 'language';
        $phrase = 'phrase';
        $setting_table = 'web_setting';
        $default_lang = 'english';

        //set language
        $data = $ci->db->get($setting_table)->row();
        if (!empty($data->language)) {
            $language = $data->language;
        } else {
            $language = $default_lang;
        }

        if (!empty($text)) {

            if ($ci->db->table_exists($table)) {

                if ($ci->db->field_exists($phrase, $table)) {

                    if ($ci->db->field_exists($language, $table)) {

                        $row = $ci->db->select($language)
                            ->from($table)
                            ->where($phrase, $text)
                            ->get()
                            ->row();

                        if (!empty($row->$language)) {
                            return $row->$language;
                        } else {
                            return false;
                        }
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

// $autoload['helper'] =  array('language_helper');

/*display a language*/
// echo display('helloworld');

/*display language list*/
// $lang = languageList();
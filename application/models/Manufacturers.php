<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Manufacturers extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //Count manufacturer
    public function count_manufacturer()
    {
        return $this->db->count_all("manufacturer_information");
    }
    //manufacturer List
    public function manufacturer_list()
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->order_by('manufacturer_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // manufacter list info
    public function manufacturer_list_index($per_page, $page)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->order_by('manufacturer_id', 'desc');
        $this->db->limit($per_page, $page);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //manufacturer List For Report
    public function manufacturer_list_report()
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->order_by('manufacturer_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //manufacturer List
    public function manufacturer_list_count()
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->order_by('manufacturer_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }
    //Retrieve company Edit Data
    public function retrieve_company()
    {
        $this->db->select('*');
        $this->db->from('company_information');
        $this->db->limit('1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //manufacturer Search List
    public function manufacturer_search_item($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Selected manufacturer List
    public function selected_product($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_id', $product_id);
        return $query = $this->db->get()->row();
    }
    //Product search item
    public function product_search_item($manufacturer_id, $product_name)
    {
        $query = $this->db->select('*')
            ->from('product_information')
            ->where('manufacturer_id', $manufacturer_id)
            ->like('product_name', $product_name, 'after')
            ->group_by('product_id')
            ->order_by('product_name', 'asc')
            ->limit(15)
            ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //manufacturer product
    public function manufacturer_product($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('manufacturer_id', $manufacturer_id);
        return $query = $this->db->get()->result();
    }
    //Count manufacturer
    public function manufacturer_entry($data)
    {

        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('manufacturer_name', $data['manufacturer_name']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {

            $this->db->insert('manufacturer_information', $data);
            //Data is sending for syncronizing

            $this->db->select('*');
            $this->db->from('manufacturer_information');
            $this->db->where('status', 1);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_product[] = array('label' => $row->manufacturer_name, 'value' => $row->manufacturer_id);
            }
            $cache_file = './my-assets/js/admin_js/json/manufacturer.json';
            $productList = json_encode($json_product);
            file_put_contents($cache_file, $productList);
            return true;
        }
    }
    //Retrieve manufacturer Edit Data
    public function retrieve_manufacturer_editdata($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Update Categories
    public function update_manufacturer($data, $manufacturer_id)
    {
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->update('manufacturer_information', $data);
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('status', 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $json_product[] = array('label' => $row->manufacturer_name, 'value' => $row->manufacturer_id);
        }
        $cache_file = './my-assets/js/admin_js/json/manufacturer.json';
        $productList = json_encode($json_product);
        file_put_contents($cache_file, $productList);
        return true;
    }
    // Delete manufacturer ledger
    public function delete_manufacturer_ledger($manufacturer_id)
    {
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->delete('manufacturer_ledger');
    }
// Delete manufacturer from transection

    // Delete manufacturer from transection

    // Delete manufacturer Item
    public function delete_manufacturer($manufacturer_id)
    {
        $manufacturer_info = $this->db->select('manufacturer_name')->from('manufacturer_information')->where('manufacturer_id', $manufacturer_id)->get()->row();
        $manufacturer_head = $manufacturer_info->manufacturer_name . '-' . $manufacturer_id;
        $this->db->where('HeadName', $manufacturer_head);
        $this->db->delete('acc_coa');

        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->delete('manufacturer_information');

        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('status', 1);
        $query = $this->db->get();
        foreach ($query->result() as $row) {
            $json_product[] = array('label' => $row->manufacturer_name, 'value' => $row->manufacturer_id);
        }
        $cache_file = './my-assets/js/admin_js/json/manufacturer.json';
        $productList = json_encode($json_product);
        file_put_contents($cache_file, $productList);
        return true;
    }
    //Retrieve manufacturer Personal Data
    public function manufacturer_personal_data($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    /// manufacturer person data all
    public function manufacturer_personal_data_all()
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // second
    public function manufacturer_personal_data1()
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Retrieve manufacturer Purchase Data
    public function manufacturer_purchase_data($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('product_purchase');
        $this->db->where(array('manufacturer_id' => $manufacturer_id, 'status' => 1));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //manufacturer Search Data
    public function manufacturer_search_list($cat_id, $company_id)
    {
        $this->db->select('a.*,b.sub_category_name,c.category_name');
        $this->db->from('manufacturers a');
        $this->db->join('manufacturer_sub_category b', 'b.sub_category_id = a.sub_category_id');
        $this->db->join('manufacturer_category c', 'c.category_id = b.category_id');
        $this->db->where('a.sister_company_id', $company_id);
        $this->db->where('c.category_id', $cat_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Supplioer product information
    public function manufacturer_product_sale($manufacturer_id)
    {
        $query = $this->db->select('
								a.product_name,
								a.manufacturer_price,
								b.quantity,
								CAST(sum(b.quantity * b.manufacturer_rate) AS DECIMAL(16,2)) as total_taka,
								c.date
								')

            ->from('product_information a')
            ->join('invoice_details b', 'a.product_id = b.product_id', 'left')
            ->join('invoice c', 'c.invoice_id = b.invoice_id', 'left')
            ->where('a.manufacturer_id', $manufacturer_id)
            ->group_by('c.date')
            ->order_by('c.date')
            ->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    // Second
    public function manufacturer_product_sale1()
    {
        $this->db->select('*');
        $this->db->from('manufacturer_ledger');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //To get certain manufacturer's chalan info by which this company got products day by day
    public function manufacturers_ledger($manufacturer_id, $start, $end)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_ledger');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where(array('date >=' => $start, 'date <=' => $end));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //Retrieve manufacturer Transaction Summary
    public function manufacturers_transection_summary($manufacturer_id, $start, $end)
    {
        $result = array();
        $this->db->select_sum('amount', 'total_credit');
        $this->db->from('manufacturer_ledger');
        $this->db->where(array('d_c' => 'c', 'status' => 1));
        $this->db->where(array('manufacturer_id' => $manufacturer_id, 'date >=' => $start, 'date <=' => $end));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result[] = $query->result_array();
        }

        $this->db->select_sum('amount', 'total_debit');
        $this->db->from('manufacturer_ledger');
        $this->db->where(array('d_c' => 'd', 'status' => 1));
        $this->db->where(array('manufacturer_id' => $manufacturer_id, 'date >=' => $start, 'date <=' => $end));
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result[] = $query->result_array();
        }
        return $result;
    }

    public function manufacturers_transection_summary1()
    {
        $result = array();
        $this->db->select_sum('amount', 'total_credit');
        $this->db->from('manufacturer_ledger');
        $this->db->where(array('d_c' => 'c', 'status' => 1));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result[] = $query->result_array();
        }

        $this->db->select_sum('amount', 'total_debit');
        $this->db->from('manufacturer_ledger');
        $this->db->where(array('d_c' => 'd', 'status' => 1));
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result[] = $query->result_array();
        }
        return $result;
    }
    //Findings a certain manufacturer products sales information
    public function manufacturer_sales_details()
    {
        $manufacturer_id = $this->uri->segment(3);
        $start = $this->uri->segment(4);
        $end = $this->uri->segment(5);

        $this->db->select('
					date,
					product_name,
					product_model,
					product_id,
					quantity,
					manufacturer_rate,
					CAST(quantity*manufacturer_rate AS DECIMAL(16,2) ) as total
				');
        $this->db->from('view_g_sales_abreport');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where(array('date >=' => $start, 'date <=' => $end));
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    ################################################################################################ manufacturer sales details all menu################
    public function manufacturer_sales_details_all($per_page, $page)
    {
        $this->db->select('a.*,
						CAST(a.quantity*a.manufacturer_rate AS DECIMAL(16,2) ) as total,b.*,
					c.date');
        $this->db->from('invoice_details a');
        $this->db->join('invoice c', 'c.invoice_id=a.invoice_id', 'left');
        $this->db->join('product_information b', 'b.product_id=a.product_id', 'left');
        $this->db->order_by('c.date', 'desc');
        $this->db->limit($per_page, $page);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //Findings a certain manufacturer products sales information
    public function manufacturer_sales_details_count($manufacturer_id)
    {
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');

        $this->db->select('a.*,
						CAST(a.quantity*a.manufacturer_rate AS DECIMAL(16,2) ) as total,b.*
					,c.date');
        $this->db->from('invoice_details a');
        $this->db->join('invoice c', 'c.invoice_id=a.invoice_id', 'left');
        $this->db->join('product_information b', 'b.product_id=a.product_id', 'left');
        $this->db->where('b.manufacturer_id', $manufacturer_id);
        if ($from_date != null and $to_date != null) {
            $this->db->where('c.date >', $from_date);
            $this->db->where('c.date <', $to_date);
        }
        $this->db->order_by('c.date', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }
    // manufacturer sales details count menu all
    public function manufacturer_sales_details_count_all()
    {

        $this->db->select('a.*,
						CAST(a.quantity*a.manufacturer_rate AS DECIMAL(16,2) ) as total,b.*
					,c.date');
        $this->db->from('invoice_details a');
        $this->db->join('invoice c', 'c.invoice_id=a.invoice_id', 'left');
        $this->db->join('product_information b', 'b.product_id=a.product_id', 'left');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }

    public function manufacturer_sales_summary($per_page, $page)
    {
        $date = $this->input->post('date');
        $manufacturer_id = $this->uri->segment(3);
        $start = $this->uri->segment(4);
        $end = $this->uri->segment(5);

        $this->db->select('
						date,
						quantity,
						product_name,product_model,
						product_id,
						sum(quantity) as quantity ,
						manufacturer_rate,
						CAST(sum(quantity*manufacturer_rate) AS DECIMAL(16,2)) as total,
					');

        $this->db->from('view_g_sales_abreport');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where(array('date >=' => $start, 'date <=' => $end));
        $this->db->group_by('invoice_id');
        //$this->db->order_by('date','desc');
        $this->db->limit($per_page, $page);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    public function manufacturer_sales_summary_count($manufacturer_id)
    {
        $date = $this->input->post('date');

        $this->db->select('
						date,
						quantity,
						product_name,product_model,
						product_id,
						sum(quantity) as quantity ,
						manufacturer_rate,
						sum(quantity*manufacturer_rate) as total,
					');

        $this->db->from('view_g_sales_abreport');
        $this->db->where('manufacturer_id', $manufacturer_id);
        if ($date != null) {
            $this->db->where('date =', $date);
        }
        $this->db->group_by('product_id,date,manufacturer_rate');
        $this->db->order_by('date', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }

    ################## Ssales & Payment Details ####################
    public function sales_payment_actual($per_page, $page)
    {
        $manufacturer_id = $this->uri->segment(3);
        $start = $this->uri->segment(4);
        $end = $this->uri->segment(5);

        $this->db->select('*');
        $this->db->from('manufacturer_ledger');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where(array('date >=' => $start, 'date <=' => $end));
        $this->db->limit($per_page, $page);
        $this->db->order_by('date');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }

        return false;
    }
    ################## Ssales & Payment Details ####################
    public function sales_payment_actual_count()
    {
        $manufacturer_id = $this->uri->segment(3);

        $start = $this->uri->segment(4);
        $end = $this->uri->segment(5);

        $this->db->select('*');
        $this->db->from('manufacturer_ledger');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where(array('date >=' => $start, 'date <=' => $end));
        $this->db->order_by('date');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }

        return false;
    }
################## total sales & payment information ####################
    public function sales_payment_actual_total()
    {
        $manufacturer_id = $this->uri->segment(3);
        $start = $this->uri->segment(4);
        $end = $this->uri->segment(5);

        $this->db->select_sum('sub_total');
        $this->db->from('sales_actual');
        $this->db->where('manufacturer_id', $manufacturer_id);
        //$this->db->where(array('date >='=>$start , 'date <='=>$end));
        $this->db->where('sub_total >', 0);
        $query = $this->db->get();
        $result = $query->result_array();
        $data[0]["debit"] = $result[0]["sub_total"];

        $this->db->select_sum('sub_total');
        $this->db->from('sales_actual');
        $this->db->where('manufacturer_id', $manufacturer_id);
        //$this->db->where(array('date >='=>$start , 'date <='=>$end));
        $this->db->where('sub_total <', 0);
        $query = $this->db->get();
        $result = $query->result_array();
        $data[0]["credit"] = $result[0]["sub_total"];

        $data[0]["balance"] = $data[0]["debit"] + $data[0]["credit"];

        return $data;
    }
//To get certain manufacturer's payment info which was paid day by day
    public function manufacturer_paid_details($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_ledger');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where('chalan_no', null);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
//To get certain manufacturer's chalan info by which this company got products day by day
    public function manufacturer_chalan_details($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_ledger');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where('deposit_no', null);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    #############################################################################################Search manufacturer report by id and datebetween####################################################
    public function manufacturers_transection_report($manufacturer_id, $start, $end)
    {
        $result = array();

        $this->db->select('
			CAST(amount AS DECIMAL(16,2)) as total_debit,
			date as ledger_date,
			description,
			deposit_no

			');
        $this->db->from('manufacturer_ledger');
        $this->db->where(array('date >=' => $start, 'date <=' => $end));
        $this->db->where('manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    //Retrieve manufacturer Transaction Summary by manufacturer id
    public function manufacturers_transection_summary_info($manufacturer_id)
    {
        $result = array();
        $this->db->select_sum('amount', 'total_credit');
        $this->db->from('manufacturer_ledger');
        $this->db->where(array('d_c' => 'c'));
        $this->db->where(array('manufacturer_id' => $manufacturer_id));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result[] = $query->result_array();
        }

        $this->db->select_sum('amount', 'total_debit');
        $this->db->from('manufacturer_ledger');
        $this->db->where(array('d_c' => 'd'));
        $this->db->where(array('manufacturer_id' => $manufacturer_id));
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result[] = $query->result_array();
        }
        return $result;
    }

    public function manufacturer_product_sale_info($manufacturer_id)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_ledger');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // ACC Coa head code
    public function headcode()
    {

        $query = $this->db->query("SELECT MAX(HeadCode) as HeadCode FROM acc_coa WHERE HeadLevel='3' And HeadCode LIKE '5020200%'");
        return $query->row();

    }
}
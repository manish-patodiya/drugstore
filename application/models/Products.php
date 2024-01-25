<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Products extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //Count Product
    public function count_product()
    {
        return $this->db->count_all("product_information");
    }
    //Product List
    public function product_list($per_page, $page)
    {
        $query = $this->db->select('*')
            ->from('product_information')
            ->limit($per_page, $page)
            ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }

    public function getProductList($postData = null)
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
            $searchQuery = " (a.product_name like '%" . $searchValue . "%' or a.generic_name like '%" . $searchValue . "%' or a.price like'%" . $searchValue . "%' or a.manufacturer_price like'%" . $searchValue . "%' or m.manufacturer_name like'%" . $searchValue . "%') ";
        }

        ## Total number of records without filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('product_information a');
        $this->db->join('manufacturer_information m', 'm.manufacturer_id = a.manufacturer_id', 'left');
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $records = $this->db->get()->result();
        $totalRecords = $records[0]->allcount;

        ## Total number of record with filtering
        $this->db->select('count(*) as allcount');
        $this->db->from('product_information a');
        $this->db->join('manufacturer_information m', 'm.manufacturer_id = a.manufacturer_id', 'left');
        if ($searchValue != '') {
            $this->db->where($searchQuery);
        }

        $records = $this->db->get()->result();
        $totalRecordwithFilter = $records[0]->allcount;

        ## Fetch records
        $this->db->select("a.*,
				a.product_name,
				a.product_id,
				a.product_model,
				a.image,
				a.manufacturer_price,
				a.manufacturer_id,
				m.manufacturer_name
				");
        $this->db->from('product_information a');
        $this->db->join('manufacturer_information m', 'm.manufacturer_id = a.manufacturer_id', 'left');
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
            $image = '<img src="' . $record->image . '" class="img img-responsive" height="50" width="50">';
            if ($this->permission1->method('manage_medicine', 'delete')->access()) {

                $button .= '<a href="' . $base_url . 'Cproduct/product_delete/' . $record->product_id . '" class="btn btn-xs btn-danger " onclick="' . $jsaction . '"><i class="fa fa-trash"></i></a>';
            }

            $button .= '  <a href="' . $base_url . 'Cqrcode/qrgenerator/' . $record->product_id . '" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="left" title="' . display('qr_code') . '"><i class="fa fa-qrcode" aria-hidden="true"></i></a>';

            $button .= '  <a href="' . $base_url . 'Cbarcode/barcode_print/' . $record->product_id . '" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left" title="' . display('qr_code') . '"><i class="fa fa-barcode" aria-hidden="true"></i></a>';
            if ($this->permission1->method('manage_medicine', 'update')->access()) {
                $button .= ' <a href="' . $base_url . 'Cproduct/product_update_form/' . $record->product_id . '" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="' . display('update') . '"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
            }

            $generic_name = '<a href="' . $base_url . 'Cproduct/medicine_search_details/' . $record->product_id . '">' . $record->generic_name . '</a>';
            $manufacturer = '<a href="' . $base_url . 'Cproduct/medicine_search_manufactures/' . $record->manufacturer_id . '">' . $record->manufacturer_name . '</a>';
            $medicine_name = '<a href="' . $base_url . 'Cproduct/product_details/' . $record->product_id . '" class="" data-toggle="tooltip" data-placement="left" >' . $record->product_name . '</a>';

            $data[] = array(
                'sl' => $sl,
                'product_name' => $medicine_name,
                'generic_name' => $record->generic_name,
                'product_model' => $record->product_model,
                'manufacturer_name' => $record->manufacturer_name,
                'product_location' => $record->product_location,
                'price' => formatAmount($record->price),
                'purchase_p' => formatAmount($record->manufacturer_price),
                'strength' => $record->strength,
                'image' => $image,
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

    //All Product List
    public function all_product_list()
    {
        $query = $this->db->select('*')
            ->from('product_information')
            ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Product List
    public function product_list_count()
    {
        $query = $this->db->select('manufacturer_information.*,product_information.*')
            ->from('product_information')
            ->join('manufacturer_information', 'manufacturer_information.manufacturer_id = product_information.manufacturer_id', 'left')
            ->order_by('product_information.product_id', 'desc')
            ->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;

    }
    //Product tax list
    public function retrieve_product_tax()
    {
        $result = $this->db->select('*')
            ->from('tax_information')
            ->get()
            ->result();

        return $result;
    }
    //Tax selected item
    public function tax_selected_item($tax_id)
    {
        $result = $this->db->select('*')
            ->from('tax_information')
            ->where('tax_id', $tax_id)
            ->get()
            ->result();

        return $result;
    }

    //Product generator id check
    public function product_id_check($product_id)
    {
        $query = $this->db->select('*')
            ->from('product_information')
            ->where('product_id', $product_id)
            ->get();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    //Count Product
    public function product_entry($data)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('status', 1);
        $this->db->where('product_id', $data['product_id']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('product_information', $data);
            $data1 = [
                'product_id' => $data['product_id'],
                'low_stock' => $data['low_stock'],
                'stock' => 0,
            ];
            manage_stock($data1, 'insert');
            $this->db->select('*');
            $this->db->from('product_information');
            $this->db->where('status', 1);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_product[] = array('label' => $row->product_name . "-(" . $row->product_model . ")", 'value' => $row->product_id);
            }
            $cache_file = './my-assets/js/admin_js/json/product.json';
            $productList = json_encode($json_product);
            file_put_contents($cache_file, $productList);
            return true;
        }
    }
    //Retrieve Product Edit Data
    public function retrieve_product_editdata($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    // manufacturer product information
    public function manufacturer_product_editdata($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
//selected manufacturer product
    public function manufacturer_selected($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
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
    //Update Categories
    public function update_product($data, $product_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('status', 1);
        $this->db->where('product_id !=', $product_id);
        $query = $this->db->get();
        if ($query->num_rows() < 0) {
            return false;
        } else {

            $this->db->where('product_id', $product_id);
            $this->db->update('product_information', $data);
            $data1 = [
                'product_id' => $product_id,
                'low_stock' => $data['low_stock'],
            ];
            manage_stock($data1, 'update');

            $this->db->select('*');
            $this->db->from('product_information');
            $this->db->where('status', 1);

            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_product[] = array('label' => $row->product_name . "-(" . $row->strength . ")", 'value' => $row->product_id);
            }
            $cache_file = './my-assets/js/admin_js/json/product.json';
            $productList = json_encode($json_product);
            file_put_contents($cache_file, $productList);
            return true;
        }
    }
    // Delete Product Item
    public function delete_product($product_id)
    {

        #### Check product is using on system or not##########
        # If this product is used any calculation you can't delete this product.
        # but if not used you can delete it from the system.
        $this->db->select('product_id');
        $this->db->from('product_purchase_details');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        $affected_row = $this->db->affected_rows();

        if ($affected_row == 0) {
            $this->db->where('product_id', $product_id);
            $this->db->delete('product_information');
            $this->session->set_userdata(array('message' => display('successfully_delete')));

            $this->db->select('*');
            $this->db->from('product_information');
            $this->db->where('status', 1);
            $query = $this->db->get();
            foreach ($query->result() as $row) {
                $json_product[] = array('label' => $row->product_name . "-(" . $row->strength . ")", 'value' => $row->product_id);
            }
            $cache_file = './my-assets/js/admin_js/json/product.json';
            $productList = json_encode($json_product);
            file_put_contents($cache_file, $productList);
            return true;
        } else {
            $this->session->set_userdata(array('error_message' => display('you_cant_delete_this_product')));
            return false;
        }
    }
    //Product By Search
    public function product_search_item($product_id)
    {

        $query = $this->db->select('*')
            ->from('product_information')
            ->where('product_id', $product_id)
            ->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }

    //Duplicate Entry Checking
    public function product_model_search($product_model)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_model', $product_model);
        $query = $this->db->get();
        return $this->db->affected_rows();
    }
    //Product Details
    public function product_details_info($product_id)
    {
        $this->db->select('*');
        $this->db->from('product_information');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // Product Purchase Report
    public function product_purchase_info($product_id)
    {
        $this->db->select('a.*,b.*,sum(b.quantity) as quantity,sum(b.total_amount) as total_amount,c.manufacturer_name');
        $this->db->from('product_purchase a');
        $this->db->join('product_purchase_details b', 'b.purchase_id = a.purchase_id');
        $this->db->join('manufacturer_information c', 'c.manufacturer_id = a.manufacturer_id');
        $this->db->where('b.product_id', $product_id);
        $this->db->order_by('a.purchase_id', 'asc');
        $this->db->group_by('a.purchase_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // Invoice Data for specific data
    public function invoice_data($product_id)
    {
        $this->db->select('a.*,b.*,c.customer_name');
        $this->db->from('invoice a');
        $this->db->join('invoice_details b', 'b.invoice_id = a.invoice_id');
        $this->db->join('customer_information c', 'c.customer_id = a.customer_id');
        $this->db->where('b.product_id', $product_id);
        $this->db->order_by('a.invoice_id', 'asc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    public function previous_stock_data($product_id, $startdate)
    {

        $this->db->select('date,sum(quantity) as quantity');
        $this->db->from('view_product_report');
        $this->db->where('product_id', $product_id);
        $this->db->where('date <=', $startdate);
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }
// Invoice Data for specific data
    public function invoice_data_manufacturer_rate($product_id, $startdate, $enddate)
    {

        $this->db->select('
					date,
					sum(quantity) as quantity,
					rate,
					-rate*sum(quantity) as total_price,
					account
				');

        $this->db->from('view_product_report');
        $this->db->where('product_id', $product_id);

        $this->db->where('date >=', $startdate);
        $this->db->where('date <=', $enddate);

        $this->db->group_by('account');
        $this->db->order_by('date', 'asc');
        $query = $this->db->get();
        //echo $this->db->last_query();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // csv export info
    public function product_csv_file()
    {
        $query = $this->db->select('a.product_id,a.manufacturer_id,a.category_id,a.product_name,a.generic_name,a.box_size,a.product_location,a.price,a.manufacturer_price,a.unit,a.tax,a.product_model,a.product_details,a.image,a.status')
            ->from('product_information a')
            ->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }

    // product batch id  view_m_total_batch_stock
    public function batch_search_item($product_id)
    {
        $this->db->select("a.*,
				m.product_name,
				m.strength,
				");
        $this->db->from('product_purchase_details a');
        $this->db->join('product_information m', 'm.product_id = a.product_id', 'left');
        $this->db->where('a.product_id', $product_id);
        $this->db->group_by('a.batch_id');
        $this->db->limit(50);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //product type start
    public function type_list()
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //customer List
    public function type_list_product()
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //customer List
    public function type_list_count()
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $this->db->where('status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;
    }
    //Category Search Item
    public function type_search_item($type_id)
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $this->db->where('type_id', $type_id);
        $this->db->limit('500');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    //Count customer
    public function type_entry($data)
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $this->db->where('status', 1);
        $this->db->where('type_name', $data['type_name']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return false;
        } else {
            $this->db->insert('product_type', $data);
            return true;
        }
    }
    //Retrieve customer Edit Data
    public function retrieve_type_editdata($type_id)
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $this->db->where('type_id', $type_id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }

    //Update Categories
    public function update_type($data, $type_id)
    {
        $this->db->where('type_id', $type_id);
        $this->db->update('product_type', $data);
        return true;
    }
    // Delete customer Item
    public function delete_type($type_id)
    {
        $this->db->where('type_id', $type_id);
        $this->db->delete('product_type');
        return true;
    }
    public function selected_medicine_type($type_name)
    {
        $this->db->select('*');
        $this->db->from('product_type');
        $this->db->where('type_name', $type_name);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // manufacturer selected
    public function selected_mnuf($manuid)
    {
        $this->db->select('*');
        $this->db->from('manufacturer_information');
        $this->db->where('manufacturer_id', $manuid);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    // product search result info
    public function medicine_search_info($generic_name = null)
    {
        $this->db->select("a.*,d.*");
        $this->db->from('product_information a');
        $this->db->join('manufacturer_information d', 'd.manufacturer_id = a.manufacturer_id', 'left');
        $this->db->where('a.product_id', $generic_name);
        $this->db->group_by('a.product_id');
        $this->db->order_by('a.product_id', 'desc');
        $query = $this->db->get();

        return $stok_report = $query->result_array();
    }
    // product search result info
    public function medicine_search_manufacture($manufacturer_id = null)
    {
        $this->db->select("a.*,d.*");
        $this->db->from('product_information a');
        $this->db->join('manufacturer_information d', 'd.manufacturer_id = a.manufacturer_id', 'left');
        $this->db->where('c.manufacturer_id', $manufacturer_id);
        $this->db->group_by('a.product_id');
        $this->db->order_by('a.product_id', 'desc');
        $query = $this->db->get();

        return $stok_report = $query->result_array();
    }
    // Medicine search by type
    public function medicine_search_type($type = null)
    {
        $this->db->select("a.*,d.*");
        $this->db->from('product_information a');
        $this->db->join('manufacturer_information d', 'd.manufacturer_id = a.manufacturer_id', 'left');
        $this->db->where('a.product_model', $type);
        $this->db->group_by('a.product_id');
        $this->db->order_by('a.product_id', 'desc');
        $query = $this->db->get();

        return $stok_report = $query->result_array();
    }
}
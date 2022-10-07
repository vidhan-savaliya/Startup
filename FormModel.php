<?php
class FormModel extends CI_Model{
    
    // public function get_products(){
    //     if(!empty($this->input->get("search"))){
    //       $this->db->like('title', $this->input->get("search"));
    //       $this->db->or_like('description', $this->input->get("search")); 
    //     }
    //     $query = $this->db->get("products");
    //     return $query->result();
    // }
    public function insert_data($id)
    {    
        $data = array(
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'emp_id' => $this->input->post('emp_id'),
            'phn_no' => $this->input->post('phn_no'),
            'email' => $this->input->post('email'),
            'pwd' => $this->input->post('pwd')
            
        );
        return $this->db->insert('products', $data);
    }

    function add(){
		$insertData=array(
            'name' => $this->input->post('name'),
            'designation' => $this->input->post('designation'),
            'emp_id' => $this->input->post('emp_id'),
            'phn_no' => $this->input->post('phn_no'),
            'email' => $this->input->post('email'),
            'pwd' => $this->input->post('pwd')
		);
		$insertQuery=$this->db->insert('form',$insertData);
		if($this->db->affected_rows()>0){
			return 'Data has been added';
		}else{
			return 'Data has not been added';
		}
	}
    // public function update_product($id) 
    // {
    //     $data=array(
    //         'title' => $this->input->post('title'),
    //         'description'=> $this->input->post('description')
    //     );
    //     if($id==0){
    //         return $this->db->insert('products',$data);
    //     }else{
    //         $this->db->where('id',$id);
    //         return $this->db->update('products',$data);
    //     }        
    // }
}
?>
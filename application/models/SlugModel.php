<?php
class SlugModel extends CI_Model{
    private $table = 'slug';
    public function getAll(){
        $this->db->order_by('slug_id', 'desc');
        return $this->db->get($this->table)->result();
    }
    public function save($data){
        return $this->db->insert($this->table, $data);
    }
    public function getById($id){
        return $this->db->get_where($this->table, ["slug_id"=>$id])->row();
    }
    public function update($data, $id){
        return $this->db->update($this->table, $data, array('slug_id'=>$id));
    }
    public function delete($id){
        return $this->db->delete($this->table, array("slug_id"=>$id));
    }
    public function latest(){
        $this->db->order_by('slug_id', 'desc');
        return $this->db->get($this->table)->result();
    }
    public function count(){
        $this->db->order_by('slug_id', 'desc');
        return $this->db->get($this->table)->num_rows();
    }
}

?>
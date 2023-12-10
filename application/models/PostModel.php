<?php
class PostModel extends CI_Model{
    private $table = 'post';
    public function getAll(){
        $this->db->order_by('post_id', 'desc');
        $this->db->join('category', 'category.category_id = post.category_id');
        $this->db->join('slug', 'slug.slug_id = post.slug_id');
        return $this->db->get($this->table)->result();
    }
    public function save($data){
        return $this->db->insert($this->table, $data);
    }
    public function getById($id){
        return $this->db->get_where($this->table, ["post_id"=>$id])->row();
    }
    public function update($data, $id){
        return $this->db->update($this->table, $data, array('post_id'=>$id));
    }
    public function delete($id){
        return $this->db->delete($this->table, array("post_id"=>$id));
    }
    public function latest(){
        $this->db->order_by('post_id', 'desc');
        return $this->db->get($this->table)->result();
    }
    public function count(){
        $this->db->order_by('post_id', 'desc');
        return $this->db->get($this->table)->num_rows();
    }
}

?>
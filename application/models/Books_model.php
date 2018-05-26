<?php
class Books_model extends CI_Model{

    function ebook_list(){
        $hasil=$this->db->get('books');
        return $hasil->result();
    }

    function save_ebook(){
        $data = array(
                'judul'    => $this->input->post('judul'), 
                'penerbit'    => $this->input->post('penerbit'), 
                'halaman' => $this->input->post('halaman'), 
                'link_ebook' => $this->input->post('link_ebook'), 
                'deskripsi' => $this->input->post('deskripsi'), 
            );
        $result=$this->db->insert('books',$data);
        return $result;
    }

    function update_ebook(){
        $judul=$this->input->post('judul');
        $penerbit=$this->input->post('penerbit');
        $halaman=$this->input->post('halaman');
        $link_ebook=$this->input->post('link_ebook');
        $deskripsi=$this->input->post('deskripsi');

        $this->db->set('penerbit', $penerbit);
        $this->db->set('halaman', $halaman);
        $this->db->set('link_ebook', $link_ebook);
        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('judul', $judul);
        $result=$this->db->update('books');
        return $result;
    }

    function delete_ebook(){
        $judul=$this->input->post('judul');
        $this->db->where('judul', $judul);
        $result=$this->db->delete('books');
        return $result;
    }
    
}
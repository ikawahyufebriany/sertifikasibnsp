<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ArsipModel extends CI_Model
{

  public function get($id = null)
  {
    if ($id == null) {
      return $this->db->get('arsip')->result();
    } else {
      return $this->db->get_where('arsip', ['id' => $id])->result();
    }
  }

  public function search($judul)
  {
    $this->db->like('judul', $judul);
    return $this->db->get('arsip')->result();
  }

  public function store($upload)
  {
    $data = array(
      'nomor_surat' => $this->input->post('nomor_surat'),
      'kategori' => $this->input->post('kategori'),
      'judul' => $this->input->post('judul'),
      'file' => $upload['file']['file_name'],
    );

    $this->db->insert('arsip', $data);
  }

  public function update($id, $upload)
  {
    $data = array(
      'nomor_surat' => $this->input->post('nomor_surat'),
      'kategori' => $this->input->post('kategori'),
      'judul' => $this->input->post('judul'),
      'file' => $upload['file']['file_name'],
    );

    $this->db->where('id', $id);
    $this->db->update('arsip', $data);
  }

  public function delete($id)
  {
    $this->deleteFile($id);
    $this->db->where('id', $id);
    $this->db->delete('arsip');
  }


  public function upload($filename)
  {
    $config['upload_path'] = './assets/uploads/pdf/';
    $config['allowed_types'] = 'pdf';
    $config['file_name'] = $filename;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file_surat')) {
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    } else {
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  private function deleteFile($id)
  {
    $file_name = $this->db->query("SELECT * FROM arsip WHERE id='$id'");
    $row = $file_name->row();
    $file_name = $row->file;
    unlink(FCPATH . "assets/uploads/pdf/" . $file_name);
  }
}
  
  /* End of file Arsip.php */

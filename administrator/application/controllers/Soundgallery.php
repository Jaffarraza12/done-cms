<?php

class Soundgallery extends CI_Controller {



    //Show all the news on 1 page..
    public function View($data='')
    {
        //Load languages and Default Language
        $data['Languages'] = $this->MUtils->getLanguages();
        $data['defaultLang'] = $this->MUtils->getDefaultLanguage();

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Voice";
        $data['breadcrumb_anchor1'] = "Voice";

        $sql = "select * from voice_gallery order by id asc";
        $page_content = $this->db->query($sql)->result();



        $data['page_content'] = $page_content;
        $data['main_content'] = "Admin/Voice/view";

        $this->load->view('Admin/default.php', $data);
    }



}
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


    public function Add()
    {

        //Load languages and Default Language
        $data['Languages'] = $this->MUtils->getLanguages();
        $data['defaultLang'] = $this->MUtils->getDefaultLanguage();

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Voice/View";
        $data['breadcrumb_anchor1'] = "Vocie";
        $data['breadcrumb_link2'] = "/Voice/Add";
        $data['breadcrumb_anchor2'] = "Add Voice";

        $data['activeMenu'] = "mnuNews";

        $data['main_content'] = "Admin/Voice/add";
        $this->load->view('Admin/default.php', $data);

    }


    public  function AddVoice(){
        echo 12;
    }



}
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


    public function AddSound()
    {

        echo 1;
        exit();
        //Load languages and Default Language
        $languages = $this->MUtils->getLanguages();
        $data['Languages'] = $languages;
        $data['defaultLang'] = $this->MUtils->getDefaultLanguage();

        $data['activeMenu'] = "mnuNews";

        if ($_FILES['audio']['type'] == 'audio/mp3') {
            $ttmp_name = $_FILES["audio"]["tmp_name"];
            $name = time().'.mp3';

            $dir = "./../uploads/audio/";
            if(move_uploaded_file($ttmp_name, "$dir" . "/" . "$name")){
                $voice['audio'] =  $name;
            } else {
                $data['error']['audio'] = 'There are some problem in uploading audio.';
            }
        } else {
            $data['error']['audio'] = 'File Type Should Be MP3 and not empty.';
        }


        if($this->input->post('title') =="" || empty($this->input->post('title'))){
            $data['error']['title'] = 'Title Should not be empty.';
        }


        $voice['image'] = $this->MUtils->doUploadPath('img', 'audio-img');
        $voice['title'] = $this->input->post('title');
        $voice['author'] = $this->input->post("author");

        if($data['error']){
            $data['breadcrumb_link1'] = "/Voice/View";
            $data['breadcrumb_anchor1'] = "Vocie";
            $data['breadcrumb_link2'] = "/Voice/Add";
            $data['breadcrumb_anchor2'] = "Add Voice";
            $data['activeMenu'] = "mnuNews";
            $data['main_content'] = "Admin/Voice/add";
            $this->load->view('Admin/default.php', array_merge($data,$voice));

        } else {
            $this->load->model('mvoice');
            $this->mvoice->add($voice);
            redirect(base_url().'index.php/Voice');

        }



    }



}
<?php

class Menu extends CI_Controller {

    //Shows Add Image
    public function Add()
    {
        //Load languages and Default Language
        $data['Languages'] = $this->MUtils->getLanguages();
        $data['defaultLang'] = $this->MUtils->getDefaultLanguage();

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/News/View";
        $data['breadcrumb_anchor1'] = "News";
        $data['breadcrumb_link2'] = "/News/Add";
        $data['breadcrumb_anchor2'] = "Add News";

        $data['activeMenu'] = "mnuNews";
        $this->load->model('malbum');
        $albums = $this->load->model('malbum');
        $languages = $this->MUtils->getLanguages();
        $pages = $this->MContent->viewByType('page')->result();
        $news = $this->MContent->viewByType('news')->result();
        $albums = $this->malbum->GetAll()->result();
        $data['menu'] = array();
        foreach ($languages as $lang){
           //pages
            foreach($pages as $page){
                $data['menu'][$lang->code]['PAGES'][] = array(
                     'cid' => $page->cid,
                     'title' => $page->title,
                     'link' => $page->tag,
                     'slag' => 'page/'.$page->cid
                );
            }
            //news
            foreach($news as $page){
                $data['menu'][$lang->code]['NEWS'][] = array(
                     'cid' => $page->cid,
                     'title' => $page->title,
                     'link' => $page->tag,
                     'slag' => 'get/'.$page->cid

                );
            }

            //news
            foreach($albums as $album){
                $data['menu'][$lang->code]['ALBUMS'][] = array(
                    'cid' => $album->album_id,
                    'title' => $album->name,
                    'link' => '/gallery/'.$album->album_id,
                );
            }
        }



        $data['main_content'] = "Admin/Menu/add";
        $this->load->view('Admin/default.php', $data);
    }

  //Show edit view
    public function Edit()
    {
        //Load languages and Default Language
        $languages = $this->MUtils->getLanguages();
        $data['Languages'] = $languages;
        $data['defaultLang'] = $this->MUtils->getDefaultLanguage();
        $data['defaultCode'] = $languages[$data['defaultLang']]->code;

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Media";
        $data['breadcrumb_link2'] = "/Media/Edit?id=" . (int)$this->input->get('id');
        $data['breadcrumb_anchor2'] = "Edit Media";

        $data['activeMenu'] = "mnuMedia";


        $id = (int)$this->input->get('id');
        $this->load->model("MMedia");
        $Media = $this->MMedia->loadMediaById($id)->result();
        $data['view'] = $this->MUtils->arrangeDataAccordingToLanguage($Media, $data);

        $data['wid'] = $id;

        $data['main_content'] = "Admin/Media/edit";
        $this->load->view("Admin/default.php", $data);
    }

    //Shows all logo on 1 screen
    public function View($data=array())
    {
        $this->load->model("MMenu");
        $this->load->model("MSetting");

        $data['Languages'] = $this->MUtils->getLanguages();
        $data['defaultLang'] = $this->MUtils->getDefaultLanguage();
           //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Menu/View";
        $data['breadcrumb_anchor1'] = "Menu";
        $data['breadcrumb_anchor2'] = "Manage Album";
        $data['menu'] =array();

        foreach($data['Languages'] as $lang){
            $data['menu'][$lang->code][] = json_decode($this->MSetting->GetByKey('menu',$lang->code)->row()->value);
        }
        $data['menu_new'] =array();
        foreach($data['Languages'] as $lang){
            foreach($this->MMenu->viewByType('language',$lang->code)->result() as $row){
                $data['menu_new'][$lang->code][] = array(
                    'id' => $row->id,
                    'title' => $row->title,
                    'link' => $row->link,
                    'language' => $row->language,
                );

            }

        }



        $data['activeMenu'] = "mnuMedia";

        $data['main_content'] = "Admin/Menu/view";
        $this->load->view("Admin/default.php", $data);
    }


    // Add New logo in db
    public function AddMenu()
    {
        //Load languages and Default Language
        $this->load->model("MMenu");
        $languages = $this->MUtils->getLanguages();
        $data = array();
        foreach($languages as $lang){
            $data['title'] = $this->input->post('title_' . $lang->code);
            if($this->input->post('link_' . $lang->code) != "custom"){
                $data['link'] = $this->input->post('custom_' . $lang->code);
            } else {
                $data['link'] = $this->input->post('custom_' . $lang->code);
            }
            $data['language'] = $lang->code;
            $status =  $this->MMenu->Add($data);

        }
        if ($status==1)
        {
            $data['status'] = "New Menu Added Successfully.";
            $data['statusCode'] = 1;
        }
        $this->view();
    }

    // Add New logo in db
    public function EditMedia()
    {
        //Load languages and Default Language
        $languages = $this->MUtils->getLanguages();
        $data['Languages'] = $languages;
        $data['defaultLang'] = $this->MUtils->getDefaultLanguage();

        $data['url'] = $this->input->post('txtUrl');
        $data['homepage'] = 0;
        $data['wid'] = $this->input->post('wid');
        $data['category'] = $this->input->post('category');
        $data['seo_url'] = $this->input->post('seo_url');

        $data['smallImage'] = $this->MUtils->doUpload('smallFile', 344, 185, false);
        $data['sliderImage'] = $this->MUtils->doUpload('sliderFile', 1920, 530, true);

        if ($this->input->post('chkHomepage') == "yes")
            $data['homepage'] = 1;

        foreach ($languages as $lang)
        {
            $data['title_' . $lang->code] = $this->input->post('title_' . $lang->code);
            $data['editor_' . $lang->code] = $this->input->post('editor_' . $lang->code);
            $data['meta_title_' . $lang->code] = $this->input->post('meta_title_' . $lang->code);
            $data['meta_keywords_' . $lang->code] = $this->input->post('meta_keywords_' . $lang->code);
            $data['meta_desc_' . $lang->code] = $this->input->post('meta_desc_' . $lang->code);
            $data['wd_id_' . $lang->code] = $this->input->post('wd_id_' . $lang->code);
            $data['slider_text_' . $lang->code] = $this->input->post('slider_text_' . $lang->code);
            $data['slider_anchor_' . $lang->code] = $this->input->post('slider_anchor_' . $lang->code);
            $data['slider_url_' . $lang->code] = $this->input->post('slider_url_' . $lang->code);
        }

        $status = 1;
        $defaultCode = $languages[$data['defaultLang']]->code;
        if ( isset($_POST['title_' . $defaultCode] ) )
        {
            $this->load->model("MMedia");
            $status = $this->MMedia->editMedia($data);
        }

        if ($status == 1)
        {
            $data['status'] = "Media Updated Successfully";
            $data['statusCode'] = 1;
        }
        else
        {
            $data['status'] = "Error occured while updating Media";
            $data['statusCode'] = 0;
        }

        $this->view($data);


    }

    // Delete logo from db.
    public function Delete()
    {
        $id = (int) $this->input->get('id');
        $this->load->model("MMedia");
        $status = $this->MMedia->deleteImage($id);

        if ($status)
            $this->MUtils->setSuccess("Record Deleted Successfully");
        else
            $this->MUtils->setError("Error occurred while deleting record");

        echo $this->MUtils->getStatus();
    }
	

    //Sort Media
    public function Sort()
    {
        $ids = $this->input->post('data');

        $this->load->model("MMedia");
        $status = $this->MMedia->sortMedia($ids);

    }

    public function Save(){
        $menu = $this->input->post('menu');

        $lang = $this->input->post('lang');
        $this->db->where('code','menu');
        $this->db->where('key',$lang);
        $this->db->update('setting',[
            'value'=> $menu,
            'mts'=> 'NOW()',

            ]);

    }

}


?>
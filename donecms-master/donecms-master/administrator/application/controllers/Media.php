<?php

class Media extends CI_Controller {


    //Shows Add Image
    public function Add()
    {
        $this->load->model("MMedia");
		$mediaid = (int)$this->input->get('id');
        $data['images'] = $this->MMedia->loadImagesById($mediaid)->result();

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Media";
        $data['breadcrumb_link2'] = "/Media/Add";
        $data['breadcrumb_anchor2'] = "Add New Media";
		$data['mediaid'] = $mediaid;
		
        $data['activeMenu'] = "mnuMedia";

        $data['main_content'] = "Admin/Media/add";
        $this->load->view("Admin/default.php", $data);
    }
	
	
	public function AddAlbum()
    {
        $this->load->model("MMedia");
	      //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Album";
        $data['breadcrumb_link2'] = "/Media/Add";
        $data['breadcrumb_anchor2'] = "Add New Album";
		
        $data['activeMenu'] = "mnuMedia";

        $data['main_content'] = "Admin/Media/addalbum";
        $this->load->view("Admin/default.php", $data);
    }
	
	
	public function AddAlbumPost()
    {
      
	    $this->load->model("MMedia");
		$data['eng_title'] = $this->input->post('eng_title');
		$data['ar_title'] = $this->input->post('ar_title');
		$data['ar_title'] = $this->input->post('ar_title');
		$data['icon'] = $this->MUtils->doUploadWithCropping('icon', 250, 166,'../uploads/media/');
		
		$data['eng_description'] = $this->input->post('eng_description');
        $data['arb_description'] = $this->input->post('arb_description');
		
		
		$data['type'] = $this->input->post('type');
		
		$returnId = $this->MMedia->AddAlbum($data);

        if ($returnId > 0)
        	$this->View();
			
		else
            $this->MUtils->setError("Erorr ocucred");

        echo $this->MUtils->getStatus();
    }
	
	public function EditAlbum()
    {
        $this->load->model("MMedia");
		$mediaid = (int)$this->input->get('id');
        $albuminfo = $this->MMedia->loadAlbumById($mediaid)->row_array();
		
		
		$data['eng_title'] = $albuminfo['eng_title'];
		$data['ar_title'] = $albuminfo['ar_title'];
		$data['type'] = $albuminfo['type'];
		$data['eng_description'] = $albuminfo['eng_description'];
        $data['arb_description'] = $albuminfo['arb_description'];
		$data['mediaid'] = $mediaid;
		
		

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Album";
        $data['breadcrumb_link2'] = "/Media/Add";
        $data['breadcrumb_anchor2'] = "Modifying Album";
		$data['mediaid'] = $mediaid;
		
        $data['activeMenu'] = "mnuMedia";

        $data['main_content'] = "Admin/Media/editalbum";
        $this->load->view("Admin/default.php", $data);
    }
	

	
	
	public function EditAlbumPost()
    {
        $this->load->model("MMedia");
			
		
		$data['mediaid'] = $this->input->post('mediaid');
		$data['eng_title'] = $this->input->post('eng_title');
		$data['ar_title'] = $this->input->post('ar_title');
		$data['type'] = $this->input->post('type');
		$data['icon'] = $this->MUtils->doUploadWithCropping('icon', 250, 166, '../uploads/media/');
		
	
	
        $data['eng_description'] = $this->input->post('eng_description');
        $data['arb_description'] = $this->input->post('arb_description');
		
		$returnId = $this->MMedia->ModifyAlbum($data);

        if ($returnId > 0)
        	$this->View();
			
		else
            $this->MUtils->setError("Erorr ocucred");

        echo $this->MUtils->getStatus();
    }
	
	
	public function VideoBox()
    {
        $this->load->model("MMedia");
		$data['mediaid'] = (int)$this->input->get('id');
		$data['videos'] = $this->MMedia->loadVideosById($data['mediaid'])->result_array();
	      //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Album";
        $data['breadcrumb_link2'] = "/Media/Add";
        $data['breadcrumb_anchor2'] = "Add New Album";
		
        $data['activeMenu'] = "mnuMedia";
		
        $data['main_content'] = "Admin/Media/VideoBox";
        $this->load->view("Admin/default.php", $data);
    }
	
	public function AddVideo()
    {
        $this->load->model("MMedia");
	      //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Album";
        $data['breadcrumb_link2'] = "/Media/Add";
        $data['breadcrumb_anchor2'] = "Add New Album";
		
        $data['activeMenu'] = "mnuMedia";
		$data['mediaid'] = (int) $this->input->get("mediaid");

        $data['main_content'] = "Admin/Media/addvideo";
        $this->load->view("Admin/default.php", $data);
    }
	
	public function AddVideoPost()
    {
        $this->load->model("MMedia");
		
		
		if($this->input->post('save'))
		{
			$data['title'] = $this->input->post("title");
			$data['link'] = $this->input->post("link");
			$data['mediaid'] = (int)$this->input->get("mediaid");
			
			$returnId = $this->MMedia->AddVideo($data);

		}
		
		 if ($returnId > 0)
        	redirect("Media/VideoBox/?id=".$data['mediaid']);
			
		else
            $this->MUtils->setError("Erorr ocucred");

        echo $this->MUtils->getStatus();
		
	    $data['activeMenu'] = "mnuMedia";

       }
	
	public function EditVideo()
    {
        $this->load->model("MMedia");
		$mdidaid = (int)$this->input->get('id');
        $albuminfo = $this->MMedia->loadAlbumById($mdidaid)->row_array();
		
		
		$data['eng_title'] = $albuminfo['eng_title'];
		$data['ar_title'] = $albuminfo['ar_title'];
		$data['type'] = $albuminfo['type'];
		
		

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Album";
        $data['breadcrumb_link2'] = "/Media/Add";
        $data['breadcrumb_anchor2'] = "Modifying Album";
		$data['mediaid'] = $mdidaid;
		
        $data['activeMenu'] = "mnuMedia";

        $data['main_content'] = "Admin/Media/editalbum";
        $this->load->view("Admin/default.php", $data);
    }


    //Shows all logo on 1 screen
    public function View($data='')
    {
        $this->load->model("MMedia");
        $data['arrMedia'] = $this->MMedia->loadAllAlbum('images')->result();
		$data['arrVideo'] = $this->MMedia->loadAllAlbum('video')->result();
		
	

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Album";
        $data['breadcrumb_link2'] = "/Media/View";
        $data['breadcrumb_anchor2'] = "Manage Album";

        $data['activeMenu'] = "mnuMedia";

        $data['main_content'] = "Admin/Media/view";
        $this->load->view("Admin/default.php", $data);
    }

    //Allow you to arrange Media.
    public function Arrange($data='')
    {
        $this->load->model("MMedia");
        $data['arrMedia'] = $this->MMedia->loadAllData()->result();

        //BreadCrumb URLs
        $data['breadcrumb_link1'] = "/Media/View";
        $data['breadcrumb_anchor1'] = "Media";
        $data['breadcrumb_link2'] = "/Media/Arrange";
        $data['breadcrumb_anchor2'] = "Arrange Media";

        $data['activeMenu'] = "mnuMedia";

        $data['main_content'] = "Admin/Media/arrange";
        $this->load->view("Admin/default.php", $data);
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

    // Add New logo in db
    public function AddMedia()
    {
        //Load languages and Default Language
        $this->load->model("MMedia");
		$data['mediaid'] = (int)$this->input->get('mediaid');
        $data['image'] = $this->MUtils->doUploadWithCropping('file', 250, 166,'../uploads/media/');
		$data['image_large'] = $this->MUtils->doUploadWithCropping('file', 736, 490,'../uploads/media/');
		$image_large = $this->MUtils->MUtils->doUploadWithCropping('file', 581, 386 ,'../uploads/media/');
		
		
		
       
        $returnId = $this->MMedia->AddMedia($data);

        if ($returnId > 0)
            $this->MUtils->setSuccess($returnId . ":" . $data['image']);
        else
            $this->MUtils->setError("Erorr ocucred");

        echo $this->MUtils->getStatus();
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
	
	 public function DeleteAlbum()
    {
        $mediaid = (int)$this->input->get('id');
        $this->load->model("MMedia");
        $status = $this->MMedia->deleteAlbum($mediaid);

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

}


?>
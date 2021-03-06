<div class="page-sidebar nav-collapse collapse">
<!-- BEGIN SIDEBAR MENU -->
    <ul>
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <!-- <li class="avatarCssLi"> -->
            <!-- BEGIN AVATAR -->
            <!-- <div class="avatarCss"> -->
                <!-- <img style="width:180px;border-width:0px;" src="<?php echo base_url(); ?>assets/img/AvatarLarge.png" id="ctl00_AvatarImg"> -->
            <!-- </div> -->
            <!-- END AVATAR-->
        <!-- </li> -->

        <li id="mnuPages" style="display:none">
            <a href="javascript:;">
                <i class="icon-file"></i>
                <span class="title">Pages</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">
                <li><?php echo anchor("Pages/Select", "Add New"); ?></li>
                <li><?php echo anchor("Pages/View?q=News", "News"); ?></li>
                <li><?php echo anchor("Pages/View?q=Activity", "Activities"); ?></li>
                <li><?php echo anchor("Pages/View?q=Book", "Book"); ?></li>
            </ul>
        </li>

        <li id="mnuJobs" style="display:none">
            <a href="javascript:;">
                <i class="icon-retweet	"></i>
                <span class="title">Jobs</span>
                <span class="arrow "></span>
            </a>

            <ul class="sub-menu">
                <li><?php echo anchor("Jobs/View", "Jobs"); ?></li>
                <li><?php echo anchor("JobType/View", "Job Types"); ?></li>
           		<li><?php echo anchor("Attributes/View", "Attributes"); ?></li>
            </ul>
        </li>

        <li id="mnuPage">
            <a href="<?php echo base_url(); ?>index.php/Pages/View?q=Page">
                <i class="icon-retweet"></i>
                <span class="title">Pages</span>
            </a>
        </li>

        <li id="mnuNews">
            <a href="<?php echo base_url(); ?>index.php/Pages/View?q=News">
                <i class="icon-retweet"></i>
                <span class="title">News</span>
            </a>
        </li>

        <li id="mnuActivities">
            <a href="<?php echo base_url(); ?>index.php/Pages/View?q=Activities">
                <i class="icon-retweet"></i>
                <span class="title">Activities</span>
            </a>
        </li>

        <li id="mnuBooks">
            <a href="<?php echo base_url(); ?>index.php/Pages/View?q=Books">
                <i class="icon-retweet"></i>
                <span class="title">Books</span>
            </a>
        </li>

        <li id="mnuBooksCategories" style="display:none">
            <a href="<?php echo base_url(); ?>index.php/BooksCategories">
                <i class="icon-retweet"></i>
                <span class="title">Books Categories</span>
            </a>
        </li>

        <li id="mnuReporting" style="display:none">
            <a href="<?php echo base_url(); ?>index.php/Pages/View?q=Reporting">
                <i class="icon-retweet"></i>
                <span class="title">Reporting</span>
            </a>
        </li>

        <li id="mnuReporting">
            <a href="javascript:;">
                <i class="icon-retweet"></i>
                <span class="title">Reporting</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">
                <li><?php echo anchor("Pages/View?q=Reporting", "List All"); ?></li>
                <li><?php echo anchor("Pages/Edit?id=28&q=Reporting", "Editorial Board"); ?></li>
                <li><?php echo anchor("Pages/Edit?id=29&q=Reporting", "Introduction & Objectives"); ?></li>
                <li><?php echo anchor("Pages/Edit?id=30&q=Reporting", "Publishing Rules"); ?></li>
                <li><?php echo anchor("Pages/View?q=Abstracts", "Abstracts"); ?></li>
            </ul>
        </li>

        <!-- <li id="mnuMajalatAjman">
            <a href="<?php echo base_url(); ?>index.php/Pages/View?q=Majalat-Ajman">
                <i class="icon-retweet"></i>
                <span class="title">Majalat-Ajman</span>
            </a>
        </li> -->
        <li id="mnuSlideShow">
            <a href="<?php echo base_url(); ?>index.php/Album/View">
                <i class="icon-picture"></i>
                <span class="title">Album</span>
            </a>
        </li>

        <li id="mnuSlideShow">
            <a href="<?php echo base_url(); ?>index.php/Videos/view">
                <i class="icon-screen-desktop"></i>
                <span class="title">Videos</span>
            </a>
        </li>



        <li id="mnuIntro&Obj" style="display:none">
            <a href="<?php echo base_url(); ?>index.php/Pages/Edit?id=29&q=Majalat-Ajman">
                <i class="icon-retweet"></i>
                <span class="title">Intro & Objectives</span>
            </a>
        </li>

        <li id="mnuPubRules" style="display:none">
            <a href="<?php echo base_url(); ?>index.php/Pages/Edit?id=30&q=Majalat-Ajman">
                <i class="icon-retweet"></i>
                <span class="title">Publishing Rules</span>
            </a>
        </li>

        <li id="mnuAbstracts" style="display:none">
            <a href="<?php echo base_url(); ?>index.php/Pages/View?q=Abstracts">
                <i class="icon-retweet"></i>
                <span class="title">Abstracts</span>
            </a>
        </li>

        <li id="mnuSlideShow">
            <a href="<?php echo base_url(); ?>index.php/Slideshow">
                <i class="icon-retweet"></i>
                <span class="title">Image Slider</span>
            </a>
        </li>

        <li id="mnuEvents" style="display:none;">
            <a href="javascript:;">
                <i class="icon-user"></i>
                <span class="title">Employers</span>
                <span class="arrow "></span>
            </a>

            <ul class="sub-menu">
                <li><?php echo anchor("Employer/View", "Employers"); ?></li>
                <li><?php echo anchor("Employer/Add", "Add Employer"); ?></li>
            </ul>
        </li>

        <li id="mnuDirectory" style="display:none;">
            <a href="javascript:;">
                <i class="icon-th-list"></i>
                <span class="title">Portal</span>
                <span class="arrow "></span>
            </a>

            <ul class="sub-menu">
                   <li><?php echo anchor("Categories/View", "View Categories "); ?></li>
                   <li><?php echo anchor("Degree/View", "Degree"); ?></li>
                   <li><?php echo anchor("Testomonial/View", "Testomonials "); ?></li>
                   <li><?php echo anchor("Groups/View", "Groups"); ?></li>
            </ul>

        </li>

        <li id="mnuUsers" style="display:none;">
            <a href="javascript:;">
                <i class="icon-user"></i>
                <span class="title">Users</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu" style="display:none;">
                <li><?php echo anchor("Users/viewUsers", "Users"); ?></li>
            </ul>
        </li>

        <li id="mnuMedia"  style="display:none;">
            <a href="javascript:;">
                <i class="icon-file"></i>
                <span class="title">Media</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">
                <li><?php echo anchor("Media/View", "Media List"); ?></li>
                <li><?php echo anchor("Media/AddAlbum", "Add Album"); ?></li>
            </ul>
        </li>

        <li id="mnuCareers" style="display:none;">
            <a href="javascript:;">
                <i class="icon-briefcase"></i>
                <span class="title">Careers</span>
                <span class="arrow "></span>
            </a>

            <ul class="sub-menu">
                <li><?php echo anchor("Careers/Add", "Add New Career"); ?></li>
                <li><?php echo anchor("Careers/View", "Manage Careers"); ?></li>
                <li><?php echo anchor("Careers/ViewResume", "View Resume"); ?></li>
            </ul>
        </li>

        <li id="mnuPassword">

            <a href="javascript:;">
                <i class="icon-cogs"></i>
                <span class="title">Setting</span>
                <span class="arrow"></span>
            </a>

            <ul class="sub-menu">
                <li style="display: none" ><?php echo anchor("Config/Sliders", "Sliders"); ?></li>
                <li style="display: none" ><?php echo anchor("Config/setting", "General Setting"); ?></li>
                <li><?php echo anchor("Config/Password", "Change Password"); ?></li>
                <li style="display: none"><?php echo anchor("Social/View", "Social Network"); ?></li>
            </ul>


        </li>

        <li id="mnuContact" style="display:none">
            <?php echo anchor("Contact/View", "<i class='icon-map-marker'></i><span class='title'>Contact Queries</span>"); ?>
        </li>


    </ul>

</div>
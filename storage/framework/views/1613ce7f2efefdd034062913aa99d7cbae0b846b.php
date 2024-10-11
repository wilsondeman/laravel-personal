<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startSection('vendor-style'); ?>
  
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/charts/apexcharts.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap4.min.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('vendors/css/file-uploaders/dropzone.min.css'))); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-style'); ?>
  
  <link rel="stylesheet" href="<?php echo e(asset(mix('css/base/pages/page-profile.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('css/base/plugins/charts/chart-apex.css'))); ?>">
  <link rel="stylesheet" href="<?php echo e(asset(mix('css/base/plugins/forms/form-file-uploader.css'))); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="user-profile">
  <!-- profile header -->
  <div class="row">
    <div class="col-12">
      <div class="card profile-header mb-2">
        <!-- profile cover photo -->
        <img
          class="card-img-top"
          src="<?php echo e(asset('images/banner/20360677.jpg')); ?>"
          alt="User Profile Image"
        />
        <!--/ profile cover photo -->

        <div class="position-relative">
          <!-- profile picture -->
          <div class="profile-img-container d-flex align-items-center">
            <div class="profile-img">
              <img
                src="<?php echo e(asset('images/portrait/small/wilsonooi.jpg')); ?>"
                class="rounded img-fluid"
                alt="Card image"
              />
            </div>
            <!-- profile title -->
            <div class="profile-title ml-3">
              <h2 class="text-white">Wilson Ooi</h2>
              <p class="text-white">Lead Developer</p>
            </div>
          </div>
        </div>

        <!-- tabs pill -->
        <div class="profile-header-nav">
          <!-- navbar -->
          <nav class="navbar navbar-expand-sm navbar-light w-100 mb-1" style="padding-left:190px;">
               
          </nav>
          <!--/ navbar -->
        </div>
      </div>
    </div>
  </div>
  <!--/ profile header -->

  <!-- profile info section -->
  <section id="profile-info">
    <div class="row">
      <!-- left profile info section -->
      <div class="col-lg-4 col-12 order-1 order-lg-1">
        <!-- about -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-75">About</h5>
            <p class="card-text">
            A lefthander; a husband; an elder of the 4 siblings and the only son in family. 
            A good sense of UI/UX & good sense of humour ... <br>
            Apart from work, you will see him mostly in 🏕️campsite or in the 🎤KTV room. 
            </p> 
            <div class="mt-2">
              <h5 class="mb-75">Contact:</h5>
              <p class="card-text">(60) 19 7711 783</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-75">Lives:</h5>
              <p class="card-text">Ulu Tiram, Johor, Malaysia.</p>
            </div>
            <div class="mt-2">
              <h5 class="mb-75">Email:</h5>
              <p class="card-text">wilson021179@yahoo.com</p>
            </div>
          </div>
        </div>
        <!--/ about -->
        <!-- CV Card -->
        <div class="card card-user-timeline">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <i data-feather='coffee' class="user-timeline-title-icon"></i>
              <h4 class="card-title">CV/Resume</h4>
            </div>
          </div>
          <div class="card-body">
            <ul class="timeline ml-50">
              <li class="timeline-item">
                <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6 class="text-success">Download Now</h6>
                    <span class="timeline-event-time mr-1"><i>Last Update Jun 2024</i></span>
                  </div>
                  <div class="media align-items-center">
                    <a href="images/pdf/Wilson Ooi - Updated CV - v2.pdf" target="_blank">
                    <img class="mr-1" src="<?php echo e(asset('images/icons/pdf.png')); ?>" alt="My Resume" height="23" />
                    <h6 class="media-body mb-0">Wilson Ooi - Updated CV - v2.pdf</h6>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!--/ CV Card -->
        <!-- Education Timeline Card -->
        <div class="card card-user-timeline">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <i data-feather="pen-tool" class="user-timeline-title-icon"></i>
              <h4 class="card-title">Education</h4>
            </div>
          </div>
          <div class="card-body">
            <ul class="timeline ml-50">
              <li class="timeline-item">
                <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>Southern College</h6>
                    <span class="timeline-event-time mr-1"><i>Apr 2002</i></span>
                  </div>
                  <p>Diploma in Computer Science</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!--/ Education Timeline Card -->
        <!-- Portfolio Card -->
        <div class="card card-transaction">
          <div class="card-header">
            <h4 class="card-title">Portfolio</h4>
            
          </div>
          <div class="card-body">
            <div class="transaction-item p-1">
              <div class="media">
                <div class="media-body">
                  <h6 class="transaction-title">Wordpress/Woocommerce</h6>
                  <ol>
                    <li><a class="text-info" href="https://bungkusgo.com" target="_blank">https://bungkusgo.com</a></li>
                    <li><a class="text-info" href="https://mediverse.my" target="_blank">https://mediverse.my</a></li>
                    <li><a class="text-info" href="https://engagefitness.asia/" target="_blank">https://engagefitness.asia/</a></li>
                    <li><a class="text-info" href="https://jcimalaysia.cc" target="_blank">https://jcimalaysia.cc</a></li>
                    <li><a class="text-info" href="https://boofurniture.com.my" target="_blank">https://boofurniture.com.my</a></li>
                    <li><a class="text-info" href="https://store.narrowhost.com" target="_blank">https://store.narrowhost.com</a></li>
                    <li><a class="text-info" href="https://eins1.my" target="_blank">https://eins1.my</a></li>
                    <li><a class="text-info" href="https://foody.narrowhost.com" target="_blank">https://foody.narrowhost.com</a></li>
                  </ol>
                  <h6 class="transaction-title">Shopify</h6>
                  <ol>
                    <li><a class="text-info" href="https://shop.triton-series.com/" target="_blank">https://shop.triton-series.com/</a></li>
                  </ol>
                </div>
              </div>
              
            </div>
            <div class="transaction-item p-1">
              <div class="media">
                <div class="media-body">
                  <span class="badge badge-light-warning font-medium-3">Mid Scale Project</span>
                  <h6 class="transaction-title mt-1">JCI Malaysia - Membership/Event/Awards Submition</h6>
                  <p class="card-text">
                    Role based membership system that allowed the users to track activities, <br>events, tasks, statistics and other job <br>and membership data. This system is utilized by Global NGO 'Junior Chamber International Malaysia' to track all progress on the activities and membership pathway. 
                  </p>
                  <ol>
                    <li><a class="text-info" href="https://jcimalaysia.cc/roadmap/page-business-directory.php" target="_blank">https://jcimalaysia.cc/roadmap/page-business-directory.php</a></li>
                    <li><a class="text-info" href="https://jcimalaysia.cc/roadmap/event-list-public.php" target="_blank">https://jcimalaysia.cc/roadmap/event-list-public.php</a></li>
                    <li><a class="text-info" href="https://staging.jcimalaysia.cc/roadmap" target="_blank">https://staging.jcimalaysia.cc/roadmap</a></li>
                    <!-- <ul>
                      <li><u>Dummy Account - Member</u></li>
                      <li>Username : <b class="text-warning">791102015435</b></li>
                      <li>Password : <b class="text-warning">KonBanwa999</b></li>
                    </ul>
                    <ul>
                      <li><u>Dummy Account - LO Admin</u></li>
                      <li>Username : <b class="text-warning">jcialumni</b></li>
                      <li>Password : <b class="text-warning">KonBanwa999@</b></li>
                    </ul>
                    <ul>
                      <li><u>Dummy Account - Area Admin</u></li>
                      <li>Username : <b class="text-warning">north</b></li>
                      <li>Password : <b class="text-warning">KonBanwa999@</b></li>
                    </ul>
                    <ul>
                      <li><u>Dummy Account - Administrator</u></li>
                      <li>Username : <b class="text-warning">konbanwa99</b></li>
                      <li>Password : <b class="text-warning">KonBanwa999@</b></li>
                    </ul> -->
                  </ol>
                  <h6 class="transaction-title">Redone Academy - Learning Management System</h6>
                  <p class="card-text">
                    A Learning Management System (LMS) is a software application or platform designed to facilitate the administration, documentation, tracking, reporting, and delivery of educational courses, training programs, or learning and development initiatives. 
                  </p>
                  <ol>
                    <li><a class="text-info" href="https://staging.redoneacademy.com/" target="_blank">https://staging.redoneacademy.com/</a></li>
                  </ol>
                </div>
              </div>
              
            </div>
            <!-- <div class="transaction-item p-1">
              <div class="media">
                <div class="media-body">
                  <h6 class="transaction-title">Mobile App</h6>
                  <p class="card-text">
                    Grocery Store App build in Flutter & Dart, it's integrate with Wordpress & Woocommerce token-based authentication Rest API. with Firebase phone number & social login. 
                    this allow to send notification in onesignal or firebase.  
                  </p>
                  <div>
                    <span class="badge badge-glow badge-success"><a href="https://play.google.com/store/apps/details?id=com.narrow.foody" target="_blank">Google Play Store</a></span>
                    <span class="badge badge-glow badge-black"><a href="https://apps.apple.com/my/app/foody-narrowstore/id1574036799" target="_blank">Apple Store</a></span>
                    <span class="badge badge-glow badge-danger"><a href="https://appgallery.huawei.com/app/C104522511" target="_blank">Huawei AppGallery</a></span>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <!--/ Portfolio Card -->
        <!-- latest profile pictures -->
        <div class="card">
          <div class="card-body">
            <h5 class="mb-0">Latest Photos</h5>
            <div class="row">
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/10551011_10152378014998311_8606317335599710265_n.jpg')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/46348684_10157130211163311_4572419069470310400_n.jpg')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/DSC_0033.JPG')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/DSC_0034.JPG')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/P1020757.JPG')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/DSC_0277.JPG')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/img1537580358519.jpg')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/img1537580270246.jpg')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
              <div class="col-md-4 col-6 profile-latest-img">
                <a href="javascript:void(0)">
                  <img
                    src="<?php echo e(asset('images/trip/DSC_0439.JPG')); ?>"
                    class="img-fluid rounded"
                    alt="avatar img"
                  />
                </a>
              </div>
            </div>
          </div>
        </div>
        <!--/ latest profile pictures -->
      </div>
      <!--/ left profile info section -->

      <!-- right profile info section -->
      <div class="col-lg-8 col-12 order-2 order-lg-2">
        <!-- User Timeline Card -->
        <div class="card card-user-timeline">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <i data-feather="clock" class="user-timeline-title-icon"></i>
              <h4 class="card-title">Experience</h4>
            </div>
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
          </div>
          <div class="card-body">
            <ul class="timeline ml-50">
              <li class="timeline-item">
                <span class="timeline-point timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>Lead Developer</h6>
                    <span class="timeline-event-time mr-1"><i>May 2023 - Present</i></span>
                  </div>
                  <p>Narrowcloud Solutions Sdn. Bhd.</p>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Cloudways - Managed cloud hosting for AWS/GCP/Azure/DO"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/cloudways.com/cloudways.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Cpanel - Web hosting control panel software"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/cpanel.net/cpanel.net.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Wasabi - Cloud data storage"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/wasabi.com/wasabi.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Clickup - Task Management"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/clickup.com/clickup.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Gitlab - a DevOps software package that combines the ability to develop, secure, and operate software in a single application."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/gitlab.com/gitlab.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Github - a provider of Internet hosting for software development and version control using Git."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/github.com/github.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Cloudflare - a content delivery network and DDoS mitigation service provider"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/cloudflare.com/cloudflare.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    
                    <a href="javascript:void(0)" class="text-muted text-nowrap ml-50" style="margin-top:5px;">+5 more</a>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <span class="timeline-point timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>PHP Developer (Remote)</h6>
                    <span class="timeline-event-time mr-1"><i>Dec 2022 - Jan 2023</i></span>
                  </div>
                  <p>Markets Group</p>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Cloudways - Managed cloud hosting for AWS/GCP/Azure/DO"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/cloudways.com/cloudways.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Cpanel - Web hosting control panel software"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/cpanel.net/cpanel.net.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Clickup - Task Management"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/clickup.com/clickup.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Gitlab - a DevOps software package that combines the ability to develop, secure, and operate software in a single application."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/gitlab.com/gitlab.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Github - a provider of Internet hosting for software development and version control using Git."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/github.com/github.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Cloudflare - a content delivery network and DDoS mitigation service provider"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/cloudflare.com/cloudflare.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    
                    <!-- <a href="javascript:void(0)" class="text-muted text-nowrap ml-50" style="margin-top:5px;">+5 more</a> -->
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>Senior Software Engineer</h6>
                    <span class="timeline-event-time mr-1"><i>2017 - 2022</i></span>
                  </div>
                  <p>Narrowcloud Solutions Sdn. Bhd.</p>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Onesignal - a push notification service provider for web & mobile app."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/onesignal.com/onesignal.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Mailchimp - Email marketing automate platform"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/mailchimp.com/mailchimp.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="MariaDB - a community-developed, commercially supported fork of the MySQL relational database management system."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('http://siliconangle.com/files/2013/09/mariadb-logo.png')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Zoho connect - Task Management"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://zohowebstatic.com/sites/default/files/ogimage/zoho-logo.png')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Wordpress - a free and open-source content management system written in PHP and paired with a MySQL or MariaDB database with supported HTTPS"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/wordpress.com/wordpress.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Woocommerce - an open-source e-commerce plugin for WordPress. It is designed for small to large-sized online merchants using WordPress."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/woocommerce.com/woocommerce.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>Software Engineer</h6>
                    <span class="timeline-event-time mr-1"><i>2010 - 2016</i></span>
                  </div>
                  <p>Gainsys Solution</p>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="VB.net - originally called Visual Basic .NET, is a multi-paradigm, object-oriented programming language."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://i.pinimg.com/564x/63/3f/19/633f19cd04671379b2257db894167c36.jpg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Mysql - an open-source relational database management system."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://styles.redditmedia.com/t5_2qm6k/styles/communityIcon_dhjr6guc03x51.png?width=256&s=3e825b7205c7f497d4695028e358d26ee359f84b')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Joomla - a free and open-source content management system for publishing web content on websites."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/joomla.org/joomla.org.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Wordpress - a free and open-source content management system written in PHP and paired with a MySQL or MariaDB database with supported HTTPS."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/wordpress.com/wordpress.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Woocommerce - an open-source e-commerce plugin for WordPress. It is designed for small to large-sized online merchants using WordPress."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/woocommerce.com/woocommerce.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Cpanel - Web hosting control panel software"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/cpanel.net/cpanel.net.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>System Developer</h6>
                    <span class="timeline-event-time mr-1"><i>2008 - 2010</i></span>
                  </div>
                  <p>Suruga Techno (Malaysia) Sdn. Bhd.</p>
                  <div class="avatar-group">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="VB.net - originally called Visual Basic .NET, is a multi-paradigm, object-oriented programming language."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://i.pinimg.com/564x/63/3f/19/633f19cd04671379b2257db894167c36.jpg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Mysql - an open-source relational database management system."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://styles.redditmedia.com/t5_2qm6k/styles/communityIcon_dhjr6guc03x51.png?width=256&s=3e825b7205c7f497d4695028e358d26ee359f84b')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Joomla - a free and open-source content management system for publishing web content on websites."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/joomla.org/joomla.org.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Wordpress - a free and open-source content management system written in PHP and paired with a MySQL or MariaDB database with supported HTTPS."
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://2fasvg.github.io/assets/img/logo/wordpress.com/wordpress.com.svg')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Window Server 2018 R2 Standard"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('https://www.pcsintl.com/wp-content/uploads/2019/04/winSer2008R2Std_grande-300x300.png')); ?>"
                        alt="Avatar"
                        width="33"
                        height="33"
                      />
                    </div>
                  </div>
                </div>
              </li>
              <li class="timeline-item">
                <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>Management Trainee</h6>
                    <span class="timeline-event-time mr-1">2006 - 2007</span>
                  </div>
                  <p class="mb-0">Chiyoda Integre Co (Johor) Sdn. Bhd.</p>
                </div>
              </li>
              <li class="timeline-item">
                <span class="timeline-point timeline-point-indicator"></span>
                <div class="timeline-event">
                  <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                    <h6>Supervisor</h6>
                    <span class="timeline-event-time mr-1">2004 - 2005</span>
                  </div>
                  <p class="mb-0">Handai Trading (Shimano Subcon)</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!--/ User Timeline Card -->
        <!-- post 1 -->
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center mb-1">
              <!-- avatar -->
              <div class="avatar mr-1">
                <img
                  src="<?php echo e(asset('images/portrait/small/wilsonooi.jpg')); ?>"
                  alt="avatar img"
                  height="50"
                  width="50"
                />
              </div>
              <!--/ avatar -->
              <div class="profile-user-info">
                <h6 class="mb-0">Wilson Ooi</h6>
                <small class="text-muted">12 Sept 2018 at 1:16 AM</small>
              </div>
            </div>
            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class="img-fluid rounded mb-75"
              src="<?php echo e(asset('images/banner/familytrip2018.jpg')); ?>"
              alt="avatar img"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="javascript:void(0)" class="d-flex align-items-center text-muted text-nowrap">
                  <i data-feather="heart" class="profile-likes font-medium-3 mr-50"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ml-1">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Trina Lynes"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-1.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Lilian Nenez"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-2.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Alberto Glotzbach"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-3.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="George Nordic"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-5.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-4.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="text-muted text-nowrap ml-50">+140 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="javascript:void(0)" class="text-nowrap">
                  <i data-feather="message-square" class="text-body font-medium-3 mr-50"></i>
                  <span class="text-muted mr-1">1.25k</span>
                </a>

                <a href="javascript:void(0)" class="text-nowrap">
                  <i data-feather="share-2" class="text-body font-medium-3 mx-50"></i>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 mr-75">
                <img
                  src="<?php echo e(asset('images/portrait/small/avatar-s-6.jpg')); ?>"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="javascript:void(0)">
                    <i data-feather="heart" class="text-body font-medium-3"></i>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 mr-75">
                <img
                  src="<?php echo e(asset('images/portrait/small/avatar-s-8.jpg')); ?>"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Jackey Potter</h6>
                  <a href="javascript:void(0)">
                    <i data-feather="heart" class="profile-likes font-medium-3"></i>
                    <span class="align-middle text-muted">61</span>
                  </a>
                </div>
                <small>
                  Unlimited color🖌 options allows you to set your application color as per your branding 🤪.
                </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment box -->
            <fieldset class="form-label-group mb-75">
              <textarea class="form-control" id="label-textarea" rows="3" placeholder="Add Comment"></textarea>
              <label for="label-textarea">Add Comment</label>
            </fieldset>
            <!--/ comment box -->
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <!--/ post 1 -->

        <!-- post 2 -->
        <div class="card">
          <div class="card-body">
            <!-- avatar image and title -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-1">
                <img
                  src="<?php echo e(asset('images/portrait/small/wilsonooi.jpg')); ?>"
                  alt="avatar img"
                  height="50"
                  width="50"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Wilson Ooi</h6>
                <small class="text-muted">11 Sept 2018 at 2:16 PM</small>
              </div>
            </div>
            <!--/ avatar image and title -->
            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>
            <!-- post img -->
            <img
              class="img-fluid rounded mb-75"
              src="<?php echo e(asset('images/trip/DSC_0051.JPG')); ?>"
              alt="avatar img"
            />
            <!--/ post img -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="javascript:void(0)" class="d-flex align-items-center text-muted text-nowrap">
                  <i data-feather="heart" class="profile-likes font-medium-3 mr-50"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ml-1">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Trina Lynes"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-1.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Lilian Nenez"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-2.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Alberto Glotzbach"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-3.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="George Nordic"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-5.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-4.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="text-muted text-nowrap ml-50">+271 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="javascript:void(0)" class="text-nowrap">
                  <i data-feather="message-square" class="text-body font-medium-3 mr-50"></i>
                  <span class="text-muted mr-1">1.25k</span>
                </a>

                <a href="javascript:void(0)" class="text-nowrap">
                  <i data-feather="share-2" class="text-body font-medium-3 mx-50"></i>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comments -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 mr-50">
                <img
                  src="<?php echo e(asset('images/portrait/small/avatar-s-3.jpg')); ?>"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-items-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="javascript:void(0)">
                    <i data-feather="heart" class="text-body font-medium-3"></i>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly. </small>
              </div>
            </div>
            <!--/ comments -->

            <!-- comment text area -->
            <fieldset class="form-label-group mb-75">
              <textarea class="form-control" id="label-textarea2" rows="3" placeholder="Add Comment"></textarea>
              <label for="label-textarea2">Add Comment</label>
            </fieldset>
            <!--/ comment text area -->
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <!--/ post 2 -->

        <!-- post 3 -->
        <div class="card">
          <div class="card-body">
            <!-- avatar image title -->
            <div class="d-flex justify-content-start align-items-center mb-1">
              <div class="avatar mr-1">
                <img
                  src="<?php echo e(asset('images/portrait/small/wilsonooi.jpg')); ?>"
                  alt="avatar img"
                  height="50"
                  width="50"
                />
              </div>
              <div class="profile-user-info">
                <h6 class="mb-0">Wilson Ooi</h6>
                <small class="text-muted">12 Dec 2019 at 1:16 AM</small>
              </div>
            </div>
            <!--/ avatar image title -->

            <p class="card-text">
              Wonderful Machine· A well-written bio allows viewers to get to know a photographer beyond the work. This
              can make the difference when presenting to clients who are looking for the perfect fit.
            </p>

            <!-- video -->
            <div style="padding:56.25% 0 0 0;position:relative;margin-bottom:10px;">
              <iframe 
                src="https://player.vimeo.com/video/736118760?h=02e9e1372d&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" 
                frameborder="0" allow="autoplay; fullscreen; picture-in-picture" 
                allowfullscreen 
                style="position:absolute;top:0;left:0;width:100%;height:100%;" 
                title="Sunrise Campsite">
              </iframe>
            </div>
            <script src="https://player.vimeo.com/api/player.js"></script>
            <!--/ video -->

            <!-- like share -->
            <div class="row d-flex justify-content-start align-items-center flex-wrap pb-50">
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-start mb-2">
                <a href="javascript:void(0)" class="d-flex align-items-center text-muted text-nowrap">
                  <i data-feather="heart" class="profile-likes font-medium-3 mr-50"></i>
                  <span>1.25k</span>
                </a>

                <!-- avatar group with tooltip -->
                <div class="d-flex align-items-center">
                  <div class="avatar-group ml-1">
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Vinnie Mostowy"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-5.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Elicia Rieske"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-7.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Julee Rossignol"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-10.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Darcey Nooner"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-8.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                    <div
                      data-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-placement="bottom"
                      data-original-title="Elicia Rieske"
                      class="avatar pull-up"
                    >
                      <img
                        src="<?php echo e(asset('images/portrait/small/avatar-s-7.jpg')); ?>"
                        alt="Avatar"
                        height="26"
                        width="26"
                      />
                    </div>
                  </div>
                  <a href="javascript:void(0)" class="text-muted text-nowrap ml-50">+264 more</a>
                </div>
                <!-- avatar group with tooltip -->
              </div>

              <!-- share and like count and icons -->
              <div class="col-sm-6 d-flex justify-content-between justify-content-sm-end align-items-center mb-2">
                <a href="javascript:void(0)" class="text-nowrap">
                  <i data-feather="message-square" class="text-body font-medium-3 mr-50"></i>
                  <span class="text-muted mr-1">1.25k</span>
                </a>

                <a href="javascript:void(0)" class="text-nowrap">
                  <i data-feather="share-2" class="text-body font-medium-3 mx-50"></i>
                  <span class="text-muted">1.25k</span>
                </a>
              </div>
              <!-- share and like count and icons -->
            </div>
            <!-- like share -->

            <!-- comment -->
            <div class="d-flex align-items-start mb-1">
              <div class="avatar mt-25 mr-50">
                <img
                  src="<?php echo e(asset('images/portrait/small/avatar-s-3.jpg')); ?>"
                  alt="Avatar"
                  height="34"
                  width="34"
                />
              </div>
              <div class="profile-user-info w-100">
                <div class="d-flex align-content-center justify-content-between">
                  <h6 class="mb-0">Kitty Allanson</h6>
                  <a href="javascript:void(0)">
                    <i data-feather="heart" class="text-body font-medium-3"></i>
                    <span class="align-middle text-muted">34</span>
                  </a>
                </div>
                <small>Easy & smart fuzzy search🕵🏻 functionality which enables users to search quickly.</small>
              </div>
            </div>
            <!-- comment -->

            <!-- comment text area -->
            <fieldset class="form-label-group mb-75">
              <textarea class="form-control" id="label-textarea3" rows="3" placeholder="Add Comment"></textarea>
              <label for="label-textarea3">Add Comment</label>
            </fieldset>
            <!-- comment text area -->
            <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
          </div>
        </div>
        <!--/ post 3 -->
      </div>
      <!--/ right profile info section -->
    </div>

    <!-- reload button -->
    <div class="row">
      <div class="col-12 text-center">
        <button type="button" class="btn btn-sm btn-primary block-element border-0 mb-1">Load More</button>
      </div>
    </div>
    <!--/ reload button -->
  </section>
  <!--/ profile info section -->
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
  
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/datatables.checkboxes.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/jszip.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/pdfmake.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/vfs_fonts.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/buttons.html5.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/buttons.print.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js'))); ?>"></script>

  <script src="<?php echo e(asset(mix('vendors/js/file-uploaders/dropzone.min.js'))); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-script'); ?>
  
  <script src="<?php echo e(asset(mix('js/scripts/pages/page-profile.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('js/scripts/tables/table-datatables-basic.js'))); ?>"></script>
  <script src="<?php echo e(asset(mix('js/scripts/forms/form-file-uploader.js'))); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/1302218.cloudwaysapps.com/nqwggxwnxn/public_html/resources/views//content/pages/page-profile.blade.php ENDPATH**/ ?>
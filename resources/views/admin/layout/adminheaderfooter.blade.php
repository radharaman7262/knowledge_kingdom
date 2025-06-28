
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('public/admin/assets/')}}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title> @yield('page_title') || {{bussiness_setting_data('site_name')}} </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('/storage/app/'.bussiness_setting_data('favicon'))}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/demo.css')}}" />
	      <link rel="stylesheet" href="{{ asset('public/admin/assets/data-table/datatables/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('public/admin/assets/data-table/datatables/dataTables.bootstrap5.min.css')}}" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{ asset('public/admin/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->
 

    <!-- Helpers -->
    <script src="{{ asset('public/admin/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('public/admin/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{url('/')}}" class="app-brand-link" target="_blank" >
              <img src="{{url('/storage/app/'.bussiness_setting_data('logo'))}}" alt="{{bussiness_setting_data('site_name')}}" height="50px" width="100%">
              {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item @yield('dashboard_active')">
              <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

               <!-- Bussiness Setting -->
               <li class="menu-item @yield('bussiness_active')">
                <a href="{{ route('admin.bussinesssetting') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-cog"></i>
                    <div data-i18n="Analytics">Bussiness Setting</div>
                </a>
            </li>
               <!-- cms Setting -->
               <li class="menu-item @yield('cms_active')">
                <a href="{{ route('admin.cms-setting') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-cog"></i>
                    <div data-i18n="Analytics">CMS Setting</div>
                </a>
            </li>
			  
			    <li class="menu-item @yield('add_seo_page_active') @yield('seo_active')">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
               <i class='menu-icon tf-icons bx bx-cog'></i>
                <div data-i18n="Authentications">SEO </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item @yield('add_seo_page_active')">
                  <a href="{{route('admin.seo')}}" class="menu-link" >
                    <div data-i18n="Basic">Add SEO</div>
                  </a>
                </li>
                <li class="menu-item @yield('seo_active')">
                  <a href="{{route('admin.data/seo')}}" class="menu-link" >
                    <div data-i18n="Basic">All SEO</div>
                  </a>
                </li>

              </ul>
            </li>



            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item @yield('slider_page_active') @yield('add_slider_page_active')">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
				  <i class='bx bxs-grid'></i>
              
                <div data-i18n="Account Settings">Slider</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item @yield('add_slider_page_active')">
                  <a href="{{route('admin.slider')}}" class="menu-link">
                    <div data-i18n="Account"> Add Slider</div>
                  </a>
                </li>

                <li class="menu-item @yield('slider_page_active')">
                  <a href="{{route('admin.data/slider')}}" class="menu-link">
                    <div data-i18n="Notifications">All Slider</div>
                  </a>
                </li>

              </ul>
            </li>
            <li class="menu-item @yield('add_feature_page_active') @yield('featured_page_active')">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-grid'></i>
                <div data-i18n="Authentications">Featured</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item @yield('add_feature_page_active')">
                  <a href="{{route('admin.featured')}}" class="menu-link" >
                    <div data-i18n="Basic">Add Featured</div>
                  </a>
                </li>
                <li class="menu-item @yield('featured_page_active')">
                  <a href="{{route('admin.data/featured')}}" class="menu-link" >
                    <div data-i18n="Basic">All Featured</div>
                  </a>
                </li>

              </ul>
            </li>

            <li class="menu-item @yield('add_faq_cat_page_active') @yield('faq_cat_page_active')">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
               <i class='bx bxs-grid'></i>
                <div data-i18n="Authentications">Faq Category</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item @yield('add_faq_cat_page_active')">
                  <a href="{{route('admin.faq-category')}}" class="menu-link" >
                    <div data-i18n="Basic">Add Faq Category</div>
                  </a>
                </li>
                <li class="menu-item @yield('faq_cat_page_active')">
                  <a href="{{route('admin.data/faq-category')}}" class="menu-link" >
                    <div data-i18n="Basic">All Faq Category</div>
                  </a>
                </li>

              </ul>
            </li>
            <li class="menu-item @yield('faqs_active') @yield('faq_data_active')">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bxs-grid'></i>
                <div data-i18n="Authentications">Faqs</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item @yield('faqs_active')">
                  <a href="{{route('admin.faqs')}}" class="menu-link" >
                    <div data-i18n="Basic">Add Faq</div>
                  </a>
                </li>
                <li class="menu-item @yield('faq_data_active')">
                  <a href="{{route('admin.data/faqs')}}" class="menu-link" >
                    <div data-i18n="Basic">All Faq</div>
                  </a>
                </li>

              </ul>
            </li>

            <li class="menu-item @yield('add_finance_page_active') @yield('finance_page_active')">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
               <i class='bx bxs-grid'></i>
                <div data-i18n="Authentications">Finance Banks</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item @yield('add_finance_page_active')">
                  <a href="{{route('admin.finance_banks')}}" class="menu-link" >
                    <div data-i18n="Basic">Add Finance Banks</div>
                  </a>
                </li>
                <li class="menu-item @yield('finance_page_active')">
                  <a href="{{route('admin.data/finance_banks')}}" class="menu-link" >
                    <div data-i18n="Basic">All Finance Banks</div>
                  </a>
                </li>

              </ul>
            </li>
            <li class="menu-item @yield('add_testimonial_active') @yield('testimonial_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
             <i class='bx bxs-grid'></i>
                    <div data-i18n="Account Settings">Testimonial</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('add_testimonial_active')">
                        <a href="{{ route('admin.testimonial') }}" class="menu-link">
                            <div data-i18n="Account">Add Testimonial</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('testimonial_active')">
                        <a href="{{ route('admin.data.testimonial') }}" class="menu-link">
                            <div data-i18n="Notifications">All Testimonial</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item @yield('add_blog_active') @yield('blog_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
         <i class='bx bxs-grid'></i>
                    <div data-i18n="Account Settings">Blog</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('add_blog_active')">
                        <a href="{{ route('admin.blog') }}" class="menu-link">
                            <div data-i18n="Account">Add Blog</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('blog_active')">
                        <a href="{{ route('admin.data.blog') }}" class="menu-link">
                            <div data-i18n="Notifications">All Blog</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item @yield('add_news_update_page_active') @yield('news_page_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bxs-grid'></i>
                    <div data-i18n="Account Settings">News Update</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('add_news_update_page_active')">
                        <a href="{{ route('admin.news-update') }}" class="menu-link">
                            <div data-i18n="Account">Add News Update</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('news_page_active')">
                        <a href="{{ route('admin.data/news-update') }}" class="menu-link">
                            <div data-i18n="Notifications">All News Update</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item @yield('add_video_page_active') @yield('video_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
               <i class='bx bxs-grid'></i>
                    <div data-i18n="Account Settings">Video Setting</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('add_video_page_active')">
                        <a href="{{ route('admin.video') }}" class="menu-link">
                            <div data-i18n="Account">Add Video Setting</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('video_active')">
                        <a href="{{ route('admin.data/video') }}" class="menu-link">
                            <div data-i18n="Notifications">All Video Setting</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item @yield('add_achievers_active') @yield('achievers_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class='bx bxs-grid'></i>
                    <div data-i18n="Account Settings">Achievers</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('add_achievers_active')">
                        <a href="{{ route('admin.achievers') }}" class="menu-link">
                            <div data-i18n="Account">Add Achievers</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('achievers_active')">
                        <a href="{{ route('admin.data.achievers') }}" class="menu-link">
                            <div data-i18n="Notifications">All Achievers</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item @yield('add_countries_active') @yield('countries_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class='bx bxs-grid'></i>
                    <div data-i18n="Account Settings">Countries</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('add_countries_active')">
                        <a href="{{ route('admin.countries') }}" class="menu-link">
                            <div data-i18n="Account">Add Countries</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('countries_active')">
                        <a href="{{ route('admin.data.countries') }}" class="menu-link">
                            <div data-i18n="Notifications">All Countries</div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="menu-item @yield('add_coachings_active') @yield('coachings_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class='bx bxs-grid'></i>
                    <div data-i18n="Account Settings">Coachings</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('add_coachings_active')">
                        <a href="{{ route('admin.coachings') }}" class="menu-link">
                            <div data-i18n="Account">Add Coachings</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('coachings_active')">
                        <a href="{{ route('admin.data.coachings') }}" class="menu-link">
                            <div data-i18n="Notifications">All Coachings</div>
                        </a>
                    </li>

                </ul>
            </li>
			     <li class="menu-item @yield('contact_page_active') @yield('free_active')">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="bx bxs-grid"></i>
                    <div data-i18n="Account Settings">Contact</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item @yield('contact_page_active')">
                        <a href="{{ route('admin.data/contact') }}" class="menu-link">
                            <div data-i18n="Account">All Contact</div>
                        </a>
                    </li>
                    <li class="menu-item @yield('free_active')">
                        <a href="{{ route('admin.data/test') }}" class="menu-link">
                            <div data-i18n="Notifications">All Free Tests</div>
                        </a>
                    </li>

                </ul>
            </li>


          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          
       

              <ul class="navbar-nav flex-row align-items-center ms-auto">


                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{url('/storage/app/'.admin_data('admin_image'))}}" alt="admin image" class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                                <i class="fa fa-user"></i>
                              <img src="{{url('storage/app/'.admin_data('admin_image'))}}" alt="admin image" class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{admin_data('name')}}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>

                      <a class="dropdown-item" href="{{route('admin.demo.setting')}}">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>

                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{route('admin.logout')}}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          @yield('content')
                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                      <div class="mb-2 mb-md-0">
                        ©
                        <script>
                          document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href="https://satyakabir.com" target="_blank" class="footer-link fw-bolder">Satya Kabir E-solutions Private Limited</a>
                      </div>

                    </div>
                  </footer>
                  <!-- / Footer -->

                  <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
              </div>
              <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
          </div>
          <!-- / Layout wrapper -->


              <!-- delete model -->
                                    <div class="modal fade" id="confirm" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header ">
                                                    <h4 class="modal-title text-start" id="myModalLabel">Delete
                                                        Confirmation</h4>
                                                    {{-- <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">&times;</button> --}}

                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure want to delete this item?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                    <a id="delete_row"
                                                        class="btn btn-danger btn-ok">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



          <!-- Core JS -->
          <!-- build:js assets/vendor/js/core.js -->
          <script src="{{ asset('public/admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
          <script src="{{ asset('public/admin/assets/vendor/libs/popper/popper.js')}}"></script>
          <script src="{{ asset('public/admin/assets/vendor/js/bootstrap.js')}}"></script>
          <script src="{{ asset('public/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

          <script src="{{ asset('public/admin/assets/vendor/js/menu.js')}}"></script>
          <!-- endbuild -->

          <!-- Vendors JS -->
          <script src="{{ asset('public/admin/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

          <!-- Main JS -->
          <script src="{{ asset('public/admin/assets/js/main.js')}}"></script>

          <!-- Page JS -->
          <script src="{{ asset('public/admin/assets/js/dashboards-analytics.js')}}"></script>
			          <script src="{{ asset('public/admin/assets/js/dataTables.bundle.js')}}"></script>

          <script src="{{ asset('public/admin/assets/ckeditor/ckeditor.js') }}"></script>

          <script type="text/javascript">
            CKEDITOR.config.autoParagraph = false;
            CKEDITOR.config.height = 100;
			  
			  			  CKEDITOR.replace("answer");
			  CKEDITOR.replace("iets_exam_text");
			   CKEDITOR.replace("home_title");
            CKEDITOR.replace("home_subtitle");
            CKEDITOR.replace("upcoming_event_text");
            CKEDITOR.replace("video_gallery_text");
            CKEDITOR.replace("new_hightlights_text");
            CKEDITOR.replace("press_release_text");
            CKEDITOR.replace("feedback_text");
			  CKEDITOR.replace("contact_text");
            CKEDITOR.replace("results_text");
            CKEDITOR.replace("scholarship_text");
            CKEDITOR.replace("why_us_arr");
            CKEDITOR.replace("who_we_are");
            CKEDITOR.replace("overseas_consultant");
            CKEDITOR.replace("team_content");
            CKEDITOR.replace("our_advisors");
            CKEDITOR.replace("education_advisors");
            CKEDITOR.replace("about_intro");
            CKEDITOR.replace("where_we_offer");
            CKEDITOR.replace("what_we_offer");
            CKEDITOR.replace("history");

            CKEDITOR.replace("about_home");
            CKEDITOR.replace("description");
            CKEDITOR.replace("universities");
            CKEDITOR.replace("hightlights");
            CKEDITOR.replace("short_desc");
            CKEDITOR.replace("examdetail");




        </script>

          <!-- Place this tag in your head or just before your close body tag. -->
          <script async defer src="https://buttons.github.io/buttons.js"></script>
          <script type="text/javascript">
            function updateStatus(id, status, table, column) {

                $.ajax({
                    url: "{{ route('admin.ajax.status') }}",
                    type: "POST",
                    data: {
                        id: id,
                        status: status,
                        column: column,
                        table: table,
                        _token: "{{ csrf_token() }}"
                    },

                    success: function(responce) {
                        if (responce == 1) {
                            alert(column + " updated");
                            $("#" + column + "_" + id).data("status", 0);
                        } else {
                            $("#" + column + "_" + id).data("status", 1);
                        }

                    }
                });
            }
        </script>
          <script>
    $('#myDataTable')
    .addClass( 'nowrap')
    .dataTable( {
        responsive: true,
        columnDefs: [
            { targets: [-1, -3], className: 'dt-body-right' }
        ]
    });
</script>

  <script>
            function deleteRecord(id){


                $("#delete_row").attr("href",id);
                $("#confirm").modal("show");
            }
        </script>

        </body>
      </html>


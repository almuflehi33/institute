<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr"
    data-pc-theme="light">
<!-- [Head] start -->

<head>
    <title>Home | Datta Able Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Datta Able is trending dashboard template made using Bootstrap 5 design framework. Datta Able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />

    <!-- [Font] Family -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" src="{{ asset('assets/fonts/phosphor/duotone/style.css') }}" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather.css') }}" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome.css') }}" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" />

</head>
<!-- [Head] end -->

<!-- [Body] Start -->

<body>

    <!-- [ Pre-loader ] start -->
    <div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
        <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
            <div
                class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]">
            </div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    <x-main-nav />
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    <x-header />
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            @yield('breadcrumb')
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="col-span-12 xl:col-span-8 md:col-span-6">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>Recent Users</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr class="unread">
                                        <td>
                                            <img class="rounded-full max-w-10" style="width: 40px"
                                                src="../assets/images/user/avatar-1.jpg" alt="activity-user" />
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Isabella Christensen</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted">
                                                <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                                                11 MAY 12:56
                                            </h6>
                                        </td>
                                        <td>
                                            <a href="#!"
                                                class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Reject</a>
                                            <a href="#!"
                                                class="badge bg-theme-bg-1 text-white text-[12px]">Approve</a>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td>
                                            <img class="rounded-full max-w-10" style="width: 40px"
                                                src="../assets/images/user/avatar-2.jpg" alt="activity-user" />
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Mathilde Andersen</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted">
                                                <i class="fas fa-circle text-danger text-[10px] ltr:mr-4 rtl:ml-4"></i>
                                                11 MAY 10:35
                                            </h6>
                                        </td>
                                        <td>
                                            <a href="#!"
                                                class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Reject</a>
                                            <a href="#!"
                                                class="badge bg-theme-bg-1 text-white text-[12px]">Approve</a>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td>
                                            <img class="rounded-full max-w-10" style="width: 40px"
                                                src="../assets/images/user/avatar-3.jpg" alt="activity-user" />
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Karla Sorensen</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted">
                                                <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                                                9 MAY 17:38
                                            </h6>
                                        </td>
                                        <td>
                                            <a href="#!"
                                                class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Reject</a>
                                            <a href="#!"
                                                class="badge bg-theme-bg-1 text-white text-[12px]">Approve</a>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td>
                                            <img class="rounded-full max-w-10" style="width: 40px"
                                                src="../assets/images/user/avatar-1.jpg" alt="activity-user" />
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Ida Jorgensen</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted f-w-300">
                                                <i class="fas fa-circle text-danger text-[10px] ltr:mr-4 rtl:ml-4"></i>
                                                19 MAY 12:56
                                            </h6>
                                        </td>
                                        <td>
                                            <a href="#!"
                                                class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Reject</a>
                                            <a href="#!"
                                                class="badge bg-theme-bg-1 text-white text-[12px]">Approve</a>
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td>
                                            <img class="rounded-full max-w-10" style="width: 40px"
                                                src="../assets/images/user/avatar-2.jpg" alt="activity-user" />
                                        </td>
                                        <td>
                                            <h6 class="mb-1">Albert Andersen</h6>
                                            <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                                        </td>
                                        <td>
                                            <h6 class="text-muted">
                                                <i
                                                    class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                                                21 July 
                                            </h6>
                                        </td>
                                        <td>
                                            <a href="#!"
                                                class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Reject</a>
                                            <a href="#!"
                                                class="badge bg-theme-bg-1 text-white text-[12px]">Approve</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- [ Footer ] start -->
    <x-footer />
    <!-- [ Footer ] end -->

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/icon/custom-icon.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/component.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
    </div>


    <script>
        layout_change('false');
    </script>


    <script>
        layout_theme_sidebar_change('dark');
    </script>


    <script>
        change_box_container('false');
    </script>

    <script>
        layout_caption_change('true');
    </script>

    <script>
        layout_rtl_change('false');
    </script>

    <script>
        preset_change('preset-1');
    </script>

    <script>
        main_layout_change('vertical');
    </script>


</body>
<!-- [Body] end -->

</html>

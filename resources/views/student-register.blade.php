<!doctype html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr"
    data-pc-theme="light">
<!-- [Head] start -->

<head>
    <title></title>
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
    <div class="auth-main relative">
        <div class="auth-wrapper v1 flex items-center w-full h-full min-h-screen">
            <div class="auth-form flex items-center justify-center grow flex-col min-h-screen relative p-6 ">
                <div class="w-full max-w-[350px] relative">
                    <div class="auth-bg ">
                        <span
                            class="absolute top-[-100px] right-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
                        <span
                            class="absolute top-[150px] right-[-150px] w-5 h-5 block rounded-full bg-primary-500 animate-[floating_9s_infinite]"></span>
                        <span
                            class="absolute left-[-150px] bottom-[150px] w-5 h-5 block rounded-full bg-theme-bg-1 animate-[floating_7s_infinite]"></span>
                        <span
                            class="absolute left-[-100px] bottom-[-100px] w-[300px] h-[300px] block rounded-full bg-theme-bg-2 animate-[floating_9s_infinite]"></span>
                    </div>

                    <form method="POST" action="{{ route('student.register') }}">
                        @csrf
                        <div class="card sm:my-12  w-full shadow-none">
                            <div class="card-body !p-10">
                                <div class="text-center mb-8">
                                    <a href="#"><img src="../assets/images/logo-dark.svg" alt="img"
                                            class="mx-auto auth-logo" /></a>
                                </div>
                                <h4 class="text-center font-medium mb-4">Register1</h4>
                                <div class="grid grid-cols-12 gap-3 mb-3">
                                    {{-- Full name input --}}
                                    <div class="col-span-12">
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" placeholder="Full Name" required>
                                        @error('name')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    {{-- Email input --}}
                                    <input type="email" class="form-control" placeholder="Email Address" required
                                        name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    {{-- Password input --}}
                                    <input type="password" class="form-control" placeholder="Password" required
                                        name="password">
                                    @error('password')
                                        <small class="text-red-500">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    {{-- Confirm Password input --}}
                                    <input type="password" class="form-control" placeholder="Confirm Password" required
                                        name="password_confirmation">
                                </div>
                                <div class="flex mt-1 justify-between items-center flex-wrap">
                                    <div class="form-check">
                                        <input class="form-check-input input-primary" type="checkbox" name="terms"
                                            id="customCheckc1" checked="" required />
                                        @error('terms')
                                            <small class="text-red-500">{{ $message }}</small>
                                        @enderror
                                        <label class="form-check-label text-muted" for="customCheckc1">I agree to all
                                            the Terms &amp; Condition</label>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                    <button type="submit" class="btn btn-primary mx-auto shadow-2xl">Register</button>

                                </div>
                                <div class="flex justify-between items-end flex-wrap mt-4">
                                    <h6 class="font-medium mb-0">Already have an Account?</h6>
                                    <a href="{{ route('student.dashboard') }}" class="text-primary-500">Login</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
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

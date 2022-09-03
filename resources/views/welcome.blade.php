<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title> WeeCupcakes | Order Form </title>

    <meta name="description"
        content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">

    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

    <link rel="icon" type="image/x-icon"
        href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/select2/select2.css" />

    <script src="../../assets/vendor/js/helpers.js"></script>

    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <script src="../../assets/js/config.js"></script>

    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>

</head>

<body>

    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            {{-- <div class="layout-page"> --}}

            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">

                    <h4 class="fw-bold py-3 mb-4">Here To Make The Cake Of Your Dreams.</h4>

                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Describe your own cake and we
                            will create it for you!</span></h4>

                    <div class="row">
                        <div class="col-xxl">
                            <div class="card mb-4">
                                {{-- <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default
                                        label</small>
                                </div> --}}
                                <div class="card-body">
                                    <form method="POST" action="{{ route('order.store')}}">
                                        @csrf
                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Your
                                                Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name"
                                                    id="basic-default-name" placeholder="Name" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-email">Your
                                                E-mail</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="basic-default-email" class="form-control"
                                                        placeholder="Email" aria-label="Email" name="email"
                                                        aria-describedby="basic-default-email2" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-phone">Your
                                                Contact Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" id="basic-default-phone" name="phone"
                                                    class="form-control phone-mask" placeholder="Contact Number"
                                                    aria-label="658 799 8941" aria-describedby="basic-default-phone" />
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-company">Date
                                                Required</label>
                                            <div class="col-sm-10">
                                                <input type="date" name="date" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="multicol-country">Cake
                                                Size</label>
                                            <div class="col-sm-10">
                                                <select id="multicol-country" name="cake_size"
                                                    class="select2 form-select" data-allow-clear="true">
                                                    <option value=""> Please Select </option>
                                                    <option value="No Cake "> No Cake </option>
                                                    <option value="6” round - 12 servings "> 6” round - 12 servings
                                                    </option>
                                                    <option value="6” square (+£5) - 18 servings "> 6” square (+£5) -
                                                        18 servings </option>
                                                    <option value="6” tall (round) "> 6” tall (round) </option>
                                                    <option value="7” round "> 7” round </option>
                                                    <option value="7” square (+£5)"> 7” square (+£5) </option>
                                                    <option value="7” tall (round) "> 7” tall (round) </option>
                                                    <option value="8” round "> 8” round </option>
                                                    <option value="8” square (+£6)"> 8” square (+£6) </option>
                                                    <option value="9” round "> 9” round </option>
                                                    <option value="9” square  (+£6)"> 9” square (+£6) </option>
                                                    <option value="10” round "> 10” round </option>
                                                    <option value="10” square (+£7)"> 10” square (+£7) </option>
                                                    <option value="12” round "> 12” round </option>
                                                    <option value="12” square  (+£7)"> 12” square (+£7) </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                for="multicol-country">Cupcakes</label>
                                            <div class="col-sm-10">
                                                <select id="multicol-country" name="cupcakes"
                                                    class="select2 form-select" data-allow-clear="true">
                                                    <option value=""> Please Select </option>
                                                    <option value="No Cupcakes "> No Cupcakes </option>
                                                    <option value="12 Cupcakes "> 12 Cupcakes </option>
                                                    <option value="18 Cupcakes "> 18 Cupcakes </option>
                                                    <option value="24 Cupcakes "> 24 Cupcakes </option>
                                                    <option value="36 Cupcakes "> 36 Cupcakes </option>
                                                    <option value="42 Cupcakes "> 42 Cupcakes </option>
                                                    <option value="48 Cupcakes "> 48 Cupcakes </option>
                                                    <option value="54 Cupcakes "> 54 Cupcakes </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                for="multicol-country">Flavour</label>
                                            <div class="col-sm-10">
                                                <select id="multicol-country" name="flavour"
                                                    class="select2 form-select" data-allow-clear="true">
                                                    <option value=""> Please Select </option>
                                                    <option value="Chocolate Cake "> Chocolate Cake </option>
                                                    <option value="Salted Caramel Cake "> Salted Caramel Cake </option>
                                                    <option value="Red Velvet Cake "> Red Velvet Cake </option>
                                                    <option value="Vanilla Cake "> Vanilla Cake </option>
                                                    <option value="Carrot Cake "> Carrot Cake </option>
                                                    <option value="Coffee &amp; Walnut Cake "> Coffee &amp; Walnut Cake
                                                    </option>
                                                    <option value="Lotus Biscoff Cake "> Lotus Biscoff Cake </option>
                                                    <option value="Top Deck (Vanilla &amp; Chocolate Layers)"> Top Deck
                                                        (Vanilla &amp; Chocolate Layers) </option>
                                                    <option value="Marble (Vanilla &amp; Chocolate Marbled)"> Marble
                                                        (Vanilla &amp; Chocolate Marbled) </option>
                                                    <option value="Rainbow (Multi Coloured Layers)"> Rainbow (Multi
                                                        Coloured Layers) </option>
                                                    <option value="Strawberry Cake "> Strawberry Cake </option>
                                                    <option value="Cookies &amp; Cream (Oreo) "> Cookies &amp; Cream
                                                        (Oreo) </option>
                                                    <option value="Lemon Cake "> Lemon Cake </option>
                                                    <option
                                                        value="Mixed flavour- (Red velvet, Chocolate &amp; Vanilla) +£5">
                                                        Mixed flavour- (Red velvet, Chocolate &amp; Vanilla) +£5
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label"
                                                for="multicol-country">Filling</label>
                                            <div class="col-sm-10">
                                                <select id="multicol-country" name="fillings"
                                                    class="select2 form-select" data-allow-clear="true">
                                                    <<option value=""> Please Select </option>
                                                        <option value="Vanilla Buttercream "> Vanilla Buttercream
                                                        </option>
                                                        <option value="Chocolate Buttercream "> Chocolate Buttercream
                                                        </option>
                                                        <option value="Lotus Biscoff Buttercream "> Lotus Biscoff
                                                            Buttercream </option>
                                                        <option value="Salted Caramel Buttercream "> Salted Caramel
                                                            Buttercream </option>
                                                        <option value="Strawberry Buttercream "> Strawberry Buttercream
                                                        </option>
                                                        <option value="Oreo Buttercream "> Oreo Buttercream </option>
                                                        <option value="Cream Cheese Buttercream "> Cream Cheese
                                                            Buttercream </option>
                                                        <option value="Lemon Buttercream "> Lemon Buttercream </option>
                                                        <option value="Coffee Buttercream "> Coffee Buttercream
                                                        </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="multicol-country">Cake
                                                Toppers</label>
                                            <div class="col-sm-10">
                                                <select id="multicol-country" name="toppings"
                                                    class="select2 form-select" data-allow-clear="true">
                                                    <option value=""> Please Select </option>
                                                    <option value="No Toppers "> No Toppers </option>
                                                    <option value="Personalised from £5"> Personalised from £5
                                                    </option>
                                                    <option value="Happy Birthday (acrylic) - £3"> Happy Birthday
                                                        (acrylic) - £3 </option>
                                                    <option value="Happy Birthday charm - £2 each "> Happy Birthday
                                                        charm - £2 each </option>
                                                    <option value="Happy Birthday (paper) - £1.50"> Happy Birthday
                                                        (paper) - £1.50 </option>
                                                    <option value="Mirror shine number - £1 each "> Mirror shine number
                                                        - £1 each </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-email">Theme
                                                of Cake</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="basic-default-email"
                                                        class="form-control" placeholder="Cake Theme"
                                                        aria-label="john.doe" name="theme"
                                                        aria-describedby="basic-default-email2" />
                                                </div>
                                                <div class="form-text">e.g. Funny, Hip, Futuristic, Outback, Movies,
                                                    Cartoon
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-name">Any
                                                Food Allergies?</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="basic-default-name"
                                                    name="food_allergies" placeholder="Allergies" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-2 col-form-label" for="basic-default-email">Delivery
                                                Or Collection</label>
                                            <div class="col-sm-10">
                                                <div class="input-group input-group-merge">
                                                    <input type="text" id="basic-default-email"
                                                        class="form-control" placeholder="Delivery Or Collection"
                                                        aria-label="john.doe" name="delivery"
                                                        aria-describedby="basic-default-email2" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            Designed by <a href="https://mqographics.co.zw" target="_blank"
                                class="footer-link fw-bolder">Mqographics</a>
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                    </div>
                </footer>

                <div class="content-backdrop fade"></div>
            </div>
            {{-- </div> --}}
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>

        <div class="drag-target"></div>

    </div>

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets/vendor/js/menu.js"></script>

    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="../../assets/vendor/libs/select2/select2.js"></script>

    <script src="../../assets/js/main.js"></script>

    <script src="../../assets/js/form-layouts.js"></script>

</body>

</html>

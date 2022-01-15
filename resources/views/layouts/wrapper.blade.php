<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    </head>
    <body class="grey lighten-3"
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper">
                        <a href="#" data-target="slide-out" class="left sidenav-trigger show-on-medium-and-up" style="left:22%">
                            <i class="material-icons">menu</i>
                        </a>
                        <div class="nav-wrapper">
                            <a href="#" class="brand-logo" style="left:26%">Logo</a>
                            <ul id="slide-out" class="sidenav sidenav-fixed">
                                <li>
                                    <div class="user-view">
                                            <img src="{{ asset('images/WikaLogo.png') }}" class="responsive-img">
                                    </div>
                                </li>
                                <li><div class="divider"></div></li>
                                <li><a class="subheader">General</a></li>
                                <li><a class="route-link waves-effect" href="#!"><i class="material-icons">qr_code_scanner</i>QR Code</a></li>
                                <li><a class="route-link waves-effect" href="#!"><i class="material-icons">dashboard</i>dashboard</a></li>
                                <li><a class="route-link waves-effect" href="/repair/form"><i class="material-icons">post_add</i>Form</a></li>
                                <li><a class="route-link waves-effect" href="/inventory/list"><i class="material-icons">construction</i>Inventory Management</a></li>
                                <li><a class="route-link waves-effect" href="#!"><i class="material-icons">book</i>Kodelini</a></li>
                                <li><a class="route-link waves-effect" href="#!"><i class="material-icons">home_repair_service</i>Sparepart</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col s12 m8 offset-m2 l12 offset-l2 " style="padding-top:2%" id="main-content">
                        @yield('page')
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var options = {'edge':'left'};
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });
    </script>
    @include('layouts.scripts')
</html>
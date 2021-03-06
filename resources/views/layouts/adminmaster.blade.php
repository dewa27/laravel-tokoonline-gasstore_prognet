<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
        integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
        crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/39d07dc006.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.js"></script>
    {{-- <script src="/js/bootstrap.min.js"></script> --}}
    <!-- <link rel="stylesheet" href='css/bootstrap.min.css'> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"
        integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" />
    <style>
        .profile {
            width: 45px !important;
            height: 45px !important;
            object-fit: cover !important;
        }

        .icon-container {
            width: 30px !important;
        }

        .button-notify {
            padding: 0;
            border: none;
            background: none;
            cursor: pointer !important;
        }

        .button-notify:focus {
            outline: none;
            color: blue;
        }

        .notif-box {
            position: absolute !important;
            top: 80%;
            z-index: 1;
            overflow: auto;
            max-height: 300px;
            display: none;
        }

        .notif-item:hover {
            filter: brightness(90%) !important;
            cursor: pointer;
        }
    </style>
    @yield('head')
</head>

<body>
    <div class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="/admin" class="brand-link text-center">
                    <span class="brand-text font-weight-light">GASSTORE Prognet 6</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mb-3 py-2 d-flex justify-content-between align-items-center">
                        <div class="info">
                            <a href="" class="d-block">{{Auth::user()->name}}</a>
                        </div>
                        @if (is_null(Auth::user()->profile_image))
                        <img src="/images/admin.png" class="d-block profile rounded-circle" alt="X">
                        @else
                        <img src="/images/{{Auth::user()->profile_image}}" class="d-block profile rounded-circle"
                            alt="X">

                        @endif

                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item has-treeview {{request()->is('admin/products') ? 'menu-open':''}}">
                                <a href="/admin/products" class="nav-link">
                                    <div class="icon-container d-inline-block">
                                        <i class="fas fa-box-open"></i>
                                    </div>
                                    <p>
                                        Produk
                                    </p>
                                </a>
                                {{-- <ul class="nav nav-treeview">
                                    <li class="nav-item {{request()->is('admin/categories') ? 'menu-open':''}}">
                                <a href="/admin/categories" class="nav-link">
                                    <div class="icon-container d-inline-block">
                                        <i class="far fa-circle nav-icon"></i>

                                    </div>
                                    <p>
                                        Kategori
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item {{request()->is('admin/discounts') ? 'menu-open':''}}">
                                <a href="/admin/discounts" class="nav-link">
                                    <div class="icon-container d-inline-block">
                                        <i class="far fa-circle nav-icon"></i>

                                    </div>
                                    <p>
                                        Diskon
                                    </p>
                                </a>
                            </li>
                        </ul> --}}
                        </li>
                        <li class="nav-item {{request()->is('admin/categories') ? 'menu-open':''}}">
                            <a href="/admin/categories" class="nav-link">
                                <div class="icon-container d-inline-block">
                                    <i class="fas fa-list"></i>
                                </div>
                                <p>
                                    Kategori
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{request()->is('admin/couriers') ? 'menu-open':''}}">
                            <a href="/admin/couriers" class="nav-link">
                                <div class="icon-container d-inline-block">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <p>
                                    Kurir
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{request()->is('admin/discounts') ? 'menu-open':''}}">
                            <a href="/admin/discounts" class="nav-link">
                                <div class="icon-container d-inline-block">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <p>
                                    Diskon
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{request()->is('admin/transactions') ? 'menu-open':''}}">
                            <a href="/admin/transactions" class="nav-link">
                                <div class="icon-container d-inline-block">
                                    <i class="fas fa-exchange-alt"></i>
                                </div>
                                <p>
                                    Transaksi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{request()->is('admin/users') ? 'menu-open':''}}">
                            <a href="/admin/users" class="nav-link">
                                <div class="icon-container d-inline-block">
                                    <i class="fas fa-user"></i>
                                </div>
                                <p>
                                    Pengguna
                                </p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                                <a href="pages/widgets.html" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Widgets
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div style="background-color:#F5F6FA;" class="py-2 content-header sticky-top">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <a href="/admin">
                                    <h5 class="mb-0">Kembali ke Dashboard</h5>
                                </a>
                            </div><!-- /.col -->
                            <div class="col-sm-6 position-relative">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><button class="button-notify"><i
                                                class="fas fa-lg fa-bell"></i></button></li>
                                    <li class="breadcrumb-item"><a href="#" onclick="event.preventDefault();
                                        document.getElementById('frm-logout').submit();">Logout</a></li>
                                    <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    {{-- <li class="breadcrumb-item active">Dashboard v1</li> --}}
                                </ol>
                                <div class="w-75 notif-box">
                                    <div class="card px-2 py-2">
                                        <form id="notifForm" action="/admin/notifikasi/baca" method="POST">
                                            @csrf
                                            <input id="trans_id" type="hidden" name="transaction_id">
                                            <input id="review_id" type="hidden" name="review_id">
                                            <input id="notif_id" type="hidden" name="notification_id">
                                            <input id="product_id" type="hidden" name="product_id">
                                            <h5 class="text-center">Notifikasi</h5>
                                            @if ($notif->count()==0)
                                            <p class="text-center">Tidak ada Notifikasi</p>
                                            @else
                                            @foreach ($notif as $item)
                                            <div data-notif-type="{{$item->data['type']}}" data-notif="{{$item->id}}"
                                                id="{{$item->data['type']=="transaction" ? $item->data['transaction_id'] : $item->data['review_id']}}"
                                                class="card my-1 p-2 notif-item">
                                                <p class="mb-0">{{$item->data['message']}}</p>
                                                <p class="mb-0 text-right" style="font-size:14px;">
                                                    {{$item->created_at->diffForHumans()}}</p>
                                            </div>
                                            @endforeach
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <section class="content">
                    @yield('content')
                </section>
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
</body>
<script>
    $(function() {
        $('.has-treeview').click(function(){
        if($(this).hasClass('menu-open')){
            $(this).removeClass('menu-open');
        }
        else{
            $(this).addClass('menu-open');
        }
        });
        $('.button-notify').click(function(){
            $('.notif-box').toggle();
        });
        $('.notif-item').click(function(){
            if($(this).attr('data-notif-type')=="transaction"){
                $('#trans_id').val($(this).attr('id'));
                $('#notif_id').val($(this).attr('data-notif'));
            }else{
                $('#notif_id').val($(this).attr('data-notif'));
                $('#review_id').val($(this).attr('id'));
            }
            $('#notifForm').submit();
        });
    });
</script>
@yield('script')

</html>
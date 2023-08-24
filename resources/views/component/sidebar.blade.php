<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('home')}}"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Applications</span></li>

                <li class="sidebar-item"> <a class="sidebar-link" href="{{route('partai')}}"
                    aria-expanded="false"><i data-feather="user"class="feather-icon"></i><span
                        class="hide-menu">Partai
                    </span></a>
            </li>

                <li class="sidebar-item"> <a class="sidebar-link" href="{{route('caleg')}}"
                        aria-expanded="false"><i data-feather="user"class="feather-icon"></i><span
                            class="hide-menu">Caleg
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('koor')}}"
                        aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                            class="hide-menu">Koordinator</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('saksi')}}"
                        aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                            class="hide-menu">Saksi</span></a></li>

                 <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('pemilih')}}"
                         aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                            class="hide-menu">Pemilih</span></a></li>
                </li>
                {{-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">Cards
                        </span></a>
                </li> --}}
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><span
                                    class="hide-menu"> Fontawesome Icons </span></a></li>

                        <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><span
                                    class="hide-menu"> Simple Line Icons </span></a></li>
                    </ul>
                </li>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar ">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ url('admin') }}" title="Sleek Dashboard">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>

                <span class="brand-name text-truncate">Sleek Dashboard</span>
            </a>
        </div>

        <!-- begin sidebar scrollbar -->
        <div class="" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li class="">
                    <a class="sidenav-item-link" href="{{ url('admin') }}" >
                        <i class="mdi mdi-home-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>


                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#clients"
                        aria-expanded="false" aria-controls="clients">
                        <i class="mdi mdi-account-group-outline"></i>
                        <span class="nav-text">Clients</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="clients" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('admin/clients') }}">
                                    <span class="nav-text">Manage Clients</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('admin/clients/create') }}">
                                    <span class="nav-text">Add New Client</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>

                <!-- <li class="section-title">
            UI Elements
          </li> -->

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#products" aria-expanded="false" aria-controls="products">
                        <i class="mdi mdi-book-open-outline"></i>
                        <span class="nav-text">Products</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="products" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('admin/hostings') }}">
                                    <span class="nav-text">Web Hosting</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('admin/reseller hosting') }}">
                                    <span class="nav-text">Reseller Hosting</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('admin/servers') }}">
                                    <span class="nav-text">Servers</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#orders"
                        aria-expanded="false" aria-controls="orders">
                        <i class="mdi mdi-shopping"></i>
                        <span class="nav-text">Orders</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="orders" data-parent="#orders">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('admin/orders/create') }}">
                                    <span class="nav-text">Add New Order</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="{{ url('admin/orders') }}">
                                    <span class="nav-text">List All Orders</span>
                                </a>
                            </li>

                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#data-tables" aria-expanded="false" aria-controls="data-tables">
                                    <span class="nav-text">Manage Orders</span> <b class="caret"></b>
                                </a>

                                <ul class="collapse " id="data-tables">
                                    <div class="sub-menu">
                                        <li class="">
                                            <a href="{{ url('admin/orders/pending') }}">Pending Orders</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/orders/active') }}">Active Orders</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/orders/cancelled') }}">Cancelled Orders</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>



                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#billing" aria-expanded="false" aria-controls="billing">
                        <i class="mdi mdi-file-document-outline"></i>
                        <span class="nav-text">Billing</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="billing" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="basic-input.html">
                                    <span class="nav-text">Transactions List</span>
                                </a>
                            </li>

                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#data-tables" aria-expanded="false" aria-controls="data-tables">
                                    <span class="nav-text">Invoices</span> <b class="caret"></b>
                                </a>

                                <ul class="collapse " id="data-tables">
                                    <div class="sub-menu">
                                        <li class="">
                                            <a href="{{ url('admin/invoices/paid') }}">Paid</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/invoices/unpaid') }}">Unpaid</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/invoices/overdue') }}">Overdue</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/invoices/cancelled') }}">Cancelled</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/invoices/refunded') }}">Refunded</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/invoices/payment_pending') }}">Payment Pending</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>


                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#tables" aria-expanded="false" aria-controls="tables">
                        <i class="mdi mdi-keyboard-outline"></i>
                        <span class="nav-text">Support</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="tables" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="basic-tables.html">
                                    <span class="nav-text">Support Overview</span>
                                </a>
                            </li>

                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#ticketss" aria-expanded="false" aria-controls="ticketss">
                                    <span class="nav-text">Support Tickets</span> <b class="caret"></b>
                                </a>

                                <ul class="collapse " id="ticketss">
                                    <div class="sub-menu">
                                        <li class="">
                                            <a href="{{ url('admin/tickets') }}">All Tickets</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/tickets/open') }}">Open</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/tickets/answered') }}">Answered</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/tickets/customer_reply') }}">Customer-Reply</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/tickets/on_hold') }}">On Hold</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/tickets/in_progress') }}">In Progress</a>
                                        </li>

                                        <li class="">
                                            <a href="{{ url('admin/tickets/closed') }}">Closed</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#reports" aria-expanded="false" aria-controls="reports">
                        <i class="mdi mdi-file-document-box-multiple-outline"></i>
                        <span class="nav-text">Reports</span> <b class="caret"></b>
                    </a>


                </li>

                <li class="has-sub ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#settings" aria-expanded="false" aria-controls="settings">
                        <i class="mdi mdi-settings"></i>
                        <span class="nav-text">Settings</span> <b class="caret"></b>
                    </a>

                    <ul class="collapse " id="settings" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="">
                                <a class="sidenav-item-link" href="general-widget.html">
                                    <span class="nav-text">General Widget</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidenav-item-link" href="chart-widget.html">
                                    <span class="nav-text">Chart Widget</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="">
                    <a class="sidenav-item-link" href="{{ url('admin') }}" data-toggle="collapse">
                        <i class="mdi mdi-book-open-page-variant"></i>
                        <span class="nav-text">Documentation</span>
                    </a>


                </li>


            </ul>
        </div>


    </div>
</aside>

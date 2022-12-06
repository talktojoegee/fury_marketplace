<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title" key="t-menu">Menu</li>
        @if(Auth::user()->is_admin == 1)
        <li>
            <a href="chat.html" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-chat">Dashboard</span>
            </a>
        </li>
        @endif
        <li class="menu-title" key="t-pages">RECHARGE</li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-wallet"></i>
                <span key="t-layouts">Wallet</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('top-up')}}" key="t-products">Fund Wallet</a></li>
                <li><a href="{{route('top-up-transactions')}}" key="t-orders">Transactions</a></li>
            </ul>
        </li>
        <li class="menu-title" key="t-pages">BULK SMS</li>
        <li>
            <a href="{{route('compose-sms')}}" class="waves-effect">
                <i class="bx bxs-edit-alt"></i>
                <span key="t-chat">Compose SMS</span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-shield-quarter"></i>
                <span key="t-ecommerce">Sender IDs</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('create-senders')}}" key="t-products">Register ID</a></li>
                <li><a href="{{route('registered-senders')}}" key="t-product-detail">All Sender IDs</a></li>
            </ul>
        </li>
        <li class="menu-title">Products</li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-font-family"></i>
                <span key="t-products"> Products</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('vendor-products')}}" key="t-wallet">All Products</a></li>
                <li><a href="{{route('vendor-add-product')}}" key="t-wallet">Add Product</a></li>
            </ul>
        </li>
        <li class="menu-title">Reports & Logs</li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-font-family"></i>
                <span key="t-crypto">Delivery Report</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('batch-report')}}" key="t-wallet">By Batch</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('top-up-transactions')}}" class="waves-effect">
                <i class="bx bx-transfer-alt"></i>
                <span key="t-chat">Transaction History</span>
            </a>
        </li>
        <li class="menu-title">Contacts</li>
        <li>
            <a href="{{route('phone-groups')}}" class="waves-effect">
                <i class="bx bx-id-card"></i>
                <span key="t-chat">Phone Group</span>
            </a>
        </li>
        <li class="menu-title">Settings</li>

        <li>
            <a href="{{route('api-settings')}}" class="waves-effect">
                <i class="bx bx-cog"></i>
                <span key="t-chat">API Settings</span>
            </a>
        </li>

    </ul>
</div>
<!-- Sidebar -->

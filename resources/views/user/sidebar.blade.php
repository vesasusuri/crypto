
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"  style="color:white; text-decoration:none;">C R Y P T O</a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/face3.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"> {{Auth::user()->name}}</h5>
                </div>
              </div>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
               
               
               
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('profile')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">My Profile</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('deposit')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Deposit</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('withdraw')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Withdraw</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('withdraw_request')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Withdraw Requests</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('transaction')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Transaction</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('transactions')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">View Transactions</span>
            </a>
          </li>

          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('forum')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Forum</span>
            </a>
          </li> -->

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('forum')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Contact Support</span>
            </a>
          </li>
        </ul>
      </nav>
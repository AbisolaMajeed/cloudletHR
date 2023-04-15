<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="my-2">
      <a href="/dashboard"><img src="{{asset('img/logo-1.png')}}" alt=""></a>
      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ url('dashboard/blog/view') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxl-blogger"></i>
          <div data-i18n="Analytics">Blog</div>
        </a>
      </li> 
      <li class="menu-item {{Request::is('dashboard/feedback/active-view') ||  Request::is('dashboard/feedback/inactive-view') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-news"></i>
          <div data-i18n="Account Settings">Feedback</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{Request::is('dashboard/feedback/active-view') ? 'active' : '' }}">
            <a href="{{ url('dashboard/feedback/active-view') }}" class="menu-link">
              <div data-i18n="Account">Active Feedback</div>
            </a>
          </li>
          <li class="menu-item {{Request::is('dashboard/feedback/inactive-view') ? 'active' : '' }}">
            <a href="{{ url('dashboard/feedback/inactive-view') }}" class="menu-link">
              <div data-i18n="Notifications">Inactive Feedback</div>
            </a>
          </li>
        </ul>
      </li> 
      <li class="menu-item {{Request::is('dashboard/gallery/image/view') ||  Request::is('dashboard/gallery/video/view') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-photo-album"></i>
          <div data-i18n="Account Settings">Gallery</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{Request::is('dashboard/gallery/image/view') ? 'active' : '' }}">
            <a href="{{ url('dashboard/gallery/image/view') }}" class="menu-link">
              <div data-i18n="Account">Image</div>
            </a>
          </li>
          <li class="menu-item {{Request::is('dashboard/gallery/video/view') ? 'active' : '' }}">
            <a href="{{ url('dashboard/gallery/video/view') }}" class="menu-link">
              <div data-i18n="Notifications">Video</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{ url('dashboard/newsletter/view') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-envelope"></i>
          <div data-i18n="Basic">Newsletter</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ url('dashboard/setting/view') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div data-i18n="Basic">Setting</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ url('dashboard/team/view') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxl-microsoft-teams"></i>
          <div data-i18n="Basic">Team</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ url('dashboard/user/view') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user"></i>
          <div data-i18n="Basic">User Management</div>
        </a>
      </li>
    </ul>
  </aside>

<div class="sidebar">
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
      <li class="nav-item">
        <a href="loginadmin" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Trang chủ
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('categories.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Danh mục phim
          </p>
        </a>
      </li>

      
      <li class="nav-item">
        <a href="{{ route('products.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Phim
          </p>
        </a>
      </li>

     
      <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Danh sách nhân viên
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('sliders.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Slider
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('servers.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Server
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('phongchieus.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Phòng chiếu
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('khoangtgs.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Khoảng thời gian
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('trangthais.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Trạng thái ghế
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('loaighes.index') }}" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Loại ghế
          </p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<style type="text/css">
  .sidebar{
    background-color: #000000;
    border: 1px solid red;
    float: left;
    width: 18%;
    padding-bottom: 100%; 
    overflow: hidden;
  }
  .nav-item a{
    color: #305363;
  }
</style>

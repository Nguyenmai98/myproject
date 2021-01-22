<div class="sidebar">
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
      <li class="nav-item">
        <a href="/loginadmin" class="nav-link">
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
            Danh mục sản phẩm
          </p>
        </a>
      </li>

      
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Sản phẩm
          </p>
        </a>
      </li>

     
      <li class="nav-item">
        <a href="" class="nav-link">
          <i class="fas fa-angle-double-right"></i>
          <p>
            Danh sách nhân viên
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
    width: 18%;
    margin-top: -22px;
    border: 1px solid red;
    float: left;
    height: 500px;
  }
  .nav-item a{
    color: #305363;
  }
</style>

 <div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">DEMO</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">Demo</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">List Menu</li>
     <li <?php if($this->uri->segment(1) === 'product'){echo 'class="active"';}?>><a class="nav-link" href="<?php echo base_url(); ?>product"><i class="fas fa-cube"></i> <span>Produk</span></a></li>
     <li><a class="nav-link" href="<?php echo base_url(); ?>product"><i class="fas fa-cube"></i> <span>Sample Menu 1</span></a></li>
     <li><a class="nav-link" href="<?php echo base_url(); ?>product"><i class="fas fa-cube"></i> <span>Sampel Menu 2</span></a></li>
    </ul>
    </div>
  </aside>
</div>
<!-- Add icons to the links using the .nav-icon class
     with font-awesome or any other icon font library -->
<li class="nav-item has-treeview menu-open">
  <a href="#" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Starter Pages
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="#" class="nav-link active">
        <i class="far fa-circle nav-icon"></i>
        <p>Active Page</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Inactive Page</p>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-th"></i>
    <p>
      Simple Link
      <span class="right badge badge-danger">New</span>
    </p>
  </a>
</li>
<li class="nav-item">
    <a href="<?= $this->Url->build(['controller' => 'Cotizacion', 'action' => 'index']) ?>" class="nav-link">
        <i class="nav-icon fas fa-list"></i>
        <p>Cotizaciones</p>
    </a>
</li>
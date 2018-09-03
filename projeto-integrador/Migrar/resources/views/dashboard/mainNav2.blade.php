<div class="btn-toolbar mb-2 mb-md-0">
  <div class="btn-group mr-2">
    <a class="btn btn-sm btn-outline-secondary <?php if ($page=='/admin/clientes') { echo 'active';}else{ echo '';} ?>" href="/admin/clientes">Usuários Cadastrados</a>
    <a class="btn btn-sm btn-outline-secondary <?php if ($page=='/admin/clientes/newsletter') { echo 'active';}else{ echo '';} ?>" href="/admin/clientes/newsletter">Newsletter Cadastrados</a>
  </div>
  <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
    Essa semana
  </button>
</div>

<div class="btn-toolbar mb-2 mb-md-0">
  <div class="btn-group mr-2">
    <a class="btn btn-sm btn-outline-primary <?php if ($page=='/admin/produtos') { echo 'active';}else{ echo '';} ?>" href="/admin/produtos">Produtos Cadastrados</a>
    <a class="btn btn-sm btn-outline-secondary <?php if ($page=='/admin/produtos/adicionar') { echo 'active';}else{ echo '';} ?>" href="/admin/produtos/adicionar">Adicionar Produto</a>
    <a class="btn btn-sm btn-outline-secondary <?php if ($page=='/admin/marca') { echo 'active';}else{ echo '';} ?>" href="/admin/marca">Marcas</a>
    <a class="btn btn-sm btn-outline-secondary <?php if ($page=='/admin/categoria') { echo 'active';}else{ echo '';} ?>" href="/admin/categoria">Categorias</a>
    <a class="btn btn-sm btn-outline-secondary <?php if ($page=='/admin/esporte') { echo 'active';}else{ echo '';} ?>" href="/admin/esporte">Esportes</a>
    <a class="btn btn-sm btn-outline-secondary <?php if ($page=='/admin/tamanho') { echo 'active';}else{ echo '';} ?>" href="/admin/tamanho">Tamanhos</a>
  </div>
  <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
    Essa semana
  </button>
</div>

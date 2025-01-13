<!-- <aside class="bg-light p-3">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('pos.index') }}">POS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('products.index') }}">Product</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('suppliers.index') }}">Supplier</a>
    </li>
  </ul>
</aside> -->
<aside class="bg-gray-900 p-3 shadow-sm" style="width: 250px; min-height: 100vh;">
  <ul class="nav flex-column">
    <li class="nav-item mb-2">
      <a class="nav-link d-flex align-items-center text-dark px-3 py-2 rounded hover-effect" href="{{route('dashboard')}}">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link d-flex align-items-center text-dark px-3 py-2 rounded hover-effect" href="{{ route('pos.index') }}">
        <i class="bi bi-cash-register me-2"></i> POS
      </a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link d-flex align-items-center text-dark px-3 py-2 rounded hover-effect" href="{{ route('products.index') }}">
        <i class="bi bi-box-seam me-2"></i> Product
      </a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link d-flex align-items-center text-dark px-3 py-2 rounded hover-effect" href="{{ route('categories.index') }}">
        <i class="bi bi-tags me-2"></i> Category
      </a>
    </li>
    <li class="nav-item mb-2">
      <a class="nav-link d-flex align-items-center text-dark px-3 py-2 rounded hover-effect" href="{{ route('suppliers.index') }}">
        <i class="bi bi-truck me-2"></i> Supplier
      </a>
    </li>
  </ul>
</aside>


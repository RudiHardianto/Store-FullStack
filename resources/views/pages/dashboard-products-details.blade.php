@extends('layouts.dashboard')

@section('title', 'Products Details')

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Shirup Marzan</h2>
      <p class="dashboard-subtitle">Product details</p>
    </div>
    <!-- Content -->
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <!-- Nama Product -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <!-- Price / Harga -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Price</label>
                      <input type="number" class="form-control" />
                    </div>
                  </div>
                  <!-- Category -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Category</label>
                      <select name="category" id="category" class="form-control">
                        <option value="" disabled>
                          Select Category
                        </option>
                      </select>
                    </div>
                  </div>
                  <!-- Description -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="editor"></textarea>
                    </div>
                  </div>
                </div>
                <!-- Button -->
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-4 btn-block">
                      Update Product
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Images -->
      <div class="row mt-2">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img src="images/product-cart-1.jpg" alt="" class="w-100" />
                    <a href="" class="delete-gallery">
                      <img src="images/icon-delete.svg" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img src="images/product-cart-2.jpg" alt="" class="w-100" />
                    <a href="" class="delete-gallery">
                      <img src="images/icon-delete.svg" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="gallery-container">
                    <img src="images/product-cart-3.jpg" alt="" class="w-100" />
                    <a href="" class="delete-gallery">
                      <img src="images/icon-delete.svg" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <input type="file" id="file" style="display: none" multiple />
                  <button class="btn btn-secondary btn-block mt-2" onclick="thisFileUpload()">
                    Add Image
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<script>
  function thisFileUpload() {
    document.getElementById('file').click();
  }
</script>
<script>
  CKEDITOR.replace('editor');
</script>
@endpush
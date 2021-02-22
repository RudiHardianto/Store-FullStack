@extends('layouts.dashboard')

@section('title', 'Store Setting')

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Store Setting</h2>
      <p class="dashboard-subtitle">Make store that profitable</p>
    </div>
    <!-- Content -->
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <!-- Nama Toko -->
                    <div class="form-group">
                      <label>Nama Toko</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <!-- Category -->
                    <div class="form-group">
                      <label>Category</label>
                      <select name="category" id="category" class="form-control">
                        <option value="" disabled>
                          Select Category
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="store">Status Toko</label>
                      <p class="text-muted">
                        Apakah saat ini toko Anda buka?
                      </p>
                      <!-- Iya -->
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="store_open" id="openStoreTrue"
                          value="true" />
                        <label for="openStoreTrue" class="custom-control-label">
                          Toko Buka
                        </label>
                      </div>
                      <!-- Tidak -->
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="store_open" id="openStoreFalse"
                          value="false" />
                        <label for="openStoreFalse" class="custom-control-label">
                          Toko Tutup
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Button -->
                <div class="row">
                  <div class="col text-right">
                    <button type="submit" class="btn btn-success px-4">
                      Save
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
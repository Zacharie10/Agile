@extends('layout.master')

@section('content')
<div class="profile-page tx-13">
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="profile-header">
        <div class="cover">
          <div class="gray-shade"></div>
          <figure>
            <img src="{{ url('https://via.placeholder.com/1148x272') }}" class="img-fluid" alt="profile cover">
          </figure>
          <div class="cover-body d-flex justify-content-between align-items-center">
            <div>
              <img class="profile-pic" src="{{ url('/public/') }}" alt="profile">
              <span class="profile-name">{{ $user->name }}</span>
            </div>
            <div class="d-none d-md-block">
              <button class="btn btn-primary btn-icon-text btn-edit-profile">
                <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
              </button>
            </div>
          </div>
        </div>
        <div class="header-links">
          <ul class="links d-flex align-items-center mt-3 mt-md-0">
            <li class="header-link-item d-flex align-items-center active">
              <i class="mr-1 icon-md" data-feather="columns"></i>
              <a class="pt-1px d-none d-md-block" href="#">Timeline</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="user"></i>
              <a class="pt-1px d-none d-md-block" href="#">About</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="users"></i>
              <a class="pt-1px d-none d-md-block" href="#">Teams members</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="image"></i>
              <a class="pt-1px d-none d-md-block" href="#">Photos</a>
            </li>
            <li class="header-link-item ml-3 pl-3 border-left d-flex align-items-center">
              <i class="mr-1 icon-md" data-feather="video"></i>
              <a class="pt-1px d-none d-md-block" href="#">Videos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row profile-body">
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper">
      <div class="card rounded">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between mb-2">
            <h6 class="card-title mb-0">Project type</h6>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="git-branch" class="icon-sm mr-2"></i> <span class="">Update</span></a>
                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View all</span></a>
              </div>
            </div>
          </div>
          <p>Hi! I'm {{ $user->name }}.</p>
          <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email</label>
            <p class="text-muted">{{ $user->email }}</p>
          </div>
          <div class="mt-3">
            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Created At</label>
            <p class="text-muted">{{ $user->created_at->format('d M, Y') }}</p>
          </div>
        </div>
      </div>
    </div>
    <!-- left wrapper end -->
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-6 middle-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-header">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <img class="img-xs rounded-circle" src="{{ url('https://via.placeholder.com/37x37') }}" alt="">													
                  <div class="ml-2">
                    <p>{{ $user->name }}</p>
                    <p class="tx-11 text-muted">Project leader</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card rounded">
          </div>
        </div>
      </div>
    </div>
    <!-- middle wrapper end -->
  </div>
</div>
@endsection
@extends('admin.layout.master')

@section('main_content')

<div class="d-flex">
    @include('admin.layout.sidebar')
    <div class="flex-grow-1 d-flex flex-column">
        @include('admin.layout.navbar')
        <!-- Dashboard Content -->
        <div class="p-4 flex-grow-1">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-white">
                        <div class="icon bg-primary">
                            <i class="fas fa-user fa-2x"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Total News Categories</p>
                            <p class="h4 mb-0">12</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-white">
                        <div class="icon bg-danger">
                            <i class="fas fa-book fa-2x"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Total News</p>
                            <p class="h4 mb-0">122</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-white">
                        <div class="icon bg-warning">
                            <i class="fas fa-bullhorn fa-2x"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-1">Total Users</p>
                            <p class="h4 mb-0">45</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.master')
@section('title', 'Testimonial')
@section('content')
<!-- partial -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="content-viewport">
            <div class="row">
                <div class="col-12 py-5">
                    <h4>Dashboard</h4>
                    <p class="text-gray">Welcome aboard, Admin</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 equel-grid">
                    <div class="grid">
                        <div class="grid-body d-flex flex-column h-100">
                            <div class="wrapper">
                                <div class="d-flex justify-content-between">
                                    <div class="split-header">
                                        <img class="img-ss mt-1 mb-1 mr-2" src="assets/images/social-icons/instagram.svg" alt="instagram">
                                        <p class="card-title">Followers Growth</p>
                                    </div>
                                    <div class="wrapper">
                                        <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-access-point text-muted mdi-2x"></i></button>
                                        <button class="btn action-btn btn-xs component-flat pr-0" type="button"><i class="mdi mdi-cloud-download-outline text-muted mdi-2x"></i></button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end pt-2 mb-4">
                                    <h4>72</h4>
                                    <p class="ml-2 text-muted">New Followers</p>
                                </div>
                            </div>
                            <div class="mt-auto">
                                <canvas class="curved-mode" id="followers-bar-chart" height="230"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 equel-grid">
                    <div class="grid widget-revenue-card">
                        <div class="grid-body d-flex flex-column h-100">
                            <div class="split-header">
                                <p class="card-title">Server Cloud Load</p>
                                <div class="content-wrapper v-centered">
                                    <small class="text-muted">13 minutes ago</small>
                                    <span class="btn action-btn btn-refresh btn-xs component-flat"> <i class="mdi mdi-autorenew text-muted mdi-2x"></i></span>
                                </div>
                            </div>
                            <div class="mt-auto">
                                <canvas id="cpu-performance" height="80"></canvas>
                                <h3 class="font-weight-medium mt-4">69.05%</h3>
                                <p class="text-gray">Storage is getting full</p>
                                <div class="w-50">
                                    <div class="d-flex justify-content-between text-muted mt-3">
                                        <small>Usage</small> <small>1.36 TB / 2TB</small>
                                    </div>
                                    <div class="progress progress-slim mt-2">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 equel-grid">
                    <div class="grid">
                        <div class="grid-body py-3">
                            <p class="card-title ml-n1">Order History</p>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-sm">
                                <thead>
                                    <tr class="solid-header">
                                        <th colspan="2" class="pl-4">Recent Customers</th>
                                        <th>Order No</th>
                                        <th>Purchased On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pr-0 pl-4">
                                            <img class="profile-img img-sm" src="assets/images/profile/male/image_3.png" alt="profile image">
                                        </td>
                                        <td class="pl-md-0">
                                            <small class="text-black font-weight-medium d-block">Yoga Fahmi</small>
                                            <span class="text-gray"> <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                                        </td>
                                        <td>
                                            <small>9537537436</small>
                                        </td>
                                        <td> April 13, 2021 11:49am </td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0 pl-4">
                                            <img class="profile-img img-sm" src="assets/images/profile/female/image_2.png" alt="profile image">
                                        </td>
                                        <td class="pl-md-0">
                                            <small class="text-black font-weight-medium d-block">Azzahra Putri</small>
                                            <span class="text-gray"> <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                                        </td>
                                        <td>
                                            <small>7533567437</small>
                                        </td>
                                        <td> April 13, 2021 9:41am </td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0 pl-4">
                                            <img class="profile-img img-sm" src="assets/images/profile/male/image_1.png" alt="profile image">
                                        </td>
                                        <td class="pl-md-0">
                                            <small class="text-black font-weight-medium d-block">Salman Alfarisy</small>
                                            <span class="text-gray"> <span class="status-indicator rounded-indicator small bg-success"></span>Email Verified </span>
                                        </td>
                                        <td>
                                            <small>5673467743</small>
                                        </td>
                                        <td> April 12, 2021 8:34am </td>
                                    </tr>
                                    <tr>
                                        <td class="pr-0 pl-4">
                                            <img class="profile-img img-sm" src="assets/images/profile/male/image_4.png" alt="profile image">
                                        </td>
                                        <td class="pl-md-0">
                                            <small class="text-black font-weight-medium d-block">Rafly Anugerah</small>
                                            <span class="text-gray"><span class="status-indicator rounded-indicator small bg-success"></span>Account Verified </span>
                                        </td>
                                        <td>
                                            <small>4523537435</small>
                                        </td>
                                        <td> April 12, 2021 04:16am</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a class="border-top px-3 py-2 d-block text-gray" href="#">
                            <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i>View All Order History</small>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 equel-grid">
                    <div class="grid">
                        <div class="grid-body">
                            <div class="split-header">
                                <p class="card-title">Activity Log</p>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Expand View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical-timeline-wrapper">
                                <div class="timeline-vertical dashboard-timeline">
                                    <div class="activity-log">
                                        <p class="log-name">Ananda Ryan</p>
                                        <div class="log-details">New account has been created</div>
                                        <small class="log-time">Just Now</small>
                                    </div>
                                    <div class="activity-log">
                                        <p class="log-name">Teddy Budi</p>
                                        <div class="log-details">Email has been verified
                                        </div>
                                        <small class="log-time">5 seconds ago</small>
                                    </div>
                                    <div class="activity-log">
                                        <p class="log-name">Fany Prawira</p>
                                        <small class="log-time">12 seconds ago</small>
                                        <div class="log-details">Email has been verified
                                        </div>
                                    </div>
                                    <div class="activity-log">
                                        <p class="log-name">Brian Agus</p>
                                        <div class="log-details">New account has been created</div>
                                        <small class="log-time">30 seconds ago</small>
                                    </div>
                                    <div class="activity-log">
                                        <p class="log-name">Izza Nur</p>
                                        <div class="log-details">Profile has been edited</div>
                                        <small class="log-time">49 seconds ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="border-top px-3 py-2 d-block text-gray" href="#">
                            <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i> View All </small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content viewport ends -->
</div>
<!-- page content ends -->
@endsection
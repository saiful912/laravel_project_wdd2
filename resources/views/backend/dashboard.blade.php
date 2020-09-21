@extends('backend.layouts.backend_master')
@section('section')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Orders Management</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Order Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>


                    <tbody>
                    <tr>
                        <td>#wdd01</td>
                        <td>Ahad vai</td>
                        <td>01945344356</td>
                        <td>Mirpur-2,Rupnagor,Dhaka</td>
                        <td><a href="#" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50"><i class="fas fa-check"></i></span>
                                <span class="text">Pending</span>
                            </a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary btn-circle">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

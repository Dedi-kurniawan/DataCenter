    

@extends('layouts.master')
@section('maincontent')
        
     <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dasboard <small>/ Employed</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Employed <small><a href="#" class="btn btn-success btn-xs"><i class="fa fa-file-excel-o"></i> Excel </a><a href="#" class="btn btn-warning btn-xs"><i class="fa fa-file-pdf-o"></i> PDF </a></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                       <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama</th>
                          <th>Dokumen</th>
                          <th>Admin</th>
                          <th>Tanggal Upload</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>PO 1</td>
                          <td><span class="label label-primary pull-center">Dowload</span></td>
                          <td>Admin 1</td>
                          <td>Tanggal Upload</td>
                          <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td>
                        </tr>
                       <tr>
                          <th scope="row">1</th>
                          <td>PO 1</td>
                          <td><span class="label label-primary pull-center">Dowload</span></td>
                          <td>Admin 1</td>
                          <td>12-Agustus-2017</td>
                          <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td>
                        </tr>
                       <tr>
                          <th scope="row">1</th>
                          <td>PO 1</td>
                          <td><span class="label label-primary pull-center">Dowload</span></td>
                          <td>Admin 1</td>
                          <td>12-Agustus-2017</td>
                          <td><a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a><a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td>
                        </tr>
                      </tbody>
                    </table>
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

 
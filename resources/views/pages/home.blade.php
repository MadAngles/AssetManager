@extends('app')

@section('htmlheader_title')
    List
@endsection

@section('contentheader_title')
    Assets Report
@endsection

@section('$contentheader_description')
@endsection

@section('main-content')



    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
          <span class="progress-description">
            70% Increase in 30 Days
          </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
          <span class="progress-description">
            70% Increase in 30 Days
          </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Events</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
          <span class="progress-description">
            70% Increase in 30 Days
          </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Comments</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
          <span class="progress-description">
            70% Increase in 30 Days
          </span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div><!-- /.col -->
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="dataTables-example_length"><label>Show <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTables-example" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dataTables-example_info">
                                        <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 152px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 180px;" aria-label="Browser: activate to sort column ascending">Browser</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 167px;" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 131px;" aria-label="Engine version: activate to sort column ascending">Engine version</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" style="width: 100px;" aria-label="CSS grade: activate to sort column ascending">CSS grade</th></tr>
                                        </thead>
                                        <tbody>

























































                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 3.0</td>
                                            <td>Win 2k+ / OSX.3+</td>
                                            <td class="center">1.9</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Camino 1.0</td>
                                            <td>OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Camino 1.5</td>
                                            <td>OSX.3+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Netscape 7.2</td>
                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Netscape Browser 8</td>
                                            <td>Win 98SE+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Netscape Navigator 9</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Mozilla 1.0</td>
                                            <td>Win 95+ / OSX.1+</td>
                                            <td class="center">1</td>
                                            <td class="center">A</td>
                                        </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="well">
                        <h4>DataTables Usage Information</h4>
                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a href="https://datatables.net/" target="_blank">https://datatables.net/</a>.</p>
                        <a href="https://datatables.net/" target="_blank" class="btn btn-default btn-lg btn-block">View DataTables Documentation</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
        <caption>January</caption>
        <thead>
        <tr>
            <th>Sr no.</th>
            <th>Name</th>
            <th>Asset</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Manage</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>1</td>
            <td>Maintence Charges</td>
            <td>9022</td>
            <td>2,000</td>
            <td>10-aug-2015</td>
            <td>10-aug-2015</td>
        </tr>

        <tr class="success">
            <td>1</td>
            <td>Trip</td>
            <td>9022</td>
            <td>2,000</td>
            <td>10-aug-2015</td>
            <td>
                <button class="btn-white btn btn-xs">Edit</button>
                <button class="btn-red btn btn-xs">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
@endsection
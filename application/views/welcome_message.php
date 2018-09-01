<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('komponen/input_atas'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('komponen/menu'); ?>
        <!-- top navigation -->
        <?php $this->load->view('komponen/head'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">          
			<div class="page-title">
              <div class="title_left">
                <h3>Form Validation</h3>
              </div>             
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
			  <!-- Modals -->                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambah Data</button>
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
							<?php $this->load->view('modal/form'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
				<div class="x_panel">
                  <div class="x_title">
                    <h2>Button Example <small>Users</small></h2>                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Pilihan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
						  <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>				  
              </div>
            </div>
        </div>        
        <!-- footer content -->
        <?php $this->load->view('komponen/footer'); ?>
        <!-- /footer content -->
      </div>
    </div>   
	<?php $this->load->view('komponen/input_bawah'); ?>
  </body>
</html>

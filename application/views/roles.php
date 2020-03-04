<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                
                <div class="col-md-12">

                    <div class="card">          
                    <div class="card-header">
                            <strong class="card-title">Add New Role</strong>
                        </div>            
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                   
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Role Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                          </div>                       
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Select Access</label></div>
                            <div class="col-12 col-md-9">
                            <div>
                              <div id="treeview_r1"></div>
                            </div>
                            </div>
                          </div>
                          
                          <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        </form>
                      </div>
                     
                    </div>

                    
                        <!-- <button class="btn btn-primary pull-right" type="submit" >Add New</button> -->







                        
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List All Roles</strong>
                        </div>
                        <div class="card-body">
                          <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>Role Id</th>
                                <th>Role Name</th>
                                <th>Menu Permission</th>
                                <th>Created Date</th>           
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Administrator</td>
                                <td>All Menu Accesss</td>      
                                <td>20-Nov-2020</td>                 
                                <td>
                                <a href="#trash-o" class="action_btn ml-10"><i class="fa fa-eye"></i></a>
                                <a href="#trash-o" class="action_btn ml-10"><i class="fa fa-trash-o"></i></a>
                                </td>
                                
                              </tr>
                              
                             
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                </div>
            </div><!-- .animated -->
        </div>
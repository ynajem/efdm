<div class="layout-content">

  <!-- Content -->
  <div class="container-fluid flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
      Users
    </h4>

    <!-- Filters -->
    <div class="ui-bordered px-4 pt-4 mb-4">
      <div class="form-row align-items-center">
        <div class="col-md mb-4">
          <label class="form-label">Verified</label>
          <select class="custom-select">
            <option>Any</option>
            <option>Yes</option>
            <option>No</option>
          </select>
        </div>
        <div class="col-md mb-4">
          <label class="form-label">Role</label>
          <select class="custom-select">
            <option>Any</option>
            <option>User</option>
            <option>Author</option>
            <option>Staff</option>
            <option>Admin</option>
          </select>
        </div>
        <div class="col-md mb-4">
          <label class="form-label">Status</label>
          <select class="custom-select">
            <option>Any</option>
            <option>Active</option>
            <option>Banned</option>
            <option>Deleted</option>
          </select>
        </div>
        <div class="col-md mb-4">
          <label class="form-label">Latest activity</label>
          <input type="text" id="user-list-latest-activity" class="form-control" placeholder="Any">
        </div>
        <div class="col-md col-xl-2 mb-4">
          <label class="form-label d-none d-md-block">&nbsp;</label>
          <button type="button" class="btn btn-secondary btn-block">Show</button>
        </div>
      </div>
    </div>
    <!-- / Filters -->

    <div class="card">
      <div class="card-header table-responsive">
        <div id="user-list_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <div class="dataTables_length" id="user-list_length"><label>Show <select name="user-list_length" aria-controls="user-list" class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                  </select> entries</label></div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div id="user-list_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="user-list"></label></div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <table id="user-list" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="user-list_info" style="width: 961px;">
                <thead>
                  <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 16.3333px;" aria-label="ID: activate to sort column descending" aria-sort="ascending">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 57.3333px;" aria-label="Account: activate to sort column ascending">Account</th>
                    <th class="sorting" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 128.333px;" aria-label="E-mail: activate to sort column ascending">E-mail</th>
                    <th class="sorting" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 109.333px;" aria-label="Name: activate to sort column ascending">Name</th>
                    <th class="sorting" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 95.3333px;" aria-label="Latest activity: activate to sort column ascending">Latest activity</th>
                    <th class="sorting" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 53.3333px;" aria-label="Verified: activate to sort column ascending">Verified</th>
                    <th class="sorting" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 31.3333px;" aria-label="Role: activate to sort column ascending">Role</th>
                    <th class="sorting" tabindex="0" aria-controls="user-list" rowspan="1" colspan="1" style="width: 45.3333px;" aria-label="Status: activate to sort column ascending">Status</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 51px;" aria-label=""></th>
                  </tr>
                </thead>
                <tbody>
                  <tr role="row" class="odd">
                    <td class="sorting_1">3507</td>
                    <td><a href="javascript:void(0)">gmay</a></td>
                    <td>gmay@mail.com</td>
                    <td>Goldie May</td>
                    <td>05/23/2018</td>
                    <td><span class="ion ion-md-close text-light"></span></td>
                    <td>User</td>
                    <td><span class="badge badge-outline-success">Active</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">3508</td>
                    <td><a href="javascript:void(0)">hballard</a></td>
                    <td>hballard@mail.com</td>
                    <td>Harper Ballard</td>
                    <td>03/28/2018</td>
                    <td><span class="ion ion-md-checkmark text-primary"></span></td>
                    <td>Staff</td>
                    <td><span class="badge badge-outline-success">Active</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">3509</td>
                    <td><a href="javascript:void(0)">sguzman</a></td>
                    <td>sguzman@mail.com</td>
                    <td>Stevens Guzman</td>
                    <td>05/04/2018</td>
                    <td><span class="ion ion-md-close text-light"></span></td>
                    <td>Staff</td>
                    <td><span class="badge badge-outline-default">Deleted</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">3510</td>
                    <td><a href="javascript:void(0)">jrowe</a></td>
                    <td>jrowe@mail.com</td>
                    <td>Jefferson Rowe</td>
                    <td>06/30/2018</td>
                    <td><span class="ion ion-md-checkmark text-primary"></span></td>
                    <td>Staff</td>
                    <td><span class="badge badge-outline-danger">Banned</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">3511</td>
                    <td><a href="javascript:void(0)">frobbins</a></td>
                    <td>frobbins@mail.com</td>
                    <td>Frank Robbins</td>
                    <td>05/08/2018</td>
                    <td><span class="ion ion-md-close text-light"></span></td>
                    <td>User</td>
                    <td><span class="badge badge-outline-success">Active</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">3512</td>
                    <td><a href="javascript:void(0)">plowe</a></td>
                    <td>plowe@mail.com</td>
                    <td>Pearlie Lowe</td>
                    <td>04/13/2018</td>
                    <td><span class="ion ion-md-close text-light"></span></td>
                    <td>Staff</td>
                    <td><span class="badge badge-outline-success">Active</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">3513</td>
                    <td><a href="javascript:void(0)">nmorales</a></td>
                    <td>nmorales@mail.com</td>
                    <td>Nora Morales</td>
                    <td>03/15/2018</td>
                    <td><span class="ion ion-md-close text-light"></span></td>
                    <td>Author</td>
                    <td><span class="badge badge-outline-default">Deleted</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">3514</td>
                    <td><a href="javascript:void(0)">hengland</a></td>
                    <td>hengland@mail.com</td>
                    <td>Howe England</td>
                    <td>04/30/2018</td>
                    <td><span class="ion ion-md-checkmark text-primary"></span></td>
                    <td>User</td>
                    <td><span class="badge badge-outline-success">Active</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="sorting_1">3515</td>
                    <td><a href="javascript:void(0)">gblair</a></td>
                    <td>gblair@mail.com</td>
                    <td>Goodman Blair</td>
                    <td>06/11/2018</td>
                    <td><span class="ion ion-md-checkmark text-primary"></span></td>
                    <td>Staff</td>
                    <td><span class="badge badge-outline-danger">Banned</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                    <td class="sorting_1">3516</td>
                    <td><a href="javascript:void(0)">bmolina</a></td>
                    <td>bmolina@mail.com</td>
                    <td>Burks Molina</td>
                    <td>05/30/2018</td>
                    <td><span class="ion ion-md-close text-light"></span></td>
                    <td>User</td>
                    <td><span class="badge badge-outline-success">Active</span></td>
                    <td class="text-center text-nowrap"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat user-tooltip" title="Edit"><i class="ion ion-md-create"></i></button>&nbsp;&nbsp;<div class="btn-group"><button type="button" class="btn btn-default btn-xs icon-btn md-btn-flat dropdown-toggle hide-arrow user-tooltip" title="Actions" data-toggle="dropdown"><i class="ion ion-ios-settings"></i></button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0)">View profile</a><a class="dropdown-item" href="javascript:void(0)">Ban user</a><a class="dropdown-item" href="javascript:void(0)">Remove</a></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-5">
              <div class="dataTables_info" id="user-list_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="user-list_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="user-list_previous"><a href="#" aria-controls="user-list" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                  <li class="paginate_button page-item active"><a href="#" aria-controls="user-list" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="user-list" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="user-list" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="user-list" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                  <li class="paginate_button page-item "><a href="#" aria-controls="user-list" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                  <li class="paginate_button page-item next" id="user-list_next"><a href="#" aria-controls="user-list" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- / Content -->
</div>
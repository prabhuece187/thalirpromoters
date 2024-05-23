<section id="hoverable-rows">
  <div class="card">
    <form>
        <div class="col-sm-12">
              <div class="card-header">
                <div class="tilte-head">
                      <h4 class="card-title"> USERS </h4>
                </div>                               
            </div>
        </div>
        <div class="card-body">
            <div class="card-block">
                <table class="table table-sm " id="table_id">
                    <thead class="">
                        <tr>
                            <th>S.NO</th>
                            <th> NAME</th>
                            <th> MOBILE NO</th>
                            <th> EMAIL</th>
                            <th> ROLE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr ng-repeat="types in data">
                            <th scope="row">{{$index+1}}</th>
                            <td>{{types.name}}</td>
                            <td>{{types.Mobile}}</td>
                            <td>{{types.email}}</td>
                            <td>{{types.RoleName}}</td>
                            <td>
                              <a href="" ng-click="edit($index, types);" class="btn atag btn-sm btn-primary">
                                <md-tooltip md-direction="left">EDIT</md-tooltip><i class="ft-edit-2"></i>
                              </a>
                              <!-- <a class="btn atag btn-sm btn-primary" href="" ng-click="delete($index, types);">
                                <md-tooltip md-direction="right">DELETE</md-tooltip><i class="ft-trash-2"></i>
                              </a>  -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
  </div>
</section>

  <div class="modal fade text-left" id="user_data_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-header ">
            <!-- <h4 class="modal-title" id="myModalLabel33"><strong>{{formType}}  TYPE </strong></h4> -->
            <label class="modal-title text-text-bold-600" id="myModalLabel33">{{formType}}  USER </strong></label>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="mod-area">&times;</span>
              </button>
            </div>
              <form>
                <div class="modal-body">
                   <div class="row">
                    <div class="col-md-6">
                      <fieldset class="form-group floating-label-form-group">
                        <label for="title"> NAME</label>
                         <div class="">
                            <input type="text" class="form-control"  ng-model="user_data_form.name" readonly="">
                         </div>
                      </fieldset>                
                    </div>
                    <div class="col-md-6">
                      <fieldset class="form-group floating-label-form-group">
                        <label for="title">MOBILE NO</label>
                         <div class="">
                            <input type="text" class="form-control"  ng-model="user_data_form.Mobile">
                         </div>
                      </fieldset>                
                    </div>
                    <div class="col-md-6">
                      <fieldset class="form-group floating-label-form-group">
                        <label for="title">Email</label>
                         <div class="">
                            <input type="email" class="form-control"  ng-model="user_data_form.email">
                         </div>
                      </fieldset>                
                    </div>
                   
                  </div>                                      
                  <div class="modal-footer">
                    <a href=""  type="reset" class="btn atag" data-dismiss="modal">CLOSE
                    </a>
                    <input type="submit" ng-disabled="isDisabled" ng-click="postForm();" class="btn btn-outline-primary atag btn-lg" value="SAVE">
                  </div>
               </div>
            </form>
        </div>
    </div>
</div>
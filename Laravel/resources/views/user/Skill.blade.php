<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <button id="btn_add" name="btn_add" class="btn btn-default pull-right">
                Add New Skills</button>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Skills</th>
                    <th>Details</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="skills-list" name="skills-list">
                @foreach ($data as $skill)
                    <tr id="skill{{$skill->id}}">
                        <td>{{$skill->id}}</td>
                        <td>{{$skill->skill}}</td>
                        <td>{{$skill->details}}</td>
                        <td>
                            <button class="btn btn-warning btn-detail
                                                         open_modal" value="{{$skill->id}}">Edit</button>
                            <button class="btn btn-danger btn-delete delete-skill"
                                    value="{{$skill->id}}">Delete</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button"
                            class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Skill</h4>
                </div>
                <div class="modal-body">
                    <form id="frmSkills" name="frmSkills"
                          class="form-horizontal" novalidate="">
                        <div class="form-group error">
                            <label for="inputSkill" class="col-sm-3 control-label">
                                Skill</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error"
                                       id="skill" name="skill"
                                       placeholder="Skill" value="">
                            </div>
                            <div class="form-group">
                                <label for="inputDetail"
                                       class="col-sm-3 control-label">Details</label>
                                <div class="col-sm-9">
                                    <input type="text"
                                           class="form-control" id="details"
                                           name="details" placeholder="details"
                                           value="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save"
                            value="add">Save changes</button>
                    <input type="hidden" id="skill_id" name="skill_id" value="0">
                </div>
            </div>
        </div>
    </div>
</div>
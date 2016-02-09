<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">@lang('roles.edit_role')</h4>
</div>

<div class="modal-body">

    {!! Form::model($role, array('route' => array('role.update', $role->id), 'method'=> 'put','data-parsley-validate'=> '')) !!}

    <div class="form-group">
        <label>@lang('roles.name')<span style="color:red; margin-left:2px;" >*</span></label>
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-minlength'=>'3']) !!}
    </div>

    <div class="form-group">
        <label>@lang('roles.display_name')<span style="color:red; margin-left:2px;" >*</span></label>
        {!! Form::text('display_name', null, ['class' => 'form-control', 'required' => 'required', 'data-parsley-minlength'=>'3']) !!}
    </div>

    <div class="form-group">
        <label>@lang('roles.description')</label>
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success bottom_buttons notext large" type="submit"><i class="fa fa-save"></i></button>

    {!! Form::close() !!}

    <br><br><br>
</div>
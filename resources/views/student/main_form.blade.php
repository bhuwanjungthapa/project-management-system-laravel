<div class="col-md-12">

    <div class="form-group">
        {!!Form::label('project_id','Project')!!}
        {!!Form::select('project_id',$data['record'],null,['class'=> 'form-control'])!!}
        @error('project_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('student_id','Student')!!}
        {!!Form::select('student_id',$data['record'],null,['class'=> 'form-control'])!!}
        @error('student_id')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('meeting_date','Meeting Date')!!}
        {!!Form::date ('meeting_date',null,['class'=> 'form-control','placeholder'=>'Meeting Date'])!!}
        @error('meeting_date')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>



    <div class="form-group">
        {!!Form::label('topic','Topic')!!}
        {!!Form::text ('topic',null,['class'=> 'form-control','placeholder'=>'Topic'])!!}
        @error('topic')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('feedback','Feedback')!!}
        {!!Form::text ('feedback',null,['class'=> 'form-control','placeholder'=>'Feedback'])!!}
        @error('feedback')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('next_meeting_target','Next Meeting Target')!!}
        {!!Form::date ('next_meeting_target',null,['class'=> 'form-control','placeholder'=>'Next Meeting Target'])!!}
        @error('next_meeting_target')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="form-group">
        {!!Form::label('supervisor_approval_key','Supervisor Approval')!!} <br>
        {!!Form::radio('supervisor_approval_key','1',null)!!}Approve
        {!!Form::radio('supervisor_approval_key','0',true)!!}Not Approve
        @error('supervisor_approval_key')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
<div class="card-footer">
    {!!Form::submit($button .''.$module,['class'=>'btn btn-success'])!!}
    {!!Form::reset('Clear'.''.$module,['class'=>'btn btn-danger'])!!}
</div>

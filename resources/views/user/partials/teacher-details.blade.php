<div class="row">
    <div class="col-md-6">
        <div class="form-group">
    <label>Assigned To Location</label>
        <select name="school_id" id="school_id" class="form-control input-sm">
            <option value="">None Assigned</option>
            @foreach($schools as $school)
	    @if($school->id == $user->school_id)
            <option value="{{ $school->id }}" selected>{{ $school->name}}</option>
	    @else
            <option value="{{ $school->id }}">{{ $school->name}}</option>
	    @endif
            @endforeach
           </select>
	   <input type="hidden" name="user_type" value="teacher" id="user_type" />
        </div>

        <div class="form-group">
    <label>Job Position
        <select id="position_id" class="form-control input-sm" name="position_id">
            <option value="0">None Assigned</option>
            @foreach($positions as $position)
            @if($position->id == $user->position_id)
            <option value="{{ $position->id }}" selected>{{ $position->position_title}}</option>
            @else
            <option value="{{ $position->id }}">{{ $position->position_title}}</option>
            @endif
            @endforeach
       </select>
    </label>
        </div>

<div class="form-group">
    <label>Assigned To Class
        <select id="classroom_id" class="form-control input-sm" name="classroom_id">
            <option value="0">None Assigned</option>
            @foreach($classrooms as $classroom)
            @if($classroom->id == $user->classroom_id)
            <option value="{{ $classroom->id }}" selected>{{ $classroom->name}}</option>
            @else
            <option value="{{ $classroom->id }}">{{ $classroom->name}}</option>
            @endif
            @endforeach
       </select>
    </label>
</div>

<!-- <div class="form-group">
    <label>Assigned Teacher
        <select id="teacher_id" class="form-control input-sm" name="teacher_id">
            <option value="">None Assigned</option>
	    <option value="{{ $user->teacher_id }}">{{ $currentTeacher }}</option>
       </select>
    </label>
</div>  -->

    @if ($edit)
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary" id="update-details-btn">
                <i class="fa fa-refresh"></i>
                @lang('app.update_details')
            </button>
        </div>
    @endif
   </div>
</div>

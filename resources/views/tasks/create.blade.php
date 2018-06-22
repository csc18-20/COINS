@extends('layouts.app')
@section('content')
	 <div class="container-fluid my-4">
	 	<div style="font-family: 'Open Sans', sans-serif; box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1),
        0 5px 15px rgba(0, 0, 0, 0.07);" class="card">
	 		<div class="card-header">
	 			 <h3 class="text ">Create Tasks</h3>
	 		</div>
         <div class="card-body">
            <form action="{{route('tasks.store')}}" method="post">
            	@csrf
                    <div class="form-row ">
                      <div class="form-group col-md-6">
                        <label for="inputTask">Task Name</label>
                        <input type="text" name="task_name" class="form-control {{ $errors->has('task_name') ? ' is-invalid' : '' }}" placeholder="Enter task name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Status</label>
                        <select  class="form-control {{ $errors->has('task_status') ? 'is-invalid' : '' }}" name="task_status">
                          <option value="">Choose...</option>
                          @foreach(['Not started', 'In Progress', 'Completed', 'Pending input', 'Deffered'] as $item => $value)
                          <option value="{{$item}}">{{$value}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-row ">
                            <div class="form-group col-md-6">
                                    <label for="inputState">Priority</label>
                                    <select id="inputState" name="priority" class="form-control {{ $errors->has('priority') ? ' is-invalid' : '' }}">
                                      <option value="">Choose...</option>
                                      <option value="1">High</option>
                                      <option value="2">Medium</option>
                                      <option value="3">Low</option>
                                    </select>
                                  </div>
                                  <div class="form-group col-md-6">
                                        <label for="inputState">Service Line</label>
                                <select id="inputState" name="service_line" class="form-control {{ $errors->has('service_line') ? ' is-invalid' : '' }}">
                                   <option value="">Choose...</option>
		                          @foreach(['Monitoring and Evaluation', 'Recruitment Services', 'HR Services', 'TCB Services', 'Outsourced Financial Services', 'ICT or MIS Services', 'Procurement Services', 'Public Sector Management Services', 'IS Audits', 'ACL', 'Enterprise Risk Management', 'Local Government', 'Management consultancy', 'Financial Advisory', 'Prequalification for Consultancy Services', 'Business Development', 'Infrastructure Consultancy', 'Service Activities(Indirect Services)'] as $item => $value)
                                  <option value="{{$item}}">{{$value}}</option>
		                          @endforeach
		                      </select>
                             </div>
                         </div>   
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputCity">Start Date</label>
                        <input type="date" class="form-control {{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date" id="inputCity">
                        
                      </div>
                      <div class="form-group col-md-3">
                            <label for="inputZip">End Date</label>
                            <input type="date" name="end_date" class="form-control {{ $errors->has('end_time') ? ' is-invalid' : '' }}" id="inputZip">
                      </div>
                      <div class="form-group col-md-6">
                            <label for="inputTeam">Team </label>
                            <select id="inputTeam" class="form-control {{ $errors->has('team') ? ' is-invalid' : '' }}" name="team">
                                <option value="">Choose...</option>
                                @foreach(['TSS', 'DCS', 'MCS', 'CSS', 'BDS', 'HTA', 'HCM', 'SPS', 'HillGroove'] as $value => $item)
                                <option value="{{$value}}">{{$item}}</option>
                                @endforeach
                              </select>     
                      </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="inputCity">Start Time</label>
                              <input type="time" name="start_time" class="form-control {{ $errors->has('start_time') ? ' is-invalid' : '' }}" id="inputCity">  
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputTeam">Am/Pm </label>
                                <select id="inputTeam" name="start_time_am_pm" class="form-control {{ $errors->has('start_time_am_pm') ? ' is-invalid' : '' }}">
                                    <option value="">Choose...</option>
                                    <option value="0">am</option>
                                    <option value="1">pm</option>
                                </select>
                                
                            </div>
                            <div class="form-group col-md-3">
                                  <label for="inputZip">End Time</label>
                                  <input type="time" name="end_time" class="form-control {{ $errors->has('end_time') ? ' is-invalid' : '' }}" id="inputZip">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputTeam">Am/Pm </label>
                                <select id="inputTeam" name="end_time_am_pm" class="form-control {{ $errors->has('end_time_am_pm') ? ' is-invalid' : '' }}">
                                    <option value="">Choose...</option>
                                    <option value="0">am</option>
                                    <option value="1">pm</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputState">Related To:</label>
                                    <select id="inputState" name="related_to" class="form-control {{ $errors->has('related_to') ? ' is-invalid' : '' }}">
                                      <option value="">Choose...</option>
                                      @foreach(['Bug', 'Case', 'Client', 'Contact', 'Lead', 'Opportunity','Project', 'project task', 'Target', 'Task'] as $value => $item)
                                      <option value="{{$value}}">{{$item}}</option>
                                      @endforeach
                                    </select>
                                  </div>  
                          </div>

                    <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" rows="4" id="description" placeholder="Enter description of the project"></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="inputProject">Assigned To: </label>
                        <input type="text" name="assigned_to" class="form-control {{ $errors->has('assigned_to') ? ' is-invalid' : '' }}" placeholder="Enter name of a consultant">
                    </div>
                    <div class="pull-left">
                    <button type="submit" class="btn btn-outline-success btn-lg">Save a task</button>
                    </div>
                  </form>
              </div>
        
      </div>	
@endSection
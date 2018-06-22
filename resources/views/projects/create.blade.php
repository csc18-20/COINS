
@extends('layouts.app')
@section('content')
<div class="container-fluid my-4">
            <div style="font-family: 'Open Sans', sans-serif; box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1),
        0 5px 15px rgba(0, 0, 0, 0.07);" class="card">
              <div class="card-header">
                 <h3 class="text">Create Project</h3>
              </div>
              <div class="card-body">
              <form  method="post" action="#">
                      @csrf
                      <div class="form-row ">
                        <div class="form-group col-md-4">
                          <label for="inputProject">Project Name</label>
                          <input type="text" name="project_name" class="form-control" value="{{$project->opportunity_name}}" disabled>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputType">Type</label>
                          <select id="inputType" name="business_number" class="form-control">
                            <option value="">Choose...</option>
                            <option value="0">Existing Business</option>
                            <option value="1">New Business</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="inputClient">Client Name</label>
                                <input type="text" class="form-control" name="client_name" placeholder="Enter Client name" value="{{$project->client_name}}" disabled>
                              </div>
                      </div>

                      <div class="form-row ">
                            <div class="form-group col-md-4">
                              <label for="inputCountry">Country</label>
                              <input type="text" class="form-control" name="country" placeholder="Enter country name" value="{{$project->country}}">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputSalesStage">Sales Stage</label>
                              <select id="inputSalesStage" name="sales_stage" class="form-control">
                                <option value="">Choose...</option>
                                @foreach(['Prospecting', 'Qualification', 'EOI', 'Needs Analysis', 'Value Proposition', 'Id Decision Makers', 'Perception Analysis', 'Proposal/Price Quote',
                                'Negotiation/Review', 'Closed Won', 'Closed Lost', 'Submitted', 'Did Not Persue', 'Not Submitted'] as $value => $text)
                              <option value="{{$value}}">{{$text}}</option>
                              @endforeach       
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDate">Expected Close Date</label>
                                <input type="date" name="date" class="form-control" value="{{$project->date}}">  
                             </div>                       
                          </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                              <label for="inputZip">Internal Deadline</label>
                              <input type="date" class="form-control" name = "internal_deadline" id="inputZip" value="{{$project->internal_deadline}}">
                        </div>
                        <div class="form-group col-md-3">
                              <label for="inputTeam">Team </label>
                              <select id="inputTeam" class="form-control" name="team">
                                <option value="">Choose...</option>
                                @foreach(['TSS', 'DCS', 'MCS', 'CSS', 'BDS', 'HTA', 'HCM', 'SPS', 'HillGroove'] as $value => $item)
                                <option value="{{$value}}" {{old('team')==$value? 'selected':''}}>{{$item}}</option>
                                @endforeach
                              </select>                      
                        </div>
                        <div class="form-group col-md-3">
                              <label for="inputZip">OM Number</label>
                              <input type="text" class="form-control" name = "OM_number" id="inputZip" value="OM{{$project->OM_number}}AM" disabled>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputProject">Funded By</label>
                            <input type="text" class="form-control" name="funded_by" placeholder="Enter Funder's name" value="{{$project->funded_by}}" disabled>
                        </div>
                    </div> 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                              <label for="inputZip">Start Date</label>
                              <input type="date" class="form-control" name = "start_date" id="inputZip" value="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputProject">End Date</label>
                            <input type="date" class="form-control" name="end_date" value="">
                        </div>
                    </div>
                      <div class="form-group ">
                          <label for="inputProject">Assigned To:</label>
                          <input type="text" class="form-control" name="assigned_to" placeholder="Enter name of a consultant" value="{{$project->assigned_to}}" disabled>
                          @if($errors->has('assigned_to'))
                            <span class="text-danger">
                              {{$errors->first('assigned_to')}}
                            </span>
                          @endif
                      </div>
                      <div class="pull-left">
                      <button type="submit" class="btn btn-outline-success ">Save Project</button>
                      </div>
                    </form>
          </div>
        </div>
      </div>
@endSection

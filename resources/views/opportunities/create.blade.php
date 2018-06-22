@extends('layouts.app')
@section('content')
<div class="container my-4">
            <div style="font-family: 'Open Sans', sans-serif; box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1),
        0 5px 15px rgba(0, 0, 0, 0.07);" class="card">
              <div class="card-header">
                 <h3 class="text">Create Opportunity</h3>
              </div>
              <div class="card-body">
              {{--   {{var_dump($errors)}} --}}
              <form class="form" method="post" action="{{route('opportunities.store')}}">
                      @csrf
                      <div class="form-row ">
                        <div class="form-group col-md-4">
                          <label for="inputProject">Opportunity Name</label>
                          <input type="text" name="opportunity_name" class="form-control {{ $errors->has('opportunity_name') ? ' is-invalid' : '' }}"placeholder="Enter project name" value="{{old('opportunity_name')}}">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputType">Type</label>
                          <select id="inputType" name="business_number" class="form-control {{ $errors->has('business_number') ? ' is-invalid' : '' }}">
                            <option value="">Choose...</option>
                            <option value="0 {{old('business_number')}}">Existing Business</option>
                            <option value="1 {{old('business_number')}}">New Business</option>
                          </select>
                        </div>
                        <div class="form-group col-md-4">
                                <label for="inputClient">Client Name</label>
                                <input type="text" class="form-control {{ $errors->has('client_name') ? ' is-invalid' : '' }}" name="client_name" placeholder="Enter Client name" value="{{old('client_name')}}">
                              </div>
                      </div>

                      <div class="form-row ">
                            <div class="form-group col-md-4">
                              <label for="inputCountry">Country</label>
                              <input type="text" class="form-control {{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" placeholder="Enter country name" value="{{old('country')}}">
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputSalesStage">Sales Stage</label>
                              <select id="inputSalesStage" name="sales_stage" class="form-control {{ $errors->has('sales_stage') ? ' is-invalid' : '' }}">
                                <option value="">Choose...</option>
                                @foreach(['Prospecting', 'Qualification', 'EOI', 'Needs Analysis', 'Value Proposition', 'Id Decision Makers', 'Perception Analysis', 'Proposal/Price Quote',
                                'Negotiation/Review', 'Closed Won', 'Closed Lost', 'Submitted', 'Did Not Persue', 'Not Submitted'] as $value => $text)
                              <option value="{{$value}}" {{ old('sales_stage')==$value? 'selected':'' }}>{{$text}}</option>
                              @endforeach       
                              </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputDate">Expected Close Date</label>
                                <input type="date" name="date" class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{old('date')}}">  
                             </div>                       
                          </div>
                              <div class="form-row ">
                          <div class="form-group col-6">
                            <label for="inputRef">Revenue</label>
                            <input type="text" class="form-control" name="revenue" id="inputRevenue" placeholder="Enter Revenue.">
                          </div>
                          <div class="form-group col-md-6">
                                <label for="inputType">Currency</label>
                                <select id="inputType" name="currency" class="form-control">
                                  <option value="">Choose...</option>
                                  <option value="0">Euro: € </option>
                                  <option value="1">Dollar: $</option>
                                  <option value="2">Uganda Shillings: UGX</option>
                                </select>
                              </div>
                      </div> 
                      <div class="form-row">
                            <div class="form-group col-md-3">
                                    <label for="inputClient">Leads Source</label>
                                    <select id="inputSalesStage" class="form-control {{ $errors->has('leads_name') ? ' is-invalid' : '' }}"  name="leads_name" >
                                            <option value="">Choose...</option>
                                            @foreach(['Cold call', 'Existing customer', 'Self Generated', 'Employee', 'Partner', 'Public Relations', 'Direct Mail', 'Conference', 'Trade Show', 'website', 'word of mouth', 'Email', 'Compaign', 'other'] as $value => $item)
                                            <option value="{{$value}}" {{old('leads_name')==$item ? 'selected':''}}>{{$item}}</option> 
                                            @endforeach
                                          </select>
                                  </div>
                        <div class="form-group col-md-3">
                              <label for="inputZip">Internal Deadline</label>
                              <input type="date" class="form-control {{ $errors->has('internal_deadline') ? ' is-invalid' : '' }}" name = "internal_deadline" id="inputZip" value="{{old('internal_deadline')}}">
                        </div>
                        <div class="form-group col-md-3">
                              <label for="inputTeam">Team </label>
                              <select id="inputTeam" class="form-control {{ $errors->has('team') ? ' is-invalid' : '' }}" name="team">
                                <option value="">Choose...</option>
                                @foreach(['TSS', 'DCS', 'MCS', 'CSS', 'BDS', 'HTA', 'HCM', 'SPS', 'HillGroove'] as $value => $item)
                                <option value="{{$value}}" {{old('team')==$value? 'selected':''}}>{{$item}}</option>
                                @endforeach
                              </select>                      
                        </div>
                        <div class="form-group col-3">
                                <label for="inputRef">Probability(%)</label>
                                <input type="text" class="form-control {{ $errors->has('probability') ? ' is-invalid' : '' }}" name="probability" id="inputRevenue" placeholder="Enter Probability in %." value="{{old('probability')}}">
                         </div>
                      </div>            
                      <div class="form-row">
                        <div class="form-group col-3">
                            <label for="inputRef">Reference Number</label>
                            <input type="text" class="form-control {{ $errors->has('reference_number') ? ' is-invalid' : '' }}" name="reference_number" id="inputRevenue" placeholder="Enter Reference No" value="{{old('reference_number')}}">
                        </div>
                        <div class="form-group col-3">
                            <label for="inputRef">Next Step</label>
                            <input type="text" class="form-control {{ $errors->has('next_step') ? ' is-invalid' : '' }}" id="inputRevenue" name="next_step" placeholder="Enter next step" value="{{old('next_step')}}">
                        </div>
                        <div class="form-group col-3">
                            <label for="inputRef">Objective/Number of Licences</label>
                            <input type="number" class="form-control" name="number_of_licence" id="inputRevenue" placeholder="Enter No. of Licences" value="{{old('number_of_licence')}}">
                        </div>
                        
                        <div class="form-group col-3">
                            <label for="inputRef">Partners</label>
                            <input type="text" class="form-control {{ $errors->has('partners') ? ' is-invalid' : '' }}" name="partners" id="inputRevenue" placeholder="Enter Partners" value="{{old('partners')}}">
                        </div>
                        
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label for="inputProject">Funded By</label>
                            <input type="text" class="form-control {{ $errors->has('funded_by') ? ' is-invalid' : '' }}" name="funded_by" placeholder="Enter Funder's name" value="{{old('funded_by')}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputType">Year</label>
                            <input type="text" class="form-control {{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" placeholder="Enter Year" value="{{old('year')}}"> 
                        </div>
                    </div>


                      <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea name="description" class="form-control" rows="5"  placeholder="Enter description of the project" value="{{old('description')}}"></textarea>
                      </div>
                      <div class="form-group ">
                          <label for="inputProject">Assigned To:</label>
                          <input type="text" class="form-control" name="assigned_to" placeholder="Enter name of a consultant" value="{{old('assigned_to')}}">
                          @if($errors->has('assigned_to'))
                            <span class="text-danger">
                              {{$errors->first('assigned_to')}}
                            </span>
                          @endif
                      </div>
                      <div class="pull-left">
                      <button type="submit" class="btn btn-outline-success ">Save Opportunity</button>
                      </div>
                    </form>
          </div>
        </div>
      </div>
@endSection

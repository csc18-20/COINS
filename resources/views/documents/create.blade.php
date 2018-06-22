@extends('layouts.app')
@section('content')
	 <div class="container-fluid my-3">
    <div style="font-family: 'Open Sans', sans-serif; box-shadow: 0 15px 35px rgba(50, 50, 93, 0.1),
        0 5px 15px rgba(0, 0, 0, 0.07);" class="card">
      <div class="card-header">
          <h3 class="text">Document</h3>
      </div>
      <div class="card-body">
            <form action="{{route('documents.store')}}" method="post">
              @csrf
                    <div class="form-row ">
                      <div class="form-group col-md-6">
                        <label for="inputProject">Document</label>
                        <div class="custom-file">
                            <input type="file" name="document_file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputState">Status</label>
                        <select id="inputState"name="status" class="form-control">
                          <option value="">Choose...</option>
                          @foreach(['Active', 'Draft', 'Draft', 'FAQ', 'Expired', 'Under Review', 'Pending'] as $item => $value)
                          <option value="{{$item}}">{{$value}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-row ">
                        <div class="form-group col-6">
                            <label for="inputOM" >Document Name</label>
                            <input type="text" class="form-control" name="document_name" id="inputOM">
                        </div>
                        <div class="form-group col-6">
                            <label for="inputRef">Revision</label>
                            <input type="text" class="form-control" name="revision" id="inputRef">
                        </div>
                    </div>  
                    
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label for="inputCity">Publish Date</label>
                        <input type="date" class="form-control" name="publish_date" id="inputCity">
                        
                      </div>
                      <div class="form-group col-md-3">
                            <label for="inputZip">Expiration Date</label>
                            <input type="date" class="form-control" name="expiration_date" id="inputZip">
                      </div>
                      <div class="form-group col-md-3">
                            <label for="inputTeam">Team </label>
                            <select id="inputTeam" name="team" class="form-control">
                              <option value="">Choose...</option>
                              @foreach(['TSS', 'DCS', 'MCS', 'CSS', 'BDS', 'HTA', 'HCM', 'SPS', 'HillGroove'] as $value => $item)
                                <option value="{{$value}}">{{$item}}</option>
                                @endforeach
                            </select>
                        
                      </div>
                      <div class="form-group col-md-3">
                            <label for="inputTeam">Category </label>
                            <select id="inputTeam" name="category" class="form-control">
                              <option value="">Choose...</option>
                              @foreach(['Marketing', 'Knowledge Base', 'Sales', 'Inception report', 'Terms of Reference', 'CV', 'Financial Proposal', 'Technical report', 'Request for Proposal'] as $item =>$value)
                              <option value="{{$item}}">{{$value}}</option>
                              @endforeach
                            </select>
                        
                      </div>

                    </div>
                    <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" placeholder="Enter description of the project"></textarea>
                    </div>
                    <div class="form-group ">
                        <label for="inputProject">Assigned To: </label>
                        <input type="text" class="form-control" name="assigned_to" placeholder="Enter name of a consultant">
                    </div>
                    <div class="pull-left">
                    <button type="submit" class="btn btn-outline-success btn-lg">Save a document</button>
                    </div>
                  </form>
      </div>
    </div>

@endSection
@extends('layouts.app')
@section('content')
<div class="container-fluid my-3">
<div class="card">
	<div class="card-header">
		Showing all Opportunities
	</div>
	<div class="card-body">
		<table class="table datatable table-striped table-bordered ">
			<thead>
				<tr>
					<th>Opportunity Name</th>
					<th>Expected Close Date</th>
					<th>OM_number</th>
					<th>Team</th>
					<th>Funded By</th>
					<th>Assigned To</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>
				
					@foreach($opportunities as $opportunity)
					<tr>
					<td>{{$opportunity->opportunity_name}}</td>
					<td>{{$opportunity->date}}</td>
					<td><strong>AH-{{$opportunity->OM_number}}-OM</strong></td>
					<td>{{$opportunity->team}}</td>
					<td>{{$opportunity->funded_by}}</td>
					<td>{{$opportunity->assigned_to}}</td>
					<td>
					<div class="btn-group">
					    <button type="button" class="btn btn-xs">Action</button>
					    <button type="button" class="btn btn-xs dropdown-toggle px-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					        <span class="sr-only">Toggle Dropdown</span>
					    </button>
					    <div class="dropdown-menu">
					        <a class="dropdown-item" href="{{route('projects.create', ['id'=> $opportunity->id])}}">Project</a>
					        <div class="dropdown-divider"></div>
					        <a class="dropdown-item" href="#">Edit</a>
					        <a class="dropdown-item" href="#">Delete</a>
					    </div>
					</div>
					</td>
					</tr>
					@endforeach
				
			</tbody>
		</table>
	</div>
</div>
</div>
@endSection
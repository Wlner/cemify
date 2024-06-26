<div class="content">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Dashboard</a></li>
					<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
					<li class="breadcrumb-item active">Lot List</li>
				</ul>
			</div>
		</div>
	</div>
	<livewire:flash-message.flash-message />
	<div class="row d-flex justify-content-center">
		<div class="col-sm-12">
			<div class="card card-table show-entire">
				<div class="card-body">

					<div class="mb-2 page-table-header">
						<div class="row align-items-center">
							<div class="col">
                                <div class="doctor-table-blk">
									<h3>Lot List</h3>
									<div class="doctor-search-blk">
										<div class="add-group">
											<a wire:click="createLot" class="btn btn-primary ms-2"><img src="{{ asset('assets/img/icons/plus.svg') }}" alt>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-auto text-end float-end ms-auto download-grp">
								<div class="top-nav-search table-search-blk">
									<form>
										<input type="text" class="form-control" placeholder="Search here" wire:model.debounce.500ms="search">
										<a class="btn"><img src="{{ asset('assets/img/icons/search-normal.svg') }}" alt></a>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="table-responsive">
						<table class="table mb-0 border-0 custom-table comman-table datatable">
							<thead>
								<tr>
                                    <th>ID<th>
									<td>Lot</td>
									<td>Action</td>
								</tr>
							</thead>
							<tbody>
								@foreach ($lots as $lot)
									<tr>
										
                                        <td>
											{{ $lot->id }}
										</td>
                                        
                                        <td>
											{{ $lot->description }}
										</td>
                                        <td>
											{{ $lot->action}}
										</td>

										<td class="text-center">
											<div class="btn-group" role="group">
												<button type="button" class="mx-1 btn btn-primary btn-sm"
													wire:click="editLot({{ $lot->id }})" title="Edit">
													<i class='fa fa-pen-to-square'></i>
												</button>
												<a class="mx-1 btn btn-danger btn-sm" wire:click="deleteLot({{ $lot->id }})" title="Delete">
													<i class="fa fa-trash"></i>
												</a>
											</div>
										</td>

									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Modal --}}

<div wire.ignore.self class="modal fade" id="lotModal" tabindex="-1" role="dialog"
	aria-labelledby="lotModal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
	<div class="modal-dialog modal-dialog-centered">
		<livewire:lot.lot-form />
	</div>
</div>
@section('custom_script')
	@include('layouts.scripts.lot-scripts')
@endsection

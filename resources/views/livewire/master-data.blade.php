<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> List</h4>

    <div class="row">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-12">
                        <div id="contextMenu" class="context-menu">
                            <div class="arrow"></div>
                            <div class="popover-body p-1">

                                <div class="d-flex justify-content-start  mb-2">
                                    <a id="edit" href="javascript:void(0);" class="text-primary link-primary"><i
                                            class='bx bxs-edit-alt'></i>
                                        {{ __('messages.edit') }}</a>
                                </div>


                                <div class=" d-flex justify-content-start mb-2">
                                    <a id="view" href="javascript:void(0);" class="text-primary"><i
                                            class='bx bxs-grid-alt'></i> {{ __('messages.view') }}</a>
                                </div>


                                <!-- Add more menu items here if needed -->
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    @if ($masterDataList->isNotEmpty())
                                        @foreach ($masterDataList->first()->getAttributes() as $column => $value)
                                            <th scope="col">
                                                <span wire:click="sort('{{ $column }}')" style="cursor: pointer;">
                                                    {{ __('messages.' . $column) }}
                                                    @if ($sortColumn === $column)
                                                        @if ($sortDirection === 'asc')
                                                            <i class='bx bx-up-arrow-alt'></i>
                                                        @else
                                                            <i class='bx bx-down-arrow-alt'></i>
                                                        @endif
                                                    @else
                                                        <i class='bx bx-sort-alt-2'></i>
                                                    @endif
                                                </span>
                                            </th>
                                        @endforeach
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @if ($masterDataList->isNotEmpty())

                                        @foreach ($masterDataList as $data)
                                <tr>
                                    @foreach ($data->getAttributes() as $value)
                                        <td data-id="{{ $data->id }}">{{ $value }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                        <div class="d-flex justify-content-between align-items-center mt-3">
                            @if ($masterDataList->total() > 5)
                                <div class="d-flex align-items-center mt-3">
                                    <label for="perPage" class="me-2">{{ __('messages.visible') }}</label>
                                    <select wire:model="perPage" id="perPage" class="form-select form-select-sm"
                                        style="width: 70px;">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                </div>
                            @endif
                            <div>
                                {{ $masterDataList->links() }}
                            </div>
                        </div>

                        <!-- Select Pagination -->

                    </div>
                </div>
                <div wire:ignore.self class="modal fade" id="edit_modal" aria-labelledby="edit_modal"
                    aria-hidden="true">

                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="edit_modal">Edit Master Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input wire:model.defer="name" type="text" class="form-control" id="name" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alias" class="form-label">Alias</label>
                                        <input wire:model.defer="alias" type="text" class="form-control" id="alias">
                                    </div>
                                    <div class="mb-3">
                                        <label for="related_table" class="form-label">Related Table</label>
                                        <input wire:model.defer="related_table" type="text" class="form-control"
                                            id="related_table" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="related_column" class="form-label">Related Column</label>
                                        <input wire:model.defer="related_column" type="text" class="form-control"
                                            id="related_column" disabled>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button wire:click="update" type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</div>

@section('scripts')
@endsection

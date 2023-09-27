<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Translations /</span> Data</h4>

        <div class="btn-group ">
            <button type="button" class="btn btn-outline-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class='bx bx-cog'></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <button class="btn d-flex align-items-center" type="button" data-bs-toggle="modal"
                        data-bs-target="#add_model">
                        <i class="bx bx-folder-plus me-2"></i>
                        {{ __('messages.add') }}
                    </button>
                </li>
            </ul>

        </div>
    </div>

    <div class="row">

        <div class="row">
            <div class="col-4 d-flex">
                <div class="card mb-4 w-100">
                    <div class="card-body">
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Language</label>
                            <select class="form-select" name="language" id="languageSelect"
                                wire:model="selectedLanguage">
                                <option value="">All Languages</option>
                                @foreach ($lang_select as $language)
                                    <option value="{{ $language }}">{{ $language }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex">
                <div class="card mb-4 w-100">
                    <div class="card-body d-flex align-items-center">
                        <span>Total Language</span>
                        <span
                            class="badge badge-center rounded-pill bg-label-success ms-2">{{ count($lang_select) }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div id="contextMenu" class="context-menu">
                                <div class="arrow"></div>
                                <div class="popover-body p-1">

                                    <div class="d-flex justify-content-start  mb-2">
                                        <a id="edit" href="javascript:void(0);"
                                            class="text-primary link-primary"><i class='bx bxs-edit-alt'></i>
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
                                        @if ($masterDataList->isNotEmpty() && $masterDataList->first())
                                            @foreach ($masterDataList->first()->getAttributes() as $column => $value)
                                                @if ($column !== 'id')
                                                    {{-- Ẩn cột id --}}
                                                    <th scope="col">
                                                        <span wire:click="sort('{{ $column }}')"
                                                            style="cursor: pointer;">
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
                                                @endif
                                            @endforeach
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($masterDataList->isNotEmpty())
                                        @foreach ($masterDataList as $data)
                                            <tr>
                                                @foreach ($data->getAttributes() as $column => $value)
                                                    @if ($column !== 'id')
                                                        {{-- Ẩn cột id --}}
                                                        <td data-id="{{ $data->id }}">{{ $value }}</td>
                                                    @endif
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
                                    <h5 class="modal-title" id="edit_modal">Edit Language</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="key" class="form-label">Key</label>
                                            <input wire:model.defer="key" type="text" class="form-control"
                                                id="key">
                                        </div>
                                        <div class="mb-3">
                                            <label for="value" class="form-label">Value</label>
                                            <input wire:model.defer="value" type="text" class="form-control"
                                                id="value">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button wire:click="update" type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div wire:ignore.self class="modal fade" id="add_model" aria-labelledby="add_modal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">  {{ __('messages.add') }}   {{ __('messages.languages') }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="key_add" class="form-label">{{ __('messages.key') }}</label>
                                            <input wire:model.defer="key_add" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="value_add_vi" class="form-label">{{ __('messages.value') }} ({{ __('messages.vietnam') }})</label>
                                            <input wire:model.defer="value_add_vi" type="text" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="value_add_en" class="form-label">{{ __('messages.value') }} ({{ __('messages.english') }})</label>
                                            <input wire:model.defer="value_add_en" type="text" class="form-control">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button wire:click="store" type="button" class="btn btn-primary">Save</button>
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

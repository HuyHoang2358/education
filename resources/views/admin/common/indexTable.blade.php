@php
    $excludedColumns = $excludedColumns ?? ['id', 'created_at', 'updated_at'];
    $columnTranslations = $columnTranslations ?? [];
    $columnMappings = $columnMappings ?? [];
@endphp
<div class="intro-y col-span-12 lg:col-span-12 mt-2">
    <div class="py-2 px-4">
        <div class="overflow-x-auto">
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr class=" text-center">
                        <th class="whitespace-nowrap w-8">STT</th>
                        @foreach (array_keys($list->first()->toArray()) as $header)
                            @if (!in_array($header, $excludedColumns))
                                <th class="whitespace-nowrap text-start">
                                    {{ $columnTranslations[$header] ?? ucfirst(str_replace('_', ' ', $header)) }}</th>
                            @endif
                        @endforeach
                        @if(isset($needAction) && $needAction)
                            <th class="whitespace-nowrap w-8">Hành động</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if (count($list) > 0)
                        @foreach ($list as $item)
                            <tr>
                                <td class="text-center">
                                    {{ ($list->currentPage() - 1) * $list->perPage() + $loop->index + 1 }}</td>
                                @foreach ($item->toArray() as $key => $value)
                                    @if (!in_array($key, $excludedColumns))
                                        <td>
                                            {{ isset($columnMappings[$key]) ? data_get($item, $columnMappings[$key], 'N/A') : $value }}
                                        </td>
                                    @endif
                                @endforeach
                                @if(isset($needAction) && $needAction)
                                    <td>
                                        <div class="flex gap-2 justify-center items-center">
                                            <!-- Edit button -->
                                            <a href="">
                                                <button type="button" class="btn btn-outline-warning p-1 w-8 h-8"> <i
                                                        data-lucide="edit-3"></i></button>
                                            </a>
                                            <!-- Delete button -->
                                            <button data-tw-toggle="modal" type="button"
                                                class="btn btn-outline-danger p-1 w-8 h-8"
                                                data-tw-target="#delete-object-confirm-form">
                                                <i data-lucide="trash-2"></i>
                                            </button>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="6">Hiện tại không có đối tác nào trong hệ thống. <span
                                    class="font-semibold">Vui lòng thêm mới đối tác</span></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- Pagination -->
        @if ($list->lastPage() > 1)
            <div class="rounded-b bg-gray-100 p-2 pl-4 border">{{ $list->links() }}</div>
        @endif
    </div>
</div>

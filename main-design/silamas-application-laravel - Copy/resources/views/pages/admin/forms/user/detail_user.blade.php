@extends('layouts.admin')

@section('section-main')
<div class="row">
    <!-- customer-section start -->
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Detail user</h5>
            </div>
            <div>
                <div class="card-body p-5">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nik</th>
                                    <th>Name</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>level</th>
                                    <th>address</th>
                                    <th>gender</th>
                                    <th>roles</th>
                                    <th>created_at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($item == True)


                                <tr class="text-gray-700 dark:text-gray-400">
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->id }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->nik }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->name }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->phone }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->email }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->level }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->address }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->gender }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->roles }}
                                  </td>
                                  <td class="px-4 py-3 text-sm">
                                    {{ $item->created_at }}
                                  </td>
                                  <td><a href=""><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                                </tr>
                                @else
                                <tr>
                                  <td colspan="7" class="text-center text-gray-400">
                                    Data Kosong
                                  </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customer-section end -->
</div>
@endsection


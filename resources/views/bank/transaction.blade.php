@extends('layouts.admin')
@section('content')
    <h1 class="text-2xl font-bold">Transaction User</h1>
    <div class="flex justify-between items-center">
        <div class="searchandfilter flex items-center gap-3">
            <div class="search mt-2 relative flex items-center">
                <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
                <input type="text" placeholder="Search User" class="pl-8 pr-4 py-2 rounded-md focus:outline-none">
            </div>
            <div class="filter bg-[#303fe2] text-white mt-2 p-[11px] rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-funnel-fill" viewBox="0 0 16 16">
                    <path
                        d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z" />
                </svg>
            </div>
        </div>
        <div class="print-all">
            <div class="pdf-print  flex gap-1 items-center bg-[#F3F7FA]  hover:opacity-90 duration-150 cursor-pointer text-blue-500 px-3 rounded-md py-2 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                    <path
                        d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                    <path fill-rule="evenodd"
                        d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
                </svg>
                Print All
            </div>
        </div>
    </div>
  

    <div class="user-list w-full mt-8 mb-8">
        <table class="w-full">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Invoice Number</th>
                    <th>User</th>
                    <th>Status</th>
                    <th>Products</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $key => $transaction)
                    <tr>
                        <td class="id">{{ $key + 1 }}</td>
                        <td class="invoice-td">{{ $transaction->order_id }}</td>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ $transaction->product->name }}</td>
                        <td>{{ $transaction->created_at }}</td>
                        <td class="text-center flex justify-center">
                            <div class="pdf-print  flex gap-1 items-center bg-[#F3F7FA] hover:opacity-90 duration-150 cursor-pointer text-[#303fe2] px-2 rounded-md py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
     class="bi bi-chevron-down" viewBox="0 0 16 16">
    <path fill-rule="evenodd"
          d="M3.646 5.646a.5.5 0 0 1 .708 0L8 9.793l3.646-3.647a.5.5 0 1 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708z"/>
</svg>
                               Print
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

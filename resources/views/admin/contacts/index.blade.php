@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Contacts')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Contacts')

{{-- Content body: main page content --}}

@section('content_body')

    {{-- Setup data for datatables --}}
    @php
        $heads = [
            'ID',
            'Name',
            'Email',
            ['label' => 'Phone', 'width' => 15],
            'country',
            'Service',
            ['label' => 'Message', 'width' => 35],
            'Status',
            ['label' => 'Actions', 'no-export' => true, 'width' => 10],
        ];

        $btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
        $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
        $btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

        $config = [
            'data' => [$contacts],

            // [
            //     [22, 'John Bender', '+02 (123) 123456789', '<nobr>' . $btnEdit . $btnDelete . $btnDetails . '</nobr>'],
            //     [
            //         19,
            //         'Sophia Clemens',
            //         '+99 (987) 987654321',
            //         '<nobr>' . $btnEdit . $btnDelete . $btnDetails . '</nobr>',
            //     ],
            //     [3, 'Peter Sousa', '+69 (555) 12367345243', '<nobr>' . $btnEdit . $btnDelete . $btnDetails . '</nobr>'],
            // ],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table1" :heads="$heads">
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->first_name . ' ' . $contact->first_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->country }}</td>
                <td>{{ $contact->serivce->name }}</td>
                <td>{{ $contact->message }}</td>
                <td>
                    @if ($contact->acknowledged)
                        <span class="badge badge-success">Acknowledged</span>
                    @else
                        <span class="badge badge-info">Pending</span>
                    @endif
                </td>
                <td>
                    @if (!$contact->acknowledged)
                        <a href=" {{ route('contact.acknowledge', $contact) }}" class="btn btn-success">
                            Acknowledge
                        </a>
                        {{-- @else
                        <a href=" {{ route('contact.acknowledge', $contact) }}" class="btn btn-success">
                            <i class="fas fa-thumbs-up"></i>
                        </a> --}}
                    @endif

                </td>
            </tr>
        @endforeach
        <input type="hidden" id="csrf" value={{ csrf_token() }}>
    </x-adminlte-datatable>

@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script>
        function sendDelete(p) {

            event.preventDefault();

            // var choice = confirm(this.getAttribute('data-confirm'));
            var choice = confirm('you sure to delete this item?');

            if (choice) {

                const token = document.querySelector('#csrf').value;
                console.log(token);

                var data = new FormData();
                data.append('_method', 'DELETE');
                data.append('_token', token);
                // data.append('organization', 'place');
                // data.append('requiredkey', 'key');

                var xhr = new XMLHttpRequest();
                xhr.open('POST', p, true);
                xhr.onload = function() {
                    // do something to response
                    console.log(this.responseText);
                    window.location.reload();
                };
                xhr.send(data);
            }

            // });
            // }
        }
    </script>
@endpush

@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Testimonials')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Testimonials')

{{-- Content body: main page content --}}

@section('content_body')

    {{-- Setup data for datatables --}}
    @php
        $heads = [
            'ID',
            'User',
            'Title',
            ['label' => 'Content', 'width' => 40],
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
            'data' => [$testimonials],

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
        @foreach ($testimonials as $testimonial)
            <tr>
                <td>{{ $testimonial->id }}</td>
                <td>{{ $testimonial->user }}</td>
                <td>{{ $testimonial->title }}</td>
                {{-- <td>{{ $testimonial->profession }}</td> --}}
                <td>{{ $testimonial->content }}</td>
                <td>
                    <a href=" {{ route('testimonials.edit', $testimonial) }}" class="btn btn-info">
                        <i class="fas fa-pen"></i>
                    </a>
                    <a onclick="sendDelete('{{ route('testimonials.destroy', $testimonial) }}')" href="#"
                        data-method="DELETE" data-confirm="Are you sure to delete this item?"
                        class="btn btn-danger pull-right delete">
                        <i class="fa fa-trash"></i>
                    </a>
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

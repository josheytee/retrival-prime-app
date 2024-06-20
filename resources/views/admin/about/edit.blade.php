@extends('layouts.admin')

{{-- Customize layout sections --}}

@section('subtitle', 'Site')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Site')

{{-- Content body: main page content --}}

@section('content_body')
    <form action="{{ route('site.update', ['site' => $about]) }}" method="post">
        @csrf
        @method('PUT')

        {{-- With prepend slot --}}
        <x-adminlte-input name="name" label="Name" placeholder="name" label-class="text-lightblue"
            value="{{ $about->name }}" enable-old-support disabled>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="tagline" label="Tagline" placeholder="Tagline" label-class="text-lightblue"
            value="{{ $about->tagline }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-file text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="address" label="Address" placeholder="Address" label-class="text-lightblue"
            value="{{ $about->address }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="email" label="Email" placeholder="Email" label-class="text-lightblue"
            value="{{ $about->email }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-inbox text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="phone" label="Phone Number" placeholder="Phone Number" label-class="text-lightblue"
            value="{{ $about->phone }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-phone text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="facebook" label="Facebook" placeholder="Facebook" label-class="text-lightblue"
            value="{{ $about->facebook }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <text-lightblue class="fab fa-facebook-f text-lightblue"></fab>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="instagram" label="Instagram" placeholder="Instagram" label-class="text-lightblue"
            value="{{ $about->instagram }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fab fa-instagram text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="telegram" label="Telegram" placeholder="Telegram" label-class="text-lightblue"
            value="{{ $about->telegram }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fab fa-telegram text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <x-adminlte-input name="whatsapp" label="Whatsapp" placeholder="Whatsapp" label-class="text-lightblue"
            value="{{ $about->whatsapp }}" enable-old-support>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fab fa-whatsapp text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>


        {{-- With prepend slot, sm size, and label --}}
        <x-adminlte-textarea name="description" label="Description" rows=5 label-class="text-lightblue" igroup-size="sm"
            placeholder="Insert description...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-dark">
                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                </div>
            </x-slot>
            {{ $about->description }}
        </x-adminlte-textarea>

        <x-adminlte-button class="btn-flat" type="submit" label="Update" theme="success" icon="fas fa-lg fa-save" />
    </form>
@stop

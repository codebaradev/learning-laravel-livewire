@extends('components.layouts.app')

@section('content')

<div>
    <div class="mt-4">
        {{-- <a href="{{ route('todos.create') }}" class="btn btn-primary">Create New Todo</a> --}}
    </div>

    <livewire:todos.table />

</div>

@endsection

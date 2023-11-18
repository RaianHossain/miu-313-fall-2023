<x-backend.layouts.master>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>

    <x-slot name="breadcrumb">
        <x-backend.partials.breadcrumb>
            <x-slot name="pageHeader">
                Dashboard
            </x-slot>
            <li class="breadcrumb-item active">Dashboard</li>
        </x-backend.partials.breadcrumb>
    </x-slot>
    <h1>Dashboard</h1>
</x-backend.layouts.master>
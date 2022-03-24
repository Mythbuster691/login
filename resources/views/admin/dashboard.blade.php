<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
            <ul>
                <li>
                    <a  href="{{route('admin.rusers')}}">users</a>
                    <a href="{{route('admin.projects')}}">Projects</a>
                </li>
                <li></li>
            </ul>
        </h2>

    </x-slot>




</x-app-layout>

<style>
    li{
        list-style: none;
    }
</style>

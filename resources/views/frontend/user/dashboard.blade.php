<x-guest-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-3 mt-4 bg-white rounded shadow-sm">
        You're logged in as user!
        <ul>
            <li>
                <a href="{{url('/user/createproject')}}">Add Your Projects</a>
            </li>
        </ul>
    </div>

</x-guest-layout>

<style>
    li{
        list-style-type:none;
        font-size: 20px;
    }
</style>

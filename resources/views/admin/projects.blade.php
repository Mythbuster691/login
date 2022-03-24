

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
    <h3>Showing all the registered projects here</h3>

    <br><br>
    <div class="py-3">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Start date</th>
                <th scope="col">End date</th>
                <th scope="col">Projects Manager</th>
              </tr>
            </thead>
            <tbody>



            </tbody>
          </table>
    </div>


</x-app-layout>

<style>
    li{
        list-style: none;
    }
</style>


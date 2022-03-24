

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
    <h3>showing all the registered users here</h3>

    <br><br>
    <div class="py-3">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">user created at</th>
              </tr>
            </thead>
            <tbody>
               <? $users = DB::table('users')->select('id','name','email','created_at')->get();
               ?>
                @foreach ($users as $user )
                <tr>
                  <th>{{ $user->id }}</th>
                  <td>{{ $user->name}}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach



            </tbody>
          </table>
    </div>


</x-app-layout>

<style>
    li{
        list-style: none;
    }
</style>


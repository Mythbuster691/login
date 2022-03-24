<x-guest-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container py-3 mt-4 bg-white rounded shadow-sm">
        <form action="createproject" method="POST">
            @csrf
            <div class="mb-3">
              <label for="Name" class="form-label">Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="Projectstartdatae" class="form-label">Project Start Date</label>
              <input type="date" class="form-control" id="projectstartdate">
            </div>
            <div class="mb-3">
                <label for="Projectstartdatae" class="form-label">Project End Date</label>
                <input type="date" class="form-control" id="projectenddate">
              </div>
              <div class="mb-3">
                <label for="Projectmanager" class="form-label">Project Manager</label>
                <input type="text" class="form-control" id="projectmanager" aria-describedby="emailHelp">
              </div>
            <button type="submit" class="btn btn-primary">Create Project</button>
          </form>
    </div>

</x-guest-layout>

<style>
    li{
        list-style-type:none;
        font-size: 20px;
    }
</style>



<div>
  <!-- Bootstrap Table -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Show</th>
            <th scope="col">edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($services as $service )
        <tr>
            <td>{{$service->name_service}}</td>
            <td><a type="button" class="btn btn-primary" href="{{route("show_type_category",['service_id'=>$service->id])}}">Show</a></td>
            <td><a type="button" class="btn btn-primary" href="{{route("edit_service",['id_service'=>$service->id])}}">edit</a></td>

            <td><button type="button" class="btn btn-danger" wire:click="delete_service({{$service->id}})">Delete</button></td>
        </tr>
        @endforeach


    </tbody>
</table>

</div>

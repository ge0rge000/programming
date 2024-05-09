<div>
    <!-- Bootstrap Table -->
  <table class="table">
      <thead>
          <tr>
              <th scope="col">Name</th>
              <th scope="col">Show</th>
              <th scope="col">Delete</th>
          </tr>
      </thead>
      <tbody>

          @foreach ($types as $type )
          <tr>
              <td>{{$type->name_type}}</td>
              <td><a type="button" class="btn btn-primary" href="{{route("edit_type",['type_id'=>$type->id])}}">edit</a></td>
              <td><button type="button" class="btn btn-danger" wire:click="delete_type({{$type->id}})">Delete</button></td>
          </tr>
          @endforeach


      </tbody>
  </table>

  </div>

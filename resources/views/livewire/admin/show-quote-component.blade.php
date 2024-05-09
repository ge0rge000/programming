<div>
    <!-- Bootstrap Table -->
  <table class="table">
      <thead>
          <tr>
              <th scope="col">Name</th>
              <th scope="col">email </th>
              <th scope="col">mobile </th>
              <th scope="col">service </th>
              <th scope="col">message  </th>

          </tr>
      </thead>
      <tbody>

          @foreach ($quotes as $quote )
          <tr>
              <td>{{$quote->name}}</td>
              <td>{{$quote->email}}</td>
              <td>{{$quote->mobile}}</td>
              <td>{{$quote->service}}</td>
              <td>{{$quote->message}}</td>

          </tr>
          @endforeach


      </tbody>
  </table>

  </div>

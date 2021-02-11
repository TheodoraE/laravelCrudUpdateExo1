<section class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Animal</th>
            {{-- <th scope="col">Genre</th>
            <th scope="col">Age</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach ($animals as $animal)
            <tr>
              <th scope="row">{{$animal->id}}</th>
              <td>
                <a href="/show-animal/{{$animal->id}}">{{$animal->animal}}</a>
              </td>
              {{-- <td>{{$animal->genre}}</td>
              <td>{{$animal->age}}</td> --}}
            </tr>
          @endforeach
        </tbody>
    </table>
</section>
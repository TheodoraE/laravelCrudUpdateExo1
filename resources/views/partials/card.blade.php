<section class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->animal}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$show->genre}}</h6>
          <h6>{{$show->age}}</h6>
          <a href="/edit-animal/{{$show->id}}" class="btn btn-primary">Editer</a>
          <form action="/delete-animal/{{$show->id}}" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Supprimer</button>
          </form>
        </div>
      </div>
</section>
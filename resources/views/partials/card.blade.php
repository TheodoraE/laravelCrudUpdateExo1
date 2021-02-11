<section class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->animal}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$show->genre}}</h6>
          <h6>{{$show->age}}</h6>
          <a href="#" class="btn btn-primary">Editer</a>
          <a href="/delete-animal/{{$show->id}}" class="btn btn-danger">Supprimer</a>
        </div>
      </div>
</section>
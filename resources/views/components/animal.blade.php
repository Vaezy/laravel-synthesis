<div class="animal-content">
    <a href="{{ route('animals.show', $animal->id) }}" class="animal-link">
        <img src="{{ asset('images/' . $animal->photo) }}" alt="{{ $animal->name }}" class="animal-img" />
        <h3 class="animal-name">{{ $animal->name }}</h3>
        <p class="animal-text">{{ $animal->species }}</p>
        <p class="animal-text"">{{ $animal->age }} ans</p>
        <p class="animal-text"">{{ Str::limit($animal->description, 100, '...') }}</p>
    </a>

    <div class="animal-button">
        <a href="{{ route('animals.update', $animal->id) }}">Modifier</a>
        <a href="{{ route('animals.delete', $animal->id) }}">Supprimer</a>
    </div>
</div>

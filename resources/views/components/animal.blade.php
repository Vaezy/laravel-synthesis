<div style="background: #fff; border-radius: 5px; padding: 8px;">
    <a href="{{ route('animals.show', $animal->id) }}" style="text-decoration: none; color: inherit;">
        <img src="{{ asset('images/' . $animal->photo) }}" alt="{{ $animal->name }}" style="width: 100%; border-radius: 5px;">
        <h3 style="margin: 0px; font-size: 24px;">{{ $animal->name }}</h3>
        <p style="margin: 0px;">{{ $animal->species }}</p>
        <p style="margin: 0px;">{{ $animal->age }} ans</p>
        <p style="margin: 0px;">{{ Str::limit($animal->description, 100, '...') }}</p>
    </a>

    <div style="margin-top: 10px; display: flex; justify-content: center; gap: 10px;">
        <a href="{{ route('animals.update', $animal->id) }}">Modifier</a>
        <a href="{{ route('animals.delete', $animal->id) }}">Supprimer</a>
    </div>
</div>

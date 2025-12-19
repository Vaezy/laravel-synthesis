<header style="display: flex; align-items: center; justify-content: space-between; padding: 10px;">
    <a href="{{ route('home') }}">
        <img src="{{ asset('logo.png') }}" alt="RefugeConnect" style="height: 50px;">
    </a>
    <nav style="display: flex; gap: 10px;">
        <a href="{{ route('home') }}" style="color: inherit;">Accueil</a>
        <a href="{{ route('animals.create') }}" style="color: inherit;">Ajouter un animal</a>
    </nav>
</header>

<header>




    <h1>RkJersey7</h1>
    <nav>
            <li>
                <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'font-bold' : '' }} text-blue-500 hover:text-blue-700">Home</a>
            </li>
            <li>
                <a href="{{ route('jerseys.index') }}" class="{{ Route::is('jerseys.*') ? 'font-bold' : '' }} text-blue-500 hover:text-blue-700">Jerseys</a>
            </li>
            <li>
                <a href="{{ route('nosotros') }}" class="{{ Route::is('nosotros') ? 'font-bold' : '' }} text-blue-500 hover:text-blue-700 ">Nosotros</a>
            </li>

    </nav>
</header>

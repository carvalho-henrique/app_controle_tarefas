@auth
    apenas    
    {{ Auth::user()->id }}
    {{ Auth::user()->name }}
    {{ Auth::user()->email }}
@endauth
    

@guest
    
@endguest
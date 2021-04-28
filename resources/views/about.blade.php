<a href="/">Go home</a>

I am the about page. 

@foreach($messages as $message)
    {{ $message->text }}
@endforeach

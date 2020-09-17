@foreach ($posts as $post)
        <h1>{{$post->title}}</h1>
       <p1>{{str_limit($post->content,20)}}</p1>

@endforeach
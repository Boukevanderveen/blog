<!DOCTYPE html>
<html>
@include('navbar')
    <table>
    @if(!is_null($articles))
    @foreach ($articles as $article)
    <tbody>
        <tr>
            <td class="doneTasksRow">
                {{ $article->title }}
                {{ $article->description }}
                {{ $article->author }}
                <a href="/article/{{$article->id}}"><button type="submit">Lees artikel</button> </a>
            </td>
        </tr>
    </tbody>
@endforeach
@endif
</table>
<head>
@if(Auth::Check())
@if(Auth::user()->isAdmin == 1)
<a href="/createarticleview">New Article</a>
@endif
@endif
</head>
</html>
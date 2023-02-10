<!DOCTYPE html>
<html>
@include('navbar')

    <table>
    @foreach ($users as $user)
    <tbody>
        <tr>
                {{ $user->username }}
                @if($user->isAdmin == 1 && $user->username !== Auth::user()->username)
                <form method="POST" action="/removeadmin">
                    <input type="hidden" name="id" value={{$user->id}}>
                    <button type="submit">Verwijder artikel</button>
                    @csrf
                </form>
                @endif
                @if($user->isAdmin == 0)
                <form method="POST" action="/makeadmin">
                    <input type="hidden" name="id" value={{$user->id}}>
                    <button type="submit">Geef admin privileges</button>
                    @csrf
                </form>
                @endif
        </tr>
    </tbody>
@endforeach
@endif
</table>

<head>

<a href="/createarticleview">New Article</a>
</head>
</html>
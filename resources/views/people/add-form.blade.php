@extends('default')
@section('content')
    <h1>Form for add people:</h1>
    <form method="POST" action="{{ action('PeopleController@processingRequest') }}">
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td><label for="surname">Surname</label></td>
                <td><input type="text" name="surname"></td>
            </tr>
            <tr>
                <td><label for="age">Age</label></td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td><label for="age">Gender</label></td>
                <td>
                    <input type="radio" name="gender" value="male"> Male<br>
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td><label for="age">Family</label></td>
                <td><select name="family_id">
                    <option value=""></option>
                    @for ($i = 0; $i < count($families); $i++)
                        <option value="{{$families[$i]['id']}}">{{$families[$i]['name']}}</option>
                    @endfor
                </select></td>
            </tr>
            <tr>
                <td><label for="age">Generation(поколение)</label></td>
                <td><select name="generation_id">
                        <option value=""></option>
                        @for ($j = 0; $j < count($generations); $j++)
                            <option value="{{$generations[$j]['id']}}">{{$generations[$j]['name']}}</option>
                        @endfor
                    </select></td>
            </tr>
            <tr>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <td><button type="submit">Save</button></td>
            </tr>
        </table>
    </form>
    @if ($errors->has())
        <div class="errors-block">
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span><br>
            @endforeach
        </div>
    @endif
    @if (session('messageSuccess'))
        <div class="success-block">
            <span>{{ session('messageSuccess') }}</span>
        </div>
    @endif
@stop
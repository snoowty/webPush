@section('content')
<table>
        <tr><th>Name</th><th>Main</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->msg_id}}</td>
                <td>{{$item->msg_title}}</td>
                <td>{{$item->msg_body}}</td>
                <td>{{$item->msg_clicked}}</td>
            </tr>
        @endforeach
    </table>

@endsection

    <!-- <p>{{$msg}}</p>
    @if (count($errors) > 0)
    <p>入力に問題があります。再入力してください。</p>
    @endif
    <form action="/hello" method="post">
    <table>
        @csrf
        @if ($errors->has('msg'))
        <tr><th>ERROR</th><td>{{$errors->first('msg')}}</td></tr>
        @endif
        <tr><th>Message: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
    </form> -->

    <!-- @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
        これはメッセージの表示です。
        @endslot
    @endcomponent -->
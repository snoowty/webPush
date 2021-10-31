@extends('layouts.helloapp')

@section('title', 'WEBプッシュ通知')

@section('menubar')
    @parent
    データ一覧
@endsection

@section('content')

    <table>
        <tr><th>通知文ID</th><th>タイトル</th><th>本文</th><th>クリックイベント</th><th>有効期限開始</th><th>有効期限終了</th><th>削除フラグ</th></tr>
        @foreach ($items_all as $item_all)
            <tr>
                <td>{{$item_all->msg_id}}</td>
                <td>{{$item_all->msg_title}}</td>
                <td>{{$item_all->msg_body}}</td>
                <td>{{$item_all->msg_clicked}}</td>
                <td>{{$item_all->start_date}}</td>
                <td>{{$item_all->end_date}}</td>
                <td>{{$item_all->del_flg}}</td>
            </tr>
        @endforeach
    </table>

@endsection

@section('content2')

    <table>
        <tr><th>通知文ID</th><th>タイトル</th><th>本文</th><th>クリックイベント</th></tr>
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

@section('footer')
hellooo
@endsection

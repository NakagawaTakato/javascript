@extends('layouts.app')

@section('main')
<div class="main">
    <div class="flex wrap wrapper">
        <div class="wrapper-groupTWo" id="lng">
            <input type="checkbox" id="jap" onchange="change()" checked>住所</input>
            <input type="checkbox" id="eng" onchange="change()" checked>年齢</input>
        </div>
        <table class="wrapper-table" id = "table">
            <tr>
                <th class="wrapper-table-th">氏名</th>
                <th class="wrapper-table-th" id="jap">住所</th>
                <th class="wrapper-table-th" id="eng">年齢</th>
            </tr>
            <tr>
                <td class="wrapper-table-td">山田</td>
                <td class="wrapper-table-td" id="jap">東京</td>
                <td class="wrapper-table-td" id="eng">20</td>
            </tr>
            <tr>
                <td class="wrapper-table-td">佐藤</td>
                <td class="wrapper-table-td" id="jap">神奈川</td>
                <td class="wrapper-table-td" id="eng">24</td>
            </tr>
            <tr>
                <td class="wrapper-table-td">渡辺</td>
                <td class="wrapper-table-td" id="jap">大阪</td>
                <td class="wrapper-table-td" id="eng">18</td>
            </tr>

        </table>
    </div>
</div>
        
@endsection
